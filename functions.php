<?php

define('B_THEME_ROOT', get_template_directory_uri());
define('B_IMG_DIR', B_THEME_ROOT . '/assets/images');


add_action( 'wp_enqueue_scripts', 'strategy_assets' );
function strategy_assets()  {
    wp_enqueue_style( 'maincss', get_template_directory_uri() . '/assets/style/css/style.min.css');

    wp_enqueue_style( 'mediacss', get_template_directory_uri() . '/assets/style/css/media.min.css');

    wp_enqueue_style( 'normalizecss', get_template_directory_uri() . '/assets/style/css/normalize.css');

    wp_enqueue_script( 'script-splide', 'https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/js/splide.min.js', array(), '20151215', true);

    wp_enqueue_style( 'slidercss', 'https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/css/splide.min.css');

    wp_enqueue_script( 'script-all', get_template_directory_uri() . '/assets/js/main.js', array(), '20151215', true);

    wp_enqueue_script( 'script-intl', 'https://cdn.jsdelivr.net/npm/intl-tel-input@18.2.1/build/js/intlTelInput.min.js', array(), '20151215', true);


}

add_action('wp_ajax_callback_mail', 'callback_mail');
add_action('wp_ajax_nopriv_callback_mail', 'callback_mail');

function callback_mail() {
    $name = sanitize_text_field($_POST['name']);
    $email = sanitize_email($_POST['email']);
    $phone = sanitize_text_field($_POST['phone_end']);
    $work = sanitize_text_field($_POST['work']);


    $to = 'nikita.ursulenco@gmail.com';
    $subject = 'Subject';

    // Создание сообщения
    $message = "Имя: $name<br>";
    $message .= "Email: $email<br>";
    $message .= "Телефон: $phone<br>";
    $message .= "Тип работы: $work<br>";

    remove_all_filters( 'wp_mail_from' );
    remove_all_filters( 'wp_mail_from_name' );

    $headers = array(
		'From:' . $name . ' <' . $email . '>',
		'content-type: text/html',
	);

	// Отправка письма с прикрепленным изображением
    wp_mail($to, $subject, $message, $headers, $attachments);

    // Удаление временного файла изображения
    unlink($upload_path);

    wp_die();
}
