<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="page">
        <form method="get" action="cad.php" class="formLogin">
            <h1>Login</h1>
            <p>Digite os seus dados de acesso no campo abaixo.</p>
            <input type="text" name="nome" id="idnome" placeholder="Digite seu nome" autofocus="true" />
            <input type="text" name="sobrenome" placeholder="Digite seu sobrenome" />
            <input type="submit" value="Enviar" class="btn" />
        </form>
    </div>
</body>
</html>