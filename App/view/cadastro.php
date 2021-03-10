<?php
    session_start();
    if($_SESSION["verifica"]!=="bG9nYWRv"):
        header('location:..\..\index.php');
    endif;
    
?>

<html>
<head>
<meta charset="utf-8">
<title>
CrudPHP
</title>
<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

<center>
    <?php require 'nav.php' ?>
<?php if($_SESSION['mostra']=='valido'): echo "<div class='testeoverview'>Usuario Cadastrado com sucesso</div> "; endif;?>
<?php if($_SESSION['mostra']=='ferrou'): echo "<div style='background-color:red' class='testeoverview off'>Erro ao cadastrar no banco de dados</div>"; endif;?>

    <form action="\crudphp\App\controlers\cadastrabd.php" method="POST" class="formcadastra">
    <h1>Pagina de cadastro</h1>
    <label for="nomecamp">Nome</label></br>
    <input type="text" name="nomecamp" maxlength="13"/></br></br>
    <label for="telefonform">Telefone</label></br>
    <input type="number" name="telefonform"/></br></br>
    <label for="cidadeform">Cidade</label></br>
    <input type="text" name="cidadeform"/></br></br>
   <!--<select class="selc">
     <option>Familia</option>
     <option>Amigo</option>
     <option>Colega</opton>
     <option>
    </select><br/><br/>-->
    <button name="Formcadastra" type="submit">Cadastrar</button>

    </form>
   <?php require_once "footer.php"?>
    </center>
</body>
<script>
   var box=document.querySelector('.testeoverview');   function removefun(){  box.remove() <?php $_SESSION['mostra']='invalido'?> }; 
window.addEventListener('load',function()
{ setTimeout(removefun,5000);
}) 
</script>
</html>