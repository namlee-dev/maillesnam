<?php get_header() ?>

    <section class="error">
        <h1>404 : Oups, la page semble ne pas exister</h1>
        <p>Vous pouvez :</p>
        <ul>
            <li><a href="<?= get_home_url() ?>"><i class="fas fa-home"> </i> Retourner sur la page d'accueil</a></li>
            <li><a href="<?= get_home_url() ?>/contact"><i class="far fa-envelope"></i> Me contacter pour m'en informer</a></li>
            <div class="search-again">
                <li><i class="fas fa-search"></i> Effectuer une nouvelle recherche</li>
                <?= get_search_form(); ?>
            </div>
        </ul>
    </section>

<?php get_footer() ?>