<?php

define('SITE_DIR', __DIR__ . '/../'); // __DIR__  позволяет отобразить список файлов и подкаталогов для указанного каталога
define('CONFIG_DIR', SITE_DIR . 'config/');// путь к папке config/
define('DATA_DIR', SITE_DIR . 'data/');// путь к папке data/
define('ENGINE_DIR', SITE_DIR . 'engine/');// путь к папке engine/
define('WWW_DIR', SITE_DIR . 'public/');// путь к папке public/
define('TEMPLATES_DIR', SITE_DIR . 'templates/');// путь к папке templates/

define('IMG_DIR', 'img/'); // папка с картинками


define('DB_HOST', 'phplesson1'); // имея хоста (домен)
define('DB_USER', 'root'); // имя пользователя (админа)
define('DB_PASS', ''); // пароль
define('DB_NAME', 'geekbrains'); // имя бызы данных


require_once ENGINE_DIR . 'functions.php';  // подключение файла functions.php
require_once ENGINE_DIR . 'db.php'; // подключение файла db.php
require_once ENGINE_DIR . 'news.php'; // подключение файла news.php
require_once ENGINE_DIR . 'gallery.php'; // подключение файла news.php

