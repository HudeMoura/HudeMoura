<h1>Editar Usuário</h1>
<?php
    $sql = "SELECT * FROM usuarios WHERE id=".$_REQUEST["id"]; // Seleciono todos do banco usuários trazendo o ID 
    $res = $conn -> query($sql); // Resultado vai executar a conexão com meu SQL
    $row = $res -> fetch_object(); // Trazendo o resultado
?>
<form action="?page=salvar" method="POST"> <!-- Vai enviar para essa pagina para salvar -->
    <input type="hidden" name="acao" value="editar"> <!-- Todos os dados para a pagina salvar mas em ação oculta para nao ver o URL-->
    <input type="hidden" name="id" value="<?php print $row->id; ?>"> <!-- Id obrigatorio para edição -->
    <div class="mb-3">
        <label for="name">Nome</label>
        <input type="text" name="nome" value="<?php print $row->nome; ?>" class="form-control">
    </div>
    <div class="mb-3">
        <label for="email">Email</label>
        <input type="email" name="email" value="<?php print $row->email; ?>" class="form-control">
    </div>
    <div class="mb-3">
        <label for="name">Senha</label>
        <input type="password" name="senha" class="form-control" required>
    </div>
    <div class="mb-3">
        <label for="name">Data de Nascimento</label>
        <input type="date" name="data_nasc" value="<?php print $row->data_nasc; ?>" class="form-control">
    </div>
    <div class="mb-3">
        <button type="submit" class="btn btn-primary">Enviar</button>
    </div>
</form>