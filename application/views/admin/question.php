<?php
  include_once dirname(__DIR__)."/admin/include/admin-header.php";
?>
<body class="bg-1">

	<!-- Preloader -->
	<!-- <div class="mask"><div id="loader"></div></div> -->
	<!--/Preloader -->

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
		<div id="content" class="col-md-12" style="overflow:auto;">

		  <!-- page header -->
		  <div class="pageheader">
			<h2><i class="fa fa-puzzle-piece" style="line-height: 48px;padding-left: 5px;"></i> <b>제휴문의</b></h2>
			<div class="breadcrumbs">
			  <ol class="breadcrumb">
				<li>고객 서비스 관리</li>
				<li><a href="index.html">기본설정</a></li>
				<li class="active">제휴문의</li>
			  </ol>
			</div>

		  </div>
		  <!-- /page header -->

		  <!-- content main container -->
		  <div class="main">

			<!-- row -->
			<div class="row">

			  <!-- col 6 -->
			  <div class="col-md-12">
				<!-- tile -->
				<section class="tile color transparent-black">

					<!-- tile body -->
					<form name="contentsForm" id="contentsForm">
					<div class="tile-body">
						<table class="table table-custom dataTable userTable">
							<colgroup>
								<col width="15%"/>
								<col width="85%"/>
							</colgroup>
							<tbody>
								<tr>
									<th>개인 사업자</th>
									<td><textarea name="desc1" id="desc1"></textarea></td>
								</tr>
								<tr>
									<th>법인 사업자</th>
									<td><textarea name="desc2" id="desc2"></textarea></td>

								</tr>
								<tr>
									<th>양수양도계약</th>
									<td><textarea name="desc3" id="desc3"></textarea></td>
								</tr>
							</tbody>
						</table>

						
						<div class="row form-footer">
                            <div class="col-sm-offset-2 col-sm-10 text-right">
                                <button type="button" class="btn btn-primary btn-sm" onclick="saveQuestion()">저장</button>
                            </div>
                        </div>
					</div>
					</form>
				  <!-- /tile body -->

				</section>
				<!-- /tile -->

			  </div>
			  <!-- /col 12 -->

			</div>
			<!-- /row -->

		  </div>
		  <!-- /content container -->

		</div>
		<!-- Page content end -->

	  </div>
	  <!-- Make page fluid-->

	</div>

	<?php
		include_once dirname(__DIR__)."/admin/include/admin-footer.php";
	?>

</body>
</html>
<script>

let desc1 = $("#desc1").Editor();
let desc2 = $("#desc2").Editor();
let desc3 = $("#desc3").Editor();

getQuestion();

function saveQuestion(){
	$.ajax({
		url		: '/adm/question/saveQuestion',
		type	: 'post',
		data	: {
			'desc1': $("#desc1").Editor("getText"),
			'desc2': $("#desc2").Editor("getText"),
			'desc3': $("#desc3").Editor("getText")
		},	
		dataType: 'json',
		success : function(data){
			let code = data['code'];
			let msg = data['msg'];
			alert(msg);
		},
		error 	: function(e){
			console.log(e.responseText);
		}
	})
}

function getQuestion(){
	$.ajax({
		url		: '/adm/question/getQuestion',
		type	: 'get',
		dataType: 'json',
		success : function(data){
			$("#desc1").Editor("setText", data.QUESTION_DESC1);
			$("#desc2").Editor("setText", data.QUESTION_DESC2);
			$("#desc3").Editor("setText", data.QUESTION_DESC3);
		},
		error 	: function(e){
			console.log(e.responseText);
		}
	})
}

</script>

