<h1>Novo Usuário</h1>
<form action="?page=salvar" method="POST"> <!-- Vai enviar para essa pagina para salvar -->
    <input type="hidden" name="acao" value="cadastrar"> <!-- Todos os dados para a pagina salvar mas em ação oculta para nao ver o URL-->
    <div class="mb-3">
        <label for="name">Nome</label>
        <input type="text" name="nome" class="form-control">
    </div>
    <div class="mb-3">
        <label for="email">Email</label>
        <input type="email" name="email" class="form-control">
    </div>
    <div class="mb-3">
        <label for="name">Senha</label>
        <input type="password" name="senha" class="form-control">
    </div>
    <div class="mb-3">
        <label for="name">Data de Nascimento</label>
        <input type="date" name="data_nasc" class="form-control">
    </div>
    <div class="mb-3">
        <button type="submit" class="btn btn-primary">Enviar</button>
    </div>
</form>