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
			<h2><i class="fa fa-puzzle-piece" style="line-height: 48px;padding-left: 5px;"></i> <b>키오스크 추가/변경</b> <span></span></h2>
			<div class="breadcrumbs">
				<ol class="breadcrumb">
					<li>키오스크 관리</li>
					<li class="active">키오스크 추가/변경</li>
				</ol>
			</div>

		</div>
		<!-- /page header -->

		<!-- content main container -->
		<div class="main">

			<div class="row">
				<div class="col-md-12">
                <!-- tile -->
                <section class="tile color transparent-black">
                	<!-- tile body -->
                	<div class="tile-body">
                		<table class="table table-custom datatable userTable">
							<form method="get" role="form" id="searchForm"> 
									<colgroup>
										<col width="15%"/>
										<col width="35%"/>
										<col width="15%"/>
										<col width="35%"/>
									</colgroup>
									<tbody>
										<tr>
											<th>등록일자</th>
											<td colspan="3">
												<div class="col-md-5">
													<input name="regDateStart" type="text" class="wid100p datepicker" value="<?php echo $regDateStart?>">
												</div>
												<div class="col-md-5">
													<input name="regDateEnd" type="text" class="wid100p datepicker" value="<?php echo $regDateEnd?>">
												</div>
											</td>
										</tr>
										<tr>
											<th>단어검색</th>
											<td colspan="3">
												<div class="col-md-2">
													<select name="searchField" class="wid100p">
														<option value="all">전체</option>
														<option value="ADMIN_NAME" <?php echo $searchField == "ADMIN_NAME" ? 'selected': ""?>>작성자</option>
														<option value="CATEGORY" <?php echo $searchField == "CATEGORY" ? 'selected': ""?>>카테고리</option>
														<option value="SUBJECT" <?php echo $searchField == "SUBJECT" ? 'selected': ""?>>제목</option>
													</select>
												</div>
												<div class="col-md-8">
													<input type="text" name="searchString" class="wid100p" placeholder="검색어를 입력해주세요" value="<?php echo $searchString?>">
												</div>
											</td>
										</tr>
										<tr>
											<td colspan="4" class="text-right">
												<div class="col-md-12">
													<button type="button" onclick="formReset()" class="btn btn-default">초기화</button>
													<button class="btn btn-blue">검색</button>
												</div>
											</td>
										</tr>
									</tbody>
								</table>
							</form>
						</div>
					</section>
				</div>
			</div>

			<div class="row">
				<!-- col 12 -->
				<div class="col-md-12">
                <!-- tile -->
					<section class="tile color transparent-black">
						<!-- tile body -->
						<div class="tile-body">
							<div style="float:right">
								<button type="button" class="btn btn-success btn-sm" onclick="showCreateModal()">파일 등록</button>
							</div>
							<div class="table-responsive">
								<table class="table table-datatable table-custom01 userTable">
									<thead>
										<tr>
											<th class="sort-numeric">#</th>
											<th class="sort">등록위치</th>
											<th class="sort">제목</th>
											<th class="sort">등록일</th>
											<th class="sort">작성자</th>
											<th class="sort">공개여부</th>
											<th class="sort">기능</th>
										</tr>
									</thead>
									<tbody>
										<?php 
										if($listCount > 0):
										foreach($lists as $lt):?>
										<tr>
											<td><?php echo $pagenum?></td>
											<!-- <td><img src="<?php echo $lt->LIB_FILE_PATH?>" style="width:175px; height:262px"></td> -->
											<td><?php echo $lt->LC_CATEGORY_NAME?></td>
											<td><?php echo $lt->LIB_SUBJECT?></td>
											<td><?php echo $lt->LIB_REG_DATE?></td>
											<td><?php echo $lt->ADMIN_NAME?></td>
											<td><?php echo $lt->LIB_DISPLAY_YN == "Y" ? "<span class=\"label label-success\">공개</span>" : "<span class=\"label label-slategray\">비공개</span>"?></td>
											<td>
											<button type="button" class="btn btn-xs btn-default" onclick="fileDownload('<?php echo $lt->LIB_SEQ?>')">다운로드</button>
											<button type="button" class="btn btn-xs btn-default" onclick="showModifyModal('<?php echo htmlspecialchars(json_encode($lt))?>')">수정</button>
											<button type="button" class="btn btn-xs btn-danger" onclick="deleteLibrary(<?php echo $lt->LIB_SEQ?>)">삭제</button>
											</td>
										</tr>
										<?php 
										$pagenum -= 1;	
										endforeach;
										else:
											echo "<tr><td colspan=8 style=\"text-align:center;padding:50px;\">파일이 없습니다.</td></tr>";
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
	<div class="modal fade" id="LibraryModal" tabindex="-1" role="dialog" aria-labelledby="LibraryLabel" aria-hidden="true">
		<form id="LibraryForm">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<h3 class="modal-title" id="LibraryLabel"></h3>
				</div>
				<div class="modal-body">
					<form role="form" id="cateForm">
						<div class="form-group">
							<input type="hidden" name="libSeq">
							<input type="hidden" name="mode">
							<label for="subject">파일</label> <span>파일양식: doc, docx 혹은 xlsx, xls 파일 (용량 3MB미만)</span>
							<input type="file" class="form-control" id="uploadFile" name="file">
							<label for="uploadFile" id="uploadFileName"></label><br>
							<label for="category">등록위치</label>
							<select class="form-control" id="category" name="category">
								<?php foreach($category as $val): ?>
									<option value=<?php echo $val->LC_SEQ?>><?php echo $val->LC_CATEGORY_NAME?></option>
								<?php endforeach;?>
							</select>
							<label for="subject">제목(노출시킬 파일명)</label>
							<input type="text" class="form-control" id="subject" name="subject">
							<label for="display">공개여부</label>
							<select class="form-control" id="display" name="display">
								<option value="Y" checked>공개</option>
								<option value="N">비공개</option>
							</select>
						</div>
					</form>
				</div>
				<div class="modal-footer">
					<button class="btn btn-default" data-dismiss="modal" aria-hidden="true">취소</button>
					<button type="button" onclick="inputLibrary()" class="btn btn-success">저장하기</button>
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
	
		function formReset(){
			location.href="/admin/recentlyList"
		}

		function showCreateModal(){
			// 폼을 먼저 리셋 한다.
			$("#LibraryForm")[0].reset();
			// 수정 시에도 동일한 Modal을 사용하므로 플래그 값을 준다.
			$("input[name=mode]").val("createMode");
			$("#uploadFileName").html("");
			// DatePicker 기본 값 설정
			$("#displayDate").datepicker("setDate", new Date());
			
			// LABEL 파일 등록으로 변경
			$("#LibraryLabel").html("파일 등록")
			// LibraryModal 표시
			$("#LibraryModal").modal("show");
		}

		function showModifyModal(item){
			// PHP Object -> JSON String 값으로 변환하여 전달받은 값을 다시 JS Object로 변환
			let data = JSON.parse(item);
			// 받아온 값을 Input에 담아준다.
			$("input[name=libSeq]").val(data.LIB_SEQ);
			$("input[name=subject]").val(data.LIB_SUBJECT);
			$("#uploadFileName").html("<span><i>파일명 : </i></span>" + data.LIB_FILE_NAME);
			$(`#category > option[value=${data.LIB_CATEGORY}]`).attr("selected", true);
			// $("select[name=display]").val(data.LIB_DISPLAY_YN);
			$(`#display > option[value=${data.LIB_DISPLAY_YN}]`).attr("selected", true);
			// DatePicker 기본 값 설정

			$("input[name=mode]").val("modifyMode");
			// LABEL 파일 수정으로 변경
			$("#LibraryLabel").html("파일 수정");
			// LibraryModal 표시
			$("#LibraryModal").modal("show");
		}

		function inputLibrary(){
			if($("input[name=subject]").val() == "") {
				alert("제목을 입력해주세요."); 
				$("input[name=subject]").focus();
				return false;
			}

			const formData = new FormData($("#LibraryForm")[0]);
			$.ajax({
				url		: "/adm/Library/inputLibrary",
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
					alert(e.responseText);
				}
			})
		}

		function deleteLibrary(libSeq){
			if(confirm("해당 파일을 삭제하시겠습니까?")){
				$.ajax({
					url		: "/adm/Library/delLibrary?libSeq=" + libSeq,
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

