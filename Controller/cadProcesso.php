<?php
session_start();
include_once("../Model/conn.php");


$validaCaptcha = false;

if(isset($_POST['g-recaptcha-response'])){
          
    $getResponse = 'https://www.google.com/recaptcha/api/siteverify?secret='.'6LdHggAVAAAAAOLmzGOL0V1w9_jpK0uKhaikTrgg'.'&response='.$_POST['g-recaptcha-response'];
    $GoogleResponse = (file_get_contents($getResponse)) ;
    
    if (strpos($GoogleResponse, '"success": true') !== false) {
        $validaCaptcha = true;
    } else {
        header("Location: ../Views/erroCad.php");
    }
}
if ($validaCaptcha == true) {

cadastroProces($_POST['nomeUser'], $_POST['cpfUser'], $_POST['rgUser'], $_POST['emailUser'], $_POST['docUser']);
header('Location: ../index.php');
}