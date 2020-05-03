<?php

session_start();
$nome = $_SESSION['nome_usuario'];
$nivel_usuario = $_SESSION['nivel_usuario'];
$_SESSION['titulo_pagina_atual'] = 'Inserir Solicitações';

require '..\model\VisaoUsuario.class.php';
$menu = new VisaoUsuario();

if(empty($nome) AND $nivel_usuario != 1){
    unset($_SESSION['nome_usuario']);
    unset($_SESSION['nivel_usuario']);
    session_destroy();
    header('Location: http://localhost/plataforma');
}

$resultado = '';
$options = '';

if(isset($_POST['inserir'])){
    $resultado = '<span style="color:green;">Solicitação inserida com sucesso!</span>';
    $dataEmissao = $_POST['data_emissao'];
    $matriz = $_POST['matrizProduto'];
    $obsrvacao = $_POST['obs'];
}

$arrayPrioridade = array('A'=>'Prioridade Alta (A)','B'=>'Prioridade Média (B)','C'=>'Prioridade Alta (C)');

foreach($arrayPrioridade as $indice => $value){
    $options .= '<option value="'.$indice.'" class="form-control">'.$value.'</option>';
}

$menu->visaoMenuPrincipal();
$corpo = '<br>
<div class="container" >
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
                        <div class="col-md-12">
                            <label><strong>Observações.</strong></label>
                            <textarea style="height:155px;" class="form-control" maxlength="255" name="obs" height=""> </textarea>
                            <br>
                        </div> 
                    </div>

                    <div class="row">
                        <div class="col-md-2">
                            <label><strong>Código do Produto.</strong></label>
                            <input type="text" name="codproduto" id="codproduto" class="form-control" onblur="searchProduct()"/> 
                            <br>
                        </div>
                        <div id="input" class="col-md-5"></div>
                        
                        <div class="col-md-5">
                            <div class="row produtoCarrinho" id="">
                                <label><strong>Itens adicionados ao carrinho.</strong></label>
                            </div>
                        </div>
                    </div>
                    <br>
                    <br>
                    <div class="row">
                        <div class="col-md-5">
                            <label><strong>Defina o nível de prioridade</strong></label>
                            <select name="nivelPrioridade" class="form-control">
                                <option value="0" class="form-control">Selecione</option>
                                '.$options.'
                            </select>
                        </div> 
                    </div>
                    <br><br>
                    <div class="row">
                        <div class="col-md-10"></div>
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

        function searchProduct(){
            var codproduto = $("#codproduto").val();
            var input = $("#input").html();

            $.ajax({
                type: "POST",
                url: "http://localhost/plataforma/_ajax/ajax_buscar_produto.php",
                data: "&codproduto="+codproduto,
                success: function(msg){
                    $("#input").html("Carregando...");
                    $("#input").html(msg);

                    $("#img").focus();
                }
            });
        }

        function addProduto()
        {
            //div do nome do produto
            var valor = $("#produto").val();

            var codproduto = $("#produto").attr("name");

            var div_produtoCarrinho = document.querySelector("#produtoCarrinho");

            var input = document.createElement("input");

            input.setAttribute("value",valor);
            input.setAttribute("name","matrizProduto[nomeProduto]["+codproduto+"]");
            input.setAttribute("id","div"+codproduto);
            input.setAttribute("class","col-md-9 form-control");
            input.setAttribute("readonly","readonly");
            input.style.marginRight = "5";
            input.style.marginTop = "5";

            div_produtoCarrinho.appendChild(input);

            //div da quantidade
            var valor = $("#quantidade").val();

            var input = document.createElement("input");

            input.setAttribute("value",valor);
            input.setAttribute("name","matrizProduto[quantidadeProduto]["+codproduto+"]");
            input.setAttribute("id","div"+codproduto);
            input.setAttribute("class","col-md-2 form-control");
            input.setAttribute("readonly","readonly");
            input.style.marginTop = "5";
            
            div_produtoCarrinho.appendChild(input);

            //div excluir
            var ImgExcluir = document.createElement("img");
            var divExcluir = document.createElement("div");
            
            ImgExcluir.src = "http://localhost/plataforma/_img/excluir.png";
            ImgExcluir.style.width = "20";
            ImgExcluir.style.marginTop = "12";
            ImgExcluir.style.cursor = "pointer";
            ImgExcluir.setAttribute("alt","excluit item");

            ImgExcluir.onclick = function removerItem(){
                
            }
            divExcluir.setAttribute("id","div-excluir");
            divExcluir.style.marginLeft = "5";
            divExcluir.appendChild(ImgExcluir);
            
            div_produtoCarrinho.appendChild(divExcluir);
        }

    </script>
    </body>
</html>';

echo $corpo;
