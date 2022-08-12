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
                                    <h1 class="visual-title visual-sub-title">사용 가맹점</h1>
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

                                <?php foreach($LIST as $lt): ?>
                                <div class="col-lg-4 col-md-6 ">
                                    <div class="col-wrap">
                                        <div class="ico-box bg-gray-light has-radius-medium box_height1">
                                            <div class="icon">
                                                <span class="custom-icon-pen-tool">
                                                    <i class="fa <?php echo $lt->SECTOR_FA_ICON ?>" aria-hidden="true"></i>
                                                </span>
                                            </div>
                                            <h4 class="content-title"><a href="#"><?php echo $lt->SECTOR_SUBJECT?></a></h4>
                                            <div class="des">
                                                <?php echo $lt->SECTOR_DESC ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <?php endforeach; ?>
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