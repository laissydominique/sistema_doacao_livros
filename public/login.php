
<div> 
    <div><h3>Entre no sistema</h3></div>
    <form action="../app/helpers/auth.php" method="POST">
    <input type="hidden" name="form_type" value="login"> 
        <input type="email" name="email" placeholder="Email" required>
        <input type="password" name="senha" placeholder="Senha" required>
        <button type="submit">Entrar</button>
    </form>
</div>
