<?php include "header.php"; ?>

<section>

	<!-- Le titre de la page-->
	<header>
		<h2>La Taverne</h2> 
	</header>

	<!-- Div dans laquelle seront tous les articles postés -->
	<div>

		<!-- Exemple d'article avec un titre, un texte (paragraphe) et une signature (nom de l'auteur) -->
		<article>

			<h4>Je suis un titre d'article</h4>
			<p>
				Je suis un texte d'article
			</p>
			<span>Je suis une signature</span>
			
			<!-- Commentaires des utilisateurs -->
			<section>
				<article>
					<span>
						Je suis un commentaire.
					</span>
					<span>
						Je suis le signataire du commentaire.
					</span>
				</article>
			</section>

		</article>

	</div>

</section>


<?php include "footer.php"; ?>