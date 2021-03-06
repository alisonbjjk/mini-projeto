<?php


include("b.php");
//include("../Model/cripto.php");

try {
    $conn = new PDO(
        "mysql:host=$s;dbname=$db",
        "$u",
        "$p",
        array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8")
    );
} catch (PDOException $e) {
    echo $e->getMessage();
}

// Função para desconectar o usuario logado.
function sair()
{
    // Metodo para destruir a sessão.
    session_destroy();
    // Redirecionamento para a tela de Login.
    header("Location: ../index.php");
}

// Função de consulta para logar usuário com consulta a permição de Admin.
function loginUser($email, $senha)
{
    global $conn;
    $sql = ("SELECT * FROM usuario where emailUser = '$email' and senhaUser = '$senha';");
    $query = $conn->query($sql) or die("Erro no select autentica " . print_r($conn->errorInfo()));
    $array = $query->fetch(PDO::FETCH_ASSOC);

    if ($array <> null) {
        $_SESSION['admin'] = $array['adminUser'];
    } else {
        sair();
    }
}

// Cadastro de Usuários.
function cadastroProces($nome, $cpf, $rg, $email, $doc)
{
    global $conn;
    $sql = ("INSERT INTO tb_processos(`nm_user`, `cpf_user`, `rg_user`, `email_user`, `documentos`) 
        VALUES ('$nome', '$cpf', '$rg', '$email', '$doc');");

    $query = $conn->query($sql) or die("Erro Autenticação!");
    $array = $query->fetch(PDO::FETCH_ASSOC);
    if ($array <> 0) {
        header('Location ../index.php');
    } else {
        header('Location ../Views/erro.php');
    }
}

// Consultando dados para datatable.
function dataTable()
{
    global $conn;
    if ($query = $conn->query("SELECT * FROM tb_processos;") or die("Erro no select nome ")) {

        $array = array();
        $cont = 0;
        while ($array = $query->fetch(PDO::FETCH_ASSOC)) {

            $id = $array['id'];

            if ($cont % 2 == 0) {
                $status = $array['status'];
                if ($status == '0') {
                    $status = "Pendente";
                    $val = ('<a href="testeval.php/idcli=' . $id . '"><button type="button">Validar</button></td></a>');
                } elseif ($status == '1') {
                    $status = "Valido";
                    $val = "";
                } else {
                    $status = "Negado";
                    $val = ('<a href="testeval.php/idcli=' . $id . '"><button type="button">Validar</button></td></a>');
                }

                $tabela = ('<tr style="text-align: left;">
            <td style="text-align: center;">' . $array['id'] . '</td>
            <td>' . $array['nm_user'] . '</td>
            <td>' . $array['cpf_user'] . '</td>
            <td>' . $array['rg_user'] . '</td>
            <td>' . $array['email_user'] . '</td>
            <td>' . $array['dt_criacao'] . '</td>
            <td>' . $array['documentos'] . '</td>
            <td>' . $status . '</td>
            <td style="text-align: center;"><a href="processos.php">
            <button type="button">Ver Processos</button></a> 
            <div>' . $val . '</div>
            </tr>');
            }
            echo $tabela;
        }
    }
}

function validarProc($id)
{
    global $conn;
    $slq_validar = ("UPDATE `tb_processos` SET `status` = '2' WHERE `tb_processos`.`id` = '. $id .';");

    var_dump($slq_validar);
    die;
    $query = $conn->query($slq_validar) or die("Erro Autenticação!");

}
