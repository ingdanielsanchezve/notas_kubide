<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="apple-touch-icon" sizes="57x57" href="{{ asset('favicon/apple-icon-57x57.png') }}">
    <link rel="apple-touch-icon" sizes="60x60" href="{{ asset('favicon/apple-icon-60x60.png') }}">
    <link rel="apple-touch-icon" sizes="72x72" href="{{ asset('favicon/apple-icon-72x72.png') }}">
    <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('favicon/apple-icon-76x76.png') }}">
    <link rel="apple-touch-icon" sizes="114x114" href="{{ asset('favicon/apple-icon-114x114.png') }}">
    <link rel="apple-touch-icon" sizes="120x120" href="{{ asset('favicon/apple-icon-120x120.png') }}">
    <link rel="apple-touch-icon" sizes="144x144" href="{{ asset('favicon/apple-icon-144x144.png') }}">
    <link rel="apple-touch-icon" sizes="152x152" href="{{ asset('favicon/apple-icon-152x152.png') }}">
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('favicon/apple-icon-180x180.png') }}">
    <link rel="icon" type="image/png" sizes="192x192"  href="{{ asset('favicon/android-icon-192x192.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('favicon/favicon-32x32.png') }}">
    <link rel="icon" type="image/png" sizes="96x96" href="{{ asset('favicon/favicon-96x96.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('favicon/favicon-16x16.png') }}">
    <link rel="manifest" href="{{ asset('favicon/manifest.json') }}">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="{{ asset('favicon/ms-icon-144x144.png') }}">
    <meta name="theme-color" content="#ffffff">

    <title>Gestor de Notas by Daniel Sánchez </title>
  
	<!-- Bootstrap 4.0-->
	<link rel="stylesheet" href="{{ asset('assets/vendor_components/bootstrap/dist/css/bootstrap.min.css') }}">
	
	<!-- Bootstrap extend-->
	<link rel="stylesheet" href="{{ asset('css/bootstrap-extend.css') }}">

	<!-- Theme style -->
	<link rel="stylesheet" href="{{ asset('css/master_style.css') }}">

	<!-- Fab Admin skins -->
	<link rel="stylesheet" href="{{ asset('css/skins/_all-skins.css') }}">	

	<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
	<script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
	<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->


</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <header class="main-header">
    <!-- Logo -->
    <a href="/" class="logo">
      <!-- mini logo -->
	  <b class="logo-mini">
		  <span class="light-logo"><img src="{{ asset('logo.png') }}" alt="logo"></span>
	  </b>
      <!-- logo-->
      <span class="logo-lg">
		  <img src="{{ asset('images/logo-light-text.png') }}" alt="logo" class="light-logo">
	  </span>
    </a>
    <!-- Header Navbar -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
	  <div>
		  <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
			<span class="sr-only">Toggle navigation</span>
		  </a>
	  </div>

      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
		  
		  <!-- User Account-->
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <img src="https://media.licdn.com/dms/image/C4E03AQGLTFFgYWGLrA/profile-displayphoto-shrink_200_200/0?e=1558569600&v=beta&t=mPugtroxliySFAU1pvjkH8DYmVMVQ69iAmqJCuDuY4Y" class="user-image rounded-circle" alt="User Image">
            </a>
            <ul class="dropdown-menu scale-up">
              <!-- User image -->
              <li class="user-header">
                <img src="https://media.licdn.com/dms/image/C4E03AQGLTFFgYWGLrA/profile-displayphoto-shrink_200_200/0?e=1558569600&v=beta&t=mPugtroxliySFAU1pvjkH8DYmVMVQ69iAmqJCuDuY4Y" class="float-left rounded-circle" alt="User Image">

                <p>
                  Daniel Sánchez
                  <small class="mb-5">ingdanielsanchezve@gmail.com</small>
                  <a href="#" class="btn btn-primary btn-sm btn-rounded"><i class="fa fa-linkedin-square"></i> LinkedIn Profile</a>
                </p>
              </li>
              <!-- Menu Body -->
            </ul>
          </li>
          
        </ul>
      </div>
    </nav>
  </header>
  
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar-->
    <section class="sidebar">
      
      <!-- sidebar menu-->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="user-profile treeview">
          <a href="#">
			<img src="https://media.licdn.com/dms/image/C4E03AQGLTFFgYWGLrA/profile-displayphoto-shrink_200_200/0?e=1558569600&v=beta&t=mPugtroxliySFAU1pvjkH8DYmVMVQ69iAmqJCuDuY4Y" alt="user">
            <span>Daniel Sánchez</span>            
          </a>
        </li>
        <li class="header nav-small-cap">Desarrollador Web FullStack</li>      
        
      </ul>
    </section>
  </aside>
    
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            Gestor de Notas 
          </h1>      
        </section>

    @yield('content')

    </div>
  <!-- /.content-wrapper -->
 
   <footer class="main-footer">
	  &copy; 2018 <a href="https://www.multipurposethemes.com/">Multi-Purpose Themes</a>. All Rights Reserved.
  </footer>
</div>
<!-- ./wrapper -->

	<!-- jQuery 3 -->
  <script src="{{ asset('assets/vendor_components/jquery/dist/jquery.min.js') }}"></script>
  
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-timeago/1.6.5/jquery.timeago.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-timeago/1.6.5/locales/jquery.timeago.es.min.js"></script>

	
	<!-- popper -->
  <script src="{{ asset('assets/vendor_components/popper/dist/popper.min.js') }}"></script>
	
	<!-- Bootstrap 4.0-->
  <script src="{{ asset('assets/vendor_components/bootstrap/dist/js/bootstrap.min.js') }}"></script>
	
	<!-- SlimScroll -->
  <script src="{{ asset('assets/vendor_components/jquery-slimscroll/jquery.slimscroll.min.js') }}"></script>
	
	<!-- FastClick -->
  <script src="{{ asset('assets/vendor_components/fastclick/lib/fastclick.js') }}"></script>
	
	<!-- Fab Admin App -->
  <script src="{{ asset('js/template.js') }}"></script>
	
	<!-- Fab Admin for demo purposes -->
  <script src="{{ asset('js/demo.js') }}"></script>
	
	
</body>
</html>
