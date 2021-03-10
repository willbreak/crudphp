<?php 
require_once "../../vendor/autoload.php";
$id= addslashes($_POST['id']);
$comando= new \App\model\ProdutoDao();
$testedelet=$comando->delete($id);
if($testedelet=="Sucesso"){
    echo "<div style='background:green;width:100%;height:100px;color:white;'><h1>Usuario deletado com sucesso</h1></div>";
    header("refresh:3; url=../../index.php");
}else{
    echo "<div style='background:red;width:100%;height:100px;color:white;'><h1>Erro ao Deletar usuario</h1></div>";
    header("refresh:3; url=../../index.php");
}
?>
