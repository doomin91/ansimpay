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
                                            <h3 >NFC 결제</h3>
                                            <p style="font-size:16px !important;">
                                                휴대폰에 내장되어 있는 NFC(Near Field Communication)기능을 통하여 결제를 하는 방법입니다.
                                            </p>
                                            <p style="font-size:16px !important;">
                                                기존에 결제 방식과는 다르게 카드를 저장하지않고 1회성으로만 카드 정보를 읽어오기 때문에 보안에 특화 되어 있는 결제 방법입니다.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row portfolio-gallery">
                                <div class="bottom-space-medium-only col-lg-6">
                                    <div class="img-block shine-effect image-zoom">
                                        <img src="/assets/img/gif/qr_flow.gif" alt="images">
                                    </div>
                                </div>
                                <div class="v-align-col col-lg-5 offset-lg-1">
                                    <div class="inner">
                                        <div class="text-wrap text-left">
                                            <h3 >QR 결제</h3>
                                            <p style="font-size:16px !important;">
                                                휴대폰의 카메라 기능을 이용하여 QR(Quick Response code)코드 스캔 하여 결제를 하는 방법입니다.
                                            </p>
                                            <p style="font-size:16px !important;">
                                                QR코드 하나만 있으면 어디서나 결제가 가능하며, 홈쇼핑 등의 업종에 특화되어 있는 결제 방법입니다.
                                            </p>
                                            <p style="font-size:16px !important;">
                                                NFC결제와 마찬가지로 카드를 휴대폰 내에 저장하지않고 결제를 하는 방식이기 때문에, 보안에 특화 되어 있는 결제 방법입니다.
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

<?php
    include_once dirname(__DIR__)."/views/include/footer.php";
?>
