<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>OS</title>
</head>

<x-header />

<body>

    <div class="container-fluid">
        <div class="row">
    <!-- Primeira div -->
    <div class="col-md-6 centralizado">
        <div class="position-relative mx-5">
            <h2 class="text-white">A melhor assistência técnica do país.</h2>
            <h4 class="text-white">Crie um agendamento para o seu aparelho, e faremos a mágica.</h4>
        </div>
    </div>
    
    <!-- Segunda div -->
    <div class="col-md-6 centralizado">
        <div class="position-absolute d-flex flex-row shadow-lg p-4 mb-1 rounded" style="background-color: #EBA90090;">
            <form method="POST" action="/cadastrar" class="" >
            @csrf
                <h3>Preencha as informações</h3>
                <div class="">

                    <!--Input de nome -->
                    <div class="input-wrapper mb-3">
                        <input placeholder="Nome" id="nome" class="form-control mb-2 rounded-5 border-1 border-dark" type="text" name="nome" size="32cm"></input>
                    </div>
                    <!--Input de CPF -->
                    <div class="input-wrapper mb-3">

                        <input placeholder="CPF" id="cpf" class="form-control mb-2 rounded-5 border-1 border-dark" type="text" name="cpf" size="32cm"></input>
                    </div>

                    <!--Input de Telefone -->
                    <div class="input-wrapper mb-3">

                        <input placeholder="Telefone" id="telefone" class="form-control mb-2 rounded-5 border-1 border-dark" type="text" name="telefone" size="32cm"></input>
                    </div>
                    <!--Input de Modelo -->
                    <div class="input-wrapper mb-3">

                        <input placeholder="Modelo" id="modelo" class="form-control mb-2 rounded-5 border-1 border-dark" type="text" name="modelo" size="32cm"></input>
                    </div>
                    <!--Input de Marca -->
                    <div class="input-wrapper mb-3">
   
                        <input placeholder="Marca" id="marca" class="form-control mb-2 rounded-5 border-1 border-dark" type="text" name="marca" size="32cm"></input>
                    </div>
                    <!--Input de Defeito -->
                    <div class="input-wrapper mb-3">

                        <input placeholder="Defeito" id="defeito" class="form-control mb-2 rounded-5 border-1 border-dark" type="text" name="defeito" size="32cm"></input>
                    </div>      
                    <input type="submit" name="registrar" value="Enviar" class="text-bold rounded-5 btn btn-dark col-12"></input>
                </div>
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
    .centralizado-texto {
        justify-content: center;
        align-items: center;
    }
    .input-wrapper-text {
        background-color: transparent;
        border-color: transparent; 
    }
    body {
        background-image: url('./assets/imagens/consertar-celular.png');
        background-position: center;
      /* Define o tamanho da imagem de fundo */
      background-size: cover;
      /* Define que a imagem de fundo não se repita */
      background-repeat: no-repeat;
    }
</style>

</html>