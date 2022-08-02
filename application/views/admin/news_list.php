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
			<h2><i class="fa fa-puzzle-piece" style="line-height: 48px;padding-left: 5px;"></i> <b>뉴스 추가/변경</b> <span></span></h2>
			<div class="breadcrumbs">
				<ol class="breadcrumb">
					<li>파트너사 관리</li>
					<li class="active">뉴스 추가/변경</li>
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
														<option value="USER_NAME" <?php echo $searchField == "USER_NAME" ? 'selected': ""?>>글쓴이</option>
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
								<a href="#newsModal" role="button" class="btn btn-success btn-sm" data-toggle="modal">뉴스 추가</a>
							</div>
							<div class="table-responsive">
								<table class="table table-datatable table-custom01 userTable">
									<thead>
										<tr>
											<th class="sort-numeric">#</th>
											<th class="sort">제목</th>
											<th class="sort">URL</th>
											<th class="sort">등록일</th>
											<th class="sort">글쓴이</th>
											<th class="sort">공개여부</th>
											<th class="sort">기능</th>
										</tr>
									</thead>
									<tbody id="newsBody">
										<?php 
										if($listCount > 0):
										foreach($lists as $lt):?>
										<tr>
											<td><?php echo $pagenum?></td>
											<td><?php echo $lt->NL_SUBJECT?></td>
											<td><?php echo $lt->NL_LINK?></td>
											<td><?php echo $lt->NL_REG_DATE?></td>
											<td><?php echo $lt->NL_REG_USERSEQ?></td>
											<td><?php echo $lt->NL_DISPLAY_YN == "Y" ? "<span class=\"label label-success\">공개</span>" : "<span class=\"label label-slategray\">비공개</span>"?></td>
											<td>
											<button type="button" class="btn btn-xs btn-default">수정</button>
											<button type="button" class="btn btn-xs btn-danger">삭제</button>
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
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">Close</button>
					<h3 class="modal-title" id="modalNewsLabel">뉴스 추가</h3>
				</div>
				<div class="modal-body">
					<form role="form" id="cateForm">
						<div class="form-group">
							<input type="hidden" name="newsSeq">
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
							<label for="regDate">등록일</label>
							<input name="regDate" type="text" class="form-control wid100p datepicker" value="">
							</div>
						</div>
					</form>
				</div>
				<div class="modal-footer">
					<button class="btn btn-default" data-dismiss="modal" aria-hidden="true">취소</button>
					<button onclick="saveNews()" class="btn btn-success">저장하기</button>
				</div>
			</div><!-- /.modal-content -->
		</div><!-- /.modal-dialog -->
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
			alert(1);
			$("#searchForm")[0].reset();
			$('form').each(function() {
				this.reset();
			});
		}

		function saveNews(){
			
		}

		function modifyNews(){

		}

		function deleteNews(){

		}

	</script>

</body>
</html>

