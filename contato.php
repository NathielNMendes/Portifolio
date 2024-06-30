
<!DOCTYPE html>
<html lang="pt-BR">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Formulário de Contato</title>
<link rel="stylesheet" href="style.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="script.js"></script>
</head>
<body>
<?php
            include("./header.phtml");
        ?>
<div class="other-info">
    <!-- Aqui você pode adicionar outras informações -->
    <h2>Vamos entrar em contato ?</h2>
    <p>Adicionr algumas informações adicionais aqui...</p>
  </div>
</div>
  <div class="container2">
  <h2>Formulário de Contato</h2><br><br>
    <form id="contactForm" onsubmit='return validacao()' method='POST' >
        <label for="nome">Nome:</label><br>
        <input type="text" id="nome" name="nome" required><br><br>

                <label for="email">Email:</label><br>
        <input type="email" id="email" name="email" required><br><br>
 
        <label for="mensagem">Mensagem:</label><br>
        <textarea id="mensagem" name="mensagem" rows="4" cols="50"  required></textarea><br><br>

        <input type="submit" value="Enviar">
    </form>
  </div>
  <?php
            include("./footer.phtml");
        ?>
 
  

</body>
</html>

