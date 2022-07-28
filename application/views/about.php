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
            <header class="fixed-top main-header header-white transparent with-side-panel-ico" id="waituk-main-header">
                <div id="nav-section">
                    <nav class="nav-wrap bg-white side_nav_wrap dis_none">
                        <!-- opener inside of collapsible menu -->
                        <div class="nav-trigger nav-trigger-close" style="padding-top:30px;">
                            <a href="#" style="font-size:16px;">메뉴 닫기<i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
                            <div class="divider-border"><span class="sr-only"></span></div>
                        </div>
                        <ul class="side-nav main-menu">
                            <li class="dropdown has-submenu" data-animation="fadeIn">
                                <a class="dropdown-toggle font_style" data-toggle="dropdown" href="about.html" data-title="Home"> 소개 </a>
                                <ul id="gnb_tab_1" class="dropdown-menu sub_menu no-border-radius submenu-nav" data-active-number="1">
                                    <li data-num="0">
                                        <a class="nav-link" href="about.html">안심페이란</a>
                                    </li>
                                    <li data-num="1">
                                        <a class="nav-link" href="about_1.html">키오스크</a>  
                                    </li>
                                    <li data-num="2">
                                        <a class="nav-link" href="about_2.html" role="tab">NEWS</a>  
                                    </li>
                                    <li data-num="2">
                                        <a class="nav-link" href="about_3.html">상장</a>  
                                    </li>
                                </ul>                           
                            </li>
                            <li class="dropdown has-submenu" data-animation="fadeIn">
                                <a class="dropdown-toggle font_style" data-toggle="dropdown" href="service.html" data-title="Home"> 서비스 </a>
                                <ul class="dropdown-menu  no-border-radius sub_menu submenu-nav">
                                    <li class="dropdown dropdown-right dropdown-parent">
                                        <a class="" href="service.html">원거리 결제</a>
                                    </li>
                                    <li class="dropdown dropdown-right dropdown-parent">
                                        <a class="" href="service_1.html">NFC, QR코드 결제</a>
                                    </li>
                                    <li class="dropdown dropdown-right dropdown-parent">
                                        <a class="" href="service_2.html">모바일 결제</a>
                                    </li>
                                    <li class="dropdown dropdown-right dropdown-parent">
                                        <a class="" href="service_3.html">키오스크 결제</a>
                                    </li>
                                    <li class="dropdown dropdown-right dropdown-parent">
                                        <a class="" href="service_4.html">주차관리 결제 시스템</a>
                                    </li>
                                </ul>
                            </li>
                            <li  class="dropdown has-submenu" data-animation="fadeIn">
                                <a class="dropdown-toggle font_style" data-toggle="dropdown" href="index.html" data-title="Home"> 사용 가맹점 </a>
                                <ul class="dropdown-menu  no-border-radius sub_menu submenu-nav">
                                    <li class="dropdown dropdown-right dropdown-parent">
                                        <a class="" href="franchisee.html">사용 업종</a>
                                    </li>
                                    <li class="dropdown dropdown-right dropdown-parent">
                                        <a class="" href="franchisee_1.html">사용 가맹점</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="dropdown has-submenu" data-animation="fadeIn">
                                <a class="dropdown-toggle font_style" data-toggle="dropdown" href="index.html" data-title="Home"> 고객 서비스 </a>
                                <ul class="dropdown-menu  no-border-radius sub_menu submenu-nav">
                                    <li class="dropdown dropdown-right dropdown-parent">
                                        <a class="" href="customer_service.html">제휴 문의</a>
                                    </li>
                                    <li class="dropdown dropdown-right dropdown-parent">
                                        <a class="" href="customer_service_1.html">자료실</a>
                                    </li>
                                    <li class="dropdown dropdown-right dropdown-parent">
                                        <a class="" href="customer_service_2.html">FAQ</a>
                                    </li>
                                    <li class="dropdown dropdown-right dropdown-parent">
                                        <a class="" href="https://www.costerpartner.com/">파트너 센터</a>
                                    </li>
                                    <li class="dropdown dropdown-right dropdown-parent">
                                        <a class="" href="https://admin8.kcp.co.kr/assist/login.LoginAction.do">상점관리자</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="pl-4">
                                <a href="http://www.coster.kr/" class="font_style"> 코스터 소개 <i class="fa fa-share-square-o" aria-hidden="true"></i></a>
                            </li>

                        </ul>
                <!--
                        <nav class="header-links">
                            <ul>
                                <li><a href="#">Login</a></li>
                                <li><a href="#">Register</a></li>
                            </ul>
                        </nav>
                -->
                        <div class="divider-border"><span class="sr-only"></span></div>
                        <div class="p-3">
                            <div>
                                <p class="font_style">고객센터문의</p>
                                <p class="font_style">월-금 : 9:00 - 18:00</p>
                                <p><a href="tel:1566-5016" class="font_style">1566-5016</a></p>
                            </div>
                        </div>
                    </nav>
                    <div class="bottom-header container-fluid mega-menus" id="mega-menus">
                        <nav class="navbar navbar-toggleable-md no-border-radius no-margin mega-menu-multiple" id="navbar-inner-container">
                            <!-- <form action="mega-menu-5.html" id="top-search" class="no-margin top-search">
                                <div class="form-group no-margin">
                                    <input class="form-control no-border" id="search_term" name="search_term" placeholder="Type & Press Enter" type="text">
                                </div>
                            </form> -->
                            <!--<button type="button" class="navbar-toggler navbar-toggler-left" data-toggle="collapse" data-target="#mega-menu">
                                <span class="navbar-toggler-icon"></span>
                            </button>-->
                            <a class="navbar-brand mr-auto m-sm-auto" href="index.html">
                                <img src="assets/img/logo/safe_pay_font_ver.webp" alt="safepay" style="width:80%;">
                                <img src="assets/img/logo/safe_pay_font_black_ver.webp" alt="safepay">
                            </a>
                            <div class="collapse navbar-collapse flex-row-reverse" id="mega-menu">

                                <ul class="nav navbar-nav pc_main_gnb main-menu">

                                    <li id="about"  class="dropdown has-submenu" data-animation="fadeIn">
                                        <a class="dropdown-toggle nav-link" data-toggle="dropdown" href="about.html"> 소개 </a>
                                        <ul id="" class="dropdown-menu no-border-radius submenu-nav" data-active-number="1">
                                            <li data-num="0">
                                                <a class="nav-link" href="about.html">안심페이란</a>
                                            </li>
                                            <li data-num="1">
                                                <a class="nav-link" href="about_1.html">키오스크</a>  
                                            </li>
                                            <li data-num="2">
                                                <a class="nav-link" href="about_2.html" role="tab">NEWS</a>  
                                            </li>
                                            <li data-num="2">
                                                <a class="nav-link" href="about_3.html">상장</a>  
                                            </li>
                                        </ul>
                                    </li>
                                    <li id="service"  class="dropdown has-submenu" data-animation="fadeIn">
                                        <a class="dropdown-toggle nav-link" data-toggle="dropdown" href="service.html" data-title="Home"> 서비스 </a>
                                        <ul class="dropdown-menu  no-border-radius sub_menu submenu-nav">
                                            <li class="dropdown dropdown-right dropdown-parent">
                                                <a class="" href="service.html">원거리 결제</a>
                                            </li>
                                            <li class="dropdown dropdown-right dropdown-parent">
                                                <a class="" href="service_1.html">NFC, QR코드 결제</a>
                                            </li>
                                            <li class="dropdown dropdown-right dropdown-parent">
                                                <a class="" href="service_2.html">모바일 결제</a>
                                            </li>
                                            <li class="dropdown dropdown-right dropdown-parent">
                                                <a class="" href="service_3.html">키오스크 결제</a>
                                            </li>
                                            <li class="dropdown dropdown-right dropdown-parent">
                                                <a class="" href="service_4.html">주차관리 결제 시스템</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li id="franchisee" class="dropdown has-submenu" data-animation="fadeIn">
                                        <a class="dropdown-toggle nav-link" data-toggle="dropdown" href="franchisee.html" data-title="Home"> 사용 가맹점 </a>
                                        <ul class="dropdown-menu  no-border-radius sub_menu submenu-nav">
                                            <li class="dropdown dropdown-right dropdown-parent">
                                                <a class="" href="franchisee.html">사용 업종</a>
                                            </li>
                                            <li class="dropdown dropdown-right dropdown-parent">
                                                <a class="" href="franchisee_1.html">사용 가맹점</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li id="customer_service" class="dropdown has-submenu" data-animation="fadeIn">
                                        <a class="dropdown-toggle nav-link" data-toggle="dropdown" href="customer_service.html"> 고객 서비스 </a>
                                        <ul class="dropdown-menu  no-border-radius sub_menu submenu-nav">
                                            <li class="dropdown dropdown-right dropdown-parent">
                                                <a class="" href="customer_service.html">제휴 문의</a>
                                            </li>
                                            <li class="dropdown dropdown-right dropdown-parent">
                                                <a class="" href="customer_service_1.html">자료실</a>
                                            </li>
                                            <li class="dropdown dropdown-right dropdown-parent">
                                                <a class="" href="customer_service_2.html">FAQ</a>
                                            </li>
                                            <li class="dropdown dropdown-right dropdown-parent">
                                                <a class="" href="https://www.costerpartner.com/">파트너 센터</a>
                                            </li>
                                            <li class="dropdown dropdown-right dropdown-parent">
                                                <a class="" href="https://admin8.kcp.co.kr/assist/login.LoginAction.do">상점관리자</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="pl-4">
                                        <a href="http://www.coster.kr/" target="_blank"> 코스터 소개 <i class="fa fa-share-square-o" aria-hidden="true"></i></a>
                                    </li>
                                    <li>
                                        <a href="https://www.instagram.com/coster_safepay_1/?hl=ko"  target="_blank"> 
                                            <i class="fa fa-instagram" aria-hidden="true"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="https://www.youtube.com/channel/UCxMz9TGBN5vW_FE2kRfUQPg?view_as=subscriber" target="_blank">
                                            <i class="fa fa-youtube-play" aria-hidden="true"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="https://blog.naver.com/coster002"  target="_blank" >
                                            <i class="icon-blog_svg" style="font-size:22px;"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <div class="nav-trigger navbar-pos-search overlay-trigger ml-4 dis_none">
                                <a href="#" class="navbar-link dis_none"><i class="fa fa-bars" aria-hidden="true"></i></a>
                            </div>
                        </nav>
                    </div>  
                </div>    
            </header>
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
                            <div class="container">
                                <div class="content-slot">
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="bg-stretch img-wrap wow slideInLeft">
                                                <img src="assets/img/info_page/safepay_info_banner_1.webp" alt="안심페이 소개 이미지">
                                            </div>
                                        </div>
                                        <div class="col col-lg-6">
                                            <div class="text-wrap text-left">
                                                <h3>안심페이란?</h3>
                                                <p>기존 CAT 단말기에 Swipe, IC 카드 삽입 리딩의 한계를 극복한 스마트폰의 NFC 및 IC(RF) 카드 기반 대면 및 비대면 결제 서비스입니다.</p>
                                                <p> 소비자들이 사용하고 있는 IC(RF) 카드를 활용하여 가맹점에서 편리하고 안전하게 결제할 수 있는 서비스로서, 구매자에게 다양한 결제 채널을 제공하여 판매자의 매출을 증대할 수 있습니다. “구매자가 가맹점에 방문을 하지 못하거나, 직접 구매가 어려운 고객을 위해‘제3자에게 대신 결제 요청하기’를 통하여 구매자는 원활한 결제를 할 수 있습니다.”</p>
                                                <p>안심페이는 기존 카드 단말기를 대체할 수 있으며, 다양한 업종에서 다양한 판매 자들이 사용 가능하며, 스마트한 간편 결제 서비스를 제공합니다.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="container mt-5 m_w_container">
                                <div class="row multiple-row v-align-row">
                                    <div class="col-lg-12 col-md-12 text-center">
                                        <div class="col-wrap">
                                            <div class="block-heading">
                                                <h2 class="block-main-heading">파트너사</h2>
                                                <span class="block-sub-heading">VAN&amp;결제부분</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-6 ">
                                        <div class="col-wrap">
                                            <div class="ico-box bg-gray-light has-radius-medium box_height">
                                                <h4 class="content-title">
                                                    <a href="#">
                                                        <img src="assets/img/partnter/partner_1.webp">
                                                    </a>
                                                </h4>
                                                <div class="des">
                                                    <p style="font-size:16px;">KCP</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-6 ">
                                        <div class="col-wrap">
                                            <div class="ico-box bg-gray-light has-radius-medium box_height">
                                                <h4 class="content-title">
                                                    <a href="#">
                                                        <img src="assets/img/partnter/partner_2.webp">
                                                    </a>
                                                </h4>
                                                <div class="des">
                                                    <p style="font-size:16px;">PNLINK</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div class="col-lg-3 col-md-6 ">
                                        <div class="col-wrap">
                                            <div class="ico-box bg-gray-light has-radius-medium box_height">
                                                <h4 class="content-title">
                                                    <a href="#">
                                                        <img src="assets/img/partnter/partner_4.webp">
                                                    </a>
                                                </h4>
                                                <div class="des">
                                                    <p style="font-size:16px;">나이츠페이먼트</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-6 ">
                                        <div class="col-wrap">
                                            <div class="ico-box bg-gray-light has-radius-medium box_height">
                                                <h4 class="content-title">
                                                    <a href="#">
                                                        <img src="assets/img/partnter/partner_5.webp">
                                                    </a>
                                                </h4>
                                                <div class="des">
                                                    <p style="font-size:16px;">엠씨페이</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-6 ">
                                        <div class="col-wrap">
                                            <div class="ico-box bg-gray-light has-radius-medium box_height">
                                                <h4 class="content-title">
                                                    <a href="#">
                                                        <img src="assets/img/partnter/partner_6_1.webp">
                                                    </a>
                                                </h4>
                                                <div class="des">
                                                    <p style="font-size:16px;">AP컴즈</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="container mt-5 m_w_container">
                                <div class="row multiple-row v-align-row">
                                    <div class="col-lg-12 col-md-12 text-center">
                                        <div class="col-wrap">
                                            <div class="block-heading">
                                                <span class="block-sub-heading m_t_size">금융부분</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-6 ">
                                        <div class="col-wrap">
                                            <div class="ico-box bg-gray-light has-radius-medium box_height">
                                                <h4 class="content-title">
                                                    <a href="#">
                                                        <img src="assets/img/partnter/partner_7.webp">
                                                    </a>
                                                </h4>
                                                <div class="des">
                                                    <p style="font-size:16px;">KB국민은행</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-6 ">
                                        <div class="col-wrap">
                                            <div class="ico-box bg-gray-light has-radius-medium box_height">
                                                <h4 class="content-title">
                                                    <a href="#">
                                                        <img src="assets/img/partnter/partner_8.webp">
                                                    </a>
                                                </h4>
                                                <div class="des">
                                                    <p style="font-size:16px;">KB국민투자증권</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-6 ">
                                        <div class="col-wrap">
                                            <div class="ico-box bg-gray-light has-radius-medium box_height">
                                                <h4 class="content-title">
                                                    <a href="#">
                                                        <img src="assets/img/partnter/partner_9.webp">
                                                    </a>
                                                </h4>
                                                <div class="des">
                                                    <p style="font-size:16px;">KB국민카드</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-6 ">
                                        <div class="col-wrap">
                                            <div class="ico-box bg-gray-light has-radius-medium box_height">
                                                <h4 class="content-title">
                                                    <a href="#">
                                                        <img src="assets/img/partnter/partner_10.webp">
                                                    </a>
                                                </h4>
                                                <div class="des">
                                                    <p style="font-size:16px;">현대카드</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-6 ">
                                        <div class="col-wrap">
                                            <div class="ico-box bg-gray-light has-radius-medium box_height">
                                                <h4 class="content-title">
                                                    <a href="#">
                                                        <img src="assets/img/partnter/partner_11.webp">
                                                    </a>
                                                </h4>
                                                <div class="des">
                                                    <p style="font-size:16px;">신한카드</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-6 ">
                                        <div class="col-wrap">
                                            <div class="ico-box bg-gray-light has-radius-medium box_height">
                                                <h4 class="content-title">
                                                    <a href="#">
                                                        <img src="assets/img/partnter/partner_6.webp">
                                                    </a>
                                                </h4>
                                                <div class="des">
                                                    <p style="font-size:16px;">하나카드</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-6 ">
                                        <div class="col-wrap">
                                            <div class="ico-box bg-gray-light has-radius-medium box_height">
                                                <h4 class="content-title">
                                                    <a href="#">
                                                        <img src="assets/img/partnter/partner_29.webp">
                                                    </a>
                                                </h4>
                                                <div class="des">
                                                    <p style="font-size:16px;">롯데카드</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-6 ">
                                        <div class="col-wrap">
                                            <div class="ico-box bg-gray-light has-radius-medium box_height">
                                                <h4 class="content-title">
                                                    <a href="#">
                                                        <img src="assets/img/partnter/partner_12.webp">
                                                    </a>
                                                </h4>
                                                <div class="des">
                                                    <p style="font-size:16px;">BC카드</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-6 ">
                                        <div class="col-wrap">
                                            <div class="ico-box bg-gray-light has-radius-medium box_height">
                                                <h4 class="content-title">
                                                    <a href="#">
                                                        <img src="assets/img/partnter/partner_16.webp">
                                                    </a>
                                                </h4>
                                                <div class="des">
                                                    <p style="font-size:16px;">우리카드</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-6 ">
                                        <div class="col-wrap">
                                            <div class="ico-box bg-gray-light has-radius-medium box_height">
                                                <h4 class="content-title">
                                                    <a href="#">
                                                        <img src="assets/img/partnter/partner_32.webp">
                                                    </a>
                                                </h4>
                                                <div class="des">
                                                    <p style="font-size:16px;">삼성카드</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-6 ">
                                        <div class="col-wrap">
                                            <div class="ico-box bg-gray-light has-radius-medium box_height">
                                                <h4 class="content-title">
                                                    <a href="#">
                                                        <img src="assets/img/partnter/partner_33.webp">
                                                    </a>
                                                </h4>
                                                <div class="des">
                                                    <p style="font-size:16px;">농협카드</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="container mt-5 m_w_container">
                                <div class="row multiple-row v-align-row">
                                    <div class="col-lg-12 col-md-12 text-center">
                                        <div class="col-wrap">
                                            <div class="block-heading">
                                                <span class="block-sub-heading m_t_size">온라인 마켓부분</span>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div class="col-lg-3 col-md-6 ">
                                        <div class="col-wrap">
                                            <div class="ico-box bg-gray-light has-radius-medium box_height">
                                                <h4 class="content-title">
                                                    <a href="#">
                                                        <img src="assets/img/partnter/partner_13.webp">
                                                    </a>
                                                </h4>
                                                <div class="des">
                                                    <p style="font-size:16px;">풀빌라 더시크릿</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-6 ">
                                        <div class="col-wrap">
                                            <div class="ico-box bg-gray-light has-radius-medium box_height">
                                                <h4 class="content-title">
                                                    <a href="#">
                                                        <img src="assets/img/partnter/partner_14.webp">
                                                    </a>
                                                </h4>
                                                <div class="des">
                                                    <p style="font-size:16px;">슈마커</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-6 ">
                                        <div class="col-wrap">
                                            <div class="ico-box bg-gray-light has-radius-medium box_height">
                                                <h4 class="content-title">
                                                    <a href="#">
                                                        <img src="assets/img/partnter/partner_15.webp">
                                                    </a>
                                                </h4>
                                                <div class="des">
                                                    <p style="font-size:16px;">구글</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div class="col-lg-3 col-md-6 ">
                                        <div class="col-wrap">
                                            <div class="ico-box bg-gray-light has-radius-medium box_height">
                                                <h4 class="content-title">
                                                    <a href="#">
                                                        <img src="assets/img/partnter/partner_30.webp">
                                                    </a>
                                                </h4>
                                                <div class="des">
                                                    <p style="font-size:16px;">펫플</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-6 ">
                                        <div class="col-wrap">
                                            <div class="ico-box bg-gray-light has-radius-medium box_height">
                                                <h4 class="content-title">
                                                    <a href="#">
                                                        <img src="assets/img/partnter/partner_20.webp">
                                                    </a>
                                                </h4>
                                                <div class="des">
                                                    <p style="font-size:16px;">현대HCN</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-6 ">
                                        <div class="col-wrap">
                                            <div class="ico-box bg-gray-light has-radius-medium box_height">
                                                <h4 class="content-title">
                                                    <a href="#">
                                                        <img src="assets/img/partnter/partner_21.webp">
                                                    </a>
                                                </h4>
                                                <div class="des">
                                                    <p style="font-size:16px;">고도몰</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-6 ">
                                        <div class="col-wrap">
                                            <div class="ico-box bg-gray-light has-radius-medium box_height">
                                                <h4 class="content-title">
                                                    <a href="#">
                                                        <img src="assets/img/partnter/partner_22.webp">
                                                    </a>
                                                </h4>
                                                <div class="des">
                                                    <p style="font-size:16px;">구글플레이스토어</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-6 ">
                                        <div class="col-wrap">
                                            <div class="ico-box bg-gray-light has-radius-medium box_height">
                                                <h4 class="content-title">
                                                    <a href="#">
                                                        <img src="assets/img/partnter/partner_25.webp">
                                                    </a>
                                                </h4>
                                                <div class="des">
                                                    <p style="font-size:16px;">APP Store</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="container mt-5 m_w_container">
                                <div class="row multiple-row v-align-row">
                                    <div class="col-lg-12 col-md-12 text-center">
                                        <div class="col-wrap">
                                            <div class="block-heading">
                                                <span class="block-sub-heading m_t_size">오프라인 마켓부분</span>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div class="col-lg-3 col-md-6 ">
                                        <div class="col-wrap">
                                            <div class="ico-box bg-gray-light has-radius-medium box_height">
                                                <h4 class="content-title">
                                                    <a href="#">
                                                        <img src="assets/img/partnter/partner_31.webp">
                                                    </a>
                                                </h4>
                                                <div class="des">
                                                    <p style="font-size:16px;">현대 아쿠아플라넷</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-6 ">
                                        <div class="col-wrap">
                                            <div class="ico-box bg-gray-light has-radius-medium box_height">
                                                <h4 class="content-title">
                                                    <a href="#">
                                                        <img src="assets/img/partnter/partner_28.webp">
                                                    </a>
                                                </h4>
                                                <div class="des">
                                                    <p style="font-size:16px;">LG전자</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="container mt-5 m_w_container">
                                <div class="row multiple-row v-align-row">
                                    <div class="col-lg-12 col-md-12 text-center">
                                        <div class="col-wrap">
                                            <div class="block-heading">
                                                <span class="block-sub-heading m_t_size">보안&amp;솔루션부분</span>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    
                                    <div class="col-lg-3 col-md-6 ">
                                        <div class="col-wrap">
                                            <div class="ico-box bg-gray-light has-radius-medium box_height">
                                                <h4 class="content-title">
                                                    <a href="#">
                                                        <img src="assets/img/partnter/partner_26.webp">
                                                    </a>
                                                </h4>
                                                <div class="des">
                                                    <p style="font-size:16px;">스틸리언</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-6 ">
                                        <div class="col-wrap">
                                            <div class="ico-box bg-gray-light has-radius-medium box_height">
                                                <h4 class="content-title">
                                                    <a href="#">
                                                        <img src="assets/img/partnter/partner_27.webp">
                                                    </a>
                                                </h4>
                                                <div class="des">
                                                    <p style="font-size:16px;">윅스넷</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="container mt-5 m_w_container">
                                <div class="row multiple-row v-align-row">
                                    <div class="col-lg-12 col-md-12 text-center">
                                        <div class="col-wrap">
                                            <div class="block-heading">
                                                <span class="block-sub-heading m_t_size">통신사 및 OTT 부분</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-6 ">
                                        <div class="col-wrap">
                                            <div class="ico-box bg-gray-light has-radius-medium box_height">
                                                <h4 class="content-title">
                                                    <a href="#">
                                                        <img src="assets/img/partnter/partner_17.webp">
                                                    </a>
                                                </h4>
                                                <div class="des">
                                                    <p style="font-size:16px;">SK텔레콤</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-6 ">
                                        <div class="col-wrap">
                                            <div class="ico-box bg-gray-light has-radius-medium box_height">
                                                <h4 class="content-title">
                                                    <a href="#">
                                                        <img src="assets/img/partnter/partner_18.webp">
                                                    </a>
                                                </h4>
                                                <div class="des">
                                                    <p style="font-size:16px;">SK브로드밴드</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-6 ">
                                        <div class="col-wrap">
                                            <div class="ico-box bg-gray-light has-radius-medium box_height">
                                                <h4 class="content-title">
                                                    <a href="#">
                                                        <img src="assets/img/partnter/partner_23.webp">
                                                    </a>
                                                </h4>
                                                <div class="des">
                                                    <p style="font-size:16px;">KT</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-6 ">
                                        <div class="col-wrap">
                                            <div class="ico-box bg-gray-light has-radius-medium box_height">
                                                <h4 class="content-title">
                                                    <a href="#">
                                                        <img src="assets/img/partnter/partner_24.webp">
                                                    </a>
                                                </h4>
                                                <div class="des">
                                                    <p style="font-size:16px;">LG U+</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-6 ">
                                        <div class="col-wrap">
                                            <div class="ico-box bg-gray-light has-radius-medium box_height">
                                                <h4 class="content-title">
                                                    <a href="#">
                                                        <img src="assets/img/partnter/partner_3.webp">
                                                    </a>
                                                </h4>
                                                <div class="des">
                                                    <p style="font-size:16px;">INCREK</p>
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
    <script>
        includeHTML();
    </script>
    <script src="vendors/jquery/jquery-2.1.4.min.js"></script>
    <!-- external scripts -->
    <script src="vendors/tether/dist/js/tether.min.js"></script>
    <script src="vendors/bootstrap/js/bootstrap.min.js"></script>
    <script src="vendors/stellar/jquery.stellar.min.js"></script>
    <script src="vendors/isotope/javascripts/isotope.pkgd.min.js"></script>
    <script src="vendors/isotope/javascripts/packery-mode.pkgd.js"></script>
    <script src="vendors/owl-carousel/dist/owl.carousel.js"></script>
    <script src="vendors/waypoint/waypoints.min.js"></script>
    <script src="vendors/counter-up/jquery.counterup.min.js"></script>
    <script src="vendors/fancyBox/source/jquery.fancybox.pack.js"></script>
    <script src="vendors/fancyBox/source/helpers/jquery.fancybox-thumbs.js"></script>
    <script src="vendors/image-stretcher-master/image-stretcher.js"></script>
    <script src="vendors/wow/wow.min.js"></script>
    <script src="vendors/rateyo/jquery.rateyo.js"></script>
    <script src="datatable/datatables.js"></script>
    <script src="vendors/bootstrap-slider-master/src/js/bootstrap-slider.js"></script>
    <script src="vendors/bootstrap-select/dist/js/bootstrap-select.min.js"></script>
    <script src="js/mega-menu.js"></script>
    <script src="js/news_table.js"></script>
    <!-- custom jquery script -->
    <script type="text/javascript" src="js/custom.js"></script>
    <script src="js/jquery.main.js"></script>
    <!-- REVOLUTION JS FILES -->
 
    <script type="text/javascript" src="vendors/rev-slider/revolution/js/jquery.themepunch.tools.min.js"></script>
    <script type="text/javascript" src="vendors/rev-slider/revolution/js/jquery.themepunch.revolution.min.js"></script>
    <!-- SLIDER REVOLUTION 5.0 EXTENSIONS  (Load Extensions only on Local File Systems !  The following part can be removed on Server for On Demand Loading) -->
    <script type="text/javascript" src="vendors/rev-slider/revolution/js/extensions/revolution.extension.actions.min.js"></script>
    <script type="text/javascript" src="vendors/rev-slider/revolution/js/extensions/revolution.extension.carousel.min.js"></script>
    <script type="text/javascript" src="vendors/rev-slider/revolution/js/extensions/revolution.extension.kenburn.min.js"></script>
    <script type="text/javascript" src="vendors/rev-slider/revolution/js/extensions/revolution.extension.layeranimation.min.js"></script>
    <script type="text/javascript" src="vendors/rev-slider/revolution/js/extensions/revolution.extension.migration.min.js"></script>
    <script type="text/javascript" src="vendors/rev-slider/revolution/js/extensions/revolution.extension.navigation.min.js"></script>
    <script type="text/javascript" src="vendors/rev-slider/revolution/js/extensions/revolution.extension.parallax.min.js"></script>
    <script type="text/javascript" src="vendors/rev-slider/revolution/js/extensions/revolution.extension.slideanims.min.js"></script>
    <script type="text/javascript" src="vendors/rev-slider/revolution/js/extensions/revolution.extension.video.min.js"></script>
    <!-- SNOW ADD ON -->
    <script type="text/javascript" src="vendors/rev-slider/revolution-addons/snow/revolution.addon.snow.min.js"></script>
        <!-- revolutions slider script -->
    <script src="js/revolution.js"></script>
    <script>

    </script>
    </body>
</html>
