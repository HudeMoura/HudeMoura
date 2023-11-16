<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Login</title>
<link rel="stylesheet" href="style/login.css">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300&display=swap" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">

<?php 
require('parts/login.php');
?>
<div class="container mt-5">
  <div class="row">
    <div class="col">
      <?php
      $page = @$_REQUEST['page'];

      switch ($page) {
        case 'cadastro':
            include("register.php");
            break;
        case 'listar':
            include("list.php");
            break;
        case 'salvar':
            include("save.php");
            break;
        case 'editar':
            include("edit.php");
            break;
        default:
            include("default.php");
        }
      ?>
    </div>
  </div>
</div>
<?php
require('parts/footer.php');
?>