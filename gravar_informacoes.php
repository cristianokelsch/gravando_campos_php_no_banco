<?php

$nome = $_POST['nome'];
$email = $_POST['email'];

$host = "localhost";
$user = "root";
$pass = "";
$banco = "demonstracao";

$conexao = mysqli_connect($host, $user, $pass, $banco) or die(mysql_errno());
        
$sql = "insert into usuario (nome,email) values ";
$sql .= "('$nome','$email')";

mysqli_query($conexao, $sql) or die(mysql_errno());
mysqli_close($conexao);

echo 'Informações inseridas com sucesso.'

?>

<a href="index.php"> <input type="button" value="Voltar para a página inicial" /> </a>