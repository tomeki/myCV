<?php
include("static/include/var.php");
echo $index;
echo $titre[$index];
?>
<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="Description" content="contact page">
	<meta name="author" content="Brissonnet Thomas">
	<!-- Bootstrap css -->
	<link href="static/css/bootstrap.min.css" rel="stylesheet" />
<?php
if ($title=="Contact" || $title=="Contact_"){
	echo "<link href='static/css/contact.css' rel='stylesheet' />";
}elseif($title=="Accueil"){
	echo "<link href='static/css/index.css' rel='stylesheet' />";
}elseif($title=="Curriculum Vitae"){
	echo "<link href='static/css/mon_cv.css' rel='stylesheet' />";
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

	<title><?php echo $titre[$index]; ?>
	</title>
</head>