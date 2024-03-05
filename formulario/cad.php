<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <?php 
            $nome = $_GET["nome"] ?? "desconhecido";
            $snome = $_GET["sobrenome"] ?? "sem sobrenome";
            echo "É um prazer te conhecer, <strong>$nome $snome</strong>  este é meu site";
        ?>
        <p><a href="javascript:history.go(-1)">Voltar para pagina anterior</a></p>
    </main>
</body>
</html>