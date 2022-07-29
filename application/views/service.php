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
                                        <img src="/assets/img/gif/longdistance_flow.gif" alt="images">
                                    </div>
                                </div>
                                <div class="v-align-col col-lg-5 offset-lg-1">
                                    <div class="inner">
                                        <div class="text-wrap text-left">
                                            <h3 >원거리 결제</h3>
                                            <p style="font-size:16px !important;">
                                                SMS 문자를 통해 결제 URL을 발송하여 결제를 요청하는 기능입니다.
                                            </p>
                                            <p style="font-size:16px !important;">
                                                매장에 방문하지않고 결제가 가능하며 학원, 관공서, 임대업 등 다양한 업종에 특화되어 있는 결제 방법입니다.
                                            </p>
                                            <p style="font-size:16px !important;">
                                                안심페이 파트너센터를 통해 결제요청 전송 일자/시간/전송 유무를 확인 할 수 있으며, 같은 문자를 여러 소비자에게
                                                보낼 경우 SMS 대량 발송으로 한번에 결제 요청이 가능합니다.
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
        <!-- footer of the pagse -->
        <footer class="footer footer-v1"  include-html="include/footer_control.html">
            
        </footer>
        <!--/footer of the page -->
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
