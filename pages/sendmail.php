<!DOCTYPE html>
<!--
Template Name: Pleeness
Author: <a href="http://www.os-templates.com/">OS Templates</a>
Author URI: http://www.os-templates.com/
Licence: Free to use under our free template licence terms
Licence URI: http://www.os-templates.com/template-terms
-->
<!--nom prenom tel mail service site-->
<html>
<head>
<title>Soléa</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<meta name="viewport" content="width=device-width, initial-scale=1">

</head>

<body>
<form class="form-horizontal" action="sendmail.php" method="post"  id="contact_form" enctype="text/plain">
	<!-- Text input-->
		<div class="form-group">
			<label class="col-md-4 control-label">Nom</label>
			<div class="col-md-6  inputGroupContainer">
				<div class="input-group"> <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
					<input  name="nom" placeholder="Nom" class="form-control"  type="text">
				</div>
			</div>
		</div>

		<!-- Text input-->

		<div class="form-group">
			<label class="col-md-4 control-label" >Prénom</label>
			<div class="col-md-6  inputGroupContainer">
				<div class="input-group"> <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
					<input name="prenom" placeholder="Prénom" class="form-control"  type="text">
				</div>
			</div>
		</div>


		<!-- Text input-->
		<div class="form-group">
			<label class="col-md-4 control-label">E-Mail</label>
			<div class="col-md-6  inputGroupContainer">
				<div class="input-group"> <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
					<input name="email" placeholder="Adresse E-mail" class="form-control"  type="email">
				</div>
			</div>
		</div>
		<!-- Text input-->
		<div class="form-group">
			<label class="col-md-4 control-label">Sujet</label>
			<div class="col-md-6  inputGroupContainer">
				<input name="sujet" placeholder="Sujet" class="form-control"  type="text">
			</div>
		</div>
		<!-- Text input-->
		<div class="form-group">
			<label class="col-md-4 control-label">Message</label>
			<div class="col-md-6  inputGroupContainer">
				<textarea rows="5" name="message" placeholder="Message" class="form-control"></textarea>
			</div>
		</div>
		<!-- Button -->
		<div class="form-group">
			<label class="col-md-4 control-label"></label>
			<div class="col-md-4">
				<button name="envoyer" type="submit" class="btn btn-warning" >Envoyer <span class="glyphicon glyphicon-send"></span></button>
			</div>
		</div>	
</form>

<!-- Sending message-->
<?php 
if(isset($_POST["send"])){
echo "<h2 id='titre'>A message has been sent : </h2>";

$mail = 'thomas.brissonnet@master-stic.fr';
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
$message.= $passage_ligne.$_POST["gdtext"].$passage_ligne;
$message.= $passage_ligne."--".$boundary.$passage_ligne;

$message.= $passage_ligne."--".$boundary."--".$passage_ligne;
$message.= $passage_ligne."--".$boundary."--".$passage_ligne;


/*Sending mail*/
mail($mail,$_POST["subject"],$message,$header);

/*Display mail information*/
echo 'Your mail address : '. $_POST["email"]."<br/>";
echo 'Subject : ' . $_POST["sujet"]."<br/>";
echo 'Content : ' . $_POST["message"];
}
?>
		   
</body>
</html>
