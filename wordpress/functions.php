<?php

add_action( 'wp_enqueue_scripts', function()
{
    wp_enqueue_style( 'bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css');
    wp_enqueue_style( 'normalize',  get_template_directory_uri() . '/assets/css/normalize.css');
    wp_enqueue_style( 'main',  get_template_directory_uri() . '/assets/css/style.css');

    wp_deregister_script('jquery');
    wp_register_script('jquery', "https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js");

    wp_enqueue_script('jquery');
    wp_enqueue_script('bootstrap', "https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js", array(), 'null', true);
    wp_enqueue_script('animation', get_template_directory_uri() . "/assets/js/gsap-public/minified/gsap.min.js", array(), 'null', true);    
    wp_enqueue_script('map', "https://api-maps.yandex.ru/2.1/?apikey=723cc181-32f6-40d4-85df-5726d5a027e9&lang=ru_RU", array(), 'null', true);  
    wp_enqueue_script('main', get_template_directory_uri() . "/assets/js/scripts.js", array('jquery', 'animation'), 'null', true); 
    wp_localize_script('main', 'mainAjax', array(
        'ajaxUrl' => admin_url('admin-ajax.php?action=mail'),
    ));
});

add_theme_support('post-thumbnails');
add_theme_support('title-tag');
add_theme_support('custom-logo');

add_action('wp_ajax_data', 'get_data');

function get_data()
{
    if(isset($_GET['article'])) {
        $_GET['article'] = get_search_query_filter($_GET['article']);
        $client = new \SoapClient('https://api.forum-auto.ru/wsdl', ["exceptions" => false]);
        $result = $client->listGoods('493358_stroyzar', 'sAVDkrEbqd', $_GET['article']);
        if (is_soap_fault($result)) {
            http_response_code(404);
            echo "SOAP Fault: (faultcode: {$result->faultcode}, faultstring: {$result->faultstring}, detail: {$result->detail})";
        } else {
            http_response_code(200);
            echo json_encode($result, JSON_UNESCAPED_UNICODE);
            wp_die();
        }
    }
}

function clean_search_string(string $value)
{
    return preg_replace("/[^a-zA-Z0-9\s]/", '', $value);
}

function get_search_query_filter(string $value)
{
    return clean_search_string($value);
}

add_action('wp_ajax_mail', 'send_email');

function send_email()
{  
    if (isset($_POST['email']) && $_SERVER['REQUEST_METHOD'] == "POST") {
        $mail = filter_var(trim($_POST['email']), FILTER_SANITIZE_EMAIL);
        $subject = "Тестовое письмо";
        $message = 'Привет!';
        $headers = [
            "From" => "ct77688-wordpress-c7iyz.tw1.ru",
            "Reply-To" => "ct77688-wordpress-c7iyz.tw1.ru",
            "X-Mailer" => "PHP/" . phpversion(),
        ];
        mail($mail, $subject, $message, $headers);
        http_response_code(200);
        echo json_encode(['message' => "Сообщение отправлено"], JSON_UNESCAPED_UNICODE);
    } else {
        http_response_code(403);
        echo json_encode(['message' => "Сообщение не отправлено! Ошибка в заполнении полей формы"], JSON_UNESCAPED_UNICODE);
    }
    wp_die();
}
?>