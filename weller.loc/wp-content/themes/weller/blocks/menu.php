<section class="header-menu">
    <nav>
        <div class="blog-masthead">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12">
                        <?php wp_nav_menu([
                            'menu' => 'menu_header',
                            'menu_class' => 'nav navbar-nav menu_',
                        ]); ?>
                    </div>
                </div>
            </div>
        </div>
    </nav>

</section>

<nav class="header-menu-mobile">

    <div class="hamburger-container">
        <div class="hamburger-text">Главное меню</div>
        <ul class="hamburger">
            <li></li>
            <li></li>
            <li></li>
        </ul>
    </div>
    <?php wp_nav_menu([
        'menu_id' => 'menu',
        'menu' => 'menu_header',
        'menu_class' => 'nav navbar-nav menu_ mobile-menu-header',
    ]); ?>
</nav>