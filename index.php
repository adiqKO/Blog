<!DOCTYPE html>
<html lang="pl-PL">
<head>
    <?php require_once('config.php') ?>
    <?php require_once( ROOT_PATH . '/includes/public_functions.php') ?>
    <?php require_once 'includes/header.php'?>
    <title>Strona główna</title>
</head>
    <body>
        <?php
        session_start();
            if(isset($_SESSION['userId'])){
                require_once 'admin/userNav.php';
            }
        ?>
        <?php require_once 'includes/navigation.php'?>
        <?php require_once 'includes/slide_photo.php' ?>
        <div class="container">
            <div class="row">
                <div class="col-xl-7 mt-5">
                    <div class="row  ">
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

                <div class="col-xl-4 mt-5 mx-auto text-center" style="background-color: #E9E9E9">
                    <h4 class="my-3">Poznaj mnie</h4>
                    <img src="<?php echo BASE_URL . 'static/images/avatar.png'; ?>" class="img-thumbnail my-2" style="height:50%" alt=""  >
                    <p>Cześć, tu Ania. Jestem studentką dietetyki i uwielbiam zdrowy tryb życia. Moją misją jest przekonanie
                    ludzi, że zdrowy tryb życia może zmienić życie o 180 stopni...</p>
                </div>
            </div>
        </div>

        <div class="mt-5" style="background-color: #99CC33; height:300px;">
            <div class="container">
                <a name="newsletter"></a>
                <div class="row">
                    <div class="col-xl-3" >
                        <h4 class="my-3">Newsletter</h4>
                        <form method="post" class="mb-5" action="newsletter.php">
                            <input type="email" class="form-control" name="email" placeholder="E-mail"><br />
                            <button type="submit" class="btn btn-dark btn-block" name="confirm">Zapisz</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
            <?php require_once 'includes/footer.php'?>
    </body>
</html>