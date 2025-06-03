<?php

session_start();

require "../class/db.php";
require "../class/functions.php";

if($_POST){
    $post = $_POST;

    if(isset($post["full_name"]) && isset($post["email"]) && isset($post["password"])){
        
        $full_name = $db->real_escape_string($post["full_name"]);
        $email = $db->real_escape_string($post["email"]);
        $password = password_hash($db->real_escape_string($post["password"]), PASSWORD_DEFAULT); // Use password_hash

        $result = $db->query("SELECT COUNT(*) AS user FROM users WHERE (email='$email' && password='$password')");
        $result = $result->fetch_assoc();

        if ($result['user']){
            $func->setError($email.' is already exist.');
            $func->redirect("../../register.php");
            die();
        }else{
            try{
                $db->query("INSERT INTO users(full_name, email, password) VALUES('$full_name', '$email', '$password')");
                $func->setAlert("You have successfully registered!");
                $func->redirect("../../login.php");
            }
            catch(Exception $error){
                $func->setError($error->getMessage());
                echo $func->getError();
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

?>