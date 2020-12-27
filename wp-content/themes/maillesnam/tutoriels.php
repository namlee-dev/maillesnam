<?php
/*
 * Template Name: Tutoriel
 */
?>

<?php get_header() ?>

    <?php $tutorielPosts = getTutorielPosts();?>

    <section class="blog__article">
            <h1>Les tutoriels</h1>
            <div class="excerpt-list">
                <?php
                while ( $tutorielPosts->have_posts() ) : $tutorielPosts->the_post() ?>
                <article class="excerpt">
                    <a href="<?= the_permalink() ?>"><h2 class="excerpt__title"><?= the_title() ?></h2></a>
                    <div class="excerpt__content">
                        <a href="<?= the_permalink() ?>"><?= the_post_thumbnail('large') ?></a>
                        <p class="excerpt__text"><?= excerpt(); ?></p>
                        <a href="<?= the_permalink() ?>" class="excerpt__content--button button">Lire la suite <i class="fas fa-arrow-right"></i></a>
                    </div>
                </article>
                <?php endwhile; ?>
            </div>
        </section>

        <section class="posts-navigation">
                <?php
                    $nextPostsLink = get_next_posts_link('Newer posts', $tutorielPosts->max_num_pages);
                    $previousPostsLink = get_previous_posts_link('Older posts', $tutorielPosts->max_num_pages);
                ?>
                <?php if ($previousPostsLink) : ?>
                    <a href="<?= get_previous_posts_page_link(); ?>" class="button button--dark button--reverse" >Articles plus récents</a>
                <?php endif; ?>

                <?php if ($nextPostsLink) : ?>
                    <a href="<?= get_next_posts_page_link(); ?>" class="button button--dark">Articles plus anciens</a>
                <?php endif; ?>
        </section>

<?php get_footer() ?>