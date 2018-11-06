<?php
    session_start();
    if(isset($_SESSION['userId'])) {
        header("Location: index.php");
        exit();
    }
?>

<!DOCTYPE html>
<html lang="pl-PL">
<head>
    <?php require_once('config.php');?>
    <?php require_once 'includes/header.php'?>
    <title>Logowanie</title>
</head>
<body>
<?php require_once 'includes/navigation.php'?>
<div class="container my-5">
    <?php if(isset($_GET['error'])){require_once 'includes/alert.php';}
    else if(isset($_GET['message'])){require_once 'includes/message.php';}?>
    <div class="col-sm-6 col-md-3">
        <form method="post" action="login.php">
            <input type="email" class="form-control" name="email" placeholder="E-mail"><br />
            <input type="password" class="form-control" name="pass" placeholder="Hasło"><br />
            <button type="submit" class="btn btn-success btn-block" name="confirm">Zaloguj się</button>
        </form>
    </div>
</div>
<?php require_once 'includes/footer.php'?>
</body>
</html>