<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://cdn.jsdelivr.net/npm/remixicon@4.0.0/fonts/remixicon.css" rel="stylesheet" />
    <link rel="stylesheet" href="/src/lib/css/styles.css" />
    <link rel="shortcut icon" href="favicon.png" type="image/x-icon">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Ereno ERP | Home</title>
    <meta property="og:image" content="/src/lib/img/logo.png" />
    <meta property="og:title" content="Ereno ERP" />
</head>
<body>
    <header class="header">
        <nav>
            <div class="nav__bar">
                <div class="logo">
                    <a href="index.php?arquivo=Home&metodo=index"><img src="/src/lib/img/logo.png" alt="Logo Ereno ERP" /></a>
                </div>
                <div class="nav__menu__btn" id="menu-btn">
                    <i class="ri-menu-line"></i>
                </div>
            </div>
            <ul class="nav__links" id="nav-links">
                <li><a href="#home">Home</a></li>
                <li><a href="#features">Funcionalidades</a></li>
                <li><a href="#paravoce">Ereno ERP é para você?</a></li>
                <li><a href="#testimonials">Depoimentos</a></li>
                <li><a href="/contato">Contato</a></li>
                <button class="btn" onclick="location.href='/contato'">Solicite uma demonstração!</button>
            </ul>
            
        </nav>

        <div class="section__container header__container" id="home">
            <p>Simplifique a Gestão da Sua Empresa</p>
            <h1>COM <span><b>ERENO</b></span> ERP</h1>
            <br>
            <button class="btn" onclick="location.href='/contato'">Solicite uma demonstração!</button>
        </div>
    </header>
</body>
</html>