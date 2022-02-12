<?php

include "servicos/servicoCalculo.php";
include "servicos/servicoMensagemSessao.php";
include "servicos/servicoValidacao.php";

$altura = $_POST['altura'];
$largura = $_POST['largura'];

calculaMetragem($altura, $largura);
calculaValorAlvenaria($altura, $largura);
calculaValorEmbolso($altura, $largura);
calculaValorCeramica($altura, $largura);



header('location: index.php');

?>