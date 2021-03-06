<?php
include_once("static/include/var.php");
$index = 2;
include_once("static/include/header.php")
?>
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
				<a class="navbar-brand" href="index">Menu</a>
			</div>
			<div class="collapse navbar-collapse" id="navbar-container">
				<ul class="nav navbar-nav">
					<li><a href="index"><span class="glyphicon glyphicon-home"></span> Accueil</a></li>
					<li><a href="mon_cv"><span class="glyphicon glyphicon-book"></span> Mon CV</a></li>
					<li  class="active"><a href="contact"><span class="glyphicon glyphicon-question-sign"></span> Me Contacter</a></li>
				</ul>
			</div>
			
		</div>
	</nav>
	<!-- Content-->
	<div class="container">
		<div class="alert alert-info" role="info">
			Actuellement alternant administrateur système et réseau
		</div> 
		<div class="jumbotron">
			<div class="row">
				<div class="col-md-8">
				<h1>Thomas Brissonnet</h1>
				<!--<p>En recherche d'une alternance pour mon master Télécommunications et Réseaux Informatiques.</p>-->
				</div>
				<div class="col-md-4">
					<div class="photo">
						<a href="#" class="img-thumbnail">
							<img src="static/img/photo.jpg" alt="photo_de_profil" width="200px"/>
						</a>
					</div>
				</div>
			</div>
		</div>
		<hr />
		<div class="panel panel-default">
			<div class="panel-heading">Me contacter</div>
				<div class="panel-body">
				    <form class="form-horizontal" action="confirm" method="post"  id="contact_form">
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


							<!-- E-mail input-->
							<div class="form-group">
								<label class="col-md-4 control-label">E-Mail</label>
								<div class="col-md-6  inputGroupContainer">
									<div class="input-group"> <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
										<input name="email" placeholder="Adresse E-mail" class="form-control"  type="email">
									</div>
								</div>
							</div>
							<!-- Subject input-->
							<div class="form-group">
								<label class="col-md-4 control-label">Sujet</label>
								<div class="col-md-6  inputGroupContainer">
									<input name="sujet" placeholder="Sujet" class="form-control"  type="text">
								</div>
							</div>
							<!-- Message input-->
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
	<!-- Footer-->
<?php
include_once("static/include/footer.php")
?>
	<!-- 
		Bootstrap javascript and JQuery should be loaded
		Placed at the end of the document for faster load times
	-->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
	<script src="static/js/bootstrap.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-validator/0.4.5/js/bootstrapvalidator.min.js"></script>
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
</body>

</html>
