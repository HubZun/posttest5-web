<?php 
   session_start();

   include("php/config.php");
   if(!isset($_SESSION['valid'])){
    header("Location: index.php");
   }
   $id = $_SESSION['id'];

   $query = mysqli_query($con,"SELECT * FROM users where Id = '$id' ");

//    $data = [];
//    while($result = mysqli_fetch_assoc($query)){
//    $data[]= $result;
// }
?>
   
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/style.css">
    <link rel="icon" href="image/Resident-Evil-Logo.webp">
    <title>Home</title>
</head>
<body>
    <div class="nav">
        <div class="logo">
            <p><a href="home.php">Logo</a> </p>
        </div>
        <a href="index.html">RESIDENT EVIL</a>
    
        <div class="right-links">

            <a href="edit.php">Change Profile</a>
            
            <a href="delete.php">DELETE ACCOUNT</a>
            <a href="php/logout.php"> <button class="btn">Log Out</button> </a>
        </div>
        
    </div>
    <main>
            <?php while($row = mysqli_fetch_assoc($query)) : ?>
       <div class="main-box top">
          <div class="top">
            <div class="box">
                <p>Hello <b><?php echo $row["Username"] ?></b>, Welcome</p>
            </div>
            <div class="box">
                <p>Your email is <b><?php echo $row["Email"] ?></b>.</p>
            </div>
          </div>
          <div class="bottom">
            <div class="box">
                <p>And you are <b><?php echo $row["Age"] ?> years old</b>.</p> 
            </div>
          </div>
       </div>
       <?php endwhile ?>

    </main>
</body>
</html>