<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="../../../favicon.png" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@4.0.0/fonts/remixicon.css" rel="stylesheet" />
    <script src="https://kit.fontawesome.com/aa7454d09f.js" crossorigin="anonymous"></script>
    <title>Ereno ERP | Contato</title>
</head>
<style>
    @import url('https://fonts.googleapis.com/css2?family=Roboto+Serif:opsz,wght@8..144,400;8..144,500;8..144,600;8..144,700&display=swap');

    * {
        margin: 0;
        padding: 0;
        text-decoration: none;
    }

    :root {
        --bodyBg: #303841;
        --formBg: #343F4B;
        --textColor: #fff;
        --primaryColor: #0076A3;
        --paraColor: #5e6c79;
        --paraColor: #74828f;
    }

    body {
        font-family: 'Roboto Serif', serif;
        color: var(--textColor);
        background: var(--bodyBg);
        padding-bottom: 5em;
    }

    section {
        display: flex;
        flex-direction: column;
        text-align: center;
        width: 90%;
        max-width: 550px;
        margin: auto;
        margin-top: 2em;
    }

    .sectionHeader {
        text-transform: capitalize;
        font-weight: bold;
        font-size: 1.1rem;
        color: var(--primaryColor);
        margin-bottom: .5em;
    }

    .heading,
    .sub-heading {
        margin-bottom: .5em;
        font-weight: bold;
    }

    .heading {
        font-size: 2.5em;
    }

    .sub-heading {
        text-align: left;
    }

    .contactForm {
        display: grid;
        gap: 3em;
    }

    form {
        width: 100%;
        margin-top: 3em;
    }

    .para {
        color: var(--paraColor);
        font-size: 1.1rem;
        line-height: 1.5em;
        margin-bottom: 1em;
    }

    .para2 {
        text-align: left;
    }

    .input {
        width: 95%;
        max-width: 700px;
        border: none;
        font-size: .9rem;
        padding: 1em;
        outline: none;
        background-color: var(--formBg);
        color: var(--paraColor);
        border-radius: 10px;
        border: 1px solid rgb(53, 53, 53);
        margin-bottom: 1em;
    }

    .input:focus {
        border: 1px solid var(--primaryColor);
    }

    .input::placeholder {
        text-transform: capitalize;
    }

    .submit {
        background-color: var(--primaryColor);
        border: none;
        color: var(--textColor);
        font-weight: bold;
        cursor: pointer;
        width: 100%;
    }

    .map-container {
        position: relative;
        width: 100%;
        height: 500px;
    }

    .mapBg {
        position: absolute;
        background-color: var(--primaryColor);
        top: 70%;
        right: 0;
        width: 200px;
        height: 90%;
        border-radius: 20px;
        transform: translateY(-50%);
    }

    .map {
        position: absolute;
        top: 90%;
        left: 0;
        width: 90%;
        height: 90%;
        transform: translateY(-50%);
    }

    .map iframe {
        width: 100%;
        height: 100%;
        border-radius: 30px;
    }

    .contactMethod {
        display: flex;
        flex-direction: column;
        margin-top: 5em;
        text-align: left;
    }

    .method {
        display: flex;
        align-items: center;
    }

    .contactIcon {
        font-size: 2rem;
        color: var(--primaryColor);
        width: 70px;
    }

    /* Adicionando media query para telas menores */
    @media screen and (max-width: 768px) {
        .map-container {
            height: 350px; 
        }

        .contactMethod {
            margin-top: 12em; 
        }
    }

    @media screen and (min-width: 800px) {
        section {
            max-width: 1100px;
        }

        .contactForm {
            grid-template-columns: 1fr 1fr;
        }

        .contactMethod {
            flex-direction: row;
            justify-content: space-between;
        }
    }
</style>

<body>
    <section class="contact-form">
        <a class="sectionHeader" href="/index.php?arquivo=Home&metodo=index"><img src="/src/lib/img/logo.png" alt></a>

        <div class="contactForm">
            <form action="index.php?arquivo=envio&metodo=index" method="POST">
                <h1 class="heading">Contato</h1>
                <p class="para para2">Entre em contato conosco para obter um orçamento.</p>
                <input type="text" class="input" placeholder="Seu nome" name="name" required>
                <input type="email" class="input" placeholder="Seu E-mail" name="email" required>
                <input type="tel" class="input" placeholder="Digite seu número de telefone" name="phone" required>
                <input type="text" class="input" placeholder="Estado" name="estado" required>
                <input type="text" class="input" placeholder="Rua" name="rua" required>
                <input type="text" class="input" placeholder="Número" name="numero" required>
                <input type="text" class="input" placeholder="Complemento" name="complemento">
                <textarea class="input" cols="30" rows="5" placeholder="Digite sua mensagem" name="mensagem"></textarea>
                <input type="submit" class="input submit" value="Enviar >">
            </form>

            <div class="map-container">
                <div class="mapBg"></div>
                <div class="map">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d915.4725548546138!2d-53.6216517!3d-23.3921884!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x948ce90ecd256c49%3A0x15f5c46b50add8e8!2sEreno%20Sistemas!5e0!3m2!1spt-BR!2sbr!4v1744415783208!5m2!1spt-BR!2sbr" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
        </div>

        <div class="contactMethod">
            <div class="method">
                <i class="fa-solid fa-location-dot contactIcon"></i>
                <article class="text">
                    <h1 class="sub-heading">Localização</h1>
                    <p class="para">Av. Raul Barbosa Dias - Icaraíma, PR, 87530-000</p>
                </article>
            </div>

            <div class="method">
                <i class="fa-solid fa-envelope contactIcon"></i>
                <article class="text">
                    <h1 class="sub-heading">Email</h1>
                    <p class="para">Email: contato@erenoerp.com</p>
                </article>
            </div>

            <div class="method">
                <i class="fa-solid fa-phone contactIcon"></i>
                <article class="text">
                    <h1 class="sub-heading">Telefone</h1>
                    <p class="para">(44) 3665-1915</p>
                </article>
            </div>
        </div>
    </section>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <a href="https://wa.me/5544997249833?text=" style="position:fixed;width:60px;height:60px;bottom:40px;right:40px;background-color:#25d366;color:#FFF !important;border-radius:50px;text-align:center;font-size:30px;box-shadow: 1px 1px 2px #888;
z-index:1000;" target="_blank">
        <i style="margin-top:16px; color: #fff;" class="fa fa-whatsapp"></i>
    </a>
</body>

</html>