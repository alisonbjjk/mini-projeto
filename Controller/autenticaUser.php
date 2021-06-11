<?php
session_start();
include_once("conn.php");

$validaCaptcha = false;

if (isset($_POST['g-recaptcha-response'])) {

    $getResponse = 'https://www.google.com/recaptcha/api/siteverify?secret=' . '6LdHggAVAAAAAOLmzGOL0V1w9_jpK0uKhaikTrgg' . '&response=' . $_POST['g-recaptcha-response'];
    $GoogleResponse = (file_get_contents($getResponse));

    if (strpos($GoogleResponse, '"success": true') !== false) {
        $validaCaptcha = true;
        loginUser($_POST['emailUser'], $_POST['senhaUser']);
    } else {
        header("Location: ../Views/erro.php");
    }

    if ($_SESSION['admin'] == '1') {
        $_SESSION['logado'] = '1';
        header('Location: ../admin');
    } elseif ($_SESSION['admin'] == '0') {
        $_SESSION['logado'] = '1';
        header('Location: ../Views/telaUser.php');
    } else {
        header("Location: telaUser.php");
    }
}
