<?php

remove_action('wp_head',             'print_emoji_detection_script', 7);
remove_action('admin_print_scripts', 'print_emoji_detection_script');
remove_action('wp_print_styles',     'print_emoji_styles');
remove_action('admin_print_styles',  'print_emoji_styles');

remove_action('wp_head', 'wp_resource_hints', 2); //remove dns-prefetch
remove_action('wp_head', 'wp_generator'); //remove meta name="generator"
remove_action('wp_head', 'wlwmanifest_link'); //remove wlwmanifest
remove_action('wp_head', 'rsd_link'); // remove EditURI
remove_action('wp_head', 'rest_output_link_wp_head'); // remove 'https://api.w.org/
remove_action('wp_head', 'rel_canonical'); //remove canonical
remove_action('wp_head', 'wp_shortlink_wp_head', 10); //remove shortlink
remove_action('wp_head', 'wp_oembed_add_discovery_links'); //remove alternate/**

add_action('wp_enqueue_scripts', 'site_scripts');
function site_scripts()
{
   wp_dequeue_style('wp-block-library');
   wp_dequeue_style('wp-block-library-theme');
   wp_deregister_script('hoverIntent');
   wp_dequeue_style('wc-block-style'); // Remove WooCommerce block CSS
   wp_dequeue_style('global-styles'); // Remove theme.json


   wp_enqueue_style('main-style', get_stylesheet_uri(), array(), '0.0.0.0');
   wp_enqueue_style('style-themes', get_template_directory_uri() . '/assets/css/app.min.css');
   wp_enqueue_script('js-themes', get_template_directory_uri() . '/assets/js/app.min.js', array(), '0.0.0.0', true);
   wp_enqueue_script('js-themes', get_template_directory_uri() . '/assets/js/map.js', array(), '0.0.0.0', true);
}

add_action('after_setup_theme', 'crb_load');
function crb_load()
{
   require_once('includes/carbon-fields/vendor/autoload.php');
   \Carbon_Fields\Carbon_Fields::boot();
}

add_action('carbon_fields_register_fields', 'register_carbon_fields');
function register_carbon_fields()
{
   require_once('includes/carbon-fields-options/theme-options.php');
   require_once('includes/carbon-fields-options/post-meta.php');
}

add_action('init', 'create_global_variable');
function create_global_variable()
{
   global $gedore_contact;
   $gedore_contact = [
       //header
      'phone' => carbon_get_theme_option('site_phone'),
      'phone_digits' => carbon_get_theme_option('site_phone_digits'),
      'phone-2' => carbon_get_theme_option('site_phone-2'),
      'phone_digits-2' => carbon_get_theme_option('site_phone_digits-2'),
      'mail' => carbon_get_theme_option('site_mail'),

       //footer
      'site_address' => carbon_get_theme_option('site_address'),
      'site_address_link' => carbon_get_theme_option('site_address_link'),
      'site_phone_footer' => carbon_get_theme_option('site_phone_footer'),
      'site_phone_footer_digits' => carbon_get_theme_option('site_phone_footer_digits'),
      'site_phone_footer-2' => carbon_get_theme_option('site_phone_footer-2'),
      'site_phone_footer_digits-2' => carbon_get_theme_option('site_phone_footer_digits-2'),
      'site_phone_footer-3' => carbon_get_theme_option('site_phone_footer-3'),
      'site_phone_footer_digits-3' => carbon_get_theme_option('site_phone_footer_digits-3'),
   ];
}

add_action('after_setup_theme', 'theme_support');
function theme_support()
{
   register_nav_menu('menu_main_header', 'Меню в шапке');
   add_theme_support( 'post-thumbnails' );
}

add_action('transition_post_status', 'publish_new_post', 10, 3);

function publish_new_post()
{
   delete_transient('category_list');
}


add_action('init', 'register_post_types');
function register_post_types()
{
   register_post_type('product', [
      'labels' => [
         'name'               => 'продукты', // основное название для типа записи
         'singular_name'      => 'продукты', // название для одной записи этого типа
         'add_new'            => 'Добавить продукты', // для добавления новой записи
         'add_new_item'       => 'Добавление продуктыа', // заголовка у вновь создаваемой записи в админ-панели.
         'edit_item'          => 'Редактирование продуктыа', // для редактирования типа записи
         'new_item'           => 'Новый продукты', // текст новой записи
         'view_item'          => 'Смотреть продукты', // для просмотра записи этого типа.
         'search_items'       => 'Искать продукты', // для поиска по этим типам записи
         'not_found'          => 'Не найдено', // если в результате поиска ничего не было найдено
         'not_found_in_trash' => 'Не найдено в корзине', // если не было найдено в корзине
         'parent_item_colon'  => '', // для родителей (у древовидных типов)
         'menu_name'          => 'продукты', // название меню
      ],
      'public'              => true,
      'menu_position'       => 5,
      'menu_icon'           => 'dashicons-building',
      'supports'            => array('title', 'thumbnail'), // 'title','editor','author','thumbnail','excerpt','trackbacks','custom-fields','comments','revisions','page-attributes','post-formats'
      'has_archive'         => true,
      'rewrite'             => ['slug' => 'products'],
      'query_var'           => true,
   ]);

   register_taxonomy('categories', 'product', [
      'labels'                => [
         'name'                        => 'Категории товаров',
         'singular_name'               => 'Категория товароа',
         'search_items'                =>  'Искать категории',
         'popular_items'               => 'Популярные категории',
         'all_items'                   => 'Все категории',
         'edit_item'                   => 'Изменить категорию',
         'update_item'                 => 'Обновить категорию',
         'add_new_item'                => 'Добавить новую категорию',
         'new_item_name'               => 'Новое название категории',
         'separate_items_with_commas'  => 'Отделить категории запятыми',
         'add_or_remove_items'         => 'Добавить или удалить категорию',
         'choose_from_most_used'       => 'Выбрать самую популярную категорию',
         'menu_name'                   => 'Категории',
      ],
      'hierarchical'                   => true,

   ]);
}

function debug($item){
    echo '<pre>';
    echo print_r($item);
    echo '</pre>';
}