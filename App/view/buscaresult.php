<?php

require_once "../../vendor/autoload.php";

?>
<html>
<head>
<title>CrudPHP</title>
<meta charset="utf-8">
<link rel="stylesheet" type="text/css" href="style.css">
</head>



<body>

<center>
<?php require 'nav.php'; ?>
<div id="container-box-contato">
<?php 
$busca=addslashes($_POST['search']);

$comando= new \App\model\ProdutoDao();
$lista= $comando->search($busca);
 foreach($lista as $produto):
?>
    <div id="box-contato">
        <div id='face'>
        <img src="img/group.svg">
        </div>
        <div id="information">
            <p>NOME : <?php echo substr($produto["nome"],0,10)  ?></p>
            <p>TELEFONE: <?php echo $produto["numero"] ?></p>
            <p>CIDADE: <?php echo $produto["cidade"] ?></p>
            
                <div id="formsbuttons">
                    <form action="App/view/atualiza.php" method="POST">
                        <input type="hidden" value="<?php echo $produto['id'] ?>" name="id">
                    <button id="buuton-box1"type="submit">AT</button>
                    </form>
                    <form action="App/view/delete.php" method="POST">
                    <input type="hidden" value="<?php echo $produto['id'] ?>" name="id">
                    <input type="hidden" value="<?php echo $produto['nome'] ?>" name="nome">
                    <button id="buuton-box2"type="submit">Dl</button>
                
                    </form>
                    </div>
                    
         </div>
    </div>
    <?php  endforeach; ?>
</div>

<?php require "footer.php" ?>
 </center>
 </body>
</html>


