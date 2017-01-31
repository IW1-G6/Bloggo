<?php

	include "header.php"; 

	$id_article = $_GET['id'];
	
	echo $id_article;

?>

<div>
	<?php
		$articles = $bdd->query('SELECT * FROM article WHERE id='.$id_article.'ORDER BY date_article DESC');

	?>
		<article>

			<h4><a href="article.php?id='.$article['id'] ><?php echo $articles['titre'] ; ?></a></h4>
			<p>
				<?php echo $articles['texte'] ; ?>
			</p>
			<span><?php echo "Ecrit par ".$articles['signature']." le ".$articles['date_article']; ?></span>
			
			<section>
			<p>Commentaires</p>
			<a href="#">Ajouter un commentaire</a>
			<?php
				$commentaires = $bdd->query('SELECT * FROM commentaire WHERE id_article = '.$articles['id'].' ORDER BY date_commentaire DESC');
				
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
		
		$articles->closeCursor();
	?>

	</div>

<?php include "footer.php"; ?>