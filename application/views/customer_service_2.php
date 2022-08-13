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
                    <div class="visual-inner customer_service_banner dark-overlay parallax" data-stellar-background-ratio="0.55">
                        <div class="centered">
                            <div class="container">
                                <div class="visual-text visual-center">
                                    <h1 class="visual-title visual-sub-title">FAQ</h1>
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
                            <div class="faq-title mb-60">
                                <h2>자주 묻는질문</h2>
                            </div>
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="panel-group" id="accordion">
                                        <?php foreach($LIST as $key => $lt): 
                                                if($key % 2 == 0):?>
                                        <div class="panel faq-accordion mb-20">
                                            <div class="panel-heading">
                                                <h4 class="panel-title">
                                                    <a class="collapsed" data-toggle="collapse" data-target="#faq-accordion<?php echo $key?>" href="#faq-accordion<?php echo $key?>">
                                                        <?php echo $lt->FAQ_QUESTION?>
                                                    </a>
                                                </h4>
                                            </div>
                                            <div id="faq-accordion<?php echo $key?>" data-parent="#accordion" class="panel-collapse collapse">
                                                <div class="panel-body">
                                                    <p><?php echo $lt->FAQ_ANSWER?></p>
                                                </div>
                                            </div>
                                        </div>
                                        <?php 
                                                endif;
                                                endforeach; ?>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="panel-group" id="accordion">
                                        <?php foreach($LIST as $key => $lt): 
                                                if($key % 2 == 1):?>
                                        <div class="panel faq-accordion mb-20">
                                            <div class="panel-heading">
                                                <h4 class="panel-title">
                                                    <a class="collapsed" data-toggle="collapse" data-target="#faq-accordion<?php echo $key?>" href="#faq-accordion<?php echo $key?>">
                                                        <?php echo $lt->FAQ_QUESTION?>
                                                    </a>
                                                </h4>
                                            </div>
                                            <div id="faq-accordion<?php echo $key?>" data-parent="#accordion" class="panel-collapse collapse">
                                                <div class="panel-body">
                                                    <p><?php echo $lt->FAQ_ANSWER?></p>
                                                </div>
                                            </div>
                                        </div>
                                        <?php 
                                                endif;
                                                endforeach; ?>
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
    </body>

<?php
        include_once dirname(__DIR__)."/views/include/footer.php";
?>