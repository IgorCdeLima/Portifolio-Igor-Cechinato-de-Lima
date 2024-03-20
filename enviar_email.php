<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $mensagem = $_POST['mensagem'];

    $para = 'igor.c.l.oficial@outlook.com';
    $assunto = 'Nova mensagem do formulário de contato';
    $mensagem_email = "Nome: $nome\n";
    $mensagem_email .= "Email: $email\n";
    $mensagem_email .= "Mensagem:\n$mensagem";

    // Enviar e-mail
    if (mail($para, $assunto, $mensagem_email)) {
        echo 'Mensagem enviada com sucesso!';
    } else {
        echo 'Erro ao enviar mensagem.';
    }
} else {
    echo 'Método de requisição inválido.';
}
?>
