<?php get_header() ?>

        <section class="single__post">
            <h1><?= the_title() ?></h1>
            <?= the_post_thumbnail('large') ?>
            <?= the_content() ?>
        </section>

<?php get_footer() ?>