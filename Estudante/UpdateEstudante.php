<?php

include'../conexao.php';


$codigo=$_POST['codigo'];
$nome=$_POST['nome'];
$cpf=$_POST['cpf'];
$datadenascimento=$_POST['datadenascimento'];

$sql="UPDATE estudante SET  Codigo_Estudante = '$codigo', Nome_Estudante='$nome',CPF_Estudante='$cpf', Datadenascimento_Estudante='$datadenascimento' WHERE Codigo_Estudante='$codigo'";

$query=mysqli_query($link,$sql);

        Header("Location: PaginaEstudante.php");

?>