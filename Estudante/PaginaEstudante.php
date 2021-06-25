<?php 
   include'../conexao.php';
    $sql="SELECT *  FROM estudante";
    $query=mysqli_query($link,$sql);

    $row=mysqli_fetch_array($query);

?>
<!DOCTYPE html>
<head>
 <link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
 <style>
   
   h1{
     font-size:40px;  color: #red; text-align: center;
   }
    select {
      width: 100%;
      min-height: 50px;
      margin-bottom: 20px;
    }

  </style>
</head>
<body>

<div class="container mt-5">
                    <div class="row"> 
                        
                        <div class="col-md-3">
                            <h1>Cadastro do Estudante</h1>
                                <form action="inserirestudante.php" method="POST">
                                    
                                    <input type="text" class="form-control mb-3" name="codigo" placeholder="Código">
                                    <input type="text" class="form-control mb-3" name="nome" placeholder="Nome">
                                    <input type="text" class="form-control mb-3" name="cpf" placeholder="CPF">
                                    <input type="text" class="form-control mb-3" name="datadenascimento" placeholder="Data de nascimento">
                                    
                                    <input type="submit" class="btn btn-primary">
                                </form>
                        </div>

                        <div class="col-md-8">
                            <table class="table" >
                                <thead class="table-success table-striped" >
                                    <tr>
                                        <th>Código</th>                                   
                                        <th>Nome</th>
                                        <th>CPF</th>
                                        <th>Data de nascimento</th>
                                        <th></th>
                                        <th></th>
                                    </tr>
                                </thead>

                                <tbody>
                                        <?php
                                            while($row=mysqli_fetch_array($query)){
                                        ?>
                                            <tr>
                                                <th><?php  echo $row['Codigo_Estudante']?></th>
                                                <th><?php  echo $row['Nome_Estudante']?></th>
                                                <th><?php  echo $row['CPF_Estudante']?></th>                                    
                                                <th><?php  echo $row['Datadenascimento_Estudante']?></th>
                                                <th><a href="Atualizar.php?id=<?php echo $row['Codigo_Estudante'] ?>" class="btn btn-info">Editar</a></th>
                                                <th><a href="DeletarEstudante.php?id=<?php echo $row['Codigo_Estudante'] ?>" class="btn btn-danger">Deletar</a></th>  
                                                                                       
                                            </tr>
                                        <?php 
                                            }
                                        ?>
                                </tbody>
                            </table>
                        </div>
                    </div>  
            </div>
    </body>
</html>