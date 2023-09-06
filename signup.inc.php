<?php

if(isset($_POST["submit"]))
{
    //grabbing the data
    $uid = $_POST["uid"];
    $pwd = $_POST["pwd"];
    $pwdRepeat = $_POST["pwdRepeat"];
    $email = $_POST["email"];

    //Instantiate SignupContr Class
    include "/dbh.classes.php";
    include "/signup.classes.php";
    include "/signup-contr.classes.php";
    $signup = new SignupContr($uid, $pwd, $pwdRepeat, $email);

    $signup->signupUser();

    header("location: /index.html?error=none")

}