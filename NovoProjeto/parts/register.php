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
<div class="pageRegister">
    <div class="boxRegister">
        <div class="title">
            <h1>Novo cadastro</h1>
        </div>
        <div class="caduser">
            <form action="#">
            <div class="mb-3 row">
                <label for="inputPassword" class="col-sm-2 col-form-label"><i class="bi bi-person"></i></label>
                <div class="col-sm-10">
                <input type="password" id="inputName" class="form-control" placeholder="Nome completo">
                </div>
            </div>
            <div class="mb-3 row">
                    <div class="col-auto">
                        <label for="inputName" class="col-sm-2 col-form-label"><i class="bi bi-person"></i></label>
                    </div>
                    <div class="col-auto">
                        <input type="text" id="inputName" class="form-control" aria-describedby="passwordHelpInline" placeholder="Nome completo">
                    </div>
                </div>
                <div class="row g-3 align-items-center">
                    <div class="col-auto">
                        <label for="inputCpf" class="col-form-label"><i class="bi bi-person-vcard"></i></label>
                    </div>
                    <div class="col-auto">
                        <input type="text" id="inputCpf" class="form-control" aria-describedby="passwordHelpInline" placeholder="***.***.***-**">
                    </div>
                </div>
                <div class="row g-3 align-items-center">
                    <div class="col-auto">
                        <label for="inputDate" class="col-form-label"><i class="bi bi-calendar3"></i></label>
                    </div>
                    <div class="col-auto">
                        <input type="date" id="inputDate" class="form-control" aria-describedby="passwordHelpInline">
                    </div>
                </div>
                <div class="row g-3 align-items-center">
                    <div class="col-auto">
                        <label for="inputPhone" class="col-form-label"><i class="bi bi-telephone"></i></label>
                    </div>
                    <div class="col-auto">
                        <input type="text" id="inputPhone" class="form-control" aria-describedby="passwordHelpInline" placeholder="(**) *****-****">
                    </div>
                </div>
                <div class="row g-3 align-items-center">
                    <div class="col-auto">
                        <label for="inputCep" class="col-form-label"><i class="bi bi-house"></i></label>
                    </div>
                    <div class="col-auto">
                        <input type="text" id="inputCep" class="form-control" aria-describedby="passwordHelpInline" placeholder="CEP">
                    </div>
                </div>
                <div class="row g-3 align-items-center">
                    <div class="col-auto">
                        <label for="inputAddreses" class="col-form-label"><i class="bi bi-house"></i></label>
                    </div>
                    <div class="col-auto">
                        <input type="text" id="inputAddreses" class="form-control" aria-describedby="passwordHelpInline" placeholder="Endereço">
                    </div>
                </div>
                <div class="row g-3 align-items-center">
                    <div class="col-auto">
                        <label for="inputCity" class="col-form-label"><i class="bi bi-house"></i></label>
                    </div>
                    <div class="col-auto">
                        <input type="text" id="inputCity" class="form-control" aria-describedby="passwordHelpInline" placeholder="Cidade">
                    </div>
                </div>
                <div class="row g-3 align-items-center">
                    <div class="col-auto">
                        <label for="inputState" class="col-form-label"><i class="bi bi-house"></i></label>
                    </div>
                    <div class="col-auto">
                        <input type="text" id="inputState" class="form-control" aria-describedby="passwordHelpInline" placeholder="Estado">
                    </div>
                </div>
            </form>
        </div>
        <div class="btnRegister">
            <a href="parts/home.php"><button class="btn btn-success logarBtn" title="Limpar"><b class="icon icon-paper-plane-o"><i class="bi bi-eraser"></i> Limpar</b></button></a>
            <a href="parts/home.php"><button class="btn btn-success logarBtn" title="Salvar"><b class="icon icon-paper-plane-o"><i class="bi bi-floppy"></i> Salvar</b></button></a>
        </div>
    </div>
</div>
<?php
require('footer.php');
?>