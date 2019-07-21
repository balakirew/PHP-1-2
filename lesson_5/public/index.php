<?php

require_once __DIR__ . '/../config/config.php';



$news = getNews();// вызов функии getNews, которая получаем массив данных из таблицы news столвцы news и date_create

echo render(TEMPLATES_DIR . 'index.tpl', [ // заменяет фигурные скобки в шаблоне index.tpl на значения ниже
	'title' => 'Главная',
	'h1' => 'Горячие новости',
	'content' => renderNews($news) //выводит новости по шаблону newsItem
]);