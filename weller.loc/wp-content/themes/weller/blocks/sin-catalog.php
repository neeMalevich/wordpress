<?php
/*
Template Name: Страница продукции деталей каталога
*/

get_template_part('/blocks/header')
?>
<link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/assets/css/weller-tax.css">

<main>

    <div class="breadcrumbs">
        <div class="container">
            <div class="row no-gutter">
                <div class="col-xs-12">
                    <ul class="breadcrumb">
                        <li><a href="/">Главная</a></li>
                        <li><a href="/catalog/">Каталог</a></li>
                        <li class="active">Паяльное оборудование Weller</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="categories dropdown">
        <div class="container">
            <div class="row no-gutter">
                <div class="col-xs-12">
                    <ul class="items">
                        <li class="professional">
                            <a href="/catalog/payalnoe-oborudovanie/"><strong>Паяльное оборудование Weller</strong></a>
                            <div class="holder">
                                <ul class="links">
                                    <li><a href="/catalog/payalnye-stantsii1/"
                                           style="background-image:url('https://www.weller-tools.ru/upload/resize_cache/iblock/68a/120_65_1/68a2751819e0dfa38d3cf53e46f923b4.jpg');">Паяльные
                                            станции</a></li>
                                    <li><a href="/catalog/payalniki-i-nabory/"
                                           style="background-image:url('https://www.weller-tools.ru/upload/resize_cache/iblock/2d7/120_65_1/2d78420961297b75348435fc6b7475d2.jpg');">Паяльники
                                            и наборы</a></li>
                                    <li><a href="/catalog/aksessuary1/"
                                           style="background-image:url('https://www.weller-tools.ru/upload/resize_cache/iblock/363/120_65_1/3630d6d3be4706df6063c656215a3275.jpg');">Аксессуары</a>
                                    </li>
                                    <li><a href="/catalog/zhalanakonechnikinasadki/"
                                           style="background-image:url('https://www.weller-tools.ru/upload/resize_cache/iblock/18d/120_65_1/18dbe1416d8d06345b0bd4bfcb99bc2b.jpg');">Жала/Наконечники/Насадки</a>
                                    </li>
                                    <li><a href="/catalog/doziruyushchie-sistemy/"
                                           style="background-image:url('https://www.weller-tools.ru/upload/resize_cache/iblock/a98/120_65_1/a98f03adc10e48045a12eb4d90beb8a6.jpg');">Дозирующие
                                            системы</a></li>
                                    <li><a href="/catalog/payalnye-materialy/"
                                           style="background-image:url('https://www.weller-tools.ru/upload/resize_cache/iblock/ddd/120_65_1/ddd690a389b0e901f9ab17222d289f2e.jpg');">Паяльные
                                            материалы</a></li>
                                </ul>
                            </div>
                        </li>
                        <li class="consumer">
                            <a href="/catalog/prof-seriya-sugon/"><strong>Профессиональная серия Sugon</strong></a>
                            <div class="holder">
                                <ul class="links">
                                    <li><a href="/catalog/payalnye-stantsii-red/"
                                           style="background-image:url('https://www.weller-tools.ru/upload/resize_cache/iblock/6c0/120_65_1/6c0d1ab5d34125282438b09e478a21a5.jpg');">Паяльные
                                            станции</a></li>
                                    <li><a href="/catalog/setevye-payalniki-red/"
                                           style="background-image:url('https://www.weller-tools.ru/upload/resize_cache/iblock/009/120_65_1/009291d1d87f4799a7b81431fa1d74f4.JPG');">Термовоздушные
                                            паяльные станции</a></li>
                                    <li><a href="/catalog/akkumulyatornye-i-gazovye-payalniki/"
                                           style="background-image:url('https://www.weller-tools.ru/upload/resize_cache/iblock/bd3/120_65_1/bd3100e1c03779f1b21257a4c7ee382c.jpg');">Паяльники</a>
                                    </li>
                                    <li><a href="/catalog/payalnye-nakonechniki/"
                                           style="background-image:url('https://www.weller-tools.ru/upload/resize_cache/iblock/c2f/120_65_1/c2f9c2153ab31190170b1e9cb9093477.JPG');">Наконечники</a>
                                    </li>
                                    <li><a href="/catalog/payalnye-materialy-red/"
                                           style="background-image:url('https://www.weller-tools.ru/upload/resize_cache/iblock/7cc/120_65_1/7cc28fa83a2af1aa1bfe537cd16e705d.jpg');">Аксессуары
                                            для пайки</a></li>
                                </ul>
                            </div>
                        </li>
                        <li class="filtration">
                            <a href="/catalog/dymoudalenie-i-filtratsiya/"><strong>Дымоудаление и фильтрация
                                    Weller</strong></a>
                            <div class="holder">
                                <ul class="links">
                                    <li><a href="/catalog/dymoulavlivayushchie-sistemy/"
                                           style="background-image:url('https://www.weller-tools.ru/upload/resize_cache/iblock/2eb/120_65_1/2ebfa3702adac514729aca9a824eb21a.jpg');">Дымоулавливающие
                                            системы</a></li>
                                    <li><a href="/catalog/vytyazhnye-nakonechniki/"
                                           style="background-image:url('https://www.weller-tools.ru/upload/resize_cache/iblock/949/120_65_1/9492717f5f1b67d06d94d5f7cf624bd7.jpg');">Вытяжные
                                            наконечники</a></li>
                                    <li><a href="/catalog/aksessuary-dlya-filtratsii/"
                                           style="background-image:url('https://www.weller-tools.ru/upload/resize_cache/iblock/8b1/120_65_1/8b1655aed30c48fbcf474fc4c5f930a2.jpg');">Аксессуары
                                            для фильтрации</a></li>
                                </ul>
                            </div>
                        </li>
                        <li class="erem">
                            <a href="/catalog/ruchnoy-instrument/"><strong>Ручной инструмент Weller серии Erem
                                </strong></a>
                            <div class="holder">
                                <ul class="links">
                                    <li><a href="/catalog/kusachki/"
                                           style="background-image:url('https://www.weller-tools.ru/upload/resize_cache/iblock/33b/120_65_1/33b34e836055f8b30cefe95abea5ce4d.png');">Бокорезы
                                            и кусачки</a></li>
                                    <li><a href="/catalog/vakuumnye-manipulyatory/"
                                           style="background-image:url('https://www.weller-tools.ru/upload/resize_cache/iblock/98f/120_65_1/98f46e0167ea1a56c0036d17a8f12476.png');">Вакуумные
                                            манипуляторы</a></li>
                                    <li><a href="/catalog/pintsety/"
                                           style="background-image:url('https://www.weller-tools.ru/upload/resize_cache/iblock/7ec/120_65_1/7ec3a8aa6fededd69d997ba65549a24d.png');">Пинцеты</a>
                                    </li>
                                    <li><a href="/catalog/ploskogubtsy/"
                                           style="background-image:url('https://www.weller-tools.ru/upload/resize_cache/iblock/823/120_65_1/82398aa01451c7a8695e933654e3bb39.png');">Плоскогубцы</a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li class="xcelite">
                            <a href="/catalog/ruchnoy-instrument-xcelite/"><strong>Ручной инструмент
                                    Xcelite</strong></a>
                            <div class="holder">
                                <ul class="links">
                                    <li><a href="/catalog/nabory-instrumentov-xcelite/"
                                           style="background-image:url('https://www.weller-tools.ru/upload/resize_cache/iblock/06f/120_65_1/06f27588920d91c550a832a8f16d4d77.jpg');">Наборы
                                            инструментов Xcelite</a></li>
                                    <li><a href="/catalog/pretsizionnye-nozhi-i-lezviya/"
                                           style="background-image:url('https://www.weller-tools.ru/upload/resize_cache/iblock/44a/120_65_1/44a519edaac852afe850bc2e5324f73b.jpg');">Прецизионные
                                            ножи и лезвия</a></li>
                                </ul>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <div class="product-page">
        <div class="container">
            <div class="row no-gutter">
                <div class="col-xs-12 description">
                    <div class="main-detail">
                        <div class="wrapper">
                            <div class="preview"><a
                                        href="https://www.weller-tools.ru/upload/iblock/1f4/1f43e5d426a666bf03643230b98572f3.jpg"
                                        class="with-zoom"><img
                                            src="https://www.weller-tools.ru/upload/resize_cache/iblock/1f4/350_200_1/1f43e5d426a666bf03643230b98572f3.jpg"
                                            alt="Силовой блок WX 1"
                                            data-zoom-image="https://www.weller-tools.ru/upload/iblock/1f4/1f43e5d426a666bf03643230b98572f3.jpg"></a>
                            </div>
                        </div>
                        <div class="wrapper">
                            <h1 class="title">Силовой блок WX 1</h1>
                            <div class="sku detail-sku">Артикул: <strong>T0053417399N</strong></div>

                            <button class="btn price">Оставить заявку</button>

                            <form action="/" method="get" class="to-cart">
                                <a href="#" class="minus quantity">-</a><input type="text" value="1"><a href="#"
                                                                                                        class="plus quantity">+</a>
                                <div class="clearfix"></div>
                            </form>
                            <div class="text">Одноканальный силовой блок WX 1</div>
                            <a class="readmore" href="#readmore">Подробнее</a>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 tabs">
                    <ul class="nav nav-tabs" role="tablist">
                        <li role="presentation" class="">
                            <a href="#description" aria-controls="description" role="tab" data-toggle="tab" aria-expanded="false">
                                Описание
                            </a>
                        </li>
                        <li role="presentation" class="active">
                            <a href="#specs" aria-controls="specs" role="tab" data-toggle="tab" aria-expanded="false">
                                Технические данные
                            </a>
                        </li>
                        <li role="presentation" class="active11">
                            <a href="#accessories" aria-controls="accessories" role="tab" data-toggle="tab" aria-expanded="true">
                                Аксессуары
                            </a>
                        </li>
                        <li role="presentation" class="">
                            <a href="#manual" aria-controls="manual" role="tab" data-toggle="tab" aria-expanded="false">
                                Инструкция
                            </a>
                        </li>
                    </ul>
                    <div class="tab-content">
                        <div role="tabpanel" class="tab-pane" id="description">
                            <p style="text-align: justify;">Мощные и удобные в использовании паяльные станции серии WX
                                ориентированы на сферы электронной промышленности с высокими требованиями надежности
                                пайки, таких как аэрокосмическая, автомобильная отрасль и ВПК. Благодаря весомому
                                приросту производительности и интуитивно понятному интерфейсу с сенсорным дисплеем, WX
                                становится идеальным инструментом в решении современных задач процесса пайки сложных
                                печатных модулей.</p>

                            <table style="border-collapse: collapse;" cellspacing="1" cellpadding="1" border="0">
                                <tbody>
                                <tr>
                                    <td style="border-image: initial;"><img
                                                src="https://www.weller-tools.ru/upload/medialibrary/111/11139356504375bf1781acb2690bdfd1.jpg"
                                                title="Screenshot_1.jpg" border="0" alt="Screenshot_1.jpg" width="145"
                                                height="97"></td>
                                    <td style="border-image: initial;"><font color="#ffffff">**</font></td>
                                    <td style="border-image: initial;">
                                        <p><b>Управление периферийным оборудованием&nbsp;</b></p>

                                        <p style="text-align: justify;">Интегрированные USB порты позволяют управлять
                                            системами дымоудаления и площадками нижнего подогрева. Параметры работы
                                            подключенного устройства отображаются на дисплее станции.&nbsp;</p>
                                    </td>
                                </tr>

                                <tr>
                                    <td colspan="1" style="border-image: initial;"><font color="#ffffff">*</font></td>
                                    <td colspan="1" style="border-image: initial;"></td>
                                    <td colspan="1" style="border-image: initial;"></td>
                                </tr>

                                <tr>
                                    <td style="border-image: initial;"><img
                                                src="https://www.weller-tools.ru/upload/medialibrary/eec/eec231d7c472b925284bfd00454283b5.jpg"
                                                title="Screenshot_2.jpg" border="0" alt="Screenshot_2.jpg" width="145"
                                                height="99"></td>
                                    <td style="border-image: initial;"></td>
                                    <td style="border-image: initial;">
                                        <p><b>Интеллектуальное распознавание инструментов&nbsp;</b></p>

                                        <p style="text-align: justify;">При подключении любого паяльника или аксессуара
                                            происходит автоматическое определение, и модель инструмента отображается на
                                            дисплее станции.&nbsp;</p>
                                    </td>
                                </tr>

                                <tr>
                                    <td colspan="1" style="border-image: initial;"><font color="#ffffff">*</font></td>
                                    <td colspan="1" style="border-image: initial;"></td>
                                    <td colspan="1" style="border-image: initial;"></td>
                                </tr>

                                <tr>
                                    <td style="border-image: initial;"><img
                                                src="https://www.weller-tools.ru/upload/medialibrary/bcc/bcc6cc6cd4fff6fea5ae8ab47d46e8fc.jpg"
                                                title="Screenshot_3.jpg" border="0" alt="Screenshot_3.jpg" width="147"
                                                height="100"></td>
                                    <td style="border-image: initial;"></td>
                                    <td style="border-image: initial;">
                                        <p><b>Многофункциональный USB-порт&nbsp;</b></p>

                                        <p>Быстрое локальное обновление прошивки и регистрация данных через
                                            USB-порт.</p>
                                    </td>
                                </tr>

                                <tr>
                                    <td colspan="1" style="border-image: initial;"><font color="#ffffff">*</font></td>
                                    <td colspan="1" style="border-image: initial;"></td>
                                    <td colspan="1" style="border-image: initial;"></td>
                                </tr>

                                <tr>
                                    <td style="border-image: initial;"><img
                                                src="https://www.weller-tools.ru/upload/medialibrary/ea2/ea243996d8c962c057a2d5083bb14508.jpg"
                                                title="Screenshot_4.jpg" border="0" alt="Screenshot_4.jpg" width="146"
                                                height="98"></td>
                                    <td style="border-image: initial;"></td>
                                    <td style="border-image: initial;">
                                        <p><b>Встроенная память параметров</b>&nbsp;</p>

                                        <p style="text-align: justify;">В памяти паяльного инструмента сохраняются
                                            параметры времени автоматического отключения и температуры sandby режима.
                                            Параметры сохраняются единожды и действуют на разных силовых блоках WX.</p>
                                    </td>
                                </tr>

                                <tr>
                                    <td colspan="1" style="border-image: initial;"><font color="#ffffff">*</font></td>
                                    <td colspan="1" style="border-image: initial;"></td>
                                    <td colspan="1" style="border-image: initial;"></td>
                                </tr>

                                <tr>
                                    <td style="border-image: initial;"><img
                                                src="https://www.weller-tools.ru/upload/medialibrary/faf/faf4d5c15e584d9e941975b2b9d29db8.jpg"
                                                title="Screenshot_5.jpg" border="0" alt="Screenshot_5.jpg" width="147"
                                                height="98"></td>
                                    <td style="border-image: initial;"></td>
                                    <td style="border-image: initial;">
                                        <p><b>Многоязычное меню&nbsp;</b></p>

                                        <p style="text-align: justify;">Русский, Немецкий, Английский, Французский,
                                            Итальянский, Испанский, Португальский, Китайский и др.&nbsp;Отсутствующие
                                            добавляются по запросу.</p>
                                    </td>
                                </tr>

                                <tr>
                                    <td colspan="1" style="border-image: initial;"><font color="#ffffff">*</font></td>
                                    <td colspan="1" style="border-image: initial;"></td>
                                    <td colspan="1" style="border-image: initial;"></td>
                                </tr>

                                <tr>
                                    <td style="border-image: initial;"><img
                                                src="https://www.weller-tools.ru/upload/medialibrary/463/463a03cf50d4edf6dc26bf6354969559.jpg"
                                                title="Screenshot_6.jpg" border="0" alt="Screenshot_6.jpg" width="145"
                                                height="98"></td>
                                    <td style="border-image: initial;"></td>
                                    <td style="border-image: initial;">
                                        <p><b>Антистатическая защита&nbsp;</b></p>

                                        <p style="text-align: justify;">Все станции семейства WX имеют антистатическую
                                            защиту и пригодны для работы в EPA-зонах.&nbsp;</p>
                                    </td>
                                </tr>

                                <tr>
                                    <td colspan="1" style="border-image: initial;"><font color="#ffffff">*</font></td>
                                    <td colspan="1" style="border-image: initial;"></td>
                                    <td colspan="1" style="border-image: initial;"></td>
                                </tr>

                                <tr>
                                    <td style="border-image: initial;"><img
                                                src="https://www.weller-tools.ru/upload/medialibrary/708/708555710b85a42c254cea28ebf0d497.jpg"
                                                title="Screenshot_7.jpg" border="0" alt="Screenshot_7.jpg" width="145"
                                                height="100"></td>
                                    <td style="border-image: initial;"></td>
                                    <td style="border-image: initial;">
                                        <p><b>Индикация работы инструмента&nbsp;</b></p>

                                        <p style="text-align: justify;">Паяльные инструменты оснащены синим LED-кольцом,
                                            мерцание которого означает нагрев или standby, свечение —готовность к
                                            работе.&nbsp;</p>
                                    </td>
                                </tr>

                                <tr>
                                    <td colspan="1" style="border-image: initial;"><font color="#ffffff">*</font></td>
                                    <td colspan="1" style="border-image: initial;"></td>
                                    <td colspan="1" style="border-image: initial;"></td>
                                </tr>

                                <tr>
                                    <td style="border-image: initial;"><img
                                                src="https://www.weller-tools.ru/upload/medialibrary/7f2/7f2dd915034f76aba11e5e27a32f9e2a.jpg"
                                                title="Screenshot_8.jpg" border="0" alt="Screenshot_8.jpg" width="157"
                                                height="105"></td>
                                    <td style="border-image: initial;"></td>
                                    <td style="border-image: initial;">
                                        <p><b>Быстрый нагрев&nbsp;</b></p>

                                        <p style="text-align: justify;">Паяльные инструменты WX-серии нагреваются в
                                            максимально короткое время и могут быть использованы без потери времени.&nbsp;</p>
                                    </td>
                                </tr>

                                <tr>
                                    <td colspan="1" style="border-image: initial;"><font color="#ffffff">*</font></td>
                                    <td colspan="1" style="border-image: initial;"></td>
                                    <td colspan="1" style="border-image: initial;"></td>
                                </tr>

                                <tr>
                                    <td style="border-image: initial;"><img
                                                src="https://www.weller-tools.ru/upload/medialibrary/758/7580af154d13e40b5d72bd2b0c3748c5.jpg"
                                                title="Screenshot_9.jpg" border="0" alt="Screenshot_9.jpg" width="155"
                                                height="96"></td>
                                    <td style="border-image: initial;"></td>
                                    <td style="border-image: initial;">
                                        <p><b>Точность поддержания температуры</b>&nbsp;</p>

                                        <p style="text-align: justify;">Паяльные инструменты WX-серии имеют точность
                                            поддержания температуры ±9°С, со стабильностью ±2°С, что соответствует
                                            стандарту IPC.&nbsp;</p>
                                    </td>
                                </tr>

                                <tr>
                                    <td colspan="1" style="border-image: initial;"><font color="#ffffff">*</font></td>
                                    <td colspan="1" style="border-image: initial;"></td>
                                    <td colspan="1" style="border-image: initial;"></td>
                                </tr>

                                <tr>
                                    <td style="border-image: initial;"><img
                                                src="https://www.weller-tools.ru/upload/medialibrary/4be/4be6a20462414f3dfdcedc790eeac825.jpg"
                                                title="Screenshot_10.jpg" border="0" alt="Screenshot_10.jpg" width="147"
                                                height="98"></td>
                                    <td style="border-image: initial;"><b></b></td>
                                    <td style="border-image: initial;">
                                        <p><b>Интуитивно понятное управление&nbsp;</b></p>

                                        <p style="text-align: justify;">Управление по меню осуществляется поворотным
                                            сенсорным колесом. Прочный емкостный сенсорный дисплей имеет ESD-защиту,
                                            стойкость к химическому и температурному воздействию.</p>
                                    </td>
                                </tr>

                                <tr>
                                    <td colspan="1" style="border-image: initial;"><font color="#ffffff">*</font></td>
                                    <td colspan="1" style="border-image: initial;"></td>
                                    <td colspan="1" style="border-image: initial;"></td>
                                </tr>

                                <tr>
                                    <td style="border-image: initial;"><img
                                                src="https://www.weller-tools.ru/upload/medialibrary/c46/c465d5a1602114e933ec346d054301f8.jpg"
                                                title="Screenshot_11.jpg" border="0" alt="Screenshot_11.jpg" width="146"
                                                height="92"></td>
                                    <td style="border-image: initial;"></td>
                                    <td style="border-image: initial;">
                                        <p><b>Экономия энергии&nbsp;</b></p>

                                        <p style="text-align: justify;">Благодаря встроенным датчикам движения
                                            инструменты запитываются только когда используются. Аксессуары также уходят
                                            в standby-режим.</p>
                                    </td>
                                </tr>
                                </tbody>
                            </table>

                            <p>&nbsp;<b>Силовой блок WX 1</b></p>

                            <ul>
                                <li>Инновационная концепция управления</li>

                                <li>Защищенный сенсорный LED дисплей из настоящего стекла с подсветкой</li>

                                <li>Управление по типу I-Pad</li>

                                <li>Мультиязычное меню навигации</li>

                                <li>Высокая функциональность</li>

                                <li>Встроенный сенсор движения, обеспечивающий автоматическое включение/выключение
                                    инструментов
                                </li>

                                <li>Визуальный контроль нагрева через кольцо светодиода</li>

                                <li>Запись, передача и хранение данных на внешние носители и непосредственно на
                                    подключаемое оборудование
                                </li>

                                <li>Возможность подключения любых WX инструментов
                                    <br>
                                </li>
                            </ul>
                        </div>
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
                        <div role="tabpanel" class="tab-pane" id="accessories">

                            <table class="product-set">
                                <tbody>
                                <tr>
                                    <td>
                                        <img src="https://www.weller-tools.ru/upload/resize_cache/iblock/cb4/160_80_1/cb45ad9cd2f752b95137ffcbaa5c981f.jpg"
                                             alt="WX адаптер для дистанционного управления"
                                             onmouseover="RK_JS.onMouseImage(this, 'https://www.weller-tools.ru/upload/resize_cache/iblock/cb4/400_600_1/cb45ad9cd2f752b95137ffcbaa5c981f.jpg');">
                                    </td>
                                    <td>T0058762724</td>
                                    <td>&nbsp;</td>
                                    <td><a href="/catalog/wx-adaptery/wx-adapter-dlya-distantsionnogo-upravleniya.html">WX
                                            адаптер для дистанционного управления</a></td>
                                </tr>
                                <tr>
                                    <td>
                                        <img src="https://www.weller-tools.ru/upload/resize_cache/iblock/9e2/160_80_1/9e2cc51f944eae20bd17153643a655da.jpg"
                                             alt="Переносной дымоуловитель Zero Smog 4V"
                                             onmouseover="RK_JS.onMouseImage(this, 'https://www.weller-tools.ru/upload/resize_cache/iblock/9e2/400_600_1/9e2cc51f944eae20bd17153643a655da.jpg');">
                                    </td>
                                    <td>T0053660699N</td>
                                    <td>&nbsp;</td>
                                    <td><a href="/catalog/zero-smog-4v/perenosnoy-dymoulovitel-zero-smog-4v.html">Переносной
                                            дымоуловитель Zero Smog 4V</a></td>
                                </tr>
                                <tr>
                                    <td>
                                        <img src="https://www.weller-tools.ru/upload/resize_cache/iblock/26c/160_80_1/26c81a3923e67393374c95fbec091a07.jpg"
                                             alt="WX адаптер для WFE/WHP"
                                             onmouseover="RK_JS.onMouseImage(this, 'https://www.weller-tools.ru/upload/resize_cache/iblock/26c/400_600_1/26c81a3923e67393374c95fbec091a07.jpg');">
                                    </td>
                                    <td>T0058764712</td>
                                    <td>&nbsp;</td>
                                    <td><a href="/catalog/wx-adaptery/wx-adapter-dlya-wfewhp.html">WX адаптер для
                                            WFE/WHP</a></td>
                                </tr>
                                <tr>
                                    <td>
                                        <img src="https://www.weller-tools.ru/upload/resize_cache/iblock/686/160_80_1/686b1176ce3cc17ad489e0c44761c780.jpg"
                                             alt="WX Соединительный кабель"
                                             onmouseover="RK_JS.onMouseImage(this, 'https://www.weller-tools.ru/upload/resize_cache/iblock/686/400_600_1/686b1176ce3cc17ad489e0c44761c780.jpg');">
                                    </td>
                                    <td>T0058764710</td>
                                    <td>&nbsp;</td>
                                    <td><a href="/catalog/udliniteli/wx-soedinitelnyy-kabel.html">WX Соединительный
                                            кабель</a></td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                        <div role="tabpanel" class="tab-pane" id="manual">
                            <div class="download-link"><a
                                        href="https://www.weller-tools.ru/upload/iblock/b81/b81e0372c748e5213009329bb73954d3.pdf">Инструкция
                                    к "Силовой блок WX 1"</a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


</main>

<?php
get_template_part('/blocks/footer');
?>
