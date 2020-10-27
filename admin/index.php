
<?php 
require_once "../fonction/bdd.php";
include_once "../fonction/admin.php";

$bdd = bdd();
$nb_membre = nb_membres();
$nb_article = nb_articles();
$nb_articles_informatique = nb_articles_filiere(1);
$nb_articles_batiment = nb_articles_filiere(2);
$nb_articles_ada = nb_articles_filiere(3);
$nb_articles_agro = nb_articles_filiere(4);

?>



<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>SB Admin 2 - Dashboard</title>

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
    <ul class="navbar-nav  sidebar sidebar-dark accordion" id="accordionSidebar" style="background-color: #a50400;">

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.php">
        <div class="sidebar-brand-icon rotate-n-15">
          <i class="fas fa-laugh-wink"></i>
        </div>
        <div class="sidebar-brand-text mx-3">F-IUTEA Admin</div>
      </a>

      <!-- Divider -->
      <hr class="sidebar-divider my-0">

      <!-- Nav Item - Dashboard -->
      <li class="nav-item active">
        <a class="nav-link" href="index.php">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Tableau de Bord</span></a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Heading -->
      

      <!-- Nav Item - Pages Collapse Menu -->
   

      <!-- Divider -->
      

      <!-- Heading -->
      <div class="sidebar-heading">
        GERER
      </div>

      <!-- Nav Item - Pages Collapse Menu -->


      <!-- Nav Item - Charts -->
     

      <!-- Nav Item - Tables -->
      <li class="nav-item active">
        <a class="nav-link" href="G_membres.php">
        <i class="fas fa-users"></i>
          <span>UTILISATEURS</span></a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="G_articles.php">
        <i class="far fa-newspaper"></i>
          <span>ARTICLES</span></a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="G_filieres.php">
        <i class="fas fa-book"></i>
          <span>FILIERES</span></a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider d-none d-md-block">

      <!-- Sidebar Toggler (Sidebar) -->
      <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
      </div>

    </ul>
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        <!-- Topbar -->
        <br><br>
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Tableau de bord</h1>
          </div>

          <!-- Content Row -->
          <div class="row">

            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-6 col-md-6 mb-4">
              <div class="card border-left-dark shadow h-100 py-2" >
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-uppercase mb-1" style="color: black;">UTILISATEURS</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800"><?=$nb_membre ?></div>
                    </div>
                    <div class="col-auto">
                    <i class="fas fa-users" style="font-size: 50px; color:#a50400;"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-6 col-md-6 mb-4">
              <div class="card border-left-dark shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-uppercase mb-1" style="color: black;">Articles</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800"><?=$nb_article ?></div>
                    </div>
                    <div class="col-auto">
                    <i class="far fa-newspaper" style="font-size: 50px; color:#a50400;"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
            <!-- Earnings (Monthly) Card Example -->
          <div class="row">
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-dark shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold  text-uppercase mb-1" style="color: black;">INFORMATIQUE</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800"><?=$nb_articles_informatique ?></div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-comments fa-2x text-300" style="font-size: 50px; color:#a50400;"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- Pending Requests Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-dark shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold  text-uppercase mb-1" style="color: black;">Batiment et construction</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800"><?=$nb_articles_batiment ?></div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-comments fa-2x text-300" style="font-size: 50px; color:#a50400;"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-dark shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold  text-uppercase mb-1" style="color: black;">ADMINISTRATION DES ENTREPRISES</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800"><?=$nb_articles_ada ?></div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-comments fa-2x text-300" style="font-size: 50px; color:#a50400;"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-dark shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold  text-uppercase mb-1" style="color: black;">AGROECOLOGIE</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800"><?=$nb_articles_agro ?></div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-comments fa-2x text-300" style="font-size: 50px; color:#a50400;"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <!-- Content Row -->

          

            

          <!-- Content Row -->
          
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->

      <!-- Footer -->
      <footer class="sticky-footer bg-white">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
          <span>Copyright &copy; F-IUTEA</span>
          </div>
        </div>
      </footer>
      <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->

  </div>
  <!-- End of Page Wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <!-- Logout Modal-->
  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
          <a class="btn btn-primary" href="login.html">Logout</a>
        </div>
      </div>
    </div>
  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin-2.min.js"></script>

  <!-- Page level plugins -->
  <script src="vendor/chart.js/Chart.min.js"></script>

  <!-- Page level custom scripts -->
  <script src="js/demo/chart-area-demo.js"></script>
  <script src="js/demo/chart-pie-demo.js"></script>

</body>

</html>
