<?php
//importação
require_once ("pessoa.class.php");

class Teste {
    //objeto pessoa com a visibilidade privada
    private $pessoa;

    public function __construct(){
        //objeto chamado pessoa que recebe a classe Pessoa()
        $pessoa = new Pessoa();
        // Passar um valor para o método setNome
        $pessoa->setNome($_POST['nome']);
        //imprimir um valor do metodo getNome
        echo $pessoa->getNome()."<br>";
        // Passar um valor para o método setTelefone
        $pessoa->setTelefone($_POST['telefone']);
        //imprimir um valor do metodo getTelefone
        echo $pessoa->getTelefone()."<br>";
        // Passar um valor para o método setOrigem
        $pessoa->setOrigem($_POST['origem']);
        //imprimir um valor do metodo getOrigem
        echo $pessoa->getOrigem()."<br>";
        // Passar um valor para o método setDataContato
        $pessoa->setDataContato($_POST['datacontato']);
        //imprimir um valor do metodo getDataContato
        echo $pessoa->getDataContato()."<br>";
        // Passar um valor para o método setObservacao
        $pessoa->setObservacao($_POST['observacao']);
        //imprimir um valor do metodo getObservacao
        echo $pessoa->getObservacao()."<br>";
    }
    //instancia
}new Teste ();

?>