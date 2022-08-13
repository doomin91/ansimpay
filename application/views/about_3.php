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
                                    <h1 class="visual-title visual-sub-title">특허 및 수상내역</h1>
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
                                <div class="row" style="padding:20px; margin-bottom:40px;">
                                
                                    <div style="float:left; font-size:24px; padding:10px; border-bottom:5px solid #308DBE; font-weight:700;">특허내역</div>
                                    <div style="float:left; font-size:24px; padding:10px;">수상내역</div>
                                </div>
                                <div class="row">
                                    <?php foreach($lists as $lt):?>
                                                <div class="col-md-4">
                                                    <figure class="team-box caption-fade-up">
                                                        <div class="img-block">
                                                            <img src="<?php echo $lt->AL_IMAGE_URL?>" alt="images description">
                                                        </div>
                                                        <div style="padding-top:10px;text-align:left;font-weight:600;">
                                                            <span class="sub" style="color:#000;text-algin:left"><?php echo $lt->AL_SUBJECT ?></span>
                                                        </div>
                                                        <div style="padding:0px;text-align:left;">
                                                            <span class="sub" style="color:#ccc"><?php echo $lt->AL_DESC ?></span>
                                                        </div>
                                                    </figure>
                                                </div>
                                    <?php endforeach; ?>
                                </div>
                            </div>
                        </div>
                    </section>
                    
                </div>
                <!--/main content wrapper -->
            </main>
        </div>
        <!-- footer of the pagse -->
        <!-- <footer class="footer footer-v1"  include-html="include/footer_control.html"> -->
            
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