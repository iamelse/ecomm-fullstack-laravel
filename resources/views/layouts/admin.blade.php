<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />

    <title>@yield('title')</title>

    @stack('prepend-style')
        <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet" />
        <link href="{{ asset('style/main.css') }}" rel="stylesheet" />
        <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs4/dt-1.12.1/datatables.min.css"/>
    @stack('addon-style')
</head>

<body>
    <div class="page-dashboard">
        <div class="d-flex" id="wrapper" data-aos="fade-right">
            <!-- Sidebar -->
            <div class="border-right" id="sidebar-wrapper">
                <div class="sidebar-heading text-center">
                    <img src="/images/dashboard-store-logo.svg" alt="" class="my-4" />
                </div>
                <div class="list-group list-group-flush">
                    <a 
                      href="/admin" 
                      class="list-group-item list-group-item-action"
                      >Dashboard</a>
                    <a
                      href="/admin/product"
                      class="list-group-item list-group-item-action {{ (request()->is('admin/product')) ? 'active' : '' }}"
                    >Products</a>
                    <a
                      href="/admin/product-gallery"
                      class="list-group-item list-group-item-action {{ (request()->is('admin/product-gallery*')) ? 'active' : '' }}"
                    >Galleries</a>
                    <a
                      href="/admin/category"
                      class="list-group-item list-group-item-action {{ (request()->is('admin/category*')) ? 'active' : '' }}"
                    >Categories</a>
                    <a
                      href="/dashboard-settings.html"
                      class="list-group-item list-group-item-action"
                    >Transactions</a>
                    <a
                      href="/admin/user"
                      class="list-group-item list-group-item-action {{ (request()->is('admin/user*')) ? 'active' : '' }}"
                    >Users</a>
          </div>
        </div>
        <!-- /#sidebar-wrapper -->

        <!-- Page Content -->
        <div id="page-content-wrapper">
          <nav
            class="navbar navbar-store navbar-expand-lg navbar-light fixed-top"
            data-aos="fade-down"
          >
            <button
              class="btn btn-secondary d-md-none mr-auto mr-2"
              id="menu-toggle"
            >
              &laquo; Menu
            </button>

            <button
              class="navbar-toggler"
              type="button"
              data-toggle="collapse"
              data-target="#navbarSupportedContent"
              aria-controls="navbarSupportedContent"
              aria-expanded="false"
              aria-label="Toggle navigation"
            >
              <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav ml-auto d-none d-lg-flex">
                <li class="nav-item dropdown">
                  <a
                    class="nav-link"
                    href="#"
                    id="navbarDropdown"
                    role="button"
                    data-toggle="dropdown"
                    aria-haspopup="true"
                    aria-expanded="false"
                  >
                    <img
                      src="/images/user_pc.png"
                      alt=""
                      class="rounded-circle mr-2 profile-picture"
                    />
                    Hi, Angga
                  </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="/">Logout</a>
                    </div>
                    </li>
                    </ul>
                    <!-- Mobile Menu -->
                    <ul class="navbar-nav d-block d-lg-none mt-3">
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                    Hi, Angga
                  </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link d-inline-block" href="#">
                    Cart
                  </a>
                        </li>
                    </ul>
                </div>
                </nav>

                {{-- Content --}}
                @yield('content')

            </div>
            <!-- /#page-content-wrapper -->
        </div>
    </div>

    <!-- Bootstrap core JavaScript -->
    @stack('prepend-script')
    <script src="/vendor/jquery/jquery.min.js"></script>
    <script src="/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/v/bs4/dt-1.12.1/datatables.min.js"></script>
    <script>
        AOS.init();
    </script>
    <!-- Menu Toggle Script -->
    <script>
        $("#menu-toggle").click(function(e) {
            e.preventDefault();
            $("#wrapper").toggleClass("toggled");
        });
    </script>
    @stack('addon-script')
</body>

</html>