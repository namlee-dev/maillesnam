<?php get_header() ?>

    <section class="article">
        <h2 class="article__title">Derniers articles</h2>
        <div class="article__container">
            <?php
                $postsForFrontPage = getPosts();
                while(have_posts()) : the_post(); ?>
                            <figure class="article__gallery">
                                <a href="<?= the_permalink() ?>"><?= the_post_thumbnail('front-page-thumb') ?></a>
                                <figcaption><a href="<?= the_permalink() ?>"><?= the_title() ?></a></figcaption>
                            </figure>
            <?php endwhile; ?>
        </div>
        <h2><a href="<?= get_home_url() ?>/blog">Tous les articles <i class="far fa-arrow-alt-circle-right"></i></a></h2>
    </section>

    <section class="tutoriel">
        <div class="tutoriel__card">
            <div class="tutoriel__card--text">
                <h2>Tutoriels</h2>
                <p>Envie d'apprendre de nouvelles techniques ?</p>
                <p>Envie d'appronfondir vos connaissances ?</p>
                <p>Retrouvez mes articles et mes tutoriels photos et vidéos</p>
                <h2 class="tutoriel__card--link"><a href="<?= get_home_url() ?>/tutoriels">Tous les tutoriels <i class="far fa-arrow-alt-circle-right"></i></a></h2>
            </div>
        </div>
    </section>

<?php get_footer() ?>