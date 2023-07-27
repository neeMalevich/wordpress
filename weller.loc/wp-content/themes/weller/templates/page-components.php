<?php
/*
Template Name: Страница электронных компонентов
*/

get_template_part('/blocks/header')
?>
    <main>

        <!--  Электронные компоненты  -->
        <?php get_template_part('/blocks/components'); ?>

    </main>

<?php
get_template_part('/blocks/footer');
?>