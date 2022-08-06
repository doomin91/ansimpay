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
                                            <h3 class="text-center element-heading" style="font-weight:600;">키오스크</h3>
                                            <div class="row">
                                              <div class="col-md-4">
                                                    <figure class="team-box caption-fade-up">
                                                        <div class="img-block">
                                                            <img src="/assets/img/kiosk/kiosk_2021_sy200.webp" alt="images description">
                                                        </div>
                                                        <figcaption class="team-des-v2">
                                                            <span class="sub">Kiosk / SY-200</span>
                                                        </figcaption>
                                                    </figure>
                                                </div>
                                                <div class="col-md-4">
                                                    <figure class="team-box caption-fade-up">
                                                        <div class="img-block">
                                                            <img src="/assets/img/kiosk/kiosk_2021_ss200.webp" alt="images description">
                                                        </div>
                                                        <figcaption class="team-des-v2">
                                                            <span class="sub">Kiosk / SS-200</span>
                                                        </figcaption>
                                                    </figure>
                                                </div>
                                                <div class="col-md-4">
                                                    <figure class="team-box caption-fade-up">
                                                        <div class="img-block">
                                                            <img src="/assets/img/kiosk/kiosk_2021_si200.webp" alt="images description">
                                                        </div>
                                                        <figcaption class="team-des-v2">
                                                            <span class="sub">Kiosk / SI-200</span>
                                                        </figcaption>
                                                    </figure>
                                                </div>
                                              
                                               <div class="col-md-4">
                                                    <figure class="team-box caption-fade-up">
                                                        <div class="img-block">
                                                            <img src="/assets/img/kiosk/kiosk_2021_sb200.webp" alt="images description">
                                                        </div>
                                                        <figcaption class="team-des-v2">
                                                            <span class="sub">Kiosk / SB-200</span>
                                                        </figcaption>
                                                    </figure>
                                                </div>
                                                <div class="col-md-4">
                                                    <figure class="team-box caption-fade-up">
                                                        <div class="img-block">
                                                            <img src="/assets/img/kiosk/kiosk_2021_ps300.webp" alt="images description">
                                                        </div>
                                                        <figcaption class="team-des-v2">
                                                            <span class="sub">Kiosk / PS-300</span>
                                                        </figcaption>
                                                    </figure>
                                                </div>
                                                <div class="col-md-4">
                                                    <figure class="team-box caption-fade-up">
                                                        <div class="img-block">
                                                            <img src="/assets/img/kiosk/kiosk_2021_ps200.webp" alt="images description">
                                                        </div>
                                                        <figcaption class="team-des-v2">
                                                            <span class="sub">Kiosk / PS-200</span>
                                                        </figcaption>
                                                    </figure>
                                                </div>
                                                
                                                <div class="col-md-4">
                                                    <figure class="team-box caption-fade-up">
                                                        <div class="img-block">
                                                            <img src="/assets/img/kiosk/kiosk_1_c_ks1100.webp" alt="images description">
                                                        </div>
                                                        <figcaption class="team-des-v2">
                                                            <span class="sub">Kiosk / C-K1100(듀얼 회전형)</span>
                                                        </figcaption>
                                                    </figure>
                                                </div>
                                                <div class="col-md-4">
                                                    <figure class="team-box caption-fade-up">
                                                        <div class="img-block">
                                                            <img src="/assets/img/kiosk/kiosk_2_cs1100.webp" alt="images description">
                                                        </div>
                                                        <figcaption class="team-des-v2">
                                                            <span class="sub">Kiosk / C-S1100(스탠드형)</span>
                                                        </figcaption>
                                                    </figure>
                                                </div>
                                                <div class="col-md-4">
                                                    <figure class="team-box caption-fade-up">
                                                        <div class="img-block">
                                                            <img src="/assets/img/kiosk/kiosk_3_cs4000.webp" alt="images description">
                                                        </div>
                                                        <figcaption class="team-des-v2">
                                                            <span class="sub">Kiosk / C-S4000(슬림형)</span>
                                                        </figcaption>
                                                    </figure>
                                                </div>
                                                <div class="col-md-4">
                                                    <figure class="team-box caption-fade-up">
                                                        <div class="img-block">
                                                            <img src="/assets/img/kiosk/kiosk_4_css4700.webp" alt="images description">
                                                        </div>
                                                        <figcaption class="team-des-v2">
                                                            <span class="sub">Kiosk / C-SS4700(슬림 스탠드형)</span>
                                                        </figcaption>
                                                    </figure>
                                                </div>
                                                <div class="col-md-4">
                                                    <figure class="team-box caption-fade-up">
                                                        <div class="img-block">
                                                            <img src="/assets/img/kiosk/kiosk_5_cl4000.webp" alt="images description">
                                                        </div>
                                                        <figcaption class="team-des-v2">
                                                            <span class="sub">Kiosk / C-L4000(매립형)</span>
                                                        </figcaption>
                                                    </figure>
                                                </div>
                                                <div class="col-md-4">
                                                    <figure class="team-box caption-fade-up">
                                                        <div class="img-block">
                                                            <img src="/assets/img/kiosk/kiosk_6_chs5500.webp" alt="images description">
                                                        </div>
                                                        <figcaption class="team-des-v2">
                                                            <span class="sub">Kiosk / C-HS5500(가로 스탠드형)</span>
                                                        </figcaption>
                                                    </figure>
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