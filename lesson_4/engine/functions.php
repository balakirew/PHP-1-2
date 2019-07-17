<?php


function render($file, $variables = [])
{
	if (!is_file($file)) {
		echo 'Template file "' . $file . '" not found';
		exit();
	}

	if (filesize($file) === 0) {
		echo 'Template file "' . $file . '" is empty';
		exit();
	}


	$templateContent = file_get_contents($file);

	foreach ($variables as $key => $value) {
		$key = '{{' . strtoupper($key) . '}}';

		$templateContent = str_replace($key, $value, $templateContent);
	}

	return $templateContent;
}


function createGallery($imgDir){
	$result = '';

	$images = scandir(WWW_DIR . $imgDir);

	foreach ($images as $image) {
		if (is_file(WWW_DIR . $imgDir . $image)) {
			$result .= render(TEMPLATES_DIR . 'gallery.tpl', [
				'src' => $imgDir . $image
			]);
		}
	}
	return $result;
}
