<div class="navbar navbar-default navbar-fixed-top navbar-transparent-black mm-fixed-top" role="navigation" id="navbar">



<!-- Branding -->
<div class="navbar-header col-md-2">
  <a class="navbar-brand" href="#">
	<strong>안심페이</strong> WEB ADMIN
  </a>
  <div class="sidebar-collapse">
	<a href="#">
	  <i class="fa fa-bars"></i>
	</a>
  </div>
</div>
<!-- Branding end -->


<!-- .nav-collapse -->
<div class="navbar-collapse">

  <!-- Page refresh -->
  <ul class="nav navbar-nav refresh hidden">
	<li class="divided">
	  <a href="#" class="page-refresh"><i class="fa fa-refresh"></i></a>
	</li>
  </ul>
  <!-- /Page refresh -->

  <!-- Search -->
  <div class="search hidden" id="main-search">
	<i class="fa fa-search"></i> <input type="text" placeholder="Search...">
  </div>
  <!-- Search end -->


  <!-- Sidebar -->
  <ul class="nav navbar-nav side-nav" id="sidebar">

	<li class="collapsed-content">
	  <ul>
		<li class="search"><!-- Collapsed search pasting here at 768px --></li>
	  </ul>
	</li>

	<li class="navigation" id="navigation">
	  <ul class="menu">
		<li class="dropdown">
				<a href="#" class="dropdown-toggle" data-toggle="dropdown">
					<i class="fa fa-circle-o" aria-hidden="true"></i> 기본 설정 <b class="fa fa-plus dropdown-plus"></b>
				</a>
				<ul class="dropdown-menu">
					<li>
						<a href="/admin/siteInfo">
							<i class="fa fa-caret-right"></i> 사이트 정보
						</a>
					</li>
					<li>
						<a href="/admin/managers">
							<i class="fa fa-caret-right"></i> 관리자 설정
						</a>
					</li>
				</ul>
			</li>

	  	<li class="dropdown">
			<a href="#" class="dropdown-toggle" data-toggle="dropdown">
				<i class="fa fa-circle-o" aria-hidden="true"></i> 게시판 관리 <b class="fa fa-plus dropdown-plus"></b>
			</a>
			<ul class="dropdown-menu">
				<li>
					<a href="/admin/recentlyList">
						<i class="fa fa-caret-right"></i> 최근 소식
					</a>
				</li>
				<li>
					<a href="/admin/newsList">
						<i class="fa fa-caret-right"></i> 뉴스
					</a>
				</li>
			</ul>
		</li>

		<li class="dropdown">
			<a href="#" class="dropdown-toggle" data-toggle="dropdown">
				<i class="fa fa-circle-o" aria-hidden="true"></i> 파트너사 관리 <b class="fa fa-plus dropdown-plus"></b>
			</a>
			<ul class="dropdown-menu" id="partnersBody">
				<!-- <li>
					<a href="/admin/partnerCategoryList">
						<i class="fa fa-caret-right"></i> 카테고리 추가/변경
					</a>
				</li> -->
				<!-- <li>
					<a href="/admin/partnerList">
						<i class="fa fa-caret-right"></i> 파트너사 추가/변경
					</a>
				</li> -->
			</ul>
		</li>

		<li class="dropdown">
			<a href="#" class="dropdown-toggle" data-toggle="dropdown">
				<i class="fa fa-circle-o" aria-hidden="true"></i> 키오스크 관리 <b class="fa fa-plus dropdown-plus"></b>
			</a>
			<ul class="dropdown-menu">
				<li>
					<a href="/admin/kiosk">
						<i class="fa fa-caret-right"></i> 키오스크
					</a>
				</li>
			</ul>
		</li>

		<li class="dropdown">
			<a href="#" class="dropdown-toggle" data-toggle="dropdown">
				<i class="fa fa-circle-o" aria-hidden="true"></i> 특허 및 수상내역 관리 <b class="fa fa-plus dropdown-plus"></b>
			</a>
			<ul class="dropdown-menu">
				<li>
					<a href="/admin/patent">
						<i class="fa fa-caret-right"></i> 특허
					</a>
				</li>
				<li>
					<a href="/admin/award">
						<i class="fa fa-caret-right"></i> 수상내역
					</a>
				</li>
			</ul>
		</li>

		<li class="dropdown">
			<a href="#" class="dropdown-toggle" data-toggle="dropdown">
				<i class="fa fa-circle-o" aria-hidden="true"></i> 서비스 관리 <b class="fa fa-plus dropdown-plus"></b>
			</a>
			<ul class="dropdown-menu" id="serviceBody">
			</ul>
		</li>

		<li class="dropdown">
			<a href="#" class="dropdown-toggle" data-toggle="dropdown">
				<i class="fa fa-circle-o" aria-hidden="true"></i> 사용 가맹점 관리 <b class="fa fa-plus dropdown-plus"></b>
			</a>
			<ul class="dropdown-menu">
				<li>
					<a href="/admin/sector">
						<i class="fa fa-caret-right"></i> 업종
					</a>
				</li>
				<li>
					<a href="/admin/franchisee">
						<i class="fa fa-caret-right"></i> 가맹점
					</a>
				</li>
			</ul>
		</li>

		<li class="dropdown">
			<a href="#" class="dropdown-toggle" data-toggle="dropdown">
				<i class="fa fa-circle-o" aria-hidden="true"></i> 고객 서비스 관리 <b class="fa fa-plus dropdown-plus"></b>
			</a>
			<ul class="dropdown-menu">
				<li>
					<a href="/admin/question">
						<i class="fa fa-caret-right"></i> 제휴문의
					</a>
				</li>
				<li>
					<a href="/admin/faq">
						<i class="fa fa-caret-right"></i> FAQ
					</a>
				</li>
				<li>
					<a href="/admin/library">
						<i class="fa fa-caret-right"></i> 자료실
					</a>
				</li>
			</ul>
		</li>
	  </ul>
	</li>
	
	<li class="navigation">
		<ul class="menu">
			<li>
				<a href="/login/logout">
					<i class="fa fa-power-off"></i> 로그아웃
				</a>
			</li>
			<li>
				<a href="/" target="_blank">
					<i class="fa fa-home"></i> 홈페이지 이동
				</a>
			</li>	
		</ul>
	</li>
  </ul>
  <!-- Sidebar end -->





</div>
<!--/.nav-collapse -->


</div>

<script src="https://code.jquery.com/jquery.js"></script>

<script>
loadMenu();
loadService();
function loadMenu(){
    console.log("setting ansimpay category menu...");
	$.ajax({
		url: "/adm/PartnersCategory/getPartnerCate",
		type: "get",
		dataType: "json",
		success: function(data){
			let str = `
						<li>
							<a href="/admin/partnerCategoryList">
								<i class="fa fa-caret-right"></i> 카테고리 추가/변경
							</a>
						</li>
						<br>
						`

			console.log(data);
			data.forEach(function(element){
				str += 	`
						<li>
							<a href="/admin/partnerList/${element.PC_SEQ}">
								<i class="fa fa-caret-right"></i> ${element.PC_CATEGORY_NAME}
							</a>
						</li>
						`
			})
			$("#partnersBody").html(str);
		},
		error: function(e){
			alert("메뉴 구조를 불러오는데 실패했습니다.");
			console.log(e.responseText);
		}
	})
}

function loadService(){
	$.ajax({
		url: "/adm/ServiceCategory/getServiceCate",
		type: "get",
		dataType: "json",
		success: function(data){
			let str = `
						<li>
							<a href="/admin/serviceCategoryList">
								<i class="fa fa-caret-right"></i> 서비스 추가/변경
							</a>
						</li>
						<br>
						`

			console.log(data);
			data.forEach(function(element){
				str += 	`
						<li>
							<a href="/admin/serviceList/${element.SC_SEQ}">
								<i class="fa fa-caret-right"></i> ${element.SC_CATEGORY_NAME}
							</a>
						</li>
						`
			})
			$("#serviceBody").html(str);
		},
		error: function(e){
			alert("메뉴 구조를 불러오는데 실패했습니다.");
			console.log(e.responseText);
		}
	})
}

</script>