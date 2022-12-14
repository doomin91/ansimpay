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
				<!-- col 12 -->
				<div class="col-md-12">
                <!-- tile -->
					<section class="tile color transparent-black">
						<!-- tile body -->
						<div class="tile-body">
							<div style="float:right">
								<a onclick="showCreateModal()" role="button" class="btn btn-success btn-sm" data-toggle="modal">카테고리 추가</a>
							</div>
							<div class="table-responsive">
								<table class="table table-datatable table-custom01 userTable">
									<thead>
										<tr>
											<th class="sort-numeric">#</th>
											<th class="sort">카테고리명</th>
											<th class="sort">등록날짜</th>
											<th class="sort">우선순위</th>
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

	<!-- Modal Area -->
	<div class="modal fade" id="cateModal" tabindex="-1" role="dialog" aria-labelledby="cateLabel" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">Close</button>
					<h3 class="modal-title" id="cateLabel">카테고리 추가</h3>
				</div>
				<div class="modal-body">
					<form role="form" id="cateForm">
						<div class="form-group">
							<input type="hidden" name="mode">
							<input type="hidden" name="cateSeq">
							<label for="cateName">카테고리명</label>
							<input type="text" class="form-control" id="cateName" name="cateName">
						</div>
					</form>
				</div>
				<div class="modal-footer">
					<button class="btn btn-default" data-dismiss="modal" aria-hidden="true">취소</button>
					<button onclick="inputCategory()" id="saveButton" class="btn btn-success">저장하기</button>

				</div>
			</div><!-- /.modal-content -->
		</div><!-- /.modal-dialog -->
	</div><!-- /.modal -->

	<!-- Modal Area End -->
	<?php
		include_once dirname(__DIR__)."/admin/include/admin-footer.php";
	?>

	<script>
		loadData(); 
		function loadData(){
			$.ajax({
				url: 		 "/adm/PartnersCategory/getPartnerCate",
				dataType:	 "json",
				contentType: false,
				processData: false,
				success: function(data){
					let str = ""
					let length = data.length;
					data.forEach(function(element, index){
						str += `
								<tr>
								<td>${element.PC_ORDER_NUMBER}</td>
								<td>${element.PC_CATEGORY_NAME}</td>
								<td>${element.PC_REG_DATE}</td>
								`
						jsonData = JSON.stringify(element)
						str += `<td>`
						if(index == 0){
							str += `<button onclick="moveUp(${element.PC_ORDER_NUMBER})" class="btn btn-xs btn-default" disabled>▲올리기</button>`
						} else {
							str += `<button onclick="moveUp(${element.PC_ORDER_NUMBER})" class="btn btn-xs btn-default">▲올리기</button>`
						}
								
						if(index == length - 1){
							str += `<button onclick="moveDown(${element.PC_ORDER_NUMBER})" class="btn btn-xs btn-default" disabled>▼내리기</button>`
						} else {
							str += `<button onclick="moveDown(${element.PC_ORDER_NUMBER})" class="btn btn-xs btn-default">▼내리기</button>`
						}
						str += `</td>`
						str += `
								<td>
									<button onclick="showModifyModal(${escape(JSON.stringify(element))})" class="btn btn-xs btn-default">수정</button>
									<button onclick="deleteCategory(${element.PC_SEQ})" class="btn btn-xs btn-danger">삭제</button>
								</td>
								</tr>
								`
					})
					$("#boardItems").html(str);
					// load가 완료되면 보여지는 메뉴 순서도 변경한다.
					loadMenu();
				},
				error: function(e){
					alert("오류가 발생했습니다. 관리자에게 문의바랍니다.")
				}
			})
		}

		function escape(htmlStr) {
			return htmlStr.replace(/&/g, "&amp;")
				.replace(/</g, "&lt;")
				.replace(/>/g, "&gt;")
				.replace(/"/g, "&quot;")
				.replace(/'/g, "&#39;");        

		}

		function showCreateModal(){
			$("#cateForm")[0].reset();
			$("#saveButton").html("저장");
			$("input[name=mode]").val("createMode");

			$("#cateLabel").html("카테고리 추가");
			$("#cateModal").modal("show");
		}

		function showModifyModal(data){
			$("#saveButton").html("수정");
			$("input[name=mode]").val("modifyMode");

			$("input[name=cateSeq]").val(data.PC_SEQ);
			$("input[name=cateName]").val(data.PC_CATEGORY_NAME);

			$("#cateLabel").html("카테고리 수정");
			$("#cateModal").modal("show");
		}

		function moveUp(orderNumber) {
			$.ajax({
				url: "/adm/PartnersCategory/moveUp?orderNumber="+orderNumber,
				dataType: "text",
				type: "get",
				success: function(data){
					loadData()
				},
				error: function(e) {
					alert("오류가 발생했습니다. 관리자에게 문의바랍니다.")
				}
			})
		}

		function moveDown(orderNumber) {
			$.ajax({
				url: "/adm/PartnersCategory/moveDown?orderNumber="+orderNumber,
				dataType: "json",
				type: "get",
				success: function(data){
					loadData()
				},
				error: function(e) {
					alert("오류가 발생했습니다. 관리자에게 문의바랍니다.")
				}
			})
		}

		function inputCategory(){
			const formData = new FormData($("#cateForm")[0]);
			$.ajax({
				url: 		 "/adm/PartnersCategory/inputPartnerCate",
				type: 		 "post",
				data: 		 formData,
				dataType:	 "json",
				contentType: false,
				processData: false,
				success: function(data){
					const code = data["code"];
					const msg = data["msg"];

					if(code == 200){
						$("#cateModal").modal("hide");
						loadData();
					} else {
						alert(msg);
					}
				},
				error: function(e){
					alert("오류가 발생했습니다. 관리자에게 문의바랍니다.")
				}
			})
		}

		function deleteCategory(pcSeq){
			if(confirm("삭제하시겠습니까?")){
				$.ajax({
					url: 		 "/adm/PartnersCategory/delPartnerCate",
					type: 		 "post",
					data: 		 {
						"pcSeq": pcSeq
					},
					dataType:	 "json",
					success: function(data){
						loadData();
					},
					error: function(e){
						alert("오류가 발생했습니다. 관리자에게 문의바랍니다.")
					}
				})
			}
		}
	</script>


</body>
</html>