<?php
/**
 * Created by PhpStorm.
 * User: Akshaya Krishnaswamy
 * Date: 9/24/2016
 * Time: 2:05 PM
 */

$servername = "localhost";
$username1 = "root";
$password1 = "";
$db_name = 'demo';

//Create connection


/*
$this->db->select('username'); /// select username
$this->db->from('user'); // from user
$query = $this->db->get();

$result = $query->result();
foreach($result as $row) {
    if ($row->username == $username) {
        $response['message2'] = "User exists";
    } else {
        $response['message2'] = "User does not exist";
    }
}
*/
// Check connection



$username = $_POST['username'];
$password = $_POST['password'];
$response = array();

$isError = false;

if(!$username && !$password){
    $isError = true;
    $response['message'] = "Enter a username and password";
}
if (!$username && !$isError) {
    $isError = true;
    $response['message'] = "Enter a username";
}
if (!$password && !$isError) {
    $isError = true;
    $response['message'] = "Enter a password";
}

if(!$isError) {
    $response['message']="Okay";
}
$conn = new mysqli($servername, $username1, $password1, $db_name);
// $sql = "SELECT username from  `user` where `username` = '".$username."'";

$query = mysqli_query($conn, "SELECT username from  `user` where `username` = '".$username."'");

if($query->num_rows){
    $response['message2'] = "User exists";
    header('Location: /test/views/welcome.php');
}
else {
    $response['message2'] = "User does not exist";
}

/*while ( $result = $query->fetch_array(MYSQLI_ASSOC)){

    if ($result['username'] == $username) {

        $response['message2'] = "User exists";
    }
    else {
        $response['message2'] = "User does not exist";
    }

}*/

echo json_encode($response);
