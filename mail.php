<?php
if($_POST['set']){
		$author = $_POST['set'];
		$author = addslashes($author);
		$author = htmlspecialchars($author);
		$author = stripslashes($author);

		
		mail("admin@pro-alpinist.ru", "Заказ", $author);  
}
/*	$fp = fopen("counter.txt", "a"); // Открываем файл в режиме записи 
	$test = fwrite($fp, $author); // Запись в файл
	if ($test) echo 'Данные в файл успешно занесены.';
	else echo 'Ошибка при записи в файл.';
	fclose($fp); //Закрытие файла
*/
?>