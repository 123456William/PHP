<?php
$con = mysqli_connect('localhost','root','','PHP');
if($con){
$id = $_REQUEST['edit'];

$name = $_REQUEST['name'];
$email = $_REQUEST['email'];
$address= $_REQUEST['address'];
$contact = $_REQUEST['$contact'];


$sql = "UPDATE `crud` SET `name`='$name',`email`= '$email', `address`= '$address', `contact`= '$contact' WHERE id = '$id'";

$result = mysqli_query($con,$sql);


if($result){
header('location:Display.php');

}
}
