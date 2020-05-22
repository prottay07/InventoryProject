<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    
     <!-- Fontfaces CSS-->
     <link href="{{asset('css/font-face.css')}}" rel="stylesheet" media="all">
     <link href="{{asset('vendor/font-awesome-4.7/css/font-awesome.min.css')}}" rel="stylesheet" media="all">
     <link href="{{asset('vendor/font-awesome-5/css/fontawesome-all.min.css')}}" rel="stylesheet" media="all">
     <link href="{{asset('vendor/mdi-font/css/material-design-iconic-font.min.css')}}" rel="stylesheet" media="all">

     
      
     

    <!-- Toaster-->
     <link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.0.1/css/toastr.css" rel="stylesheet"/>
 
     <!-- Bootstrap CSS-->
     <link href="{{asset('vendor/bootstrap-4.1/bootstrap.min.css')}}" rel="stylesheet" media="all">
 
     <!-- Vendor CSS-->
     <link href="{{ asset('vendor/animsition/animsition.min.css')}}" rel="stylesheet" media="all">
     <link href="{{asset('vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css')}}" rel="stylesheet" media="all">
     <link href="{{asset('vendor/wow/animate.css" rel="stylesheet')}}" media="all">
     <link href="{{asset('vendor/css-hamburgers/hamburgers.min.css')}}" rel="stylesheet" media="all">
     <link href="{{asset('vendor/slick/slick.css" rel="stylesheet')}}" media="all">
     <link href="{{asset('vendor/select2/select2.min.css')}}" rel="stylesheet" media="all">
     <link href="{{asset('')}}v" rel="stylesheet" media="all">
      <!-- DataTables -->
      <link href="{{ asset('vendor/datatables/jquery.dataTables.min.css') }}" rel="stylesheet" type="text/css" />
 
     <!-- Main CSS-->
     <link href="{{ asset('css/theme.css')}}" rel="stylesheet" media="all">

    </head>


        <body class="animsition">

                <div class="page-wrapper">


  
            @guest
                
            @else
            
            <header class="header-mobile d-block d-lg-none">
                <div class="header-mobile__bar">
                    <div class="container-fluid">
                        <div class="header-mobile-inner">
                            <a class="logo" href="index.html">
                                <img src="images/icon/logo.png" alt="CoolAdmin" />
                            </a>
                            <button class="hamburger hamburger--slider" type="button">
                                <span class="hamburger-box">
                                    <span class="hamburger-inner"></span>
                                </span>
                            </button>
                        </div>
                    </div>
                </div>
                <nav class="navbar-mobile">
                    <div class="container-fluid">
                        <ul class="navbar-mobile__list list-unstyled">
                            <li class="has-sub">
                                <a class="js-arrow" href="#">
                                    <i class="fas fa-tachometer-alt"></i>Dashboard</a>
                                <ul class="navbar-mobile-sub__list list-unstyled js-sub-list">
                                    <li>
                                        <a href="index.html">Dashboard 1</a>
                                    </li>
                                    
                                </ul>
                            </li>


                            <li class="has-sub">
                                <a class="js-arrow" href="#">
                                    <i class="fas fa-copy"></i>Employees</a>
                                <ul class="list-unstyled navbar__sub-list js-sub-list">
                                    <li>
                                        <a href="login.html">Add Employees</a>
                                    </li>
                                    <li>
                                        <a href="register.html">All Employees</a>
                                    </li>
                                    
                                </ul>
                            </li>


                            <li>
                                <a href="table.html">
                                    <i class="fas fa-table"></i>Tables</a>
                            </li>
                            <li>
                                <a href="form.html">
                                    <i class="far fa-check-square"></i>Forms</a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="fas fa-calendar-alt"></i>Calendar</a>
                            </li>
                            <li>
                                <a href="map.html">
                                    <i class="fas fa-map-marker-alt"></i>Maps</a>
                            </li>

                            <li class="has-sub">
                                <a class="js-arrow" href="#">
                                    <i class="fas fa-copy"></i>Pages</a>
                                <ul class="navbar-mobile-sub__list list-unstyled js-sub-list">
                                    <li>
                                        <a href="login.html">Login</a>
                                    </li>
                                    <li>
                                        <a href="register.html">Register</a>
                                    </li>
                                    <li>
                                        <a href="forget-pass.html">Forget Password</a>
                                    </li>
                                </ul>
                            </li>


                        </ul>
                    </div>
                </nav>
            </header>
            <!-- END HEADER MOBILE-->
    
            <!-- MENU SIDEBAR-->
            <aside class="menu-sidebar d-none d-lg-block">
                <div class="logo">
                    <a href="#">
                        <img src="images/icon/logo.png" alt="Cool Admin" />
                    </a>
                </div>
                <div class="menu-sidebar__content js-scrollbar1">
                    <nav class="navbar-sidebar">
                        <ul class="list-unstyled navbar__list">
                            <li class="active has-sub">
                                <a class="js-arrow" href="#">
                                    <i class="fas fa-tachometer-alt"></i>Dashboard</a>
                                <ul class="list-unstyled navbar__sub-list js-sub-list">
                                    <li>
                                        <a href="index.html">Dashboard 1</a>
                                    </li>
                                    <li>
                                        <a href="index2.html">Dashboard 2</a>
                                    </li>
                                    <li>
                                        <a href="index3.html">Dashboard 3</a>
                                    </li>
                                    <li>
                                        <a href="index4.html">Dashboard 4</a>
                                    </li>
                                </ul>
                            </li>


                             <li class="has-sub">
                                <a class="js-arrow" href="#">
                                    <i class="fas fa-users"></i>Employees<i class="fas fa-caret-down"></i></a>
                                    
                                <ul class="list-unstyled navbar__sub-list js-sub-list">
                                    <li>
                                        <a href="{{ route('add.employee')}}"><i class="fas fa-user-plus"></i>Add Employees</a>
                                    </li>

                                    
                                    <li>
                                        <a href="{{ route('all.employee')}}"><i class="fas fa-server"></i>All Employees</a>
                                    </li>
                                    
                                </ul>
                            </li>

                            
                            <li class="has-sub">
                                <a class="js-arrow" href="#">
                                    <i class="fas fa-users"></i>Customers<i class="fas fa-caret-down"></i></a>
                                    
                                <ul class="list-unstyled navbar__sub-list js-sub-list">
                                    <li>
                                        <a href="{{ route('add.customer')}}"><i class="fas fa-user-plus"></i>Add Customers</a>
                                    </li>

                                    
                                    <li>
                                        <a href="{{ route('all.customer')}}"><i class="fas fa-server"></i>All Customers</a>
                                    </li>
                                    
                                </ul>
                            </li>

                            <li class="has-sub">
                                <a class="js-arrow" href="#">
                                    <i class="fas fa-users"></i>Suppliers<i class="fas fa-caret-down"></i></a>
                                    
                                <ul class="list-unstyled navbar__sub-list js-sub-list">
                                    <li>
                                        <a href="{{ route('add.supplier')}}"><i class="fas fa-user-plus"></i>Add Supplier</a>
                                    </li>

                                    
                                    <li>
                                        <a href="{{ route('all.supplier')}}"><i class="fas fa-server"></i>All Supplier</a>
                                    </li>
                                    
                                </ul>
                            </li>

                            <li class="has-sub">
                                <a class="js-arrow" href="#">
                                    <i class="fas fa-users"></i>Salaries<i class="fas fa-caret-down"></i></a>
                                    
                                <ul class="list-unstyled navbar__sub-list js-sub-list">
                                    <li>
                                        <a href="{{ route('add.advance_salary')}}"><i class="fas fa-user-plus"></i>Add Advance Salary</a>
                                    </li>

                                    
                                    <li>
                                        <a href="{{ route('all.advance_salary')}}"><i class="fas fa-server"></i>All Advance Salary</a>
                                    </li>

                                    <li>
                                        <a href="{{ route('pay.salary')}}"><i class="fas fa-user-plus"></i>Pay Salary</a>
                                    </li>

                                    
                                    <li>
                                        <a href=""><i class="fas fa-server"></i>Last Month Salary</a>
                                    </li>
                                    
                                </ul>
                            </li>
                            <li class="has-sub">
                                <a class="js-arrow" href="#">
                                    <i class="fas fa-users"></i>Categories<i class="fas fa-caret-down"></i></a>
                                    
                                <ul class="list-unstyled navbar__sub-list js-sub-list">
                                    <li>
                                        <a href="{{ route('add.category')}}"><i class="fas fa-user-plus"></i>Add Category</a>
                                    </li>

                                    
                                    <li>
                                        <a href="{{ route('all.category')}}"><i class="fas fa-server"></i>All Category</a>
                                    </li>

                                    
                                </ul>
                            </li>
            <li class="has-sub">
                <a class="js-arrow" href="#">
                    <i class="fas fa-users"></i> Products <i class="fas fa-caret-down"></i></a>
                    
                <ul class="list-unstyled navbar__sub-list js-sub-list">
                    <li>
                        <a href="{{ route('add.product')}}"><i class="fas fa-user-plus"></i>Add Product</a>
                    </li>

                    
                    <li>
                        <a href="{{ route('all.product')}}"><i class="fas fa-server"></i>All Products</a>
                    </li>

                    
                </ul>
            </li>    
            
            <li class="has-sub">
                <a class="js-arrow" href="#">
                    <i class="fas fa-users"></i> Expense <i class="fas fa-caret-down"></i></a>
                    
                <ul class="list-unstyled navbar__sub-list js-sub-list">
                    <li>
                        <a href="{{ route('add.expense')}}"><i class="fas fa-user-plus"></i>Add New</a>
                    </li>

                    
                    <li>
                        <a href="{{ route('today.expense')}}"><i class="fas fa-server"></i>Today's expense</a>
                    </li>

                    <li>
                        <a href="{{ route('monthly.expense')}}"><i class="fas fa-server"></i>Monthly expense</a>
                    </li>
                    
                    <li>
                        <a href="{{ route('yearly.expense')}}"><i class="fas fa-server"></i>Yearly expense</a>
                    </li>
                    
                </ul>
            </li>
                      
                    </nav>
                </div>
            </aside>
            <!-- END MENU SIDEBAR-->
    
            
                <!-- HEADER DESKTOP-->
                <header class="header-desktop">
                    <div class="section__content section__content--p30">
                        <div class="container-fluid">
                            <div class="header-wrap">
                                <form class="form-header" action="" method="POST">
                                    <input class="au-input au-input--xl" type="text" name="search" placeholder="Search for datas &amp; reports..." />
                                    <button class="au-btn--submit" type="submit">
                                        <i class="zmdi zmdi-search"></i>
                                    </button>
                                </form>
                                <div class="header-button">
                                    <div class="noti-wrap">
                                        <div class="noti__item js-item-menu">
                                            <i class="zmdi zmdi-comment-more"></i>
                                            <span class="quantity">1</span>
                                            <div class="mess-dropdown js-dropdown">
                                                <div class="mess__title">
                                                    <p>You have 2 news message</p>
                                                </div>
                                                <div class="mess__item">
                                                    <div class="image img-cir img-40">
                                                        <img src="images/icon/avatar-06.jpg" alt="Michelle Moreno" />
                                                    </div>
                                                    <div class="content">
                                                        <h6>Michelle Moreno</h6>
                                                        <p>Have sent a photo</p>
                                                        <span class="time">3 min ago</span>
                                                    </div>
                                                </div>
                                                <div class="mess__item">
                                                    <div class="image img-cir img-40">
                                                        <img src="images/icon/avatar-04.jpg" alt="Diane Myers" />
                                                    </div>
                                                    <div class="content">
                                                        <h6>Diane Myers</h6>
                                                        <p>You are now connected on message</p>
                                                        <span class="time">Yesterday</span>
                                                    </div>
                                                </div>
                                                <div class="mess__footer">
                                                    <a href="#">View all messages</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="noti__item js-item-menu">
                                            <i class="zmdi zmdi-email"></i>
                                            <span class="quantity">1</span>
                                            <div class="email-dropdown js-dropdown">
                                                <div class="email__title">
                                                    <p>You have 3 New Emails</p>
                                                </div>
                                                <div class="email__item">
                                                    <div class="image img-cir img-40">
                                                        <img src="images/icon/avatar-06.jpg" alt="Cynthia Harvey" />
                                                    </div>
                                                    <div class="content">
                                                        <p>Meeting about new dashboard...</p>
                                                        <span>Cynthia Harvey, 3 min ago</span>
                                                    </div>
                                                </div>
                                                <div class="email__item">
                                                    <div class="image img-cir img-40">
                                                        <img src="images/icon/avatar-05.jpg" alt="Cynthia Harvey" />
                                                    </div>
                                                    <div class="content">
                                                        <p>Meeting about new dashboard...</p>
                                                        <span>Cynthia Harvey, Yesterday</span>
                                                    </div>
                                                </div>
                                                <div class="email__item">
                                                    <div class="image img-cir img-40">
                                                        <img src="images/icon/avatar-04.jpg" alt="Cynthia Harvey" />
                                                    </div>
                                                    <div class="content">
                                                        <p>Meeting about new dashboard...</p>
                                                        <span>Cynthia Harvey, April 12,,2018</span>
                                                    </div>
                                                </div>
                                                <div class="email__footer">
                                                    <a href="#">See all emails</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="noti__item js-item-menu">
                                            <i class="zmdi zmdi-notifications"></i>
                                            <span class="quantity">3</span>
                                            <div class="notifi-dropdown js-dropdown">
                                                <div class="notifi__title">
                                                    <p>You have 3 Notifications</p>
                                                </div>
                                                <div class="notifi__item">
                                                    <div class="bg-c1 img-cir img-40">
                                                        <i class="zmdi zmdi-email-open"></i>
                                                    </div>
                                                    <div class="content">
                                                        <p>You got a email notification</p>
                                                        <span class="date">April 12, 2018 06:50</span>
                                                    </div>
                                                </div>
                                                <div class="notifi__item">
                                                    <div class="bg-c2 img-cir img-40">
                                                        <i class="zmdi zmdi-account-box"></i>
                                                    </div>
                                                    <div class="content">
                                                        <p>Your account has been blocked</p>
                                                        <span class="date">April 12, 2018 06:50</span>
                                                    </div>
                                                </div>
                                                <div class="notifi__item">
                                                    <div class="bg-c3 img-cir img-40">
                                                        <i class="zmdi zmdi-file-text"></i>
                                                    </div>
                                                    <div class="content">
                                                        <p>You got a new file</p>
                                                        <span class="date">April 12, 2018 06:50</span>
                                                    </div>
                                                </div>
                                                <div class="notifi__footer">
                                                    <a href="#">All notifications</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="account-wrap">
                                        <div class="account-item clearfix js-item-menu">
                                            <div class="image">
                                                <img src="images/icon/avatar-01.jpg" alt="John Doe" />
                                            </div>
                                            <div class="content">
                                                <a class="js-acc-btn" href="#">john doe</a>
                                            </div>
                                            <div class="account-dropdown js-dropdown">
                                                <div class="info clearfix">
                                                    <div class="image">
                                                        <a href="#">
                                                            <img src="images/icon/avatar-01.jpg" alt="John Doe" />
                                                        </a>
                                                    </div>
                                                    <div class="content">
                                                        <h5 class="name">
                                                            <a href="#">john doe</a>
                                                        </h5>
                                                        <span class="email">johndoe@example.com</span>
                                                    </div>
                                                </div>
                                           
                                                <div class="account-dropdown__footer">
                                                    <a href="{{ route('logout') }}"
                                                    onclick="event.preventDefault();
                                                                  document.getElementById('logout-form').submit();">
                                                        <i class="zmdi zmdi-power"></i>Logout</a>

                                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                                            @csrf
                                                        </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </header>
                <!-- HEADER DESKTOP-->
    
              
                <!-- END PAGE CONTAINER-->
            </div>
            
                
            @endguest
                  
        </div>      
            

        <main class="py-4">
            @yield('content')
        </main>
    </div>


    <div class="row">
        <div class="col-md-12">
            <div class="copyright">
                <p>Copyright © 2020, By Dev-Arman. All rights reserved.</p>
            </div>
        </div>
    </div>
     
  

  <!-- Jquery JS-->

  <script src="{{asset('vendor/jquery-3.2.1.min.js')}}"></script>
  <!-- Bootstrap JS-->
  <script src="{{asset('vendor/bootstrap-4.1/popper.min.js')}}"></script>
  <script src="{{asset('vendor/bootstrap-4.1/bootstrap.min.js')}}"></script>
  <!-- Vendor JS       -->
  <script src="{{asset('vendor/slick/slick.min.js')}}">
   
   <script src="{{ asset('vendor/datatables/jquery.dataTables.min.js') }}"></script>
  <script src="{{ asset('vendor/datatables/dataTables.js') }}"></script>
  <script src="{{ asset('vendor/datatables/dataTables.bootstrap.js') }}"></script>
  
  
  </script>
  <script src="{{asset('vendor/wow/wow.min.js')}}"></script>
  <script src="{{asset('vendor/animsition/animsition.min.js')}}"></script>
  <script src="{{asset('vendor/bootstrap-progressbar/bootstrap-progressbar.min.js')}}">
  </script>
  <script src="{{asset('vendor/counter-up/jquery.waypoints.min.js')}}"></script>
  <script src="{{asset('vendor/counter-up/jquery.counterup.min.js')}}">
  </script>
  <script src="{{asset('vendor/circle-progress/circle-progress.min.js')}}"></script>
  <script src="{{asset('vendor/perfect-scrollbar/perfect-scrollbar.js')}}"></script>
  <script src="{{asset('vendor/chartjs/Chart.bundle.min.js')}}"></script>
  <script src="{{asset('vendor/select2/select2.min.js')}}">
  </script>


   


<script type="text/javascript">
    $(document).ready(function() {
        $('#datatable').dataTable();
        "paging": true,
         "deferRender": true,
         "responsive": true,
    } );
</script>



  <!-- Toaster-->

  <script src="{{ asset('https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.0.1/js/toastr.js')}}"></script>

<!-- Sweet Alert-->
<script src="{{asset('https://unpkg.com/sweetalert/dist/sweetalert.min.js')}}"></script>


  <!-- Main JS-->
  <script src="{{asset('js/main.js')}}"></script>

 

 
       


{{-- Toaster --}}

<script>
    @if(Session::has('messege'))
      var type="{{Session::get('alert-type','info')}}"
      switch(type){
          case 'info':
               toastr.info("{{ Session::get('messege') }}");
               break;
          case 'success':
              toastr.success("{{ Session::get('messege') }}");
              break;
          case 'warning':
              toastr.warning("{{ Session::get('messege') }}");
              break;
          case 'error':
              toastr.error("{{ Session::get('messege') }}");
              break;
      }
    @endif
  </script>

  {{-- Sweet Alert --}}
   <script>  
       $(document).on("click", "#delete", function(e){
           e.preventDefault();
           var link = $(this).attr("href");
              swal({
                title: "Are you Want to delete?",
                text: "Once Delete, This will be Permanently Delete!",
                icon: "warning",
                buttons: true,
                dangerMode: true,
              })
              .then((willDelete) => {
                if (willDelete) {
                     window.location.href = link;
                } else {
                  swal("Safe Data!");
                }
              });
          });
  </script>





</body>
</html>
