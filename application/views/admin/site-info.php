<?php
  include_once dirname(__DIR__)."/admin/include/admin-header.php";
?>
<script src="/assets/ckeditor/ckeditor.js"></script>
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
			<h2><i class="fa fa-puzzle-piece" style="line-height: 48px;padding-left: 5px;"></i> <b>사이트 정보</b></h2>
			<div class="breadcrumbs">
			  <ol class="breadcrumb">
				<li>관리자 페이지</li>
				<li><a href="index.html">기본설정</a></li>
				<li class="active">사이트 정보</li>
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
								<col width="35%"/>
								<col width="15%"/>
								<col width="35%"/>
							</colgroup>
							<tbody>
								<tr>
									<th>사이트명</th>
									<td><input type="text" name="site_name" value="<?php echo $info->SITE_NAME; ?>" size="50"></td>
									<th>사이트 URL</th>
									<td><input type="text" name="site_url" value="<?php echo $info->SITE_URL; ?>" size="50"></td>
								</tr>
								<tr>
									<th>관리자 이메일</th>
									<td><input type="text" name="site_admin_email" value="<?php echo $info->SITE_ADMIN_EMAIL; ?>" size="50"></td>
									<th>관리자 연락처</th>
									<td><input type="text" name="site_admin_tel" value="<?php echo $info->SITE_ADMIN_TEL; ?>" size="50"></td>
								</tr>
								<tr>
									<th>관리자 휴대폰</th>
									<td><input type="text" name="site_admin_hp" value="<?php echo $info->SITE_ADMIN_HP; ?>" size="50"></td>
									<th>&nbsp;</th>
									<td>&nbsp;</td>
								</tr>
							</tbody>
						</table>
					</div>
					<div class="tile-body">
						<table class="table table-custom dataTable userTable">
							<colgroup>
								<col width="15%"/>
								<col width="35%"/>
								<col width="15%"/>
								<col width="35%"/>
							</colgroup>
							<tbody>
								<tr>
									<th>FTP 접속 주소(ip, 도메인)</th>
									<td><input type="text" name="ftp_ip" value="<?php echo $info->FTP_IP; ?>" size="50"></td>
									<th>&nbsp;</th>
									<td>&nbsp;</td>
								</tr>
								<tr>
									<th>아이디</th>
									<td><input type="text" name="ftp_id" value="<?php echo $info->FTP_ID; ?>" size="50"></td>
									<th>비밀번호</th>
									<td><input type="text" name="ftp_pw" value="<?php echo $info->FTP_PW; ?>" size="50"></td>
								</tr>
							</tbody>
						</table>
					</div>
					<div class="tile-body">
						<table class="table table-custom dataTable userTable">
							<colgroup>
								<col width="15%"/>
								<col width="35%"/>
								<col width="15%"/>
								<col width="35%"/>
							</colgroup>
							<tbody>
								<tr>
									<th>사업자 등록번호</th>
									<td><input type="text" name="comp_num" value="<?php echo $info->COMP_NUM; ?>" size="50"></td>
									<th>영업시간</th>
									<td><input type="text" name="comp_working_time" value="<?php echo $info->COMP_WORKING_TIME; ?>" size="50"></td>
								</tr>
								<tr>
									<th>업체명</th>
									<td><input type="text" name="comp_name" value="<?php echo $info->COMP_NAME; ?>" size="50"></td>
									<th>대표자명</th>
									<td><input type="text" name="comp_ceo_name" value="<?php echo $info->COMP_CEO_NAME; ?>" size="50"></td>
								</tr>
								<tr>
									<th>우편번호</th>
									<td>
										<input type="text" name="comp_zip" id="comp_zip" value="<?php echo $info->COMP_ZIP_CODE; ?>" size="50">
										<button type="button" class="btn btn-default btn-sm" id="searchZip">우편번호 검색</button>
									</td>
									<th>개인정보 보호책임자명</th>
									<td><input type="text" name="comp_cto_name" value="<?php echo $info->COMP_CTO_NAME; ?>" size="50"></td>
								</tr>
								<tr>
									<th>주소</th>
									<td><input type="text" name="comp_addr" id="comp_addr" value="<?php echo $info->COMP_ADDR; ?>" size="50"></td>
									<th>통신판매업신고번호</th>
									<td><input type="text" name="comp_sales_code" value="<?php echo $info->COMP_SALES_CODE; ?>" size="50"></td>
								</tr>
								<tr>
									<th>업태</th>
									<td><input type="text" name="comp_cate1" value="<?php echo $info->COMP_CATE1; ?>" size="50"></td>
									<th>종목</th>
									<td><input type="text" name="comp_cate2" value="<?php echo $info->COMP_CATE2; ?>" size="50"></td>
								</tr>
								<tr>
									<th>전화번호</th>
									<td><input type="text" name="comp_tel" value="<?php echo $info->COMP_TEL; ?>" size="50"></td>
									<th>팩스번호</th>
									<td><input type="text" name="comp_fax" value="<?php echo $info->COMP_FAX; ?>" size="50"></td>
								</tr>
							</tbody>
						</table>
					</div>

					<div class="tile-body">
						<table class="table table-custom dataTable userTable">
							<colgroup>
								<col width="15%"/>
								<col width="35%"/>
								<col width="15%"/>
								<col width="35%"/>
							</colgroup>
							<tbody>
								<tr>
									<th>인스타그램 URL</th>
									<td><input type="text" name="url_instagram" value="<?php echo $info->URL_INSTAGRAM; ?>" size="50"></td>
									<th>블로그 URL</th>
									<td><input type="text" name="url_blog" value="<?php echo $info->URL_NAVERBLOG; ?>" size="50"></td>
								</tr>
								<tr>
									<th>유튜브 URL</th>
									<td><input type="text" name="url_youtube" value="<?php echo $info->URL_YOUTUBE; ?>" size="50"></td>
									<th></th>
									<td>&nbsp;</td>
								</tr>
							</tbody>
						</table>
						 <div class="row form-footer">
                            <div class="col-sm-offset-2 col-sm-10 text-right">
                                <button type="button" class="btn btn-primary btn-sm" id="saveInfo">저장</button>
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
	<!-- Wrap all page content end -->
	<!-- 모달 팝업 -->
	<div class="modal fade" id="modalFamilySite" tabindex="-1" role="dialog" aria-labelledby="modalConfirmLabel" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">Close</button>
					<h3 class="modal-title" id="modalConfirmLabel">패밀리사이트 정보</h3>
				</div>
				<div class="modal-body">
					<form role="form">
					<input type="hidden" name="mode">
					<input type="hidden" name="domain_seq">
						<div class="form-group">
							<label for="domain">표기명칭</label>
							<input type="text" class="form-control" id="domain" name="family_site_name">
						</div>

						<div class="form-group">
							<label for="buy_site">연동 URL</label>
							<input type="text" class="form-control" id="buy_site" name="family_site_url">
						</div>
					</form>
				</div>
				<div class="modal-footer">
					<button class="btn btn-red" data-dismiss="modal" aria-hidden="true">취소</button>
					<button id="saveDomain" class="btn btn-green">저장하기</button>
				</div>
			</div><!-- /.modal-content -->
		</div><!-- /.modal-dialog -->
	</div><!-- /.modal -->

	<?php
		include_once dirname(__DIR__)."/admin/include/admin-footer.php";
	?>

<script src="//t1.daumcdn.net/mapjsapi/bundle/postcode/prod/postcode.v2.js"></script>
<div id="layer" style="display:none;position:fixed;overflow:hidden;z-index:1;-webkit-overflow-scrolling:touch;">
	<img src="//t1.daumcdn.net/postcode/resource/images/close.png" id="btnCloseLayer" style="cursor:pointer;position:absolute;right:-3px;top:-3px;z-index:1" alt="닫기 버튼">
</div>

</body>
</html>
<script type="text/javascript">
	$(function(){
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

		$(document).on("click", "#saveInfo", function(){
			var formData = $("#contentsForm").serialize();
			$.ajax({
				url:"/admin/setInfo",
				type:"post",
				dataType:"json",
				data : formData,
				success:function(data){
					console.log(data);
					if (data.code == "200"){
						alert(data.msg);
						// $("#modalFamilySite").modal("hide");
						document.location.reload();
					}
				}, error:function(e){
					console.log(e);
				}
			})
		});

		$(document).on("click", "#searchZip", function(){
			sample2_execDaumPostcode();
		});

		$(document).on("click", "#btnCloseLayer", function(){
			console.log("asdfasdfsadf");
			closeDaumPostcode();
		});

		// 우편번호 찾기 화면을 넣을 element
		var element_layer = document.getElementById('layer');

		function closeDaumPostcode() {
			// iframe을 넣은 element를 안보이게 한다.
			element_layer.style.display = 'none';
		}

		function sample2_execDaumPostcode() {
			var addr = ''; // 주소 변수
			var extraAddr = ''; // 참고항목 변수

			new daum.Postcode({
				oncomplete: function(data) {
					// 검색결과 항목을 클릭했을때 실행할 코드를 작성하는 부분.

					// 각 주소의 노출 규칙에 따라 주소를 조합한다.
					// 내려오는 변수가 값이 없는 경우엔 공백('')값을 가지므로, 이를 참고하여 분기 한다.


					//사용자가 선택한 주소 타입에 따라 해당 주소 값을 가져온다.
					if (data.userSelectedType === 'R') { // 사용자가 도로명 주소를 선택했을 경우
						addr = data.roadAddress;
					} else { // 사용자가 지번 주소를 선택했을 경우(J)
						addr = data.jibunAddress;
					}

					// 사용자가 선택한 주소가 도로명 타입일때 참고항목을 조합한다.
					if(data.userSelectedType === 'R'){
						// 법정동명이 있을 경우 추가한다. (법정리는 제외)
						// 법정동의 경우 마지막 문자가 "동/로/가"로 끝난다.
						if(data.bname !== '' && /[동|로|가]$/g.test(data.bname)){
							extraAddr += data.bname;
						}
						// 건물명이 있고, 공동주택일 경우 추가한다.
						if(data.buildingName !== '' && data.apartment === 'Y'){
							extraAddr += (extraAddr !== '' ? ', ' + data.buildingName : data.buildingName);
						}
						// 표시할 참고항목이 있을 경우, 괄호까지 추가한 최종 문자열을 만든다.
						if(extraAddr !== ''){
							extraAddr = ' (' + extraAddr + ')';
						}
						// 조합된 참고항목을 해당 필드에 넣는다.
						//document.getElementById("sample2_extraAddress").value = extraAddr;

					} else {
						//document.getElementById("sample2_extraAddress").value = '';
					}

					// 우편번호와 주소 정보를 해당 필드에 넣는다.
					document.getElementById('comp_zip').value = data.zonecode;
					document.getElementById("comp_addr").value = addr+extraAddr;
					// 커서를 상세주소 필드로 이동한다.
					document.getElementById("comp_addr").focus();

					// iframe을 넣은 element를 안보이게 한다.
					// (autoClose:false 기능을 이용한다면, 아래 코드를 제거해야 화면에서 사라지지 않는다.)
					element_layer.style.display = 'none';
				},
				width : '100%',
				height : '100%',
				maxSuggestItems : 5
			}).embed(element_layer);

			// iframe을 넣은 element를 보이게 한다.
			element_layer.style.display = 'block';

			// iframe을 넣은 element의 위치를 화면의 가운데로 이동시킨다.
			initLayerPosition();
		}

		// 브라우저의 크기 변경에 따라 레이어를 가운데로 이동시키고자 하실때에는
		// resize이벤트나, orientationchange이벤트를 이용하여 값이 변경될때마다 아래 함수를 실행 시켜 주시거나,
		// 직접 element_layer의 top,left값을 수정해 주시면 됩니다.
		function initLayerPosition(){
			var width = 500; //우편번호서비스가 들어갈 element의 width
			var height = 400; //우편번호서비스가 들어갈 element의 height
			var borderWidth = 2; //샘플에서 사용하는 border의 두께

			// 위에서 선언한 값들을 실제 element에 넣는다.
			element_layer.style.width = width + 'px';
			element_layer.style.height = height + 'px';
			element_layer.style.border = borderWidth + 'px solid';
			// 실행되는 순간의 화면 너비와 높이 값을 가져와서 중앙에 뜰 수 있도록 위치를 계산한다.
			element_layer.style.left = (((window.innerWidth || document.documentElement.clientWidth) - width)/2 - borderWidth) + 'px';
			element_layer.style.top = (((window.innerHeight || document.documentElement.clientHeight) - height)/2 - borderWidth) + 'px';
		}
	});
</script>
