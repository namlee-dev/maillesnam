<?php

/**
 * Get posts for front-page
 */
function getPosts() {

	$query = new WP_Query([
		'post_type'=> 'post',
		'posts_per_page' => 6,
	]);

	$posts = query_posts($query);

	return $posts;
}

/** 
 * Get posts by category with hierarchy
 */
// DOC https://wordpress.org/support/topic/list-all-posts-by-category-subcategory-sub-subcategory/
/**
 * Change post_type, title level, remove class on <ul>, add link to posts, change order by date DESC
 *
 * @return void
 */
function getPostsByCategory() {
	$get_parent_cats = array(
		'taxonomy' => 'category',
		'hierarchical' => true,
		'orderby' => 'term_order',
		'parent' => '0' //get top level categories only
	);

	$all_categories = get_categories( $get_parent_cats );//get parent categories

	foreach( $all_categories as $single_category ){
		//for each category, get the ID
		$catID = $single_category->cat_ID;

		echo '<li><h2>' . $single_category->name . '</h2>'; //category name & link
		echo '<ul>';

		$query = new WP_Query( array(
			'post_type' => 'post',
			'orderby' => 'date',
			'order' => 'DESC',
			'cat'=> $catID,
			'showposts' => -1,
			'category__in' => array($single_category->term_id),
			'caller_get_posts'=>1
		) );
		// Posts for the parent category (should be none)
		while( $query->have_posts() ):$query->the_post();
		?>
			<li><a href="<?= the_permalink() ?>"><?php the_title(); ?></a></li>
		<?php
		endwhile;
		wp_reset_postdata();
		echo '</ul>';

		$get_children_cats = array(
			'child_of' => $catID //get children of this parent using the catID variable from earlier
		);

		$child_cats = get_categories( $get_children_cats );//get children of parent category
		echo '<ul>';
			foreach( $child_cats as $child_cat ){
				//for each child category, get the ID
				$childID = $child_cat->cat_ID;

				//for each child category, give us the name
				if ( ($child_cat->category_parent > 3) ) :
					echo '<h4>' . $child_cat->name . '</h4>';
				else :
					echo '<h3>' . $child_cat->name . '</h3>';
				endif;
				// var_dump($child_cat);
				echo '<ul>';

				$query = new WP_Query( array(
					 'post_type' => 'post',
					 'orderby' => 'date',
					 'order' => 'DESC',
					 'cat'=> $childID,
					 'showposts' => -1,
					 'category__in' => array($child_cat->term_id),
					 'caller_get_posts'=>1
				 ) );
				// Posts for the child category
				while( $query->have_posts() ):$query->the_post();
				?>
				<li><a href="<?= the_permalink() ?>"><?php the_title(); ?></a></li>
				<?php
				endwhile;
				wp_reset_postdata();

				echo '</ul>';
			}
		echo '</ul></li>';
	} //end of categories logic
}