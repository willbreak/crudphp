<?php
$id=$_POST['id'];

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

    <form action="\crudphp\App\controlers\atualiza.php" method="POST" class="formcadastra">
    <h1>Pagina de atualização</h1>
    <label for="nomecamp">Nome</label></br>
    <input type="text" name="nomecamp" maxlength="13" /></br></br>
    <label for="telefonform">Telefone</label></br>
    <input type="number" name="telefonform"/></br></br>
    <label for="cidadeform">Cidade</label></br>
    <input type="text" name="cidadeform"/></br></br>
    <input type="hidden" name="id" value="<?php echo $id ?>">

   <!--<select class="selc">
     <option>Familia</option>
     <option>Amigo</option>
     <option>Colega</opton>
     <option>
    </select><br/><br/>-->
    <button name="Formcadastra" type="submit">Atualizar</button>

    </form>
   <?php require_once "footer.php"?>
    </center>
</body>
</html>