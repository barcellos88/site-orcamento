<?php

session_start();

function calculaMetragem(string $altura, string $largura)
{
    if(validaAltura($altura) && validaLargura($largura))
    {
        $_SESSION['executa-calculo'] =  $metragemTotal=$altura*$largura;
            return $_SESSION['executa-calculo'];
        return null;
    }
    else
    {
        return obterMensageErro();
    }
}

function calculaValorAlvenaria(string $altura, string $largura )
{
    if(validaAltura($altura) && validaLargura($largura))
    {
        $_SESSION['executa-calculo-Alvenaria'] =  $metragemTotal=$altura*$largura*10;
            return $_SESSION['executa-calculo-Alvenaria'];
        return null;
    }
    else
    {
        return obterMensageErro();
    }
}

function calculaValorEmbolso(string $altura, string $largura )
{
    if(validaAltura($altura) && validaLargura($largura))
    {
        $_SESSION['executa-calculo-embolso'] =  $metragemTotal=$altura*$largura*12;
            return $_SESSION['executa-calculo-embolso'];
        return null;
    }
    else
    {
        return obterMensageErro();
    }
}

function calculaValorCeramica(string $altura, string $largura )
{
    if(validaAltura($altura) && validaLargura($largura))
    {
        $_SESSION['executa-calculo-ceramica'] =  $metragemTotal=$altura*$largura*25;
            return $_SESSION['executa-calculo-ceramica'];
        return null;
    }
    else
    {
        return obterMensageErro();
    }
}


?>