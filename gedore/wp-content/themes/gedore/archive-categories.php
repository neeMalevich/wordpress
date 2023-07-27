<?php get_header(); ?>

<section class="s-catalog">
    <div class="container">
        <div class="catalog">
            <div class="sidebar">
                <div class="sidebar-top">
                    Каталог
                </div>
                <div class="sidebar-inner">
                    <div class="sidebar__item">
                        <div class="sidebar__item--summary">
                            <div class="sidebar__item-toggler">
                                <img src="../images/arrow.svg" alt="">
                            </div>
                            <div class="sidebar__item-title">Ключи гаечные</div>
                        </div>
                        <div class="sidebar__item--detail">
                            <ul class="sidebar__list">
                                <li class="sidebar__list-item">
                                    <a href="#">fsfsd</a>
                                </li>
                                <li class="sidebar__list-item">
                                    <a href="#">fsfsd</a>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <div class="sidebar__item">
                        <div class="sidebar__item--summary">
                            <div class="sidebar__item-toggler">
                                <img src="../images/arrow.svg" alt="">
                            </div>
                            <div class="sidebar__item-title">Ключи гаечные</div>
                        </div>
                        <div class="sidebar__item--detail">
                            <ul class="sidebar__list">
                                <li class="sidebar__list-item">
                                    <a href="#">fsfsd</a>
                                </li>
                                <li class="sidebar__list-item">
                                    <a href="#">fsfsd</a>
                                </li>
                            </ul>
                        </div>
                    </div>

                </div>
            </div>
            <div class="catalog__inner">
                <h3 class="catalog__section-title">Ключи гаечные</h3>
                <div class="catalog__box">
                    <?php
                        $catalog_nav_items = get_terms([
                            'taxonomy' => 'categories',
                            'parent'   => 0,
                            'hide_empty'   => 0
                        ]);
                    ?>
                    <?php foreach ($catalog_nav_items as $item) : ?>
                        <div class="catalog__item">
                            <a href="#" class="catalog__img">
                                <img src="./images/clych.jpg" alt="">
                            </a>
                            <a href="#" class="catalog__title"><?php echo $item->name; ?></a>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>

