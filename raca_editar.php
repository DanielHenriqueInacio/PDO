<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <title>Site de Herois</title>
<link rel="stylesheet" href="http://getbootstrap.com/docs/4.1/examples/sticky-footer-navbar/sticky-footer-navbar.css">
</head>
<body>
    
    <?php 
    include "menu.php";
    include "conexao.php";

    $id = $_GET['id'] ?? false;
    if($id === false) {
        die("parametro de identificação ausente") ;
    } 
    $sql = "select * from racas where id = :id";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(":id", $id);
    $stmt->execute();
    $raca = $stmt->fetch(PDO::FETCH_OBJ);
    ?>

    <div class="container mt-5">
        <h1 class="display-3">
            Cadastrar Raça
        </h1>
        <hr>
        <form action="raca_atualizar.php?id=<?php echo $raca->id ?>" method="post">
            <div class="form-group">
                <label for="nome">Nome</label>
                <input type="text" class="form-control" value="<?php echo $raca->nome ?>" name="nome" id="nome" placeholder="Nome">
            </div>
            <div class="form-group">
                <label for="desc">Descrição</label>
                <textarea class="form-control" rows="8" name="desc" id="desc" placeholder="Descrição"><?php echo $raca->descricao ?></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Salvar</button>
        </form>  
    </div>
    <footer class="footer bg-dark text-white">
        <div class="container">
            <span class="text-muted">Place sticky footer content here.</span>
        </div>
    </footer>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>