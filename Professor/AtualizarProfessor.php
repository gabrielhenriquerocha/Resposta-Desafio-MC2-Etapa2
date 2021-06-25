<?php 
    include'../conexao.php';
    $id=$_GET['id'];
    $sql="SELECT * FROM professor WHERE Codigo_Professor='$id'";
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
                    <form action="UpdateProfessor.php" method="POST">
                    
                     <input type="hidden" name="codigo" value="<?php echo $row['Codigo_Professor']  ?>">
                                
                     <input type="text" class="form-control mb-3" name="nome" placeholder="Nome" value="<?php echo $row['Nome_Professor']  ?>">
                     <input type="text" class="form-control mb-3" name="cpf" placeholder="Cpf" value="<?php echo $row['CPF_Professor']  ?>">
                     <input type="text" class="form-control mb-3" name="datadenascimento" placeholder="Datadenascimento" value="<?php echo $row['Datadenascimento_Professor']  ?>">
                                
                            <input type="submit" class="btn btn-primary btn-block" value="AtualizarProfessor">
                    </form>
                    
                </div>
    </body>
</html>