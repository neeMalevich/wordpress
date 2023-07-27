<footer class="footer">
    <div class="container">
        <div class="footer__inner">
            <?php if(is_front_page()) : ?>
                <div class="footer__img">
                    <img src="<?php echo wp_get_attachment_image_url(carbon_get_theme_option('site_logo')); ?>" alt="лого Gedore">
                </div>
            <?php else : ?>
                <a href="<?php echo get_home_url(); ?>" class="footer__img">
                    <img src="<?php echo wp_get_attachment_image_url(carbon_get_theme_option('site_logo')); ?>" alt="лого Gedore">
                </a>
            <?php endif; ?>
            <div class="footer__info">
                <div class="footer__item">
                    <div class="footer__title">Информация</div>
                    <?php wp_nav_menu([
                        'menu' => 'footer-menu',
                        'menu_class' => 'footer__menu',
                    ]); ?>
                </div>
                <div class="footer__item">
                    <div class="footer__title">Контакты</div>
                    <a href="<?php echo $GLOBALS['gedore_contact']['site_address_link']; ?>" class="footer__text">
                        <?php echo $GLOBALS['gedore_contact']['site_address']; ?>
                    </a>
                </div>
                <div class="footer__item">
                    <div class="footer__title">Свяжитесь с нами</div>
                    <ul class="footer__menu">
                        <li>
                            <a href="tel:<?php echo $GLOBALS['gedore_contact']['site_phone_footer_digits']; ?>"><?php echo $GLOBALS['gedore_contact']['site_phone_footer']; ?></a>
                        </li>
                        <li>
                            <a href="tel:<?php echo $GLOBALS['gedore_contact']['site_phone_footer_digits-2']; ?>"><?php echo $GLOBALS['gedore_contact']['site_phone_footer-2']; ?></a>
                        </li>
                        <li>
                            <a href="tel:<?php echo $GLOBALS['gedore_contact']['site_phone_footer_digits-3']; ?>"><?php echo $GLOBALS['gedore_contact']['site_phone_footer-3']; ?></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</footer>

<?php wp_footer(); ?>
</body>
</html>