<?php

	include "header.php";

	$id_article = $_POST['id_article'];
	$commentaire = $_POST['commentaire'];
	$signature = $_POST['signature'];
	
	if(!empty($id_article) && !empty($commentaire) && !empty($signature)) {
		
		try
		{
			$req = $bdd->prepare('	INSERT INTO commentaire(commentaire, signature, id_article, date_commentaire)
									VALUES (:commentaire, :signature, :id_article, NOW())');
			$req->execute(array(
								'id_article' => $id_article,
								'commentaire' => $commentaire,
								'signature' => $signature
			));		
			header("Location: article.php?id=".$id_article);
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