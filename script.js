
 function validacao(){
    let nome=document.getElementById("nome").value;
    let email=document.getElementById("email").value;
        if (nome==""){
         alert ("Voce nao preencheu o nome ");
         return false;
    }
        if(email==/^[^\s@]+@[^\s@]+\.[^\s@]+$/l){
        return regex.test(email);
     }     else {
        alert("O email é inválido.");
    }
   
      
 } 
 /**$.ajax({
    type: 'POST',
    url: 'sua_api_de_envio_de_email',
    data: {
        'destino': 'homeintech@example.com', // Endereço de e-mail de destino
        'nome': $('input[name=nome]').val(),
        'telefone': $('input[name=telefone]').val(),
        'email': $('input[name=email]').val(),
        'mensagem': $('textarea[name=mensagem]').val()
    },
    dataType: 'json',
    encode: true 
   
}) 
    *///
 /*$(document).ready(function() {
    $('#contactForm').submit(function(e) {
        e.preventDefault(); // Evita o envio padrão do formulário

        // Obtém os dados do formulário
        var formData = {
            'nome': $('input[name=nome]').val(),
            'telefone': $('input[name=telefone]').val(),
            'email': $('input[name=email]').val(),
            'mensagem': $('textarea[name=mensagem]').val()
        };

        // Faz a chamada AJAX para a API
        $.ajax({
            type: 'POST',
            url: 'sua_api_de_envio_de_email',
            data: formData,
            dataType: 'json',
            encode: true
        })
        .done(function(data) {
            // Exibe uma mensagem de sucesso
            alert('Mensagem enviada com sucesso!');
        })
        .fail(function(data) {
            // Exibe uma mensagem de erro
            alert('Erro ao enviar mensagem. Por favor, tente novamente mais tarde.');
        });
    });
});
*/