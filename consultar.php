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
<body class="bg-body-secondary">
    <div class="container text-center bg-body-secondary">
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
                                <a class="nav-link active" aria-current="page" href="index.php">Cadastrar</a>
                                <a class="nav-link active" aria-current="page" href="consultar.php">Consultar</a>
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
            
            <div class="container text-center">
             <div class="row">
               <div class="col">
               &nbsp
               </div>
               <div class="col">
                </br>
               <p class ="text-start fs-5"> <b> Consultar - Contatos Agendados </b> </p>
               <div class="col bg-primary">
            <table class="table">
                <thead>
                    <th scope="col"> 
                    <p>Nome</p>
                    <?php
                            //importação
                            require_once ("pessoa.class.php");
                            class Nome {

                                     private $pessoa;

                                     public function __construct(){
                                         $pessoa = new Pessoa();
                                         $pessoa->setNome($_POST['nome']);
                                         echo $pessoa->getNome();
                                         
                                     }
                                     //instancia
                                 }new Nome ();
                    ?>         
                    </th>
                    <th scope="col">
                        <p>Telefone</p>
                    <?php
                            require_once ("pessoa.class.php");
                            class Telefone {
                                     private $pessoa;
                                 
                                     public function __construct(){
                                         $pessoa = new Pessoa();
                                         $pessoa->setTelefone($_POST['telefone']);
                                         echo $pessoa->getTelefone()."<br>";
                                        
                                     }
                                     //instancia
                                 }new Telefone ();
                            ?>
                    </th>
				    <th scope="col"> 
                    <p>Origem</p>
                    <?php
                            //importação
                             require_once ("pessoa.class.php");     
                             class Origem {
                                         private $pessoa;
                                     
                                         public function __construct(){
                                             $pessoa = new Pessoa();
                                             $pessoa->setOrigem($_POST['origem']);
                                             echo $pessoa->getOrigem()."<br>";
                                            
                                        }
                                        //instancia
                                }new Origem ();
                     ?>
                    </th>
                    <th scope="col"> 
                    <p> Contato</p>
                    <?php
                            //importação
                            require_once ("pessoa.class.php");
                            class Datacontato {
                                     private $pessoa;

                                     public function __construct(){
                                         $pessoa = new Pessoa();
                                         $pessoa->setDatacontato($_POST['datacontato']);
                                         echo $pessoa->getDatacontato();
                                         
                                     }
                                     //instancia
                                 }new Datacontato ();
                    ?>         
                    </th>
                    <th scope="col"> 
                    <p>Observação</p>
                    <?php
                             //importação
                             require_once ("pessoa.class.php");
                             class Observacao {
                                         private $pessoa;
                                     
                                         public function __construct(){
                                             $pessoa = new Pessoa();
                                             $pessoa->setObservacao($_POST['observacao']);
                                             echo $pessoa->getObservacao()."<br>";
                                            
                                        }
                                        //instancia
                                }new Observacao ();
                     ?>
                    </th>
                </thead>
            </table>
            </div>
               </div>
               <div class="col">
               &nbsp
               </div>
             </div>
           </div>
        </div>
        <div class="col-1">
        &nbsp
        </div>
    </body>
</html>