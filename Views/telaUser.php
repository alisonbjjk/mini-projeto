<?php
session_start();
require('../Controller/conn.php');
if (($_SESSION['logado'] == '1') and ($_SESSION['admin'] == '0')) {
} else {
    sair();
}
?>

<h1>DEU CERTO USUÁRIO!!!<h1>