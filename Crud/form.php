<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
<form method="POST">
<div class="container my-5">
  <div class="mb-1">
    <label>Name</label>
    <input type="text" class="form-control" placeholder="Enter Your Name" name="name" autocomplete="off" >
  </div>
  <div class="mb-2">
    <label>Gmail</label>
    <input type="text" class="form-control" placeholder="Enter Your Gmail" name="gmail" autocomplete="off">
  </div>
  <div class="mb-3">
    <label>Phone</label>
    <input type="text" class="form-control" placeholder="Enter Your Number" name="phone" autocomplete="off">
  </div>
  <div class="mb-4">
    <label>Password</label>
    <input type="password" class="form-control" placeholder="Enter Your password" name="password" autocomplete="off">
  </div>
  <button type="submit" name="submit" class="btn btn-outline-primary"">Submit</button>
</div>
</form>
</body>
</html>

<?php
include('connection.php');
if(isset($_POST['submit']))
{
  $Name = $_POST['name'];
  $Gmail = $_POST['gmail'];
  $Phone = $_POST['phone'];
  $Password = $_POST['password'];

  $sql = "INSERT INTO Crud (Name,Gmail,Phone,Password) VALUES ('$Name','$Gmail','$Phone','$Password')";
  if(mysqli_query($conn,$sql)){
    echo "<script>alert('Data Inserted')</script>";
    echo "<script>window.location.href='home.php';</script>";
  }
  mysqli_close($conn);
}
?>