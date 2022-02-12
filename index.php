<?php
    include "servicos/servicoMensagemSessao.php";

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Orçamento Online</title>
</head>

<body style="background-image: url(img/bgBody.jpg);background-repeat:no-repeat; width:100%; height:100%; background-size:cover">
<img >


    <div class="container">
        <div class="card card-outline-secondary my-4">
            <div class="card-header text-center" style=" font-size:20px; font-weight: bold;color:#ED145B; background-image:url(img/bgCardHeader2.jpg);">
                Calculo de M²
            </div>

            <div class="card-body">
                <div>
                    <?php  
                        $mensagemDeErro = obterMensageErro();
                        $calculaMetroquadrado = obterMensageCalculo();     
                        $calculaValorEmbolso = obterMensageEmbolso();    
                        $calculaValorCeramica = obterMensageCeramica();  
                        if(!empty($mensagemDeErro))
                        {                     
                            echo '<p style="color:#ED145B;"> ERRO: ',$mensagemDeErro;
                            unset($_SESSION['mensagem-de-erro']);           
                        }
                    ?>  
                </div>
                <div class="list-group">
                    <div class="list-group-item">
                        <div class="form-row">
                            <div class="form-group mb-3 mt-3">
                                <form class="d-flex justify-content-center" action="script.php" method="post">
                                    <p style="align-self: center; color:#ED145B;">Altura: <input type="text" name="altura" onchange="this.value = this.value.replace(/,/g, '.')"/></p>
                                    <p style="align-self: center; margin-left:20px; color:#ED145B;">Largura: <input type="text" name="largura" onchange="this.value = this.value.replace(/,/g, '.')"/></p>
                                    <p style="align-self: center;"><input style="background-color:white; color:#ED145B; border-radius:10px;" class="m-3" type="submit" value="Calcular" /></p>
                                    
                                    <p style="align-self: center; margin-left:20px; color:#ED145B;">total m²: <input style="border:none; color:#ED145B; max-width: 45px;" type="text" readonly="" value="<?php echo $calculaMetroquadrado; ?>"></p>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="card card-outline-secondary">  
            <div class="card-header text-center" style=" font-size:20px; font-weight: bold;color:#ED145B; background-image:url(img/bgCardHeader2.jpg);">
                Orçamentos
            </div>
                
            <div>
                <br>
            </div>

            <div class="d-flex">
                <div style="width: 100%;margin-left: 10px;margin: 0px 10px 10px 10px;">
                    <div class="card-header text-center" style=" background:linear-gradient(135deg, #6B6B6B 0%, #535353 100% );">
                        <a class="btn" style="color:#ED145B; background-color: #414449;" data-bs-toggle="collapse" href="#collapseExample1" role="button" aria-expanded="false" aria-controls="collapseExample1">
                            Alvenaria
                        </a>
                    </div>
                    <div class="collapse multi-collapse" id="collapseExample1">
                        <div class="card card-body">
                            <div class="list-group-item ">
                                <div class="form-row">
                                    <div class="form-group mb-3">
                                        <form class="d-flex" action="script.php" method="POST">
                                            <?php
                                                $mensagemDeErro = obterMensageErro();
                                                $calculaValorAlvenaria = obterMensageAlvenaria();          
                                            ?>
                                            <p style="width: 100%; text-align: center;">Valor Total: <input readonly type="text" style=" text-align: center; border: none; max-width: 45px;" value="<?php echo $calculaValorAlvenaria; ?>"></p>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div style="width: 100%;margin: 0px 10px 10px 10px;">
                    <div class="card-header text-center" style="  background:linear-gradient(135deg, #6B6B6B 0%, #535353 100% );">
                        <a class="btn" style="color:#ED145B; background-color: #414449;" data-bs-toggle="collapse" href="#collapseExample2" role="button" aria-expanded="false" aria-controls="collapseExample2">
                        Embolso
                        </a>
                    </div>
                    <div class="collapse" id="collapseExample2">
                        <div class="card card-body">
                            <div class="list-group-item">
                                <div class="form-row">
                                    <div class="form-group mb-3">
                                        <form class="d-flex" action="script.php" method="POST">
                                            <?php
                                                $mensagemDeErro = obterMensageErro();
                                                $calculaValorAlvenaria = obterMensageAlvenaria();          
                                            ?>
                                            <p style="width: 100%; text-align: center;">Valor Total: <input readonly type="text" style=" text-align: center; border: none; max-width: 45px;" value="<?php echo  $calculaValorEmbolso; ?>"></p>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div style="width: 100%;margin: 0px 10px 10px 10px;">
                    <div class="card-header text-center" style=" background:linear-gradient(135deg, #6B6B6B 0%, #535353 100% );">
                        <a class="btn" style="color:#ED145B; background-color: #414449;" data-bs-toggle="collapse" href="#collapseExample3" role="button" aria-expanded="false" aria-controls="collapseExample3">
                        Cerâmica
                        </a>
                    </div>
                    <div class="collapse" id="collapseExample3">
                        <div class="card card-body">
                            <div class="list-group-item ">
                                <div class="form-row">
                                    <div class="form-group mb-3"  >
                                        <form class="d-flex" action="script.php" method="POST">
                                            <?php
                                                $mensagemDeErro = obterMensageErro();
                                                $calculaValorAlvenaria = obterMensageAlvenaria();          
                                            ?>
                                            <p style="width: 100%; text-align: center;">Valor Total: <input readonly style=" text-align: center; border: none; max-width: 45px;" type="text" value="<?php echo   $calculaValorCeramica; ?>"></p>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


    </div>


<a href="https://api.whatsapp.com/send?phone=5519999999999&text=Texto%20aqui"
target="_blank"
style="position:fixed;bottom:20px;right:30px;">
<svg enable-background="new 0 0 512 512" width="50" height="50" version="1.1" viewBox="0 0 512 512" xml:space="preserve" xmlns="http://www.w3.org/2000/svg"><path d="M256.064,0h-0.128l0,0C114.784,0,0,114.816,0,256c0,56,18.048,107.904,48.736,150.048l-31.904,95.104  l98.4-31.456C155.712,496.512,204,512,256.064,512C397.216,512,512,397.152,512,256S397.216,0,256.064,0z" fill="#4CAF50"/><path d="m405.02 361.5c-6.176 17.44-30.688 31.904-50.24 36.128-13.376 2.848-30.848 5.12-89.664-19.264-75.232-31.168-123.68-107.62-127.46-112.58-3.616-4.96-30.4-40.48-30.4-77.216s18.656-54.624 26.176-62.304c6.176-6.304 16.384-9.184 26.176-9.184 3.168 0 6.016 0.16 8.576 0.288 7.52 0.32 11.296 0.768 16.256 12.64 6.176 14.88 21.216 51.616 23.008 55.392 1.824 3.776 3.648 8.896 1.088 13.856-2.4 5.12-4.512 7.392-8.288 11.744s-7.36 7.68-11.136 12.352c-3.456 4.064-7.36 8.416-3.008 15.936 4.352 7.36 19.392 31.904 41.536 51.616 28.576 25.44 51.744 33.568 60.032 37.024 6.176 2.56 13.536 1.952 18.048-2.848 5.728-6.176 12.8-16.416 20-26.496 5.12-7.232 11.584-8.128 18.368-5.568 6.912 2.4 43.488 20.48 51.008 24.224 7.52 3.776 12.48 5.568 14.304 8.736 1.792 3.168 1.792 18.048-4.384 35.52z" fill="#FAFAFA"/></svg>
</a>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>


</body>
</div>
</html>