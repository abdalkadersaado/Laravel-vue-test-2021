<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <link href="#" rel="icon">
  <title>Test Project</title>
 <link rel="stylesheet" type="text/css" href="{{ asset('css/app.css')}}">

  <link href="{{ asset('backend/vendor/fontawesome-free/css/all.min.css')}}" rel="stylesheet" type="text/css">
  <link href="{{ asset('backend/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css">
  <link href="{{ asset('backend/css/ruang-admin.min.css')}}" rel="stylesheet">
</head>

<body id="page-top">
  <div id="app">


  <div id="wrapper">

    <!-- Sidebar -->
  <nav id="sidebar" v-show="$route.path === '/' || $route.path === '/register' || $route.path === '/forget' ? false : true " style="display:  none;">

    <ul class="navbar-nav sidebar sidebar-light accordion" id="accordionSidebar">
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="#">

        <div class="sidebar-brand-text mx-3">Test Inventory</div>
      </a>
      <hr class="sidebar-divider my-0">
      <li class="nav-item active">
        <router-link class="nav-link" to="/home">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Dashboard</span></router-link>
      </li>

     <li class="nav-item bg-info">
        <router-link class="nav-link" to="/pos">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>List Products</span></router-link>
      </li>

      <hr class="sidebar-divider">
      <div class="sidebar-heading">
        Features
      </div>


            <li class="nav-item">
                    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseBootstrap1"
                    aria-expanded="true" aria-controls="collapseBootstrap1">
                    <i class="far fa-fw fa-window-maximize"></i>
                    <span>Suppliers</span>
                    </a>
                    <div id="collapseBootstrap1" class="collapse" aria-labelledby="headingBootstrap" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">

                        <router-link class="collapse-item" to="/store-supplier">Add Suppliers</router-link>
                        <router-link class="collapse-item" to="/supplier">All Suppliers</router-link>

                    </div>
                    </div>
            </li>




            <li class="nav-item">
                    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseBootstrap2"
                    aria-expanded="true" aria-controls="collapseBootstrap2">
                    <i class="far fa-fw fa-window-maximize"></i>
                    <span>Category</span>
                    </a>
                    <div id="collapseBootstrap2" class="collapse" aria-labelledby="headingBootstrap" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">

                        <router-link class="collapse-item" to="/store-category">Add Category</router-link>
                        <router-link class="collapse-item" to="/category">All Category</router-link>

                    </div>
                    </div>
            </li>






            <li class="nav-item">
                    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseBootstrap3"
                    aria-expanded="true" aria-controls="collapseBootstrap3">
                    <i class="far fa-fw fa-window-maximize"></i>
                    <span>Products</span>
                    </a>
                    <div id="collapseBootstrap3" class="collapse" aria-labelledby="headingBootstrap" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">

                        <router-link class="collapse-item" to="/store-product">Add Product</router-link>
                        <router-link class="collapse-item" to="/product">All Product</router-link>

                    </div>
                    </div>
            </li>


            <li class="nav-item">
                    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseBootstrap44"
                    aria-expanded="true" aria-controls="collapseBootstrap44">
                    <i class="far fa-fw fa-window-maximize"></i>
                    <span>Customers</span>
                    </a>
                    <div id="collapseBootstrap44" class="collapse" aria-labelledby="headingBootstrap" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">

                        <router-link class="collapse-item" to="/store-customer">Add Customer</router-link>
                        <router-link class="collapse-item" to="/customer">All Customer</router-link>

                    </div>
                    </div>
            </li>

            <li class="nav-item">
                    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseBootstrap51"
                    aria-expanded="true" aria-controls="collapseBootstrap51">
                    <i class="far fa-fw fa-window-maximize"></i>
                    <span>Orders</span>
                    </a>
                    <div id="collapseBootstrap51" class="collapse" aria-labelledby="headingBootstrap" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">

                            <router-link class="collapse-item" to="/order">Today Order</router-link>
                            <router-link class="collapse-item" to="/searchorder">Search</router-link>

                    </div>
                    </div>
            </li>


            <li class="nav-item">
                <router-link class="nav-link" to="/stock">
                <i class="fab fa-fw fa-wpforms"></i>
                <span>Stock</span>
                </router-link>
            </li>

      <hr class="sidebar-divider">
      <div class="version" id="version-ruangadmin"></div>
    </ul>
    <!-- Sidebar -->
 </nav>





    <div id="content-wrapper" class="d-flex flex-column">
      <div id="content">



        <!-- TopBar -->
        <nav class="navbar navbar-expand navbar-light bg-navbar topbar mb-4 static-top" id="topbar" v-show="$route.path === '/' || $route.path === '/register' || $route.path === '/forget' ? false : true " style="display: none;">



          <ul class="navbar-nav ml-auto">

            <li class="nav-item dropdown no-arrow">
              <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown"
                aria-haspopup="true" aria-expanded="false">
                     <img class="img-profile rounded-circle" src="{{ asset('backend/img/boy.png')}}" style="max-width: 60px">
                  <router-link to="/logout" class="ml-2 d-none d-lg-inline text-white small">Logout
                  </router-link>
              </a>
              <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                <a class="dropdown-item" href="#">
                  <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                  Profile
                </a>
                <a class="dropdown-item" href="#">
                  <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                  Settings
                </a>
                <a class="dropdown-item" href="#">
                  <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
                  Activity Log
                </a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="login.html">
                  <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                  Logout
                </a>
              </div>
            </li>
          </ul>
        </nav>
        <!-- Topbar -->

        <!-- Container Fluid-->
        <div class="container-fluid" id="container-wrapper">
               <router-view></router-view>
        </div>
        <!---Container Fluid-->
      </div>

  <!-- Footer -->
      <footer class="sticky-footer bg-white">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>copyright &copy; <script> document.write(new Date().getFullYear()); </script> - developed by
              <b><a href="abdalkader1994953@gmail.com" target="_blank">abdalkader saado</a></b>
            </span>
          </div>
        </div>
      </footer>
      <!-- Footer -->



    </div>

  </div>

  </div>

  <!-- Scroll to top -->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>
  <script src="{{ asset('js/app.js')}}"></script>
  <script src="{{ asset('backend/vendor/jquery/jquery.min.js')}}"></script>
  <script src="{{ asset('backend/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

   <script type="text/javascript">
     let token = localStorage.getItem('token');
     if (token) {
      $("#sidebar").css("display","");
      $("#topbar").css("display","");

     }
   </script>




  <script src="{{ asset('backend/vendor/jquery-easing/jquery.easing.min.js')}}"></script>
  <script src="{{ asset('backend/js/ruang-admin.min.js')}}"></script>
</body>

</html>
