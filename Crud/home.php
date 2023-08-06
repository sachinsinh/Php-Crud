<?php
include('connection.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HomePage</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
</head>
<body>
    <div class="container">
    <button type="button" class="btn btn-outline-primary my-5"><a href="form.php" >Add User</a></button>
    <table class="table table-bordered border-primary">
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Name</th>
      <th scope="col">Gmail</th>
      <th scope="col">Phone</th>
      <th scope="col">Password</th>
      <th scope="col">Operation</th>
    </tr>
  </thead>
  <tbody>
<?php
    $sql = "SELECT * FROM `Crud`";
    $result = mysqli_query($conn,$sql);
    if($result){
        while($row=mysqli_fetch_assoc($result)){
            $Id = $row['Id'];
            $Name = $row['Name'];
            $Gmail = $row['Gmail'];
            $Phone = $row['Phone'];
            $Password = $row['Password'];
            echo "
            <tr>
                <td>$Id</td>
                <td>$Name</td>
                <td>$Gmail</td>
                <td>$Phone</td>
                <td>$Password</td>
                <td>
                <button class='btn btn-outline-success'><a href='update.php?Uid=$Id'>Update</a></button>
                <button class='btn btn-outline-danger'><a href='delete.php?Did=$Id'>Delete</a></button>
                </td>
            </tr>";
        }
    }
?>
  </tbody>
</table>
    </div>
</body>
</html>