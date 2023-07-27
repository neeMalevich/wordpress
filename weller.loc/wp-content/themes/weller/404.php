<?php
include 'blocks/header.php';
?>
    <section class="bg_main_product">
        <div class="container">
            <div class="basket_empty" style="padding:100px 0; text-align: center">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/404.jpg" alt="страница не найдена">
                <p>Неправильно набран адрес, или такой страницы на сайте больше не существует.</p>
                <p>Перейдите на <a href="/">главную страницу</a>, воспользуйтесь поиском или меню.</p>
            </div>
        </div>
    </section>
<?php
include 'blocks/footer.php';
?>