<?php
    session_start();
    if(!isset($_SESSION['userId'])){
        header("Location: index.php");
        exit();
    }
?>
<!DOCTYPE html>
<html lang="pl-PL">
<head>
    <?php require_once('config.php');?>
    <?php require_once 'includes/header.php' ?>
    <title>Panel administracyjny</title>
</head>
<body>
    <?php require_once 'admin/userNav.php'?>
    <?php require_once 'includes/navigation.php' ?>

    <div class="container py-4 px-4">
        <div class="row">
            <img class="ml-3 mr-2" src="<?php echo BASE_URL . 'static/images/key.png' ?>" width="35px" height="35px" alt="">
            <h3>Panel administracyjny</h3>
        </div>
        <div class="row">
            <?php require_once 'admin/adminNav.php' ?>
            <?php
                if(isset($_GET['page'])) {
                    switch ($_GET['page']) {
                        case 'add':
                            require_once 'add.php';
                            break;
                        case 'users':
                            require_once 'admin/usersManage.php';
                            break;
                    }
                }
            ?>
        </div>
    </div>
    <?php require_once 'includes/footer.php' ?>
</body>
</html>