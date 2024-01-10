<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Dashboard</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="{{ asset('assets/img/logo3.ico') }}" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
  {{-- <link rel="stylesheet" 
  href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
      crossorigin="anonymous" referrerpolicy="no-referrer" /> --}}
      <link rel="stylesheet" href="{{ asset('assets/fonts/fontawesome/css/all.min.css') }}">
  <!-- Vendor CSS Files -->
  {{-- <script src="https://kit.fontawesome.com/16f6ba35a2.js" crossorigin="anonymous"></script> --}}
  <link href="{{asset('assets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
  <link href="{{asset('assets/vendor/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">
  <link href="{{asset('assets/vendor/boxicons/css/boxicons.min.css')}}" rel="stylesheet">
  <link href="{{asset('assets/vendor/quill/quill.snow.css')}}" rel="stylesheet">
  <link href="{{asset('assets/vendor/quill/quill.bubble.css')}}" rel="stylesheet">
  <link href="{{asset('assets/vendor/remixicon/remixicon.css')}}" rel="stylesheet">
  <link href="{{asset('assets/vendor/simple-datatables/style.css')}}" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="{{asset('assets/css/style.css')}}" rel="stylesheet">
  <link href="{{asset('assets/css/main.css')}}" rel="stylesheet">
  <!-- =======================================================
  * Template Name: NiceAdmin
  * Updated: Nov 17 2023 with Bootstrap v5.3.2
  * Template URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="header fixed-top d-flex align-items-center">

    <div class="d-flex align-items-center justify-content-between">
      <a href="index.html" class="logo d-flex align-items-center">
        <img src="{{ asset('/assets/img/logo22.png') }}" alt="">
      </a>
      <i class="bi bi-list toggle-sidebar-btn"></i>
    </div><!-- End Logo -->

    <div class="search-bar">
      <form class="search-form d-flex align-items-center" method="POST" action="#">
        <input type="text" name="query" placeholder="ابحث" title="ادخل كلمة مفتاحية">
        <button type="submit" title="Search"><i class="bi bi-search"></i></button>
      </form>
    </div><!-- End Search Bar -->

    <nav class="header-nav me-auto">
      <ul class="d-flex align-items-center">

        <li class="nav-item d-block d-lg-none">
          <a class="nav-link nav-icon search-bar-toggle " href="#">
            <i class="bi bi-search"></i>
          </a>
        </li><!-- End Search Icon-->

        <li class="nav-item dropdown">

          <a class="nav-link nav-icon" href="#" data-bs-toggle="dropdown">
            <i class="bi bi-bell"></i>
            <span class="badge bg-primary badge-number">4</span>
          </a><!-- End Notification Icon -->

          <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow notifications">
            <li class="dropdown-header">
              You have 4 new notifications
              <a href="#"><span class="badge rounded-pill bg-primary p-2 ms-2">View all</span></a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li class="notification-item">
              <i class="bi bi-exclamation-circle text-warning"></i>
              <div>
                <h4>Lorem Ipsum</h4>
                <p>Quae dolorem earum veritatis oditseno</p>
                <p>30 min. ago</p>
              </div>
            </li>

            <li>
              <hr class="dropdown-divider">
            </li>

            <li class="notification-item">
              <i class="bi bi-x-circle text-danger"></i>
              <div>
                <h4>Atque rerum nesciunt</h4>
                <p>Quae dolorem earum veritatis oditseno</p>
                <p>1 hr. ago</p>
              </div>
            </li>

            <li>
              <hr class="dropdown-divider">
            </li>

            <li class="notification-item">
              <i class="bi bi-check-circle text-success"></i>
              <div>
                <h4>Sit rerum fuga</h4>
                <p>Quae dolorem earum veritatis oditseno</p>
                <p>2 hrs. ago</p>
              </div>
            </li>

            <li>
              <hr class="dropdown-divider">
            </li>

            <li class="notification-item">
              <i class="bi bi-info-circle text-primary"></i>
              <div>
                <h4>Dicta reprehenderit</h4>
                <p>Quae dolorem earum veritatis oditseno</p>
                <p>4 hrs. ago</p>
              </div>
            </li>

            <li>
              <hr class="dropdown-divider">
            </li>
            <li class="dropdown-footer">
              <a href="#">Show all notifications</a>
            </li>

          </ul><!-- End Notification Dropdown Items -->

        </li><!-- End Notification Nav -->

        <li class="nav-item dropdown">

          <a class="nav-link nav-icon" href="#" data-bs-toggle="dropdown">
            <i class="bi bi-chat-left-text"></i>
            <span class="badge bg-success badge-number">3</span>
          </a><!-- End Messages Icon -->

          <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow messages">
            <li class="dropdown-header">
              You have 3 new messages
              <a href="#"><span class="badge rounded-pill bg-primary p-2 ms-2">View all</span></a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li class="message-item">
              <a href="#">
                <img src="assets/img/messages-1.jpg" alt="" class="rounded-circle">
                <div>
                  <h4>Maria Hudson</h4>
                  <p>Velit asperiores et ducimus soluta repudiandae labore officia est ut...</p>
                  <p>4 hrs. ago</p>
                </div>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li class="message-item">
              <a href="#">
                <img src="assets/img/messages-2.jpg" alt="" class="rounded-circle">
                <div>
                  <h4>Anna Nelson</h4>
                  <p>Velit asperiores et ducimus soluta repudiandae labore officia est ut...</p>
                  <p>6 hrs. ago</p>
                </div>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li class="message-item">
              <a href="#">
                <img src="assets/img/messages-3.jpg" alt="" class="rounded-circle">
                <div>
                  <h4>David Muldon</h4>
                  <p>Velit asperiores et ducimus soluta repudiandae labore officia est ut...</p>
                  <p>8 hrs. ago</p>
                </div>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li class="dropdown-footer">
              <a href="#">Show all messages</a>
            </li>

          </ul><!-- End Messages Dropdown Items -->

        </li><!-- End Messages Nav -->

        <li class="nav-item dropdown pe-3">

          <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
            <img src="{{asset('assets/img/profile-img.jpg')}}" alt="Profile" class="rounded-circle">
            <span class="d-none d-md-block dropdown-toggle pe-2">حمود العطاس</span>
          </a><!-- End Profile Iamge Icon -->

          <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
            <li class="dropdown-header">
              <h6>حمود العطاس</h6>
              <span>مطور مواقع</span>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <a class="dropdown-item d-flex align-items-center" href="users-profile.html">
                <i class="bi bi-person"></i>
                <span>حسابي</span>
              </a>
            </li>
            
            <li>
              <hr class="dropdown-divider">
            </li>
            
            <li>
              <a class="dropdown-item d-flex align-items-center" href="{{ route('tenant.create') }}">
                <i class="bi bi-person"></i>
                <span>سجل كمنظمه</span>
              </a>
            </li>
            
            <li>
              <hr class="dropdown-divider">
            </li>
            
            <li>
              <a class="dropdown-item d-flex align-items-center" href="{{ route('platform.seeker.create') }}">
                <i class="bi bi-person"></i>
                <span>سجل كباحث</span>
              </a>
            </li>
            
            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <a class="dropdown-item d-flex align-items-center" href="users-profile.html">
                <i class="bi bi-gear"></i>
                <span>إعدادت الحساب</span>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <a class="dropdown-item d-flex align-items-center" href="pages-faq.html">
                <i class="bi bi-question-circle"></i>
                <span>للمساعده</span>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <a class="dropdown-item d-flex align-items-center" href="#">
                <i class="bi bi-box-arrow-right"></i>
                <span>تسجيل الخروج</span>
              </a>
            </li>

          </ul><!-- End Profile Dropdown Items -->
        </li><!-- End Profile Nav -->

      </ul>
    </nav><!-- End Icons Navigation -->

  </header><!-- End Header -->

  <!-- ======= Sidebar ======= -->
  <aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">
        <li class="nav-item">
          <i class="bi bi-speedometer2"></i>
              <span>المنصه</span>
        </li>
        
      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#components-nav" data-bs-toggle="collapse" href="">
          <i class="bi bi-key-fill"></i>
          
            <span>الحسابات</span><i class="bi bi-chevron-down me-auto"></i>
        </a>
        <ul id="components-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
         {{-- |||||||||||||||||||||||||||||| --}}
         <li  class="nav-item me-5" id="sidebar-navone">
            <a class="nav-link collapsed " href="{{ route('dashboard.table') }}" >
              <i class="fa-solid fa-fingerprint"></i>
                <span>الادوار</span>
            </a>
      
          </li>
     
        {{-- |||||||||||||||||||||||||||||||||||||||| --}}

        {{-- <li class="nav-item" id="sidebar-navtwo">
            <a class="nav-link collapsed"  href="{{ route('platform.users.index') }}">
                <i class="bi bi-grid"></i>
                <span>المستخدمون</span>
            </a>
       
          </li>
        
        </ul>
      </li> --}}
      
        <li class="nav-item me-5" id="sidebar-navtwo">
            <a class="nav-link collapsed"  href="{{ route('platform.users.index') }}">
              <i class="fa-solid fa-people-group"></i>
                <span>المستخدمون</span>
            </a>
       
          </li>

          
        
        </ul>
      </li>


      

 
      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#components-nav12" data-bs-toggle="collapse" href="">
          <i class="fa-solid fa-building-columns"></i>
          <span>المنظمات</span><i class="bi bi-chevron-down me-auto"></i>
        </a>
        <ul id="components-nav12" class="nav-content collapse " data-bs-parent="#sidebar-nav">
         {{-- |||||||||||||||||||||||||||||| --}}
         <li class="nav-item me-5" id="sidebar-navone">
            <a class="nav-link collapsed" href="{{ route('tenant.index') }}">
                <span>قيد الانتظار</span>
            </a>
          
          </li>
        {{-- |||||||||||||||||||||||||||||||||||||||| --}}
  
        <li class="nav-item me-5" id="sidebar-navtwo">
            <a class="nav-link collapsed" href="{{ route('tenant.acceptted') }}">
                <span>مقبولين</span>
            </a>
        
          </li><!-- End Components Nav -->
        
          <li class="nav-item me-5" id="sidebar-navtwo">
            <a class="nav-link collapsed" href="{{ route('tenant.reject') }}">
                <span>مرفوضين</span>
            </a>
        
          </li><!-- End Components Nav -->
        
        </ul>
      </li><!-- End Components Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed"  href="{{ route('platform.seeker.index') }}">
            <i class="bi bi-grid"></i>
            <span>الباحثون</span>
        </a>
      </li><!-- End Components Nav -->

      <li class="nav-item">
        <i class="bi bi-person-gear"></i>
      <span>الشركة</span>
    </li>


    <li class="nav-item">
      <a class="nav-link collapsed" data-bs-target="#components-nav1" data-bs-toggle="collapse" href="">
          <i class="bi bi-grid"></i>
          <span>الحسابات</span><i class="bi bi-chevron-down me-auto"></i>
      </a>
      <ul id="components-nav1" class="nav-content collapse " data-bs-parent="#sidebar-nav">
       {{-- |||||||||||||||||||||||||||||| --}}
       <li class="nav-item" id="sidebar-navone">
          <a class="nav-link collapsed"  href="{{ route('platform.companies.index') }}">
              <span>الادوار</span>
          </a>
        
        </li>
      {{-- |||||||||||||||||||||||||||||||||||||||| --}}

      <li class="nav-item" id="sidebar-navtwo">
          <a class="nav-link collapsed" href="{{ route('platform.companiesUser.index') }}">
              <span>المستخدمون</span>
          </a>
      
        </li><!-- End Components Nav -->
      
      </ul>
    </li><!-- End Components Nav -->

    <li class="nav-item">
      <a class="nav-link collapsed" href="{{ route('depertment.index') }}">
          <i class="bi bi-grid"></i>
          <span>الاقسام</span>
      </a>
    </li><!-- End Components Nav -->

{{--  --}}
    <li class="nav-item">
      <a class="nav-link collapsed" data-bs-target="#components-nav2" data-bs-toggle="collapse" href="">
          <i class="bi bi-grid"></i>
          <span>الوظائف</span><i class="bi bi-chevron-down me-auto"></i>
      </a>
      <ul id="components-nav2" class="nav-content collapse " data-bs-parent="#sidebar-nav">
       {{-- |||||||||||||||||||||||||||||| --}}
       <li class="nav-item" id="sidebar-navone">
          <a class="nav-link collapsed"  href="{{ route('companiesJob.index') }}">
              <span>انشاء الوظائف</span>
          </a>
        
        </li>
      {{-- |||||||||||||||||||||||||||||||||||||||| --}}

      <li class="nav-item" id="sidebar-navtwo">
          <a class="nav-link collapsed" href="{{ route('stage.index') }}">
              <span>المراحل التوظيفيه</span>
          </a>
      
        </li><!-- End Components Nav -->
      

        <li class="nav-item" id="sidebar-navtwo">
          <a class="nav-link collapsed" href="{{ route('jobApplication.index') }}">
              <span>التقديم</span>
          </a>
      
        </li><!-- End Components Nav -->
      </ul>
    </li><!-- End Components Nav -->
{{--  --}}

    <li class="nav-item">
      <a class="nav-link collapsed" href="{{ route('seeker.index') }}">
          <i class="bi bi-grid"></i>
          <span>المتقدمين</span>
      </a>
    </li><!-- End Components Nav -->

    <li class="nav-item">
      <a class="nav-link collapsed" href="{{ route('companyVacancies.index') }}">
          <i class="bi bi-grid"></i>
          <span>الشواغر</span>
      </a>
    </li><!-- End Components Nav -->
 
      <li class="nav-item">
        <i class="bi bi-person-gear"></i>
      <span>الباحث</span>
      </li>


      <li class="nav-item">
        <a class="nav-link collapsed"  href="{{ route('seeker.vacancies.index') }}">
          <i class="bi bi-people"></i><span>الوظائف</span>
        </a>
      </li><!-- End Forms Nav -->

      <li class="nav-heading">الإعدادت</li>


     

      <li class="nav-item">
        <a class="nav-link collapsed" href="pages-login.html">
          <i class="bi bi-box-arrow-in-right"></i>
          <span>تسجيل الخروج</span>
        </a>
      </li><!-- End Login Page Nav -->


    </ul>

  </aside><!-- End Sidebar-->

  <main id="main" class="main">

    @yield('content') 
    @yield('table')
    @yield('delete')
    @yield('view')
    @yield('edit')
    @yield('usertable')
    @yield('addUser')

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer" class="footer">
    <div class="copyright">
      &copy; <strong><span>فرصه</span></strong>. جميع الحقوق محفوضة
    </div>
    <div class="credits">
      <!-- All the links in the footer should remain intact. -->
      <!-- You can delete the links only if you purchased the pro version. -->
      <!-- Licensing information: https://bootstrapmade.com/license/ -->
      <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/ -->
      تم التصميم بواسطة <a href="https://github.com/H-7117">H-7117</a>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="{{asset('assets/vendor/apexcharts/apexcharts.min.js')}}"></script>
  <script src="{{asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{asset('assets/vendor/chart.js/chart.umd.js')}}"></script>
  <script src="{{asset('assets/vendor/echarts/echarts.min.js')}}"></script>
  <script src="{{asset('assets/vendor/quill/quill.min.js')}}"></script>
  <script src="{{asset('assets/vendor/simple-datatables/simple-datatables.js')}}"></script>
  <script src="{{asset('assets/vendor/tinymce/tinymce.min.js')}}"></script>
  <script src="{{asset('assets/vendor/php-email-form/validate.js')}}"></script>

  <!-- Template Main JS File -->
  <script src="{{asset('assets/js/main.js')}}"></script>

</body>

</html>