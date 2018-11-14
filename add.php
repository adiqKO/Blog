<?php
    if(!isset($_SESSION['userId'])){
        header("Location: index.php");
        exit();
    }
?>

<div class="col-sm-12 col-md-4 my-3">
    <?php
        if(isset($_GET['error'])){
            require_once 'includes/alert.php';}
        else if(isset($_GET['message'])) {
            require_once 'includes/message.php';}
    ?>
    <form method="post" action="register.php">
        <input type="text" class="form-control" name="username" placeholder="Nazwa użytkownika"><br />
        <input type="email" class="form-control" name="email" placeholder="E-mail"><br />
        <input type="password" class="form-control" name="pass_1" placeholder="Hasło"><br />
        <input type="password" class="form-control" name="pass_2" placeholder="Potwierdzenie hasła"><br />
        <div class="form-group">
            <label for="exampleFormControlSelect1">Uprawnienia</label>
            <select name="role" class="form-control" id="exampleFormControlSelect1">
                <option value="Author">Autor</option>
                <option value="Moderator">Moderator</option>
            </select>
        </div>
        <button type="submit" class="btn btn-success btn-block" name="confirm">Zarejestruj</button>
    </form>
</div>
<div class="col-md-4 my-2 mx-auto text-center">
    <img class=" w-50" src="static/images/plus.png">
    <p class="my-3">Masz do wyboru dwa rodzaje uprawnień. Autor może tworzyć wpisy na blogu oraz tematy postów,
        nie ma możliwości publikacji postów. Moderator może publikować oraz edytować posty.
    </p>
</div>
