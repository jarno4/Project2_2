<?php
//check user integrity
    //compare db user hash with cookie hash
        // if false -> destroy session

//require userdb.php
//require user_session.php

//$username; //get from cookie
$local_hash; //get from cookie
$db_hash; //get the corresponding hash from db

if($local_hash != $db_hash){
    //session.destroy()
}

?>