<?php

class Cliente {

    private $cpf;
    private $rg;
    private $cnh;
    private $endereco;  //Composição
    //private $entrega // Ex. 2
    //Construtor
    function __construct(){
        $endereco = new Endereco();

    }

    function __destruct()
    {
        //trabalhar com arrays
    }

    public function getCpf(){
        return $this->cpf;
    }
    public function getRg(){
        return $this->rg;
    }
    public function getCnh(){
        return $this->cnh;
    }
    public function setCpf($cpf){
        $this->cpf = $cpf;
    }
    public function setRg($rg){
        $this->rg = $rg;
    }
    public function setCnh($cnh){
        $this->cnh = $cnh;
    }
}


$beudo = new Cliente();
$beudo->setCpf('123');
print($beudo->getCpf());
echo '<br>';
$beudo->setRg('321');
print($beudo->getRg());
echo '<br>';
$beudo->setCnh('444');
print($beudo->getCnh());
echo '<br>';