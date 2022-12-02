<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="author" content="LuizChagaz">
    <title>Cadastro e Apresentação</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="bootstrap/css/bootstrap-grid.min.css">
    <link rel="stylesheet" href="bootstrap/css/bootstrap-reboot.min.css">
</head>
<body>
    <?php 
        $host = "localhost";
        $user = "root";
        $pass = "";
        $db = "cadastro";

        $conn = new PDO("mysql:dbname=$db; host=$host; charset=utf8", $user, $pass);

        $dados = $conn->query("SELECT Nome, Rua, Nome_do_Pai, Nome_da_Mae FROM pessoa");
    ?>
    <form id="formi" method="POST">
        <div class="container">
            <div class="row">
                <div class="col-sm input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="inputGroup-sizing-default">Nome</span>
                    </div>
                    <input name="Nome" id="Nome" type="text" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm">
                </div><div class="col-sm input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="inputGroup-sizing-default">Rua</span>
                    </div>
                    <input name="Rua" id="Rua" type="text" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm">
                </div>
            </div>
            <div class="row">
                <div class="col-sm input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="inputGroup-sizing-default">Nome do pai</span>
                    </div>
                    <input name="Nome_do_Pai" id="Nome_do_Pai" type="text" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm">
                </div><div class="col-sm input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="inputGroup-sizing-default">Nome da mãe</span>
                    </div>
                    <input name="Nome_da_Mae" id="Nome_da_Mae" type="text" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm">
                </div>
            </div>
        </div>
        <div id="msg"></div>
        <button id="entrar">entrar</button>
    </form>
    <div>
        <table>
            <tr>
                <th>Nome</th>
                <th>Rua</th>
                <th>Nome do Pai</th>
                <th>Nome da Mãe</th>
</tr>
            <?php  foreach ($dados as $key => $value) {?>
            <tr>
                <th><?php echo $value["Nome"]?></th>
                <th><?php echo $value["Rua"]?></th>
                <th><?php echo $value["Nome_do_Pai"]?></th>
                <th><?php echo $value["Nome_da_Mae"]?></th>
            </tr>
            <?php }?>
        </table>
        
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="js/script.js"></script>
    <script>
        function pageload(){
            const buttons = document.querySelectorAll("#entrar")
            for (const button of buttons) {
            button.addEventListener('click', function(event) {
                event.preventDefault();
                var form = document.querySelector("#formi");
                $.ajax({
                    url: "inserir.php",
                    method: "post",
                    data: $("#formi").serialize(),
                    dataType: "text",
                    success: function(){
                    }
                })
            })
            }
        }
        window.onload = pageload;
    </script>
</body>
</html>