<?php  

    $con = mysqli_connect('localhost','root','','PHP');
    if($con){

        $id = $_REQUEST['delete'];

        $sql = "DELETE FROM crud WHERE id = '$id'";

        $result = mysqli_query($con,$sql);

        if($result){
           
            header('location:display.php');
        }
    }
?>