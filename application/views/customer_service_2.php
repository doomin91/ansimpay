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
                            <div class="faq-title mb-60">
                                <h2>자주 묻는질문</h2>
                            </div>
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="panel-group" id="accordion">
                                        <div class="panel faq-accordion mb-20">
                                            <div class="panel-heading">
                                                <h4 class="panel-title">
                                                    <a class="collapsed" data-toggle="collapse" data-target="#faq-accordion1" href="#faq-accordion1">
                                                        가맹점 계약 절차는 어떻게 되나요?
                                                    </a>
                                                </h4>
                                            </div>
                                            <div id="faq-accordion1" data-parent="#accordion" class="panel-collapse collapse">
                                                <div class="panel-body">
                                                    <p style="padding: 0px 60px 10px 30px !important;">안심페이의 가맹점 계약 절차는 아래 표를 참고하신 후 구비서류를 제출하시면 됩니다.</p>
                                                    <p>자세한 내용은 서비스 신청 안내로 가시면 좀 더 상세하게 설명되어 있으니 참고하시기 바랍니다.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="panel faq-accordion mb-20">
                                            <div class="panel-heading">
                                                <h4 class="panel-title">
                                                    <a class="collapsed" data-toggle="collapse" data-target="#faq-accordion2" href="#faq-accordion2">
                                                        정산주기는 언제인가요?
                                                    </a>
                                                </h4>
                                            </div>
                                            <div id="faq-accordion2" data-parent="#accordion" class="panel-collapse collapse">
                                                <div class="panel-body">
                                                    <p>일반적인 가맹점 정산주기는 D+5일 이지만, 가맹점마다 정산주기는 조금씩의 차이가 날 수 있습니다.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="panel faq-accordion mb-20">
                                            <div class="panel-heading">
                                                <h4 class="panel-title">
                                                    <a class="collapsed" data-toggle="collapse" data-target="#faq-accordion3" href="#faq-accordion3">
                                                        유의 업종 및 리스크 업종은 어떤 업종이 있나요?
                                                    </a>
                                                </h4>
                                            </div>
                                            <div id="faq-accordion3" data-parent="#accordion" class="panel-collapse collapse">
                                                <div class="panel-body">
                                                    <p style="padding: 0px 60px 10px 30px !important;">사행성/ 환금성/ 청소년 유해 사이트/ 다단계 등의 업종에 한하여 이용 제한이 되지만</p>
                                                    <p>제한업종에 대한 세부적인 업종은 각 카드사 마다 차이가 있기 때문에 자세한 내용은 문의주시면 상세하게 안내해 드립니다.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="panel faq-accordion mb-20">
                                            <div class="panel-heading">
                                                <h4 class="panel-title">
                                                    <a class="collapsed" data-toggle="collapse" data-target="#faq-accordion4" href="#faq-accordion4">
                                                        가맹점 계약후 정상적인 서비스 이용까지 시간은 얼마나 걸리나요?
                                                    </a>
                                                </h4>
                                            </div>
                                            <div id="faq-accordion4" data-parent="#accordion" class="panel-collapse collapse">
                                                <div class="panel-body">
                                                    <p>구비서류 제출 후 통상적으로는 5~7일 이내 이지만, 가맹점마다 조금씩의 차이가 있을 수 있습니다.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="panel faq-accordion mb-20">
                                            <div class="panel-heading">
                                                <h4 class="panel-title">
                                                    <a class="collapsed" data-toggle="collapse" data-target="#faq-accordion5" href="#faq-accordion5">
                                                        보증보험 가입은 필수인가요?
                                                    </a>
                                                </h4>
                                            </div>
                                            <div id="faq-accordion5" data-parent="#accordion" class="panel-collapse collapse">
                                                <div class="panel-body">
                                                    <p style="padding: 0px 60px 10px 30px !important;">보증보험 가입은 필수가 아닙니다.</p>
                                                    <p>하지만 불미스러운 사고에 대한 책임은 해당 가맹점에서 책임져야 하기 때문에, 보증보험을 가입하시는 것을 권장합니다.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="panel-group" id="accordion2">
                                        <div class="panel faq-accordion mb-20">
                                            <div class="panel-heading">
                                                <h4 class="panel-title">
                                                    <a class="collapsed" data-toggle="collapse" data-target="#faq-accordion6" href="#faq-accordion6">
                                                        단말기(POS, 무선 단말기)를 구매하여야 하나요?
                                                    </a>
                                                </h4>
                                            </div>
                                            <div id="faq-accordion6" data-parent="#accordion2" class="panel-collapse collapse">
                                                <div class="panel-body">
                                                    <p style="padding: 0px 60px 10px 30px !important;">저희 안심페이는 단말기를 구매하지않고 사용중인 스마트폰이나 인터넷기능을 지원하는 모든 기기에서 사용이 가능합 니다.</p> 
                                                    <p>굳이 스마트폰이 아니더라도 PC에서도 사용이 가능하니 굳이 단말기를 구매하지않아도 됩니다.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="panel faq-accordion mb-20">
                                            <div class="panel-heading">
                                                <h4 class="panel-title">
                                                    <a class="collapsed" data-toggle="collapse" data-target="#faq-accordion7" href="#faq-accordion7">
                                                        영수증은 어디서 확인하나요?
                                                    </a>
                                                </h4>
                                            </div>
                                            <div id="faq-accordion7" data-parent="#accordion2" class="panel-collapse collapse">
                                                <div class="panel-body">
                                                    <p style="padding: 0px 60px 10px 30px !important;">안심페이로 결제된 영수증은 가맹점에서는 안심페이 파트너센터 &gt; 결제 관리 &gt; 결제내역 &gt; 결제요청 ID를 클릭하시면 확인가능합니다.</p>
                                                    <p>고객인 경우 안심페이 앱 &gt; 결제내역관리에서 확인가능합니다. 가맹점은 영수증을 따로 발권하지않아도 됩니다.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="panel faq-accordion mb-20">
                                            <div class="panel-heading">
                                                <h4 class="panel-title">
                                                    <a class="collapsed" data-toggle="collapse" data-target="#faq-accordion8" href="#faq-accordion8">
                                                        영수증 출력을 하려하는데 어떻게하나요?
                                                    </a>
                                                </h4>
                                            </div>
                                            <div id="faq-accordion8" data-parent="#accordion2" class="panel-collapse collapse">
                                                <div class="panel-body">
                                                    <p>영수증 출력은 파트너센터 &gt; 결제관리 &gt; 결제내역 &gt; 결제요청ID 클릭 후 팝업창 하단 영수증 출력 버튼을 클릭하면됩니다.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="panel faq-accordion mb-20">
                                            <div class="panel-heading">
                                                <h4 class="panel-title">
                                                    <a class="collapsed" data-toggle="collapse" data-target="#faq-accordion9" href="#faq-accordion9">
                                                        결제 수수료는 어떻게 되나요?
                                                    </a>
                                                </h4>
                                            </div>
                                            <div id="faq-accordion9" data-parent="#accordion2" class="panel-collapse collapse">
                                                <div class="panel-body">
                                                    <p style="padding: 0px 60px 10px 30px !important;"> 수수료는 매출별, 업종에 따라 상이 하게 적용될 수 있습니다. 통상적으로는 3.5%입니다.</p>
                                                    <p>자세한 사항은 안심페이 고객센터로 문의주시면 상세하게 안내받으실 수 있습니다.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="panel faq-accordion mb-20">
                                            <div class="panel-heading">
                                                <h4 class="panel-title">
                                                    <a class="collapsed" data-toggle="collapse" data-target="#faq-accordion10" href="#faq-accordion10">
                                                        결제취소는 어떻게 해야되나요?
                                                    </a>
                                                </h4>
                                            </div>
                                            <div id="faq-accordion10" data-parent="#accordion2" class="panel-collapse collapse">
                                                <div class="panel-body">
                                                    <p>결제취소는 결제관리 &gt; 결제내역에서 취소버튼을 누르시면 결제취소가 진행됩니다. </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
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