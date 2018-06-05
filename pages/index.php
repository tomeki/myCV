<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="Description" content="home page">
	<meta name="author" content="Brissonnet Thomas">
	<!-- Bootstrap css -->
	<link href="../static/css/bootstrap.min.css" rel="stylesheet" />
	<link href="../static/css/index.css" rel="stylesheet" />
	<link href="../static/css/template.css" rel="stylesheet" />
	<!-- jQuery and Bootstrap js -->
	<script src="../static/js/bootstrap.min.js" type="text/javascript"></script>
	<script src="../static/js/jquery.min.js" type="text/javascript"></script>

		<!-- Bootstrap Validator CSS -->
	<link href="../static/css/bootstrapValidator.min.css" rel="stylesheet" />

			<!-- Bootstrap Validator JS -->
	<script src="../static/js/bootstrapValidator.min.js" type="text/javascript"></script>

	<!-- html5 shim and respond.js ie8 support of html5 elements and media queries -->
	<!-- [if lt IE 9]>
	<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
	<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->

	<title>Accueil</title>
</head>
<body>
	<!-- Navbar-->
	<nav class="navbar navbar-default navbar-fixed-top" role="navigation">
		<div class="container">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-container">
					<span class="sr-only">Show and Hide the Navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="#">Menu</a>
			</div>
			<div class="collapse navbar-collapse" id="navbar-container">
				<ul class="nav navbar-nav">
					<li class="active"><a href="index.html"><span class="glyphicon glyphicon-home"></span> Accueil</a></li>
					<li><a href="mon_cv.php"><span class="glyphicon glyphicon-book"></span> Mon CV</a></li>
					<li><a href="contact.php"><span class="glyphicon glyphicon-question-sign"></span> Me Contacter</a></li>
				</ul>
			</div>
			
		</div>
	</nav>
	<!-- Content-->
	<div class="container">
		<div class="alert alert-danger" role="alert">
			EN RECHERCHE D'UNE ALTERNANCE | DEV WEB | SEPTEMBRE 2018 | LYON / CHAMBERY
		</div> 
		<div class="jumbotron">
			<div class="row">
				<div class="col-md-8">
				<h1>Brissonnet Thomas</h1>
				<p>En recherche d'une alternance en développement web pour mon master.</p>

				</div>
				<div class="col-md-4">
					<div class="photo">
						<a href="#" class="img-thumbnail">
							<img src="../static/img/photo.jpg" alt="photo_de_profil" width="200px"/>
						</a>
					</div>
				</div>
			</div>
		</div>
		<hr />
		  <div class="row">
            <div class="col-md-12">
				<p>
				Actuellement étudiant en L3 Télécommunications et Réseaux Informatiques (TRI), je recherche une alternance pour
				mon master TRI situé au Bourget-du-Lac (73) pour la rentrée Septembre 2018.
				Je recherche de préférence une alternance dans le développement web situé autour de Lyon ou autour de Chambéry.
				</p>
				<p>
				Etant passionné par le développement, je n'ai pourtant pas spécialisé mes études afin de pouvoir profiter d'une 
				large palette de connaissances diverses autour de l'informatique.
				Cependant, j'aime le dév web et je souhaite poursuivre mon cursus en alternance au près d'une entreprise afin de pouvoir 
				étendre et mettre en pratique mes connaissances dans ce domaine.
				</p>
            </div>
        </div>
		<hr />
		<div class="row">
			<div class="col-md-6">
				<div class="jumbotron">
					<p>Pour en savoir plus à mon sujet, vous pouvez vous diriger vers mon CV: </p><a href="mon_cv.php"><button type="button" class="btn btn-primary btn-block"><span class="glyphicon glyphicon-book"></span> Mon CV</button></a>
				</div>
			</div>
			<div class="col-md-6">
				<div class="jumbotron">
					<p> Pour me contacter, vous pouvez vous diriger ici: </p><a href="contact.php"><button type="button" class="btn btn-primary btn-block"><span class="glyphicon glyphicon-question-sign"></span> Me contacter</button></a>
				</div>
			</div>
		</div>
	</div>
	<div class="footer">
		<nav class="navbar navbar-default navbar-fixed-bottom">
			<div class="container">
				<p class="navbar-text ">Thomas Brissonnet &copy; 2018 • Tous droits réservés • <a class="footer-link" href="contact.php">Contact</a></p>
			</div>
		</nav>
	</div>
	<!-- 
		Bootstrap javascript and JQuery should be loaded
		Placed at the end of the document for faster load times
	-->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
	<script src="../static/js/bootstrap.min.js"></script>
</body>
</html>
