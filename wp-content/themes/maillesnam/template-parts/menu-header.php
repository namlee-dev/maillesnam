<nav class="menu__header">
        <div class="close-button not-visible"><i class="fas fa-times"></i></div>

        <a class="menu__header--link" href="<?= get_home_url() ?>"><i class="fas fa-home"></i></a>

        <a href="javascript:void(0)" class="menu__header--button"><i class="fas fa-bars"></i></a>

        <div class="menu__header--toggle">
                <div class="dropdown">
                        <a class="menu__header--link">Blog <i class="fas fa-chevron-down"></i></a>
                        <div class="dropdown-content">
                                <?php wp_nav_menu(['theme_location' => 'blog-menu']); ?>
                        </div>
                </div>

                <a class="menu__main--link" href="<?= get_home_url() ?>/tutoriels">Tutoriels</a>

                <a class="menu__header--link" href="<?= get_home_url() ?>/contact"><i class="fas fa-envelope"></i></a>

                <div class="menu__header--search">
                <?= get_search_form(); ?>
                </div>
        </div>

        <div class="not-visible">
                <?php get_template_part('template-parts/menu-main'); ?>
        </div>

</nav>