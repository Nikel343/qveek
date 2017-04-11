<?php

// Пути загрузки файлов
$path = 'uploads/';
$tmp_path = 'tmp/';
$base = 'http://localhost/qveek/mysite';
// Массив допустимых значений типа файла
$types = array('image/gif', 'image/png', 'image/jpeg','image/jpg');
// Максимальный размер файла
$size = 5000000;
$ext = array_pop(explode('.',$_FILES['image']['name']));
$named=($_FILES['image']['name']);
$newname = image.'_'.time().'_'.$named;

// Обработка запроса
if ($_SERVER['REQUEST_METHOD'] == 'POST')
{
	// Проверяем тип файла
	if (!in_array($_FILES['image']['type'], $types))
		die('Запрещённый тип файла.');

	// Проверяем размер файла
	if ($_FILES['image']['size'] > $size)
		die('Слишком большой размер файла.');

     
	// Загрузка файла и вывод сообщения
	if 
        (!@copy($_FILES['image']['tmp_name'], $path . $newname))
		echo 'Что-то пошло не так';
	else
		echo 'Ваша ссылка <br><br>'.$_SERVER['HTTP_HOST']. '/' . $path . $newname;
}
?>