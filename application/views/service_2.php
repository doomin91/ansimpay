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
                                            <h3 >mobile 결제</h3>
                                            <p style="font-size:16px !important;">
                                                모바일 결제는 기존결제 방식과 동일한 결제 방식으로 휴대폰내에 있는 카드사의 앱을 통하여 간편하게 결제 하는 방법입니다.
                                            </p>
                                            <p style="font-size:16px !important;">
                                                NFC기능이 지원되지않거나 카드를 들고 다니지 않는 분들 카드를 꺼낼 수 없는 상황에 편리하게 결제하는 방식입니다.
                                            </p>
                                            <p style="font-size:16px !important;">
                                                카드를 챙기지않고 나와 결제를 해야되는 상황에서 간편하게 모바일 결제를 이용하여 결제를 해보세요.
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
