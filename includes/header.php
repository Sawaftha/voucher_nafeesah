<?php include('top_header.php');
if(!isset($_SESSION['in_login'])){
  header('location:login.php');
} ?>
<body class="rtl">
	<div class="main-wrapper">
		<!-- partial:partials/_sidebar.html -->
		<nav class="sidebar">
      <div class="sidebar-header">
        <a href="#" class="sidebar-brand">
		 نفيسة&nbsp;<span>رهن السدر</span>
        </a>
        <div class="sidebar-toggler not-active">
          <span></span>
          <span></span>
          <span></span>
        </div>
      </div>
      <div class="sidebar-body">
        <ul class="nav">
          <li class="home_page nav-item">
            <a href="home_page.php" class="nav-link">
              <i class="link-icon fas fa-home"></i>
              <span class="link-title">الرئيسية</span>
            </a>
          </li>
          <li class="users_section nav-item">
            <a href="users.php" class="nav-link">
              <i class="link-icon fas fa-users"></i>
              <span class="link-title">المستخدمين</span>
            </a>
          </li>
          <li class="settings_section nav-item">
            <a href="settings.php" class="nav-link">
              <i class="link-icon fas fa-cogs"></i>
              <span class="link-title">الإعدادات</span>
            </a>
		  </li>

		  <li class="customers_section nav-item">
            <a href="customers.php" class="nav-link">
			  <i class="link-icon fas fa-address-book"></i>
              <span class="link-title">الزبائن</span>
            </a>
		  </li>
		  <li class="nav-item nav-category">أفرع نفيسة</li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#branches" role="button" aria-expanded="false" aria-controls="uiComponents">
              <i class="link-icon fas fa-store-alt"></i>
              <span class="link-title">نفيسة</span>
              <i class="link-arrow" data-feather="chevron-down"></i>
            </a>
            <div class="collapse" id="branches">
              <ul class="nav sub-menu">
                <li class="madenah_street nav-item">
                  <a href="madenah_street.php" class="nav-link">شارع المدينة</a>
                </li>
                <li class="khalda nav-item">
                  <a href="khalda.php" class="nav-link">خلدا</a>
                </li>
                <li class="freedom_street nav-item">
                  <a href="freedom_street.php" class="nav-link">شارع الحرية</a>
                </li>
                <li class="7th nav-item">
                  <a href="7th.php" class="nav-link">الدوار السابع</a>
                </li>
                <li class="tabrbor nav-item">
                  <a href="tabrbor.php" class="nav-link">طبربور</a>
                </li>
                <li class="jabl_amman nav-item">
                  <a href="jabl_amman.php" class="nav-link">جبل عمان</a>
                </li>
                <li class="zarqa nav-item">
                  <a href="zarqa.php" class="nav-link">الزرقاء</a>
                </li>
                <li class="mafraq nav-item">
                    <a href="mafraq.php" class="nav-link">المفرق</a>
                  </li>
                <li class="irbid nav-item">
                  <a href="irbid.php" class="nav-link">اربد</a>
                </li>
              </ul>
            </div>
          </li>
       
		 
        </ul>
      </div>
    </nav>
    <div class="page-wrapper">
			<!-- partial:partials/_navbar.html -->
			<nav class="navbar">
				<a href="#" class="sidebar-toggler">
					<i data-feather="menu"></i>
				</a>
				<div class="navbar-content">
					<ul class="navbar-nav">
						<!--<li class="nav-item dropdown nav-notifications">
							<a class="nav-link dropdown-toggle" href="#" id="notificationDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								<i data-feather="bell"></i>
								<div class="indicator">
									<div class="circle"></div>
								</div>
							</a>
							<div class="dropdown-menu" aria-labelledby="notificationDropdown">
								<div class="dropdown-header d-flex align-items-center justify-content-between">
									<p class="mb-0 font-weight-medium">6 New Notifications</p>
									<a href="javascript:;" class="text-muted">Clear all</a>
								</div>
								<div class="dropdown-body">
									<a href="javascript:;" class="dropdown-item">
										<div class="icon">
											<i data-feather="user-plus"></i>
										</div>
										<div class="content">
											<p>New customer registered</p>
											<p class="sub-text text-muted">2 sec ago</p>
										</div>
									</a>
									<a href="javascript:;" class="dropdown-item">
										<div class="icon">
											<i data-feather="gift"></i>
										</div>
										<div class="content">
											<p>New Order Recieved</p>
											<p class="sub-text text-muted">30 min ago</p>
										</div>
									</a>
									<a href="javascript:;" class="dropdown-item">
										<div class="icon">
											<i data-feather="alert-circle"></i>
										</div>
										<div class="content">
											<p>Server Limit Reached!</p>
											<p class="sub-text text-muted">1 hrs ago</p>
										</div>
									</a>
									<a href="javascript:;" class="dropdown-item">
										<div class="icon">
											<i data-feather="layers"></i>
										</div>
										<div class="content">
											<p>Apps are ready for update</p>
											<p class="sub-text text-muted">5 hrs ago</p>
										</div>
									</a>
									<a href="javascript:;" class="dropdown-item">
										<div class="icon">
											<i data-feather="download"></i>
										</div>
										<div class="content">
											<p>Download completed</p>
											<p class="sub-text text-muted">6 hrs ago</p>
										</div>
									</a>
								</div>
								<div class="dropdown-footer d-flex align-items-center justify-content-center">
									<a href="javascript:;">View all</a>
								</div>
							</div>
						</li>-->
						<li class="nav-item dropdown nav-profile">
							<a class="nav-link dropdown-toggle" href="#" id="profileDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								<img src="https://via.placeholder.com/30x30" alt="userr">
							</a>
							<div class="dropdown-menu" aria-labelledby="profileDropdown">
								<div class="dropdown-header d-flex flex-column align-items-center">
									<div class="figure mb-3">
										<img src="https://via.placeholder.com/80x80" alt="">
									</div>
									<div class="info text-center">
										<p class="name font-weight-bold mb-0"><?php echo $_SESSION['name'];?></p>
										<p class="email text-muted mb-3"><?php echo $_SESSION['email'];?></p>
									</div>
								</div>
								<div class="dropdown-body">
									<ul class="profile-nav p-0 pt-3">
										<li class="nav-item">
											<a href="pages/general/profile.html" class="nav-link">
												<i data-feather="user"></i>
												<span>الملف الشخصي</span>
											</a>
										</li>
										<li class="nav-item">
											<a href="javascript:;" class="nav-link">
												<i data-feather="edit"></i>
												<span>تعديل</span>
											</a>
										</li>
										<li class="nav-item">
											<a href="logout.php" class="nav-link">
												<i data-feather="log-out"></i>
												<span>خروج</span>
											</a>
										</li>
									</ul>
								</div>
							</div>
						</li>
					</ul>
				</div>
      </nav>
