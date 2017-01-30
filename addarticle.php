<?php include "header.php"; ?>

<section>

	<!-- Le titre de la page -->
	<header>
		<h2>Ajouter un article</h2> 
	</header>

	<article>

		<!-- Le formulaire d'ajout d'article, il faut nécessairement un titre, un texte (paragraphe) et une signature (le nom de l'auteur) -->
		<form method="POST" action="save_article.php">

			<input type="text" name="titre" placeholder="Votre titre" required="required"><br>
			<input type="textarea" name="texte" placeholder="Votre texte" required="required"><br>
			<input type="text" name="signature" placeholder="Votre signature" required="required"><br>
			<input type="submit" name="Envoyer mon Article !"> 

		</form>

	</article>

</section>

<?php include "footer.php"; ?>
