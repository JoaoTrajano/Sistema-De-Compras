<?php

    require "../model/Produto.class.php";

    $produto = new Produto();
    $codproduto = $_POST['codproduto'];

    $array = $produto->listar($codproduto);

    if($array > 1){
        echo 
        '
        <div class="row">
            <div class="col-md-8">
                <label><strong>Nome do Produto.</strong></label>
                <input name="'.$codproduto.'" id="produto" class="form-control" value="'.$array['nome'].'" readonly>
                <br>
                <label><strong>Quantidade.</strong></label>
                <input name="'.$codproduto.'" id="quantidade" class="form-control" placeholder="Digite a quantidade do produto." />
            </div><br><br>
            <div id="img" class="col-md-3" style="">
                <img src="http://localhost/plataforma/_img/carrinho-removebg.png" style="cursor:pointer;" alt="Adicionar Produto" width="40" onclick="addProduto()">
            </div>
        </div>';
    }else {
        echo 
        '<div class="col-md-6">
            <br>
            <div class="alert alert-danger" role="alert" style="text-align:center;">
                <span ><strong>Não há produtos com este código!</strong></span> 
            </div>
        </div>';
    }

?>