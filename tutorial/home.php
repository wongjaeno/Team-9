<?php 
   session_start();

   include("php/config.php");
   if(!isset($_SESSION['valid'])){
    header("Location: index.php");
   }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="./style/navbar.css">
    <title>Home</title>
</head>
<body>
<div class="content">
        <nav>
            <div class="logo">
                <h4>HealthMana</h4>
            </div>
            <ul class="nav-links">
                <li>
                    <a href="#">Home</a>
                </li>
                <li>
                    <a href="tips&tricks.php">Tips and Tricks</a>
                </li>
                <li>
                    <a href="record.php">Record your habits</a>
                </li>
                <li>
                    <a href="points.php">Pet</a>
                </li>
                <li>
                    <a href="php/logout.php"> <button class="btn">Log Out</button> </a>
                </li>
            </ul>
            <div class="burger">
                <div class="line1"></div>
                <div class="line2"></div>
                <div class="line3"></div>
            </div>
        </nav>

    <?php

    $id = $_SESSION['id'];
    $query = mysqli_query($con,"SELECT*FROM users WHERE Id=$id");

    while($result = mysqli_fetch_assoc($query)){
        $res_Uname = $result['Username'];
    }

    ?>
        <script src="navbar.js"></script>
</div>

    <main>

       <div class="main-box top">
          <div class="top">
            <div class="box">
                <p>Hello <b><?php echo $res_Uname ?></b>, Welcome</p>
            </div>
          </div>
       </div>

    </main>
</body>
</html>