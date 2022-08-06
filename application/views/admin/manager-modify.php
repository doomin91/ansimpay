<?php
  include_once dirname(__DIR__)."/admin/include/admin-header.php";
?>
<body class="bg-1">

	<!-- Preloader -->
	<div class="mask"><div id="loader"></div></div>
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
		<div id="content" class="col-md-12">

		  <!-- page header -->
		  <div class="pageheader">
			<h2><i class="fa fa-puzzle-piece" style="line-height: 48px;padding-left: 5px;"></i> <b>회원정보 수정 </b></h2>
			<div class="breadcrumbs">
			  <ol class="breadcrumb">
				<li>관리자 페이지</li>
				<li><a href="index.html">회원관리</a></li>
				<li class="active">회원정보 수정하기</li>
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
					<div class="tile-body">
						<form name="form1" id="form1" method="post">
						<input type="hidden" name="admin_seq" value="<?php echo $info->ADMIN_SEQ; ?>">
						<table class="table table-custom dataTable userTable">
							<colgroup>
								<col width="15%"/>
								<col width="35%"/>
								<col width="15%"/>
								<col width="35%"/>
							</colgroup>
							<tbody>
								<tr>
									<th>등록일</th>
									<td><?php echo $info->ADMIN_REG_DATE; ?></td>
									<th>최종 로그인</th>
									<td><?php echo $info->ADMIN_LAST_LOGIN; ?></td>
								</tr>
								<tr>
									<th>아이디</th>
									<td><input type="text" name="admin_id" value="<?php echo $info->ADMIN_ID; ?>" size="50"></td>
									<th>비밀번호</th>
									<td><input type="password" name="admin_pw" value="" size="50"></td>
								</tr>
								<tr>
									<th>이름</th>
									<td><input type="text" name="admin_name" value="<?php echo $info->ADMIN_NAME; ?>" size="50"></td>
									<th>이메일</th>
									<td><input type="text" name="admin_email" value="<?php echo $info->ADMIN_EMAIL; ?>" size="100"></td>
								</tr>
								<tr>
									<th>연락처</th>
									<td><input type="text" name="admin_tel" value="<?php echo $info->ADMIN_TEL; ?>" size="50"></td>
									<th>휴대폰</th>
									<td><input type="text" name="admin_hp" value="<?php echo $info->ADMIN_HP; ?>" size="50"></td>
								</tr>
								<tr>
									<th>관리자 메모</th>
									<td colspan="3">
										<textarea name="admin_memo"><?php echo $info->ADMIN_MEMO; ?></textarea>
									</td>
								</tr>
							</tbody>
						</table>
						</form>
						<div class="row form-footer">
							<div class="col-sm-offset-2 col-sm-10 text-right">
								<a href="/admin/managers" class="btn btn-default btn-sm">취소</a>
								<button type="button" class="btn btn-primary btn-sm" id="saveManager">저장</a>
							</div>
						</div>

					</div>
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
	<!-- Wrap all page content end -->

	<?php
		include_once dirname(__DIR__)."/admin/include/admin-footer.php";
	?>
</body>
</html>
<script type="text/javascript">
	$(function(){
		$(document).on("click", "#saveManager", function(){
			var admin_seq = $("input[name=admin_seq]").val();
			var admin_id = $("input[name=admin_id]").val();
			var admin_pw = $("input[name=admin_pw]").val();
			var admin_name = $("input[name=admin_name]").val();
			var admin_email = $("input[name=admin_email]").val();
			var admin_tel = $("input[name=admin_tel]").val();
			var admin_hp = $("input[name=admin_hp]").val();
			var admin_memo = $("textarea[name=admin_memo]").val();

			var admin_permi = [];
			$.each($("input:checkbox[name=admin_permi]"), function(){
				if ($(this).is(":checked") == true){
					admin_permi.push($(this).val());
				}
			});

			if (admin_pw != ""){
				if (confirm("비밀번호 입력된내용으로 비밀번호가 변경이 됩니다.\n계속 진행 하시겠습니까?")){
				}else{
					return false;
				}
			}

			$.ajax({
				url:"/adm/manager/managerModifyProc",
				type:"post",
				data:{
					"admin_seq" : admin_seq,
					"admin_id" : admin_id,
					"admin_pw" : admin_pw,
					"admin_name" : admin_name,
					"admin_email" : admin_email,
					"admin_tel" : admin_tel,
					"admin_hp" : admin_hp,
					"admin_permi" : admin_permi,
					"admin_memo" : admin_memo
				},
				dataType:"json",
				success:function(resultMsg){
					if (resultMsg.code == "200"){
						alert(resultMsg.msg);
						document.location.href="/admin/managers";
					}else{
						alert(resultMsg.msg);
					}
				},
				error:function(e){
					console.log(e);
				}
			})
		});
	});
</script>
