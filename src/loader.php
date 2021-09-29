<?php

if (phpversion() >= 5.6) {
    $ext = ['mysqli', 'sqlite3', 'PDO'];
    $i = 0;

    foreach ($ext as $extension) {
        if (in_array($extension, get_loaded_extensions())) {
            $i++;
        }
    }

    if ($i == 3) {
        require 'method/Method.php';
        require 'framework/Framework.php';
        require 'plugin/Plugin.php';
        require 'input/Input.php';
        require 'database/Database.php';
    } else {
        echo "Serveringizda mysqli, sqlite3, pdo yoqilmagan! Ushbu sozlamalar yoqilmagan bo'lsa bizning librarymiz ishlay olmaydi";
        exit;
    }
} else {
    echo "Php versiyangiz 5.6 dan kichik va bizning library buni qo'llamaydi";
    exit;
}
