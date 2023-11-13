<?php

function clean_search_string(string $value): string|null
{
    return preg_replace("/[^a-zA-Z0-9\s]/", '', $value);
}

function get_search_query_filter(string $value): string|null
{
    return clean_search_string($value);
}

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
    }
}

