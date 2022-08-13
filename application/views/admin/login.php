<?php
	include_once dirname(__DIR__)."/admin/include/admin-header.php";
?>
  <body class="bg-1">
    <!-- Wrap all page content here -->
    <div id="wrap">
      <!-- Make page fluid -->
      <div class="row">
        <!-- Page content -->
        <div id="content" class="col-md-12 full-page login">


          <div class="inside-block">
            <img src="/assets/img/logo/safe_pay_font_ver.webp" alt="safepay" style="width:30%;">
            <h1>ANSIMPAY ADMIN</h1>
            <h5>안심페이 어드민 웹페이지</h5>                                
            <form id="loginForm"> 
              <section>
                <div class="input-group">
                  <input type="text" class="form-control" name="userId" placeholder="Username">
                  <div class="input-group-addon"><i class="fa fa-user"></i></div>
                </div>
                <div class="input-group">
                  <input type="password" class="form-control" name="userPwd" placeholder="Password">
                  <div class="input-group-addon"><i class="fa fa-key"></i></div>
                </div>
              </section>
              <!-- <section class="controls">
                <div class="checkbox check-transparent">
                  <input type="checkbox" value="1" id="remember" checked>
                  <label for="remember">Remember me</label>
                </div>
                <a href="#">Forget password?</a>
              </section> -->
              <section class="log-in">
                <button type="button" class="btn btn-greensea" onclick="login()">Log In</button>
              </section>
            </form>
          </div>


        </div>
        <!-- /Page content -->  
      </div>
    </div>
    <!-- Wrap all page content end -->
  </body>
</html>
<?php
		include_once dirname(__DIR__)."/admin/include/admin-footer.php";
	?>

<script>
  
function login(){
      const formData = new FormData($("#loginForm")[0]);
			$.ajax({
				url: 		 "/login/login",
				type: 		 "post",
				data: 		 formData,
				dataType:	 "json",
				contentType: false,
				processData: false,
				success: function(data){
          console.log(data);
          if(data['code'] == 200){
            location.href="/admin/siteInfo"
          }else{
            alert(data['msg']);
          }
				},
				error: function(e){
					alert("오류가 발생했습니다. 관리자에게 문의바랍니다.")
				}
		})
}
</script>
      