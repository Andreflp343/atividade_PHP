<!DOCTYPE html>
<html>

<head>
    <title>Atividade</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="estilo.css">
</head>

<body>
<header>
    <h1>Guarde seus filmes</h1>
</header>

<?php
require_once('conexao.php');
if(!isset($_POST['titulo'])&& !isset($_POST['data'])){
    $_POST['titulo'] = "padrão";
    $_POST['data'] = "padrão";
}
$titulo = $_POST['titulo'];
$data = $_POST['data'];
$sql = "INSERT INTO filmes (id,nome,data) values(null,'$titulo','$data')";
try{ 
if($_POST['titulo']!="padrão"){
$con->exec($sql);
echo "<script>alert('Cadastro Realizado')</script>";
}
}catch(PDOException $e)
{
echo $sql . "<br>" . $e->getMessage();
}

?>

<div class="menu">
<form aciton="confirmação" method="post">
<input type="text" name="titulo" placeholder="Insira o nome do filme">
<input type="text" name="data" placeholder="ano de lançamento"><br>
<input type="submit" value="Cadastrar">
</form>
</div>


</div>
</body>

</html>