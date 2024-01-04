<?php
session_start();
include('database_con.php');


if(isset($_GET['userlogin'])){
    if(isset($_POST['username'])){
        $email = $_POST['username'];
    $pass = $_POST['pass'];
    $select = mysqli_query($conn,"select * from user_register where Email = '$email' ");
    $row = mysqli_fetch_assoc($select);
   

    if($row['password'] ==$pass){
        
        $_SESSION['login']=$email;
      
        if((isset($_GET['userlogin']))){
            header("location:user.php");
        }

    
    }else{
        echo "invalid pass";
    }
    }
}



if(isset($_SESSION['login']) and (isset($_GET['complaint']))){
    header("location:complaint.html");
}

if(isset($_SESSION['login']) and (isset($_GET['status']))){
    header("location:user.php");
}

            
            if(isset($_POST['username'])){
                $email = $_POST['username'];
            $pass = $_POST['pass'];
            $select = mysqli_query($conn,"select * from user_register where Email = '$email' ");
            $row = mysqli_fetch_assoc($select);
           

            if($row['password'] ==$pass){
                
                $_SESSION['login']=$email;
                if((isset($_GET['complaint']))){
                    header("location:complaint.html");
                }
                if((isset($_GET['status']))){
                    header("location:user.php");
                }

            
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
    <title>Login</title>
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
        <h1>Gravience Portal</h1>
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

            <div class="register-link">
                <pre><p>Don't have account?<a href='..\REGISTRATION\register.php'> Register</a> </p></pre>
            </div>
        </form>
    </div>
</body>
</html>