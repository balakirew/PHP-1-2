<?php


function render($file, $variables = [])// заменяет фигурные скобки в файле на значения из массива
{
	if (!is_file($file)) { // is_file - Определяет, является ли файл обычным файлом
		echo 'Template file "' . $file . '" not found';
		exit();
	}

	if (filesize($file) === 0) { // возвращает размер файла
		echo 'Template file "' . $file . '" is empty';
		exit();
	}


	$templateContent = file_get_contents($file); //Читает содержимое файла в строку

	foreach ($variables as $key => $value) {
		if (!is_string($value)) {// is_string - определяет, является ли переменная строкой
			continue;
		}

		$key = '{{' . strtoupper($key) . '}}'; // Преобразует строку в верхний регистр
		$templateContent = str_replace($key, $value, $templateContent); // Заменяет строку поиска на строку замены
	}

	return $templateContent;
}


