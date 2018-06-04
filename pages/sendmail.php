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
<link href="../layout/styles/layout.css" rel="stylesheet" type="text/css" media="all">
<link href="../layout/css/bootstrap.min.css" rel="stylesheet" type="text/css" media="all">
<link rel="stylesheet" href="../layout/css/bootstrap.min.css">
<script src="../layout/js/jquery.min.js"></script>
<script src="../layout/js/popper.js"></script>
<script src="../layout/js/bootstrap.min.js"></script>

<meta name="viewport" content="width=device-width, initial-scale=1">
<?php require '../var.php' ?>

</head>

<body id="top">
<?php require 'header.php'; ?>


<!-- Sending message-->
<div class="wrapper row3">
  <main class="hoc container clear">
    <div class="content">
		<div id="comments">
			<div id='message'>
			<h2 id="titre">A message has been sent : </h2>
		        <?php 
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
				echo 'Subject : ' . $_POST["subject"]."<br/>";
				echo 'Content : ' . $_POST["gdtext"];
		        ?>
		    </div>
	    </div>
    </div>
    <div class="clear"></div>
  </main>
</div>

<?php require 'footer.php'; ?>
</body>
</html>
