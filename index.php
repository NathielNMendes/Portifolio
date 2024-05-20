<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Meu Portfólio</title>
    <link rel="stylesheet" href="style.css">
    <title>Botão com Link</title>
    <script>
        var linkMostrado = false; // Variável para rastrear se o link foi mostrado
        
        function mostrarLink() {
            if (!linkMostrado) { // Verifica se o link ainda não foi mostrado
                // Obtém o elemento do link
                var link = document.getElementById("link");
                
                // Redireciona para o link
                window.open(link.href);
                
                linkMostrado = true; // Atualiza a variável para indicar que o link foi mostrado
            }
        }
    </script>
</head>
<body>
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
           
            <div id="rodapé" >
                <a id="link" href="https://www.linkedin.com/in/nathiel-mendes-07164424b/" style="display:none;">https://www.exemplo.com</a>
            <button onclick="mostrarLink()">Linked in </button>
            </div>
           

        </div>
    </div>
</body>
</html>
