<nav class="menu__main">
        <div class="close-button"><i class="fas fa-times"></i></div>
        <ul>
            <li>
            <div class="dropdown">
                    <a class="menu__main--link">Blog <i class="fas fa-chevron-down"></i></a>
                    <div class="dropdown-content">
                            <?php wp_nav_menu(['theme_location' => 'blog-menu']); ?>
                    </div>
            </div>
            </li>

            <li><a class="menu__main--link" href="<?= get_home_url() ?>/tutoriels">Tutoriels</a></li>

            <li><a class="menu__main--link" href="<?= get_home_url() ?>/contact"><i class="fas fa-envelope"></i></a></li>

            <li>
            <div class="menu__main--search">
                <?= get_search_form(); ?>
            </div>
            </li>

        </ul>
</nav>