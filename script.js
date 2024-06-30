
 function validacao(){

    let nome=document.getElementById("nome").value;
    let email=document.getElementById("email").value;

        if (nome==""){
         alert ("Voce nao preencheu o nome ");
         return false;
    }
        if(email==""){
        return regex.test(email);
     }    
      else {
        alert("O email é inválido.");
    }    
 } 
 