<?php

require_once __DIR__ . '/../config/config.php';


echo render(TEMPLATES_DIR . 'index.tpl', [
	'title' => 'Галерея',
	'h1' => 'Лучшие картиночки',
	'content' => createGallery()
]);

