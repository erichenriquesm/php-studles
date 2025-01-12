<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario basico</title>

    <style>
        input {
            display: block;
            margin-bottom: 10px;
        }
    </style>
</head>

<body>
    <h1>Meu formulário - GET</h1>

    <form action="./endpoints/index-get.php">
        <input type="text" name="name">
        <input type="email" name="email">
        <input type="tel" name="cellphone">

        <button>Cadastrar</button>
    </form>


    <h1>Meu formulário - POST</h1>

    <form action="../endpoints/index-post.php" method="POST">
        <input type="text" name="name">
        <input type="email" name="email">
        <input type="tel" name="cellphone">

        <button>Cadastrar</button>
    </form>
</body>

</html>