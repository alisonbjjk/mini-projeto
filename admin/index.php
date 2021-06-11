<?php

session_start();
require('../Controller/conn.php');

if (($_SESSION['logado'] == '1') and ($_SESSION['admin'] == '1')) {
} else {
    sair();
}

?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.25/css/dataTables.bootstrap5.min.css">
    <title>Título da página</title>
    <meta charset="utf-8">
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.25/js/dataTables.bootstrap5.min.js"></script>


</head>

<body>
    <div style="margin-left: auto; margin-right: auto; width: 80%;">
        <h1 style="align-content: center;">
            DATATABLE EXEMPLO:
        </h1>
        <br>
        <a href="../Views/sair.php">Sair</a>
        <table id="example" class="table table-striped" style="width:100%">
            <thead>
                <tr align="center">
                    <th>Nome</th>
                    <th>CPF</th>
                    <th>RG</th>
                    <th>Email</th>
                    <th>Data de Solicitação</th>
                    <th>Download</th>
                </tr>
            </thead>
            <tbody>
                <?php echo (dataTable()); ?>
                </tfoot>
        </table>
    </div>

    <script>
        $(document).ready(function() {
            $('#example').DataTable();
        });
    </script>

</body>

</html>