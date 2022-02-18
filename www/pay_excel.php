<?php
include_once('./_common.php');
$g5['title'] = '비급여 일괄 등록';
include_once(G5_PATH.'/head.sub.php');
?>

<style>

.new_win {}
.new_win h1 {font-size:1.17em;padding:15px 20px;background:#fff;border-bottom:1px solid #ddd}
.new_win h2 {margin:0 20px 10px}
.new_win_ul {margin:-20px 0 20px 0;padding:0 0 0 20px;border-bottom:1px solid #515151;background:#484848;list-style:none;zoom:1}
.new_win_ul:after {display:block;visibility:hidden;clear:both;content:""}
.new_win_ul li {float:left;margin-left:-1px}

.new_win_ul a {display:block;padding:10px 10px 8px;border-right:1px solid #595959;border-left:1px solid #595959;color:#fff;font-family:dotum;font-weight:bold;text-decoration:none}


.new_win_desc {margin:0 }
.new_win .anchor {margin:0 0 5px}

.new_win .win_btn {clear:both;padding:10px;text-align:center} /* 새창용 */
.new_win .win_btn button {display:inline-block;padding:0 10px;height:30px;border:0;line-height:2em;cursor:pointer}
.new_win .win_btn input {padding:0 10px;height:30px;line-height:2em}
.new_win .win_btn a {display:inline-block;padding:0 10px;height:30px;background:#4b545e;color:#fff;vertical-align:middle;line-height:2.4em}
.new_win .win_btn a:focus, .new_win .win_btn a:hover {text-decoration:none}


.new_win .local_sch, .new_win .local_cmd, .new_win .local_desc01, .new_win .local_desc02, .new_win .local_ov {margin:10px}

.new_win_con{margin: 10px; background:#fff;padding:20px}
.new_win_con .table_form table th{width:120px}

/* 상품 일괄 등록 */
#excelfile_upload {margin:10px ;padding:20px;border:1px solid #e9e9e9;background:#fff}
#excelfile_upload label {font-weight:bold}
#excelfile_input {margin:0 0 20px;text-align:center}
#excelfile_result {margin:0 20px 20px;border-bottom:1px solid #e9e9e9;zoom:1}
#excelfile_result:after {display:block;visibility:hidden;clear:both;content:""}
#excelfile_result dt {clear:both;float:left;padding:10px 0;width:40%;font-weight:bold}
#excelfile_result dd {float:left;margin:0;padding:10px 0;width:60%}
#excelfile_result .result_done {color:#5d910b}
#excelfile_result .result_fail {color:#ff3061}

</style>

<div class="new_win">
    <h1><?php echo $g5['title']; ?></h1>

    <div class="local_desc01 local_desc">
        <p>
            엑셀파일을 이용하여 항목을 일괄등록할 수 있습니다.<br>
            형식은 <strong>비급여엑셀등록용 엑셀파일</strong>을 다운로드하여 항목 정보를 입력하시면 됩니다.<br>
            수정 완료 후 엑셀파일을 업로드하시면 항목이 일괄등록됩니다.<br>
            엑셀파일을 저장하실 때는 <strong>Excel 97 - 2003 통합문서 (*.xls)</strong> 로 저장하셔야 합니다.
        </p>

        <p>
            <a href="<?php echo G5_URL; ?>/pay_excel.xls">비급여엑셀등록용 엑셀파일 다운로드</a>
        </p>
    </div>

    <form name="fitemexcel" method="post" action="./pay_update.php" enctype="MULTIPART/FORM-DATA" autocomplete="off">

    <div id="excelfile_upload">
        <label for="excelfile">파일선택</label>
        <input type="file" name="excelfile" id="excelfile">
    </div>

    <div class="win_btn btn_confirm">
        <input type="submit" value="비급여 엑셀파일 등록" class="btn_submit btn">
        <button type="button" onclick="window.close();" class="btn_close btn">닫기</button>
    </div>

    </form>

</div>

<?php
include_once(G5_PATH.'/tail.sub.php');
?>