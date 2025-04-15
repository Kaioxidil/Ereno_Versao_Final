<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Coleta os dados do formulário
    $name = $_POST["name"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];
    $estado = $_POST["estado"];
    $rua = $_POST["rua"];
    $numero = $_POST["numero"];
    $complemento = $_POST["complemento"];
    $mensagem = $_POST["mensagem"];

    // Monta para o envio no WhatsApp
    $msg = "*Solicitação de Contato*%0A";
    $msg .= "*Nome:* $name%0A";
    $msg .= "*Email:* $email%0A";
    $msg .= "*Telefone:* $phone%0A";
    $msg .= "*Endereço:*%0A";
    $msg .= "• Estado: $estado%0A";
    $msg .= "• Rua: $rua%0A";
    $msg .= "• Número: $numero%0A";
    $msg .= "• Complemento: $complemento%0A";
    $msg .= "*Mensagem:*%0A$mensagem";

    // Número de destino no WhatsApp (DDD)
    $phoneNumber = "5544997249833";
    $whatsappLink = "https://api.whatsapp.com/send?phone=$phoneNumber&text=" . urlencode($msg);

    // Redireciona para a página de sucesso com o link no parâmetro
    header("Location: pages/sucesso.php?link=" . urlencode($whatsappLink));
    exit;
}
?>