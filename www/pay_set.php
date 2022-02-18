<?php
include_once('./_common.php');
?>
<script src="https://code.jquery.com/jquery-latest.min.js"></script>
<script>
	$(document).ready(function() {
		$('html').on('click', '.del_btn', function() {
			if (!confirm('해당 데이터를 삭제합니다.')) {
				return false;
			}

			$(this).parents('tr').remove();
		});

		$('.add_btn').click(function() {
			var target = $(this).data('target');
			var html = "";
			html += '<tr class="table_row">';
			html += '<th class="data" scope="row">';
			html += '<span class="del_btn">X</span><span class="up_btn">up</span>&nbsp;<span class="down_btn">down</span><input type="text" size="8" value="">';
			html += '</th>';
			html += '<td class="data"><input type="text" size="6" value=""></td>';
			html += '<td class="data"><input type="text" size="6" value=""></td>';
			html += '<td class="data"><input type="text" size="6" value=""></td>';
			html += '<td class="data"><input type="text" size="6" value=""></td>';
			html += '<td class="data"><input type="text" size="6" value=""></td>';
			html += '<td class="data"><input type="text" size="6" value=""></td>';
			html += '<td class="data"><input type="text" size="6" value=""></td>';
			html += '<td class="data"><input type="text" size="6" value=""></td>';
			html += '<td class="data"><input type="text" size="6" value=""></td>';
			html += '<td class="data"><input type="text" size="6" value=""></td>';
			html += '<td class="data"><input type="text" size="6" value=""></td>';
			html += '</tr>';
			$('#'+target).append(html);
		});

		$('html').on('click', '.up_btn', function() {
			var thisRow = $(this).parent('th').parent('tr');
			var thisRowHtml = thisRow.html();
			var thisRowIdx = thisRow.index();
			var tableRow = thisRow.siblings('.table_row');
			var target = thisRow.parent('tbody').attr('id');

			if (thisRowIdx == 0) {
				console.log('up disable');
				return false;
			}

			var tmp = new Array();
			tableRow.each(function() {
				tmp.push($(this).html());
			});
			var tmp1 = tmp.slice(0, thisRowIdx - 1);
			var tmp2 = tmp.slice(thisRowIdx - 1);

			tmp1.push(thisRowHtml);
			var rows = tmp1.concat(tmp2);
			
			var html = '';
			for (var i = 0;i < rows.length;i++) {
				html += '<tr class="table_row">';
				html += rows[i];
				html += '</tr>';
			}

			$('#'+target).html(html);
		});

		$('html').on('click', '.down_btn', function() {
			var thisRow = $(this).parent('th').parent('tr');
			var thisRowHtml = thisRow.html();
			var thisRowIdx = thisRow.index();
			var tableRow = thisRow.siblings('.table_row');
			var target = thisRow.parent('tbody').attr('id');

			if (thisRowIdx > tableRow.length - 1) {
				console.log('down disable');
				return false;
			}

			var tmp = new Array();
			tableRow.each(function() {
				tmp.push($(this).html());
			});
			var tmp1 = tmp.slice(0, thisRowIdx + 1);
			var tmp2 = tmp.slice(thisRowIdx + 1);

			tmp1.push(thisRowHtml);
			var rows = tmp1.concat(tmp2);
			
			var html = '';
			for (var i = 0;i < rows.length;i++) {
				html += '<tr class="table_row">';
				html += rows[i];
				html += '</tr>';
			}

			$('#'+target).html(html);
		});

		$('.save_btn').click(function() {
			if (!confirm('변경사항을 저장합니다.')) {
				return false;
			}

			var data = new Array();
			var target = $(this).data('target');
			var table = $('#'+target);
			var tableRow = table.find('.table_row');
			tableRow.each(function() {
				var dataInput = $(this).find('.data');
				var tmp = new Array();
				dataInput.each(function() {
					tmp.push($(this).children('input').val());
				});
				data.push(tmp);
			});
			
			$.ajax({
				url: 'table_data/set_table_data.php',
				type: 'post',
				dataType: 'json',
				data: {
					table: target,
					data: data
				},
			})
			.done(function(r) {
				if (r) {
					alert('저장되었습니다.');
					location.reload();
				}
			});
		});
	});
</script>

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
.list_btn {margin: 10px 5px;padding: 4px 10px;background: red;color: snow;border: none; cursor:pointer;}
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

<div class="sub_full">
	<div class="container">
	<?php // if ($is_admin): ?>
		<a href="<?php echo G5_URL?>/pay_excel.php" onclick="return excelform(this.href);" target='_blank'><span class="set_btn2">항목 엑셀 업로드</span></a>
		<script>
		function excelform(url)
		{
			var opt = "width=600,height=250,left=10,top=10";
			window.open(url, "win_excel", opt);
			return false;
		}
		</script>
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
				<tbody id="tb1">
					<?php foreach ($table_data as $idx => $row): ?>
						<tr class="table_row">
							<th class="data" scope="row"><span class="del_btn">X</span><input type="text" size="8" value="<?=$row[0]?>"></th>
							<td class="data"><input type="text" size="8" value="<?=$row[1]?>"></td>
							<td class="data"><input type="text" size="8" value="<?=$row[2]?>"></td>
							<td class="data"><input type="text" size="6" value="<?=$row[3]?>"></td>
							<td class="data"><input type="text" size="6" value="<?=$row[4]?>"></td>
							<td class="data"><input type="text" size="3" value="<?=$row[5]?>"></td>
							<td class="data"><input type="text" size="3" value="<?=$row[6]?>"></td>
							<td class="data"><input type="text" size="3" value="<?=$row[7]?>"></td>
							<td class="data"><input type="text" size="3" value="<?=$row[8]?>"></td>
							<td class="data"><input type="text" size="3" value="<?=$row[9]?>"></td>
							<td class="data"><input type="text" size="3" value="<?=$row[10]?>"></td>
							<td class="data"><input type="text" size="3" value="<?=$row[11]?>"></td>
						</tr>
					<?php endforeach ?>
				</tbody>
			</table>
			<div class="btn_wrap">
				<input type="button" value="추가" class="add_btn" data-target="tb1">
				<input type="button" value="저장" class="save_btn" data-target="tb1">
				<a href="<?php echo G5_URL?>/pay.php"><input type="button" value="목록" class="list_btn"></a>
			</div>
		</div>
	</div><!---container--->
</div><!---mn07_05-->