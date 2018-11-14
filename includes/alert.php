
<div class="alert alert-danger alert-dismissible fade show" role="alert">
    <?php getAlert($_GET['error']); ?>
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
</div>

<?php
/**
 * Created by PhpStorm.
 * User: Daily
 * Date: 31.10.2018
 * Time: 23:14
 */

function getAlert($alert){

    switch($alert){
        case 'username': echo "Nazwa użytkownika jest niepoprawna.";
            break;
        case 'email': echo "Email wygląda na niepoprawny.";
            break;
        case 'pass': echo "Hasło jest zbyt krótkie.";
            break;
        case 'equal': echo "Hasła nie są takie same."  ;
            break;
        case 'fail': echo "Taki użytkownik już istnieje."  ;
            break;
        case 'unsuccess': echo "Nieudane logowanie.";
            break;
    }

}
