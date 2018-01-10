<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Painel Gerenciador de Dongles">
    <meta name="author" content="Israel Azevedo - Rebuild por Renato Siqueira">

    <title>Gerenciador Dongles</title>

    <link rel="stylesheet" href="css/style.css">  
    <script type="text/javascript" src="js/js.min.js"></script>    
</head>

<body>
<div class="container  logo">
    <img class="logo__posicao" src="img/logo.png" />
</div>

<noscript>
    <div class="container  alerta-noscript">
        <div class="alert alert-success" role="alert">
        <h4 class="alert-heading">Atenção!</h4>
        <hr>
        <p class="mb-0">Você precisa ter <a href="https://pt.wikipedia.org/wiki/JavaScript" target="_blank">JavaScript</a> ativado para usar esta pagina.</p>
        </div>        
    </div>
</noscript>

<div class="container">

    <div class="borda">
        <div class="barra-status">
            <i class="fa fa-signal" aria-hidden="true"></i> Status GSM
        </div>    
    </div>

    <div class="borda  central" id="results">
        <div class="container  alerta-noscript">
            <div class="alert alert-success" role="alert">
            <h4 class="alert-heading">Aguarde..</h4>
            <hr>
            <p class="mb-0"><i class="fa fa-spinner fa-spin"></i> Compilando Informações.</p>
            </div>        
        </div>    
    </div>

    <div class="footer">
        <hr></hr>
        <div class="footer__copy">&copy; <a href="#" target="_blank">AzCall</a> 2016</div>
        <div class="footer__devel">Desenvolvido por <a target="_blank" href="#">AzTell</a></div>
    </div>
</div>

</body>
</html>
