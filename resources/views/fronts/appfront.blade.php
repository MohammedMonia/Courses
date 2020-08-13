<!DOCTYPE html>
<html lang="en"> 
<head>
    <title>Mohamed Company</title>
    
    <!-- Meta -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Blog Template">
    <meta name="author" content="Xiaoying Riley at 3rd Wave Media">    
    <link rel="shortcut icon" href="favicon.ico"> 
    
    <!-- FontAwesome JS-->
    <script defer src="https://use.fontawesome.com/releases/v5.7.1/js/all.js" integrity="sha384-eVEQC9zshBn0rFj4+TU78eNA19HMNigMviK/PU/FFjLXqa/GKPgX58rvt5Z8PLs7" crossorigin="anonymous"></script>
    
    <!-- Plugin CSS -->
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/highlight.js/9.14.2/styles/monokai-sublime.min.css">
    
    <!-- Theme CSS -->  
    <link id="theme-style" rel="stylesheet" href="/assets/css/theme-3.css">

</head> 

<body>
<header class="header text-center">	    
	    <h1 class="blog-name pt-lg-4 mb-0"><a href="#">Mohamed Company</a></h1>
        
	    <nav class="navbar navbar-expand-lg navbar-dark" >
           
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
			</button>

			<div id="navigation" class="collapse navbar-collapse flex-column" >
				<div class="profile-section pt-3 pt-lg-0">
				    <img class="profile-image mb-3 rounded-circle mx-auto" src="/assets/images/me.png" alt="image" >			
					
					<div class="bio mb-3">Website is a platform that works to provide many distinct services that make it easy for subscribers...<br><a href="{{ route('about.front.index') }}">Find out more about</a></div><!--//bio-->
					<ul class="social-list list-inline py-3 mx-auto">
			            <li class="list-inline-item"><a href="https://twitter.com/MohamedMonia3"><i class="fab fa-twitter fa-fw"></i></a></li>
			            <li class="list-inline-item"><a href="https://www.linkedin.com/in/mohamed-monia-b126ab154"><i class="fab fa-linkedin-in fa-fw"></i></a></li>
			            <li class="list-inline-item"><a href="https://github.com/MohammedMonia"><i class="fab fa-github-alt fa-fw"></i></a></li>
			            <li class="list-inline-item"><a href="https://www.facebook.com/mhamed.monia/"><i class="fab fa-facebook fa-fw"></i></a></li>
			            <li class="list-inline-item"><a href="https://www.instagram.com/mhamed_monia"><i class="fab fa-instagram fa-fw"></i></a></li>
			        </ul><!--//social-list-->
			        <hr> 
				</div><!--//profile-section-->
				
				<ul class="navbar-nav flex-column text-left">
					<li class="nav-item active">
					    <a class="nav-link" href="{{ route('blogs_path_index1') }}"><i class="fas fa-home fa-fw mr-2"></i> Home <span class="sr-only">(current)</span></a>
					</li>
					
					<li class="nav-item">
					    <a class="nav-link" href="{{ route('about.front.index') }}"><i class="fas fa-user fa-fw mr-2"></i>About</a>
					</li>
        </ul>
        <a href="{{ route('login') }}" type="submit" class="btn btn-primary mt-3" >Login As Admin</a>
			</div>
    </nav>

    </header>
    
    @yield('content')


    <!-- Footer -->
<footer class="col-md-10 ml-auto page-footer font-small unique-color-dark ">
</div>

<!-- Footer Links -->
<div class="container text-center text-md-left mt-5">

  <!-- Grid row -->
  <div class="row mt-3">

    <!-- Grid column -->
    <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">

      <!-- Content -->
      <h6 class="text-uppercase font-weight-bold">Mohamed Company</h6>
      <hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
      <p>We are a company that provides many distinct and varied services we are honored by your participation with us.
        </p>

    </div>
    <!-- Grid column -->

    <!-- Grid column -->
    <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">

      <!-- Links -->
      <h6 class="text-uppercase font-weight-bold">Services</h6>
      <hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
      <p>
        <a href="#!">Online Courses</a>
      </p>
      <p>
        <a href="#!">Web Development</a>
      </p>
      <p>
        <a href="#!">Consulting Services</a>
      </p>
      
    </div>
    <!-- Grid column -->

   

    <!-- Grid column -->
    <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">

      <!-- Links -->
      
      <h6 class="text-uppercase font-weight-bold">Contact</h6>
      <hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
      <a href="#!"><p>
        <i class="fas fa-home mr-3"></i>Gaza, Palestine</p></a>
        <a href="#!"><p>
        <i class="fas fa-envelope mr-3"></i>mohamedmonia15@gmail.</p></a>
        <a href="#!"><p>
        <i class="fas fa-phone mr-3"></i>+972 597665146</p></a>
      

    </div>
    <!-- Grid column -->

  </div>
  <!-- Grid row -->

</div>
<!-- Footer Links -->

<!-- Copyright -->
<div class="footer-copyright text-center py-3">© 2020 Copyright:
  <a href="https://github.com/MohammedMonia">Mohamed Monia Company</a>
</div>
<!-- Copyright -->

</footer>
<!-- Footer -->
    
    </div><!--//main-wrapper-->
    
    
    
    
    <!-- *****CONFIGURE STYLE (REMOVE ON YOUR PRODUCTION SITE)****** -->  
    <div id="config-panel" class="config-panel d-none d-lg-block">
        <div class="panel-inner">
            <a id="config-trigger" class="config-trigger config-panel-hide text-center" href="#"><i class="fas fa-cog fa-spin mx-auto" data-fa-transform="down-6" ></i></a>
            <h5 class="panel-title">Choose Colour</h5>
            <ul id="color-options" class="list-inline mb-0">
                <li class="theme-2  list-inline-item"><a data-style="/assets/css/theme-2.css" href="#"></a></li>
                <li class="theme-3  active list-inline-item"><a data-style="/assets/css/theme-3.css" href="#"></a></li>
                <li class="theme-4  list-inline-item"><a data-style="/assets/css/theme-4.css" href="#"></a></li>
                <li class="theme-5  list-inline-item"><a data-style="/assets/css/theme-5.css" href="#"></a></li>
                <li class="theme-6  list-inline-item"><a data-style="/assets/css/theme-6.css" href="#"></a></li>
                <li class="theme-7  list-inline-item"><a data-style="/assets/css/theme-7.css" href="#"></a></li>
                <li class="theme-8  list-inline-item"><a data-style="/assets/css/theme-8.css" href="#"></a></li>
            </ul>
            <a id="config-close" class="close" href="#"><i class="fa fa-times-circle"></i></a>
        </div><!--//panel-inner-->
    </div><!--//configure-panel-->

    
       
    <!-- Javascript -->          
    <script src="/assets/plugins/jquery-3.3.1.min.js"></script>
    <script src="/assets/plugins/popper.min.js"></script> 
    <script src="/assets/plugins/bootstrap/js/bootstrap.min.js"></script> 

    <!-- Page Specific JS -->
    <script src="//cdnjs.cloudflare.com/ajax/libs/highlight.js/9.14.2/highlight.min.js"></script>

    <!-- Custom JS -->
    <script src="/assets/js/blog.js"></script>

    <!-- Style Switcher (REMOVE ON YOUR PRODUCTION SITE) -->
    <script src="/assets/js/demo/style-switcher.js"></script>     
    
    

</body>
</html> 