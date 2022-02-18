<?php
include_once('../common.php');

$table = $_POST['table'];
$data = $_POST['data'];

$file = fopen('./'.$table.'.txt', 'w');
foreach ($data as $idx => $row) {
	$str = '';
	foreach ($row as $idx => $value) {
		if ($idx != 0)
			$str .= '|';
		$str .= $value;
	}
	$str .= "\n";
	fwrite($file, $str);
}
$result = fclose($file);
$return = json_encode($result);
echo $return;
?>