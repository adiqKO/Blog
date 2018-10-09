<!DOCTYPE html>
<html lang="pl-PL">
<head>
    <?php require_once('config.php');?>
    <?php require_once 'includes/header.php'?>
    <title>Rejestracja</title>
</head>
<body>
    <?php require_once 'includes/navigation.php'?>
    <div class="container my-5">
        <div class="col-sm-6 col-md-3">
            <form method="post" action="register.php">
            <input type="text" class="form-control" name="username" placeholder="Nazwa użytkownika"><br />
            <input type="email" class="form-control" name="email" placeholder="E-mail"><br />
            <input type="password" class="form-control" name="pass_1" placeholder="Hasło"><br />
            <input type="password" class="form-control" name="pass_2" placeholder="Potwierdzenie hasła"><br />
            <button type="submit" class="btn btn-success" name="confirm">Zarejestruj</button>
            </form>
        </div>
    </div>
    <?php require_once 'includes/footer.php'?>
</body>
</html>