<?php
require_once __DIR__ . '/../config/config.php';

function getImages(){ // получает картинки
	$sql = "SELECT * FROM images ORDER BY views DESC"; // запрос на получение картинок и сорт по просмотрам
	return getAssocResult($sql); // возвращает массив данных по запросу SQL
}

function getImage($id){
	$sql = "SELECT * FROM images WHERE id = $id";
	return show($sql);
}

function updateViews($id, $views = false){
	$viewsString = $views ? (int)$views : "'views' + 1";
	$sql = "UPDATE 'images' SET 'vews' = $viewsString WHERE 'id' = $id";
	return execQuery($sql);
}



function createGallery() {  // создаёт галлерею картинок

	$result = ''; // пустой буфер
	$images = getImages(); // вызывается ф-я которая получает массив картинок

	foreach ($images as $image) {
		if(is_file(WWW_DIR . $image['url'])) { // проверка картинок, есть ли такой файл и если есть, то картинка добавляется в буфер из шаблона galleryItem
			$result .= render(TEMPLATES_DIR . 'galleryItem.tpl', $image); //$image - массив значений
		}
	}
	return $result; // возвращает готовый контент по шаблону
}

function showImage($id){
	$image = getImage($id);
	if (!$image) {
		return '404';
	}

	updateViews($id); 
	$image['views']++;
	
	return render(TEMPLATES_DIR . 'imagePage.tpl', $image);
}

