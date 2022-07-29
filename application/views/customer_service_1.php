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
                    <div class="visual-inner customer_service_banner dark-overlay parallax" data-stellar-background-ratio="0.55">
                        <div class="centered">
                            <div class="container">
                                <div class="visual-text visual-center">
                                    <h1 class="visual-title visual-sub-title">고객서비스</h1>
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
                            <div class="demo-wrapper pb-0">
                                <div class="col-wrap">
                                    <div class="block-heading">
                                        <h2 class="block-main-heading">자료실</h2>
                                        <span class="block-sub-heading" style="font-size:14px;">가입 서류 다운로드 자료실 입니다.</span>
                                    </div>
                                </div>
                                <div class="table-responsive">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th scope="col" class="text-center pc_contents_font m_contents_font">개인 사업자용 서류 다운로드</th>
                                                <th scope="col" class="text-center pc_contents_font m_contents_font">법인 사업자용 서류 다운로드</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td class="text-center" style="vertical-align:middle;">
                                                    <p style="font-size:14px;">
                                                        <a href="assets/down_load/private/%EA%B3%84%EC%95%BD%EC%84%9C.doc" style="color:black;">
                                                            <i class="fa fa-file-word-o">
                                                                계약서    
                                                            </i>
                                                        </a>
                                                    </p>
                                                    <p style="font-size:14px;">
                                                        <a href="assets/down_load/private/%EC%9C%A0%EC%98%88%ED%8A%B9%EC%95%BD%EC%84%9C.doc" style="color:black;">
                                                            <i class="fa fa-file-word-o">
                                                                유예특약서
                                                            </i>
                                                        </a>
                                                    </p>
                                                    <p style="font-size:14px;">
                                                        <a href="assets/down_load/private/%EC%86%8C%EC%9C%A0%EC%9E%90%ED%99%95%EC%9D%B8%EC%84%9C%EB%A5%98.doc" style="color:black;">
                                                            <i class="fa fa-file-word-o">
                                                                소유자 확인서류
                                                            </i>
                                                        </a>
                                                    </p>
                                                    <p style="font-size:14px;">
                                                        <a href="assets/down_load/private/%EA%B0%9C%EC%9D%B8(%EC%8B%A0%EC%9A%A9)%EC%A0%95%EB%B3%B4%EC%A1%B0%ED%9A%8C%EB%8F%99%EC%9D%98%EC%84%9C_(%EA%B0%9C%EC%9D%B8).doc" style="color:black;">
                                                            <i class="fa fa-file-word-o">
                                                                개인(신용)정보조회동의서
                                                            </i>
                                                        </a>
                                                    </p>
                                                    <p style="font-size:14px;">
                                                        <a href="assets/down_load/corporation/2.%20%EC%95%88%EC%8B%AC%ED%8E%98%EC%9D%B4%20%EC%84%9C%EB%B9%84%EC%8A%A4%20%EA%B3%84%EC%95%BD%EC%84%9C.hwp" style="color:black;">
                                                            <i class="fa fa-file-word-o">
                                                                안심페이 서비스 계약서
                                                            </i>
                                                        </a>
                                                    </p>
                                                    <p style="font-size:14px;">
                                                        <a href="assets/down_load/corporation/3.%20%EC%95%88%EC%8B%AC%ED%8E%98%EC%9D%B4%20%EC%84%9C%EB%B9%84%EC%8A%A4%20%EC%9D%B4%EC%9A%A9%20%EC%8B%A0%EC%B2%AD%EC%84%9C.hwp" style="color:black;">
                                                            <i class="fa fa-file-word-o">
                                                                안심페이 서비스 이용 신청서
                                                            </i>
                                                        </a>
                                                    </p>
                                                </td>
                                                <td class="text-center" style="vertical-align:middle;">
                                                    <p style="font-size:14px;">
                                                        <a href="assets/down_load/corporation/%EA%B3%84%EC%95%BD%EC%84%9C(%EB%B2%95%EC%9D%B8).doc" style="color:black;">
                                                            <i class="fa fa-file-word-o">
                                                                계약서    
                                                            </i>
                                                        </a>
                                                    </p>
                                                    <p style="font-size:14px;">
                                                        <a href="assets/down_load/corporation/%EC%9C%A0%EC%98%88%ED%8A%B9%EC%95%BD%EC%84%9C(%EB%B2%95%EC%9D%B8).doc"    style="color:black;">
                                                            <i class="fa fa-file-word-o">
                                                                유예특약서
                                                            </i>
                                                        </a>
                                                    </p>
                                                    <p style="font-size:14px;">
                                                        <a href="assets/down_load/corporation/%EC%86%8C%EC%9C%A0%EC%9E%90%ED%99%95%EC%9D%B8%EC%84%9C%EB%A5%98(%EB%B2%95%EC%9D%B8).doc"  style="color:black;">
                                                            <i class="fa fa-file-word-o">
                                                                소유자 확인서류
                                                            </i>
                                                        </a>
                                                    </p>
                                                    <p style="font-size:14px;">
                                                        <a href="assets/down_load/corporation/%EA%B0%9C%EC%9D%B8(%EC%8B%A0%EC%9A%A9)%EC%A0%95%EB%B3%B4%EC%A1%B0%ED%9A%8C%EB%8F%99%EC%9D%98%EC%84%9C_(%EB%B2%95%EC%9D%B8).doc" style="color:black;">
                                                            <i class="fa fa-file-word-o">
                                                                개인(신용)정보조회동의서
                                                            </i>
                                                        </a>
                                                    </p>
                                                    <p style="font-size:14px;">
                                                        <a href="assets/down_load/corporation/2.%20%EC%95%88%EC%8B%AC%ED%8E%98%EC%9D%B4%20%EC%84%9C%EB%B9%84%EC%8A%A4%20%EA%B3%84%EC%95%BD%EC%84%9C.hwp" style="color:black;">
                                                            <i class="fa fa-file-word-o">
                                                                안심페이 서비스 계약서
                                                            </i>
                                                        </a>
                                                    </p>
                                                    <p style="font-size:14px;">
                                                        <a href="assets/down_load/corporation/3.%20%EC%95%88%EC%8B%AC%ED%8E%98%EC%9D%B4%20%EC%84%9C%EB%B9%84%EC%8A%A4%20%EC%9D%B4%EC%9A%A9%20%EC%8B%A0%EC%B2%AD%EC%84%9C.hwp" style="color:black;">
                                                            <i class="fa fa-file-word-o">
                                                                안심페이 서비스 이용 신청서
                                                            </i>
                                                        </a>
                                                    </p>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <div class="table-responsive mt-5">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th scope="col" class="text-center m_font">양수양도계약(사업자번호가 변경되는 경우)</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td class="text-center" style="vertical-align:middle">
                                                    <p style="font-size:14px;">
                                                        <a href="assets/down_load/corporation/%EA%B0%9C%EC%9D%B8(%EC%8B%A0%EC%9A%A9)%EC%A0%95%EB%B3%B4%EC%A1%B0%ED%9A%8C%EB%8F%99%EC%9D%98%EC%84%9C_(%EB%B2%95%EC%9D%B8).doc" style="color:black;">
                                                            <i class="fa fa-file-word-o">
                                                                양수양도약정서                                                    
                                                            </i>
                                                        </a>
                                                    </p>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <div class="table-responsive mt-5">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th scope="col" class="text-center pc_contents_font m_contents_font">고객용 메뉴얼</th>
                                                <th scope="col" class="text-center pc_contents_font m_contents_font">가맹점용 메뉴얼</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td class="text-center" style="vertical-align:middle;">
                                                    <p style="font-size:14px;">
                                                        <a href="assets/down_load/%EC%95%88%EC%8B%AC%ED%8E%98%EC%9D%B4_%EB%A9%94%EB%89%B4%EC%96%BC_%EB%AA%A8%EB%B0%94%EC%9D%BC%EC%95%B1(%EA%B3%A0%EA%B0%9D).pdf" style="color:black;">
                                                            <i class="fa fa-file-word-o">
                                                                고객용 메뉴얼
                                                            </i>
                                                        </a>
                                                    </p>
                                                </td>
                                                <td class="text-center" style="vertical-align:middle;">
                                                    <p style="font-size:14px;">
                                                        <a href="assets/down_load/%EC%95%88%EC%8B%AC%ED%8E%98%EC%9D%B4_%EB%A9%94%EB%89%B4%EC%96%BC_%ED%8C%8C%ED%8A%B8%EB%84%88%EC%84%BC%ED%84%B0(%EA%B0%80%EB%A7%B9%EC%A0%90).pdf" style="color:black;">
                                                            <i class="fa fa-file-word-o">
                                                                가맹점용 메뉴얼
                                                            </i>
                                                        </a>
                                                    </p>
                                                </td>
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
        <?php
        include_once dirname(__DIR__)."/views/include/corporation.php";
        ?>

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
    <!-- jquery library -->
    </body>

<?php
        include_once dirname(__DIR__)."/views/include/footer.php";
?>