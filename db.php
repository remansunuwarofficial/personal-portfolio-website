<?php
$host = "localhost";
$user = "root";
$password = "";

$conn = mysqli_connect($host, $user, $password);
#to check wheather connection was successful or not
/*
if($conn){
    echO "Successfully connected";
}else{
    die("Connection failed" . mysqli_connect_error());
}
*/
// to create database
// $sql = "CREATE DATABASE noor";
// $result = mysqli_query($conn, $sql);
/*
if(!$result){
    die("SQL query unsuccessful");
}else{
    echo "Success";
}

*/

#to create table

/*
$sql = "CREATE TABLE `noor`.`contact` (
    `id` INT AUTO_INCREMENT,
     `name` VARCHAR(40),
      `email` VARCHAR(40), 
      `phone` VARCHAR(15), 
      `message` TEXT,
       PRIMARY KEY(`id`)
)";

$result = mysqli_query($conn, $sql);
if($result){
    echo "Success";
}else{
    die("Failed" . mysqli_error($conn));
}
*/

$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$message = $_POST['message'];

$sql = "INSERT INTO `noor`.`contact` (`id`, `name`, `email`, `phone`, `message`) VALUES (NULL, '$name', '$email', '$phone', '$message');";

$result = mysqli_query($conn, $sql);
if($result){
    header("Location:contact.html");
}else{
    echo "Failed" . mysqli_error($conn);
}

?>