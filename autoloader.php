<?php


spl_autoload_register(function ($class_name) {
    $file_path = 'classes/' . $class_name . '.class.php';
    if (file_exists($file_path)) {
        include $file_path;
    } else {
        throw new Exception("Unable to load $class_name.");
    }
});

