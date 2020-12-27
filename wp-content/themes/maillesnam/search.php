<?php get_header() ?>

	<?php if ( have_posts() ) : ?>

		<section class="search-results">
			<h1>Les résultats de votre recherche :</h1>
			<?php while ( have_posts() ) : the_post(); ?>
			<ul>
				<li class="search-results__items">
					<a href="<?= the_permalink() ?>"><?= the_title() ?></a>
				</li>
			</ul>
			<?php endwhile; ?>
		</section>

	<?php else : ?>

		<section class="search-not-found">
			<h1>Désolé, votre recherche n'a donné aucun résultat</h1>
			<div class="search-again" >
			<p>Vous pouvez à nouveau essayer avec d'autres critères</p>
			<?= get_search_form(); ?>
			</div>
		</section>

	<?php endif; ?>

<?php get_footer() ?>