<?php

if (phpversion() >= 7.1) {
    $ext = ['mysqli', 'sqlite3', 'PDO'];
    $i = 0;

    foreach ($ext as $extension) {
        if (in_array($extension, get_loaded_extensions())) {
            $i++;
        }
    }

    if ($i == 3) {
        require 'config/Config.php';
        require 'framework/Framework.php';
        require 'method/Method.php';
        require 'plugin/Plugin.php';
        require 'update/Update.php';
        require 'database/Database.php';
    } else {
        echo "Serveringizda mysqli, sqlite3, pdo yoqilmagan!";
        exit;
    }
} else {
    echo "Php versiyangiz 7.1 dan kichik va bizning framework buni qo'llamaydi";
    exit;
}
