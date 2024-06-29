
<!DOCTYPE html>
<html>
<head>
	<title>Bootstrap</title>
	<meta name="viewport" content="width=device-width, initial-scale=1" charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<script type="text/javascript" src="js/jquery-1.10.2.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.bundle.min.js"></script>
	
</head>

<body>
	<div class="container">
		<h1>Sistema Bootstrap</h1>
		<p>Primeiro teste.</p>
		<h2>Jumbotron</h2>
			<div class="jumbotron">
				<h1>Aula Bootstrap</h1>
				<p>Framework html, css, js</p>
			</div>
		<!-- xs, sm, md, lg responsividade -->
		<div class="row">
			<div class="col-sm-3" style="text-align: center">A</div>
			<div class="col-sm-" style="text-align: center">B</div>
			<div class="col-sm-3" style="text-align: center">C</div>
			<div class="col-sm-3" style="text-align: center">D</div>
			
		</div>
		<hr/>
		

		<blockquote>
			Essa é uma citação famosa de um autor famoso
			<footer>Autor desconhecido</footer>
		</blockquote>

		<p>Essa é uma <mark>frase de teste </mark> específica para o <abbr title="Um framework ágil!">Bootstrap</abbr></p>

		<dl>
			<dt>Café</dt>
			<dd>Bebida quente preta</dd>

			<dt>Leite</dt>
			<dd>Bebida fria branca</dd>
		</dl>

		<p class="text-center">Este texto representa perigo</p>
		<p class="text-danger">Este texto representa perigo</p>
		<p class="bg-danger">Este texto representa perigo</p>
		<p class="bg-success">Este texto representa sucesso</p>
		<p class="bg-info">Este texto representa uma informação</p>
		<p class="bg-warning">Este texto representa um aviso</p>
		<p class="bg-primary">Este texto representa um padrão do bootstrap</p>
		<p class="text-uppercase">Este texto representa um padrão do bootstrap</p>


		<table class="table table-striped"><!--table-bordered, table-hover-->
			<thead>
			<tr>
				<th>Nome</th>
				<th>Sobrenome</th>
				<th>Email</th>
			</tr>
			</thead>
			<tbody>
			<tr>
				<td>Fulano</td>
				<td>De Tal</td>
				<td>fulanodetal@gmail.com</td>
			</tr>
			<tr>
				<td>Fulano</td>
				<td>De Tal</td>
				<td>fulanodetal@gmail.com</td>
			</tr>
			<tr>
				<td>Fulano</td>
				<td>De Tal</td>
				<td>fulanodetal@gmail.com</td>
			</tr>
			</tbody>
		</table>

		<img src="img/paisagem.jpg" class="img-fluid rounded img-thumbnail"  /><!--responsiva-->
		<br>
		<button class="btn btn-default btn-lg">Avançar</button>
		<br>
		<button class="btn btn-success btn-sm">Avançar</button>
		<br>
		<button class="btn btn-danger btn-block">Avançar</button>
		<br>
		<button class="btn btn-info disabled">Avançar</button>

		<hr>

		<p>Qual Empressa você prefere?</p>
		<div class="btn-group">
			<button class="btn btn-danger">Apple</button>	
			<button class="btn btn-primary">Samsung</button>
			<button class="btn btn-primary">Sony</button>
	</div>

		<hr>

				<p>Qual Empressa você prefere?</p>
				<div class="btn-group-justified">
					<button class="btn btn-primary">Apple</button>	
					<button class="btn btn-primary">Samsung</button>
					<button class="btn btn-primary">Sony</button>
			</div>

<hr>

				<p>Qual Empressa você prefere?</p>
				<div class="btn-group-vertical">
					<button class="btn btn-primary">Apple</button>	
					<button class="btn btn-primary">Samsung</button>
					<button class="btn btn-primary">Sony</button>
			</div>
<hr>
	<h3>Menu dropdown</h3>

	<div class="btn-group">
		<button class="btn btn-primary dropdown-toggle" data-toggle="dropdown" type="button" aria-haspopup="true" aria-expanded="false" >Escolha <span class="caret"></span></button>
		<ul class="dropdown-menu">
			<li class="dropdown-header">Linguagens a ser aprendidas</li>
			<li><a class="dropdown-item disabled" href="#">PHP</a></li>
			<li><a class="dropdown-item" href="#">HTML</a></li>
			<li><a class="dropdown-item" href="#">CSS</a></li>
			<li class="dropdown-divider"></li>
			<li><a class="dropdown-item" href="#">JS</a></li>
		</ul>
	</div>
	<hr>

	<div class="dropdown">
  <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    Botão dropdown
  </button>
  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
    <a class="dropdown-item" href="#">Alguma ação</a>
    <a class="dropdown-item" href="#">Outra ação</a>
    <a class="dropdown-item" href="#">Alguma coisa aqui</a>
  </div>
</div>
<hr>
<h2>ALERTS</h2>

<!--<div class="alert alert-success alert-dismissible fade show" role="alert">
	<a href="#" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></a>
	Email inserido com sucesso!!
</div>

<div class="alert alert-danger">
	<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
	E-mail e/ou senha estão incorretos!
</div>-->

<button class="btn btn-primary">Mensagens <span class="badge">7</span></button>

<hr/>
<h2>Meu menu novo começa aqui <span class="label label-warning">novo</span></h2>

<br>
<h2>PAINELS</h2>

<div class="panel panel-success">
	<div class="panel-heading">Esportes</div>
	<div class="panel-body">Noticias e conteúdos sobre esportes</div>


	<button class="btn btn-primary" data-toggle="collapse" data-target="#teste">Collapse</button>
	<div id="teste" class="collapse">
		Alguma frase qualquer...
	</div>

</div>
	<div class="panel panel-default">
		<div class="panel-heading">
			<h4 class="panel-title">
		<a href="" data-toggle="collapse">Granito</a>
		</h4>
		</div>
		<div id="teste" class="collapse panel-collapsse">
		<div class="panel-body">
			A explicação muito complexa sobre granito.
		</div>
	</div>

		<hr/>
		<ul class="list-group">
			<li class="list-group-item">Item 1</li>
			<li class="list-group-item">Item 2</li>
			<li class="list-group-item">Item 3</li>
			<li class="list-group-item">Item 4</li>
			<li class="list-group-item">Item 5</li>
			<li class="list-group-item">Item 6</li>

		</ul>
		<hr/>
		<div class="list-group">
			<a href="#" class="list-group-item">Item 1</a>
			<a href="#" class="list-group-item disabled">Item 2</a>
			<a href="#" class="list-group-item active">Item 3</a>
			<a href="#" class="list-group-item list-group-item-success">Item 4</a>
			<a href="#" class="list-group-item">Item 5</a>
			<a href="#" class="list-group-item">Item 6</a>

		</div>

		<hr/>
		<h1>ABAS</h1>
		<ul class="nav nav-tabs">
			<li class="nav-item">
				<a class="nav-link active"  href="#home">HOME</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="#sobre">SOBRE</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="#contato">CONTATO</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="#teste">TESTE</a>
			</li>
		</ul>
		<div class="tab-content">
			<div id="home" class="tab-pane active in">
				Conteúdo do HOME
			</div>
			<div id="sobre" class="tab-pane">
				Página SOBRE
			</div>
			<div id="contato" class="tab-pane">
				Formulário de CONTATO
			</div>
			<div id="teste" class="tab-pane">
				Testetestesteste
			</div>
			
		</div>
		<ul class="pagination">
			<li class="page-item active"><a class="page-link" href="">1</a></li>
			<li class="page-item"><a class="page-link" href="">2</a></li>
			<li class="page-item"><a class="page-link" href="">3</a></li>
			<li class="page-item"><a class="page-link" href="">4</a></li>
			<li class="page-item"><a class="page-link" href="">5</a></li>
		</ul>

		<hr/>
		<ul class="pager">
			<li class="previous"><a href="">Aula Anterior</a></li>
			<li class="next"><a href="">Próxima Aula</a></li>
		</ul>
		<hr/>
		<h1>NAVBAR</h1>

		<nav class="navbar navbar-inverse">
			<div class="container-fluid">
				<ul class="nav navbar-nav">
					<li><a href="">HOME</a></li>
					<li><a href="">EMPRESA</a></li>
					<li><a href="">CONTATO</a></li>

				</ul>
			</div>
		</nav>

 		<hr/>
 		<h1>Formularios</h1>
 		<form method="POST">

 		<div class="form-group">
 			Email:<br>
 			<input type="email" name="email" class="form-control" />
 		</div>
 		<div class="form-group">
 			Senha:<br>
 			<input type="password" name="senha" class="form-control" />
		</div>
 			<input type="submit" name="Entrar" value="Entrar"
 			class="btn btn-default" />
 		</form>

 		<hr/>

 		<h1>MODAL</h1>

 		<button class="btn btn-info" data-toggle="modal" data-target="#janela">Abrir Modal</button>

 		<div id="janela" class="modal" role="dialog">
 			<div class="modal-dialog">
 				<div class="modal-content">
 					<div class="modal-header">
 						<h4 class="modal-title">Título do Modal</h4>
 						<button class="close" data-dismiss="modal">&times;</button>
 					</div>
 					<div class="modal-body">
 						<p>Conteúdo do meu modal</p>
 					</div>
 					<div class="modal-footer">
 						<button class="btn btn-default" data-dismiss="modal">Fechar</button>
 					</div>
 				</div>
 			</div>
 		</div>
	
	</div>
</body>
</html>