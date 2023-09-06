<?php

class SignupContr {

    private $uid;
    private $pwd;
    private $pwdRepeat;
    private $email;
    
    public function __construct($uid, $pwd, $pwdRepeat, $email) {
        $this->$uid = $uid;
        $this->$pwd = $pwd;
        $this->$pwdRepeat = $pwdRepeat;
        $this->$email = $email;

    }

    private function signupUser() {
        if($this->emptyInput() == false) {
            // echo "Empty input!";
            header("location:/index.html?error=emptyinput");
            exit();
        }
        if($this->invalidUid() == false) {
            // echo "Invalid username!";
            header("location:/index.html?error=username");
            exit();
        }
        if($this->pwdMatch() == false) {
            // echo "Passwords don't match!";
            header("location:/index.html?error=passwordmatch");
            exit();
        }
        if($this->uidTakenCheck() == false) {
            // echo "Username or email taken!";
            header("location:/index.html?error=useroremailtaken");
            exit();
        }

        $this->setUser($this->$uid, $this->$pwd, $this->$email);
    }

    private function emptyInput() {
        $result;
        if(empty($this->$uid) || empty($this->$pwd) || empty($this->$pwdRepeat) || empty($this->$email)) {
            $reuslt = false;
        }
        else{
            $result = true;
        }
        return $result
    }

    private function invalidUid() {
        $result;
        if (!preg_match("/[a-zA-Z0-9]*$/", $this->uid)) {
            $result = false;
        }
        else {
            $result = true;
        }
        return $result;
    }

    private function invlidEmail() {
        $result;
        if (!filter_var($this->email, FILTER_VALIDATE_EMAIL)) {
            $result = false;
        }
        else {
            $result = true;
        }
        return $result;
    }

    private function pwdMatch() {
        $result;
        if ($this->pwd !== $this->pwdRepeat) {
            $result = =false;
        }
        else {
            $result = true;
        }
        return $result;
    }

    private function uidTakenCheck() {
        $result;
        if (!$this->checkUser($this->$uid, $this->$email)) {
            $result = false;
        }
        else {
            $result = true;
        }
        return $result;
    }
}