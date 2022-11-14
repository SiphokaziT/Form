<?php

$dbServername = "localhost";
$username = "root";
$dbpassword = "";
$db = "form";

//Database Connection
$con = new mysqli($dbServername,$username,$dbpassword,$db);

if (!$con){
    echo "There are some problems while connecting the database";
}

//adding data to the database

$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['Phone'];
$msg = $_POST['msg'];

$qry = "INSERT INTO `table1`(`name`, `email`, `phone`, `msg`) VALUES ('$name','$email','$phone','$msg')";

$insert = mysqli_query($con,$qry);
if (!$insert){
    echo "There are some problems while connecting the database";
}
else{
    echo "data added";
}

?>