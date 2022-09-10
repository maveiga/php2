<?php

require_once'Pessoa.php';

class titular extends Pessoa
{

    private Endereco $endereco;

    public function __construct(CPF $cpf, string $nome, $endereco)
    {
        parent::__construct($nome,$cpf);
        
        $this->endereco=$endereco;
    }



 

    public function recuperaEndereco():Endereco{
        return $this->endereco;
    }

}
