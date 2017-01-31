<?php

	include "header.php";

	$id_article=$_GET['id'];
?>

<section>

	<!-- Le titre de la page -->
	<header>
		<h2>Ajouter un article</h2> 
	</header>

	<article>

		<!-- Le formulaire d'ajout d'article, il faut nécessairement un titre, un texte (paragraphe) et une signature (le nom de l'auteur) -->
		<form method="POST" action="save_commentaire.php">
			<input type="hidden" name="id_article" value="<?php echo $id_article; ?>" required="required">
			<input type="textarea" name="commentaire" placeholder="Votre commentaire" required="required"><br>
			<input type="text" name="signature" placeholder="Votre signature" required="required"><br>
			<input type="submit" name="Envoyer mon Commentaire !"> 

		</form>

	</article>

</section>

<?php include "footer.php"; ?>