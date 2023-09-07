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
    <link rel="stylesheet" type="text/css" href="./style/home.css">
    <title>Home</title>
</head>
<body>
<style>
    .btn {
        border-radius: 40px;
        background-color: white;
        padding: 8px 15px;
    }

    @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@100;300;400;800&display=swap');

    *{
        margin:0px;
        padding:0px;
        box-sizing:border-box;
    }

    body {
        font-family: "Poppins", sans-serif;
    }


    .logo {
        color: white;
        text-transform: uppercase;
        letter-spacing: 3px;
        font-size: 20px;
    }


    nav {
        position: relative;
        z-index: 20;
        display: flex;
        justify-content: space-around;
        align-items: center;
        min-height: 10vh;
        user-select: none;
        background-color:#ADC178;
    }

    .nav-links{
        display: flex;
        justify-content: space-around;
        gap: 100px;
        padding-top: 20px;
        padding-bottom: 10px;
    }

    .nav-links li {
        list-style: none;
    }

    .nav-links li a {
        text-decoration: none;
        color: white;
        text-transform: uppercase;
        letter-spacing: 2px;
        font-weight: 300;
        font-size: 17px;  
    }

    .nav-links li:hover a{
        color: rgba(255, 255, 255, 0.5);
    }

    .burger {
        display: none;
        cursor: pointer;
    }

    .burger div{
        width: 25px;
        height: 3px;
        background-color: white;
        margin: 5px;
        transition: all 0.3s ease;
    }

    @media screen and (max-width:1500px){
        .nav-links{
            width:60%;
        }
    }


    @media screen and (max-width:800px){
        body {
            overflow-x: hidden;
        }
        .nav-links{
            position: absolute;
            right: 0px;
            height: 90vh;
            top: 10vh;
            background-color: #ADC178;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            gap: 100px;
            width: 50%;
            transform: translateX(100%);
        }
        .nav-links li {
            opacity: 0;
        }
        .burger {
            display: block;
        }
    }

    .nav-active {
        transform: translateX(0%);
        transition: 0.5s ease-in;
        position: absolute;
        z-index: 100;
    }

    .nav-active li a {
        font-size: 20px;
    }

    .body-active {
        overflow: hidden;
    }

    @keyframes navLinkFade {
        from {
            opacity: 0;
            transform: translateX(50px);
        }
        to {
            opacity: 1;
            transform: translateX(0px);
        }
    }

    .toggle .line1 {
        transform: rotate(-45deg) translate(-5px, 6px);
    }
    .toggle .line2 {
        opacity: 0;
    }
    .toggle .line3 {
        transform: rotate(45deg) translate(-5px, -6px);
    }
</style>
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
                    <a href="php/logout.php"> <button class="btn">Log Out</button> </a>
                </li>
            </ul>
            <div class="burger">
                <div class="line1"></div>
                <div class="line2"></div>
                <div class="line3"></div>
            </div>
        </nav>
        <div class="welcome-text">
            <div class="greeting">
                <h1><span>Hello,</span></h1>
            </div>
            <p>Welcome to our website, your ultimate destination for living a healthier life and fostering self-development. 
            Discover a wealth of tips and tricks to enhance your well-being, from nutrition and fitness to mental health and mindfulness. 
            With our user-friendly habit-tracking tools, you can monitor your progress, set goals, and embark on a transformative journey towards a happier and healthier you. 
            Start your path to self-improvement today!
            </p>
            <a href="tips&tricks.php">
                <button class="bttn">Get started</button>
            </a>
        </div>
</div>
    <?php

    $id = $_SESSION['id'];
    $query = mysqli_query($con,"SELECT*FROM users WHERE Id=$id");

    while($result = mysqli_fetch_assoc($query)){
        $res_Uname = $result['Username'];
    }

    ?>
        <script src="navbar.js"></script>


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