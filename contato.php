<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST['nome'];
    $telefone = $_POST['telefone'];
    $email = $_POST['email'];
    $mensagem = $_POST['mensagem'];

    $destino = 'seuemail@example.com';
    $assunto = 'Formulário de Contato';

    $conteudo = "Nome: $nome\n";
    $conteudo .= "Telefone: $telefone\n";
    $conteudo .= "Email: $email\n";
    $conteudo .= "Mensagem: $mensagem\n";

    $headers = "De: $nome <$email>";

    if (mail($destino, $assunto, $conteudo, $headers)) {
        echo '<script>alert("Mensagem enviada com sucesso!");</script>';
    } else {
        echo '<script>alert("Erro ao enviar mensagem. Por favor, tente novamente mais tarde.");</script>';
    }
}
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Formulário de Contato</title>
<link rel="stylesheet" href="style2.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="script.js"></script>
</head>
<body>


<div class="container">
<div class="other-info">
    <!-- Aqui você pode adicionar outras informações -->
    <h2>Outras Informações</h2>
    <p>Algumas informações adicionais aqui...</p>
  </div>
</div>
  <div class="container">
  <h2>Formulário de Contato</h2>
    <form id="contactForm">
        <label for="nome">Nome:</label><br>
        <input type="text" id="nome" name="nome" required><br><br>

        <label for="telefone">Telefone:</label><br>
        <input type="tel" id="telefone" name="telefone"><br><br>

        <label for="email">Email:</label><br>
        <input type="email" id="email" name="email" required><br><br>

        <label for="mensagem">Mensagem:</label><br>
        <textarea id="mensagem" name="mensagem" rows="4" cols="50"></textarea><br><br>

        <input type="submit" value="Enviar">
    </form>
  </div>

  

</body>
</html>

