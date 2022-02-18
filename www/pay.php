<?php
include_once('./_common.php');
?>


<style>
.sub_full{width:100%; margin:0 auto;}
.sub_full .container{width:100%; margin:0 auto; max-width:1600px;}
.sub_full .content_table{width:100%; margin:0 auto; border-collapse: collapse; border-top:2px solid #6997ce;}
.sub_full .content_table thead{background:#f5f5f7; font-size:13px; height:100px; font-weight:400;}
.sub_full .content_table th{border-bottom:1px solid #e2e2e2;border-right:1px solid #e2e2e2;}
.sub_full .content_table td{border-bottom:1px solid #e2e2e2;border-right:1px solid #e2e2e2;}
.sub_full .set_btn2{width:auto; padding:11px 33px; background:#222; color:#fff; border-radius:20px; clear:both; display:block; margin-bottom:20px; text-align:center; }
.sub_full a{text-decoration:none;}
.sub_full tbody tr{font-size:13px; color:#000; text-align:center; letter-spacing:-0.5px; height:44px;}
.sub_full tbody tr:nth-child(odd){background:#f2f2f2;}
.set_btn{float:right; background:#ed6662; color:#fff; border-radius:5px; display:inline-block; padding:11px 22px;}
.del_btn {margin: 0 5px 0 0;padding: 2px 6px;background: maroon;color: snow;font-size: 12px;border-radius: 50%;cursor: pointer;}
.save_btn {margin: 10px 5px;padding: 4px 10px;background: forestgreen;color: snow;border: none;}
.add_btn {margin: 10px 5px;padding: 4px 10px;background: midnightblue;color: snow;border: none;}
.up_btn {margin: 0 5px 0 0;padding: 2px 6px;background: hotpink;color: snow;font-size: 8px;cursor: pointer;}
.down_btn {margin: 0 5px 0 0;padding: 2px 6px;background: indigo;color: snow;font-size: 8px;cursor: pointer;}
@media screen and (max-width: 1000px){
	.container{overflow-x:scroll;}	 
	 .sub_full .content_table{table-layout:fixed;}
	.sub_full .content_table th{width:150px;}
	.sub_full .content_table td{width:150px;}
}
</style>

<script  src="https://code.jquery.com/jquery-latest.min.js"></script>
<div class="sub_full">
	<div class="container">
	<?php // if ($is_admin): ?>
		<a href="<?php echo G5_URL?>/pay_set.php"><span class="set_btn2">설정하기</span></a>
	<?php // endif ?>
		<table class="content_table">
			<thead class="labels">
				<tr>
					<th rowspan="2">중분류</th>
					<th rowspan="2">소분류</th>
					<th colspan="2">진료비용항목</th>
					<th colspan="6">항목별 가격정보(단위: 원)</th>
					<th rowspan="2">특이사항</th>
					<th rowspan="2">최종변경일</th>
				</tr>
				<tr>
					<th>코드</th>
					<th>명칭</th>
					<th>구분</th>
					<th>비용</th>
					<th>최저비용</th>
					<th>최고비용</th>
					<th>치료재료대포함</th>
					<th>약제비포함</th>
				</tr>
			</thead>
			<?php
				$file = fopen('table_data/tb1.txt', 'r');
				$table_data = array();
				while ($row = fgets($file, 1024)) {
					$tmp = explode('|', $row);
					$table_data[] = $tmp;
				}
			?>
			<tbody>
				<?php foreach ($table_data as $idx => $row): ?>
					<tr>
						<th scope="row"><?=$row[0]?></th>
						<td class="data data1-1"><?=$row[1]?></td>
						<td class="data data1-2"><?=$row[2]?></td>
						<td class="data data1-3"><?=$row[3]?></td>
						<td class="data data1-4"><?=$row[4]?></td>
						<td class="data data1-5"><?=$row[5]?></td>
						<td class="data data1-6"><?=$row[6]?></td>
						<td class="data data1-7"><?=$row[7]?></td>
						<td class="data data1-8"><?=$row[8]?></td>
						<td class="data data1-9"><?=$row[9]?></td>
						<td class="data data1-10"><?=$row[10]?></td>
						<td class="data data1-11"><?=$row[11]?></td>
					</tr>
				<?php endforeach ?>
			</tbody>
		</table>
	</div>
</div><!---mn07_05-->