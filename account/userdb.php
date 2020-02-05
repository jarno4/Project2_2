<?php
error_reporting(E_ALL);
//setup db connection
$db_server = "127.0.0.1";
$db_username = "root";
$db_password = "namaste";
$db_name = "project2_2";

$conn = new mysqli($db_server, $db_username, $db_password, $db_name);

function get_user($username){
    global $conn;
    $query_string = "SELECT password, type, request, registered FROM users WHERE username='$username'";
    $query = $conn -> query($query_string) or $query=false;
    if($query){
        $result = mysqli_fetch_row($query);
        if($result){
            return $result;
        }
    }
    return false;
}

function create_account($username, $password, $type){
    global $conn;
    $password_sha256 = hash('sha256', $password);
    $request = ($type==1 ? 1:0);
    $query_string = "INSERT INTO users (`username`,`password`,`type`,`request`) VALUES('$username', '$password_sha256', '$type', '$request')";
    $result = $conn -> query($query_string);
    return $result;
}

function approve_teacher($username){
    global $conn;
    $query_string = "UPDATE users SET request=0 WHERE username='$username'";
    $query = $conn -> query($query_string);
}
function decline_teacher($username)
{
    global $conn;
    $query_string = "DELETE FROM users WHERE username='$username'";
    $query = $conn->query($query_string);
}
function pending_approval(){
    global $conn;
    $query_string = "SELECT username FROM users WHERE request = 1";
    $query = $conn -> query($query_string);
    $result = $query;
    return $result;
}
function login($username){
    if (session_status() == PHP_SESSION_NONE) {
        session_start();
    }
    $_SESSION["username"] = $username;
    return true;
}

//create_account("user1","pass1",0);
//print_r(get_user('test123'));
//echo user_exists('user1');

?>