<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <link rel="stylesheet" type="text/css" href="./style/navbar.css">
    <link rel="stylesheet" type="text/css" href="./style/tips&tricks.css">
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
                    <a href="home.php">Home</a>
                </li>
                <li>
                    <a href="#">Tips and Tricks</a>
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
    
        <script src="navbar.js"></script>
    </div>
    <div class="physical">
        <div class="photo">
            <h1>How to UP your health physically</h1>
        </div>
        <ul style="list-style-type: circle;" id="physical_tips">
            <li>Be physically active for 30 minutes most days of the week.</li>
            <li>Eat a well-balanced, low-fat diet with lots of fruits, vegetables and whole grains.</li>
            <li>Stay out of the sun, especially between 10 a.m. and 3 p.m. when the sun's harmful rays are strongest.</li>
        </ul>
    </div>
    <div class="mental">
        <h3>How to UP your health mentally</h3>
        <ul style="list-style-type: circle;" id="mental_tips">
            <li>Stay active</li>
            <li>Talk to someone</li>
            <li>Meditate</li>
            <li>Make leisure and contemplation a priority</li>
        </ul>
    </div>
    </body>
</html>