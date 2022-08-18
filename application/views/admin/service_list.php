<?php
	include_once dirname(__DIR__)."/admin/include/admin-header.php";
?>
<body class="bg-1">

	<!-- Wrap all page content here -->
	<div id="wrap">

	<!-- Make page fluid -->
		<div class="row">

		<!-- Fixed navbar -->
		<?php
			include_once dirname(__DIR__)."/admin/include/admin-top.php";
		?>
		<!-- Fixed navbar end -->

		<!-- Page content -->
		<div id="content" class="col-md-12">

		<!-- page header -->
			<div class="pageheader">
			<h2><i class="fa fa-puzzle-piece" style="line-height: 48px;padding-left: 5px;"></i> <b><?php echo $category->SC_CATEGORY_NAME?></b> <span></span></h2>
			<div class="breadcrumbs">
				<ol class="breadcrumb">
					<li>서비스 관리</li>
					<li class="active"><?php echo $category->SC_CATEGORY_NAME?></li>
				</ol>
			</div>

		</div>
		<!-- /page header -->

		<!-- content main container -->
		<div class="main">

			<div class="row">
				<!-- col 12 -->
				<div class="col-md-12">
                <!-- tile -->
					<section class="tile color transparent-black">
						<!-- tile body -->
						<div class="tile-body">
							<div style="float:right">
								<button type="button" class="btn btn-success btn-sm" onclick="showCreateModal()">서비스 등록</button>
								<!-- <a href="#inputModal" role="button" class="btn btn-success btn-sm" data-toggle="modal">뉴스 추가</a> -->
							</div>
							<div class="table-responsive">
								<table class="table table-datatable table-custom01 userTable">
									<thead>
										<tr>
											<th class="col-md-1 sort-numeric">#</th>
											<th class="col-md-3 sort">이미지 미리보기</th>
											<th class="col-md-1 sort">제목</th>
											<th class="col-md-3 sort">설명</th>
											<th class="col-md-1 sort">등록일</th>
											<th class="col-md-1 sort">작성자</th>
											<th class="col-md-1 sort">공개여부</th>
											<th class="col-md-2 sort">기능</th>
										</tr>
									</thead>
									<tbody>
										<?php 
										if($listCount > 0):
										foreach($lists as $lt):?>
										<tr>
											<td><?php echo $pagenum?></td>
											<td><img src="<?php echo $lt->SL_IMAGE_URL?>" style="width:570px; height:620px"></td>
											<td><?php echo $lt->SL_SUBJECT?></td>
											<td><?php echo $lt->SL_DESC?></td>
											<td><?php echo $lt->SL_REG_DATE?></td>
											<td><?php echo $lt->ADMIN_NAME?></td>
											<td><?php echo $lt->SL_DISPLAY_YN == "Y" ? "<span class=\"label label-success\">공개</span>" : "<span class=\"label label-slategray\">비공개</span>"?></td>
											<td>
											<button type="button" class="btn btn-xs btn-default" onclick="showModifyModal(<?php echo $lt->SL_SEQ?>)">수정</button>
											<button type="button" class="btn btn-xs btn-danger" onclick="deleteService(<?php echo $lt->SL_SEQ?>)">삭제</button>
											</td>
										</tr>
										<?php 
										$pagenum -= 1;	
										endforeach;
										else:
											echo "<tr><td colspan=8 style=\"text-align:center;padding:50px;\">게시글이 없습니다.</td></tr>";
										endif;
										?>
									</tbody>
								</table>

								<div class="row">
									<div class="col-md-4 sm-center">
												<div class="dataTables_info">
												<?php if ($listCount > 0) :
													$end = ($start+$limit)-1;
													if ($end > $listCount) $end = $listCount;
													if ($start == 0) $start = 1;
												?>
													전체 <?php echo $listCount; ?>개 중 <?php echo $listCount-$start; ?> - <?php echo $listCount-$end == 0 ? "1" : $listCount-$end ?>
												<?php endif; ?>
												</div>
											</div>
											<div class="col-md-4 text-center sm-center">
												<div class="dataTables_paginate paging_bootstrap paging_custombootstrap">
													<?php echo $pagination; ?>
												</div>
									</div>
								</div>
							</div>
                		</div>
                <!-- /tile body -->
                	</section>
                <!-- /tile -->
				</div>
			</div>
			<!-- /content container -->

		</div>
		<!-- Page content end -->

	</div>
	<!-- Make page fluid-->

	</div>
	<!-- Wrap all page content end -->

	<!-- Modal Area -->
	<div class="modal fade" id="inputModal" tabindex="-1" role="dialog" aria-labelledby="inputLabel" aria-hidden="true">
		<form id="recentlyForm">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<h3 class="modal-title" id="inputLabel"></h3>
				</div>
				<div class="modal-body">
					<form role="form" id="cateForm">
						<div class="form-group">
							<input type="hidden" name="cateSeq" value="<?php echo $category->SC_SEQ?>">
							<input type="hidden" name="slSeq">
							<input type="hidden" name="mode">
							<label for="file">이미지</label> <span>*이미지 사이즈 570 × 620 / 파일양식: GIF,JPG 혹은 PNG이미지 (용량 3MB미만)</span>
							<input type="file" class="form-control" name="file">
							<label for="subject">제목</label>
							<input type="text" class="form-control" id="subject" name="subject">
							<label for="desc">설명</label>
							<textarea rows=5 class="form-control" id="desc" name="desc"></textarea>
							<label for="display">공개여부</label>
							<select class="form-control" id="disaply" name="display">
								<option value="Y" checked>공개</option>
								<option value="N">비공개</option>
							</select>
						</div>
					</form>
				</div>
				<div class="modal-footer">
					<button class="btn btn-default" data-dismiss="modal" aria-hidden="true">취소</button>
					<button type="button" onclick="inputService()" class="btn btn-success">저장</button>
				</div>
			</div><!-- /.modal-content -->
		</div><!-- /.modal-dialog -->
		</form>
	</div><!-- /.modal -->

	<!-- Modal Area End -->

	<?php
		include_once dirname(__DIR__)."/admin/include/admin-footer.php";
	?>

	<script>
		$.datepicker.setDefaults({
	        dateFormat: 'yy-mm-dd',
	        prevText: '이전 달',
	        nextText: '다음 달',
	        monthNames: ['1월', '2월', '3월', '4월', '5월', '6월', '7월', '8월', '9월', '10월', '11월', '12월'],
	        monthNamesShort: ['1월', '2월', '3월', '4월', '5월', '6월', '7월', '8월', '9월', '10월', '11월', '12월'],
	        dayNames: ['일', '월', '화', '수', '목', '금', '토'],
	        dayNamesShort: ['일', '월', '화', '수', '목', '금', '토'],
	        dayNamesMin: ['일', '월', '화', '수', '목', '금', '토'],
	        showMonthAfterYear: true,
	        yearSuffix: '년',
	        color: "black"
	    });
		$(".datepicker").datepicker();
		$("#desc").Editor();
	
		function formReset(){
			location.href="/admin/serviceList"
		}

		function showCreateModal(){
			// 폼을 먼저 리셋 한다.
			$("#recentlyForm")[0].reset();
			// 수정 시에도 동일한 Modal을 사용하므로 플래그 값을 준다.
			$("input[name=mode]").val("createMode");

			// DatePicker 기본 값 설정
			$("#displayDate").datepicker("setDate", new Date());
			
			// LABEL 게시글 등록으로 변경
			$("#inputLabel").html("게시글 등록")
			// inputModal 표시
			$("#inputModal").modal("show");
		}

		function showModifyModal(slSeq){
			getService(slSeq);
		}

		function inputService(){
			if($("input[name=subject]").val() == "") {
				alert("제목을 입력해주세요."); 
				$("input[name=subject]").focus();
				return false;
			}

			if($("#desc").Editor('getText') == "") {
				alert("설명을 입력해주세요."); 
				$("textarea[name=desc]").focus();
				return false;
			}

			$("textarea[name=desc]").val($("#desc").Editor('getText'));
			const formData = new FormData($("#recentlyForm")[0]);
			$.ajax({
				url		: "/adm/Service/inputService",
				type	: "post",
				data	: formData,
				dataType: "json",
				contentType: false,
				processData: false,
				success : function (data){
					const code = data["code"];
					const msg = data["msg"];
					if(code == 200){
						location.reload();
					} else {
						alert(msg);
					}
				},
				error 	: function (e){
					console.log(e);
				}
			})
		}

		function getService(slSeq){
				$.ajax({
					url		: "/adm/Service/getService?slSeq=" + slSeq,
					type	: "get",
					dataType: "json",
					success : function (data){
						console.log(data);
						if(data['code'] == 200){

							$("input[name=slSeq]").val(data['objects'][0].SL_SEQ);
							$("input[name=subject]").val(data['objects'][0].SL_SUBJECT);
							$("textarea[name=desc]").val(data['objects'][0].SL_DESC);
							$("textarea[name=desc]").Editor('setText', data['objects'][0].SL_DESC)
							$("input[name=disaply]").val(data['objects'][0].SL_DISPLAY_YN);
							// DatePicker 기본 값 설정
							$("#displayDate").datepicker("setDate", data['objects'][0].SL_DISPLAY_DATE);
							
							$("input[name=mode]").val("modifyMode");
							// LABEL 게시글 수정으로 변경
							$("#inputLabel").html("게시글 수정");
							// inputModal 표시
							$("#inputModal").modal("show");
						} else {
							alert(data['msg']);
						}
					},
					error 	: function (e){
						console.log(e.responseText);
					}
				})
		}

		function deleteService(slSeq){
			if(confirm("해당 게시글을 삭제하시겠습니까?")){
				$.ajax({
					url		: "/adm/Service/delService?slSeq=" + slSeq,
					type	: "get",
					dataType: "json",
					success : function (data){
						const code = data["code"];
						const msg = data["msg"];
						if(code == 200){
							location.reload();
						} else {
							alert(msg);
						}
					},
					error 	: function (e){
						console.log(e.responseText);
					}
				})
			}
		}

	</script>

</body>
</html>

