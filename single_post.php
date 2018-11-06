<!DOCTYPE html>
<html>
<head>
    <?php require_once('config.php') ?>
    <?php require_once( ROOT_PATH . '/includes/public_functions.php') ?>
    <?php require_once 'includes/header.php'?>
    <?php require_once 'includes/Dbs.php'?>
    <?php
        if(isset($_GET['post-slug'])) {
            $post = getPost($_GET['post-slug']);
        }
        else{
            header("Location: index.php");
        }
    ?>
    <title><?php echo $post['title']?></title>
</head>
<body>
    <?php require_once 'includes/navigation.php'?>
    <div class="container">
        <div>
            <?php echo "<h2>".$post['title']."</h2>"; ?>
        </div>
        <div>
            <?php echo html_entity_decode($post['body']); ?>
        </div>
    </div>
    <?php require_once 'includes/footer.php'?>
</body>
</html>