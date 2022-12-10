<?php require_once "head.php";?>
<body>
    <?php require_once "conexão.php";
        $dados = $conn->query("SELECT Id_produto, Quantidade, Nome,Descricao FROM estoque");
    ?>
    <div class="container" >
        <div class="row">
            <div class="col-sm-3"></div>
            <div style="height: 500px; overflow-y: scroll;" class="col-sm-9">
                <table class="table" style="color: brown;">
                    <thead id="table" class="thead-dark">
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Produto</th>
                            <th scope="col">Quantidade</th>
                            <th scope="col">Descrição</th>
                        </tr>
                    </thead>
                    <tbody id='att'>

                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <button onclick="Pegarid()" type="button" class="but btn btn-primary" data-toggle="modal" data-target="#exampleModalLong">
        Adicionar Material
    </button>
    
    <div aria-live="polite" aria-atomic="true" style="position: relative;">
        <div style="position: absolute; top: 0; left: 0;">
            <div class="toast" role="alert" aria-live="assertive" aria-atomic="true" data-delay="7000">
                <div class="toast-header">
                <img src="" class="rounded mr-2" alt="...">
                <strong class="mr-auto">Sistema</strong>
                <small>11 mins ago</small>
                <button type="button" class="ml-2 mb-1 close" data-dismiss="toast" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                </div>
                <div class="toast-body">Inserção de dados feita com sucesso
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Material</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form id="formi" method="POST">
                        <div class="input-group mb-3">
                            <div class="container">
                                <div class="row">
                                    <div class="col">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text" id="basic-addon1">Nome</span>
                                        </div>
                                        <input id="val" name="Nome" type="text" class="form-control" placeholder="" aria-label="Username" aria-describedby="basic-addon1">
                                    </div>
                                    <div class="col">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text" id="basic-addon1">Descrição</span>
                                        </div>
                                        <input id="val" name="descricao" type="text" class="form-control" placeholder="" aria-label="Username" aria-describedby="basic-addon1">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                    <button id="entrar" type="button" class="btn btn-primary">Lançar</button>
                </div>
            </div>
        </div>
    </div>

    
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="js/script.js"></script>
    <script src="js/script.js"></script>
</body>
</html>