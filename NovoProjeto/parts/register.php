<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Cadastro</title>
<link rel="stylesheet" href="../style/login.css">
<link rel="stylesheet" href="../style/register.css">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300&display=swap" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
<?php 
require('menu.php');
?>
<div>
    <div class="boxRegister">
        <div class="title">
            <h1>Novo cadastro</h1>
        </div>
        <div>
            <form action="#">
                <div class="mb-3">
                    <label for="inputUsuario" class="form-label"><i class="bi bi-person"></i></label>
                    <input type="text" id="inputUsuario" name="inputUsuario" class="form-control" placeholder="Nome Completo">
                </div>
                <div class="mb-3">
                    <label for="inputUsuario" class="form-label"><i class="bi bi-person-vcard"></i></label>
                    <input type="text" id="inputUsuario" name="inputUsuario" class="form-control" placeholder="CPF">
                </div>
                <div class="mb-3">
                    <label for="inputUsuario" class="form-label"><i class="bi bi-calendar3"></i></label>
                    <input type="text" id="inputUsuario" name="inputUsuario" class="form-control" placeholder="Data Nascimento">
                </div>
                <div class="mb-3">
                    <label for="inputUsuario" class="form-label"><i class="bi bi-telephone"></i></label>
                    <input type="text" id="inputUsuario" name="inputUsuario" class="form-control" placeholder="Telefone">
                </div>
                <div class="mb-3">
                    <label for="inputUsuario" class="form-label"><i class="bi bi-house"></i></label>
                    <input type="text" id="inputUsuario" name="inputUsuario" class="form-control" placeholder="CEP">
                </div>
                <div class="mb-3">
                    <label for="inputUsuario" class="form-label"><i class="bi bi-house"></i></label>
                    <input type="text" id="inputUsuario" name="inputUsuario" class="form-control" placeholder="Endereço">
                </div>
                <div class="mb-3">
                    <label for="inputUsuario" class="form-label"><i class="bi bi-house"></i></label>
                    <input type="text" id="inputUsuario" name="inputUsuario" class="form-control" placeholder="Cidade">
                </div>
                <div class="mb-3">
                    <label for="inputUsuario" class="form-label"><i class="bi bi-house"></i></label>
                    <input type="text" id="inputUsuario" name="inputUsuario" class="form-control" placeholder="Estado">
                </div>
            </form>
        </div>
        <div class="btnRegister">
            <a href="parts/home.php"><button class="btn btn-success logarBtn" title="Limpar"><b class="icon icon-paper-plane-o"> Limpar</b></button></a>
            <a href="parts/home.php"><button class="btn btn-success logarBtn" title="Salvar"><b class="icon icon-paper-plane-o"> Salvar</b></button></a>
        </div>
    </div>
</div>
<?php
require('footer.php');
?>