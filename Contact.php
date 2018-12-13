<?php
include("fonctions.php");
?>
<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <title>Contact</title>
    <link rel="stylesheet" type="text/css" href="Prune.css" media="all" />
</head>


	<body>

        <!--En-t�te du site-->
		<header>
			<div id="titre"> <img src="prune_logo.png"/>  Prune </div>
		</header>
		
        <!--Menu du site-->
		<nav>
			<table width=100% height=100%>
				<tr>
					<td class="menu"><a href="Accueil.html" class="menu">Accueil</a></td>
					<td class="menu"><a href="Services.html" class="menu">Nos services</a></td>
					<td class="menu"><a href="Equipe.html" class="menu">L'équipe</a></td>
					<td class="menu"><a href="Contact.html" class="menu">Contact</a></td>
				</tr>
			</table>
		</nav>

        <!--Contenu de la page-->
		<article>

			<h1> Nous contacter </h1>
			<p> Pour nous envoyer un message veuillez remplir le formulaire ci-dessous.</p>

            <!--Formulaire de contact-->
			<form name="test" method="post" action="contact.php">
				<label> Nom: </label>
				<input id="contact" name="Nom" type="text" placeholder="Dupont" required autofocus/>
				<br/><br/>
				<label> Pr�nom: </label>
				<input id="contact" name="Prenom" type="text" placeholder="Pierre" required/>
				<br/><br/>
				<label> Mail: </label>
				<input id="contact" name="Mail" type="email" placeholder="email@exemple.fr" required/>
				<br/><br/>
				<label> Message: </label>
				<input id="contactm" name="Message" type="text" placeholder="Votre message ici" required/>
				<br/><br/>
				<input type="submit" name="valider" value="Ok"/>
			</form>

		</article>

       
		<?php
			if (isset ($_POST['valider'])){
				
				//On récupère les valeurs entrées par l'utilisateur :
				$Nom=$_POST['Nom'];
				$Prenom=$_POST['Prenom'];
				$Mail=$_POST['Mail'];
				$Message=$_POST['Message'];
				$Date = date("y-m-d");
				//On se connecte
				connectMaBase();
			
				//On prépare la commande sql d'insertion
				$sql = 'INSERT INTO contact (Nom,Prenom,Mail,Message,Date) VALUES("'.$Nom.'","'.$Prenom.'","'.$Mail.'","'.$Message.'","'.$Date.'")'; 
	 
				/*on lance la commande (mysql_query) et au cas où, 
				on rédige un petit message d'erreur si la requête ne passe pas (or die) 
				(Message qui intègrera les causes d'erreur sql)*/
				mysql_query ($sql) or die ('Erreur SQL !'.$sql.'<br />'.mysql_error()); 
	 
				// on ferme la connexion
				mysql_close();
			}
			
			?>
	</body>
	</html>



