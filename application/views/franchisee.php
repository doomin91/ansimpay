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
                    <div class="visual-inner franchisee_banner dark-overlay parallax" data-stellar-background-ratio="0.55">
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
                            <div class="row multiple-row v-align-row">
                                <div class="col-lg-12 col-md-12 text-center">
                                    <div class="col-wrap">
                                        <div class="block-heading">
                                            <h3 class="block-top-heading">안심페이를 사용 할 수 있는</h3>
                                            <h2 class="block-main-heading">다양한 업종</h2>
                                            <span class="block-sub-heading">안심페이를 사용 할 수 있는 다양한 업종을 확인해보세요.</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6 ">
                                    <div class="col-wrap">
                                        <div class="ico-box bg-gray-light has-radius-medium box_height1">
                                            <div class="icon">
                                                <span class="custom-icon-pen-tool">
                                                    <i class="fa fa-graduation-cap" aria-hidden="true"></i>
                                                </span>
                                            </div>
                                            <h4 class="content-title"><a href="#">학원</a></h4>
                                            <div class="des">
                                                <p>매달 학원비 결제요청을 일일히 하지않고 대량으로 한번에 발송이 가능합니다.</p>
                                                <p>아이들에게 카드를 맡기고 결제를 하는 일이 없어 카드 분실의 위험이 없습니다.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6 ">
                                    <div class="col-wrap">
                                        <div class="ico-box bg-gray-light has-radius-medium box_height1">
                                            <div class="icon">
                                                <span class="custom-icon-vector">
                                                    <i class="fa fa-truck" aria-hidden="true"></i>
                                                </span>
                                            </div>
                                            <h4 class="content-title"><a href="#">유통판매업</a></h4>
                                            <div class="des">
                                                <p>대량으로 판매하는 유통판매업종에서 용이하게 사용할 수 있습니다.</p>
                                                <p>결제요청 한번으로 직접 방문하지않고 원거리에서 결제가 가능하며 영수증을 따로 발부하지 않아도 됩니다.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6">
                                    <div class="col-wrap">
                                        <div class="ico-box bg-gray-light has-radius-medium box_height1">
                                            <div class="icon">
                                                <span class="custom-icon-font-design">
                                                    <i class="fa fa-hospital-o" aria-hidden="true"></i>
                                                </span>
                                            </div>
                                            <h4 class="content-title"><a href="#">대학병원/개인병원</a></h4>
                                            <div class="des">
                                                <p>환자가 많은 병원의 특성상 결제 시간이 오래걸립니다. 하지만 키오스크 결제로 결제 시간을 단축해보세요.</p>
                                                <p>일, 월 별 매출관리가 가능하며 예약환자에게는 원거리 결제요청을 하여 미리 결제를 받아 업무의 효율을 높입니다</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6">
                                    <div class="col-wrap">
                                        <div class="ico-box bg-gray-light has-radius-medium box_height1">
                                            <div class="icon">
                                                <span class="custom-icon-layers">
                                                    <i class="fa fa-car" aria-hidden="true"></i>
                                                </span>
                                            </div>
                                            <h4 class="content-title"><a href="#">렌탈서비스</a></h4>
                                            <div class="des">
                                                <p>매달 렌탈료를 받아야 하는 렌탈서비스 특성상 매달 렌탈고객에게 문자를 보내는 수고를 덜어보세요.</p>
                                                <p>굳이 가상계좌를 받지않아도 원거리 결제 요청으로 한번에 결제를 간편하게 영수증을 따로 보내지않아도 OK</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6">
                                    <div class="col-wrap">
                                        <div class="ico-box bg-gray-light has-radius-medium box_height1">
                                            <div class="icon">
                                                <span class="custom-icon-layers">
                                                    <i class="fa fa-university" aria-hidden="true"></i>
                                                </span>
                                            </div>
                                            <h4 class="content-title"><a href="#">관공서</a></h4>
                                            <div class="des">
                                                <p>벌금, 세금 고지서를 매달 우편으로 보내는 수고를 덜 수 있습니다.</p>
                                                <p>파트너센터를 통해 벌금, 세금 고지를 보내어 전송 여부, 보낸 날짜/시간을 확인 할 수 있습니다.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6">
                                    <div class="col-wrap">
                                        <div class="ico-box bg-gray-light has-radius-medium box_height1">
                                            <div class="icon">
                                                <span class="custom-icon-layers">
                                                    <i class="fa fa-building" aria-hidden="true"></i>
                                                </span>
                                            </div>
                                            <h4 class="content-title"><a href="#">임대업</a></h4>
                                            <div class="des">
                                                <p>매달 받는 월세 안심페이로 결제 요청을 해보세요.</p>
                                                <p>월세 굳이 받으러 다니지않고 결제요청을 하여 간편하게 </p>
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