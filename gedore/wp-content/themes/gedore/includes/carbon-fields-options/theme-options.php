<?php

if (!defined('ABSPATH')) {
   exit;
}

use Carbon_Fields\Container;
use Carbon_Fields\Field;

Container::make('theme_options', 'Настройки сайта')
   ->add_tab('Общие настройки', [
   ])
   ->add_tab('Шапка сайта', [
      Field::make('image', 'site_logo', 'Логотип'),
      Field::make('text', 'site_phone', 'Телефон 1')->set_width(50),
      Field::make('text', 'site_phone_digits', 'Телефон 1 без пробелов в формате: +799999999')->set_width(50),
      Field::make('text', 'site_phone-2', 'Телефон 2')->set_width(50),
      Field::make('text', 'site_phone_digits-2', 'Телефон 2 без пробелов в формате: +799999999')->set_width(50),
      Field::make('text', 'site_mail', 'Mail')
   ])
   ->add_tab('Подвал сайта', [
       Field::make('text', 'site_address', 'Адрес')->set_width(50),
       Field::make('text', 'site_address_link', 'Ссылка адреса на карте')->set_width(50),
       Field::make('text', 'site_phone_footer', 'Телефон 1')->set_width(50),
       Field::make('text', 'site_phone_footer_digits', 'Телефон 1 без пробелов в формате: +799999999')->set_width(50),
       Field::make('text', 'site_phone_footer-2', 'Телефон 2')->set_width(50),
       Field::make('text', 'site_phone_footer_digits-2', 'Телефон 2 без пробелов в формате: +799999999')->set_width(50),
       Field::make('text', 'site_phone_footer-3', 'Телефон 3')->set_width(50),
       Field::make('text', 'site_phone_footer_digits-3', 'Телефон 3 без пробелов в формате: +799999999')->set_width(50),
   ]);
