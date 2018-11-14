<?php
if(!isset($_SESSION['userId'])){
    header("Location: ../index.php");
    exit();
}else{
    require_once 'includes/Dbs.php';
    $db = new Dbs();
    $posts = $db->getAllPosts();
}
?>

<div class="col-sm-12 col-md-12 col-xl-9 my-3">
    <div style="overflow-x:auto;">
        <table class="table">
            <thead style="background-color: #9F4141; color:white;">
            <tr>
                <th scope="col">#</th>
                <th scope="col">Tytuł</th>
                <th scope="col">Wyświetlenia</th>
                <th scope="col">Autor</th>
                <th scope="col">Opublikowany</th>
                <th scope="col">Data dodania</th>
            </tr>
            </thead>
            <tbody>
            <?php $i = 1;
            foreach($posts as $post): ?>
                <tr>
                    <th scope="row"><?php echo $i?></th>
                    <td><?php echo $post['title']?></td>
                    <td><?php echo $post['views']?></td>
                    <td><?php echo $post['username']?></td>
                    <td> <?php echo ($post['published']== 1) ?  'Tak' : 'Nie'; ?></td>
                    <td> <?php echo $post['created_at']?></td>
                </tr>
                <?php $i++?>
            <?php endforeach;?>
            </tbody>
        </table>
    </div>
</div>
