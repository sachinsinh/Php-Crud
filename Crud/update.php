<?php
include('connection.php');

if(isset($_GET['Uid'])){
    $id = $_GET['Uid'];
    $sql = "SELECT * FROM `Crud` WHERE Id = $id";
    $data = mysqli_query($conn,$sql);
    $row = mysqli_fetch_assoc($data);
        $Name = $row['Name'];
        $Gmail = $row['Gmail'];
        $Phone = $row['Phone'];
        $Password = $row['Password'];

    if(isset($_POST['submit'])){
        $Name = $_POST['name'];
        $Gmail = $_POST['gmail'];
        $Phone = $_POST['phone'];
        $Password = $_POST['password'];
      
        $sql = "UPDATE `Crud` SET `Id`='$id',`Name`='$Name',`Gmail`='$Gmail',`Phone`='$Phone',`Password`='$Password' WHERE Id=$id";
        if(mysqli_query($conn,$sql)){
          echo "<script>alert('Record Updated Successfully')</script>";
          echo "<script>window.location.href='home.php';</script>";
        }
        mysqli_close($conn);
    }
}



?>
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
    <input type="text" class="form-control" placeholder="Enter Your Name" name="name" value="<?php echo $Name;?>" autocomplete="off" >
  </div>
  <div class="mb-2">
    <label>Gmail</label>
    <input type="text" class="form-control" placeholder="Enter Your Gmail" name="gmail" value="<?php echo $Gmail;?>" autocomplete="off">
  </div>
  <div class="mb-3">
    <label>Phone</label>
    <input type="text" class="form-control" placeholder="Enter Your Number" name="phone" value="<?php echo $Phone;?>" autocomplete="off">
  </div>
  <div class="mb-4">
    <label>Password</label>
    <input type="password" class="form-control" placeholder="Enter Your password" name="password" value="<?php echo $Password;?>" autocomplete="off">
  </div>
  <button type="submit" name="submit" class="btn btn-outline-primary"">Submit</button>
</div>
</form>
</body>
</html>