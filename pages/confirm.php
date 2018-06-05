<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="Description" content="contact page">
	<meta name="author" content="Brissonnet Thomas">
	<meta http-equiv="refresh" content="5;URL=index.html"> 
	<!-- Bootstrap css -->
	<link href="../static/css/bootstrap.min.css" rel="stylesheet" />
	<link href="../static/css/contact.css" rel="stylesheet" />
	<link href="../static/css/template.css" rel="stylesheet" />

	<!-- html5 shim and respond.js ie8 support of html5 elements and media queries -->
	<!-- [if lt IE 9]>
	<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
	<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->

	<title>Contact</title>
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
					<li><a href="index.html"><span class="glyphicon glyphicon-home"></span> Accueil</a></li>
					<li><a href="mon_cv.html"><span class="glyphicon glyphicon-book"></span> Mon CV</a></li>
					<li  class="active"><a href="contact.html"><span class="glyphicon glyphicon-question-sign"></span> Me Contacter</a></li>
				</ul>
			</div>
			
		</div>
	</nav>
	<!-- Content-->
	<div class="container">
<?php 
	if(isset($_POST['envoyer'])){
		$mail = 'thomas.brissonnet@tbrissonnet.ovh';
		$boundary = "-----=".md5(rand());
		/*Space in mail*/
		if (!preg_match("#^[a-z0-9._-]+@(hotmail|live|msn).[a-z]{2,4}$#", $mail)) {
			$passage_ligne = "\r\n";
		}
		else {
			$passage_ligne = "\n";
		}				
		/*Open Boundary*/
		$message = "...";

		/*Header Mail*/
		$header = "From: \"EXPEDITEUR\"<".$_POST["email"].">".$passage_ligne;
		$header.= "Reply-to: \"RETOUR\" <".$mail.">".$passage_ligne;
		$header.= "MIME-Version: 1.0".$passage_ligne;
		$header.= "Content-Type: multipart/alternative;".$passage_ligne." boundary=\"$boundary\"".$passage_ligne;

		$message = $passage_ligne."--".$boundary.$passage_ligne;

		/*Mail in Text*/
		$message.= "Content-Type: text/plain; charset=\"ISO-8859-1\"".$passage_ligne;
		$message.= "Content-Transfer-Encoding: 8bit".$passage_ligne;
		$message.= $passage_ligne.$_POST["message"].$passage_ligne;
		$message.= $passage_ligne."--".$boundary.$passage_ligne;

		$message.= $passage_ligne."--".$boundary."--".$passage_ligne;
		$message.= $passage_ligne."--".$boundary."--".$passage_ligne;


		/*Sending mail*/
		$test = mail($mail,$_POST["sujet"],$message,$header);
		if ($test==1){
			echo"<div class='alert alert-info' role='alert'>
			Message envoyé avec succès!
			</div> ";
		}else{
			echo"<div class='alert alert-warning' role='alert'>
			Problème d'envoie du message!
			</div>";
		}
}
?>

		<div class="alert alert-info" role="alert">
			Message envoyé avec succès!
		</div> 
		<div class="row">
			<div class="col-xs-12">
				<a href="index.html"><button type="button" class="btn btn-info">Retour à l'accueil</button></a>
			</div>
		</div>

	</div>
	<div class="footer">
		<nav class="navbar navbar-default navbar-fixed-bottom">
			<div class="container">
				<p class="navbar-text ">Thomas Brissonnet &copy; 2018 • Tous droits réservés • <a class="footer-link" href="contact.html">Contact</a></p>
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
