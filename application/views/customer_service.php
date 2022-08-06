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
                            <div class="pb-0">
                                <div class="col-wrap">
                                    <div class="block-heading">
                                        <h2 class="block-main-heading">제휴 문의</h2>
                                        <span class="block-sub-heading" style="font-size:14px;">자세한 내용은 고객센터(1566-5016)로 문의 부탁드립니다.</span>
                                    </div>
                                </div>
                                <div class="table-responsive">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th scope="col" class="text-center" style="font-size:18px;">개인 사업자</th>
                                                <th scope="col" class="text-center" style="font-size:18px;">법인 사업자</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td class="pc_contents_font m_contents_font text-left">
                                                    <p>1. NHN KCP 전자결제 서비스 이용 계약서 1부</p>
                                                    <p>2. 사업자등록증 사본 1부</p>
                                                    <p>3. 결제대금이 입금될 계좌사본 1부 (대표자 또는 상호명의)</p>
                                                    <p>4. 대표자 신분증 사본 1부 (마스킹 없이 전체)</p>
                                                    <p>5. 보증보험증권 (보증보험사에서 서류발송 대행)</p>
                                                    <p>※ 보증보험은 보증보험사로 직접 신청해주시기 바랍니다.</p>
                                                    <p>6. 보증보험가입 유예특약서 1부</p>
                                                    <p>※ 유예특약대상 사업자는 상기보증보험증권의 제출이 면제됩니다.</p>
                                                    <p>7. 소유자 확인서류 1부</p>
                                                    <p>8. 개인(신용)정보 조회 동의서 1부 (서면 접수 시)</p>
                                                    <p>9. 실제 소유자 신분증 사본 1부 (마스킹 없이 전체)</p>
                                                    <p>※ 대표자와 실제 소유자가 다른 경우 제출되어야 합니다.	</p>
                                                    <p>10. 안심페이 서비스 계약서</p>
                                                    <p>11. 안심페이 서비스 이용 신청서</p>
                                                </td>
                                                <td class="pc_contents_font m_contents_font text-left">
                                                    <p>1. NHN KCP 전자결제 서비스 이용 계약서 1부</p>
                                                    <p>2. 사업자등록증 사본 1부</p>
                                                    <p>3. 결제대금이 입금될 계좌사본 1부 (법인명의)</p>
                                                    <p>4. 법인 인감증명서 원본 (공동대표인 경우 모두필요)</p>
                                                    <p>5. 법인 등기부등본 원본</p>
                                                    <p>6. 보증보험증권 (보증보험사에서 서류발송 대행)</p>
                                                    <p>※ 보증보험은 보증보험사로 직접 신청해주시기 바랍니다.</p>
                                                    <p>7. 보증보험가입 유예특약서 1부</p>
                                                    <p>※ 유예특약대상 사업자는 상기보증보험증권의 제출이 면제됩니다.</p>
                                                    <p>8. 소유자 확인서류 1부</p>
                                                    <p>9. 소유자 추가 확인서류 1부 (주주명부 또는 이사회 정관)</p>
                                                    <p>10. 개인(신용)정보 조회 동의서 1부 (서면 접수 시)</p>
                                                    <p>11. 안심페이 서비스 계약서</p>
                                                    <p>12. 안심페이 서비스 이용 신청서</p>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <div class="table-responsive mt-5">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th scope="col" class="text-center pc_font m_font">양수양도계약(사업자번호가 변경되는 경우)</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td class="" style="font-size:16px;">
                                                    <p class="pc_contents_font text-left m_contents_font">1. 개인 또는 법인 사업자 기본 제출서류</p>
                                                    <p class="pc_contents_font text-left m_contents_font">2. 양수양도 약정서 1부</p>
                                                    <p class="pc_contents_font text-left m_contents_font">3. 전사업자가 개인사업자인 경우 대표자 신분증 사본1부(공동대표인 경우 모두 필요)</p>
                                                    <p class="pc_contents_font text-left m_contents_font">전사업자가 법인사업자인 경우 법인인감증명서 사본1부(공동대표인 경우 모두 필요)</p>
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