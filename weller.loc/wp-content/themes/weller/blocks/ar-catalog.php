<?php
/*
Template Name: Страница продукции архив каталога
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
                        <li class="professional active">
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
    <div class="catalog-description">
        <div class="container">
            <div class="row no-gutter">
                <div class="col-xs-3">
                    <div class="inner professional"><strong class="title">Паяльное оборудование Weller </strong> - залог
                        высококачественной пайки. Энергетически эффективные и профессиональные паяльные станции.
                        Основными достоинствами паяльных станций Weller &trade; является:
                    </div>
                </div>
                <div class="col-xs-9">
                    <div class="inner">
                        <ul class="links professional">
                            <li><a href="/catalog/payalnye-stantsii1/"
                                   style="background-image:url('https://www.weller-tools.ru/upload/resize_cache/iblock/68a/120_80_1/68a2751819e0dfa38d3cf53e46f923b4.jpg');"><span>Паяльные
                                        станции</span></a></li>
                            <li><a href="/catalog/payalniki-i-nabory/"
                                   style="background-image:url('https://www.weller-tools.ru/upload/resize_cache/iblock/2d7/120_80_1/2d78420961297b75348435fc6b7475d2.jpg');"><span>Паяльники
                                        и наборы</span></a></li>
                            <li><a href="/catalog/aksessuary1/"
                                   style="background-image:url('https://www.weller-tools.ru/upload/resize_cache/iblock/363/120_80_1/3630d6d3be4706df6063c656215a3275.jpg');"><span>Аксессуары</span></a>
                            </li>
                            <li><a href="/catalog/zhalanakonechnikinasadki/"
                                   style="background-image:url('https://www.weller-tools.ru/upload/resize_cache/iblock/18d/120_80_1/18dbe1416d8d06345b0bd4bfcb99bc2b.jpg');"><span>Жала/Наконечники/Насадки</span></a>
                            </li>
                            <li class="nb"><a href="/catalog/doziruyushchie-sistemy/"
                                              style="background-image:url('https://www.weller-tools.ru/upload/resize_cache/iblock/a98/120_80_1/a98f03adc10e48045a12eb4d90beb8a6.jpg');"><span>Дозирующие
                                        системы</span></a></li>
                            <li class="nb"><a href="/catalog/payalnye-materialy/"
                                              style="background-image:url('https://www.weller-tools.ru/upload/resize_cache/iblock/ddd/120_80_1/ddd690a389b0e901f9ab17222d289f2e.jpg');"><span>Паяльные
                                        материалы</span></a></li>
                        </ul>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="catalog" id="products-list">
        <div class="container">
            <div class="row no-gutter">

                <div class="col-xs-3 menu big">
                    <div class="wrapper">
                        <ul>
                            <li class="title">Каталог</li>
                            <li class="active">
                                <a href="/catalog/payalnoe-oborudovanie/">Паяльное оборудование Weller</a>
                                <ul>
                                    <li><a href="/catalog/payalnye-stantsii1/">Паяльные станции</a>
                                        <ul>
                                            <li><a href="/catalog/montazhnye-payalnye-stantsii/">Монтажные паяльные
                                                    станции</a>
                                                <ul>
                                                    <li><a href="/catalog/payalnye-stantsii-komplekty/">Паяльные станции
                                                            (комплекты)</a></li>
                                                    <li><a href="/catalog/silovye-upravlyayushchie-bloki/">Силовые /
                                                            Управляющие блоки</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="/catalog/demontazhnye-stantsii/">Демонтажные станции</a>
                                                <ul>
                                                    <li><a href="/catalog/demontazhnye-stantsii-komplekty/">Демонтажные
                                                            станции (комплекты)</a></li>
                                                    <li><a href="/catalog/silovyeupravlyayushchie-bloki-/">Силовые /
                                                            Управляющие блоки </a></li>
                                                </ul>
                                            </li>
                                            <li><a href="/catalog/remontnye-payalnye-stantsii/">Ремонтные паяльные
                                                    станции</a>
                                                <ul>
                                                    <li><a href="/catalog/remontnye-stantsii-komplekty/">Ремонтные
                                                            станции (комплекты)</a></li>
                                                    <li><a href="/catalog/silovye-upravlyayushchie-bloki-/">Силовые /
                                                            Управляющие блоки</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="/catalog/termovozdushnye-stantsii/">Термовоздушные станции</a>
                                                <ul>
                                                    <li><a href="/catalog/silovye-upravlyayushchie_bloki/">Силовые /
                                                            Управляющие блоки</a></li>
                                                    <li><a href="/catalog/termovozdushnye-stantsii-komplekty/">Термовоздушные
                                                            станции (комплекты)</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="/catalog/stantsii-montazha-bgaqfp/">Станции монтажа BGA/QFP</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li><a href="/catalog/payalniki-i-nabory/">Паяльники и наборы</a>
                                        <ul>
                                            <li><a href="/catalog/kontaktnye-payalniki/">Контактные паяльники</a>
                                                <ul>
                                                    <li><a href="/catalog/nabor-s-podstavkoy/">Паяльники с
                                                            подставкой</a></li>
                                                    <li><a href="/catalog/payalniki/">Паяльники</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="/catalog/demontazhnye-payalniki/">Демонтажные паяльники</a>
                                            </li>
                                            <li><a href="/catalog/nizkovoltnye-pintsety/">Термопинцеты</a></li>
                                            <li><a href="/catalog/termofeny/">Термофены</a></li>
                                            <li><a href="/catalog/setevye-payalniki/">Сетевые паяльники</a>
                                                <ul>
                                                    <li><a href="/catalog/s-ferromagnitnym-datchikom-serii-magnastat/">С
                                                            ферромагнитным датчиком (серии Magnastat)</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="/catalog/gazovye-payalniki/">Газовые паяльники</a></li>
                                            <li><a href="/catalog/payalniki-s-dymoulavlivatelem/">Паяльники с
                                                    дымоулавливателем</a>
                                                <ul>
                                                    <li><a
                                                                href="/catalog/aksessuary-dlya-payalnikov-fe-s-dymoulavlivatelem/">Аксессуары
                                                            для паяльников FE с дымоулавливателем</a></li>
                                                    <li><a href="/catalog/payalniki-fe-s-dymoulavlivatelem/">Паяльники
                                                            FE с дымоулавливателем</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="/catalog/dlya-payki-inertnym-gazom/">Для пайки в среде
                                                    инертного газа</a></li>
                                            <li><a href="/catalog/nagrevatelnye-elementy/">Нагревательные элементы</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li><a href="/catalog/aksessuary1/">Аксессуары</a>
                                        <ul>
                                            <li><a href="/catalog/usb-mikroskopy/">USB микроскопы</a></li>
                                            <li><a href="/catalog/wx-adaptery/">WX адаптеры</a></li>
                                            <li><a href="/catalog/vakuumnye-pintsety/">Вакуумные пинцеты</a>
                                                <ul>
                                                    <li><a href="/catalog/zamenyaemye-nakonechniki/">Заменяемые
                                                            наконечники</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="/catalog/derzhateli-plat/">Держатели плат</a>
                                                <ul>
                                                    <li><a href="/catalog/derzhateli-plat-1/">Держатели плат</a>
                                                        <ul>
                                                            <li><a href="/catalog/aksessuary-derjateli/">Аксессуары</a>
                                                            </li>
                                                        </ul>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li><a href="/catalog/drugie-aksessuary-dlya-payki/">Другие аксессуары для
                                                    пайки</a>
                                                <ul>
                                                    <li><a href="/catalog/instrumenty-ochistki/">Инструменты очистки</a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li><a href="/catalog/instrumenty-dlya-chistki/">Инструменты для чистки</a>
                                            </li>
                                            <li><a href="/catalog/nagrevatelnye-plastiny/">Нагревательные пластины</a>
                                            </li>
                                            <li><a href="/catalog/otsosy-pripoya/">Отсосы припоя</a>
                                                <ul>
                                                    <li><a href="/catalog/dsp-otsosy-pripoya/">DSP</a></li>
                                                    <li><a href="/catalog/malenkie-otsosy-pripoya/">Маленькие</a></li>
                                                    <li><a href="/catalog/srednie-otsosy-pripoya/">Средние</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="/catalog/payalnye-vanny-i-tigli/">Паяльные ванны и тигли</a>
                                            </li>
                                            <li><a href="/catalog/podstavki/">Подставки</a>
                                                <ul>
                                                    <li><a href="/catalog/derzhateli-zhalnasadok/">Держатели
                                                            жал/насадок</a></li>
                                                    <li><a href="/catalog/s-aktivnym-derzhatelem/">С активным
                                                            держателем</a></li>
                                                    <li><a href="/catalog/s-passivnym-derzhatelem/">С пассивным
                                                            держателем</a>
                                                        <ul>
                                                            <li><a href="/catalog/">Дымоулавливающие аксессуары</a></li>
                                                        </ul>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li><a href="/catalog/raskhodnye-materialy-dlya-payki/">Расходные материалы
                                                    для пайки</a>
                                                <ul>
                                                    <li><a href="/catalog/drugie-payalnye-aksessuary/">Другие паяльные
                                                            аксессуары</a></li>
                                                    <li><a href="/catalog/drugie-payalnye-raskhodnye-materialy/">Другие
                                                            паяльные расходные материалы</a></li>
                                                    <li><a href="/catalog/raskhodnye-materialy-dlya-ochistki/">Расходные
                                                            материалы для очистки</a>
                                                        <ul>
                                                            <li><a href="/catalog/aktivatory-zhal/">Активаторы жал</a>
                                                            </li>
                                                            <li><a href="/catalog/ochistitelnaya-struzhka/">Очистительная
                                                                    стружка</a></li>
                                                        </ul>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li><a href="/catalog/temperaturnye-izmeriteli-kalibratory/">Температурные
                                                    измерители/ Калибраторы</a></li>
                                            <li><a href="/catalog/udliniteli/">Удлинители</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="/catalog/zhalanakonechnikinasadki/">Жала/Наконечники/Насадки</a>
                                        <ul>
                                            <li><a href="/catalog/payalnye-zhala/">Паяльные жала</a>
                                                <ul>
                                                    <li><a href="/catalog/seriya-et/">Серия ET</a></li>
                                                    <li><a href="/catalog/seriya-lt/">Серия LT</a></li>
                                                    <li><a href="/catalog/seriya-lht/">Серия LHT</a></li>
                                                    <li><a href="/catalog/seriya-xt/">Серия XT</a></li>
                                                    <li><a href="/catalog/seriya-xnt/">Серия XNT</a></li>
                                                    <li><a href="/catalog/seriya-xtr/">Серия XTR</a></li>
                                                    <li><a href="/catalog/seriya-rt/">Серия RT</a></li>
                                                    <li><a href="/catalog/seriya-ht/">Серия HT</a></li>
                                                    <li><a href="/catalog/seriya-nt/">Серия NT</a></li>
                                                    <li><a href="/catalog/seriya-pt/">Серия PT</a></li>
                                                    <li><a href="/catalog/seriya-mt/">Серия MT</a></li>
                                                    <li><a href="/catalog/seriya-spi/">Серия SPI</a></li>
                                                    <li><a href="/catalog/seriya-ct/">Серия CT</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="/catalog/payalnye-zhala-dlya-pintsetov/">Паяльные жала для
                                                    пинцетов</a>
                                                <ul>
                                                    <li><a href="/catalog/weller-micro-tools-seriya/">Weller Micro Tools
                                                            серия</a></li>
                                                    <li><a href="/catalog/wta-seriya/">WTA серия</a>
                                                        <ul>
                                                            <li><a href="/catalog/izmeritelnye-nasadki/">Измерительные
                                                                    насадки</a></li>
                                                            <li><a href="/catalog/konicheskie-izognutye-nasadki/">Конические
                                                                    изогнутые насадки</a></li>
                                                        </ul>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li><a href="/catalog/dlya-vypayki-i-udaleniya-pripoya/">Для выпайки и
                                                    удаления припоя</a>
                                                <ul>
                                                    <li><a href="/catalog/csf-golovki/">CSF головки</a>
                                                        <ul>
                                                            <li><a href="/catalog/plcc-korpusy/">PLCC корпусы</a></li>
                                                            <li><a href="/catalog/qfp-korpusy/">QFP корпусы</a></li>
                                                            <li><a href="/catalog/s0-korpusy/">S0 корпусы</a></li>
                                                            <li><a href="/catalog/soj-korpusy/">SOJ корпусы</a></li>
                                                            <li><a href="/catalog/adaptery-dlya-zhal/">Адаптеры для
                                                                    жал</a></li>
                                                            <li><a href="/catalog/rezinovye-vtulki/">Резиновые
                                                                    втулки</a></li>
                                                        </ul>
                                                    </li>
                                                    <li><a href="/catalog/ds-nasadki/">DS насадки</a></li>
                                                    <li><a href="/catalog/dx-nasadki/">DX насадки</a></li>
                                                    <li><a href="/catalog/xds-nasadki/">XDS насадки</a></li>
                                                    <li><a href="/catalog/xdsl-nasadki/">XDSL насадки</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="/catalog/zhala-dlya-gazovykh-payalnikov/">Жала для газовых
                                                    паяльников</a>
                                                <ul>
                                                    <li><a href="/catalog/pyropen/">Pyropen</a>
                                                        <ul>
                                                            <li><a href="/catalog/v-forme-igly-pyropen/">В форме
                                                                    иглы</a></li>
                                                            <li><a href="/catalog/v-forme-reztsa-pyropen/">В форме
                                                                    резца</a></li>
                                                            <li><a href="/catalog/zashchitnye-kolpachki-pyropen/">Защитные
                                                                    колпачки</a></li>
                                                            <li><a href="/catalog/kruglye-pyropen/">Круглые</a></li>
                                                            <li><a href="/catalog/ezhektory/">Эжекторы</a></li>
                                                        </ul>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li><a href="/catalog/nasadki-dlya-termofenov/">Насадки для термофенов</a>
                                                <ul>
                                                    <li><a href="/catalog/dlya-hap1-hap200-wxhap200/">Для HAP1, HAP200,
                                                            WXHAP200</a>
                                                        <ul>
                                                            <li><a href="/catalog/dvoynye-nasadki-hap1/">Двойные
                                                                    насадки</a></li>
                                                            <li><a href="/catalog/izmeritelnye-zhala-hap1/">Измерительные
                                                                    жала</a></li>
                                                            <li><a href="/catalog/kruglye-nasadki-hap1/">Круглые
                                                                    насадки</a></li>
                                                            <li><a href="/catalog/ploskie-nasadki-hap1/">Плоские
                                                                    насадки</a></li>
                                                            <li><a
                                                                        href="/catalog/s-plastinoy-predvaritelnogo-nagreva-2kh-storonniy/">С
                                                                    пластиной предварительного нагрева (2-х
                                                                    сторонний)</a></li>
                                                            <li><a
                                                                        href="/catalog/s-plastinoy-predvaritelnogo-nagreva-4kh-storonniy/">С
                                                                    пластиной предварительного нагрева (4-х
                                                                    сторонний)</a></li>
                                                        </ul>
                                                    </li>
                                                    <li><a href="/catalog/dlya-wha900-wha3000-hap2-hap3/">Для WHA900,
                                                            WHA3000, HAP2, HAP3</a>
                                                        <ul>
                                                            <li><a href="/catalog/standartnye-kruglye-whap900/">Стандартные
                                                                    круглые</a></li>
                                                            <li><a href="/catalog/dvukhstoronniy-nagrev-whap900/">Двухсторонний
                                                                    нагрев</a></li>
                                                            <li><a
                                                                        href="/catalog/s-chetyrekhstoronnim-nagrevom-whap900/">С
                                                                    четырехсторонним нагревом</a></li>
                                                            <li><a href="/catalog/spetsialnye-whap900/">Специальные</a>
                                                            </li>
                                                        </ul>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li><a href="/catalog/payalnye-golovki/">Паяльные головки</a></li>
                                            <li><a href="/catalog/barreli-dlya-payalnikov/">Баррели для паяльников</a>
                                            </li>
                                            <li><a href="/catalog/doziruyushchie-igly/">Дозирующие иглы</a>
                                                <ul>
                                                    <li><a href="/catalog/kds/">KDS</a>
                                                        <ul>
                                                            <li><a href="/catalog/doziruyushchie-igly-kds/">Дозирующие
                                                                    иглы</a></li>
                                                        </ul>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li><a href="/catalog/termonozhi-dlya-zachistki-provodov/">Термоножи для
                                                    зачистки проводов</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="/catalog/doziruyushchie-sistemy/">Дозирующие системы</a>
                                        <ul>
                                            <li><a href="/catalog/aksessuary-dlya-dozatorov/">Аксессуары для
                                                    дозаторов</a>
                                                <ul>
                                                    <li><a href="/catalog/metallicheskie-nakonechniki/">Металлические
                                                            наконечники</a></li>
                                                    <li><a href="/catalog/plastikovye-igly-dlya-dozatora/">Пластиковые
                                                            иглы для дозатора</a></li>
                                                    <li><a href="/catalog/shpritsevye-nakonechniki/">Шприцевые
                                                            наконечники</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="/catalog/vakuumnye-pintsety-doziruyushie/">Вакуумные
                                                    пинцеты</a></li>
                                            <li><a href="/catalog/dozatory/">Дозаторы</a></li>
                                            <li><a href="/catalog/prochie-aksessuary/">Прочие аксессуары</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="/catalog/payalnye-materialy/">Паяльные материалы</a>
                                        <ul>
                                            <li><a href="/catalog/bessvintsovyy-pripoy-/">Бессвинцовый припой </a></li>
                                            <li><a href="/catalog/opletka-dlya-vypayki/">Оплетка для выпайки</a></li>
                                            <li><a href="/catalog/svintsovyy-pripoy/">Свинцовый припой</a></li>
                                            <li><a href="/catalog/flyusy-dlya-payki/">Флюсы для пайки</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li class="active">
                                <a href="/catalog/prof-seriya-sugon/">Профессиональная серия Sugon</a>
                                <ul>
                                    <li><a href="/catalog/payalnye-stantsii-red/">Паяльные станции</a></li>
                                    <li><a href="/catalog/setevye-payalniki-red/">Термовоздушные паяльные станции</a>
                                    </li>
                                    <li><a href="/catalog/akkumulyatornye-i-gazovye-payalniki/">Паяльники</a></li>
                                    <li><a href="/catalog/payalnye-nakonechniki/">Наконечники</a></li>
                                    <li><a href="/catalog/payalnye-materialy-red/">Аксессуары для пайки</a></li>
                                </ul>
                            </li>
                            <li><a href="/catalog/dymoudalenie-i-filtratsiya/">Дымоудаление и фильтрация Weller</a>
                                <ul>
                                    <li><a href="/catalog/dymoulavlivayushchie-sistemy/">Дымоулавливающие системы</a>
                                        <ul>
                                            <li><a href="/catalog/mg-130/">MG 130</a></li>
                                            <li><a href="/catalog/mg-100s/">MG 100S</a></li>
                                            <li><a href="/catalog/zero-smog-2/">Zero smog 2</a></li>
                                            <li><a href="/catalog/zero-smog-4v/">Zero Smog 4V</a></li>
                                            <li><a href="/catalog/zero-smog-6v/">Zero Smog 6V</a></li>
                                            <li><a href="/catalog/aksessuary-dymoulavlivayushie/">Аксессуары</a>
                                                <ul>
                                                    <li><a href="/catalog/vytyazhnye-rukava/">Вытяжные рукава</a></li>
                                                    <li><a href="/catalog/sistema-truboprovodov-dymoudaleniya-75/">Система
                                                            трубопроводов дымоудаления 75</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="/catalog/aksessuary-dlya-ustanovki/">Аксессуары для
                                                    установки</a></li>
                                            <li><a href="/catalog/dymoudalenie-dlya-lazernoy-gravirovki/">Дымоудаление
                                                    для лазерной гравировки</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="/catalog/vytyazhnye-nakonechniki/">Вытяжные наконечники</a>
                                        <ul>
                                            <li><a href="/catalog/aksessuary-nakonechniki/">Аксессуары</a></li>
                                            <li><a href="/catalog/dymoudalyayushchie-sistemy/">Дымоудаляющие системы</a>
                                            </li>
                                            <li><a href="/catalog/payalniki-s-dymoulavlivatelem-1/">Паяльники с
                                                    дымоулавливателем</a>
                                                <ul>
                                                    <li><a
                                                                href="/catalog/prisposobleniya-i-aksessuary-dlya-dymoudaleniya/">Приспособления
                                                            и аксессуары для дымоудаления</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="/catalog/sistemy-truboprovodov-dymoudaleniya-50/">Системы
                                                    трубопроводов дымоудаления 50</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="/catalog/aksessuary-dlya-filtratsii/">Аксессуары для фильтрации</a>
                                        <ul>
                                            <li><a href="/catalog/vytyazhnye-nakonechniki-filter/">Вытяжные
                                                    наконечники</a>
                                                <ul>
                                                    <li><a href="/catalog/kartridzhi-dlya-dymoudaleniya/">Картриджи для
                                                            дымоудаления</a></li>
                                                    <li><a href="/catalog/kondensatsionnye-filtry/">Конденсационные
                                                            фильтры</a></li>
                                                    <li><a href="/catalog/filtry-melkikh-chastits/">Фильтры мелких
                                                            частиц</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="/catalog/dymoulavlivayushchie-sistemy-filter/">Дымоулавливающие
                                                    системы</a>
                                                <ul>
                                                    <li><a href="/catalog/kartridzhi-dlya-dymoudaleniya-filter/">Картриджи
                                                            для дымоудаления</a></li>
                                                    <li><a href="/catalog/filtry-zhidkogo-flyusa/">Фильтры жидкого
                                                            флюса</a></li>
                                                    <li><a href="/catalog/filtry-karmannogo-tipa/">Фильтры карманного
                                                            типа</a></li>
                                                    <li><a href="/catalog/filtry-melkikh-chastits-filter/">Фильтры
                                                            мелких частиц</a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li><a href="/catalog/ruchnoy-instrument/">Ручной инструмент Weller серии Erem </a>
                                <ul>
                                    <li><a href="/catalog/kusachki/">Бокорезы и кусачки</a>
                                        <ul>
                                            <li><a href="/catalog/kusachki-iz-karbidafolframa/">Кусачки из
                                                    Карбида-Фольфрама</a></li>
                                            <li><a href="/catalog/kusachki-s-fiksirovannoy-dlinoy-reza/">Кусачки с
                                                    фиксированной длиной реза</a></li>
                                            <li><a href="/catalog/pnevmaticheskie-kusachki/">Пневматические кусачки</a>
                                            </li>
                                            <li><a href="/catalog/seriya-2400-magicsense/">Серия 2400 MagicSense</a>
                                            </li>
                                            <li><a href="/catalog/seriya-500-medium/">Серия 500 Medium</a></li>
                                            <li><a href="/catalog/seriya-600-mikro/">Серия 600 Micro</a></li>
                                            <li><a href="/catalog/seriya-800-maxi/">Серия 800 Maxi</a></li>
                                            <li><a href="/catalog/seriya-special/">Серия Special</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="/catalog/vakuumnye-manipulyatory/">Вакуумные манипуляторы</a>
                                        <ul>
                                            <li><a href="/catalog/aksessuary-dlya-vakuumnykh-korpusov/">Аксессуары для
                                                    вакуумных корпусов</a>
                                                <ul>
                                                    <li><a href="/catalog/adaptery-vacuumnie/">Адаптеры</a></li>
                                                    <li><a href="/catalog/vakuumnye-chashi/">Вакуумные чаши</a></li>
                                                    <li><a href="/catalog/naklonnye-vsasyvayushchie-nasadki/">Наклонные
                                                            всасывающие насадки</a></li>
                                                    <li><a href="/catalog/pryamye-vsasyvayushchie-nasadki/">Прямые
                                                            всасывающие насадки</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="/catalog/vakuumnye-korpusa/">Вакуумные корпуса</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="/catalog/pintsety/">Пинцеты</a>
                                        <ul>
                                            <li><a href="/catalog/smd-pintsety/">SMD пинцеты</a>
                                                <ul>
                                                    <li><a href="/catalog/izognutye-smd-pintsety/">Изогнутые</a></li>
                                                    <li><a href="/catalog/nabory-smd-pintsety/">Наборы</a></li>
                                                    <li><a href="/catalog/pryamye-smd-pintsety/">Прямые</a></li>
                                                    <li><a href="/catalog/pryamye-oblegchennye-smd-pintsety/">Прямые
                                                            облегченные</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="/catalog/nabory-pintsetov-s-keysom/">Наборы пинцетов с
                                                    кейсом</a></li>
                                            <li><a href="/catalog/pintsety-dlya-zakhvata-vafel/">Пинцеты для захвата
                                                    &quot;вафель&quot;</a>
                                                <ul>
                                                    <li><a href="/catalog/wafer-tips/">Wafer Tips</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="/catalog/pintsety-dlya-zachistki/">Пинцеты для зачистки</a>
                                                <ul>
                                                    <li><a href="/catalog/obratnogo-deystviya/">Обратного действия</a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li><a href="/catalog/pretsizionnye-pintsety-/">Прецизионные пинцеты</a>
                                                <ul>
                                                    <li><a href="/catalog/ostrye-zagnutye-kontsy/">Острые загнутые
                                                            концы</a></li>
                                                    <li><a href="/catalog/ploskie-zakruglennye-kontsy/">Плоские
                                                            закругленные концы</a></li>
                                                    <li><a href="/catalog/pryamye/">Прямые</a></li>
                                                    <li><a href="/catalog/pryamye-oblegchennye/">Прямые облегченные</a>
                                                    </li>
                                                    <li><a href="/catalog/smennye-nozhi/">Сменные ножи</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="/catalog/rezhushchie-pintsety/">Режущие пинцеты</a></li>
                                            <li><a href="/catalog/fiksiruyushchie-pintsety/">Фиксирующие пинцеты</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li><a href="/catalog/ploskogubtsy/">Плоскогубцы</a>
                                        <ul>
                                            <li><a href="/catalog/naklonnye-kusachki/">Наклонные кусачки</a>
                                                <ul>
                                                    <li><a href="/catalog/heating-plate-stations/">Heating Plate
                                                            Stations</a></li>
                                                    <li><a href="/catalog/nabor-dlya-vypayki-wrk/">Набор для выпайки
                                                            WRK</a></li>
                                                    <li><a href="/catalog/ploskogubtsy-dlya-rezki-/">Плоскогубцы для
                                                            резки</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="/catalog/spetsialnye-kusachki/">Специальные кусачки</a>
                                                <ul>
                                                    <li><a href="/catalog/solid-joint-pliers/">Solid Joint Pliers</a>
                                                        <ul>
                                                            <li><a
                                                                        href="/catalog/ploskogubtsy-s-zakruglennymi-kontsami/">Плоскогубцы
                                                                    с закругленными концами</a></li>
                                                            <li><a href="/catalog/ploskogubtsy-s-ploskimi-kontsami/">Плоскогубцы
                                                                    с плоскими концами</a></li>
                                                            <li><a href="/catalog/formuyushchie-instrumenty/">Формующие
                                                                    инструменты</a></li>
                                                        </ul>
                                                    </li>
                                                    <li><a href="/catalog/bokorezy/">Бокорезы</a>
                                                        <ul>
                                                            <li><a href="/catalog/s-konicheskoy-golovkoy/">С конической
                                                                    головкой</a></li>
                                                            <li><a href="/catalog/s-ovalnoy-golovkoy/">С овальной
                                                                    головкой</a></li>
                                                        </ul>
                                                    </li>
                                                    <li><a href="/catalog/distantsionnye-kusachki/">Дистанционные
                                                            кусачки</a>
                                                        <ul>
                                                            <li><a href="/catalog/vertikalnye-kusochki/">Вертикальные
                                                                    кусочки</a></li>
                                                            <li><a href="/catalog/reguliruemaya-vysota-sreza/">Регулируемая
                                                                    высота среза</a></li>
                                                            <li><a href="/catalog/uglovoy-srez/">Угловой срез</a></li>
                                                        </ul>
                                                    </li>
                                                    <li><a href="/catalog/kusachki-/">Кусачки</a>
                                                        <ul>
                                                            <li><a href="/catalog/vertikalnye-kusachki/">Вертикальные
                                                                    кусачки</a></li>
                                                            <li><a href="/catalog/s-zaostrennoy-oblegchennoy-golovkoy/">С
                                                                    заостренной облегченной головкой</a></li>
                                                            <li><a
                                                                        href="/catalog/s-pryamoy-zaostrennoy-oblegchennoy-golovkoy/">С
                                                                    прямой заостренной облегченной головкой</a></li>
                                                            <li><a href="/catalog/s-uzkoy-uglovoy-golovkoy/">С узкой
                                                                    угловой головкой</a></li>
                                                            <li><a href="/catalog/s-shirokoy-uglovoy-golovkoy/">С
                                                                    широкой угловой головкой</a></li>
                                                        </ul>
                                                    </li>
                                                    <li><a href="/catalog/kusachki-dlya-snyatiya-izolyatsii-/">Кусачки
                                                            для снятия изоляции</a></li>
                                                    <li><a href="/catalog/kusachki-dlya-sreza/">Кусачки для среза</a>
                                                    </li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li><a href="/catalog/ruchnoy-instrument-xcelite/">Ручной инструмент Xcelite</a>
                                <ul>
                                    <li><a href="/catalog/nabory-instrumentov-xcelite/">Наборы инструментов Xcelite</a>
                                    </li>
                                    <li><a href="/catalog/pretsizionnye-nozhi-i-lezviya/">Прецизионные ножи и лезвия</a>
                                    </li>
                                </ul>
                            </li>
                        </ul>

                    </div>
                </div>

                <div class="col-xs-9">
                    <div class="catalog-weller_cart">
                        <div class="product item big">
                            <div class="title"><a
                                        href="#">Держатель
                                    WSRH 2 для жал серии XNT съёмный</a></div>
                            <div class="preview">
                                <a href="/catalog/payalnoe-oborudovanie/derzhatel-wsrh-2-dlya-zhal-serii-xnt-syemnyy.html">
                                    <img src="https://www.weller-tools.ru/upload/resize_cache/iblock/944/200_120_1/944579bc3bd5cef06ef0672a36aa60a9.jpg" alt="Держатель WSRH 2 для жал серии XNT съёмный"/>
                                </a>
                            </div>
                            <div class="info">
                                <div class="sku">Артикул: <strong>T0058768731N</strong></div>
                                <button class="btn price">Оставить заявку</button>
                                <div class="stock"><a href="#" class="question">Подробнее</a> </div>
                            </div>
                            <div class="specs">
                                Держатель наконечника. Подходит для: наконечников XNT, THM, XT, ET / PT;
                                XDS;
                                DX / DS соплами и соплами F / R / D / Q для горячего воздуха.
                            </div>
                            <div class="to-cart"><div class="to-cart_top"></div></div>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                    <div class="catalog-weller_cart">
                        <div class="product item big">
                            <div class="title"><a
                                        href="#">Держатель
                                    WSRH 2 для жал серии XNT съёмный</a></div>
                            <div class="preview">
                                <a href="/catalog/payalnoe-oborudovanie/derzhatel-wsrh-2-dlya-zhal-serii-xnt-syemnyy.html">
                                    <img src="https://www.weller-tools.ru/upload/resize_cache/iblock/944/200_120_1/944579bc3bd5cef06ef0672a36aa60a9.jpg" alt="Держатель WSRH 2 для жал серии XNT съёмный"/>
                                </a>
                            </div>
                            <div class="info">
                                <div class="sku">Артикул: <strong>T0058768731N</strong></div>
                                <button class="btn price">Оставить заявку</button>
                                <div class="stock"><a href="#" class="question">Подробнее</a> </div>
                            </div>
                            <div class="specs">
                                Держатель наконечника. Подходит для: наконечников XNT, THM, XT, ET / PT;
                                XDS;
                                DX / DS соплами и соплами F / R / D / Q для горячего воздуха.
                            </div>
                            <div class="to-cart"><div class="to-cart_top"></div></div>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                    <div class="catalog-weller_cart">
                        <div class="product item big">
                            <div class="title"><a
                                        href="#">Держатель
                                    WSRH 2 для жал серии XNT съёмный</a></div>
                            <div class="preview">
                                <a href="/catalog/payalnoe-oborudovanie/derzhatel-wsrh-2-dlya-zhal-serii-xnt-syemnyy.html">
                                    <img src="https://www.weller-tools.ru/upload/resize_cache/iblock/944/200_120_1/944579bc3bd5cef06ef0672a36aa60a9.jpg" alt="Держатель WSRH 2 для жал серии XNT съёмный"/>
                                </a>
                            </div>
                            <div class="info">
                                <div class="sku">Артикул: <strong>T0058768731N</strong></div>
                                <button class="btn price">Оставить заявку</button>
                                <div class="stock"><a href="#" class="question">Подробнее</a> </div>
                            </div>
                            <div class="specs">
                                Держатель наконечника. Подходит для: наконечников XNT, THM, XT, ET / PT;
                                XDS;
                                DX / DS соплами и соплами F / R / D / Q для горячего воздуха.
                            </div>
                            <div class="to-cart"><div class="to-cart_top"></div></div>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                    <div class="catalog-weller_cart">
                        <div class="product item big">
                            <div class="title"><a
                                        href="#">Держатель
                                    WSRH 2 для жал серии XNT съёмный</a></div>
                            <div class="preview">
                                <a href="/catalog/payalnoe-oborudovanie/derzhatel-wsrh-2-dlya-zhal-serii-xnt-syemnyy.html">
                                    <img src="https://www.weller-tools.ru/upload/resize_cache/iblock/944/200_120_1/944579bc3bd5cef06ef0672a36aa60a9.jpg" alt="Держатель WSRH 2 для жал серии XNT съёмный"/>
                                </a>
                            </div>
                            <div class="info">
                                <div class="sku">Артикул: <strong>T0058768731N</strong></div>
                                <button class="btn price">Оставить заявку</button>
                                <div class="stock"><a href="#" class="question">Подробнее</a> </div>
                            </div>
                            <div class="specs">
                                Держатель наконечника. Подходит для: наконечников XNT, THM, XT, ET / PT;
                                XDS;
                                DX / DS соплами и соплами F / R / D / Q для горячего воздуха.
                            </div>
                            <div class="to-cart"><div class="to-cart_top"></div></div>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                    <div class="catalog-weller_cart">
                        <div class="product item big">
                            <div class="title"><a
                                        href="#">Держатель
                                    WSRH 2 для жал серии XNT съёмный</a></div>
                            <div class="preview">
                                <a href="/catalog/payalnoe-oborudovanie/derzhatel-wsrh-2-dlya-zhal-serii-xnt-syemnyy.html">
                                    <img src="https://www.weller-tools.ru/upload/resize_cache/iblock/944/200_120_1/944579bc3bd5cef06ef0672a36aa60a9.jpg" alt="Держатель WSRH 2 для жал серии XNT съёмный"/>
                                </a>
                            </div>
                            <div class="info">
                                <div class="sku">Артикул: <strong>T0058768731N</strong></div>
                                <button class="btn price">Оставить заявку</button>
                                <div class="stock"><a href="#" class="question">Подробнее</a> </div>
                            </div>
                            <div class="specs">
                                Держатель наконечника. Подходит для: наконечников XNT, THM, XT, ET / PT;
                                XDS;
                                DX / DS соплами и соплами F / R / D / Q для горячего воздуха.
                            </div>
                            <div class="to-cart"><div class="to-cart_top"></div></div>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                    <div class="navigation">
                        <ul class="pagination">
                            <li class="active"><a
                                        href="/catalog/payalnoe-oborudovanie/?price_min=0&amp;price_max=77265">1</a>
                            </li>
                            <li><a
                                        href="/catalog/payalnoe-oborudovanie/?price_min=0&amp;price_max=77265&amp;PAGEN_1=2">2</a>
                            </li>
                            <li><a
                                        href="/catalog/payalnoe-oborudovanie/?price_min=0&amp;price_max=77265&amp;PAGEN_1=3">3</a>
                            </li>
                            <li><a
                                        href="/catalog/payalnoe-oborudovanie/?price_min=0&amp;price_max=77265&amp;PAGEN_1=4">4</a>
                            </li>
                            <li><a
                                        href="/catalog/payalnoe-oborudovanie/?price_min=0&amp;price_max=77265&amp;PAGEN_1=5">...</a>
                            </li>
                            <li>
                                <a href="/catalog/payalnoe-oborudovanie/?price_min=0&amp;price_max=77265&amp;PAGEN_1=79"
                                   aria-label="Next">
                                    <span aria-hidden="true">&raquo;</span>
                                </a>
                            </li>
                        </ul>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="content-page category-description">
        <div class="container">
            <div class="row">
                <div class="col-xs-6">
                    <div class="title">Паяльное оборудование Weller &trade; - залог высококачественной пайки</div>
                    Энергетически эффективные и профессиональные паяльные станции. Основными достоинствами паяльных
                    станций Weller &trade; является:
                    <ul>
                        <li> Автоматическая система распознания инструментов и загрузки параметров</li>
                        <li> Быстрая реакция и сохранение времени</li>
                        <li> Микропроцессор, управляемый системой контроля PID</li>
                        <li> Точная настройка температуры с шагом в один градус &deg;C</li>
                        <li> Не требует калибровки для другого паяльного оборудования Weller &trade;</li>
                    </ul>
                </div>
                <div class="col-xs-6">
                    <div class="title"><strong>Паяльные станции Weller &trade;</strong></div>
                    <p>Не требуют калибровки в силу того, что части нагревательных элементов Weller &trade;,
                        определяющие температуру, состоят из одного и того же материала и со временем не
                        меняются.<br/>Элементы электронного контроля выполнены из износостойких материалов.<br/>Все
                        паяльные станции адаптированы для работы как в промышленной так и в военное сфере, и прошли
                        комплекс мер по защите от разрядов статического электричества ESD (Electro Static Discharge)
                        <img src="https://www.weller-tools.ru/upload/weller_img/Esd_geschuetzt_k_1.jpg" border="0"
                             width="28"
                             height="23"/><br/>Все паяльные станции Weller &trade; оборудованы разными возможностями
                        настройки.
                    </p>
                </div>
                <div class="col-xs-12">
                    <p>В нашем интернет-магазине вы можете <strong class="dark">купить паяльное оборудование</strong>
                        для высокоточной, профессиональной ручной пайки по выгодным ценам от производителя Weller
                        &trade;.</p>
                    <p><em class="dark">Оплатить заказ возможно безналичным платежом, электронными платежными системами
                            Yandex.money, Visa/MasterCard или квитанцией в Сбербанке. Осуществляем бесплатную доставку
                            по Москве при заказе свыше 5000 рублей, по России - свыше 15000 рублей. После заказа Наш
                            менеджер свяжется с Вами по оставленным контактам.</em></p>
                </div>
            </div>
        </div>
    </div>


</main>

<?php
get_template_part('/blocks/footer');
?>
