<?php
// cometarios
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Meu Portfólio</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="header">
        <h1>Meu Site</h1>
        <nav>
            <ul>
                <li><a href="#">Início</a></li>
                <li><a href="#">Sobre</a></li>
                <li><a href="#">Portfólio</a></li>
                <li><a href="#">Contato</a></li>
            </ul>
        </nav>
    </div>

    <div class="container">
        <div class="profile-image">
            <img src="nathiel1.jpeg" alt="Minha Foto">
        </div>
        <div class="bio">
            <h1> NATHIEL NILSON MENDES </h1>
            <p>23 de abril de 1994 </p>
            <p>Nascido em Medianeira, Paraná.</p>
            <p>Educação: Cursando Administração.</p>
            <p> Formado no ensino médio no Colégio João Manoel Mondrone.</p>
            <p>Formação Acadêmica: Graduado em Gestão em Segurança Privada pela Universidade Interativa UNINTER.</p>
            <p>Experiências Profissional: Supervisor na Inviolável Sistemas de Segurança.</p>
            <p>Experiências Profissional: Soldado Fuzileiro Naval da Marinha do Brasil.</p>
            <p>Links de contato </p>
           
            <div id="rodape">
                <a id="link" href="https://www.linkedin.com/in/nathiel-mendes-07164424b/">https://www.exemplo.com</a>
                <button onclick="mostrarLink()">LinkedIn</button>
            </div>
        </div>
    </div>

    <div class="footer">
        <p>Rodapé</p>
    </div>

    <script>
        function mostrarLink() {
            var link = document.getElementById("link");
            window.open(link.href, "_blank");
        }
        
        function toggleMenu() {
            var nav = document.querySelector('.nav-links');
            nav.classList.toggle('show');
        }
    

    </script>
</body>
</html>


