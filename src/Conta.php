<?php


class Conta
{
    private Titular $titular;
    private float $saldo;
    private static $numeroDeContas = 0;

    public function __construct(Titular $titular)
    {
        $this ->titular = $titular;
        $this -> saldo = 0;

        self::$numeroDeContas++;
    }

    public function __destruct()
    {
        self::$numeroDeContas--;
    }

    public function sacar (float $valorASacar): void//funcao dentro de uma classe eh um metodo
    {
        if ($valorASacar > $this -> saldo){
            echo "Saldo insuficiente";
            return;
        }

        $this -> saldo -= $valorASacar;//this eh definicao para q todas contas existentes venham bucas dados aq

    }

    public function depositar(float $valorADepositar):void
    {
        if ($valorADepositar < 0){
            echo "valor precisa ser positivo";
            return;
        }

        $this -> saldo += $valorADepositar;

    }

    public function transferir(float $valorATransferir, Conta $contaDestino):void
    {
        if($valorATransferir > $this->saldo){
            echo "Saldo indisponuivel";
            return;
        }

        $this->sacar($valorATransferir);
        $contaDestino->depositar($valorATransferir);

    }

    public function recuperarSaldo(): float
    {
        return $this->saldo;
    }

    public function recuperaNomeTitular(): string
    {
        return $this->titular->recuperaNome();
    }

    public function recuperaCpfTitular(): string
    {
        return $this->titular->recuperaCpf();
    }

    public static function recuperaNumeroDeContas(): int
    {
        return Conta::$numeroDeContas;
    }

}