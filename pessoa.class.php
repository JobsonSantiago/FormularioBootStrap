<?php
// classe com nome pessoa
class Pessoa {
    //objetos com visibilidade privada
    private $nome;
    private $telefone;
    private $origem;
    private $datacontato;
    private $observacao;

    //metodo de captura do valor do objeto
    public function getNome() {
        return $this->nome;
    }

    // metodo de alteração de valor de objeto
    public function setNome($nome) {
        $this->nome = $nome; 
    }

    //metodo de captura do valor do objeto
    public function getTelefone() {
        return $this->telefone;
    }

    // metodo de alteração de valor de objeto
    public function setTelefone($telefone) {
        $this->telefone = $telefone; 
    }

    //metodo de captura do valor do objeto
    public function getOrigem() {
        return $this->origem;
    }

    // metodo de alteração de valor de objeto
    public function setOrigem($origem) {
        $this->origem = $origem; 
    }


    //metodo de captura do valor do objeto
    public function getDatacontato() {
        return $this->datacontato;
    }

    // metodo de alteração de valor de objeto
    public function setDatacontato($datacontato) {
        $this->datacontato = $datacontato; 
    }

    //metodo de captura do valor do objeto
    public function getObservacao() {
        return $this->observacao;
    }

    // metodo de alteração de valor de objeto
    public function setObservacao($observacao) {
        $this->observacao = $observacao; 
    }

    
}

?>