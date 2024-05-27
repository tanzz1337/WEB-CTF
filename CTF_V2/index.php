<?php
$request_uri = $_SERVER['REQUEST_URI'];

// Daftar file atau folder yang ada di root direktori situs Anda.
$existing_files = ['index.html','index.php','sytyle.css','style2.css']; // dan lain-lain

$found = false;
foreach ($existing_files as $file) {
    if (strpos($request_uri, $file) !== false) {
        $found = true;
        break;
    }
}

if (!$found) {
    header("HTTP/1.0 404 Not Found");
    include '404.html'; // path ke halaman 404 Anda
    exit();
}

// Kode untuk melayani file yang ada
