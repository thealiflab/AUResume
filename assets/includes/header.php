<?php
require "./assets/class/functions.php";
?>

<!doctype html>
<html lang="en">

<head>


    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="AU Resume" />
    <meta name="keywords" content="resume, cv, online resume, resume maker, professional, professional resume" />
    <meta name="developer" content="Alif">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">

    <title><?=@$title?></title>


    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <link rel="icon" href="ar_logo.png">
    <!-- need to remove later!!!!!!!!!!! -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">


    <style>
        body {
            height: 100vh;
            font-family: sans-serif;
            background: rgb(249, 249, 249);
            /* background: radial-gradient(circle, rgba(249, 249, 249, 1) 0%, rgba(240, 232, 127, 1) 49%, rgba(246, 243, 132, 1) 100%); */

        }

        .title-name{
            font-family: Helvetica, sans-serif;
            font-size: 2.5em;
            font-weight: bold;
            text-align: center;
            margin: 30px 0px 30px 0px;
            justify-content: center;
            align-items: center;
        }
        
        h3{
            text-align: center;
        }

        .fa-solid{
            color: #1089ff;
        }

        .form-signin {
            max-width: 450px;
            padding: 1rem;
        }

        .form-signin .form-floating:focus-within {
            z-index: 2;
        }

        .form-signin input{
            margin-bottom: 10px;
        }

        .form-floating{
            margin: 20px;
        }

        .icon-white{
            color: white;
        }

        .action-button{
            margin-right: 20px;
            margin-left: 20px;
        }
        .alt-action{
            margin-right: 20px;
            margin-left: 20px;
        }

        .alert {
            padding-top: 15px 20px;
            margin: 20px;
            max-width: 450px;
            border: 1px solid transparent;
            border-radius: 4px;
            font-size: 1rem;
            text-align: center;
        }

        .alert-danger {
            color: #842029;
            background-color: #f8d7da;
            border-color: #f5c2c7;
        }

    </style>



</head>

<body class="d-flex align-items-center">
    