<?php
session_start();
include_once("conn.php");
include_once("autenticaCPF.php");

$validaCaptcha = false;

if(isset($_POST['g-recaptcha-response']) and ($_POST['senhaUser'] == $_POST['senhaUserConf'])){
          
    $getResponse = 'https://www.google.com/recaptcha/api/siteverify?secret='.'6LdHggAVAAAAAOLmzGOL0V1w9_jpK0uKhaikTrgg'.'&response='.$_POST['g-recaptcha-response'];
    $GoogleResponse = (file_get_contents($getResponse)) ;
    
    if (strpos($GoogleResponse, '"success": true') !== false) {
        $validaCaptcha = true;
    } else {
        header("Location: ../Views/erroCad.php");
    }
}
if ((isCpfValid($_POST['cpfUser']) == true) or ($validaCaptcha == true)) {

cadastroUser($_POST['nomeUser'], $_POST['cpfUser'], $_POST['rgUser'], 
$_POST['emailUser'], $_POST['telUser'],  $_POST['senhaUser']);

}

if ($_SESSION['logado'] == 1) {
    header("Location: ../Views/cadastro.php");
    
} else {
    header("Location: ../Views/erroCad.php");
}