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
			echo "Votre article a �t� sauvegard� dans la base de donn�es.";
		}
		catch(Exception $e)
		{
			// En cas d'erreur, on affiche un message et on arr�te tout
			die('Erreur : '.$e->getMessage());
		}
		
	}else{
		
		echo "Donn�es incorrectes";
		
	}

	include "footer.php";
	
?>