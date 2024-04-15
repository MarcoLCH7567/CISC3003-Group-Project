<?php
if (trim($_POST['Password']) != trim($_POST['Repassword'])) {   
    exit('password is not same!');   
}
$PhoneNumber = (trim($_POST['PhoneNumber']));
$Password = (trim($_POST['Password']));
$conn = mysqli_connect('localhost', 'root', '');
if (mysqli_errno($conn)) {    
    echo mysqli_error($conn); 
    exit;
}
mysqli_query($conn, "CREATE DATABASE IF NOT EXISTS 1_db");
mysqli_select_db($conn, '1_db'); 
mysqli_query($conn, "CREATE TABLE IF NOT EXISTS `1_db`.`user` (`PhoneNumber` INT(8) NOT NULL , `Password` VARCHAR(255) NOT NULL , `Username` VARCHAR(255) NOT NULL , `icon_link` VARCHAR(255) NOT NULL , PRIMARY KEY (`PhoneNumber`)) ENGINE = InnoDB;");
mysqli_set_charset($conn, 'utf8'); 
$sql = "insert into user (PhoneNumber,Password) values('$PhoneNumber','$Password')";
$result = mysqli_query($conn, $sql);
if ($result) {
    header('Location:logo.html');#jump to login html
} else {
    echo 'Signup failed!';  
}
?>