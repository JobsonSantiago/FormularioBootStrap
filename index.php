<DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    
    <title>BootStrap</title>
    
</head>
<body class="bg-body-tertiary">
    <div class="container text-center bg-body-tertiary">
        <div class="row">
            <div class="col-1">
              &nbsp
            </div>
            <div class="col bg-primary">
                <nav class="navbar bg-primary navbar-expand-lg" data-bs-theme="dark">
                    <div class="container-fluid">
                        <a class ="navbar-brand" href="#">SISTEMA WEB</a>
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                            <div class="navbar-nav">
                                <a class="nav-link active" aria-current="page" href="#">Cadastrar</a>
                                <a class="nav-link" hfef="#">Consultar</a>
                            </div>
                        </div>
                    </div>
                </nav>
            </div>
            <div class="col-1">
                &nbsp
            </div>
        </div>
        <div class="row">
            <div class="col-1">
              &nbsp
            </div>
            <div class="col bg-white">
              &nbsp
            </div>
            <div class="col-1">
              &nbsp
            </div>
        </div>
        <div class ="row">
            <div class = "col-1">
                &nbsp
            </div>
            <div class ="col bg-white">
                <p class ="text-start fs-5"> <b> Cadastrar - Agendamento de Potenciais Clientes </b> </p>
                <p class ="text-start fs-6"> Sistema utilizado para agendamento de serviços </p>
                <p>
                  <form method = "POST" action="teste.class.php">
                        <div class="mb-1 text-start">
                            <label for="exampleinputEmail1" class="form-label">Nome:</label>
                            <input class="form-control" id="exampleinputEmail1" aria-describedby="emailHelp" name="nome" id="nome"><br>
                          </div>
                          <div class="mb-1 text-start">
                            <label for="exampleinputEmail1" class="form-label">Telefone</label>
                            <input class="form-control" id="exampleinputEmail1" aria-describedby="emailHelp" placeholder="(xx)xxxxx-xxxx" name="telefone" id="telefone"><br>
                          </div>
                          <div class="mb-3 text-start">
                            <label for="exampleinputEmail1" class="form-label">Origem: </label>
                            <select class="form-select" aria-label="Default select example" name="origem" id="origem">
                                <option selected>Celular</option>
                                <option value="1">Whatsapp</option>
                                <option value="2">Telefone Fixo</option>
                            </select>
                          </div>
                          <div class="mb-2 text-start">
                            <label for="exampleinputEmail1" class="form-label">Data do Contato:</label>
                            <input type="date" class="form-control" id="inputData"  name="datacontato" id="datacontato"><br>
                          </div>
                          <div class="mb-3 text-start">
                            <label for="exampleinputEmail1" class="form-label" >Observação:</label>
                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="5" name="observacao" id="observacao"></textarea>
                          </div>
                          <div class="mb-3 text-start">
                            <button type="submit" name="Cadastrar" value="Cadastrar" class="btn btn-primary">Cadastrar</button>
                          </div>
                    </form>
                </p>
            </div>
            <div class="col-1">
                    &nbsp
            </div>
        </div>
    </div>
</body>
</html>