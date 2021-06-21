<?php

include('./teste.php');

function addEmpresaPost() {

echo("+++++++++ CHEGUEI NO empresaPOST ++++++++++++");
$aDados = json_encode($_POST['inputDadosEmpresa'], true);
print_r($aDados);
die();

}

