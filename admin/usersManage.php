<?php
    if(!isset($_SESSION['userId'])){
        header("Location: ../index.php");
        exit();
    }else{
        require_once 'includes/Dbs.php';
        $db = new Dbs();
        $users = $db->getAllUsers();
    }
?>

<div class="col-sm-12 col-md-12 col-xl-9 my-3">
    <div style="overflow-x:auto;">
    <table class="table">
        <thead style="background-color: #2da847; color:white;">
        <tr>
            <th scope="col">#</th>
            <th scope="col">Login</th>
            <th scope="col">E-Mail</th>
            <th scope="col">Liczba postów</th>
            <th scope="col">Rola</th>
            <th scope="col">Data dołączenia</th>
        </tr>
        </thead>
        <tbody>
        <?php $i = 1;
        foreach($users as $user): ?>
        <tr>
            <th scope="row"><?php echo $i?></th>
            <td><?php echo $user['username']?></td>
            <td><?php echo $user['email']?></td>
            <td><?php echo $user['amount']?></td>
            <td> <?php echo $user['role']?></td>
            <td> <?php echo $user['created_at']?></td>
        </tr>
        <?php $i++?>
        <?php endforeach;?>
        </tbody>
    </table>
    </div>
</div>
