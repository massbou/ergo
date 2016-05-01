<?php
	ini_set('mysql.connect_timeout', 300);
	ini_set('default_socket_timeout', 300);
	include('includes/connec_db.php');
	include('includes/fonction.php');
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<link rel="stylesheet" type="text/css" href="css/formulaire.css">
		<link rel="shortcut icon" href="./pics/Favicon.png">
		<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,600,600italic,700,800' rel='stylesheet' type='text/css'>
		<link rel="stylesheet" type="text/css" href="./css/responsive.css" />
		<title>BOUNEFFA 11310939 - ABEBE 1311388 </title>
	</head>
	<script type="text/javascript">
//auto expand textarea
function adjust_textarea(h) {
    h.style.height = "200px";
    h.style.height = (h.scrollHeight)+"px";
}
</script>
	<body>
		<script  language="JavaScript" type="text/javascript" src="//code.jquery.com/jquery-1.10.2.js"></script>
		<script  language="JavaScript" type="text/javascript" src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
		<script language="JavaScript" type="text/javascript" src="./js/fonction.js"></script>
		<?php include('./includes/header2.php'); ?>
		<?php
			if(isset($_POST['valider']))
			{
				if(!empty($_POST['nom'])&&!empty($_POST['prenom'])&&!empty($_POST['email'])&&!empty($_POST['titre'])&&!empty($_POST['description'])&&!empty($_POST['categorie']))
				{
					if(getimagesize($_FILES['fichier_image']['tmp_name'])==FALSE)
					{
						echo "choisir une image!";
					}
					else
					{

						$nom=mysqli_real_escape_string($conn,$_POST['nom']);
						$nom=securite_entree($nom);
						$prenom=mysqli_real_escape_string($conn,$_POST['prenom']);
						$prenom=securite_entree($prenom);
						$email=mysqli_real_escape_string($conn,$_POST['email']);
						$email=securite_entree($email);
						$categorie=mysqli_real_escape_string($conn,$_POST['categorie']);
						$categorie=securite_entree($categorie);
						$titre=mysqli_real_escape_string($conn,$_POST['titre']);
						$titre=trim($titre);
						$description=mysqli_real_escape_string($conn,$_POST['description']);
						$description = trim($description);
						//$description = stripslashes($description);
						//$description=$_POST['description'];
						$uploadOk=1;
						$target_dir = "pictures/";
						$target_file = $target_dir . basename($_FILES["fichier_image"]["name"]);
						$type_fichier = pathinfo($target_file,PATHINFO_EXTENSION);
						$fichier_image=addslashes($_FILES['fichier_image']['tmp_name']);
						$name=addslashes($_FILES['fichier_image']['name']);
						if (file_exists($target_file))
						{
						    echo "Veuillez renomer votre fichier ou fichier existe deja.";
						    $uploadOk = 0;
						}
						if ($_FILES["fichier_image"]["size"] > 5000000)
						{
						    echo "Fichier dépasse les 5Mo.";
						    $uploadOk = 0;
						}
						if($type_fichier != "jpg" && $type_fichier != "png" && $type_fichier != "jpeg" && $type_fichier != "gif" &&
							$type_fichier != "JPG" && $type_fichier != "PNG" && $type_fichier != "JPEG" && $type_fichier != "GIF")
						{
						    echo "Seul les fichiers JPG, JPEG, PNG et GIF sont acceptés.";
						    $uploadOk = 0;
						}
						$requete = "insert into actualite (nom, prenom, email, categorie, titre, description, image_name) values ('$nom','$prenom','$email','$categorie','$titre','$description','$name')";
						$resultat= mysqli_query($conn,$requete);
						if($uploadOk==1)
						{
							if($resultat)
							{
								move_uploaded_file($_FILES["fichier_image"]["tmp_name"], $target_file);
								echo 'Image uploader ... Vous allez être redirigez vers la page d\'actualité dans quelque instant ...!';
								sleep(10);
								header('location: actualites.php');
								exit();
							}
						}
						else
						{
							echo 'Erreur lors de l\'upload ';
							sleep(10);
							header('location: formulaire.php');
						}
					}
				}
				else
				{
					echo "Veuillez remplir tous les cases!";
				}
			}
		?>
		<div class="formulaire">
			<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" enctype="multipart/form-data">
				<input type="text" placeholder="NOM" name="nom" class="f_input"></input>
				<input type="text" placeholder="PRENOM" name="prenom"class="f_input"></input>
				<input type="email" placeholder="EMAIL" name="email" class="f_input"></input>
				<div class="f_input" class="f_domaine" id="f_domaine">Categorie:</div>
				<select class="f_input" id="f_domaine" name="categorie">
					<optgroup label="Enseignement" name="l1">
						<option name="Forum" value="Forum">Forum</option>
						<option name="Tutorat" value="Tutorat">Tutorat</option>
					</optgroup>
					<optgroup label="Arts et Musiques">
						<option name="Orchestre" value="Orchestre">Orchestre</option>
						<option name="Dance" value="Dance">Dance</option>
						<option name="Peinture" value="Peinture">Peinture</option>
					</optgroup>
					<optgroup label="Sport">
						<option name="Football" value="Football">Football</option>
						<option name="BasketBall" value="Basket Ball">Basket Ball</option>
						<option name="VolleyBall" value="VolleyBall">VolleyBall</option>
					</optgroup>
					<optgroup label="Loisir">
						<option name="Cuisine" value="Cuisine">Cuisine</option>
						<option name="Cinema" value="Cinema">Cinema</option>
						<option name="Theatre" value="Theatre">Theatre</option>
					</optgroup>
				</select>
				<input type="text" placeholder="TITRE" name="titre" class="f_input"></input>
				<textarea placeholder="DESCRIPTION" name="description" class="f_input" onkeyup="adjust_textarea(this)"></textarea>
				<div class="f_input" class="f_domaine" id="f_domaine">Image: </div>
				<input type="file" name="fichier_image" class="f_input" id="choose" style="display: inline-block"></input>
				<input type="submit" value="Valider" name="valider" class="f_input btn-image" rows="5" cols="40"></input>
			</form>
		</div>
	</body>
</html>
