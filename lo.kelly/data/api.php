<?php

include_once "../lib/php/function.php";

$output = [];
$data = json_decode(file_get_contents("php://input"));

//print_p($data);

switch($data->type) {
    case "product_all":
        $output['result'] = makeQuery(makeConn(),"SELECT * 
        FROM `products` 
        LIMIT 15");
    break;

    case "product_search":
        $output['result'] = makeQuery(makeConn(),"SELECT * 
        FROM `products` 
        WHERE
        lower (`name`) LIKE '%$data->search%' OR
        lower (`description`) LIKE '%$data->search%' OR
        lower (`category`) LIKE '%$data->search%'
        LIMIT 15");
    break;

    case "product_filter":
        $output['result'] = makeQuery(makeConn(),"SELECT * 
        FROM `products` 
        WHERE `$data->column` LIKE '$data->value'
        LIMIT 15");
    break;

    case "product_sort":
        $output['result'] = makeQuery(makeConn(),"SELECT * 
        FROM `products` 
        ORDER BY `$data->column` $data->dir
        LIMIT 15");
    break;

    default: $output['error'] = "No Valid Type";
}

echo json_encode($output,JSON_NUMERIC_CHECK|JSON_UNESCAPED_UNICODE);