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
                                    <h1 class="visual-title visual-sub-title">자료실</h1>
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
                            <div class="demo-wrapper pb-0">
                                <div class="col-wrap">
                                    <div class="block-heading">
                                        <h2 class="block-main-heading">자료실</h2>
                                        <span class="block-sub-heading" style="font-size:14px;">가입 서류 다운로드 자료실 입니다.</span>
                                    </div>
                                </div>
                                <div class="table-responsive">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th scope="col" class="text-center pc_contents_font m_contents_font">개인 사업자용 서류 다운로드</th>
                                                <th scope="col" class="text-center pc_contents_font m_contents_font">법인 사업자용 서류 다운로드</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td class="text-center" style="vertical-align:middle;">
                                                    <?php foreach ($files1 as $file):?>
                                                    <p style="font-size:14px;">
                                                        <a href="<?php echo $file->LIB_FILE_PATH?>" download="<?php echo $file->LIB_FILE_NAME?>" style="color:black;">
                                                            <i class="fa fa-file-word-o">
                                                                <?php echo $file->LIB_SUBJECT?>
                                                            </i>
                                                        </a>
                                                    </p> 
                                                    <?php endforeach ?>
                                                </td>
                                                <td class="text-center" style="vertical-align:middle;">
                                                    <?php foreach ($files2 as $file):?>
                                                    <p style="font-size:14px;">
                                                        <a href="<?php echo $file->LIB_FILE_PATH?>" download="<?php echo $file->LIB_FILE_NAME?>" style="color:black;">
                                                            <i class="fa fa-file-word-o">
                                                                <?php echo $file->LIB_SUBJECT?>
                                                            </i>
                                                        </a>
                                                    </p> 
                                                    <?php endforeach ?>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <div class="table-responsive mt-5">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th scope="col" class="text-center m_font">양수양도계약(사업자번호가 변경되는 경우)</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td class="text-center" style="vertical-align:middle">
                                                    <?php foreach ($files3 as $file):?>
                                                    <p style="font-size:14px;">
                                                        <a href="<?php echo $file->LIB_FILE_PATH?>" download="<?php echo $file->LIB_FILE_NAME?>" style="color:black;">
                                                            <i class="fa fa-file-word-o">
                                                                <?php echo $file->LIB_SUBJECT?>
                                                            </i>
                                                        </a>
                                                    </p> 
                                                    <?php endforeach ?>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <div class="table-responsive mt-5">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th scope="col" class="text-center pc_contents_font m_contents_font">고객용 메뉴얼</th>
                                                <th scope="col" class="text-center pc_contents_font m_contents_font">가맹점용 메뉴얼</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td class="text-center" style="vertical-align:middle;">
                                                    <?php foreach ($files4 as $file):?>
                                                    <p style="font-size:14px;">
                                                        <a href="<?php echo $file->LIB_FILE_PATH?>" download="<?php echo $file->LIB_FILE_NAME?>" style="color:black;">
                                                            <i class="fa fa-file-word-o">
                                                                <?php echo $file->LIB_SUBJECT?>
                                                            </i>
                                                        </a>
                                                    </p> 
                                                    <?php endforeach ?>
                                                </td>
                                                <td class="text-center" style="vertical-align:middle;">
                                                    <?php foreach ($files5 as $file):?>
                                                    <p style="font-size:14px;">
                                                        <a href="<?php echo $file->LIB_FILE_PATH?>" download="<?php echo $file->LIB_FILE_NAME?>" style="color:black;">
                                                            <i class="fa fa-file-word-o">
                                                                <?php echo $file->LIB_SUBJECT?>
                                                            </i>
                                                        </a>
                                                    </p> 
                                                    <?php endforeach ?>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
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