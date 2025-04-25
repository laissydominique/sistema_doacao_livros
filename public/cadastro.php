<div> 
    <div><h3>Cadastre-se no sistema</h3></div>
    <form action="../app/helpers/auth.php" method="POST" name="cadastro">
    <input type="hidden" name="form_type" value="cadastro"> 
        <label for="tipo_usuario">Tipo de usuário</label>
        <select name="tipo_usuario">
        <option value=""></option>
            <option value="1">Estudante</option>
            <option value="2">Doador</option>
        </select>
        <input type="email" name="email" placeholder="Email" required>
        <input type="password" name="senha" placeholder="Senha" required>
        <input type="password" name="confirmar_senha" placeholder="Confirme sua senha" required>
        <button type="submit">Cadastrar</button>
    </form>
</div>
