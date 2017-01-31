<?php

	include "header.php";

	$titre = $_POST['titre'];
	$texte = $_POST['texte'];
	$signature = $_POST['signature'];
	
	if(!empty($titre) && !empty($texte) && !empty($signature)) {
		
		try
		{
			$req = $bdd->prepare('	INSERT INTO article(titre, texte, signature, date_article)
									VALUES (:titre, :texte, :signature, NOW())');
			$req->execute(array(
								'titre' => $titre,
								'texte' => $texte,
								'signature' => $signature
			));		
			echo "Votre article a été sauvegardé dans la base de données.";
		}
		catch(Exception $e)
		{
			// En cas d'erreur, on affiche un message et on arrête tout
			die('Erreur : '.$e->getMessage());
		}
		
	}else{
		
		echo "Données incorrectes";
		
	}

	include "footer.php";
	
?>