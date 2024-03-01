<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST['nome'];
    $sobrenome = $_POST['sobrenome'];
    $email = $_POST['email'];
    $telefone = $_POST['telefone'];
    $mensagem = $_POST['mensagem'];

    if (empty($nome) || empty($email) || empty($mensagem)) {
        echo "<p>Por favor, preencha todos os campos obrigatórios.</p>";
    } else {
        $to = "seu_email@example.com";
        $subject = "Novo contato do site";
        $message = "Nome: $nome $sobrenome\n";
        $message .= "Email: $email\n";
        $message .= "Telefone: $telefone\n";
        $message .= "Mensagem:\n$mensagem\n";
        $headers = "From: $email";

        if (mail($to, $subject, $message, $headers)) {
            echo "<p>Obrigado por entrar em contato conosco! Sua mensagem foi enviada com sucesso.</p>";
        } else {
            echo "<p>Desculpe, houve um problema ao enviar sua mensagem. Por favor, tente novamente mais tarde.</p>";
        }
    }
}
