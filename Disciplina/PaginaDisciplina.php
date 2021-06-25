<?php session_start(); include'../conexao.php';
 $sql="SELECT *  FROM disciplina";  
    $query=mysqli_query($link,$sql);
    $roww=mysqli_fetch_array($query);     
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funda of Web IT</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <?php 
                    if(isset($_SESSION['status']))
                    {
                        ?>
                            <div class="alert alert-warning alert-dismissible fade show" role="alert">
                            <strong>Hey!</strong> <?php echo $_SESSION['status']; ?>
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>
                        <?php
                         unset($_SESSION['status']);
                    }
                ?>
                <div class="card mt-5">
                    <div class="card-header">
                        <h4>Cadastro de Disciplina</h4>
                    </div>
                    <div class="card-body">
                          
                        <form action="InserirDisciplina.php" method="POST">
                            <input type="text" class="form-control mb-3" name="codigo" placeholder="Código">
                                    <input type="text" class="form-control mb-3" name="nome" placeholder="Nome">
                                       <div>
                                    Selecione o professor:
                                    <select name="Professor">
                                        <option></option>
                                        <?php
                                        $result="SELECT * FROM professor";
                                        $result=mysqli_query($link,"SELECT * FROM professor");
                                        while($row=mysqli_fetch_assoc($result)) { ?>                                           
                                        <option value="<?php echo $row['Nome_Professor']; ?>"><?php echo $row['Nome_Professor'];?></option><?php      
                                         }
                                         ?>
            
                                    </select>
                                    <br />
                                    Selecione os estudante (Pressione ctrl para selecionar mais de um):
                            <div class="form-group mb-3">
                                
                                <select name="brandlist[]" multiple class="form-control">
                                    <?php                                      
                                        $result1="SELECT * FROM estudante";
                                        $result1=mysqli_query($link,"SELECT * FROM estudante");
                                        while($row1=mysqli_fetch_assoc($result1))
                                        { ?>
                                        <option value="<?php echo $row1['Nome_Estudante'] ?> "><?php echo $row1['Nome_Estudante'];?></option><?php }?>                                           
                                        ?>
                                </select>
                            </div>
                            <div class="form-group">
                                <button type="submit" name="save_multi_select" class="btn btn-primary">Save Data</button>
                            </div>

                        </form>
                        

                    </div>
                    <div class="col-md-8">
                            <table class="table" >
                                <thead class="table-success table-striped" >
                                    <tr>
                                        <th>Código</th>                                   
                                        <th>Nome</th>
                                        <th>Professor</th>                                   
                                        <th>Quantidade de estudantes</th>
                                        
                                        <th></th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                        <?php
                                            while($roww=mysqli_fetch_array($query)){
                                        ?>

                                            <tr>
                                                <th><?php  echo $roww['Codigo_Disciplina']?></th>
                                                <th><?php  echo $roww['Nome_Disciplina']?></th>
                                                <th><?php  echo $roww['Nome_Professor']?></th>
                                                <th><?php  echo $roww['Nomes_Estudantes']?></th>

                                                <th><a href="AtualizarDisciplina.php?id=<?php echo $roww['Codigo_Disciplina'] ?>" class="btn btn-info">Consultar</a></th>
                                                <th><a href="DeletarDisciplina.php?id=<?php echo $roww['Codigo_Disciplina'] ?>" class="btn btn-danger">Deletar</a></th>
                                            </tr>
                                        <?php 
                                            }
                                        ?>
                                </tbody>
                            </table>
                        </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>