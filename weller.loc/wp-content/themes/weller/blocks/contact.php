<div class="container">
    <h1><?= the_title(); ?></h1>
    <div class="row block_contacts">
        <div class="col-xs-12 col-sm-6">
            <?= carbon_get_theme_option('site_maps') ?>
        </div>
        <div class="col-xs-12 col-sm-6">
            <div class="col-xs-12">
                <div class="row contacts">
                    <div class="col-xs-12 contacts_address">
                        <p>Частное предприятие «МигБелПром»</p>
                        <a href="<?php echo $GLOBALS['weller_contact']['site_address_link']; ?>"><?php echo $GLOBALS['weller_contact']['site_address']; ?></a>

                        <p><?= carbon_get_theme_option('site_address_full') ?></p>
                        <div>
                            <a href="mailto:<?php echo $GLOBALS['weller_contact']['mail']; ?>"><?php echo $GLOBALS['weller_contact']['mail']; ?></a></br>
                            <a href="tel:<?php echo $GLOBALS['weller_contact']['phone_digits']; ?>"><?php echo $GLOBALS['weller_contact']['phone']; ?></a></br>
                            <a href="tel:<?php echo $GLOBALS['weller_contact']['phone_digits-2']; ?>"><?php echo $GLOBALS['weller_contact']['phone-2']; ?></a></br>
                            <a href="tel:<?php echo $GLOBALS['weller_contact']['phone_digits-3']; ?>"><?php echo $GLOBALS['weller_contact']['phone-3']; ?></a>
                        </div>
                        <div class="contact-image__box">
                            <img class="contact-image"
                                 src="<?php echo get_template_directory_uri(); ?>/assets/images/contacts-bg.png">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>