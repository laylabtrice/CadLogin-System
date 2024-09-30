<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='style.css'>
    <title>Login</title>
</head>
<body>
    <main>
    <h2>Login de usuário</h2>
        <form action="index.php?action=login" method="post">
            <section>
                <label for="">E-mail</label>
                <input type="email" name="email" placeholder="email" required>  
            </section>
            <section>
                <label for="">Senha</label>
                <input type="password" name="senha" placeholder="senha" required>
            </section>
            <button type="submit">Login</button>
        </form>
        <a href="index.php?action=register">Cadastre-se</a>
    </main>
</body>
</html>