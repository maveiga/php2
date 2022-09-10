<?php

require_once 'funcoes.php';

$contacorrente=
[
    '123'=>
    [
        'titular'=>'maria',
        'saldo'=>2000
    ],

    '456'=>
    [
        'titular'=>'ze',
        'saldo'=>100
    ]
    ];

$contacorrente['123']=sacar($contacorrente['123'],valorsacar:500);
$contacorrente['456']=sacar($contacorrente['456'],valorsacar:500);


// removendo unset($contacorrente['123']);

foreach($contacorrente as $cpf =>$conta){
    exibirmensagem(mensagem:"$cpf $conta[titular] $conta[saldo]");
    //ou
    exibirmensagem(mensagem:mb_strtoupper("$cpf {$conta ['titular']} {$conta['saldo']}"));

}
?>