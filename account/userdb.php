<?php
//setup db connection
$servername = "localhost";
$username = "root";
$password = "namaste";
$database = "project2_2";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $database);

// Check connection
if (!$conn) {
    die("Connection failed: " . $conn->connect_error);
    //redirect to error page
}

function get_user_hash($username){
    global $conn, $table;
    $query_string = "SELECT user_hash FROM users WHERE username='$username'";
    $query = mysqli_query($conn, $query_string);
    $result = mysqli_fetch_row($query)[0];
    return $result;
}

function create_account($username, $password, $type){
    global $conn, $table;
    echo $password_sha256 = hash('sha256', $password);
    echo "<br>";
    echo $user_hash_sha256 = hash('sha256', $username.$password);
    $query_string = "INSERT INTO users (`username`,`password`,`user_hash`,`type`) VALUES('$username', '$password_sha256', '$user_hash_sha256', '$type')";
    $query = mysqli_query($conn, $query_string);
    //if no errors
    return true;
}
//create_account("user1","pass1",0);
//echo get_user_hash('x');

?>