<?php
        include_once dirname(__DIR__)."/views/include/header.php";
?>

<body>
    <div class="preloader" id="pageLoad">
        <div class="holder">
            <div class="coffee_cup"></div>
        </div>
    </div>
    
    <!-- main wrapper -->
    <div id="wrapper">
        <div class="page-wrapper">
            <!-- header of the page -->
            <?php 
                include_once dirname(__DIR__)."/views/include/top_menu.php";
            ?>
            <!--/header of the page -->
            <main>
                <!-- visual/banner of the page -->
                <section class="visual">
                    <div class="visual-inner about-banner dark-overlay parallax" data-stellar-background-ratio="0.55">
                        <div class="centered">
                            <div class="container">
                                <div class="visual-text visual-center">
                                    <h1 class="visual-title visual-sub-title">소개</h1>
<!--
                                    <div class="breadcrumb-block">
                                        <ol class="breadcrumb">
                                            <li class="breadcrumb-item"><a href="index.html"> Home </a></li>
                                            <li class="breadcrumb-item active"> About Company </li>
                                        </ol>
                                    </div>
-->
                                </div>
                            </div>
                        </div>
                    </div>
                    
                </section>
                <!--/visual/banner of the page -->
                <!-- main content wrapper -->
                <div class="content-wrapper">
                    <section class="content-block">
                        <div class="container text-center">
                            <div class="demo-wrapper">
                                <h3 class="text-center element-heading">News</h3>
                                <div class="data-table" style="border:0;">
                                    <table id="myTable" class="display" style="width:100%;">
                                        <thead style="display:none;">
                                            <tr>
                                                <th>num</th>
                                                <th>news_title</th>
                                                <th>date</th>
                                            </tr>
                                        </thead>
                                        <tbody id="newsBody">
                                            <tr>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </section>
                    
                </div>
                <!--/main content wrapper -->
            </main>
        </div>
        
    </div>
     <!-- search form wrapper -->
    <div class="search-form-wrapper">
        <a href="#" class="nav-search-link close"><span class="icon-android-close"></span></a>
        <div class="holder">
            <input type="search" class="form-control form-control-v1" placeholder="Enter Your Search">
             <button type="submit"><span class="custom-icon-search"></span></button>
        </div>
    </div>

     <a href="#" class="section-scroll" id="scroll-to-top"><i class="fa fa-angle-up"></i></a>

    <?php
        include_once dirname(__DIR__)."/views/include/footer.php";
    ?>
         
    <script>
	    loadData();
        function loadData(){
			$.ajax({
				url: 		 "/notice/getNewsList",
				dataType:	 "json",
				success: function(data){
                    let str = "";
                    let pagenum = data.length;
                    data.forEach(function(element){
                        str += `<tr>
                                    <td>${pagenum}</td>
                                    <td><a href="${element.NL_LINK}" target="_blank" style="font-size:16px; color:black;">${element.NL_SUBJECT}</a></td>
                                    <td>${element.NL_REG_DATE}</td>
                                </tr>`;
                        pagenum -= 1;
                    })
                    $("#newsBody").html(str);
                    loadDataTable();
				},
				error: function(e){
					alert("오류가 발생했습니다. 관리자에게 문의바랍니다.")
				}
			})
		}

        function loadDataTable(){
            $("#myTable").dataTable({
                        lengthChange: false,
                        searching: false,
                        info: false,
                        responsive: true,
                        orderMulti: true,
                        order : [[0, 'desc']],
                        language: {
                                "emptyTable": "데이터가 없어요.",
                                "lengthMenu": "페이지당 _MENU_ 개씩 보기",
                                "info": "현재 _START_ - _END_ / _TOTAL_건",
                                "infoEmpty": "데이터 없음",
                                "infoFiltered": "( _MAX_건의 데이터에서 필터링됨 )",
                                "search": "에서 검색: ",
                                "zeroRecords": "일치하는 데이터가 없어요.",
                                "loadingRecords": "로딩중...",
                                "processing":     "잠시만 기다려 주세요...",
                                "paginate": {
                                    "next": ">>",
                                    "previous": "<<"
                                }
                        }
                    })
            }
    </script>