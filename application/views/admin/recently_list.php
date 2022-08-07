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
			<h2><i class="fa fa-puzzle-piece" style="line-height: 48px;padding-left: 5px;"></i> <b>최근소식 추가/변경</b> <span></span></h2>
			<div class="breadcrumbs">
				<ol class="breadcrumb">
					<li>게시판 관리</li>
					<li class="active">최근소식 추가/변경</li>
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
														<option value="SUBJECT" <?php echo $searchField == "SUBJECT" ? 'selected': ""?>>제목</option>
														<option value="LINK" <?php echo $searchField == "LINK" ? 'selected': ""?>>URL</option>
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
								<button type="button" class="btn btn-success btn-sm" onclick="showCreateModal()">게시글 등록</button>
								<!-- <a href="#newsModal" role="button" class="btn btn-success btn-sm" data-toggle="modal">뉴스 추가</a> -->
							</div>
							<div class="table-responsive">
								<table class="table table-datatable table-custom01 userTable">
									<thead>
										<tr>
											<th class="sort-numeric">#</th>
											<th class="sort">이미지 미리보기</th>
											<th class="sort">제목</th>
											<th class="sort">URL</th>
											<th class="sort">표시일자</th>
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
											<td><img src="<?php echo $lt->RL_IMAGE_URL?>" style="width:350px; height:230px"></td>
											<td><?php echo $lt->RL_SUBJECT?></td>
											<td><?php echo $lt->RL_LINK?></td>
											<td><?php echo $lt->RL_DISPLAY_DATE?></td>
											<td><?php echo $lt->RL_REG_DATE?></td>
											<td><?php echo $lt->ADMIN_NAME?></td>
											<td><?php echo $lt->RL_DISPLAY_YN == "Y" ? "<span class=\"label label-success\">공개</span>" : "<span class=\"label label-slategray\">비공개</span>"?></td>
											<td>
											<button type="button" class="btn btn-xs btn-default" onclick="showModifyModal('<?php echo htmlspecialchars(json_encode($lt))?>')">수정</button>
											<button type="button" class="btn btn-xs btn-danger" onclick="deleteRecentlyNews(<?php echo $lt->RL_SEQ?>)">삭제</button>
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
	<div class="modal fade" id="newsModal" tabindex="-1" role="dialog" aria-labelledby="modalNewsLabel" aria-hidden="true">
		<form id="recentlyForm">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<h3 class="modal-title" id="modalNewsLabel"></h3>
				</div>
				<div class="modal-body">
					<form role="form" id="cateForm">
						<div class="form-group">
							<input type="hidden" name="rlSeq">
							<input type="hidden" name="mode">
							<label for="subject">이미지</label>
							<input type="file" class="form-control" name="file">
							<label for="subject">제목</label>
							<input type="text" class="form-control" id="subject" name="subject">
							<label for="link">URL</label>
							<input type="text" class="form-control" id="link" name="link">
							<label for="display">공개여부</label>
							<select class="form-control" id="disaply" name="display">
								<option value="Y" checked>공개</option>
								<option value="N">비공개</option>
							</select>
							<div id="regDateForm">
							<label for="displayDate">표시일자</label>
							<input name="displayDate" id="displayDate" type="text" class="form-control wid100p datepicker" value="">
							</div>
						</div>
					</form>
				</div>
				<div class="modal-footer">
					<button class="btn btn-default" data-dismiss="modal" aria-hidden="true">취소</button>
					<button type="button" onclick="inputRecentlyNews()" class="btn btn-success">저장하기</button>
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
			$("#recentlyForm")[0].reset();
			// 수정 시에도 동일한 Modal을 사용하므로 플래그 값을 준다.
			$("input[name=mode]").val("createMode");

			// DatePicker 기본 값 설정
			$("#displayDate").datepicker("setDate", new Date());
			
			// LABEL 게시글 등록으로 변경
			$("#modalNewsLabel").html("게시글 등록")
			// newsModal 표시
			$("#newsModal").modal("show");
		}

		function showModifyModal(item){
			// PHP Object -> JSON String 값으로 변환하여 전달받은 값을 다시 JS Object로 변환
			let data = JSON.parse(item);
			// 받아온 값을 Input에 담아준다.
			$("input[name=imageUrl]").val(1);
			$("input[name=rlSeq]").val(data.RL_SEQ);
			$("input[name=subject]").val(data.RL_SUBJECT);
			$("input[name=link]").val(data.RL_LINK);
			$("input[name=disaply]").val(data.RL_DISPLAY_YN);
			$("input[name=displayDate]").val(data.RL_DISPLAY_DATE);
			// DatePicker 기본 값 설정
			$("#displayDate").datepicker("setDate", data.RL_DISPLAY_DATE);

			$("input[name=mode]").val("modifyMode");
			// LABEL 게시글 수정으로 변경
			$("#modalNewsLabel").html("게시글 수정");
			// newsModal 표시
			$("#newsModal").modal("show");
		}

		function inputRecentlyNews(){
			if($("input[name=subject]").val() == "") {
				alert("제목을 입력해주세요."); 
				$("input[name=subject]").focus();
				return false;
			}

			if($("input[name=link]").val() == "") {
				alert("URL을 입력해주세요."); 
				$("input[name=link]").focus();
				return false;
			}

			const formData = new FormData($("#recentlyForm")[0]);
			$.ajax({
				url		: "/adm/recentlyNews/inputRecentlyNews",
				type	: "post",
				data	: formData,
				dataType: "json",
				contentType: false,
				processData: false,
				success : function (data){
					const code = data["code"];
					const msg = data["msg"];
					if(code == 200){
						alert(msg);
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

		function deleteRecentlyNews(rlSeq){
			if(confirm("해당 게시글을 삭제하시겠습니까?")){
				$.ajax({
					url		: "/adm/recentlyNews/delRecentlyNews?rlSeq=" + rlSeq,
					type	: "get",
					dataType: "json",
					success : function (data){
						const code = data["code"];
						const msg = data["msg"];
						if(code == 200){
							alert(msg);
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

