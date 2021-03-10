<?php 
require_once "../../vendor/autoload.php";

$nome=addslashes($_POST['nomecamp']);
$telefone=intval(addslashes($_POST['telefonform']));
$cidade=addslashes($_POST['cidadeform']);
$id=intval(addslashes($_POST['id']));
$pessoa=new \App\model\Produto();

$pessoa->setNome($nome);
$pessoa->setTelefone($telefone);
$pessoa->setCidade($cidade);
$pessoa->setId($id);

$pessoaatualiza= new \App\model\ProdutoDao();
$teste4=$pessoaatualiza->update($pessoa);

if($teste4=="sucesso"){
    echo "<div style='background:green;width:100%;height:100px;color:white;'><h1>Usuario atualizado com sucesso</h1></div>";
    header("refresh:3; url=../../index.php");
}else{
    echo "<div style='background:red;width:100%;height:100px;color:white;'><h1>Erro ao atualizar o usuario</h1></div>";
    header("refresh:3; url=../../index.php");
}

?>