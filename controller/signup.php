<?php
/**
 * Created by PhpStorm.
 * User: Akshaya Krishnaswamy
 * Date: 9/25/2016
 * Time: 12:54 PM
 */

$servername = "localhost";
$username1 = "root";
$password1 = "";
$db_name = 'demo';

$sUserName = $_POST['sUserName'];
$sPassword = $_POST['sPassword'];
$data = array();

if(!preg_match("/^[a-zA-Z0-9]{8,15}$/", $sPassword)){
    $data['message']="The password must be at least 8-15 characters with letters and numbers ";
}
else {
    $conn = new mysqli($servername, $username1, $password1, $db_name);
    $query = mysqli_query($conn, "SELECT username from  `user` where `username` = '" . $sUserName . "'");
    if ($query->num_rows) {
        $data['message'] = "User exists";
    } else {

        $sql = "INSERT INTO user (username,password,created) VALUES ('$sUserName','$sPassword',now())";
        echo $sql;
        if (mysqli_query($conn, $sql)) {

            $data['message'] = "Account created successfully";

        } else {

            $data['message'] = "Account not created successfully";
        }

    }
}

echo json_encode($data);



