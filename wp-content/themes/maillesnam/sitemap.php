<?php
/*
 * Template Name: Sitemap
 */
?>

<?php get_header() ?>
 
    <section>
        <h1>Plan du site</h1>
        <h1>Les pages</h1>
        <ul>
            <?php
                $pageList = get_pages();
                foreach ($pageList as $page) :
            ?>
                <li> <a href="<?= $page->guid ?>"><?= $page->post_title ?></a> </li>
            <?php endforeach; ?>
        </ul>

        <h1>Les tutoriels</h1>
        <ul>
            <?php
                $tutorielsForSitemap = getAllTutorielPosts();
                while ( $tutorielsForSitemap->have_posts() ) : $tutorielsForSitemap->the_post();
            ?>
                <li> <a href="<?= the_permalink() ?>"><?= the_title() ?></a> </li>
                <?php endwhile; ?>
        </ul>

        <h1>Les articles par catégories</h1>
            <ul>
                <?php $postsByCategory = getPostsByCategory(); ?>
            </ul>
    </section>

<?php get_footer() ?>