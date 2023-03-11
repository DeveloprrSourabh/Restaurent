<?php
$username = "root";
$servername = "localhost";
$password = "";
$database = "user_data";

$conn = mysqli_connect($servername,$username,  $password, $database);
if(!$conn){
    die("Not");
// }else{
//     echo "Successfully Connect!";
}
?>