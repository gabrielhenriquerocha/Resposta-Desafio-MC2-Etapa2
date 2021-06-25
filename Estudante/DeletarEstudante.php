<?php

include'../conexao.php';

$codigo=$_GET['id'];


$sql="DELETE FROM estudante  WHERE Codigo_Estudante='$codigo'";
$query=mysqli_query($link,$sql);

        Header("Location: PaginaEstudante.php");
    
?>