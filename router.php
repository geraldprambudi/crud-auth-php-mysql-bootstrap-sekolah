<?php
    $request = $_SERVER['REQUEST_URI'];

    switch($request) {
        case '/':
            require __DIR__ . '/index.php';
            break;

        case '/list-siswa':
            require __DIR__ . '/siswa/list-siswa.php';
            break;
            
        default:
            http_response_code(404);
            require __DIR__ . '/404.php';
            break;
    }
?>