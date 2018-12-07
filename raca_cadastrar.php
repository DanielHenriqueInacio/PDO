<?php
 include "vendor/autoload.php";
if (!session_id()) @session_start();

$msg = new \Plasticbrain\FlashMessages\FlashMessages();
?>
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
        <h1 class="display-3">
            Cadastrar Raça
        </h1>
        <hr>
        <?php $msg->display(); ?>
        <form id="form-racas" action="raca_salvar.php" method="post" novalidate="novalidate">
            <div class="form-group">
                <label for="nome">Nome</label>
                <input type="text" class="form-control" name="nome" id="nome" placeholder="Nome">
            </div>
            <div class="form-group">
                <label for="desc">Descrição</label>
                <textarea class="form-control" rows="8" name="desc" id="desc" placeholder="Descrição"></textarea>
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
    <script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.0/dist/jquery.validate.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.0/dist/additional-methods.min.js"></script>
    <script>
        $(document).ready(function(){
            $("#form-racas").validate({
                rules: {
                    nome: {
                        required: true,
                        minlength:  2
                    },
                    desc: "required"
                },
                messages: {
                    nome: {
                        required: "Campo obrigatorio",
                        minlength: "Pelo menos 10 letras"
                    },
                    desc: "Campo descricao obrigatorio"
                },

                errorElement: 'span',
                errorPlacement: function (error, element) {
                    error.addClass('invalid-feedback');
                    element.closest('.form-group').append(error);
                },
                highlight: function (element, errorClass, validClass) {
                    $(element).addClass('is-invalid');
                },
                unhighlight: function (element, errorClass, validClass) {
                    $(element).removeClass('is-invalid').addClass("is-valid");
                }
            })
        })
    </script>
</body>
</html>