<?php include("includes/top_header.php")?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>NobleUI Responsive Bootstrap 4 Dashboard Template</title>
	<!-- core:css -->
	<link rel="stylesheet" href="assets/vendors/core/core.css">
	<!-- endinject -->
  <!-- plugin css for this page -->
	<!-- end plugin css for this page -->
	<!-- inject:css -->
	<link rel="stylesheet" href="assets/fonts/feather-font/css/iconfont.css">
	<link rel="stylesheet" href="assets/vendors/flag-icon-css/css/flag-icon.min.css">
	<!-- endinject -->
  <!-- Layout styles -->  
	<link rel="stylesheet" href="assets/css/demo_1/style.css">
  <!-- End layout styles -->
  <link rel="shortcut icon" href="assets/images/favicon.png" />
</head>
<body class="rtl">
	<div class="main-wrapper">
		<div class="page-wrapper full-page">
			<div class="page-content d-flex align-items-center justify-content-center">

				<div class="row w-100 mx-0 auth-page">
					<div class="col-md-8 col-xl-6 mx-auto">
						<div class="card">
							<div class="row">
                <div class="col-md-4 pl-md-0">
                  <div class="auth-left-wrapper">

                  </div>
                </div>
                <div class="col-md-8 pr-md-0">
                  <div class="auth-form-wrapper px-4 py-5">
                    <a href="#" class="noble-ui-logo d-block mb-2">نفيسة &nbsp;<span>رهن السدر</span></a>
                    <h5 class="text-muted font-weight-normal mb-4">يرجى تسجيل الدخول</h5>
                    <form class="forms-sample" method="post" action="<?php echo ACTIONS ."login.php" ?>">
                    <?php show_messages(); ?>
                      <div class="form-group">
                       <!-- <label for="exampleInputEmail1">اسم المستخدم / الايميل</label>-->
                        <input type="text" name="email" class="form-control" id="exampleInputEmail1" placeholder="اسم المستخدم / الايميل">
                      </div>
                      <div class="form-group">
                        <!--<label for="exampleInputPassword1">كلمة السر</label>-->
                        <input type="password" name="password" class="form-control" id="exampleInputPassword1" autocomplete="current-password" placeholder="كلمة السر">
                      </div>
                      <div class="form-check form-check-flat form-check-primary">
                        <label class="form-check-label">
                          <input type="checkbox" class="form-check-input">
                          تذكرني
                        </label>
                      </div>
                      <div class="mt-3">
                        <input type="submit" name="submit" value="تسجيل الدخول" class="btn btn-primary text-white ml-2 mb-2 mb-md-0">
                      </div>
                    </form>
                  </div>
                </div>
              </div>
						</div>
					</div>
				</div>

			</div>
		</div>
	</div>

	<!-- core:js -->
	<script src="assets/vendors/core/core.js"></script>
	<!-- endinject -->
  <!-- plugin js for this page -->
	<!-- end plugin js for this page -->
	<!-- inject:js -->
	<script src="assets/vendors/feather-icons/feather.min.js"></script>
	<script src="assets/js/template.js"></script>
	<!-- endinject -->
  <!-- custom js for this page -->
	<!-- end custom js for this page -->
</body>
</html>