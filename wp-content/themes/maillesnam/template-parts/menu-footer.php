<nav class="menu__footer">
    <section class="menu__footer--infos">
        <h3>Mailles Nam</h3>
        <?php wp_nav_menu(['theme_location' => 'footer-info']); ?>
    </section>
    <section class="menu__footer--legal">
        <h3>Informations</h3>
        <?php wp_nav_menu(['theme_location' => 'footer-legal']); ?>
    </section>
    <section class="menu__footer--newsletter">
        <h3>Inscrivez-vous à la newsletter</h3>
        <div class="newsletter">
            <div class="newsletter__formulaire">
                <?php
                // $form_widget = new \MailPoet\Form\Widget();
                // echo $form_widget->widget(array('form' => 1, 'form_type' => 'php'));
                ?>
            </div>
            <div class="newsletter__rgpd">
                <p>En vous inscrivant, vous acceptez de recevoir les derniers nouveautés du site et vous acceptez la
                     <a href="<?= get_home_url() ?>/politique-de-confidentialite"> politique de confidentialité.</a>
                     Vous pouvez vous déinscrire à tout moment
                     <a href="<?= get_home_url() ?>/contact"> en me contactant.</a>
                </p>
            </div>
        </div>
    </section>
</nav>