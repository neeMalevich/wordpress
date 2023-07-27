<?php

add_action('wp_enqueue_scripts', 'theme_scripts');
function theme_scripts()
{
	wp_enqueue_style('autocomplete', 'https://cdn.jsdelivr.net/npm/@tarekraafat/autocomplete.js@10.2.7/dist/css/autoComplete.02.min.css');

	// in header
	wp_enqueue_script('autocomplete', 'https://unpkg.com/@tarekraafat/autocomplete.js@10.2.7/dist/autoComplete.min.js');
	wp_enqueue_script('cookies', get_template_directory_uri() . '/js/cookies.js');
	wp_enqueue_script('header-scripts', get_template_directory_uri() . '/js/header-scripts.js', ['jquery']);

	// in footer
	wp_enqueue_script('phone-mask', 'https://unpkg.com/imask', [], null, true);
	wp_enqueue_script('theme-plugins', get_template_directory_uri() . '/js/plugins.js', ['jquery'], null, true);
	wp_enqueue_script('theme-scripts', get_template_directory_uri() . '/js/scripts.js', ['theme-plugins', 'autocomplete'], null, true);
	wp_enqueue_script('map-api', 'https://maps.googleapis.com/maps/api/js?key=AIzaSyBHC4yVi2Es6UzGBiUJU-Ivf5qvIClTkjM&libraries=places&callback=initAutocomplete&language=ru&region=BY', ['theme-scripts', 'autocomplete'], null, true);
	wp_enqueue_script('map-plugins', get_template_directory_uri() . '/js/map-plugins.js', ['map-api', 'autocomplete'], null, true);
	wp_enqueue_script('map-listing', get_template_directory_uri() . '/js/map-listing.js', ['map-plugins'], filemtime(get_template_directory() . '/js/map-listing.js'), true);
	wp_enqueue_script('map-single', get_template_directory_uri() . '/js/map-single.js', ['map-api', 'autocomplete'], null, true);
}

add_action('template_redirect', function () {
	if (is_post_type_archive('sto') && isset($_COOKIE['location']) && $_COOKIE['location'] != 'none' && !isset($_GET['city'])) {
		wp_redirect('http://solidauto.loc/sto/?city=' . $_COOKIE['location']);
		exit;
	}
});

add_theme_support('post-thumbnails');

function my_acf_init()
{
	//acf_update_setting('google_api_key', 'AIzaSyDSFQhn_5cXpjdWmOOYeL74kEBjAJdujJg');
	acf_update_setting('google_api_key', 'AIzaSyDeOCMyRuUUIlE_v_YLt2GVg0to0QULre8');
}
add_action('acf/init', 'my_acf_init');

/* Disable WordPress Admin Bar for all users */
add_filter('show_admin_bar', '__return_false');

function nelio_140_char_excerpts($excerpt, $raw_excerpt)
{
	if (is_admin()) {
		return $excerpt;
	}
	if ('' !== $raw_excerpt) {
		return $excerpt;
	}
	$excerpt = mb_substr($excerpt, 0, 120) . '...';
	return $excerpt;
}
add_filter('wp_trim_excerpt', 'nelio_140_char_excerpts', 99, 2);

if (function_exists('add_image_size')) {
	add_image_size('slider-thumb', 400, 300, true); // Кадрирование изображения
}

function isMobileDevice()
{
	return preg_match("/(android|avantgo|blackberry|bolt|boost|cricket|docomo|fone|hiptop|mini|mobi|palm|phone|pie|tablet|up\.browser|up\.link|webos|wos)/i", $_SERVER["HTTP_USER_AGENT"]);
}

//Фильтр услуг (AJAX)
add_action('wp_ajax_service_search', 'service_search');
add_action('wp_ajax_nopriv_service_search', 'service_search');
function service_search()
{

	$terms = get_terms([
		'taxonomy' => 'service',
		'hide_empty' => false,
		'search' => $_POST['keyword'],
		'orderby' => 'meta_value_num',
		'meta_key' => 'ordering',
		'order' => 'DESC',
	]);

	$response = '<div id="service-cards">';

	if ($terms) {
		foreach ($terms as $term) {
			$icon_id = get_field('иконка', $term);
			$icon = wp_get_attachment_image_src($icon_id, 'full')[0];
			$response .= '<a href="' . $term->slug . '" class="service-card">';
			$response .=   '<img src="' . $icon . '" alt="">';
			$response .=    '<h4>' . $term->name . '</h4>';
			$response .= '</a>';
		}
		$response .= '</div>';

		if (count($terms) > 12) {
			$response .= '<div class="button-wrapper"><a id="loadmore" class="btn color2-bg">Показать еще</a></div>';
		} elseif ($_POST['mobile'] == 1 && count($terms) > 3) {
			$response .= '<div class="button-wrapper"><a id="loadmore" class="btn color2-bg">Показать еще</a></div>';
		}
	} else {
		$response .= 'Попробуйте изменить свой запрос!';
		$response .= '</div>';
	}


	echo $response;
	wp_die();
}


add_action('wp_ajax_review_filter', 'review_filter');
add_action('wp_ajax_nopriv_review_filter', 'review_filter');
function review_filter()
{
	$meta_query = ['relation' => 'AND'];

	if ($_POST['city']) {
		array_push($meta_query, ['key' => 'город', 'value' => $_POST['city']]);
	}

	if ($_POST['station']) {
		array_push($meta_query, ['key' => 'sto-review', 'value' => $_POST['station']]);
	}

	$args = [
		'post_type'   => 'review',
		'meta_query' => $meta_query,
	];
	$posts = get_posts($args);
	$response = '<script>var locations = [];</script>';

	if ($posts) {
		$prev_posts = [];
		foreach ($posts as $post) {
			$s = get_field('sto-review', $post->ID);

			if (!in_array($s, $prev_posts)) {
				$response .= '<script>';
				$response .= 'var listing = [';
				$response .=    'locationData("' . get_permalink($s) . '", "/wp-content/uploads/65.png", "' . get_the_title($s) . '", "' . get_field('адрес', $s) . '", "5", ' . get_field('phone', $s)[0]['номер'] . '), ' . get_field('карта', $s)['lat'] . ', ' . get_field('карта', $s)['lng'] . ', "", "/wp-content/uploads/group-64-2.png"';
				$response .= '];';
				$response .= 'locations.push(listing);';
				$response .= '</script>';
			}

			$args = [
				'person' => get_the_title($post->ID),
				'sto' => get_the_title($s),
				'review' => get_field('текст', $post->ID),
				'rating' => get_field('оценка', $post->ID),
				'link' => get_the_permalink($s),
				'class' => 'col-md-4',
			];
			$response .= get_template_part('template-parts/card', 'testimonial', $args);
			array_push($prev_posts, $s);
		}
		$response .= '<script>cardRaining2();</script>';
	} else {
		$response .= '<div class="empty-response">Отзывов ещё нет. Оставите первый?</div>';
	}

	$response .= '<script>';
	$response .= 	'jQuery(function($) {';
	$response .= 		'var map = document.getElementById("map-secondary");';
	$response .= 		'if (typeof(map) != "undefined" && map != null) {';
	$response .=			'google.maps.event.addDomListener(window, "load", mainMap(locations, "map-secondary"));';
	$response .=		'}';
	$response .=	'})';
	$response .= '</script>';

	echo $response;
	wp_die();
}

add_action('wp_ajax_vacancy_filter', 'vacancy_filter');
add_action('wp_ajax_nopriv_vacancy_filter', 'vacancy_filter');
function vacancy_filter()
{
	$meta_query = ['relation' => 'AND'];

	if ($_POST['city']) {
		array_push($meta_query, ['key' => 'город', 'value' => $_POST['city']]);
	}

	if ($_POST['station']) {
		array_push($meta_query, ['key' => 'sto-vacancy', 'value' => $_POST['station']]);
	}

	$args = [
		'post_type'   => 'vacancy',
		'meta_query' => $meta_query,
	];
	$posts = get_posts($args);
	$response = '<script>var locations = [];</script>';

	if ($posts) {
		$prev_posts = [];
		foreach ($posts as $post) {
			$s = get_field('sto-vacancy', $post->ID);

			if (!in_array($s, $prev_posts)) {
				$response .= '<script>';
				$response .= 'var listing = [';
				$response .= 'locationData("' . get_permalink($s) . '", "/wp-content/uploads/65.png", "' . get_the_title($s) . '", "' . get_field('адрес', $s) . '", "5", ' . get_field('phone', $s)[0]['номер'] . '), ' . get_field('карта', $s)['lat'] . ', ' . get_field('карта', $s)['lng'] . ', "", "/wp-content/uploads/group-64-2.png"';
				$response .= '];';
				$response .= 'locations.push(listing);';
				$response .= '</script>';
			}

			$args = [
				'person' => get_the_title($post->ID),
				'vacancy' => get_the_permalink($post->ID),
				'sto' => get_the_title($s),
				'city' => get_term(get_field('город', $s), 'city')->name,
				'text' => get_field('текст', $post->ID),
				'link' => get_the_permalink($s),
				'class' => 'col-md-4',
			];
			$response .= get_template_part('template-parts/card', 'vacancy', $args);
			array_push($prev_posts, $s);
		}
	} else {
		$response .= '<div class="empty-response">Вакансий на данный момент не найдено</div>';
	}

	$response .= '<script>';
	$response .= 	'jQuery(function($) {';
	$response .= 		'var map = document.getElementById("map-secondary");';
	$response .= 		'if (typeof(map) != "undefined" && map != null) {';
	$response .=			'google.maps.event.addDomListener(window, "load", mainMap(locations, "map-secondary"));';
	$response .=		'}';
	$response .=	'})';
	$response .= '</script>';

	echo $response;
	wp_die();
}


add_action('wp_ajax_front_login', 'front_login');
add_action('wp_ajax_nopriv_front_login', 'front_login');
function front_login()
{
	$user = wp_signon();
	$response = [];

	if (is_wp_error($user)) {
		$response['success'] = false;
		switch ($user->get_error_code()) {
			case 'incorrect_password':
				$response['msg'] = 'Неверный пароль!';
			case 'invalid_email':
				$response['msg'] = 'Неверный email!';
			default:
				$response['msg'] = 'Произошла ошибка!';
		}
	} else {
		$response['success'] = true;
		$response['msg'] = 'Вы успешно вошли в систему!';
	}
	echo json_encode($response);
	wp_die();
}

add_action('wp_ajax_add_review', 'add_review');
add_action('wp_ajax_nopriv_add_review', 'add_review');
function add_review()
{
	$response = [];
	$post_data = [
		'post_type'     => 'review',
		'post_title'    => $_POST['author'],
		'post_status'   => 'draft',
	];

	$post_id = wp_insert_post($post_data, true);

	if (is_wp_error($post_id)) {
		$response['msg'] = $post_id->get_error_message();
		$response['success'] = false;
	} else {
		$response['msg'] = 'Ваш отзыв будет добавлен!';
		$response['success'] = true;
		update_field('текст', $_POST['review'], $post_id);
		update_field('оценка',  $_POST['rating'], $post_id);
		update_field('город',  $_POST['city'], $post_id);
		update_field('sto-review',  $_POST['station'], $post_id);
		update_field('имя_автора',  $_POST['author'], $post_id);
		update_field('телефон_автора',  $_POST['phone'], $post_id);

		$multiple_to_recipients = array(
			'maxzeshut@gmail.com',
			'Karina.Geidarova@armtek.by'
		);

		$headers = 'From: Solid Auto Service <notification@solidauto.by>';
		$body = "Текст: " .  $_POST['review'] . " \r\n ";
		$body .= "Оценка: " .  $_POST['rating'] . " \r\n ";
		$body .= "Город: " .  $_POST['city'] . " \r\n ";
		$body .= "СТО: " .  $_POST['station_text'] . " \r\n ";
		$body .= "Имя автора: " .  $_POST['author'] . " \r\n ";
		$body .= "Телефон автора: " .  $_POST['phone'] . " \r\n ";
		$sent = wp_mail($multiple_to_recipients, 'solidauto.by: Новый отзыв на станцию "' .  $_POST['station_text'] . '"', $body, $headers);
	}
	echo json_encode($response);
	wp_die();
}

add_action('wp_ajax_add_appeal', 'add_appeal');
add_action('wp_ajax_nopriv_add_appeal', 'add_appeal');


function add_appeal()
{
	$response = [];

	$multiple_to_recipients = array(
		'maxzeshut@gmail.com',
		'cc@armtek.by'
	);

	$headers = 'From: Solid Auto Service <notification@solidauto.by>';
	$body = "Телефон: " .  $_POST['phone'] . " \r\n ";
	$body .= "Имя: " .  $_POST['client'] . " \r\n ";
	$body .= "Город: " .  $_POST['city'] . " \r\n ";
	$body .= "СТО: " .  $_POST['station'] . " \r\n ";

	if (!empty($_POST['service'])) {
		$body .= "Услуга: " .  $_POST['service'] . " \r\n ";
		$sent = wp_mail($multiple_to_recipients, 'solidauto.by: Заявка с формы заказа услуги "' .  $_POST['service'] . '"', $body, $headers);
	} elseif (!empty($_POST['promo'])) {
		$body .= "Акция: " .  $_POST['promo'] . " \r\n ";
		$sent = wp_mail($multiple_to_recipients, 'solidauto.by: Заявка с формы страницы акции "' .  $_POST['promo'] . '"', $body, $headers);
	}


	if ($sent) {
		$response['msg'] = 'Мы скоро Вам позвоним!';
		$response['success'] = true;
	} else {
		$response['msg'] = 'Произошла ошибка. Попробуйте ещё раз.';
		$response['success'] = false;
	}

	echo json_encode($response);
	wp_die();
}

add_action('wp_ajax_subscribe', 'subscribe');
add_action('wp_ajax_nopriv_subscribe', 'subscribe');
function subscribe()
{
	$response = [];

	$multiple_to_recipients = array(
		'maxzeshut@gmail.com',
		'Karina.Geidarova@armtek.by'
	);

	$headers = 'From: Solid Auto Service <notification@solidauto.by>';
	$body = "Email: " .  $_POST['email'];

	$sent = wp_mail($multiple_to_recipients, 'solidauto.by: Новый подписчик на рассылку', $body, $headers);

	if ($sent) {
		$response['msg'] = 'Вы успешно подписались на рассылку Solid Auto Service';
		$response['success'] = true;
	} else {
		$response['msg'] = 'Произошла ошибка. Попробуйте ещё раз.';
		$response['success'] = false;
	}

	echo json_encode($response);
	wp_die();
}

add_action('wp_ajax_send_cv', 'send_cv');
add_action('wp_ajax_nopriv_send_cv', 'send_cv');
function send_cv()
{
	$response = [];

	$multiple_to_recipients = array(
		'Evgeniy.Odinets@solidauto.by'
	);

	$headers = 'From: Solid Auto Service <notification@solidauto.by>';
	$body = "Вакансия: " .  $_POST['vacancy'];
	$body .= "Имя: " .  $_POST['name'];
	$body .= "Телефон: " .  $_POST['phone'];

	$sent = wp_mail($multiple_to_recipients, 'solidauto.by: Новый отклик на вакансию', $body, $headers);

	if ($sent) {
		$response['msg'] = 'Вы успешно откликнулись на вакансию Solid Auto Service';
		$response['success'] = true;
	} else {
		$response['msg'] = 'Произошла ошибка. Попробуйте ещё раз.';
		$response['success'] = false;
	}

	echo json_encode($response);
	wp_die();
}

// Регистрация меню услуг
add_action('after_setup_theme', 'theme_register_nav_menu');

function theme_register_nav_menu()
{
	register_nav_menu('main', 'Главное меню');
}