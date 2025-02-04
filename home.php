<?php include 'vendors/functions/auth.php'; user_has_valid_cookie(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>NeuralGantt</title>
  <link rel="stylesheet" href="vendors/iconfonts/mdi/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="vendors/css/vendor.bundle.base.css">
  <link rel="stylesheet" href="vendors/css/vendor.bundle.addons.css">
  <link rel="stylesheet" href="css/style.css">
  <link rel="shortcut icon" href="media/pictures/logo.png" />
  <style>
  .shadow-z-1{
  -webkit-box-shadow: 0 1px 3px 0 rgba(0, 0, 0, 0.12), 0 1px 2px 0 rgba(0, 0, 0, 0.24);
    -moz-box-shadow: 0 1px 3px 0 rgba(0, 0, 0, 0.12), 0 1px 2px 0 rgba(0, 0, 0, 0.24);
    box-shadow: 0 1px 3px 0 rgba(0, 0, 0, 0.12), 0 1px 2px 0 rgba(0, 0, 0, 0.24);
	}
   .admin-card{
	   width: 100%;
		text-decoration: none;
   }
</style>
</head>
<body>
  <div class="container-scroller">
    <nav class="navbar default-layout col-lg-12 col-12 p-0 fixed-top d-flex flex-row" style="background: #5983e8;">
      <div class="text-center navbar-brand-wrapper d-flex align-items-top justify-content-center">
        <a class="navbar-brand brand-logo" href="index.php">
          <img src="media/pictures/logo-mini.svg" alt="logo" style="height: 40px;width: 40px;"/><h2 style="color:rgb(74, 74, 74); padding-top:10px;">NeuralGantt</h2>
        </a>
        <a class="navbar-brand brand-logo-mini" href="index.php">
		<img src="media/pictures/logo-mini.svg" alt="logo" style="height: 40px;width: 100%;"/>
        </a>
      </div>
      <div class="navbar-menu-wrapper d-flex align-items-center">
        <ul class="navbar-nav navbar-nav-left header-links d-none d-md-flex">
          <li class="nav-item active">
            <a href="home.php" class="nav-link">Home
            </a>
          </li>
          <li class="nav-item">
            <a href="project/index.php" class="nav-link">
              <i class="mdi mdi-folder-multiple"></i>My Projects</a>
          </li>
        </ul>
        <?php include_once 'vendors/functions/menu.php'; 
			display_user_navbar_home();
		?>
        <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
          <span class="mdi mdi-menu"></span>
        </button>
      </div>
    </nav>
    <div class="container-fluid page-body-wrapper">
      <?php include_once 'vendors/functions/menu.php';
		display_user_navigation_home();
	  ?>
      <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">
          <div class="row">
            <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 grid-margin stretch-card">
             <a href="./project/index.php" class="admin-card"><div class="card card-statistics shadow-z-1">
                <div class="card-body">
                  <div class="clearfix">
                    <div class="float-left">
                      <i class="mdi mdi-folder-multiple text-danger icon-lg"></i>
                    </div>
                    <div class="float-right">
                      <div class="fluid-container">
                        <h3 class="font-weight-medium text-right mb-0">My Projects</h3>
                      </div>
                    </div>
                  </div>
                  <p class="text-muted mt-3 mb-0">
                    <i class="mdi mdi-alert-octagon mr-1" aria-hidden="true"></i>Click here to view your projects
                  </p>
                </div>
              </div></a>
            </div>
            <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 grid-margin stretch-card">
              <div class="card card-statistics shadow-z-1">
                <div class="card-body">
                  <div class="clearfix">
                    <div class="float-left">
                      <i class="mdi mdi-account-multiple text-warning icon-lg"></i>
                    </div>
                    <div class="float-right">
                      <div class="fluid-container">
                        <h3 class="font-weight-medium text-right mb-0">Manage users</h3>
                      </div>
                    </div>
                  </div>
                  <p class="text-muted mt-3 mb-0">
                    <i class="mdi mdi-alert-octagon mr-1" aria-hidden="true"></i>Click here to manage users on your projects
                  </p>
                </div>
              </div>
            </div>
            <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 grid-margin stretch-card">
              <a href="./project/neural.php" class="admin-card"><div class="card card-statistics shadow-z-1">
                <div class="card-body">
                  <div class="clearfix">
                    <div class="float-left">
                      <i class="mdi mdi-poll-box text-success icon-lg"></i>
                    </div>
                    <div class="float-right">
                      <div class="fluid-container">
                        <h3 class="font-weight-medium text-right mb-0">Neural Networks</h3>
                      </div>
                    </div>
                  </div>
                  <p class="text-muted mt-3 mb-0">
                    <i class="mdi mdi-alert-octagon mr-1" aria-hidden="true"></i>Click here to view neural networks
                  </p>
                </div>
              </div></a>
            </div>
            <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 grid-margin stretch-card">
              <div class="card card-statistics shadow-z-1">
                <div class="card-body">
                  <div class="clearfix">
                    <div class="float-left">
                      <i class="mdi mdi-settings text-info icon-lg"></i>
                    </div>
                    <div class="float-right">
                      <div class="fluid-container">
                        <h3 class="font-weight-medium text-right mb-0">Settings</h3>
                      </div>
                    </div>
                  </div>
                  <p class="text-muted mt-3 mb-0">
                    <i class="mdi mdi-alert-octagon mr-1" aria-hidden="true"></i> Click here to view your settings
                  </p>
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
