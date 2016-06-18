<?php
$dao_usuario = new DAOUsuario();
$user = $dao_usuario->BuscarPorEmail($_SESSION['email']);
?>

<div class="section">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="section">
              <div class="container">
                <div class="row">
                  <div class="col-md-12">
                    <h1 class="text-center">Meu Cadastro</h1>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12">
              <form class="form-horizontal" role="form" action="./salvar_usuario.php" method="post">
              <div class="form-group has-feedback" id="prontuario" draggable="true">
                <div class="col-sm-2">
                  <label for="inputEmail3" class="control-label">
                    <span style="font-weight: normal;">Prontuário:</span>
                  </label>
                </div>
                <div class="col-sm-10">
                    <input name="prontuario" value="<?php echo $user->getProntuario() ?>" type="text" class="form-control input-lg" id="inputEmail3" placeholder="Prontuário">
                  <span class="fa fa-check form-control-feedback"></span>
                </div>
              </div>
              <div class="form-group has-feedback" id="nome">
                <div class="col-sm-2">
                  <label for="inputEmail3" class="control-label">
                    <span style="font-weight: normal;">Nome:</span>
                  </label>
                </div>
                <div class="col-sm-10">
                    <input name="nome" value="<?php echo $user->getNome() ?>"  type="text" class="form-control input-lg" id="inputEmail3" placeholder="Nome">
                  <span class="fa fa-check form-control-feedback"></span>
                </div>
              </div>
              <div class="form-group has-feedback" id="celular">
                <div class="col-sm-2">
                  <label for="inputEmail3" class="control-label">
                    <span style="font-weight: normal;">Celular:</span>
                  </label>
                </div>
                <div class="col-sm-10">
                    <input name="celular" value="<?php echo $user->getCelular() ?>" type="text" class="form-control input-lg" placeholder="celular" id="campoTelefone">
                  <span class="fa fa-check form-control-feedback"></span>
                </div>
              </div>
              <div class="form-group has-feedback" id="telefone_fixo">
                <div class="col-sm-2">
                  <label for="inputEmail3" class="control-label">
                    <span style="font-weight: normal;">Telefone Fixo:</span>
                  </label>
                </div>
                <div class="col-sm-10">
                    <input name="fixo" value="<?php echo $user->getTelFixo() ?>" type="text" class="form-control input-lg" id="campoTelefone" placeholder="telefone_fixo">
                  <span class="fa fa-check form-control-feedback"></span>
                </div>
              </div>
              <div class="form-group has-feedback" id="prontuario">
                <div class="col-sm-2">
                  <label for="inputEmail3" class="control-label">
                    <span style="font-weight: normal;">Email:</span>
                  </label>
                </div>
                <div class="col-sm-10">
                    <input name="email" value="<?php echo $user->getEmail() ?>" type="email" class="form-control input-lg" id="inputEmail3" placeholder="email">
                  <span class="fa fa-check form-control-feedback"></span>
                </div>
              </div>
              <div class="form-group has-feedback" id="prontuario">
                <div class="col-sm-2">
                  <label for="inputEmail3" class="control-label">
                    <span style="font-weight: normal;">Senha:</span>
                  </label>
                </div>
                <div class="col-sm-10">
                  <input name="senha" type="password" class="form-control input-lg" id="inputEmail3" placeholder="senha">
                  <span class="fa fa-check form-control-feedback"></span>
                </div>
              </div>
              <div class="form-group has-feedback" id="prontuario">
                <div class="col-sm-2">
                  <label for="inputEmail3" class="control-label">
                    <span style="font-weight: normal;">Confirmar Senha:</span>
                  </label>
                </div>
                <div class="col-sm-10">
                  <input name="confirmacao_senha" type="password" class="form-control input-lg" id="inputEmail3" placeholder="senha novamente">
                  <span class="fa fa-check form-control-feedback"></span>
                </div>
              </div>
              <div class="form-group">
                <div class="col-sm-10 col-sm-offset-2 text-center">
                  <button type="submit" class="btn btn-lg btn-success" data-toggle="button">
                    <i class="fa fa-lg fa-save">Salvar</i>
                  </button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>