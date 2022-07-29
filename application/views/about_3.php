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
                                <h3 class="text-center element-heading" style="font-weight:600;">상장</h3>
                                <div class="row">
                                    <div class="col-md-4">
                                        <figure class="team-box caption-fade-up">
                                            <div class="img-block">
                                                <img src="/assets/img/award/award_1.webp" alt="행정안전부 장관상">
                                            </div>
                                            <figcaption class="team-des-v2">
                                                <span class="sub">행정안전부 장관상</span>
                                            </figcaption>
                                        </figure>
                                    </div>
                                    <div class="col-md-4">
                                        <figure class="team-box caption-fade-up">
                                            <div class="img-block">
                                                <img src="/assets/img/award/award_2.webp" alt="중소벤처기업부 장관상">
                                            </div>
                                            <figcaption class="team-des-v2">
                                                <span class="sub">중소벤처기업부 장관상</span>
                                            </figcaption>
                                        </figure>
                                    </div>
                                    <div class="col-md-4">
                                        <figure class="team-box caption-fade-up">
                                            <div class="img-block">
                                                <img src="/assets/img/award/award_3.webp" alt="과학기술정보통신부 장관상">
                                            </div>
                                            <figcaption class="team-des-v2">
                                                <span class="sub">과학기술정보통신부 장관상</span>
                                            </figcaption>
                                        </figure>
                                    </div>
                                    <div class="col-md-4">
                                        <figure class="team-box caption-fade-up">
                                            <div class="img-block">
                                                <img src="/assets/img/award/certificate_4.webp" alt="연구소 인정서">
                                            </div>
                                            <figcaption class="team-des-v2">
                                                <span class="sub">기업부설연구소 인정서</span>
                                            </figcaption>
                                        </figure>
                                    </div>
                                    <div class="col-md-4">
                                        <figure class="team-box caption-fade-up">
                                            <div class="img-block">
                                                <img src="/assets/img/award/patent_1.webp" alt="특허 제 10-1675549호">
                                            </div>
                                            <figcaption class="team-des-v2">
                                                <span class="sub">특허 제 10-1675549호</span>
                                            </figcaption>
                                        </figure>
                                    </div>
                                    <div class="col-md-4">
                                        <figure class="team-box caption-fade-up">
                                            <div class="img-block">
                                                <img src="/assets/img/award/patent_2.webp" alt="특허 제 10-1272211호">
                                            </div>
                                            <figcaption class="team-des-v2">
                                                <span class="sub">특허 제 10-1272211호</span>
                                            </figcaption>
                                        </figure>
                                    </div>
                                    <div class="col-md-4">
                                        <figure class="team-box caption-fade-up">
                                            <div class="img-block">
                                                <img src="/assets/img/award/patent_2.webp" alt="images description">
                                            </div>
                                            <figcaption class="team-des-v2">
                                                <span class="sub">Kiosk / C-HS5500(가로 스탠드형)</span>
                                            </figcaption>
                                        </figure>
                                    </div>
                                    <div class="col-md-4">
                                        <figure class="team-box caption-fade-up">
                                            <div class="img-block">
                                                <img src="/assets/img/award/patent_3.webp" alt="특허 제 10-1549512호">
                                            </div>
                                            <figcaption class="team-des-v2">
                                                <span class="sub">특허 제 10-1549512호</span>
                                            </figcaption>
                                        </figure>
                                    </div>
                                    <div class="col-md-4">
                                        <figure class="team-box caption-fade-up">
                                            <div class="img-block">
                                                <img src="/assets/img/award/patent_4.webp" alt="특허 제 10-1549514호">
                                            </div>
                                            <figcaption class="team-des-v2">
                                                <span class="sub">특허 제 10-1549514호</span>
                                            </figcaption>
                                        </figure>
                                    </div>
                                    <div class="col-md-4">
                                        <figure class="team-box caption-fade-up">
                                            <div class="img-block">
                                                <img src="/assets/img/award/award_5.webp" alt="제10회 국가지속가능발전 기술혁신상">
                                            </div>
                                            <figcaption class="team-des-v2">
                                                <span class="sub">제10회 국가지속가능발전 기술혁신상</span>
                                            </figcaption>
                                        </figure>
                                    </div>
                                    <div class="col-md-4">
                                        <figure class="team-box caption-fade-up">
                                            <div class="img-block">
                                                <img src="/assets/img/award/award_6.webp" alt="제12회 국가지속가능발전 기술혁신상">
                                            </div>
                                            <figcaption class="team-des-v2">
                                                <span class="sub">제12회 국가지속가능발전 기술혁신상</span>
                                            </figcaption>
                                        </figure>
                                    </div>
                                    <div class="col-md-4">
                                        <figure class="team-box caption-fade-up">
                                            <div class="img-block">
                                                <img src="/assets/img/award/award_7.webp" alt="제13회 국가지속가능발전 기술혁신상">
                                            </div>
                                            <figcaption class="team-des-v2">
                                                <span class="sub">제13회 국가지속가능발전 기술혁신상</span>
                                            </figcaption>
                                        </figure>
                                    </div>
                                    <div class="col-md-4">
                                        <figure class="team-box caption-fade-up">
                                            <div class="img-block">
                                                <img src="/assets/img/award/award_8.webp" alt="images description">
                                            </div>
                                            <figcaption class="team-des-v2">
                                                <span class="sub">제14회 국가지속가능발전 기술혁신상</span>
                                            </figcaption>
                                        </figure>
                                    </div>
                                    <div class="col-md-4">
                                        <figure class="team-box caption-fade-up">
                                            <div class="img-block">
                                                <img src="/assets/img/award/award_11.png" alt="images description">
                                            </div>
                                            <figcaption class="team-des-v2">
                                                <span class="sub">제15회 국가지속가능발전 기술혁신상</span>
                                            </figcaption>
                                        </figure>
                                    </div>
                                    <div class="col-md-4">
                                        <figure class="team-box caption-fade-up">
                                            <div class="img-block">
                                                <img src="/assets/img/award/award_9.webp" alt="images description">
                                            </div>
                                            <figcaption class="team-des-v2">
                                                <span class="sub">대한민국 기업 경영 대상</span>
                                            </figcaption>
                                        </figure>
                                    </div>
                                    <div class="col-md-4">
                                        <figure class="team-box caption-fade-up">
                                            <div class="img-block">
                                                <img src="/assets/img/award/award_10.webp" alt="images description">
                                            </div>
                                            <figcaption class="team-des-v2">
                                                <span class="sub">2016 대한민국 CEO상</span>
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