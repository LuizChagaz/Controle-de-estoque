function pageload(){
    const buttons = document.querySelectorAll("#entrar")
    for (const button of buttons) {
        button.addEventListener('click', function(event) {
            var form = new FormData(document.querySelector("#formi"));
            fetch("inserir.php", {
                method: "POST",
                body: form
            }).then(function(resposta) {
                console.log(resposta);
            });
        }) 
    }
}
window.onload = pageload