<?php
session_start();
include('database_con.php');
 
            if(isset($_POST['username'])){
                $email = $_POST['username'];
            $pass = $_POST['pass'];
            $select = mysqli_query($conn,"select * from admin where id = 1 ");
            $row = mysqli_fetch_assoc($select);
           

            if($row['pass'] ==$pass){
                
                $_SESSION['admin']=$email;
                header("location:ADMIN_D/admin.php");

            
            }else{
                echo "invalid pass";
            }
            }
            

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Admin Login</title>
    <link rel="stylesheet" href="login.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>
<body>
    
<div class="header">
        <div class="img1"><img src="images/MVP_Logo.png" height="110px" width="110px" alt="MVP Logo"></div>
        <div class="name">
                <h2>Maratha Vidhya Prasarak Samaj's</h2>
                <h1 style="color: rgb(43, 100, 167);">Commerce Management & Computer Science (C.M.C.S)</h1>
                <h2 style="color: rgb(165, 51, 57);">Affiliated to Savitribai Phule Pune University</h2>
        </div>
        <div class="img2"><img src="images/naacb.png" height="100px" width="140px" alt=""></div>
    </div>
    <div class="caption">
        <h1>Admin Login</h1>
    </div>
     
    <div class="wrapper">
        <form action="" method="post">
            <h1>Login</h1>
            
            <div class="input-box">
                <input type="email" placeholder="Email" name="username"
                required>
            </div>

            <div class="input-box">
                <input type="password" placeholder="Password" name="pass"
                required>
            </div>

         

            <button type="submit" class="btn" >Login</button><br><br>

            
        </form>
    </div>
</body>
</html>