<?php

class Endereco{
    private string $cidade;
    private string $bairro;
    private string $rua;
    private string $numero;


public function __construct($cidade,$bairro,$rua,$numero)
{
    $this->cidade=$cidade;
    $this->bairro=$bairro;
    $this->rua=$rua;
    $this->numero=$numero;
}
public function recuperaCidade():string{
    return $this->rua;
}
public function recuperaNumero():string{
    return $this->numero;
}
public function recuperaRua():string{
    return $this->cidade;
}
}
?>