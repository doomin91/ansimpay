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
                    <div class="visual-inner news-banner dark-overlay parallax" data-stellar-background-ratio="0.55">
                        <div class="centered">
                            <div class="container">
                                <div class="visual-text visual-center">
                                    <h1 class="visual-title visual-sub-title">News</h1>
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
                                <h3 class="text-center element-heading">News</h3>
                                <div class="data-table" style="border:0;">
                                    <table id="myTable" class="table table-striped display" style="width:100%;">
                                        <!-- <thead style="display:none;">
                                            <tr>
                                                <th>num</th>
                                                <th>news_title</th>
                                                <th>date</th>
                                            </tr>
                                        </thead> -->
                                        <tbody>
                                            <?php foreach($lists as $lt):?>
                                            <tr>
                                                <td><?php echo $pagenum ?></td>
                                                <td><a href="<?php echo $lt->NL_LINK?>" target="_blank" style="font-size:16px; color:black;"><?php echo $lt->NL_SUBJECT?></a></td>
                                                <td><?php echo $lt->NL_DISPLAY_DATE ? $lt->NL_DISPLAY_DATE : date('Y-m-d', strtotime($lt->NL_REG_DATE))?></td>
                                            </tr>
                                            <?php 
                                            $pagenum--;
                                            endforeach;?>
                                        </tbody>
                                    </table>
                                </div>

                                <div class="row news-pagination">
									<?php echo $pagination; ?>
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