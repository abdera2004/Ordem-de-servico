<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>OS</title>
</head>
<body class="container">
    <h1 style="text-align: center;">REGISTRAR</h1>

    <div class="position-absolute top-50 start-50 translate-middle d-flex flex-row shadow-lg p-5 mb-5 rounded bg-info" style="border-radius: 15px; ">
        <form method="POST" action="/cadastrar" class="">
        @csrf
            <b class="text-white">NOME: </b>
            <input id="nome" class="form-control mb-1" type="text" name="nome" size="32cm" style=""></input>
    
            <b class="text-white">CPF: </b>
            <input id="cpf" class="form-control mb-1" type="text" name="cpf" size="32cm" style=""></input>

            <b class="text-white">TELEFONE: </b>
            <input id="telefone" class="form-control mb-1" type="tel" name="telefone" size="32cm" style=""></input>

            <b class="text-white">MODELO: </b>
            <input id="modelo" class="form-control mb-1" type="text" name="modelo" size="32cm" style=""></input>
            
            <b class="text-white">MARCA: </b>
            <input id="marca" class="form-control mb-1" type="text" name="marca" size="32cm" style=""></input>
            
            <b class="text-white">DEFEITO: </b>
            <input id="defeito" class="form-control mb-3" type="text" name="defeito" size="32cm" style=""></input>
            
            <input type="submit" name="registrar" value="Cadastrar" style="" class="btn btn-warning"></input>
        </form>
    </div>
</body>
</html>