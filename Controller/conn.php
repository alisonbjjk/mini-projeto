<?php


include("../Model/b.php");
include("../Model/cripto.php");

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
function cadastroUser($nome, $cpf, $rg, $email, $telefone, $senha)
{
    global $conn;

    $sql_auth =
        ("INSERT INTO usuario (`nomeUser`, `cpfUser`, `rgUser`, `telUser`, `emailUser`, `senhaUser`) 
    VALUES ('$nome', '$cpf', '$rg', '$telefone', '$senha', '$senha');");

    $query = $conn->query($sql_auth) or die("Erro no select autentica " . print_r($conn->errorInfo()));
}

// Consultando dados para datatable.
function dataTable()
{
    global $conn;
    if ($query = $conn->query("SELECT * FROM tb_processos;") or die("Erro no select nome ")) {

        $array = array();
        $cont = 0;
        while ($array = $query->fetch(PDO::FETCH_ASSOC)) {
            if ($cont % 2 == 0) {

                $id = $array['idUser'];
                $nome = $array['nomeUser'];
                $cpf = $array['cpfUser'];
                $rg = $array['rgUser'];
                $email = $array['emailUser'];
                $dt = $array['dtCriacao'];
                $status = $array['statusUser'];

                echo ('<tr align="center">
            <td>' . $nome . '</td>
            <td>' . $cpf . '</td>
            <td>' . $rg . '</td>
            <td>' . $email . '</td>
            <td>' . $dt . '</td>
            <td>
            <a href="processos.php"><button  type="button">Ver Processo</button></a>
            <a href="teste"><button type="button">Validar</button></td></a>
            </tr>');
            }
        }
    }
}
