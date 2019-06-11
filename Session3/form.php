<?php
$server_username = "root";
$server_password = "";
$server_host = "localhost";
$database = 'Session3';

$conn = mysqli_connect($server_host,$server_username,$server_password,$database) or die ("khong the ket noi toi database");
mysqli_query($conn,"SET NAMES 'UTF8'");
?>

<?php
if (isset($_POST["btn_submit"])){
    $username = $_POST["username"];
    $password = $_POST["password"];
    
}
?>

