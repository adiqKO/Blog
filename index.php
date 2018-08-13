<!DOCTYPE html>
<html lang="pl-PL">
<head>
    <?php require_once('config.php') ?>
    <?php require_once( ROOT_PATH . '/includes/public_functions.php') ?>
    <?php require_once 'includes/header.php'?>
    <title>Strona główna</title>
</head>
    <body>
        <div class="container">
            <div class="navigation">
                <?php require_once 'includes/navigation.php'?>
            </div>

            <div class="content">
                <?php $posts =getPublishedPosts(); ?>
                <?php foreach ($posts as $post): ?>
                    <div class="post" style="margin-left: 0px;">
                        <img src="<?php echo BASE_URL . '/static/images/' . $post['image']; ?>" class="post_image" alt="">
                        <a href="single_post.php?post-slug=<?php echo $post['slug']; ?>">
                            <div class="post_info">
                                <h3><?php echo $post['title'] ?></h3>
                                <div class="info">
                                    <span><?php echo date("F j, Y ", strtotime($post["created_at"])); ?></span>
                                    <span class="read_more">Read more...</span>
                                </div>
                            </div>
                        </a>
                    </div>
                <?php endforeach ?>

                <?php $posts = getPostTopic(1);

                    foreach($posts as $post){
                         echo $post['title'];
                    }

                ?>
            </div>

            <div class="footer">
                <p>BlogTest &copy; <?php echo date('Y'); ?></p>
            </div>

        </div>
    </body>
</html>