<!DOCTYPE html>
<html>
<head>
    <?php require_once('config.php') ?>
    <?php require_once( ROOT_PATH . '/includes/public_functions.php') ?>
    <?php require_once 'includes/header.php'?>
    <?php
    if(isset($_GET['post-slug'])) {
        $post = getPost($_GET['post-slug']);
    }
    ?>
    <title><?php echo $post['title']?></title>
</head>
<body>

    <div class="navigation">
        <?php require_once 'includes/navigation.php'?>
    </div>


    <div>
        <?php echo $post['title']; ?>
    </div>

    <div>
        <?php echo html_entity_decode($post['body']); ?>
    </div>

<div class="footer">
    <p>BlogTest &copy; <?php echo date('Y'); ?></p>
</div>
</body>
</html>