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
    ?>

    <div class="container mt-5">
        <div class="jumbotron">
            <h1 class="display-4">Personagens de RPGs</h1>
            <p class="lead">Criamos essa Pagina com o Intuito de ajudar as pessoas que querem conhecer os personagens de RPG. e ajudar a divulgar essas classes de personagens desse jogo que tanto amamos!</p>
            <hr class="my-4">
            <p>Cadastre aqui seu personagem.</p>
            <a class="btn btn-primary btn-lg" href="personagens_listar" role="button">Cadastrar</a>
        </div> 
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