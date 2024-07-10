<?php
ini_set('default_charset', 'UTF-8');
if (isset($_POST['email']) && !empty($_POST['email'])) {



    $nome = addslashes($_POST['nome']);
    $email = addslashes($_POST['email']);
    $telefone = addslashes($_POST['telefone']);
    $mensagem = addslashes($_POST['msg']);

    $to = "teste_teste@credsan.com";
    $subjet = "Contato - Curriculo VST";
    $body = "Nome: " . $nome . "\r\n" .
        "Email: " . $email . "\r\n" .
        "Telefone: " . $telefone . "\r\n" .
        "Mensagem: " . $mensagem;
    $header = "From: " . "\r\n" . "Reply-to:" . $email . "\r\n" . "X=Mailer:PHP/" . phpversion();
    if (mail($to, $subjet, $body, $header)) {
        echo ("<head>
        <meta charset='utf-8'>
        <meta name='viewport' content='width=device-width, initial-scale=1, shrink-to-fit=no'>
    
        <!-- Bootstrap CSS -->
        <link rel='stylesheet' href='https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css'
            integrity='sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T' crossorigin='anonymous'>
        <link rel='preconnect' href='https://fonts.gstatic.com'>
        <link href='https://fonts.googleapis.com/css2?family=Dosis&display=swap' rel='stylesheet'>
    
        <link rel='preconnect' href='https://fonts.googleapis.com'>
        <link rel='preconnect' href='https://fonts.gstatic.com' crossorigin>
        <link href='https://fonts.googleapis.com/css2?family=PT+Serif&display=swap' rel='stylesheet'>
    
        <script src='https://kit.fontawesome.com/7bdc73ba97.js'></script>
        <link rel='stylesheet' type='text/css' href='../css/geral.css'>
    
    
        <title>Credsan</title>
        <link rel='icon' href='../img/sifraoicon.png'>
        <style>
            .meu-jumbo {
                background: linear-gradient(#c08f60, #a86d40, #3b3c3a, #383937);
                height: auto;
                padding: 4rem 1rem 5rem 1rem;
                margin: 2.8rem 1rem 0px 1rem;
            }
    
            @media(min-width: 500px) {
                .meu-jumbo {
                    margin-top: 15rem;
                    padding: 4rem 6rem;
                }
            }
        </style>
    
    
    </head>
    
    <body>
        <div class='container'>
            <div class='jumbotron meu-jumbo'>
                <h2 class='text-center titulo-branco'>Opa, seu e-mail chegou aqui.</h2>
                <br>
                <p class='lead text-center'>Daqui a pouco vou ler e entro em contato contigo novamente. Caso eu não responda
                    em 24 horas, por favor, me contate de outra forma.</p>
                <br>
                <h4 class='text-center'>Obrigado!</h4>
                <hr class='my-4'>
                <a class='btn meu-btn btn-block btn-lg' href='../html/index.html#contato' role='button'>Clique para voltar</a>
            </div>
        </div>
    </body>");
    } else {
        echo ("<head>
        <meta charset='utf-8'>
        <meta name='viewport' content='width=device-width, initial-scale=1, shrink-to-fit=no'>
    
        <!-- Bootstrap CSS -->
        <link rel='stylesheet' href='https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css'
            integrity='sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T' crossorigin='anonymous'>
        <link rel='preconnect' href='https://fonts.gstatic.com'>
        <link href='https://fonts.googleapis.com/css2?family=Dosis&display=swap' rel='stylesheet'>
    
        <link rel='preconnect' href='https://fonts.googleapis.com'>
        <link rel='preconnect' href='https://fonts.gstatic.com' crossorigin>
        <link href='https://fonts.googleapis.com/css2?family=PT+Serif&display=swap' rel='stylesheet'>
    
        <script src='https://kit.fontawesome.com/7bdc73ba97.js'></script>
        <link rel='stylesheet' type='text/css' href='../css/geral.css'>
    
    
        <title>Credsan</title>
        <link rel='icon' href='../img/sifraoicon.png'>
        <style>
            .meu-jumbo {
                background: linear-gradient(#c08f60, #a86d40, #3b3c3a, #383937);
                height: auto;
                padding: 4rem 1rem 5rem 1rem;
                margin: 4rem 1rem 0px 1rem;
            }
    
            @media(min-width: 500px) {
                .meu-jumbo {
                    margin-top: 15rem;
                    padding: 4rem 6rem;
                }
            }
        </style>
    
    
    </head>
    
    <body'>
        <div class='container'>
            <div class='jumbotron meu-jumbo'>
                <h2 class='text-center titulo-branco'>O formulário <b class='titulo-preto' style='color: black;'>NÃO</b> foi
                    enviado!</h2>
                <br>
                <p class='lead text-center'>Verifique se todos os campos foram preenchidos corretamente, tente novamente, ou
                    utilize outro meio de contato.</p>
                    <h4 class='text-center'>Obrigado!</h4>
                <hr class='my-4'>
                <a class='btn meu-btn btn-block btn-lg' href='index.html#contato' role='button'>Clique para voltar</a>
            </div>
        </div>
    </body>");
    }

}else {
    echo ("<head>
    <meta charset='utf-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1, shrink-to-fit=no'>

    <!-- Bootstrap CSS -->
    <link rel='stylesheet' href='https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css'
        integrity='sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T' crossorigin='anonymous'>
    <link rel='preconnect' href='https://fonts.gstatic.com'>
    <link href='https://fonts.googleapis.com/css2?family=Dosis&display=swap' rel='stylesheet'>

    <link rel='preconnect' href='https://fonts.googleapis.com'>
    <link rel='preconnect' href='https://fonts.gstatic.com' crossorigin>
    <link href='https://fonts.googleapis.com/css2?family=PT+Serif&display=swap' rel='stylesheet'>

    <script src='https://kit.fontawesome.com/7bdc73ba97.js'></script>
    <link rel='stylesheet' type='text/css' href='../css/geral.css'>


    <title>Credsan</title>
    <link rel='icon' href='../img/sifraoicon.png'>
    <style>
        .meu-jumbo {
            background: linear-gradient(#c08f60, #a86d40, #3b3c3a, #383937);
            height: auto;
            padding: 4rem 1rem 5rem 1rem;
            margin: 4rem 1rem 0px 1rem;
        }

        @media(min-width: 500px) {
            .meu-jumbo {
                margin-top: 15rem;
                padding: 4rem 6rem;
            }
        }
    </style>


</head>

<body'>
    <div class='container'>
        <div class='jumbotron meu-jumbo'>
            <h2 class='text-center titulo-branco'>O formulário <b class='titulo-preto' style='color: black;'>NÃO</b> foi
                enviado!</h2>
            <br>
            <p class='lead text-center'>Verifique se todos os campos foram preenchidos corretamente, tente novamente, ou
                utilize outro meio de contato.</p>
                <h4 class='text-center'>Obrigado!</h4>
            <hr class='my-4'>
            <a class='btn meu-btn btn-block btn-lg' href='../html/index.html#contato' role='button'>Clique para voltar</a>
        </div>
    </div>
</body>");
}

?>