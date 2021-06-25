<?php

include'../conexao.php';

$codigo=$_GET['id'];


$sql="DELETE FROM disciplina  WHERE Codigo_Disciplina='$codigo'";
$query=mysqli_query($link,$sql);

        Header("Location: PaginaDisciplina.php");
    
?>