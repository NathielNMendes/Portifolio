<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <script>
        // Evento DOMContentLoaded para garantir que o script seja executado após o carregamento do DOM
        document.addEventListener('DOMContentLoaded', function() {
            // Simula um tempo de carregamento com setTimeout (pode ser substituído por uma requisição assíncrona real)
            setTimeout(function() {
                construirProjetos();
                // Esconde o ícone de carregamento
                document.getElementById('loading').style.display = 'none';
                // Mostra o conteúdo
                document.getElementById('conteudo').classList.remove('invisivel');
            }, 2000); // Tempo de espera em milissegundos (2 segundos neste exemplo)
        });
    </script>
    <script>
    function construirProjetos(){
            const jason = `[
                {
                "projetoNome":"PORTIFOLIO",
                "projetoIMG":"nathiel1.jpeg",
                "projetoDesc": " meu projeto inicial em programaçao ",
                "projetoLink": "https://github.com/NathielNMendes/Portifolio"
                },
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
                const container = document.getElementById('conteudo');
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
    </script>

<body>
     <?php
          require_once "./header.phtml";
        ?>
    <div id="projetos" >
        <img id="loading" src=" loading.gif " alt=" loading " >
        <div id="conteudo" class="invisivel"
         >  <div> 
    </div>
    <li><a href="./projetos.php">Projetos</a>
    </li>
    <template id="objetoTemplate">
            <div  class="bio">
                <img id="objetoImagem">
                <h2 class="objetoNome"></h2>
                <p class="objetoDesc"></p>
                <a class="objetoLink" href="https://github.com/NathielNMendes/Portifolio"></a>
            </div> 
    </template>
    <?php
            require_once "./footer.phtml";
        ?>
</body>
</html>