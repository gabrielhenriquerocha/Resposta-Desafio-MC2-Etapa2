<?php

include'../conexao.php';

$codigo=$_GET['id'];


$sql="DELETE FROM Professor  WHERE Codigo_Professor='$codigo'";
$query=mysqli_query($link,$sql);

        Header("Location: PaginaProfessor.php");
    
?>