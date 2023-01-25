<?php
session_start();
?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" type="text/css" href="css/app.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css"
          integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js"
            integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V"
            crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.3/jquery.min.js"
            integrity="sha512-STof4xm1wgkfm7heWqFJVn58Hm3EtS31XFaagaa8VMReCXAkQnJZ+jEy8PCC/iT18dFy95WcExNHFTqLyp72eQ=="
            crossorigin="anonymous" referrerpolicy="no-referrer"></script>


    <title>Cadastro de Pessoa</title>
</head>
<body>

<div class="row mt-5">
    <?php
    if (isset($_SESSION['status_cadastro']) && $_SESSION['status_cadastro']):
        ?>
        <div class="row">
            <div class="col-md-1"></div>
            <div class="col-md-10">
                <div class="alert alert-success alert-dismissible">
                    <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                    Usuário Cadastrado com Sucesso!
                </div>
            </div>
        </div>
    <?php
    endif;
    unset($_SESSION['status_cadastro']);
    ?>
    <div class="col-md-1"></div>
    <div class="col-md-10 shadow p-3 mb-5 bg-white rounded">
        <form method="post" action="store.php">
            <h1 class="text-center">Cadastro de Pessoa</h1>
            <h3>Informações Básicas</h3>

            <div class="form-group">
                <label for="nome">Nome <strong>*</strong></label>
                <input type="text" class="form-control" id="nome" name="nome" placeholder="Digite o seu Nome" required>
            </div>

            <h3>Informações de Endereço</h3>
            <div class="form-group">
                <div class="row">
                    <div class="col-md-4">
                        <label for="cep">CEP <strong>*</strong></label>
                        <input type="text" class="form-control" id="cep" name="cep" placeholder="Digite o seu CEP" minlength="8" maxlength="8">
                    </div>
                    <div class="col-md-4">
                        <label for="estado">Estado <strong>*</strong></label>
                        <input type="text" class="form-control" id="estado" name="estado" readonly required>
                    </div>
                    <div class="col-md-4">
                        <label for="cidade">Cidade <strong>*</strong></label>
                        <input type="text" class="form-control" id="cidade" name="cidade" readonly required>
                    </div>
                </div>

                <div class="row mt-2">
                    <div class="col-md-6">
                        <label for="bairro">Bairro <strong>*</strong></label>
                        <input type="text" class="form-control" id="bairro" name="bairro" readonly required>
                    </div>
                    <div class="col-md-6">
                        <label for="rua">Rua <strong>*</strong></label>
                        <input type="text" class="form-control" id="rua" name="rua" readonly required>
                    </div>
                </div>

                <div class="row mt-2">
                    <div class="col-md-6">
                        <label for="numero">Número <strong>*</strong></label>
                        <input type="text" class="form-control" id="numero" name="numero" required>
                    </div>
                    <div class="col-md-6">
                        <label for="Complemento">Complemento</label>
                        <input type="text" class="form-control" id="complemento" name="complemento">
                    </div>
                </div>
            </div>
            <div class="row mt-2">
                <div class="col-md-4 offset-md-8">
                    <button type="submit" class="btn btn-primary w-100">Submit</button>
                </div>
            </div>

        </form>
    </div>
</div>

<script type="text/javascript" src="js/cep.js"></script>

</body>
</html>