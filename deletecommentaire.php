<?php

	include "header.php";

	$id = $_GET['id'];
	$id_article = $_GET['id_article'];
	
	if(!empty($id) ) {
		
		try
		{
			$req = $bdd->prepare('	DELETE FROM `commentaire`
									WHERE id=:id');
			$req->execute(array(
								'id' => $id
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