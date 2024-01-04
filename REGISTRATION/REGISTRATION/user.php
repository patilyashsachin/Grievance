<?php
session_start();
include('database_con.php');
if(!isset($_SESSION['login'])){
  header("location:login.php");
}
if(isset($_POST['accept'])){
  $id = $_POST['accept'];

  $update = mysqli_query($conn,"update register set status ='accepted' where id = $id ");

}

if(isset($_POST['reject'])){
  $id = $_POST['reject'];

  $update = mysqli_query($conn,"update register set status ='rejected' where id = $id ");

}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User</title>
    <link rel="stylesheet" href="user.css">
</head>
<body>
  
    <h1>User Complain Status</h1><br>
    <table>
        <tr>
          <th>Name</th>
          <th>Email</th>
          <th>Mobile No</th>
          <th>Complaint</th>
          <th>Status</th>
        </tr>

        <?php


$user=$_SESSION['login'];
$select =mysqli_query($conn,"select * from register where Email='$user' order by id DESC");
while($row= mysqli_fetch_array($select)){
echo '<tr>
<td>'.$row['name'].'</td>
<td>'.$row['Email'].'</td>
<td>'.$row['contact'].'</td>
<td>'.$row['complaint'].'</td>
<td>'.$row['status'].'</td>


</tr>';
}

?>

      </table>
</body>
</html>