<!DOCTYPE html>
<html lang="pt-br">
<head>
    <link rel="shortcut icon" href="../../../favicon.png" type="image/x-icon">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ereno ERP | Enviado</title>
    <style>
        body {
            background-color: #f0fff0;
            font-family: Arial, sans-serif;
            text-align: center;
            padding: 20px; /* Reduced padding for smaller screens */
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            margin: 0;
        }

        .container {
            background: white;
            padding: 4em;
            border-radius: 15px;
            box-shadow: 0px 0px 10px #ccc;
            width: 90%; /* Use percentage for responsiveness */
            max-width: 400px; /* Limit maximum width */
            box-sizing: border-box; /* Include padding in width calculation */
        }

        h1 {
            color: #0076A3;
            margin-bottom: 1em;
            font-size: 1.2em; /* Adjust font size for smaller screens */
        }

        p {
            margin-bottom: 1.5em;
            font-size: 1em; /* Adjust font size for smaller screens */
        }

        a {
            display: inline-block;
            margin-top: 1em;
            background-color: #0076A3;
            color: white;
            padding: 10px 20px;
            border-radius: 10px;
            text-decoration: none;
            font-size: 1em; /* Adjust font size for smaller screens */
        }

        @media (max-width: 600px) {
            .container {
                padding: 1.5em; /* Further reduce padding on very small screens */
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Clique no botão abaixo para confirmar o envio!</h1>
        <p>Clique no botão abaixo para abrir o WhatsApp e finalizar o contato.</p>
        <a id="whatsBtn" href="#">Abrir WhatsApp</a>
        <a href="/index.php?arquivo=Home&metodo=index">Voltar para a página inicial</a>
    </div>

    <script>
        const urlParams = new URLSearchParams(window.location.search);
        const link = urlParams.get('link');
        if (link) {
            document.getElementById('whatsBtn').href = decodeURIComponent(link);
        } else {
            document.querySelector('.container').innerHTML = "<h1>Erro ao enviar!</h1><p>Tente novamente mais tarde.</p>";
        }
    </script>
</body>
</html>