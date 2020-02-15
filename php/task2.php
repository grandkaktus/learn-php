<?php
$pref = $_POST['pref'];

if (trim($pref) == '' ) {
	echo json_encode('<li>Пустая строка</li>');	
	exit;
}
$arr = ['реализовать скрипт ', 'написать функцию', 'начинающиеся с указанного ', 'наиболее оптимальным образом', 'привет сосед', 'как дела', 'смотри за собой', 'будь осторожен', 'отправить ссылку ', 'функцию наиболее оптимальным ', 'парам-пам-пам'];

function search ($arr, $pref) {
	$pattern = '#^'.mb_strtolower($pref).'#';
	return preg_grep($pattern, $arr);
}
$new_arr = search($arr, $pref);

if (count($new_arr) != 0 ) {
	$to_return = '';
	foreach ($new_arr as $val) {
		$to_return .= '<li>' .$val. '</li>';
	}
	echo json_encode($to_return);		
}
else {
	echo json_encode('<li>Нет таких строк </li>');		
}

exit;
?>
