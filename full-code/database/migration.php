<?php

$conn = mysqli_connect("localhost","root","");
if($conn){
echo mysqli_error($conn);
}
 
 $sql = "CREATE DATABASE IF NOT EXISTS todo_app";
 $result =  mysqli_query($conn, $sql);

echo mysqli_error  ($conn);


mysqli_close($conn);

$conn = mysqli_connect ("localhost","root","","todo_app");
if(!$conn){
echo mysqli_error($conn);
}
 
    $sql ="CREATE TABLE if not exists tasks(
        `id` INT PRIMARY KEY AUTO_INCREMENT,
        `title` VARCHAR(200) NOT NULL
        )";


 $result =  mysqli_query($conn, $sql);

echo mysqli_error  ($conn);


mysqli_close($conn);

