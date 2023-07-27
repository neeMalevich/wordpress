<?php
/*
Template Name: Страница парсера
*/

get_template_part('/blocks/header')
?>

<?php

    require_once __DIR__ . '/phpQuery-onefile.php';

    function parser($url){
        $ch = curl_init($url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($ch, CURLOPT_HEADER, false);
        $result = curl_exec($ch);
        curl_close($ch);

        return $result;
    }

    $result = parser('https://www.weller-tools.ru/catalog/dymoulavlivayushchie-sistemy/?view=40&p_173_min=0&p_173_max=530&price_min=0&price_max=894200');

//    $pq = phpQuery::newDocument($result);
$pq = phpQuery::newDocumentHTML('<meta http-equiv="content-type" content="text/html; charset=utf-8" />'.$result);

    $arrLink = [];

    $listParamsProduct = $pq->find(".product .title a");
    foreach($listParamsProduct as $link) {
        $elemLink = pq($link);
        $arrLinks[] = "https://www.weller-tools.ru" . $elemLink->attr("href");
    }

    foreach($arrLinks as $link) {
        $result = parser($link);
//        $pq = phpQuery::newDocument($result);
        $pq = phpQuery::newDocumentHTML('<meta http-equiv="content-type" content="text/html; charset=utf-8" />'.$result);

        /* важные параметры для товара */
        $arrMainParams[] = [
            "url" => $link,
            'name' => $pq->find("h1")->text(),
            'img' => 'https://www.weller-tools.ru' . $pq->find(".preview a img")->attr("src"),
            'text' => $pq->find(".product-page .text")->text(),
            'sku' => $pq->find(".sku strong")->text(),
            'description' => $pq->find("#description")->text(),
//            'specs' => $pq->find("#specs")->html(),
//            'included' => $pq->find("#included")->html(),
        ];

        // /* получаем изображения */
        // $listImages = $pq->find(".preview a img");
        // foreach($listImages as $image) {
        //     $elemImage = pq($image);

        //     $arrListImages[] = $elemImage->attr("data-image");
        // }

        // $arrListProduct[] = [
        //     'id' => '123123',
        //     'listImages' => $arrListImages,
        //     'listMainParams' => $arrMainParams,
        // ];

    }


    $jsonDataProduct = json_encode($arrMainParams);
     debug($arrMainParams);
     file_put_contents("data_product.txt", $jsonDataProduct);

    // $data['css'] = array();
    // $entry = $doc->find
    // debug($elem);

?>

<?php
get_template_part('/blocks/footer');
?>