<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>OS</title>
</head>
<body class="container">

    <div class="container-fluid">
        <div class="row">

    <!-- Primeira div -->
    <div class="col-md-6 centralizado">
        <div class="position-relative">
            
            <img src="{{ url('./assets/imagens/consertar-celular.png') }}" alt="Imagem" class="imagem img-fluid">
            <div class="text-overlay">
                <b>A melhor assistência técnica do país.</b>
            </div>
        </div>
    </div>
    <!-- Segunda div -->
    <div class="col-md-6 centralizado">
        <div class="position-absolute d-flex flex-row shadow-lg p-5 mb-5 rounded">
            <form method="POST" action="/cadastrar" class="" >
            @csrf
                <h3>Preencha as informações</h3>
                    <input placeholder="Nome" id="nome" class="form-control mb-3" type="text" name="nome" size="32cm"></input>
            
                    <input placeholder="CPF" id="cpf" class="form-control mb-3" type="text" name="cpf" size="32cm"></input>

                    <input placeholder="Telefone" id="telefone" class="form-control mb-3" type="tel" name="telefone" size="32cm"></input>

                    <input placeholder="Modelo" id="modelo" class="form-control mb-3" type="text" name="modelo" size="32cm"></input>
                    
                    <input placeholder="Marca" id="marca" class="form-control mb-3" type="text" name="marca" size="32cm"></input>
                    
                    <input placeholder="Defeito" id="defeito" class="form-control mb-3" type="text" name="defeito" size="32cm"></input>
                    
                    <input type="submit" name="registrar" value="Cadastrar" class="btn btn-warning col-12"></input>
            </form>
        </div>
    </div>
        </div>
    </div>
</body>

<style>
    .centralizado {
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh; 
    }
    #placeholder{
        color: blue;
    }
    .imagem {
        width: 1000px;
        height: 500px;
        border-radius: 10px;
    }
    .centralizado-texto {
        justify-content: center;
        align-items: center;
    }
    .text-overlay {
      position: absolute;
      top: 50%;
      left: 50%;
      transform: translate(-50%, -50%);
      color: white;
      font-size: 15px;
    }
</style>

</html>