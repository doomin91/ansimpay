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
                    <div class="visual-inner portfolio-banner dark-overlay parallax" data-stellar-background-ratio="0.55">
                        <div class="centered">
                            <div class="container">
                                <div class="visual-text visual-center">
                                    <h1 class="visual-title visual-sub-title">서비스</h1>
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
                            <div class="row portfolio-gallery">
                                <div class="bottom-space-medium-only col-lg-6">
                                    <div class="img-block shine-effect image-zoom">
                                        <img src="/assets/img/gif/pmp_sys.gif" alt="images">
                                    </div>
                                </div>
                                <div class="v-align-col col-lg-5 offset-lg-1">
                                    <div class="inner">
                                        <div class="text-wrap text-left">
                                            <h3 >주차관리 결제 시스템</h3>
                                            <p style="font-size:16px !important;">
                                               주차관리 결제 시스템은 기존 주차관리 시스템에 안심페이 솔루션을 탑재한 키오스크(Kiosk)나 DID(Digital Information Display)를 접목하여 결제를 가능하게 만든 결제 방법입니다.
                                            </p>
                                            <p style="font-size:16px !important;">
                                                기존 주차권이나 할인권을 직접 주차정산 기기에 삽입하여 정산을 하는 시스템이 아닌
                                                SMS나 QR코드를 이용하여 안심페이 앱 자체에서 결제하는 방법입니다.
                                            </p>
                                            <p style="font-size:16px !important;">
                                                KIOSK나 DID는 주문 제작 형식으로 이루어지며 디자인이나 사양은 원하시는 요구 사항에 따라 제작이 가능합니다.

                                                주차관리 결제 시스템은 KIOSK나 DID에서만 호환되는 것이 아니고 태블릿, 모바일, PC에서도 호환이 가능합니다.
                                                안심페이 솔루션이 탑재되어 있기 때문에 기존 안심페이의 모든 결제 방법을 모두 이용 가능합니다.
                                            </p>
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

    <?php
    include_once dirname(__DIR__)."/views/include/footer.php";
?>
