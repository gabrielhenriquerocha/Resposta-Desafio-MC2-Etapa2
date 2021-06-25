<?php

include'../conexao.php';


$codigo=$_POST['codigo'];
$nome=$_POST['nome'];
$cpf=$_POST['cpf'];
$datadenascimento=$_POST['datadenascimento'];

$sql="UPDATE professor SET  Codigo_Professor = '$codigo', Nome_Professor='$nome',CPF_Professor='$cpf', Datadenascimento_Professor='$datadenascimento' WHERE Codigo_Professor='$codigo'";

$query=mysqli_query($link,$sql);

        Header("Location: PaginaProfessor.php");

?>