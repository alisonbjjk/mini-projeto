<?php
session_start();

?>
    <!-- <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.25/js/dataTables.bootstrap5.min.js"></script> -->

<script>
var baseUrl = (window.location).href; // You can also use document.URL
var koopId = baseUrl.substring(baseUrl.lastIndexOf('=') + 1);
alert(koopId)//503

</script>
<script>
function clickEnviar() {
    var nome = document.getElementById('id').value;
    var dados = "id="+koopId
    $.ajax({
        url:"<?php echo 'teste.php' ; ?>empresas/addEmpresaPost",
        type:'POST',
        data:{inputDadosEmpresa:dados},
        dataType:'html',
        success:function(html) {
            alert("SUCESSO!");

            alert("SUCESSO!");
        }
    });
}

</script>

