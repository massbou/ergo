<?php
	ini_set('default_socket_timeout',300);
	include('includes/connec_db.php');
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>BOUNEFFA 11310939 - ABEBE 1311388 </title>
		<link rel="stylesheet" type="text/css" href="css/actualite.css">
		<link rel="shortcut icon" href="./pics/Favicon.png">
		<link rel="stylesheet" type="text/css" href="css/ionicons.css" />
		<link rel="stylesheet" type="text/css" href="css/font-awesome.css" />
		<link rel="stylesheet" type="text/css" href="./css/responsive.css" />
		<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,600,600italic,700,800' rel='stylesheet' type='text/css'>
	</head>
	<body>
		<?php include('./includes/header2.php'); ?>
		<a class="btn-formulaire" href="./formulaire.php">Ajouter actualité</a>
		<?php
			$requete="SELECT * FROM `actualite` order by date_heure desc ";
			$req=mysqli_query($conn,$requete);
			if($req)
			{
				if(mysqli_num_rows($req)>0)
				{
					while($ligne=mysqli_fetch_assoc($req))
					{
						echo '<div class="actualite_mini_container">
								<div class="actualite_image">
									<img src=pictures/'.$ligne["image_name"] .">".
								'</div>
									<div class="actualite_titre"><h1>'. htmlspecialchars($ligne["titre"]). '</h1></div>
									<div class="actualite_description"> '.htmlspecialchars($ligne["description"]). '</div>
								<div class="actualite_mini_header">
									<div class="actualite_nom-prenom">'. $ligne["nom"]." ".$ligne["prenom"].'</div>
									<div class="actualite_date" >'.$ligne["date_heure"].'</div>
								</div>
							 </div>';

					}
				}
			}
		?>

		<div id="monter" >
            <a href="#" id="totop" title="Remonter">
                <i class="ion-android-arrow-dropup-circle"></i>
            </a>
        </div>
		<script  language="JavaScript" type="text/javascript" src="//code.jquery.com/jquery-1.10.2.js"></script>
        <script  language="JavaScript" type="text/javascript" src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
        <script language="JavaScript" type="text/javascript" src="./js/fonction.js"></script>
		<script language="JavaScript" type="text/javascript" src="./js/formulaire.js"></script>
	</body>
</html>
