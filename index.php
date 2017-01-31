<?php include "header.php"; ?>

<section>

	<!-- Le titre de la page-->
	<header>
		<h2>La Taverne</h2> 
	</header>

	<!-- Div dans laquelle seront tous les articles postés -->
	<div>
	<?php
		$articles = $bdd->query('SELECT * FROM article ORDER BY date_article DESC');

		while ($article = $articles->fetch())
		{
	?>
		<!-- Article avec un titre, un texte (paragraphe) et une signature (nom de l'auteur) -->
		<article>

			<?php
				echo "<h4><a href=\"article.php?id=".$article['id']."\" >".$article['titre']."</a></h4>";
			?>
			<p>
				<?php echo $article['texte'] ; ?>
			</p>
			<span><?php echo "Ecrit par ".$article['signature']." le ".$article['date_article']; ?></span>

		</article>
	<?php
		}
		$articles->closeCursor();
	?>

	</div>

</section>


<?php include "footer.php"; ?>