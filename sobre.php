<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Meu Portfólio</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15">
</head>
<body>
<?php
            include("./header.phtml");
        ?>

    <div class="container">
        <div class="profile-image">
            <img src="nathiel1.jpeg" alt="Minha Foto">
        </div>
        <div class="bio">
            <h1> NATHIEL N. MENDES </h1>
            <p> 23 de abril de 1994 </p>
            <p>Natural de Medianeira, Paraná.</p>
            <p>Formação Acadêmica: Graduado em Gestão em Segurança Privada pela Universidade Interativa UNINTER.</p>
            <p>Educação: Cursando Administração.</p>
        </div>
    </div>

    <?php
            include("./footer.phtml");
        ?>

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

        <!--    fazer botao        -->
</body>
</html>