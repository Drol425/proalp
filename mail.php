<?php
if($_POST['set']){
		$author = $_POST['set'];
		$author = addslashes($author);
		$author = htmlspecialchars($author);
		$author = stripslashes($author);

		
		mail("admin@pro-alpinist.ru", "�����", $author);  
}
/*	$fp = fopen("counter.txt", "a"); // ��������� ���� � ������ ������ 
	$test = fwrite($fp, $author); // ������ � ����
	if ($test) echo '������ � ���� ������� ��������.';
	else echo '������ ��� ������ � ����.';
	fclose($fp); //�������� �����
*/
?>