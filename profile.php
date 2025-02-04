<?php 
include 'vendors/functions/auth.php'; 
include 'vendors/functions/menu.php';
include 'vendors/functions/profile.php';
user_has_valid_cookie();
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>BNeuralGantt | Profile</title>
  <link rel="stylesheet" href="vendors/iconfonts/mdi/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="vendors/css/vendor.bundle.base.css">
  <link rel="stylesheet" href="vendors/css/vendor.bundle.addons.css">
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/material-table.css">
  <link rel="shortcut icon" href="media/pictures/logo.png" />
</head>
<body>
  <div class="container-scroller">
    <nav class="navbar default-layout col-lg-12 col-12 p-0 fixed-top d-flex flex-row" style="background: #5983e8;">
      <div class="text-center navbar-brand-wrapper d-flex align-items-top justify-content-center">
        <a class="navbar-brand brand-logo" href="index.php">
          <img src="../media/pictures/logo-mini.svg" alt="logo" style="height: 40px;width: 40px;"/><h2 style="color:rgb(74, 74, 74); padding-top:10px;">NeuralGantt</h2>
        </a>
        <a class="navbar-brand brand-logo-mini" href="index.php">
		<img src="../media/pictures/logo-mini.svg" alt="logo" style="height: 40px;width: 100%;"/>
        </a>
      </div>
      <div class="navbar-menu-wrapper d-flex align-items-center">
        <ul class="navbar-nav navbar-nav-left header-links d-none d-md-flex">
          <li class="nav-item">
            <a href="home.php" class="nav-link">Home
            </a>
          </li>
          <li class="nav-item">
            <a href="project/index.php" class="nav-link">
              <i class="mdi mdi-folder-multiple"></i>My Projects</a>
          </li>
		  <li class="nav-item active">
            <a href="profile.php?user=<?php echo $_GET['user']; ?>" class="nav-link">
              <i class="mdi mdi-account"></i>My Profile</a>
          </li>
        </ul>
        <?php 
			display_user_navbar_home();
		?>
        <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
          <span class="mdi mdi-menu"></span>
        </button>
      </div>
    </nav>
    <div class="container-fluid page-body-wrapper">
      <?php 
		display_user_navigation_home();
	  ?>
      <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">
			<div class="row">
			 <div class="col-md-6 d-flex align-items-stretch grid-margin" style="margin:auto; margin-bottom: 40px;">
              <div class="row flex-grow">
			  <?php
			  if(isset($_POST['fname'])){
				  user_updated_message();
			  }
			  ?>
                <div class="col-12">
                  <div class="card shadow-z-1">
                    <?php
						display_user_profile();
					?>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <?php include 'vendors/functions/footer.php'; ?>
      </div>
    </div>
  </div>
  <script src="vendors/js/vendor.bundle.base.js"></script>
  <script src="vendors/js/vendor.bundle.addons.js"></script>
  <script src="js/off-canvas.js"></script>
  <script src="js/misc.js"></script>
  <script src="js/dashboard.js"></script>
</body>

</html>
