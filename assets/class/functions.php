<?php

session_start();

class Functions{

    public function redirect ($url, $code = 0, $msg = "Try Again"){
        header("Location:".$url);
    }

    public function setError ($msg){
        $_SESSION['error']= $msg;
    }

    public function setAuth ($data){
        $_SESSION['Auth']= $data;
    }

    public function auth (){
        if(isset($_SESSION['Auth'])){
            return $_SESSION['Auth'];
        }else{
            return false;
        }
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