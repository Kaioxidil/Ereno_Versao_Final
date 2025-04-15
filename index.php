<?php

require_once 'src/classes/Controller.php';
require_once 'src/classes/HomeController.php';



// Inclui o header ANTES de qualquer conteúdo dinâmico
require_once 'shared/header.php';

$arquivo = isset($_GET['arquivo']) ? $_GET['arquivo'] : 'Home';
$metodo = isset($_GET['metodo']) ? $_GET['metodo'] : 'index';

$nomeClasse = ucfirst($arquivo) . "Controller";

if ($arquivo === 'envio') {
    include 'pages/envio.php';
} elseif (class_exists($nomeClasse)) {
    $controller = new $nomeClasse();
    if (method_exists($controller, $metodo)) {
        $controller->$metodo(); // O método do controller ECHOA o conteúdo da página (contato.php, sucesso.php, etc.)
    } else {
        echo "Método não encontrado!";
    }
} else {
    // Se a classe não existir (ou se 'arquivo' for 'Home'),
    // instancia o HomeController e executa o método index
    $controller = new HomeController();
    $controller->index(); // O método index do HomeController ECHOA o conteúdo da página inicial
}

// Inclui o footer DEPOIS de todo o conteúdo dinâmico
require_once 'shared/footer.php';

?>