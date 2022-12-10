function dados(){
    fetch("dados.php").then((resposta) => resposta.json())
    .then((txt) => {
        var table = document.querySelector("#att");
        var html = '';
        num = 0;
        txt.forEach(value=> {
            num++;
            html += '<tr><th>'+num+'</th><th>'+value["Nome"]+'</th><th>'+value["Quantidade"]+'<button onclick="Pegarid()" id="meno'+value["Id_produto"]+'" type="button" class="btn btn-danger">-</button><button onclick="Pegarid()" id="mais'+value["Id_produto"]+'" type="button" class="btn btn-danger">+</button></th><th>'+value["Descricao"]+'</th></tr>'
        });
        table.innerHTML = html;
    }).catch((erro) => { console.error(erro); });
}
function Pegarid(){
    var ids = event.srcElement.id;
    var tipo = ids.substring(0,4);
    var idl = ids.substring(4);
    fetch("Add.php", {
        headers: {
            Accept: "application/json",
            "Content-Type": "application/json",
         },
        method: "POST",
        body: JSON.stringify(ids)
    }).then((resposta) => resposta.text())
    .then((txt) => {
        console.log(txt);
    })
    dados();
}
function pageload(){
        dados()
    const buttons = document.querySelectorAll("#entrar")
    for (const button of buttons) {
        button.addEventListener('click', function(event) {
            var form = new FormData(document.querySelector("#formi"));
            fetch("inserir.php", {
                method: "POST",
                body: form
            }).then((resposta) => resposta.text())
            .then((txt) => {
                if(txt == 'Foi'){
                    $('.toast').toast('show');
                }
                dados();
            }).catch((erro) => { console.error(erro); });
        }) 
    }
}
window.onload = pageload