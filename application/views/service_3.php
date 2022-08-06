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
                                        <img src="/assets/img/gif/mobile_flow.gif" alt="images">
                                    </div>
                                </div>
                                <div class="v-align-col col-lg-5 offset-lg-1">
                                    <div class="inner">
                                        <div class="text-wrap text-left">
                                            <h3 >키오스크 결제</h3>
                                            <p style="font-size:16px !important;">
                                                키오스크 결제는 키오스크(Kiosk)기기 나 DID(Digital Information Display)에 접목시켜 결제를 가능하게 만든 결제 방법입니다.
                                            </p>
                                            <p style="font-size:16px !important;">
                                                기존 결제방법들을  키오스크나 DID에 호환시켜 만든 안심페이만의 독자적인 결제방법입니다. 키오스크나DID의 디자인이나 하드웨어의 성능은 정해져
                                                있지 않으며 원하시는 요구사항에 따라 주문제작 하여 만듭니다. 
                                            </p>
                                            <p style="font-size:16px !important;">
                                                키오스크 결제는 안심페이의 기존 결제 방법들을 그대로 가져왔기 때문에 모든 결제 방법을 사용할 수 있으며, 발권 대기 순번표, 영수증 등
                                                다양한 기능들이 탑재되어 있습니다.
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
