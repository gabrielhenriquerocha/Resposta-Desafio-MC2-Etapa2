<?php

include'../conexao.php';


$codigo=$_POST['codigo'];
$nome=$_POST['nome'];
$professor = $_POST['professor'];
$estudantes = $_POST['estudantes'];

$sql="UPDATE disciplina SET  Codigo_Disciplina = '$codigo', Nome_Disciplina='$nome', Nome_Professor='$professor', Nomes_Estudantes='$estudantes' WHERE Codigo_Disciplina='$codigo'";

$query=mysqli_query($link,$sql);

        Header("Location: PaginaDisciplina.php");

?>