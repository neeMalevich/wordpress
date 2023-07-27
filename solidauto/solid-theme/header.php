<!DOCTYPE HTML>
<html lang="ru">

<head>
    <!--=============== basic  ===============-->
    <meta charset="UTF-8">
    <title><?php wp_title();?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <!--<meta name="robots" content="index, follow" />-->
    <!--<meta name="keywords" content="" />-->

    <!--=============== css  ===============-->
    <link type="text/css" rel="stylesheet" href="/wp-content/themes/solid-theme/css/reset.css">
    <link type="text/css" rel="stylesheet" href="/wp-content/themes/solid-theme/css/plugins.css">
    <link type="text/css" rel="stylesheet" href="/wp-content/themes/solid-theme/css/style.css">
    <?php if (is_page('account') || is_page('bonus') || is_page('docs')) {
        echo '<link type="text/css" rel="stylesheet" href="/wp-content/themes/solid-theme/css/dashboard-style.css">';
    } ?>
    <link type="text/css" rel="stylesheet" href="/wp-content/themes/solid-theme/css/color.css">
    <link type="text/css" rel="stylesheet" href="/wp-content/themes/solid-theme/style.css?v=<?= filemtime(get_template_directory() . '/style.css');?>">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Rubik:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

    <?php wp_head(); ?>
    <!--=============== favicons ===============-->
    <link rel="shortcut icon" href="/wp-content/themes/solid-theme/images/favicon.ico">
    <!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-5JL9XBQ');</script>
<!-- End Google Tag Manager -->
    <!-- Yandex.Metrika counter -->
<script type="text/javascript" >
   (function(m,e,t,r,i,k,a){m[i]=m[i]||function(){(m[i].a=m[i].a||[]).push(arguments)};
   m[i].l=1*new Date();k=e.createElement(t),a=e.getElementsByTagName(t)[0],k.async=1,k.src=r,a.parentNode.insertBefore(k,a)})
   (window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");

   ym(69167377, "init", {
        clickmap:true,
        trackLinks:true,
        accurateTrackBounce:true,
        webvisor:true
   });
</script>
<noscript><div><img src="https://mc.yandex.ru/watch/69167377" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
<!-- /Yandex.Metrika counter -->

<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-182369511-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-182369511-1');
</script>

</head>

<body <?php echo body_class(); ?>>
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-5JL9XBQ"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
    <div class="loader-wrap">
        <div class="loader-inner">
            <div class="loader-inner-cirle"></div>
        </div>
    </div>

    <div id="main">
        <header class="main-header">
            <a href="/" class="logo-holder">
                <?php if (!isMobileDevice()) {
                    echo '<img src="/wp-content/themes/solid-theme/images/logo.png">';
                } else {
                    echo '<img src="/wp-content/uploads/logo.png">';
                } ?>

            </a>
            <!--Поиск-->
            <div class="search-holder"><?php echo do_shortcode('[wpdreams_ajaxsearchpro id=1]'); ?></div>
            <!--Навигация-->
            <div class="nav-holder main-menu">

                <?php wp_nav_menu(array(
                    'container_class' => 'nav-holder',
		            'theme_location'  => 'main',
		            'container' => 'nav',
		            'menu_class' => 'no-list-style',
                )); ?>

                <!--<nav>-->
                <!--    <ul class="no-list-style">-->
                <!--        <li>-->
                <!--            <a href="/service/">Услуги</a>-->
                <!--        </li>-->
                <!--        <li>-->
                <!--            <a href="/sto/">СТО сети</a>-->
                <!--        </li>-->
                <!--        <li>-->
                <!--            <a href="/promo/">Акции</a>-->
                <!--        </li>-->
                <!--        <li>-->
                <!--            <a href="/about/">О сети <i class="fa fa-caret-down"></i></a>-->
                <!--            <ul>-->
                <!--                <li><a href="/about/">О нас</a></li>-->
                <!--                <li><a href="/partnership/">Партнерство</a></li>-->
                <!--                <li><a href="/supplier/">Поставщики</a></li>-->
                <!--                <li><a href="/blog/">Блог SAS</a></li>-->
                <!--                <li><a href="/review/">Отзывы</a></li>-->
                <!--                <li><a href="/vacancy/">Вакансии</a></li>-->
                <!--            </ul>-->
                <!--        </li>-->

                <!--    </ul>-->
                <!--</nav>-->
            </div>
            <div class="header-block">
                <!--<div class="header-subblock">-->
                <!--    <i class="fas fa-map-marker-alt"></i>-->
                <!--    <span id="location-selector">-->
                <!--        <?php if(isset($_COOKIE['location'])){echo $_COOKIE['location'];} ?>-->
                <!--    </span>-->
                <!--</div>-->
                <?php $cities = get_terms(['taxonomy' => 'city']); ?>
                <div class="listsearch-input-item header-location-select">
                    <select id="location-select" name="city" data-placeholder="Город" class="chosen-select nice-select">

                        <?php
                        echo '<option value="none">Город...</option>';
                        foreach ($cities as $c) {
                            if ($_COOKIE['location'] == $c->name || $_COOKIE['location'] == $c->slug){
                                $selected = 'selected';
                            } else {
                                $selected = '';
                            }
                            echo '<option ' . $selected . ' value="' . $c->slug . '">' . $c->name . '</option>';
                        }
                        ?>

                    </select>
                </div>
                <a href="/login/" class="header-subblock hide-on-small">
                    <span><i class="far fa-user-circle"></i></span>
                </a>
                <a href="tel:7044" class="header-subblock">
                    <i class="fas fa-phone-alt"></i>
                    <span id="header-phone">7044</span>
                </a>
            </div>
            <a href="#" class="add-list color-bg modal-open">Заказать звонок</a>

            <div class="nav-button-wrap color-bg">
                <div class="nav-button">
                    <span></span><span></span><span></span>
                </div>
            </div>
        </header>

        <div class="main-register-wrap modal" style="display: none;">
            <div class="reg-overlay" style="display: none;"></div>
            <div class="main-register-holder tabs-act">
                <div class="main-register fl-wrap modal_main">
                    <div class="main-register_title">Мы Вам перезвоним!</div>
                    <div class="close-reg"><i class="fal fa-times"></i></div>
                    <div class="modal-body">
                        <?php echo do_shortcode( '[contact-form-7 id="277" title="Контактная форма 1"]' ); ?>
                    </div>

                </div>
            </div>
        </div>

        <div class="main-register-wrap modal-thanks" style="display: none;">
            <div class="reg-overlay" style="display: none;"></div>
            <div class="main-register-holder tabs-act">
                <div class="main-register fl-wrap modal_main">
                    <div class="main-register_title">Спасибо!</div>
                    <div class="close-reg"><i class="fal fa-times"></i></div>
                    <div class="modal-body"></div>
                </div>
            </div>
        </div>
