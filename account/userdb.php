<?php
//setup db connection
$db_server = "127.0.0.1";
$db_username = "root";
$db_password = "namaste";
$db_name = "project2_2";

// Create connectionS
$conn = new mysqli($db_server, $db_username, $db_password, $db_name);

// Check connection
if (!$conn) {
    die("Connection failed: " . $conn->connect_error);
    //redirect to error page
}

function get_user_hash($username){
    global $conn;
    $query_string = "SELECT user_hash, request FROM users WHERE username='$username'";
    $query = $conn -> query($query_string);
    $result = mysqli_fetch_row($query);
    return $result;
}

function create_account($username, $password, $type){
    global $conn;
    $password_sha256 = hash('sha256', $password);
    $user_hash_sha256 = hash('sha256', $username.$password);
    $request = 0;
    if($type==1){
        $request = 1;
    }
    $query_string = "INSERT INTO users (`username`,`password`,`user_hash`,`type`,`request`) VALUES('$username', '$password_sha256', '$user_hash_sha256', '$type', '$request')";
    $result = $conn -> query($query_string);
    return $result;
}

function user_exists($username){
    global $conn;
    $query_string = "SELECT count(id) FROM users WHERE username='$username'";
    $query = $conn -> query($query_string);
    $result = mysqli_fetch_row($query)[0];
    return $result;
}

//create_account("user1","pass1",0);
//print_r(get_user_hash('user1'));
//echo user_exists('user1');

?>