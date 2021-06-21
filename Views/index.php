<?php
session_start();
include_once('../Controller/chaveCaptcha.php');
?>
<!DOCTYPE html>
<html lang="pt">

<head>
	<title>Tela de Procesos</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="../estilo/css/util.css">
	<link rel="stylesheet" type="text/css" href="../estilo/css/main.css">
    <link rel="shortcut icon" href="../estilo/icon/login.png" />
	<?php
	include_once('../estilo/linksLogin.php');
	?>
</head>

    <body>
        <div class="limiter">
            <div style="background-color: #848484" class="container-login100">
                <div class="wrap-login100 p-l-85 p-r-85 p-t-55 p-b-55">
                    <form action="../Controller/cadProcesso.php" method="post" class="login100-form validate-form flex-sb flex-w">
                        <span style="text-align: center" class="login100-form-title p-b-32">
                            Solicitação de Processos </span>
                        <span class="txt1 p-b-11">
                            Nome Completo.
                        </span>
                        <div class="wrap-input100 validate-input m-b-12" data-validate="CPF!">
                            <span class="btn-show-pass">
                                <i class="fa fa-eye"></i>
                            </span>
                            <input required="" class="input100" type="text" placeholder="Digite seu Nome Completo" name="nomeUser">
                            <span class="focus-input100"></span>
                        </div>
                        <span class="txt1 p-b-11">
                            CPF.
                        </span>
                        <div class="wrap-input100 validate-input m-b-12" type="text" data-validate="CPF">
                            <span class="btn-show-pass">
                                <i class="fa fa-eye"></i>
                            </span>
                            <input required="" class="input100" type="txt" placeholder="Digite seu CPF" name="cpfUser">
                            <span class="focus-input100"></span>
                        </div>
                        <span class="txt1 p-b-11">
                            RG.
                        </span>
                        <div class="wrap-input100 validate-input m-b-12" type="text" data-validate="CPF">
                            <span class="btn-show-pass">
                                <i class="fa fa-eye"></i>
                            </span>
                            <input required="" class="input100" type="txt" placeholder="Digite seu RG" name="rgUser">
                            <span class="focus-input100"></span>
                        </div>
                        <span class="txt1 p-b-11">
                            E-mail.
                        </span>
                        <div class="wrap-input100 validate-input m-b-12" type="email" data-validate="email!">
                            <span class="btn-show-pass">
                                <i class="fa fa-eye"></i>
                            </span>
                            <input required="" class="input100" type="email" placeholder="Digite seu E-mail" name="emailUser">
                            <span class="focus-input100"></span>
                        </div>
                        <span class="txt1 p-b-11">
                            Documentos que Deseja Solicitar.
                        </span>
                        <div class="wrap-input100 validate-input m-b-12" type="text" data-validate="CPF">
                            <span class="btn-show-pass">
                                <i class="fa fa-eye"></i>
                            </span>
                            <input required="" class="input100" type="text" size="100" placeholder="Quais Documentos deseja solicitar?" name="docUser">
                            <span class="focus-input100"></span>
                        </div>
                        <div>
                            <div>
                                <div action="?" method="POST">
                                    <div style="margin-left: 15%; margin-top: 10px;" class="g-recaptcha" data-sitekey="6LdHggAVAAAAABUqQ8aurNY-0FC-hYBqCEMLE4Wt">
                                    </div>
                                </div>
                            </div>
                            <br>
                            <div style="margin-left: 70%; margin-top: 5px;" class="container-login100-form-btn">
                                <button class="login100-form-btn">Enviar</button>
                            </div>
                            <a style="margin-bottom: 10px;" href="../index.php">Tela Inicial...</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div id="dropDownSelect1"></div>
        <?php
        include "../estilo/scriptsLogin.php";
        ?>
    </body>

</html>