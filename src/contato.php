<div class="row">
    <div class="col-md-12">
        <div class="well">
            <h1>Contato</h1>

            <form class="form-horizontal" role="form">
                <div class="form-group">
                    <label for="inputNome" class="col-sm-2 control-label">Nome</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="inputNome" placeholder="Nome">
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputEmail" class="col-sm-2 control-label">Email</label>
                    <div class="col-sm-10">
                        <input type="email" class="form-control" id="inputEmail" placeholder="Email">
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputAssunto" class="col-sm-2 control-label">Assunto</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="inputAssunto" placeholder="Assunto">
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputMensagem" class="col-sm-2 control-label">Mensagem</label>
                    <div class="col-sm-10">
                        <textarea class="form-control" rows="4" id="inputMensagem" placeholder="Mensagem"></textarea>
                    </div>
                </div>
            </form>

            <button class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal">
                Enviar
            </button>

        </div>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">
                    <span aria-hidden="true">&times;</span><span class="sr-only">Fechar</span>
                </button>
                <h4 class="modal-title" id="myModalLabel">Dados enviados com sucesso</h4>
            </div>
            <div class="modal-body">
                <h5>Abaixo seguem os dados que você enviou:</h5>
                <br>
                <p id="pNome"></p>
                <br>
                <p id="pEmail"></p>
                <br>
                <p id="pAssunto"></p>
                <br>
                <p id="pMensagem"></p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary" data-dismiss="modal">Fechar</button>
            </div>
        </div>
    </div>
</div>

<script type="application/javascript">
    $('#myModal').on('show.bs.modal', function (e) {
        $("#pNome").html("<b>Nome:</b>  " + $("#inputNome").val());
        $("#pEmail").html("<b>Email:</b>  " + $("#inputEmail").val());
        $("#pAssunto").html("<b>Assunto:</b>  " + $("#inputAssunto").val());
        $("#pMensagem").html("<b>Mensagem:</b>  " + $("#inputMensagem").val());
    });

    $('#myModal').on('hide.bs.modal', function (e) {
        $("#inputNome").val("");
        $("#inputEmail").val("");
        $("#inputAssunto").val("");
        $("#inputMensagem").val("");
    });
</script>