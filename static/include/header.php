<?php
include_once("static/include/var.php");
?>
<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="Keywords" content="Brissonnet,Thomas">
	<meta name="author" content="Brissonnet Thomas">
	<!-- Bootstrap css -->
	<link href="static/css/bootstrap.min.css" rel="stylesheet" />
	
<?php
if ($titre[$index]=="Contact"){
	echo "<link href='static/css/contact.css' rel='stylesheet' />";
	echo "<meta name='Description' content='contact page'>";
}elseif($titre[$index]=="Contact_"){
	echo "<link href='static/css/contact.css' rel='stylesheet' />";
	echo "<meta name='Description' content='contact page validation'>";
	echo "<meta http-equiv='refresh' content='5;URL=index'>";
}elseif($titre[$index]=="Accueil"){
	echo "<meta name='Description' content='index page'>";
}elseif($titre[$index]=="Curriculum Vitae"){
	echo "<link href='static/css/mon_cv.css' rel='stylesheet' />";
	echo "<meta name='Description' content='CV page'>";
}
?>
	
	<link href="static/css/template.css" rel="stylesheet" />
	<!-- jQuery and Bootstrap js -->
	<script src="static/js/bootstrap.min.js" type="text/javascript"></script>
	<script src="static/js/jquery.min.js" type="text/javascript"></script>

		<!-- Bootstrap Validator CSS -->
	<link href="static/css/bootstrapValidator.min.css" rel="stylesheet" />

			<!-- Bootstrap Validator JS -->
	<script src="static/js/bootstrapValidator.min.js" type="text/javascript"></script>
	<!-- html5 shim and respond.js ie8 support of html5 elements and media queries -->
	<!-- [if lt IE 9]>
	<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
	<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->

	<title><?php echo $titre[$index]; ?></title>
</head>