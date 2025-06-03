<?php

session_start();

require "../class/db.php";
require "../class/functions.php";

if($_POST){
    $post = $_POST;

    if(isset($post["email"]) && isset($post["password"])){
        
        $email = $db->real_escape_string($post["email"]);
        $input_password = $db->real_escape_string($post["password"]);

        // Fetch user by email
        $result = $db->query("SELECT * FROM users WHERE email='$email'");
        $user = $result->fetch_assoc();

        if ($user && password_verify($input_password, $user['password'])){
            $func->setAuth($user);
            $func->setAlert("You have successfully logged in!");
            $func->redirect("../../index.php");
            die();
        }else{
            $func->setError('Invalid email or password.');
            $func->redirect("../../login.php");
            die();
        }
        
    }
    else{
        $func->setError('Please fill the details correctly');
        $func->redirect("../../login.php");
    }

}
else{
    $func->redirect("../../login.php");
}

?>