   <!DOCTYPE html>
   <html <?php language_attributes(); ?>>
   <head>
       <meta charset="<?php bloginfo( 'charset' ); ?>">
       <title><?php bloginfo('name'); ?></title>
       <meta charset="utf-8">
       <meta http-equiv="X-UA-Compatible" content="IE=edge">
       <meta name="description" content="Sublime project">
       <meta name="viewport" content="width=device-width, initial-scale=1">

       <?php wp_head(); ?>
   </head>
   <body <?php body_class() ?>>

   <header class="header">
       <div class="container">
           <div class="header__inner">
               <div class="header__left">
                   <?php if(is_front_page()) : ?>
                   <div class="header__img">
                       <img src="<?php echo wp_get_attachment_image_url(carbon_get_theme_option('site_logo')); ?>" alt="лого Gedore">
                   </div>
                   <?php else : ?>
                       <a href="<?php echo get_home_url(); ?>" class="header__img">
                           <img src="<?php echo wp_get_attachment_image_url(carbon_get_theme_option('site_logo')); ?>" alt="лого Gedore">
                       </a>
                   <?php endif; ?>
                   <?php wp_nav_menu([
                       'menu' => 'header-menu',
                       'menu_class' => 'header__list',
                   ]); ?>
               </div>
               <ul class="header__info">
                   <li>
                       <a href="tel:<?php echo $GLOBALS['gedore_contact']['phone_digits']; ?>"><?php echo $GLOBALS['gedore_contact']['phone']; ?></a>
                   </li>
                   <li>
                       <a href="tel:<?php echo $GLOBALS['gedore_contact']['phone_digits-2']; ?>"><?php echo $GLOBALS['gedore_contact']['phone-2']; ?></a>
                   </li>
                   <li>
                       <a href="mailto:<?php echo $GLOBALS['gedore_contact']['mail']; ?>"><?php echo $GLOBALS['gedore_contact']['mail']; ?></a>
                   </li>
               </ul>
               <div class="header__mobile">
                   <div class="header__hamburger js-hamburger">
                       <span></span>
                       <span></span>
                       <span></span>
                   </div>
               </div>
           </div>
       </div>
   </header>