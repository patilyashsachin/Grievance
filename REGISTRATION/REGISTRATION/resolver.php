<?php
session_start();
if(!isset($_SESSION['resolver'])){
  header("location:resolverlogin.php");
}

include('database_con.php');
if(isset($_POST['accept'])){
  $id = $_POST['accept'];

  $update = mysqli_query($conn,"update register set status ='Resolved' where id = $id ");

}
/*
if(isset($_POST['reject'])){
  $id = $_POST['reject'];

  $update = mysqli_query($conn,"update register set status ='rejected' where id = $id ");

}*/


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resolver</title>
    <link rel="stylesheet" href="ADMIN_D/style.css">
    
    <style>
        *{
      margin: 0;
      padding: 0;
      box-sizing: border-box;
        }
        
      body{
        width: 100%;
        height: 100%;
      }
  
      th,td,table{
        border:2px solid black;
        border-collapse:collapse;
        
      }
      #res{
        background-color: rgb(40, 183, 40);
        border: 2px solid black;
        width: 80px;
        height: 25px;
        border-radius: 5px;
        font-weight: bold;
        color:white;
        margin:auto;
       }

        .main1{
          display: flex;
        }

        #d1{
          background-color: rgb(43, 100, 167);
          color: white;
          width: 90%;
          }

        #d2{
          background-color: rgb(43, 100, 167);
          width: 5%;
        }

        #d3{
          background-color: rgb(43, 100, 167);
          width: 5%;
          }

     table{
        margin-left: auto;
        margin-right: auto;
        margin-top: 50px;
        border-radius:5px;
        width:800px;
        
      }

      th,td,table{
        border:2.3px solid black;
        border-collapse:collapse;
        padding: 10px;
      }

      #home{
      height: 25px;
      width: 60px;
      border-radius: 5px;
      font-size: 15px;
      margin-top: 20px;
      border: 1.8px solid black;
      font-weight: bold;
      }
  
      #log{
        height: 25px;
        width: 60px;
        border-radius: 5px;
        font-size: 15px;
        margin-top: 20px;
        border: 1.8px solid black;
        font-weight: bold;
      }

      *{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}
body{
    height: 100%;
    width: 100%;
}

.header{
    display: flex;
    justify-content: space-around;
    margin: 15px 15px;
}

.name{
    text-align: center;
    margin-top: 5px;
    font-size: 20px;
}

.caption{
    background-color: rgb(43, 100, 167);
    color: white;
    justify-content : center;
    height: 38px;
    display:flex;
    
}
.caption h1{
  text-align : end;
  width: 50%
}
.button{
  width : 50%;
  display: flex;
  justify-content : flex-end;
  margin : 0 20px;
}
 .btn{
  background-color : red;
  border-radius : 10px;
  width : 70px;
  color : white;
} 

.btn a{
  text-decoration: none;
  color : white;
  
}

      
    </style>
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
        <h1>Resolver</h1>
        <div class="button">
        <button class="btn"><a href="logout.php">Logout</a></button>
        </div>
    </div>
  
    <table>
        <tr>
          
          <th>Complaint</th>
          <th>Status</th>
          <th>Update Status</th>
        </tr>

<?php





$select =mysqli_query($conn,"select * from register where status='accepted' or status='resolved' order by id DESC");
while($row= mysqli_fetch_array($select)){
echo '<tr>

<td>'.$row['complaint'].'</td>
<td>'.$row['status'].'</td>
<td><form action="" method="post">
<input type="number" name="accept" value="'.$row['id'].'" hidden>
<button id="res">Resolved</button>

</form></td>
</tr>

';
}

?>

      </table>
</body>
</html>