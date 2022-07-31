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
			<h2><i class="fa fa-puzzle-piece" style="line-height: 48px;padding-left: 5px;"></i> <b>카테고리 추가/변경</b> <span></span></h2>
			<div class="breadcrumbs">
				<ol class="breadcrumb">
					<li>파트너사 관리</li>
					<li class="active">카테고리 추가/변경</li>
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
							<form method="get" role="form"> 
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
													<input name="regDateStart" type="text" class="wid100p datepicker" value="">
												</div>
												<div class="col-md-5">
													<input name="regDateEnd" type="text" class="wid100p datepicker" value="">
												</div>
											</td>
										</tr>
										<tr>
											<th>단어검색</th>
											<td colspan="3">
												<div class="col-md-2">
													<select name="search_field" class="wid100p">
														<option value="all">전체</option>
													</select>
												</div>
												<div class="col-md-8">
													<input type="text" name="search_string" class="wid100p" placeholder="검색어를 입력해주세요" value="">
												</div>
											</td>
										</tr>
										<tr>
											<td colspan="4" class="text-right">
												<div class="col-md-12">
													<button class="btn btn-primary">검색하기</button>
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
							<div class="table-responsive">
								<table class="table table-datatable table-custom01 userTable">
									<thead>
										<tr>
											<th class="sort-numeric">#</th>
											<th class="sort">미리보기</th>
											<th class="sort">카테고리명</th>
											<th class="sort">타이틀</th>
											<th class="sort">이미지 링크</th>
											<th class="sort">기능</th>
										</tr>
									</thead>
									<tbody id="boardItems">
									</tbody>
								</table>
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
	<?php
		include_once dirname(__DIR__)."/admin/include/admin-footer.php";
	?>

</body>
</html>