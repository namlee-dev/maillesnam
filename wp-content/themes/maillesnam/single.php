<?php get_header() ?>

        <section class="single__post">
            <h1><?= the_title() ?></h1>
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
            <?= the_post_thumbnail('large') ?>
            <?= the_content() ?>
        </section>

        <?php comment_form() ?>

<?php get_footer() ?>