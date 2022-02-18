<?php
include_once('./_common.php');

// 상품이 많을 경우 대비 설정변경
set_time_limit ( 0 );
ini_set('memory_limit', '100M');

if($_FILES['excelfile']['tmp_name']) {
	
    $file = $_FILES['excelfile']['tmp_name'];
    include_once(G5_LIB_PATH.'/Excel/reader.php');
    $data = new Spreadsheet_Excel_Reader();

    $data->setOutputEncoding('UTF-8');
    $data->read($file);

    error_reporting(E_ALL ^ E_NOTICE);
    $total_count = 0;

	$file = fopen('table_data/tb1.txt', 'w');
	
	
    for ($i = 4; $i <= $data->sheets[0]['numRows']; $i++) {
        $total_count++;
		$str = '';
        $j = 1;
        $str .= addslashes($data->sheets[0]['cells'][$i][$j++])."|";
        $str .= addslashes($data->sheets[0]['cells'][$i][$j++])."|";
        $str .= addslashes($data->sheets[0]['cells'][$i][$j++])."|";
        $str .= addslashes($data->sheets[0]['cells'][$i][$j++])."|";
        $str .= addslashes($data->sheets[0]['cells'][$i][$j++])."|";
        $str .= addslashes($data->sheets[0]['cells'][$i][$j++])."|";
        $str .= addslashes($data->sheets[0]['cells'][$i][$j++])."|";
        $str .= addslashes($data->sheets[0]['cells'][$i][$j++])."|";
        $str .= addslashes($data->sheets[0]['cells'][$i][$j++])."|";
        $str .= addslashes($data->sheets[0]['cells'][$i][$j++])."|";
        $str .= addslashes($data->sheets[0]['cells'][$i][$j++])."|";
        $str .= addslashes($data->sheets[0]['cells'][$i][$j++])."\n";
		fwrite($file, $str);
    }		
	fclose($file);
}
?>

<?php	
	$file_upload_msg = $total_count." 건이 정상 업로드 되었습니다";
    alert($file_upload_msg);
?>



