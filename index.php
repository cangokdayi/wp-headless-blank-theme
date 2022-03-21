<?php
    // determine the render method
    if(responseType == 'HTML') {
        include "html-template.php";
        exit;
    }

    header('HTTP/1.1 200 OK');
    header('Access-Control-Allow-Origin: *');
    header('Content-Type: application/json; charset=utf-8');

    $response = json_encode([
        'status' => '200 OK',
        'message' => 'Long live Rock \'N Roll',
        'headers' => apache_request_headers(), 
    ]);

    exit($response);