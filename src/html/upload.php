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
    <h1>Upload</h1>

    <form action="../endpoints/upload2.php" method="POST" enctype="multipart/form-data">
        <input type="file" name="file">

        <button>Realizar upload</button>
    </form>
</body>

</html>