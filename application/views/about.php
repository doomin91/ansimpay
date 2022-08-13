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
                                    <h1 class="visual-title visual-sub-title">안심페이란</h1>
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
                                                <img src="/assets/img/info_page/safepay_info_banner_1.webp" alt="안심페이 소개 이미지">
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

                            <?php foreach($lists as $key => $lt):?>
                            <div class="container mt-5 m_w_container">
                                <div class="row multiple-row v-align-row">
                                    <div class="col-lg-12 col-md-12 text-center">
                                        <div class="col-wrap">
                                            <div class="block-heading">
                                                <h2 class="block-main-heading"><?php echo $key == 0 ? "파트너사":"" ?></h2>
                                                <span class="block-sub-heading"><?php echo $lt["CATEGORY_NAME"] ?></span>
                                            </div>
                                        </div>
                                    </div>
                                    <?php foreach($lt["LIST"] as $partner): ?>
                                    <div class="col-lg-3 col-md-6 ">
                                        <div class="col-wrap">
                                            <div class="ico-box bg-gray-light has-radius-medium box_height">
                                                <h4 class="content-title">
                                                    <a href="#">
                                                        <img src="<?php echo $partner->PL_IMAGE_URL?>">
                                                    </a>
                                                </h4>
                                                <div class="des">
                                                    <p style="font-size:16px;"><?php echo $partner->PL_SUBJECT?></p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <?php endforeach;?>                                    
                                </div>
                            </div>
                            <?php endforeach;?>
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