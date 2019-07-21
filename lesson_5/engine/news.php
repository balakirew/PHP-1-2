<?php


function getNews()// получаем массив данных из таблицы news столвцы news и date_create
{

	$sql = "SELECT * FROM news ORDER BY `news`.`date_create` DESC"; // SQL запрос

	return getAssocResult($sql); // записывает данные запроса в массив
}


function renderNews($news) // выводит новости по шаблону newsItem
{

	$newsContent = ''; // пустой буфер
	foreach ($news as $newsItem) { // проходит массив новостей
		if (empty($newsItem['image'])) { // проверка на соответсвие переменных
			$newsItem['image'] = 'img/no-image.jpeg'; // картинка новостей (статическая)
		}

		$newsContent .= render(TEMPLATES_DIR . 'newsItem.tpl', $newsItem); // заменяет фигурные скобки в шаблоне newsItem.tpl
	}
	return $newsContent; // возвращает картинку новости
}
