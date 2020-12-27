<?php get_header() ?>

    <section class="blog__article">
        <h1>Le blog</h1>
        <div class="excerpt-list">
            <?php while ( have_posts() ) : the_post() ?>
            <article class="excerpt">
                <a href="<?= the_permalink() ?>"><h2 class="excerpt__title"><?= the_title() ?></h2></a>
                <p>
                    <?= get_the_date('j F Y') ?>

                    <?php
                    $categoryList = get_the_category();
                    if (!empty ($categoryList)) :
                        foreach($categoryList as $category) : ?>
                            / <a href=" <?= get_home_url()."/category/".$category->slug ?>"><?= $category->name ?></a>
                        <?php endforeach; ?>
                    <?php endif; ?>

                    <?php
                    $tagList = get_the_tags();
                    if (!empty ($tagList)) :
                        foreach($tagList as $tag) : ?>
                            / <a href=" <?= get_home_url()."/tag/".$tag->slug ?>"><?= $tag->name ?></a>
                        <?php endforeach; ?>
                    <?php endif; ?>
                </p>
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
            <?php if (get_previous_posts_link()) : ?>
                <a href="<?= get_previous_posts_page_link(); ?>" class="button button--dark button--reverse" >Articles plus récents</a>
            <?php endif; ?>

            <?php if (get_next_posts_link()) : ?>
                <a href="<?= get_next_posts_page_link(); ?>" class="button button--dark">Articles plus anciens</a>
            <?php endif; ?>
    </section>

<?php get_footer() ?>