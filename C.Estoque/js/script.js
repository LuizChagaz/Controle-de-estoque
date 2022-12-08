function dados(){
    fetch("dados.php").then((resposta) => resposta.json())
    .then((txt) => {
        var table = document.querySelector("#att");
        var html = '';
        num = 0;
        txt.forEach(value=> {
            num++;
            html += '<tr><th>'+num+'</th><th>'+value["Nome"]+'</th><th>'+value["Quantidade"]+'<button id="meno'+value["Id_produto"]+'" type="button" class="btn btn-danger">-</button><a id="mais'+value["Id_produto"]+'" type="button" class="btn btn-danger">+</a></th><th>'+value["Descricao"]+'</th></tr>'
        });
        table.innerHTML = html;
    }).catch((erro) => { console.error(erro); });
}
function pageload(){
        
        const att = document.querySelectorAll("button");
        for (const atts of att){
            atts.addEventListener('click', function(){
                var ids = this.id;
                tipo = ids.substring(0,4);
                console.log(tipo)
            });
        }
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