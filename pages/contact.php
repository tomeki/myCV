<?php
$mail = 'thomas.brissonnet@master-stic.fr'; // Déclaration de l'adresse de destination.
if (!preg_match("#^[a-z0-9._-]+@(hotmail|live|msn).[a-z]{2,4}$#", $mail)) // On filtre les serveurs qui rencontrent des bogues.
{
	$passage_ligne = "\r\n";
}
else
{
	$passage_ligne = "\n";
}
//=====Déclaration des messages au format texte et au format HTML.
$message_txt = "Salut à tous, voici un e-mail envoyé par un script PHP.";
$message_html = "<html><head></head><body><b>Salut à tous</b>, voici un e-mail envoyé par un <i>script PHP</i>.</body></html>";
//==========
 
//=====Création de la boundary
$boundary = "-----=".md5(rand());
//==========
 
//=====Définition du sujet.
$sujet = "Hey mon ami !";
//=========
 
//=====Création du header de l'e-mail.
$header = "From: \"Thomas\"<tom.brissonnet@gmail.com>".$passage_ligne;
$header.= "Reply-to: \"WeaponsB\"<tom.brissonnet@gmail.com>".$passage_ligne;
$header.= "MIME-Version: 1.0".$passage_ligne;
$header.= "Content-Type: multipart/alternative;".$passage_ligne." boundary=\"$boundary\"".$passage_ligne;
//==========
 
//=====Création du message.
$message = $passage_ligne."--".$boundary.$passage_ligne;
//=====Ajout du message au format texte.
$message.= "Content-Type: text/plain; charset=\"ISO-8859-1\"".$passage_ligne;
$message.= "Content-Transfer-Encoding: 8bit".$passage_ligne;
$message.= $passage_ligne.$message_txt.$passage_ligne;
//==========
$message.= $passage_ligne."--".$boundary.$passage_ligne;
//=====Ajout du message au format HTML
$message.= "Content-Type: text/html; charset=\"ISO-8859-1\"".$passage_ligne;
$message.= "Content-Transfer-Encoding: 8bit".$passage_ligne;
$message.= $passage_ligne.$message_html.$passage_ligne;
//==========
$message.= $passage_ligne."--".$boundary."--".$passage_ligne;
$message.= $passage_ligne."--".$boundary."--".$passage_ligne;
//==========
 
//=====Envoi de l'e-mail.

// the message
$msg = "First line of text\nSecond line of text";

// use wordwrap() if lines are longer than 70 characters
$msg = wordwrap($msg,70);

// send email
mail("thomas.brissonnet@master-stic.fr","My subject",$msg);
echo "mail sended";
//==========
?>


<?php 

if(isset($_POST['envoyer'])){
	//=====Création du header de l'e-mail
	
	/*$to = "thomas.brissonnet@master-stic.fr"; // this is your Email address
    $from = $_POST['email']; // this is the sender's Email address
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $subject = $_POST['sujet'];
    $message = $nom . " " . $prenom . " wrote the following:" . "\n\n" . $_POST['message'];
    $headers = "From:" . $from;
    $value = mail($to,$subject,$message,$headers);
	echo $value;
    header('Location: confirm.html'); */
    }
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
	<link href="../static/css/bootstrap.min.css" rel="stylesheet" />
	<link href="../static/css/contact.css" rel="stylesheet" />
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
					<li  class="active"><a href="contact.php"><span class="glyphicon glyphicon-question-sign"></span> Me Contacter</a></li>
				</ul>
			</div>
			
		</div>
	</nav>
	<!-- Content-->
	<div class="container">
		<div class="alert alert-danger" role="alert">
			EN RECHERCHE D'UNE ALTERNANCE | DEV WEB | SEPTEMBRE 2018 | LYON / CHAMBERY
		</div> 
		<hr />
		<div class="panel panel-default">
			<div class="panel-heading">Me contacter</div>
				<div class="panel-body">
				    <form class="form-horizontal" action="" method="post"  id="contact_form" enctype="text/plain">
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
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-validator/0.4.5/js/bootstrapvalidator.min.js"></script>
</body>
<script type="text/javascript">
   $(document).ready(function() {
    $('#contact_form').bootstrapValidator({
        // To use feedback icons, ensure that you use Bootstrap v3.1.0 or later
        feedbackIcons: {
            valid: 'glyphicon glyphicon-ok',
            invalid: 'glyphicon glyphicon-remove',
            validating: 'glyphicon glyphicon-refresh'
        },
        fields: {
            nom: {
                validators: {
                        notEmpty: {
                        message: 'Veuillez entrer votre nom'
                    }
                }
            },
             prenom: {
                validators: {
                    notEmpty: {
                        message: 'Veuillez entrer votre prénom'
                    }
                }
            },
  
        sujet: {
                validators: {
                    notEmpty: {
                        message: 'Veuillez entrer le sujet de votre message'
                    }
                }
            },
			
		message: {
                validators: {
                    notEmpty: {
                        message: 'Veuillez entrer un message'
                    }
                    }
                 },	
	 email: {
                validators: {
                    notEmpty: {
                        message: 'Veuillez entrer une adresse mail valide'
                    },
                    emailAddress: {
                        message: 'Veuillez entrer une adresse mail valide'
                    }
                }
            },			
            
            }
        })
		
 	
        .on('success.form.bv', function(e) {
            $('#success_message').slideDown({ opacity: "show" }, "slow") // Do something ...
                $('#contact_form').data('bootstrapValidator').resetForm();

            // Prevent form submission
            e.preventDefault();

            // Get the form instance
            var $form = $(e.target);

            // Get the BootstrapValidator instance
            var bv = $form.data('bootstrapValidator');

            // Use Ajax to submit form data
            $.post($form.attr('action'), $form.serialize(), function(result) {
                console.log(result);
            }, 'json');
        });

});

</script>
</script>
</html>
