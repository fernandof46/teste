let senha = document.querySelector("#senha");
let senha1 = document.querySelector("#senha1");
let submit = document.querySelector("#submit");
let senhaerro = document.querySelector(".senha-erro");

function verifica(){
    if(senha1.value == senha2.value){
        senhaerro.style.display = "none";  // retira a mensagem da tela
        submit.disabled = false; // habilita o botão de enviar/SALVAR
    }
    else{
        senhaerro.style.display = "block";
        submit.disabled = true; // mantém o botão de enviar/SALVAR desabilitado
    }
}
senha1.addEventListener("input", function(){
    verifica();
})
