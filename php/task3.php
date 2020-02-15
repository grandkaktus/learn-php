<?php
$smuzy = abs($_POST['smuzy']);
$hipsters = abs($_POST['hipsters']);

if (trim($hipsters) == '' || $hipsters == 0 ) {
	echo json_encode('Все смузи целы');	
	exit;
}
if (trim($smuzy) == '' || $smuzy == 0 ) {
	echo json_encode('Хипстеры не пьют, сидят грустные');	
	exit;
}

$calc = round( $smuzy / $hipsters, 1 );
echo json_encode($calc);		

exit;
?>
