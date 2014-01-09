<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="iso-8859-1">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="">
<meta name="author" content="">
<link rel="shortcut icon" href="../../docs-assets/ico/favicon.png">

<title>Centro de Lançamento de Alcântara</title>

<!-- Bootstrap core CSS -->
<link href="<?php echo base_url('assets/css/bootstrap.css')?>"
	rel="stylesheet">
<link href="<?php echo base_url('assets/css/estilo.css')?>"
	rel="stylesheet">

<!-- Custom styles for this template -->
<link href="jumbotron.css" rel="stylesheet">

<!-- Just for debugging purposes. Don't actually copy this line! -->
<!--[if lt IE 9]><script src="../../docs-assets/js/ie8-responsive-file-warning.js"></script><![endif]-->

<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
</head>

<body>



	<div class="container">
		<div class="row clearfix">
			<div class="col-md-12 column" align="center">
				<img class="img-rounded" src="http://localhost/CLA/imagem/TopoD.png" />
			</div>
		</div>
		<div class="navbar-wrapper">


			<div class="navbar navbar-default navbar-static-top"
				role="navigation">
				<div class="container">
					<div class="navbar-header">
						<button type="button" class="navbar-toggle" data-toggle="collapse"
							data-target=".navbar-collapse">
							<span class="sr-only">Toggle navigation</span> <span
								class="icon-bar"></span> <span class="icon-bar"></span> <span
								class="icon-bar"></span>
						</button>

					</div>
					<div class="navbar-collapse collapse">
						<ul class="nav navbar-nav">
							<li><a href="<?php echo site_url('painel/principal/index')?>">Home</a></li>
							<li class="dropdown"><a href="#" class="dropdown-toggle"
								data-toggle="dropdown">CLA <b class="caret"></b></a>
								<ul class="dropdown-menu">
									<li><a
										href="<?php echo site_url('painel/principal/localizacao')?>">Localização</a></li>
									<li><a
										href="<?php echo site_url('painel/principal/historia')?>">História</a></li>
									<li><a
										href="<?php echo site_url('painel/principal/simbologia')?>">Simbologia</a></li>
									<li><a
										href="<?php echo site_url('painel/principal/vantagens')?>">Vantagens</a></li>
								</ul></li>
							<li><a
								href="<?php echo site_url('painel/principal/atividadeSistemica')?>">Atividades
									Sistêmicas</a></li>
							<li><a href="<?php echo site_url('painel/principal/beneficio')?>">Benefícios</a></li>
							<li><a href="<?php echo site_url('painel/principal/campanha')?>">Campanhas</a></li>
							<li class="dropdown"><a href="#" class="dropdown-toggle"
								data-toggle="dropdown">Implantação <b class="caret"></b></a>
								<ul class="dropdown-menu">
									<li><a
										href="<?php echo site_url('painel/principal/conceitoGeral')?>">Conceito
											Geral</a></li>
									<li><a
										href="<?php echo site_url('painel/principal/instalacao')?>">Instalações</a></li>
									<li><a href="<?php echo site_url('painel/principal/projeto')?>">Projeto</a></li>
								</ul></li>
							<li><a href="<?php echo site_url('painel/principal/noticia')?>">Notícias</a></li>
							<li><a href="<?php echo site_url('painel/principal/operacao')?>">Operações</a></li>
							<li><a href="<?php echo site_url('painel/principal/panorama')?>">Panorama</a></li>
							<li><a href="<?php echo site_url('painel/principal/pnae')?>">PNAE</a></li>
							<li><a
								href="<?php echo site_url('painel/principal/faleConosco')?>">Fale
									Conosco</a></li>

						</ul>
					</div>
				</div>
			</div>


		</div>

		{CONTEUDO}

		<hr>
		<div align="center">
			<footer>
				CLA - Alcântara - MA - Brasil - ROD. MA-106 - Km 7 - Alcântara /
				Tel: (98) 3311 9000 - Fax: (98) 3311 9325 - CEP.: 65.250-000<br> CLA
				- Escritório de São Luis - MA - Brasil, Av. dos Libaneses, nº 29 -
				Tirirical / Tel: (98) 3311 9567- Fax: (98) 3311 9567 -
				CEP.:65.056-480<br> www.cla.aer.mil.br e-mail: scs@cla.aer.mil.br
				scs@cla.intraer
			</footer>
		</div>
	</div>
	<!-- /container -->


	<!-- Bootstrap core JavaScript
    ================================================== -->
	<!-- Placed at the end of the document so the pages load faster -->
	<script src="<?php echo  base_url('assets/js/jquery-1.10.2.min.js')?>"></script>
	<script src="<?php echo base_url('assets/js/bootstrap.min.js')?>"></script>

</body>
</html>

