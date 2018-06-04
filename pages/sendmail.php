<?php 
if (isset($_POST["send"])){

	$name = $_POST['name'];
	$visitor_email = $_POST['email'];
	$message = $_POST['message'];
	$email_from = 'tom.brissonnet@gmail.com';

	$email_subject = "New Form submission";

	$email_body = "You have received a new message from the user $name.\n".
					"Here is the message:\n $message";
	$to = "thomas.brissonnet@master-stic.fr";

	$headers = "From: $email_from \r\n";

	$headers .= "Reply-To: $visitor_email \r\n";

	mail($to,$email_subject,$email_body,$headers);
	
}
?>
<form method="post" name="myemailform" action="sendmail.php">

Enter Name:	<input type="text" name="name">

Enter Email Address:	<input type="text" name="email">

Enter Message:	<textarea name="message"></textarea>

<input name="send" type="submit" value="Send Form">
</form>
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

	<title>sendmail_test</title>
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
	
	<?php 
if(isset($_POST['envoyer'])){
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
$message.= $passage_ligne.$_POST["message"].$passage_ligne;
$message.= $passage_ligne."--".$boundary.$passage_ligne;

$message.= $passage_ligne."--".$boundary."--".$passage_ligne;
$message.= $passage_ligne."--".$boundary."--".$passage_ligne;


/*Sending mail*/
$test = mail($mail,$_POST["sujet"],$message,$header);
echo $test."<br/>";

/*Display mail information*/
echo 'Your mail address : '. $_POST["email"]."<br/>";
echo 'Subject : ' . $_POST["sujet"]."<br/>";
echo 'Content : ' . $_POST["message"];
}
?>
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
