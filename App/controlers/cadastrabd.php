<?php

require_once "../../vendor/autoload.php";
session_start();
if($_SESSION["verifica"]!=="bG9nYWRv"):
    header('location:..\..\index.php');
endif;


$nome=addslashes($_POST["nomecamp"]);
$telefone=addslashes($_POST["telefonform"]);
$cidade=addslashes($_POST["cidadeform"]);
$_SESSION['mostra']="invalido";
$pessoa=new \App\model\Produto();
$pessoa->setNome($nome);
$pessoa->setTelefone($telefone);
$pessoa->setCidade($cidade);

$teste="fracasso";
$pessoaCadastra=new \App\model\ProdutoDao();
try{

    $teste=$pessoaCadastra->create($pessoa);
    
        if($teste=="sucesso"):
            $_SESSION['mostra']='valido';
        elseif($teste=="erro"):
            $_SESSION['mostra']="ferrou";
        endif;
        header('location:..\view\cadastro.php');

}catch(Except $e){
    echo "ERRO".$e;

}




?>