<?php require_once "head.php";?>
<body>
    <?php require_once "conexão.php";
        $dados = $conn->query("SELECT Id_produto, Quantidade, Nome,Descricao FROM estoque");
    ?>
    <div class="container" >
        <div class="row">
            <div class="col-sm-3"></div>
            <div class="col-sm-9">
                <table class="table" style="color: brown;">
                    <thead class="thead-dark">
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Produto</th>
                            <th scope="col">Quantidade</th>
                            <th scope="col">Descrição</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row">1</th>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>                        
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <button type="button" class="but btn btn-primary" data-toggle="modal" data-target="#exampleModalLong">
        Adicionar Material
    </button>
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