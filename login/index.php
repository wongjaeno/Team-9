<?php 
  session_start(); 

  if (!isset($_SESSION['username'])) {
  	$_SESSION['msg'] = "You must log in first";
  	header('location: login.php');
  }
  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['username']);
  	header("location: login.php");
  }
?>
<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
	<link rel="stylesheet" type="text/css" href="navbar.css">
    <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
    <lottie-player src="https://lottie.host/8c1e37ac-9f45-468a-a593-1864ce7bf7e0/nQW92ccATT.json" background="#ffffff" speed="1" style="width: 300px; height: 300px" mode="normal"></lottie-player>
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
                    <a href="tips&tricks.html">Tips and Tricks</a>
                </li>
                <li>
                    <a href="record.html">Record your habits</a>
                </li>
                <li>
                    <a href="points.html">Pet</a>
                </li>
                <li>
                    <a href="login/index.php">Log In</a>
                </li>
            </ul>
            <div class="burger">
                <div class="line1"></div>
                <div class="line2"></div>
                <div class="line3"></div>
            </div>
        </nav>
    
        <script src="navbar.js"></script>
    

    </div>

    <!-- logged in user information -->
    <?php  if (isset($_SESSION['username'])) : ?>
    	<p>Welcome <strong><?php echo $_SESSION['username']; ?></strong></p>
    	<p> <a href="index.php?logout='1'" style="color: red;">logout</a> </p>
    <?php endif ?>


</body>
</html>