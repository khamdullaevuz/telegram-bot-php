<?php

if (phpversion() >= 5.6) {
    if (in_array('mysqli', get_loaded_extensions())) {
        require 'method/Method.php';
        require 'telegram/Telegram.php';
        require 'plugin/Plugin.php';
        require 'database/Database.php';
    } else {
        echo "Serveringizda php uchun mysqli yoqilmagan! Ushbu sozlamalar yoqilmagan bo'lsa bizning librarymiz ishlay olmaydi";
        exit;
    }
} else {
    echo "Php versiyangiz 5.6 dan kichik va bizning library buni qo'llamaydi";
    exit;
}
