<?php

session_start();

require "../class/db.php";
require "../class/functions.php";

if($_POST){
    $post = $_POST;

    if(isset($post["first_name"]) && isset($post["last_name"]) && isset($post["email"]) && isset($post["password"])){
        
        $first_name = $db->real_escape_string($post["first_name"]);
        $last_name = $db->real_escape_string($post["last_name"]);
        $email = $db->real_escape_string($post["email"]);
        $password = md5($db->real_escape_string($post["password"]));

        $result = $db->query("SELECT COUNT(*) AS user FROM users WHERE (email='$email' && password='$password')");
        $result = $result->fetch_assoc();

        if ($result['user']){
            $func->setError($email.' is already exist.');
            $func->redirect("../../register.php");
            die();
        }else{
            try{
                $db->query("INSERT INTO users(first_name, last_name, email, password) VALUES('$first_name', '$last_name', '$email', '$password')");
                $func->setAlert("You have successfully registered!");
                $func->redirect("../../login.php");
            }
            catch(Exception $error){
                $func->setError($error->getMessage());
                $func->redirect("../../register.php");
            }
        }
        
    }
    else{
        $func->setError('Please fill the details correctly');
        $func->redirect("../../register.php");
    }

}
else{
    $func->redirect("../../register.php");
}