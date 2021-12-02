<!-- <script src="<=ROTA_GERAL?>/view/js/core.min.js"></script>
<script>

alert("Prezado cliente, faça seu cadastro e fique a vontade para pedir!!!!!")

var nome=prompt("Identifique-se")
if(nome!=''){

var matricula=prompt("Informe sua Matrícula")
if(matricula!=''){

var telefone=prompt("Informe o numero do seu Telefone")
if(telefone!=''){

var email=prompt("Informe seu e-mail")
if(email!=''){

alert("Parabéns Cadastro com sucesso")
var pedido=prompt("Menu Delivery:\n Opções: \n Digite 1 - Nhoque \n digite 2 - Fettuccine")
if(pedido==1 || pedido==2){

    enviar(nome,matricula,email,telefone,pedido);

}else{document.write("Faltou informar o pedido contido no menu")}
}else{document.write("Erro Identificação do Projeto obrigatório")}
}else{document.write("Erro Identificação da Turma obrigatória")}
}else{document.write("Erro identifique a matrícula")}
}else{document.write("Erro identificação obrigatória")}

function enviar(nome,matricula,email,telefone,pedido){
    $.ajax({
        url:'<=ROTA_GERAL?>/Cadastro/inserir',
        method:'POST',
        data:{nome:nome,email:email,matricula:matricula,telefone:telefone,pedido:pedido},
        dataType:'json',
        success:function(resposta){
            alert(resposta);
        }
    });
}
</script> -->