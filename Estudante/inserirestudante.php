<?php
include'../conexao.php';


$codigo= isset($_POST['codigo']) == true ? $_POST['codigo']:"";
$nome= isset($_POST['nome']) == true ? $_POST['nome']:"";
$cpf= isset($_POST['cpf']) == true ? $_POST['cpf']:"";
$datadenascimento= isset($_POST['datadenascimento']) == true ? $_POST['datadenascimento']:"";


$sql = "INSERT INTO `estudante`(`Codigo_Estudante`,`Nome_Estudante`, `CPF_Estudante`, `Datadenascimento_Estudante`) VALUES ('$codigo', '$nome', '$cpf', '$datadenascimento')";
$query= mysqli_query($link,$sql);

Header("Location: PaginaEstudante.php");
    

?>
