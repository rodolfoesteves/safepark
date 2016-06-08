<html><head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script type="text/javascript" src="http://cdnjs.cloudflare.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
    <script type="text/javascript" src="http://netdna.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
    <link href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="css\principal.css" rel="stylesheet" type="text/css">
  </head><body>
    <div class="navbar navbar-default navbar-fixed-top navbar-inverse" id="menuTopo">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-ex-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" id="marca" href="index.html"><span><b>Usuarios</b></span></a>
        </div>
        <div class="collapse navbar-collapse" id="navbar-ex-collapse">
          <ul class="nav navbar-nav navbar-right"></ul>
          <ul class="nav navbar-nav navbar-right"></ul>
          <ul class="nav navbar-nav navbar-right">
            <li id="home">
              <a href="index.html"><i class="fa fa-home fa-lg pull-left text-success"></i>Home</a>
            </li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Administrar <i class="et-down fa fa-fw fa-lg fa-wrench pull-right text-success"></i></a>
              <ul class="dropdown-menu" role="menu">
                <li>
                  <a href="usuarios.html">Usuários</a>
                </li>
                <li>
                  <a href="veiculos.html">Veiculos</a>
                </li>
                <li>
                  <a href="vagas.html">Vagas</a>
                </li>
                <li class="divider"></li>
                <li>
                  <a href="ocorrencias.html">Ocorrências</a>
                </li>
              </ul>
            </li>
          </ul>
          <ul class="nav navbar-nav navbar-right"></ul>
          <ul class="nav navbar-nav navbar-right"></ul>
        </div>
      </div>
    </div>
    <div class="navbar navbar-default navbar-fixed-top navbar-inverse" id="menuTopo">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-ex-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" id="marca" href="index.html"><span><b>SafePark</b></span></a>
        </div>
        <div class="collapse navbar-collapse" id="navbar-ex-collapse">
          <ul class="nav navbar-nav navbar-right"></ul>
          <ul class="nav navbar-nav navbar-right"></ul>
          <ul class="nav navbar-nav navbar-right">
            <li id="home">
              <a href="index.html"><i class="fa fa-home fa-lg pull-left text-success"></i>Home</a>
            </li>
            <li id="usuario">
              <a href="usuario"><i class="fa fa-fw fa-lg fa-user pull-left text-success"></i>Dados Pessoais</a>
            </li>
            <li>
              <a href="veiculo.html" id="veiculo"><i class="fa fa-automobile fa-fw fa-lg pull-left text-success"></i>Veículos</a>
            </li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Ocorrências <i class="et-down fa fa-fw fa-lg fa-pencil-square-o text-success"></i></a>
              <ul class="dropdown-menu" role="menu">
                <li>
                  <a href="ocorrencia.html">Nova Ocorrência</a>
                </li>
                <li>
                  <a href="ocorrencia.html">Minhas Ocorrências</a>
                </li>
              </ul>
            </li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Administrar <i class="et-down fa fa-lg fa-wrench pull-right text-success"></i></a>
              <ul class="dropdown-menu" role="menu">
                <li>
                  <a href="usuario.html">Usuários</a>
                </li>
                <li>
                  <a href="veiculo.html">Veiculos</a>
                </li>
                <li>
                  <a href="vaga.html">Vagas</a>
                </li>
                <li class="divider"></li>
                <li>
                  <a href="ocorrencia.html">Ocorrências</a>
                </li>
              </ul>
            </li>
          </ul>
          <ul class="nav navbar-nav navbar-right"></ul>
          <ul class="nav navbar-nav navbar-right"></ul>
        </div>
      </div>
    </div>
    <div class="section section-success">
      <div class="container-fluid"></div>
    </div>
    <div class="section section-success">
      <div class="container">
        <div class="row text-center">
          <div class="col-md-3">
            <img src="imagens\logoifsphto.png" class="center-block img-responsive img-rounded">
            <img src="imagens\ocorrencia.png" class="center-block img-responsive" id="img_usuario">
          </div>
        </div>
      </div>
    </div>
    <div class="section">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="section">
              <div class="container">
                <div class="row">
                  <div class="col-md-12">
                    <h1>Cadastro de Ocorrências</h1>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12">
            <form class="form-horizontal" role="form">
              <div class="form-group has-feedback" id="prontuario">
                <div class="col-sm-2">
                  <label for="inputEmail3" class="control-label">
                    <span style="font-weight: normal;">Id:</span>
                  </label>
                </div>
                <div class="col-sm-10">
                  <input type="text" class="form-control input-lg" id="inputEmail3" placeholder="Id" disabled="disabled">
                  <span class="fa fa-check form-control-feedback"></span>
                </div>
              </div>
              <div class="form-group has-feedback" id="prontuario">
                <div class="col-sm-2">
                  <label for="inputEmail3" class="control-label">
                    <span style="font-weight: normal;">Relator:</span>
                    <br>
                  </label>
                </div>
                <div class="col-sm-10">
                  <input type="text" class="form-control input-lg" id="inputEmail3" placeholder="Prontuário">
                  <span class="fa fa-check form-control-feedback"></span>
                </div>
              </div>
              <div class="form-group has-feedback" id="nome">
                <div class="col-sm-2">
                  <label for="inputEmail3" class="control-label">
                    <span style="font-weight: normal;">Veiculo:</span>
                  </label>
                </div>
                <div class="col-sm-10">
                  <input type="text" class="form-control input-lg" id="inputEmail3" placeholder="Nome">
                  <span class="fa fa-check form-control-feedback"></span>
                </div>
              </div>
              <div class="form-group has-feedback" id="celular">
                <div class="col-sm-2">
                  <label for="inputEmail3" class="control-label">
                    <span style="font-weight: normal;">Placa</span>
                  </label>
                </div>
                <div class="col-sm-10">
                  <input type="text" class="form-control input-lg" id="inputEmail3" placeholder="celular">
                  <span class="fa fa-check form-control-feedback"></span>
                </div>
              </div>
              <div class="form-group has-feedback" id="telefone_fixo">
                <div class="col-sm-2">
                  <label for="inputEmail3" class="control-label">
                    <span style="font-weight: normal;">Proprietario:</span>
                  </label>
                </div>
                <div class="col-sm-10">
                  <input type="text" class="form-control input-lg" id="inputEmail3" placeholder="telefone_fixo">
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
                  <input type="email" class="form-control input-lg" id="inputEmail3" placeholder="email">
                  <span class="fa fa-check form-control-feedback"></span>
                </div>
              </div>
              <div class="form-group has-feedback" id="ocorrencia">
                <div class="col-sm-2">
                  <label for="inputEmail3" class="control-label">
                    <span style="font-weight: normal;">Ocorrência:</span>
                  </label>
                </div>
                <div class="col-sm-10">
                  <input type="text" class="form-control input-lg" id="inputEmail3" placeholder="ocorrencia">
                  <span class="fa fa-check form-control-feedback"></span>
                </div>
              </div>
              <div class="form-group">
                <div class="col-sm-offset-2 col-sm-10">
                  <div class="checkbox">
                    <label>
                      <input type="checkbox">Remember me</label>
                  </div>
                </div>
              </div>
              <div class="form-group">
                <div class="col-sm-offset-2 col-sm-10">
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
    <footer class="section section-success text-center">
      <div class="container">
        <div class="row">
          <div class="col-sm-6 col-md-12">
            <h2 contenteditable="true">Instituto Federal - Campus Hortolândia&nbsp;
              <div>Sistema de Estacionamento&nbsp;SafePark</div>
            </h2>
            <p>Avenida Thereza Ana Cecon Breda, s/n - Vila São Pedro Hortolândia-SP -
              Brasil - CEP: 13183-250 Telefone: (19) 3865-08070 hto.ifsp.edu.br</p>
          </div>
          <div class="col-md-12">
            <div class="col-md-12 hidden-xs text-center">
              <a href="www.instagram.com"><i class="fa fa-3x fa-fw fa-instagram text-inverse"></i></a>
              <a href="www.twitter.com"><i class="fa fa-3x fa-fw fa-twitter text-inverse"></i></a>
              <a href="m.facebook.com"><i class="fa fa-3x fa-fw fa-facebook text-inverse"></i></a>
              <a href="github.com"><i class="fa fa-3x fa-fw fa-github text-inverse"></i></a>
            </div>
            <p class="text-info text-right">
              <br>
              <br>
            </p>
          </div>
          <div class="col-sm-6">
            <div class="row">
              <div class="col-md-12 hidden-lg hidden-md hidden-sm text-left">
                <a href="#"><i class="fa fa-3x fa-fw fa-instagram text-inverse"></i></a>
                <a href="#"><i class="fa fa-3x fa-fw fa-twitter text-inverse"></i></a>
                <a href="#"><i class="fa fa-3x fa-fw fa-facebook text-inverse"></i></a>
                <a href="#"><i class="fa fa-3x fa-fw fa-github text-inverse"></i></a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </footer>
  

</body></html>