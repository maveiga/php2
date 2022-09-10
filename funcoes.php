<?php
// as funções foi chamada no saque 
function sacar($conta,$valorsacar)
{
    if($valorsacar>$conta['saldo']){
        exibirmensagem(mensagem:mb_strtoupper("você não pode sacar"));
        // mb_strtoupper ou strtoupper transforma em maisculo

    }else{
        $conta['saldo']-=$valorsacar;
    }
    return $conta;

}

function exibirmensagem($mensagem){
    echo$mensagem.PHP_EOL;
}
?>