<?php

if (!defined('ABSPATH')) {
   exit;
}

use Carbon_Fields\Container;
use Carbon_Fields\Field;

Container::make('post_meta', 'Дополнительные поля')
    ->show_on_page(10)
    ->add_tab('Главный баннеры', [
        Field::make('image', 'banner_img', 'Фото баннера'),
        Field::make('text', 'banner_title', 'Заголовок'),
        Field::make('text', 'banner_text', 'Описание'),
        Field::make('text', 'banner_link', 'Ссылка на баннер'),
    ])
    ->add_tab('Дополнительные карточки', [
        Field::make('image', 'banner_img-1', 'Фото баннера 1')->set_width(50),
        Field::make('image', 'banner_img-2', 'Фото баннера 2')->set_width(50),
        Field::make('text', 'banner_title-1', 'Заголовок баннера 1')->set_width(50),
        Field::make('text', 'banner_title-2', 'Заголовок баннера 2')->set_width(50),
        Field::make('text', 'banner_text-1', 'Описание баннера 1')->set_width(50),
        Field::make('text', 'banner_text-2', 'Описание баннера 2')->set_width(50),
        Field::make('text', 'banner_link-1', 'Ссылка на баннер 1')->set_width(50),
        Field::make('text', 'banner_link-2', 'Ссылка на баннер 2')->set_width(50),
    ]);

Container::make('post_meta', 'Дополнительные поля')
    ->show_on_page(18)
    ->add_tab('Главный баннеры', [
        Field::make('image', 'banner_img', 'Фото баннера'),
        Field::make('text', 'banner_title', 'Заголовок'),
    ])
    ->add_tab('pdf документы', [
        Field::make('complex', 'document_item', 'Документы')
            ->set_layout( 'tabbed-horizontal' )
            ->add_fields([
                Field::make('text', 'document_sec-title', 'Заголовок секции'),
                Field::make('complex', 'document_attributes', 'Документы')
                    ->set_layout( 'tabbed-horizontal' )
                    ->add_fields([
                        Field::make('text', 'document_title', 'Заголовок документ'),
                        Field::make('file', 'document_file', 'Загрузить документ'),
                    ]),
            ]),
    ]);

Container::make( 'term_meta', 'Дополнительные поля' )
    ->where( 'term_taxonomy', '=', 'categories' ) // only show our new field for categories
    ->add_fields( array(
        Field::make( 'image', 'categories__img', 'Фото' )
            ->set_required( true ),
    ) );

Container::make( 'post_meta', 'Дополнительные поля' )
    ->where( 'post_type', '=', 'product' ) // only show our new field for categories
    ->add_fields( array(
        Field::make( 'text', 'product__link', 'Ссылка на продукт' )->set_required( true ),
    ) );