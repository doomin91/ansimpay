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
													<input name="regDateStart" type="text" class="wid100p datepicker" value="<?php echo $startDate?>">
												</div>
												<div class="col-md-5">
													<input name="regDateEnd" type="text" class="wid100p datepicker" value="<?php echo $endDate?>">
												</div>
											</td>
										</tr>
										<tr>
											<th>단어검색</th>
											<td colspan="3">
												<div class="col-md-2">
													<select name="search_field" class="wid100p">
														<option value="all">전체</option>
														<option value="SUBJECT">제목</option>
														<option value="link">URL</option>
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
				


					<!-- row -->
					<div class="row">

								
					<!-- col 12 -->
					<div class="col-md-12">
					
					
					<!-- tile -->
					<section class="tile ">

						<!-- tile header -->
						<div class="tile-header ">
						<h1><strong>Basic</strong> Datatable </h1>
						<span class="note">including: <span class="italic">multi-column sorting and row select</span></span>
						<div class="controls">
							<a href="#" class="minimize"><i class="fa fa-chevron-down"></i></a>
							<a href="#" class="refresh"><i class="fa fa-refresh"></i></a>
							<a href="#" class="remove"><i class="fa fa-times"></i></a>
						</div>
						</div>
						<!-- /tile header -->

						<!-- tile body -->
						<div class="tile-body color transparent-black ">
						
						<div class="table-responsive">
							<table  class="table table-datatable table-custom" id="basicDataTable">
							<thead>
								<tr>
								<th class="sort-alpha">#</th>
								<th class="sort-alpha">제목</th>
								<th class="sort-amount">URL</th>
								<th class="sort-numeric">등록일</th>
								<th>기능</th>
								</tr>
							</thead>
							<tbody id="newsBody">
							</tbody>
							</table>
						</div>

						</div>
						<!-- /tile body -->

					</section>
					<!-- /tile -->
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
											<th class="sort">기능</th>
										</tr>
									</thead>

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
							<label for="subject">URL</label>
							<input type="text" class="form-control" id="link" name="link">
							<label for="subject">등록일</label>
							<input name="regDate" type="text" class="form-control wid100p datepicker" value="">
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
	
		loadData();
        function loadData(){
			$.ajax({
				url: 		 "/admin/getNewsList",
				dataType:	 "json",
				success: function(data){
                    let str = "";
                    let pagenum = data.length;
                    data.forEach(function(element){
                        str += `<tr>
                                    <td>${pagenum}</td>
                                    <td>${element.NL_SUBJECT}</td>
									<td><a href="${element.NL_LINK}" target="_blank";">${element.NL_LINK}</a></td>
                                    <td>${element.NL_REG_DATE}</td>
									<td>
										<button type="button" class="btn btn-xs btn-default">수정</button>
										<button type="button" class="btn btn-xs btn-danger">삭제</button>
										<button type="button" class="btn btn-xs btn-slategray">비공개</button>
									</td>
                                </tr>`;
                        pagenum -= 1;
                    })
                    $("#newsBody").html(str);
					loadBasicData();
				},
				error: function(e){
					alert("오류가 발생했습니다. 관리자에게 문의바랍니다.")
				}
			})
		}

		function saveNews(){
			
		}

		function modifyNews(){

		}

		function deleteNews(){

		}

		function loadBasicData(){
			// Add custom class to pagination div
			$.fn.dataTableExt.oStdClasses.sPaging = 'dataTables_paginate paging_bootstrap paging_custom';

			$('div.dataTables_filter input').addClass('form-control');
			$('div.dataTables_length select').addClass('form-control');

			/*************************************************/
			/**************** BASIC DATATABLE ****************/
			/*************************************************/

			/* Define two custom functions (asc and desc) for string sorting */
			jQuery.fn.dataTableExt.oSort['string-case-asc']  = function(x,y) {
				return ((x < y) ? -1 : ((x > y) ?  1 : 0));
			};
			
			jQuery.fn.dataTableExt.oSort['string-case-desc'] = function(x,y) {
				return ((x < y) ?  1 : ((x > y) ? -1 : 0));
			};

			/* Add a click handler to the rows - this could be used as a callback */
			$("#basicDataTable tbody tr").click( function( e ) {
				if ( $(this).hasClass('row_selected') ) {
				$(this).removeClass('row_selected');
				}
				else {
				oTable01.$('tr.row_selected').removeClass('row_selected');
				$(this).addClass('row_selected');
				}

				// FadeIn/Out delete rows button
				if ($('#basicDataTable tr.row_selected').length > 0) {
				$('#deleteRow').stop().fadeIn(300);
				} else {
				$('#deleteRow').stop().fadeOut(300);
				}
			});

			/* Build the DataTable with third column using our custom sort functions */
			var oTable01 = $('#basicDataTable').dataTable({
				"sDom":
				"R<'row'<'col-md-6'l><'col-md-6'f>r>"+
				"t"+
				"<'row'<'col-md-4 sm-center'i><'col-md-4'><'col-md-4 text-right sm-center'p>>",
				"oLanguage": {
				"sSearch": ""
				},
				"aaSorting": [ [0,'asc'], [1,'asc'] ],
				"aoColumns": [
				null,
				null,
				{ "sType": 'string-case' },
				null,
				null
				],
				"fnInitComplete": function(oSettings, json) { 
				$('.dataTables_filter input').attr("placeholder", "Search");
				}
			});

			// Append delete button to table
			var deleteRowLink = '<a href="#" id="deleteRow" class="btn btn-red btn-xs delete-row">Delete selected row</a>'
			$('#basicDataTable_wrapper').append(deleteRowLink);

			/* Add a click handler for the delete row */
			$('#deleteRow').click( function() {
				var anSelected = fnGetSelected(oTable01);
				if (anSelected.length !== 0 ) {
				oTable01.fnDeleteRow(anSelected[0]);
				$('#deleteRow').stop().fadeOut(300);
				}
			});

			/* Get the rows which are currently selected */
			function fnGetSelected(oTable01Local){
				return oTable01Local.$('tr.row_selected');
			};
		}
	</script>

</body>
</html>

