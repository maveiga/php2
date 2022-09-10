<?php

class Pessoa{
    protected string $nome;
    private CPF $cpf;


    public function __construct($nome,$cpf)
    {
        $this->validatitular($nome);
        $this->nome=$nome;
        $this->cpf=$cpf;
        
    }

    public function recuperaNome():string{
        return $this->nome;
    }

    public function recuperaCpf():string
    {
        return $this->cpf->recuperaNumero();
    }
    protected function validatitular($titular)
    {

        if (strlen($titular) < 5) {

            echo "Nome precisa ter pelo menos 5 caracteres";
            exit;
        }
    }
}


?>