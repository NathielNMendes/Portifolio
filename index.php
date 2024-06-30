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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15">
</head>
<script>
    function construirProjetos(){
            const jason = `[
                 {
                "projetoNome":"PORTIFOLIO",
                "projetoIMG":"nathiel1.jpeg",
                "projetoDesc": " meu projeto inicial em programaçao ",
                "projetoLink": "https://github.com/NathielNMendes/Portifolio"
                }
                ]`;
                let objetoProjetos = JSON.parse(jason);
                //cria o template original para ser copiado abaixo
                const template = document.getElementById('objetoTemplate');
                // Adiciona o objeto ao container de objetos
                const container = document.getElementById('objetosContainer');
                //forech para fazer o loop que passara pelo json
                objetoProjetos.forEach(projeto =>{ 
                // Clona o template
                const objetoClone = document.importNode(template.content, true);
                // Preenche os dados do objeto
                objetoClone.querySelector('.objetoNome').textContent = projeto.projetoNome;
                objetoClone.querySelector('.objetoDesc').textContent = projeto.projetoDesc;
                objetoClone.querySelector('.objetoLink').textContent = projeto.projetoLink;
                objetoClone.querySelector('.objetoLink').href = projeto.projetoLink;
                objetoClone.querySelector('#objetoImagem').src = projeto.projetoIMG;
                container.appendChild(objetoClone);
                })//termina o forEach
        }
        document.addEventListener('DOMContentLoaded', function() {
            construirProjetos();
        });
    </script>

<body>
        <?php
           require_once "./header.phtml";
        ?>
       
        <div class="container" id="phraseContainer" >        
        <p id="phrase ">  
            <img src="./gatoo.jpg" alt="gato" id="gato">
            Olá seja bem vindo  <br></br>
            Estou iniciando na area de programação  <br></br>
            E este é meu protifolio 
    </p> 
    <template id="objetoTemplate">
        <div class="objeto">
            <img id="objetoImagem">
            <h2 class="objetoNome"></h2>
            <p class="objetoDesc"></p>
            <a class="objetoLink" href="https://github.com/NathielNMendes/Portifolio"></a>
        </div> 
        <?php
            require_once "./footer.phtml";
        ?>
    </template>
</body>
</html>


