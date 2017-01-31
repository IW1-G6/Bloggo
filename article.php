<?php

	include "header.php"; 

	$id_article = $_GET['id'];
	
?>

<div>
	<?php
		$articles = $bdd->query('SELECT * FROM article WHERE id='.$id_article.' ORDER BY date_article DESC');
		
		while ($article = $articles->fetch()){
	?>
		<article>
			
			<?php
				echo "<h4><a href=\"article.php?id=".$article['id']."\" >".$article['titre']."</a></h4>";
			?>
			<p>
				<?php echo $article['texte'] ; ?>
			</p>
			<span><?php echo "Ecrit par ".$article['signature']." le ".$article['date_article']; ?></span>
			
			<section>
			<p>Commentaires</p>
			<a href="addcommentaire.php?id=<?php echo $id_article; ?>">Ajouter un commentaire</a>
			<?php
				$commentaires = $bdd->query('SELECT * FROM commentaire WHERE id_article = '.$id_article.' ORDER BY date_commentaire DESC');
				
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
					<br>
					<span>
					<?php
						echo "<a href=\"updatecommentaire.php?id=".$commentaire['id']."&id_article=".$id_article."\">Modifier</a>/<a href=\"deletecommentaire.php?id=".$commentaire['id']."&id_article=".$id_article."\">Supprimer</a>";
					?>
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

<?php include "footer.php"; ?>