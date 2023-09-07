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
    <title></title>
    <link rel="stylesheet" type="text/css" href="./style/navbar.css">
    <link rel="stylesheet" type="text/css" href="./style/showrecords.css">
</head>
<body>
<div class="content">
    <nav>
        <div class="logo">
            <h4>HealthMana</h4>
        </div>
        <ul class="nav-links">
            <li>
                <a href="home.php">Home</a>
            </li>
            <li>
                <a href="tips&tricks.php">Tips and Tricks</a>
            </li>
            <li>
                <a href="record.php">Record your habits</a>
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

    $query = mysqli_query($blog,"SELECT*FROM blog");

    while($result = mysqli_fetch_assoc($query)){
        $title = $result['blogtitle'];
        $datetime = $result['blogdate'];
        $content = $result['blogcontent'];
    }

    ?>
        <script src="navbar.js"></script>
    
    <main>

       <div class="main-box top">
            <div class="top">
                <div class="title">
                    <h4><b>Title: <?php echo $title ?></b></h4>
                </div>
                <div class="date">
                    <p><b>Date & Time: <?php echo $datetime ?><b></p>
                </div>
                <div class="content">
                    <p><b>Content: <?php echo $content ?><b></p>
                </div>
            </div>
       </div>

    </main>
</body>
</html>
