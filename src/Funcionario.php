<?php 

class Funcionario extends Pessoa
{
     private string $cargo;

    public function __construct($nome, CPF $cpf, $cargo)
    {
        parent::__construct($nome,$cpf);
        $this->cargo=$cargo;
        
    }

    public function recuperaCargo():string{
        return $this->cargo;
    }

    public function alteraNome(string $nome):void{
        $this->validatitular($nome);
        $this->nome=$nome;
    }
}
?>