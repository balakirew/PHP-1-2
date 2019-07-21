<?php

require_once __DIR__ . '/../config/config.php';

$id = isset($_GET['id']) ? $_GET['id'] : false;

if (!$id) {
	echo "id не найден";
	exit();
}

echo render(TEMPLATES_DIR . 'index.tpl', [
	'title' => 'Какой-то сайт',
	'h1' => "Картинка $id",
	'content' => showImage($id)
]);