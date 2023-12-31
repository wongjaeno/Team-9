<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <link rel="stylesheet" type="text/css" href="./style/navbar.css">
    <link rel="stylesheet" type="text/css" href="./style/tips&tricks.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
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
        height: 100vh;
        width: 100vw;
        margin: 0px;
        overflow-x: hidden;
        background: #f0ead2;
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
                    <a href="home.php">Home</a>
                </li>
                <li>
                    <a href="#">Tips and Tricks</a>
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
        <script src="navbar.js"></script>
        <div class="words">
            <div class="title">
                <h1>How to <span>UPGRADE</span> your health</h1>
            </div>
            <div class="container">
                <a href="https://www.healthline.com/health/fitness-exercise/10-best-exercises-everyday#start-here" target="_blank">
                    <div class="grid-item one">1<br>Get regular exercise</div>
                </a>
                <a href="https://www.who.int/news-room/fact-sheets/detail/healthy-diet" target="_blank">
                    <div class="grid-item two">2<br>Eat healthy and regularly</div>
                </a>
                <a href="https://www.healthline.com/nutrition/how-much-water-should-you-drink-per-day#how-much-you-need" target="_blank">
                    <div class="grid-item three">3<br>Remember to hydrate</div>
                </a>
                <a href="https://www.healthline.com/health/sleep/sleep-calculator#sleep-calculator" target="_blank">
                    <div class="grid-item four">4<br>Get enough sleep, at least 7 to 8 hours</div>
                </a>
                <a href="https://www.healthline.com/health/how-to-think-positive#tips" target="_blank">
                    <div class="grid-item five">5<br>Focus on positivity</div>
                </a>
                <a href="https://www.independentage.org/get-advice/wellbeing/relationships/staying-connected" target="_blank">
                    <div class="grid-item six">6<br>Stay connected and reach out to friends and family regularly</div>
                </a>
                <a href="https://zenhabits.net/meditation-guide/" target="_blank">
                    <div class="grid-item seven">7<br>Meditate and work on being present</div>
                </a>
                <a href="https://kidshealth.org/en/teens/gratitude-practice.html" target="_blank">
                    <div class="grid-item eight">8<br>Practise gratitude</div>
                </a>
            </div>
        </div>

    </div>
</body>
</html>