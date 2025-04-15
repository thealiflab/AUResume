<?php

session_start();

class Functions{

    public function redirect ($url, $code = 0, $msg = "Try Again"){
        header("Location:".$url);
    }

    public function setError ($msg){
        $_SESSION['error']= $msg;
    }

    public function error ($msg){
        if(isset($_SESSION['error'])){
            echo "$_SESSION[error]";
            unset($_SESSION["error"]);
        }
    }

    public function setAlert ($msg){
        $_SESSION['alert'] = $msg;
    }
    

}

$func = new Functions();