<?php
  include_once dirname(__DIR__)."/admin/include/admin-header.php";
?>
<body class="bg-1">

    <!-- Preloader -->
    <div class="mask"><div id="loader"></div></div>
    <!--/Preloader -->

    <!-- Wrap all page content here -->
    <div id="wrap">

      <!-- Make page fluid -->
      <div class="row">

        <!-- Fixed navbar -->

        <?php
            include_once dirname(__DIR__)."/admin/include/admin-top.php";
        ?>
        <!-- Fixed navbar end -->

        <!-- Page content -->
        <div id="content" class="col-md-12">

          <!-- page header -->
          <div class="pageheader">
            <h2><i class="fa fa-puzzle-piece" style="line-height: 48px;padding-left: 5px;"></i> <b>회원정보 수정 </b></h2>
            <div class="breadcrumbs">
              <ol class="breadcrumb">
                <li>관리자 페이지</li>
                <li><a href="index.html">회원관리</a></li>
                <li class="active">회원정보 수정하기</li>
              </ol>
            </div>

          </div>
          <!-- /page header -->

          <!-- content main container -->
          <div class="main">

            <!-- row -->
            <div class="row">

              <!-- col 6 -->
              <div class="col-md-12">
                <!-- tile -->
                <section class="tile color transparent-black">

                    <!-- tile body -->
                    <div class="tile-body">
                        <form name="form1" id="form1" method="post">
                        <table class="table table-custom dataTable userTable">
                            <colgroup>
                                <col width="15%"/>
                                <col width="35%"/>
                                <col width="15%"/>
                                <col width="35%"/>
                            </colgroup>
                            <tbody>
                                <tr>
                                    <th>아이디</th>
                                    <td><input type="text" name="admin_id" value="" size="50"></td>
                                    <th>비밀번호</th>
                                    <td><input type="password" name="admin_pw" value="" size="50"></td>
                                </tr>
                                <tr>
                                    <th>이름</th>
                                    <td><input type="text" name="admin_name" value="" size="50"></td>
                                    <th>이메일</th>
                                    <td><input type="text" name="admin_email" value="" size="100"></td>
                                </tr>
                                <tr>
                                    <th>연락처</th>
                                    <td><input type="text" name="admin_tel" value="" size="50"></td>
                                    <th>휴대폰</th>
                                    <td><input type="text" name="admin_hp" value="" size="50"></td>
                                </tr>
                                <tr>
                                    <th>관리자 메모</th>
                                    <td colspan="3">
                                        <textarea name="admin_memo"></textarea>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        </form>
                        <div class="row form-footer">
                            <div class="col-sm-offset-2 col-sm-10 text-right">
                                <a href="/admin/managers" class="btn btn-default btn-sm">취소</a>
                                <button type="button" class="btn btn-primary btn-sm" id="saveManager">저장</a>
                            </div>
                        </div>

                    </div>
                  <!-- /tile body -->

                </section>
                <!-- /tile -->

              </div>
              <!-- /col 12 -->

            </div>
            <!-- /row -->

          </div>
          <!-- /content container -->

        </div>
        <!-- Page content end -->

      </div>
      <!-- Make page fluid-->

    </div>
    <!-- Wrap all page content end -->

    <?php
        include_once dirname(__DIR__)."/admin/include/admin-footer.php";
    ?>
</body>
</html>
<script type="text/javascript">
    $(function(){
        $(document).on("click", "#saveManager", function(){
            var admin_id = $("input[name=admin_id]").val();
            var admin_pw = $("input[name=admin_pw]").val();
            var admin_name = $("input[name=admin_name]").val();
            var admin_email = $("input[name=admin_email]").val();
            var admin_tel = $("input[name=admin_tel]").val();
            var admin_hp = $("input[name=admin_hp]").val();
            var admin_memo = $("textarea[name=admin_memo]").val();

            if (admin_id == ""){
                alert("관리자 아이디를 입력해주세요");
                return false;
            }

            if (admin_pw == ""){
                alert("관리자 비밀번호를 입력해주세요");
                return false;
            }

            if (admin_name == ""){
                alert("관리자 이름을 입력해주세요");
                return false;
            }

            $.ajax({
                url:"/adm/manager/managerWriteProc",
                type:"post",
                data:{
                    "admin_id" : admin_id,
                    "admin_pw" : admin_pw,
                    "admin_name" : admin_name,
                    "admin_email" : admin_email,
                    "admin_tel" : admin_tel,
                    "admin_hp" : admin_hp,
                    "admin_memo" : admin_memo
                },
                dataType:"json",
                success:function(resultMsg){
                    if (resultMsg.code == "200"){
                        alert(resultMsg.msg);
                        document.location.href="/admin/managers";
                    }else{
                        alert(resultMsg.msg);
                    }
                },
                error:function(e){
                    console.log(e);
                }
            })
        });
    });
</script>
