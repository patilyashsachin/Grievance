<?php
include('../database_con.php');
if(isset($_POST['accept'])){
  $id = $_POST['accept'];

  $update = mysqli_query($conn,"update register set status ='Accepted' where id = $id ");

}

if(isset($_POST['reject'])){
  $id = $_POST['reject'];

  $update = mysqli_query($conn,"update register set status ='Rejected' where id = $id ");

}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
    <link rel="stylesheet" href="Style_admin.css">
</head>
<body>
<body>
    <div class="header">
        <div class="img1"><img src="../images/MVP_Logo.png" height="110px" width="110px" alt="MVP Logo"></div>
        <div class="name">
                <h2>Maratha Vidhya Prasarak Samaj's</h2>
                <h1 style="color: rgb(43, 100, 167);">Commerce Management & Computer Science (C.M.C.S)</h1>
                <h2 style="color: rgb(165, 51, 57);">Affiliated to Savitribai Phule Pune University</h2>
        </div>
        <div class="img2"><img src="../images/naacb.png" height="100px" width="140px" alt=""></div>
    </div>
    <div class="caption">
        <h1>Admin</h1>
        <div class="button">
        <button class="btn"><a href="../logout.php">Logout</a></button>
        </div>
    </div>
    
    <table>
        <tr>
          <th>Name</th>
          <th>Email</th>
          <th>Mob_no</th>
          <th>Complaint</th>
          <th>Select Resolver</th>
          <th>Status</th>
          <th>Accept</th>
          <th>Reject</th>
        </tr>

<?php


$select =mysqli_query($conn,"select * from register order by id DESC");
while($row= mysqli_fetch_array($select)){
echo '<tr>
<td>'.$row['name'].'</td>
<td>'.$row['Email'].'</td>
<td>'.$row['contact'].'</td>
<td>'.$row['complaint'].'</td>
<td>
    <select name="usertype" required>
        <option value="" disabled selected hidden>Resolver</option>
        <option value="Resolver1">Resolver 1</option>
        <option value="Resolver2">Resolver 2</option>
        <option value="Resolver3">Resolver 3</option>
        <option value="Resolver4">Resolver 4</option>
    </select>
</td>
<td>'.$row['status'].'</td>


<td><form action="" method="post">
<input type="number" name="accept" value="'.$row['id'].'" hidden>
<button id="app">Approve</button>

</form></td>

<td><form action="" method="post">
<input type="number" name="reject" value="'.$row['id'].'" hidden>
<button id="rej">Reject</button>


</form></td>
</tr>

';
}

?>

      </table>
</body>
</html>