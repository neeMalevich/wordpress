<?php
get_template_part('/blocks/header');

$product_id = get_the_ID();

$product_sku = get_field('product_sku', get_the_ID());
$product_img = wp_get_attachment_url(get_post_thumbnail_id(get_the_ID(), 'full'));
?>

<main>

    <!-- Хлебные крошки -->
    <?php get_template_part('/blocks/breadcrumbs'); ?>

    <!--    Навигация по категориям  -->
    <?php get_template_part('/blocks/tools-navigation'); ?>

    <div class="product-page">
        <div class="container">
            <div class="row no-gutter">
                <div class="col-xs-12 description">
                    <div class="main-detail">
                        <div class="wrapper">
                            <div class="preview">
                                <?php the_post_thumbnail('full'); ?>
                            </div>
                        </div>

                        <div class="wrapper">
                            <h1 class="title"><?php the_title(); ?></h1>
                            <div class="sku detail-sku">Артикул: <strong><?= $product_sku; ?></strong></div>

                            <button class="btn price product-popup">Оставить заявку</button>

                            <div class="text"><?php the_excerpt(); ?></div>
                            <a class="readmore" href="#description">Подробнее</a>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 tabs">
                    <ul class="nav nav-tabs" role="tablist">
                        <li role="presentation" class="">
                            <a href="#description" aria-controls="description" role="tab" data-toggle="tab"
                               aria-expanded="false">
                                Описание
                            </a>
                        </li>
                        <?php /*
                        <li role="presentation" class="active">
                            <a href="#specs" aria-controls="specs" role="tab" data-toggle="tab" aria-expanded="false">
                                Технические данные
                            </a>
                        </li>
                         */ ?>
                    </ul>
                    <div class="tab-content">
                        <div role="tabpanel" class="tab-pane active" id="description">
                            <?= the_content(); ?>
                        </div>
                        <?php /*
                        <div role="tabpanel" class="tab-pane active" id="specs">
                            <table class="product-specification" id="product-specification">
                                <tbody>
                                <tr>
                                    <td class="attributeNameTecData">
                                        <div class="img-props"><span
                                                    class="esd_protection">Антистатическая защита</span></div>
                                    </td>
                                    <td>
                                        <ul>
                                            <li><span class="esd_protection">Антистатическая защита</span></li>
                                        </ul>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="attributeNameTecData">USB интерфейс:</td>
                                    <td>
                                        <ul>
                                            <li>USB порт поддерживает все стандартные типы USB Flash Drive</li>
                                            <li>Быстрое локализованное обновление ПО, конфигурирование и выведение
                                                отчетов через USB-флэшку
                                            </li>
                                        </ul>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="attributeNameTecData">Выравнивание потенциалов:</td>
                                    <td>
                                        <ul>
                                            <li>3,5 мм разъем предлагает четыре варианта заземления</li>
                                            <li>Жесткое заземление ("земля" сетевого питания) - без использования
                                                штекера
                                            </li>
                                            <li>Баланс потенциалов (нулевой импеданс) - через штекер, провод идет к
                                                сетевой "земле"
                                            </li>
                                            <li>Мягкое заземление на сетевую "землю" - через штекер и встроенный в цепь
                                                резистор
                                            </li>
                                            <li>Без баланса потенциалов</li>
                                        </ul>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="attributeNameTecData">Габариты (Д x Ш x В), см:</td>
                                    <td>17 x 15,1 x 13</td>
                                </tr>
                                <tr>
                                    <td class="attributeNameTecData">Класс защиты:</td>
                                    <td>1</td>
                                </tr>
                                <tr>
                                    <td class="attributeNameTecData">Количество каналов:</td>
                                    <td>1</td>
                                </tr>
                                <tr>
                                    <td class="attributeNameTecData">Максимальная мощность:</td>
                                    <td>200 Вт</td>
                                </tr>
                                <tr>
                                    <td class="attributeNameTecData">Материал сенсорной панели:</td>
                                    <td>Материал с антистатическим покрытием</td>
                                </tr>
                                <tr>
                                    <td class="attributeNameTecData">Напряжение питания:</td>
                                    <td>230 В, 50 Гц</td>
                                </tr>
                                <tr>
                                    <td class="attributeNameTecData">Погрешности температурных измерений:</td>
                                    <td>± 9</td>
                                </tr>
                                <tr>
                                    <td class="attributeNameTecData">Подсветка дисплея:</td>
                                    <td>4 светодиода</td>
                                </tr>
                                <tr>
                                    <td class="attributeNameTecData">Размеры сенсорной панели:</td>
                                    <td>74 x 38 мм</td>
                                </tr>
                                <tr>
                                    <td class="attributeNameTecData">Разрешение:</td>
                                    <td>255 x 127 (128)</td>
                                </tr>
                                <tr>
                                    <td class="attributeNameTecData">Стабильность температуры:</td>
                                    <td>± 2</td>
                                </tr>
                                <tr>
                                    <td class="attributeNameTecData">Температурный режим:</td>
                                    <td>50 - 550</td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                        */ ?>
                    </div>
                </div>
            </div>
        </div>
    </div>


</main>
<div class="modal-order">
    <div class="modal-order-content">
        <span class="close-button-order">×</span>
        <div class="modal-order__img">
            <img class="modal-order__img_popup" src="<?= $product_img; ?>" alt="<?php the_title(); ?>">
        </div>
        <div class="modal_product_title"><?php the_title(); ?></div>

        <?php echo do_shortcode('[contact-form-7 id="733" title="Продукты"]'); ?>
    </div>
</div>
<script>
    function modalCustomProduct() {
        let modal = document.querySelector(".modal-order");
        let trigger = document.querySelector(".product-popup");
        let closeButton = document.querySelector(".close-button-order");
        let body = document.querySelector("body");

        function toggleModal() {
            modal.classList.toggle("show-modal-order");
            body.classList.toggle("_is-no-scroll");
        }

        function windowOnClick(event) {
            if (event.target === modal) {
                toggleModal();
            }
        }

        trigger.addEventListener("click", toggleModal);
        closeButton.addEventListener("click", toggleModal);
        window.addEventListener("click", windowOnClick);
    }

    function modalSendTitleImage() {
        let productImage = document.querySelector('.modal-order__img_popup').getAttribute('data-src');
        let productTitle = document.querySelector('.modal_product_title').textContent;

        let productTitleInput = document.querySelector('.modal-order-content input[name="product_title"]');
        let productUrlInput = document.querySelector('.modal-order-content input[name="product_url"]');
        let productFileImage = document.querySelector('.modal-image-product');

        productTitleInput.value = productTitle;
        productFileImage.value = productImage;
        productUrlInput.value = window.location.href;
    }

    modalCustomProduct();
    modalSendTitleImage();
</script>

<?php
get_template_part('/blocks/footer');
?>
