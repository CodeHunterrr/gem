<?php


$con = mysqli_connect('localhost', 'root');

// if($con){
//     echo "Connection Successful";
// }else{
//     echo "No Connection";
// } 

mysqli_select_db($con, 'gemdata');


$user = $_POST['user'];
$email = $_POST['email'];
$message = $_POST['message'];

$query = " insert into  userformsubmissiondata (user, email, message) values('$user', '$email', '$message')";

mysqli_query($con, $query); 

header('location: form.php');

?>