<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
$path = isset($_GET['q']) ? basename($_GET['q']) : '.';
if (file_exists($path)) {
    if (strpos($path, '.') === false) {
        print "<pre>";
        print_r(scandir($path));
        print "</pre>";
    } else {
        echo "Invalid path!";
    }
} else {
    echo "Directory does not exist!";
}
