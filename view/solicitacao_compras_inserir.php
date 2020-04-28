<?php

session_start();
$nome = $_SESSION['nome_usuario'];
$nivel_usuario = $_SESSION['nivel_usuario'];

require '..\model\VisaoUsuario.class.php';
$menu = new VisaoUsuario();

if(empty($nome) AND $nivel_usuario != 1){
    unset($_SESSION['nome_usuario']);
    unset($_SESSION['nivel_usuario']);
    session_destroy();
    header('Location: http://localhost/plataforma');
}

$resultado = '';

if(isset($_POST['inserir'])){
    $resultado = '<span style="color:green;">Solicitação inserida com sucesso!</span>';
    $dataEmissao = $_POST['data_emissao'];
}

$menu->visaoMenuPrincipal();
$corpo = '<br>
<div class="container" style="border: 5px outset; border-radius: 5px;padding: 10px;">
    <div class="row">
        <div class="col-md-12">
            '.$resultado.'
            <form method="POST" action="http://localhost/plataforma/view/solicitacao_compras_inserir.php">
                <div class="form-group">
                    <div class="row">
                        <div class="col-md-3">
                            <label><strong>Data da Emissão.</strong></label>
                            <input name="data_emissao" type="text" class="form-control" value="'.date('d-m-Y').'"  readonly>
                        </div> 
                        <div class="col-md-9">
                            <label for="nome_solicitante"><strong>Nome do Emissor.</strong></label>
                            <input name="nome_solicitante" id="nome_solicitante" type="text" class="form-control" placeholder="Digite seu nome.">
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-md-6">
                            <label><strong>Observações.</strong></label>
                            <textarea style="height:155px;" class="form-control" maxlength="255" name="obs" height=""> </textarea>
                            <br>
                        </div> 
                    </div>

                    <div class="row">
                        <div class="col-md-2">
                            <input name="inserir" type="submit" class="btn btn-success form-control" value="Confirmar">
                        </div>
                    </div>
                </div>
            </from>
        </div>
    </div>
</div>
    <script> 
        function sair(){
            if(confirm("Deseja mesmo sair?")){
                window.location.href = "http://localhost/plataforma/sair.php";
            }
        }
    </script>
    </body>
</html>';

echo $corpo;
