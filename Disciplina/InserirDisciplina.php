<?php
session_start();
include'../conexao.php';

$codigo= isset($_POST['codigo']) == true ? $_POST['codigo']:"";
$nome= isset($_POST['nome']) == true ? $_POST['nome']:"";
$Professor = $_POST['Professor'];

if(isset($_POST['save_multi_select']))
{
    $brands = $_POST['brandlist'];
    
    //$int = (sizeof($brands));
    //print_r($int);
    //print_r($brands);

    $string = implode(", ", $brands);

                    
        $query = "INSERT INTO `disciplina`(`Codigo_Disciplina`,`Nome_Disciplina`, `Nome_Professor`, `Nomes_Estudantes`) VALUES ('$codigo', '$nome', '$Professor', '$string')";
        $query_run = mysqli_query($link, $query);
    
        Header("Location: PaginaDisciplina.php");

}
?>