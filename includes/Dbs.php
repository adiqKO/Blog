<?php
/**
 * Created by PhpStorm.
 * User: Daily
 * Date: 10.10.2018
 * Time: 21:05
 */

class Dbs
{
    private $hostname;
    private $username;
    private $password;
    private $dbsname;
    private $charset;
    private $stmt;

    public function __construct()
    {
        $this->stmt = $this->connect();
    }

    protected function connect()
    {
        $this->hostname = "localhost";
        $this->username = "root";
        $this->password = "";
        $this->dbsname = "blogtest";
        $this->charset = "utf8";

        try{
            $dsn = "mysql:host=".$this->hostname.";dbname=".$this->dbsname.";charset=".$this->charset;
            $db = new PDO($dsn, $this->username, $this->password, [
                PDO::ATTR_EMULATE_PREPARES => false,
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
            ]);
            return $db;
        }catch(PDOException $err){
            exit('Database connection failed.');
        }
    }

    public function addUser($username, $email, $role, $password){

        if($this->checkUser($username, $email,$password) == 0){
            $query = $this->stmt->prepare(
                'INSERT INTO users(username, email, role, password) VALUES (:username, :email, :role, :pass)');
            $query->bindValue(':username', $username, PDO::PARAM_STR);
            $query->bindValue(':email', $email, PDO::PARAM_STR);
            $query->bindValue(':role', $role, PDO::PARAM_STR);
            $query->bindValue(':pass', $this->codePassword($password), PDO::PARAM_STR);
            $query->execute();
            return true;
        }else{
            return false;
        }
    }

    public function logUser($email, $password){
        $query = $this->stmt->prepare('SELECT id, username, role, password FROM users WHERE email =:email');
        $query->bindValue('email', $email, PDO::PARAM_STR);
        $query->execute();
        $result = $query->fetch();
        if(!empty($result)) {
            return (password_verify($password, $result['password']) === true) ? $result : false;
        }
        else{
            return false;
        }
    }

    public function addToNews($email){

        $query = $this->stmt->prepare('INSERT INTO newsletter(email) VALUES (:email)');
        $query->bindValue(':email', $email, PDO::PARAM_STR);
        $query->execute();
    }

    private function checkUser($username, $email){
        $query = $this->stmt->prepare('SELECT username FROM users WHERE username = :username OR email = :email ');
        $query->bindValue(':username', $username, PDO::PARAM_STR);
        $query->bindValue(':email', $email, PDO::PARAM_STR);
        $query->execute();
        return $query->rowCount();
    }

    private function codePassword($password){
        return password_hash($password, PASSWORD_DEFAULT);
    }

    public function getAllUsers(){
        $query = $this->stmt->prepare('SELECT username, email, role, DATE(created_at) AS created_at, 
                            (SELECT COUNT(posts.id) FROM posts WHERE users.id = posts.user_id) AS amount FROM users');
        $query->execute();
        return $query->fetchAll();
    }

    public function getAllPosts(){
        $query = $this->stmt->prepare('SELECT posts.title, posts.views, posts.published, 
        DATE(posts.created_at) AS created_at, users.username FROM posts INNER JOIN users ON posts.user_id = users.id');
        $query->execute();
        return $query->fetchAll();
    }
}