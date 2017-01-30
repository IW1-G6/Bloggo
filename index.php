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

			<h4><?php echo $article['titre'] ; ?></h4>
			<p>
				<?php echo $article['texte'] ; ?>
			</p>
			<span><?php echo "Ecrit par ".$article['signature']." le ".$article['date_article']; ?></span>
			
			<!-- Commentaires des utilisateurs -->
			<section>
			<p>Commentaires</p>
			<a href="#">Ajouter un commentaire</a>
			<?php
				$commentaires = $bdd->query('SELECT * FROM commentaire WHERE id_article = '.$article['id'].' ORDER BY date_commentaire DESC');
				
				while ($commentaire = $commentaires->fetch())
				{
			?>
				<article>
					<span>
						<?php echo $commentaire['commentaire'] ; ?><br>
					</span>
					<span>
						<?php echo "De ".$commentaire['signature']." Le ".$commentaire['date_commentaire'] ; ?>
					</span>
				</article>
				<?php
					}
					$commentaires->closeCursor();
				?>
			</section>

		</article>
	<?php
		}
		$articles->closeCursor();
	?>

	</div>

</section>


<?php include "footer.php"; ?>