function dados(){
    fetch("dados.php").then((resposta) => resposta.json())
    .then((txt) => {
        var table = document.querySelector("#att");
        var html = '';
        num = 0;
        txt.forEach(value=> {
            num++;
            html += '<tr><th>'+num+'</th><th>'+value["Nome"]+'</th><th>'+value["Quantidade"]+'</th><th>'+value["Descricao"]+'</th></tr>'
        });
        table.innerHTML = html;
        console.log(txt);
    }).catch((erro) => { console.error(erro); });
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
                window.alert(txt);
                dados();
            }).catch((erro) => { console.error(erro); });
        }) 
    }
}
window.onload = pageload