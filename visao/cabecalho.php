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
          <a class="navbar-brand" id="marca" href="index.php"><span><b>SafePark</b></span></a>
        </div>
        <div class="collapse navbar-collapse" id="navbar-ex-collapse">
          <ul class="nav navbar-nav navbar-right"></ul>
          <ul class="nav navbar-nav navbar-right"></ul>
          <ul class="nav navbar-nav navbar-right">
            <li id="home" class="disabled">
              <a href="index.php"><i class="fa fa-home fa-lg pull-left text-success"></i>Home</a>
            </li>
            <li id="dados_pessoais">
              <a href="novo_usuario.php"><i class="fa fa-fw fa-lg fa-user pull-left text-success"></i>Dados Pessoais</a>
            </li>
            <li id="veiculo">
              <a href="veiculo.php"><i class="fa fa-automobile fa-fw fa-lg pull-left text-success"></i>Veículos</a>
            </li>
            <li class="dropdown" id="ocorrencia">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Ocorrências <i class="et-down fa fa-fw fa-lg fa-pencil-square-o text-success"></i></a>
              <ul class="dropdown-menu" role="menu">
                <li>
                    <a href="ocorrencia.php.">Nova Ocorrência</a>
                </li>
                <li>
                    <a href="minhas_ocorrencias.php">Minhas Ocorrências</a>
                </li>
              </ul>
            </li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Administrar <i class="et-down fa fa-lg fa-wrench pull-right text-success"></i></a>
              <ul class="dropdown-menu" role="menu">
                <li>
                  <a href="usuario.php">Usuários</a>
                </li>
                <li>
                  <a href="veiculo.php">Veiculos</a>
                </li>
                <li>
                  <a href="vaga.php">Vagas</a>
                </li>
                <li class="divider"></li>
                <li>
                  <a href="ocorrencia.php">Ocorrências</a>
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
            <img src="imagens\png_carro11.png" class="center-block img-responsive">
          </div>
          <div class="col-md-9 text-center">
            <div class="col-md-12">
                <form class="form-horizontal" role="form" action="logar.php" method="POST">
                <div class="form-group" id="email">
                  <div class="col-sm-2">
                    <label for="inputEmail3" class="control-label">Email</label>
                  </div>
                  <div class="col-sm-10">
                    <input name="login" type="email" class="form-control" id="inputEmail3" placeholder="Email">
                  </div>
                </div>
                <div class="form-group" id="senha">
                  <div class="col-sm-2">
                    <label for="inputPassword3" class="control-label">Senha</label>
                  </div>
                  <div class="col-sm-10">
                    <input name="senha" type="password" class="form-control" id="inputPassword3" placeholder="senha">
                  </div>
                </div>
                <div class="form-group" id="lembrar">
                  <div class="col-sm-offset-2 col-sm-10">
                    <div class="checkbox">
                      <label>
                        <input type="checkbox">Lembrar me</label>
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <div class="col-sm-offset-2 col-sm-10">
                    <button type="submit" class="btn btn-default" data-toggle="button" id="entrar">Entrar</button>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>