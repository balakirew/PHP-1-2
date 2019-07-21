<?php

function createConnection() // функция подключения к базе данных
{
	$db = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME); //mysqli_connect устанавливает соединение с БД
	mysqli_query($db, "SET CHARACTER SET 'utf8'"); //mysqli_query Выполняет запрос к базе данных, устанавливает кодировку UTF8
	return $db;
}

function execQuery($sql) // $sql - SQL запрос (SELECT * FROM ЧТО-ТО ТАМ)
{
	$db = createConnection(); // плюключаемся к БД

	$result = mysqli_query($db, $sql); // делаем SQL запрос к БД

	mysqli_close($db); // закрываем соединение
	return $result; // возвращаем полученные данные из запроса
}

function getAssocResult($sql) // $sql - SQL запрос (SELECT * FROM ЧТО-ТО ТАМ)
{
	$db = createConnection(); // плюключаемся к БД

	$result = mysqli_query($db, $sql); // делаем SQL запрос к БД

	$array_result = []; // создаём пустой массив
	while ($row = mysqli_fetch_assoc($result)) {  //Обрабатывает ряд результата запроса и возвращает ассоциативный массив (ключ - наз столб, знач - данные строки)
		$array_result[] = $row; // записывает данные запроса в массив
	}

	mysqli_close($db); // закрывает соединение с БД
	return $array_result; // возвращает массив данных по запросу SQL
}

function show($sql) // $sql - SQL запрос (SELECT * FROM ЧТО-ТО ТАМ)
{
	$result = getAssocResult($sql); // массив данных по определенному запросу
	if(empty($result)) { // определяет, установлена ли переменная
		return null;
	}
	return $result[0]; // возвращает конкретные данные массива по ключу
}

