<?php

require_once __DIR__ . '/../config/config.php';


$variables = [
'title' => 'Главная страница',
	'h1' => 'Добро пожаловать',
	'content' => '<div class="privet"><img src="/img/1.jpg"></div>'
 ];
 $templateName = TEMPLATES_DIR . 'index.tpl';


 echo render($templateName, $variables);


