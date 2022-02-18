<?php
include_once('../common.php');
//include_once(G5_SMS5_PATH.'/sms5.lib.php');
include_once(G5_LIB_PATH.'/icode.lms.lib.php'); 

function lmsSend($sHp, $rHp, $msg) {
    global $g5, $config;
    $rtn = "";
    try {
        $send_hp = str_replace("-","",$sHp); // - 제거 
        $recv_hp = str_replace("-","",$rHp); // - 제거 
        $strDest = array(); 
        $strDest[0] = $recv_hp; 
        $SMS = new LMS; // SMS 연결 
        $SMS->SMS_con($config['cf_icode_server_ip'], $config['cf_icode_id'], $config['cf_icode_pw'], '1'); 
		$SMS->Add($strDest, $send_hp, $config['cf_icode_id'], "", "", iconv("utf-8", "euc-kr", $msg), "", "1"); 
        $SMS->Send(); 
        $rtn = true;
    }
    catch(Exception $e) {
        alert("처리중 문제가 발생했습니다.".$e->getMessage());
        $rtn = false;
    }
    return $rtn;
}

$bo_table = 'damhadb';
$write_table = 'g5_write_'.$bo_table;
$wr_num = get_next_num($write_table);
$wr_reply = '';
$wr_name = $_POST['wr_name'];
$wr_1 = $_POST['wr_1'];
$wr_8 = $_POST['wr_8'];
$ca_name = $_POST['ca_name'];
$wr_content = $_POST['wr_content'];
$wr_subject = '빠른 상담신청이 접수되었습니다.';
$wr_password = get_encrypt_string('1234');
$wr_datetime = G5_TIME_YMDHIS;
$query = "
	INSERT into {$write_table}
	SET
		wr_num = '{$wr_num}',
		wr_reply = '{$wr_reply}',
		wr_comment = 0,
		ca_name = '{$ca_name}',
		wr_option = 'secret',
		wr_subject = '{$wr_subject}',
		wr_content = '{$wr_content}',
		wr_link1 = '',
		wr_link2 = '',
		wr_link1_hit = 0,
		wr_link2_hit = 0,
		wr_hit = 0,
		wr_good = 0,
		wr_nogood = 0,
		mb_id = '',
		wr_password = '{$wr_password}',
		wr_name = '$wr_name',
		wr_email = '',
		wr_homepage = '',
		wr_datetime = '".G5_TIME_YMDHIS."',
		wr_last = '".G5_TIME_YMDHIS."',
		wr_ip = '{$_SERVER['REMOTE_ADDR']}',
		wr_1 = '$wr_1',
		wr_8 = '$wr_8';
";
$result = sql_query($query);

$wr_id = sql_insert_id();
sql_query("UPDATE {$write_table} SET wr_parent = '{$wr_id}' WHERE wr_id = '{$wr_id}';");
sql_query("INSERT INTO {$g5['board_new_table']} ( bo_table, wr_id, wr_parent, bn_datetime, mb_id ) VALUES ( '{$bo_table}', '{$wr_id}', '{$wr_id}', '".G5_TIME_YMDHIS."', '{$member['mb_id']}' ) ");
sql_query("UPDATE {$g5['board_table']} SET bo_count_write = bo_count_write + 1 WHERE bo_table = '{$bo_table}'");

$return = array();
$return['result'] = $result;
		

$sms_content = "- 이름 : {$wr_name}\r\n-연락처 : {$wr_1}\r\n- 상담채널 : {$ca_name}\r\n- 내용\r\n{$wr_content}\r\n\r\n ".G5_BBS_URL."/board.php?bo_table=damhadb&wr_id={$wr_id}";  // 문자 내용 

$sHp = "0517570719"; // 발송번호

$rHp = "01029834744"; // 수신번호
$aa = lmsSend($sHp,$rHp,$sms_content);

$rHp = "01029087364"; // 수신번호
$aa = lmsSend($sHp,$rHp,$sms_content);

$rHp = "01033633966"; // 수신번호
$aa = lmsSend($sHp,$rHp,$sms_content);
/*
$SMS = new SMS; // SMS 연결
$SMS->SMS_con($config['cf_icode_server_ip'], $config['cf_icode_id'], $config['cf_icode_pw'], $config['cf_icode_server_port']);
$SMS->Add($recv_number, $send_number, $config['cf_icode_id'], iconv("utf-8", "euc-kr", stripslashes($sms_content)), "");
$SMS->Send();  
*/

echo json_encode($return);
?>

