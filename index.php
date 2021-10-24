<meta charset="utf-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<title>Show do Bilhão</title>
</head>

<body>
    <div>
        <div>
            <p>
                <?php require "perguntas.inc";
                if (empty($_GET)) {
                    carregaPergunta(0);
                } else {
                    carregaPergunta($_GET['id']);
                }
                ?>
            </p>
        </div>