<!DOCTYPE html>
<html lang="pt-BR">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Formulário de Contato</title>
<link rel="stylesheet" href="style2.css">
</head>
<body>


<div class="container">
  <div class="form-container">
    <h2>Formulário de Contato</h2>
    <form action="mailto:seuemail@example.com" method="post" enctype="text/plain">
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

  <div class="other-info">
    <!-- Aqui você pode adicionar outras informações -->
    <h2>Outras Informações</h2>
    <p>Algumas informações adicionais aqui...</p>
  </div>
</div>

</body>
</html>

