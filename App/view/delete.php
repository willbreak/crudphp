<?php
$id=$_POST['id'];
$nome=$_POST['nome'];

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
    <form class="formdelete" method="POST" action="\crudphp\App\controlers\delete.php">
        <h1>Tem certeza que vc quer escluir esse contato? : <?php echo $nome  ?></h1>
    <input type="hidden" name="id" value="<?php echo $id ?>">
    <button class="btndelete"type="submit">Sim</button><a id="adelete" href="../../index.php">Nao</a>

</form>
<?php require_once "footer.php"?>
</center>
</body>
</html>