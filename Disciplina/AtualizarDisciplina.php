<?php 
    include'../conexao.php';
    $id=$_GET['id'];
    $sql="SELECT * FROM disciplina WHERE Codigo_Disciplina='$id'";
$query=mysqli_query($link,$sql);
$row=mysqli_fetch_array($query);
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel = "stylesheet" href="../css/bootstrap.min.css">
        <title>Atualizar</title>
           
    </head>
    <body>
                <div class="container mt-5">
                    <form action="UpdateDisciplina.php" method="POST">
                    
                     <input type="hidden" name="codigo" value="<?php echo $row['Codigo_Disciplina']  ?>">                            
                     <input type="text" class="form-control mb-3" name="nome" placeholder="Nome" value="<?php echo $row['Nome_Disciplina']  ?>">
                     <input type="text" class="form-control mb-3" name="professor" placeholder="Professor" value="<?php echo $row['Nome_Professor']  ?>">
                     <input type="text" class="form-control mb-3" name="estudantes" placeholder="Estudantes" value="<?php echo $row['Nomes_Estudantes']  ?>">
                                
                            <input type="submit" class="btn btn-primary btn-block" value="Atualizar">
                    </form>
                    
                </div>
    </body>
</html>