<?php
//setup db connection
$db_server = "localhost";
$db_username = "root";
$db_password = "";
$db_name = "project2_2";

// Create connection
$conn = new mysqli($db_server, $db_username, $db_password, $db_name);

// Check connection
if (!$conn) {
    die("Connection failed: " . $conn->connect_error);
    //redirect to error page
}

function get_user_hash($username){
    global $conn;
    $query_string = "SELECT user_hash FROM users WHERE username='$username'";
    $query = $conn -> query($query_string);
    $result = mysqli_fetch_row($query)[0];
    return $result;
}

function create_account($username, $password, $type){
    global $conn;
    $password_sha256 = hash('sha256', $password);
    $user_hash_sha256 = hash('sha256', $username.$password);
    $query_string = "INSERT INTO users (`username`,`password`,`user_hash`,`type`) VALUES('$username', '$password_sha256', '$user_hash_sha256', '$type')";
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
//echo get_user_hash('x');
//echo user_exists('user1');

?>