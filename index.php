<!DOCTYPE html>
<html lang="pl-PL">
<head>
    <?php require_once('config.php') ?>
    <?php require_once( ROOT_PATH . '/includes/public_functions.php') ?>
    <?php require_once 'includes/header.php'?>
    <title>Strona główna</title>
</head>
    <body>
        <?php require_once 'includes/navigation.php'?>
        <div class="container my-5 ">
            <div class="row">
                <div class="col-xl-8 ">
                    <div class="row col-xl-12 mx-auto ">
                        <?php $posts =getPublishedPosts(); ?>
                        <?php foreach ($posts as $post): ?>
                            <div class="col-sm-6" >
                                <img src="<?php echo BASE_URL . 'static/images/' . $post['image']; ?>" class="img-thumbnail" alt=""  >
                                <a href="single_post.php?post-slug=<?php echo $post['slug']; ?>">
                                    <div class="post_info">
                                        <h3 class="text-dark"><?php echo $post['title'] ?></h3>
                                        <div class="info">
                                            <span class="text-dark"><?php echo date("F j, Y ", strtotime($post["created_at"])); ?></span>
                                            <span class="text-dark">Czytaj więcej...</span>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        <?php endforeach ?>
                    </div>
                </div>

                <div class="col-xl-4 text-center " style="background-color: #D4D7D1">
                    <h4 class="my-3">Poznaj mnie</h4>
                    <img src="<?php echo BASE_URL . 'static/images/avatar.png'; ?>" class="img-thumbnail my-2" style="height:50%" alt=""  >
                    <p>Cześć, tu Ania. Jestem studentką dietetyki i uwielbiam zdrowy tryb życia. Moją misją jest przekonanie
                    ludzi, że zdrowy tryb życia może zmienić życie o 180 stopni...</p>
                </div>
            </div>

                <?php /*$posts = getPostTopic(1);

                    foreach($posts as $post){
                         echo $post['title'];
                    }
                    */
                ?>
        </div>

            <?php require_once 'includes/footer.php'?>
    </body>
</html>