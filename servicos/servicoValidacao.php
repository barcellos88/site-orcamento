<?php

session_start();


function validaAltura(string $altura) : bool
{
    if(empty($altura))
    {
        setarMensagemErro(mensagem: 'Altura Não pode estar vazio');
        return false;
    }
    else if(!is_numeric($altura))
    {
        setarMensagemErro(mensagem: 'A altura tem que ser um número');
        return false;
    }
    else if($altura < 0.5)
    {
        setarMensagemErro(mensagem: 'A altura tem que ser maior que 0.4');
        return false;
    }
    
    return true;
}


function validaLargura(string $largura)
{
    if(empty($largura))
    {
        setarMensagemErro(mensagem: 'Largura Não pode estar vazio');
        return false;
    }
    else if(!is_numeric($largura))
    {
        setarMensagemErro(mensagem: 'A largura tem que ser um número');
        return false;
    }
    else if($largura < 0.5)
    {
        setarMensagemErro(mensagem: 'A largura tem que ser maior que 0.4');
        return false;
    }
    return true;

}

?>