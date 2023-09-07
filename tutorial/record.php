<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <link rel="stylesheet" type="text/css" href="./style/navbar.css">
    <link rel="stylesheet" type="text/css" href="./style/record.css">
</head>
<body>
<style>
    .nav-links li a button {
        text-decoration: none;
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
</style>
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
                    <a href="#">Record your habits</a>
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
    
        <script src="navbar.js"></script>
        <?php
        
        include("php/config.php");
        if(isset($_POST['submit'])){
           $blogtitle = $_POST['blogtitle'];
           $blogdate = $_POST['blogdate'];
           $blogcontent = $_POST['blogcontent'];

           mysqli_query($blog,"INSERT INTO blog(blogtitle,blogdate,blogcontent) VALUES('$blogtitle','$blogdate','$blogcontent')") or die("Error Occured");
        echo "<div class='message'>
                  <p>Posted successfully!</p>
              </div> <br>";
        }
        
        ?>
        <header>Habits Journal</header>
        <form action="" method="post" class="form">
                <div class="field input">
                    <label for="blogtitle">Title</label>
                    <input type="text" name="blogtitle" id="blogtitle" autocomplete="off" required>
                </div>
                <div class="field input">
                    <label for="blogdate">Date</label>
                    <input type="datetime-local" name="blogdate" id="blogdate" autocomplete="off" required>
                </div>
                <div class="field input">
                    <label for="blogcontent">Content</label><br>
                    <input type="text" name="blogcontent" id="blogcontent" autocomplete="off" required style="height:250px; width:500px">
                </div>
                <div class="field">
                    <input type="submit" class="btn" name="submit" value="Post" required>
                </div>
        </form>
        <a href="showrecords.php">See Previous Records</a>
    </div>
    </body>
</html>