<?php

require 'config/Config.php';
require 'framework/Framework.php';
require 'method/Method.php';
require 'plugin/Plugin.php';
require 'update/Update.php';

if (in_array(['sqlite3', 'mysqli', 'pdo'], get_loaded_extensions())) {
    require 'database/Database.php';
}
