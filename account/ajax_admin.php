<?php
/**
 * Created by PhpStorm.
 * User: Bram
 * Date: 31-1-2020
 * Time: 11:11
 */
?>
<?php
require 'userdb.php';

if(isset($_POST['action']) && isset($_POST['naam']) ) {
    switch($_POST['action']) {
        case 'accept':
            approve_teacher($_POST['naam']);
            break;

        case 'discard':
            decline_teacher($_POST['naam']);
            break;
    }
    echo "{\"status\":\"ok\"}";
}
?>
