<?php

spl_autoload_register(function ($classname) {
    $classname = str_replace("\\", "/", $classname);
    $sections = array('.', 'services', 'controllers', 'models');
    foreach ($sections as $section) {
        $path = __DIR__ . '/' . $section . '/' . $classname . '.php';
        if (file_exists($path))
            require ($path);
    }
});
