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
                // Esconde o ícone de carregamento
                document.getElementById('loading').style.display = 'none';
                // Mostra o conteúdo
                document.getElementById('conteudo').classList.remove('invisivel');
            }, 2000); // Tempo de espera em milissegundos (2 segundos neste exemplo)
        });
    </script>
<body>
     <?php
          require_once "./header.phtml";
        ?>
    <div id="projetos" >
        <img id="loading" src=" loading.gif " alt=" loading " >
        <div id="conteudo" class="invisivel"
         > conteudo <div> 
    </div>
    <li><a href="./projetos.php">Projetos</a></li>
   
    <?php
            require_once "./footer.phtml";
        ?>
</body>
</html>