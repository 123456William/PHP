<?php
$con = mysqli_connect('localhost','root','','PHP');

if($con){
    $name = $_REQUEST['name'];
    $email = $_REQUEST['email'];
    $address = $_REQUEST['address'];
    $contact = $_REQUEST['contact'];
    
  $sql =  "INSERT INTO crud Values('', '$name', '$email', '$address', '$contact')";

  $result = mysqli_query($con,$sql);
  if($result){
    header('location:display.php');
  }
}

?>