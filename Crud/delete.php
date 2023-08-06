<?php
include('connection.php');
if(isset($_GET['Did'])){
    $id = $_GET['Did'];
    $sql = "DELETE FROM `Crud` WHERE Id = $id";
    $data = mysqli_query($conn,$sql);
    if($data){
        echo "<script>alert('Record deleted successfully');</script>";
        echo "<script>window.location.href='home.php';</script>";
    }else{
        echo "<script>alert('Record Not deleted ');</script>";
    }
}
?>

