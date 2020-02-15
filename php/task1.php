<?php
$year = $_POST['year'];

if (is_numeric($year)) {
	if ($year % 4 == 0) {
		echo json_encode('ДА');		
	}
	else {
		echo json_encode('НЕТ');		
	}
}
else {
	echo json_encode('ОШИБКА ВО ВХОДНЫХ ДАННЫХ');	
}

exit;
?>
