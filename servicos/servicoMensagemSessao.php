<?php

session_start();


function setarMensagemErro(string $mensagem) : void
{
    $_SESSION['mensagem-de-erro'] = $mensagem;
}

function obterMensageErro() : ?string
{
    if(isset($_SESSION['mensagem-de-erro']))
        return $_SESSION['mensagem-de-erro'];
    return null;
}

function obterMensageCalculo() : ?string
{
    if(isset($_SESSION['executa-calculo']))
        return $_SESSION['executa-calculo'];
    return null;
}

function obterMensageAlvenaria() : ?string
{
    if(isset($_SESSION['executa-calculo-Alvenaria']))
        return $_SESSION['executa-calculo-Alvenaria'];
    return null;
}

function obterMensageEmbolso() : ?string
{
    if(isset($_SESSION['executa-calculo-embolso']))
        return $_SESSION['executa-calculo-embolso'];
    return null;
}

function obterMensageCeramica() : ?string
{
    if(isset($_SESSION['executa-calculo-ceramica']))
        return $_SESSION['executa-calculo-ceramica'];
    return null;
}

function removerMensagemErro() : void
{
    if(isset($_SESSION['mensagem-de-erro']))
       unset($_SESSION['mensagem-de-erro']);
}

?>