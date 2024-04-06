<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Index</title>
</head>

<x-header />

<body class="bg-dark">

    <div class="position-absolute top-50 start-50 translate-middle d-flex flex-row shadow-lg p-5 mb-5 rounded" style="background-color: #EBA900; border-radius: 15px;">
    <form>
        <h3>Login</h3>

        <input placeholder="Nome" class="form-control mb-4 rounded-5" type="text" name="nome" size="32cm" style=""></input>

        <input placeholder="Senha" class="form-control mb-4 rounded-5" type="password" name="senha" size="32cm" style=""></input>

        <input name="logar" type="submit" class="btn btn-dark col-12 rounded-5"></input>
    </form>

    </div>
</body>

<style>

body {
    }
</style>

</html>