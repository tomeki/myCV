<?php
include_once("static/include/var.php");
$index = 1;
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
				<a class="navbar-brand" href="#">Menu</a>
			</div>
			<div class="collapse navbar-collapse" id="navbar-container">
				<ul class="nav navbar-nav">
					<li><a href="index.php"><span class="glyphicon glyphicon-home"></span> Accueil</a></li>
					<li class="active"><a href="mon_cv.php"><span class="glyphicon glyphicon-book"></span> Mon CV</a></li>
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
		<div class="download_button">
			<a class="download_button" href="static/cv/BRISSONNET_Thomas_CV.pdf" download>
			<button type="button" class="btn btn-primary"><span class="glyphicon glyphicon-download-alt"></span> Télécharger le CV en .PDF</button>
		</a>
		</div>
		
		<div class="jumbotron">
			<div class="row">
				<div class="col-md-8">
				<h1>Brissonnet Thomas</h1>
				<p>En recherche d'une alternance en développement web pour mon master.</p>
				<p class="jumbo_style">Née le 11 janvier 1996</p>
				<p class="jumbo_style">Titulaire du permis B - véhiculé</p>
				<p class="jumbo_style"> <span class="glyphicon glyphicon-envelope"></span> thomas.brissonnet@master-stic.fr</p>
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
		<hr class="hr_style">
		<div class="formation">
			<div class="row">
				<div class="col-xs-12">
					<p class="h3 titre">FORMATIONS</p>
				</div>
			</div>
			<br />
			<div class="row">
				<div class="col-xs-6 dates">
					<p>Sept. 2018</p>
				</div>
				<div class="col-xs-6 infos">
					<p>Préparation d'un Master Télécommunications et Réseaux Informatiques - Université de Savoie Mont-Blanc</p>
				</div>
			</div>
			<br />
			<div class="row">
				<div class="col-xs-6 dates">
					<p>Sept. 2017 - Juin 2018</p>
				</div>
				<div class="col-xs-6 infos">
					<p>L3 Télécommunications et Réseaux Informatiques - Université de Savoie Mont-Blanc</p>
				</div>
			</div>
			<div class="row">
				<div class="col-xs-6 dates">
					<p>Sept. 2015 - Juin 2017</p>
				</div>
				<div class="col-xs-6 infos">
					<p>DUT Réseaux & Télécommunications - Université de Poitiers</p>
				</div>
			</div>
			<div class="row">
				<div class="col-xs-6 dates">
					<p>Sept. 2014 - Juin 2015</p>
				</div>
				<div class="col-xs-6 infos">
					<p>PACES - Université de Poitiers</p>
				</div>
			</div>
			<div class="row">
				<div class="col-xs-6 dates">
					<p>Sept. 2011 - Juin 2014</p>
				</div>
				<div class="col-xs-6 infos">
					<p>Baccalauréat Scientifique spécialité SVT - Lycée Camille Guérin - Poitiers</p>
				</div>
			</div>
		</div>
		<hr class="hr_style">
		<div class="experiences_pros">
			<div class="row">
				<div class="col-xs-12">
					<p class="h3 titre">EXPERIENCES PROFESSIONNELLES</p>
				</div>
			</div>
		<br />
		</div>
		<div class="row">
			<div class="col-xs-6 dates">
				<p>Depuis 2014</p>
			</div>
			<div class="col-xs-6 infos">
				<p class="titre_exp_pro">Mairie de Montmorillon (86) - Travail saisonnier (1 mois)</p>
				<p>Travail saisonnier au sein du service de voirie. Mise en place des sécurités sur les lieux de fête, 
				entretien des routes et des espaces verts.</p>
			</div>
		</div>
		<div class="row">
			<div class="col-xs-6 dates">
				<p>Mars 2017 - Mai 2017</p>
			</div>
			<div class="col-xs-6 infos">
				<p class="titre_exp_pro">SAS Linexos – Jaunay-Clan (86) – Développeur (stage de 3 mois)</p>
				<p>Stage de fin de DUT au sein de Linexos en tant que développeur. Développement d'une application d'affichage dynamique. Utilisation de Python, HTML et CSS, frameworks Bootstrap et Django.</p>
			</div>
		</div>
		<hr class="hr_style">
		<div class="competences">
			<div class="row">
				<div class="col-xs-12">
				<p class="h3 titre">COMPETENCES</p>
				</div>
			</div>
			<br />
		</div>
		<div class="row">
			<div class="col-xs-6 competences_title">
				<p>LANGUES</p>
			</div>
			<div class="col-xs-6 infos">
				<p class="competences_content">Français : Maîtrise de la langue orale et écrite.</p>
				<p class="competences_content">Anglais : Bonne compréhension et expression de la langue orale et écrite.</p>
			</div>
		</div>
		<hr class="hr_style2">
		<div class="row">
			<div class="col-xs-6 competences_title">
				<p>RESEAUX</p>
			</div>
			<div class="col-xs-6 infos">
				<p class="competences_content">Mise en place d'un réseau : configuration de switchs et routeurs cisco,</p> 
				<p>Maintien et Sécurisation d'un réseau,</p> 
				<p>Administration Système Linux et Windows : Active Directory,  DNS, DHCP, Web, SGBD.</p>
			</div>
		</div>
		<hr class="hr_style2">
		<div class="row">
			<div class="col-xs-6 competences_title">
				<p>TELECOMMUNICATIONS</p>
			</div>
			<div class="col-xs-6 infos">
				<p class="competences_content">Connaissances en traitement de signaux,</p> 
				<p>Configuration d'un PABX,</p> 
				<p>Mise en place d'un réseau SIP.</p>
			</div>
		</div>
		<hr class="hr_style2">
		<div class="row">
			<div class="col-xs-6 competences_title">
				<p>INFORMATIQUE</p>
			</div>
			<div class="col-xs-6 infos">
				<table class="table">
				  <thead>
					<tr>
					  <td>Connaissances en:</td>
					</tr>
				  </thead>
				  <tbody>
					<tr>
					  <th>HTML</th>
					</tr>
					<tr>
					  <th>CSS</th>
					</tr>
					<tr>
					  <th>Javascript</th>
					</tr>
					<tr>
					  <th>PHP</th>
					</tr>
					<tr>
					  <th>SQL</th>
					</tr>
					<tr>
					  <th>Java</th>
					</tr>
					<tr>
					  <th>Python</th>
					</tr>
				  </tbody>
				</table>
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
</body>
</html>
