<!doctype html>
<html class="no-js" lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="publishable-key" content="{{ Config::get('stripe.publishable_key') }}">
    <title>a title tag</title>
    <link rel="stylesheet" href="../css/foundation.css" />
    
    <script src="../js/vendor/modernizr.js"></script>
    <link rel="stylesheet" href="../css/relive.css" />
  </head>
<body>


	<!-- NAVIGATION -->
	<nav class="top-bar" data-topbar>
        <ul class="title-area">
          <li class="name">  
            <h1><a href="/" class="logo" style="color:#fff799;">Relive Primitive</a></h1>

          </li>
          <li class="toggle-topbar menu-icon"><a href="#">Menu</a></li>
        </ul>

        <section class="top-bar-section">
         
          <ul class="right">
            <li><a href="/courses">Courses</a></li>
            <li><a href="/about">About</a></li>
            <li><a href="/contact">Contact</a></li>            
          </ul>
        </section>
      </nav>
    <!-- END NAVIGATION -->



	@yield('content')



	<!-- FOOTER -->
	<div class="panel">
        <div class="row">
          <div class="medium-6 large-6 columns">© <?php echo date('Y'); ?> Copyright Relive Primitive.</div>
          <div class="medium-6 large-6 columns">
            <ul class="inline-list right">
              <li><a href="#">policies</a></li>
              <li><a href="#">careers</a></li>
              <li><a href="#">volunteering</a></li>
              <li><a href="#">media</a></li>
            </ul>
          </div>
        </div>
  </div>
  <!-- END FOOTER -->



	<!-- Scripts -->
	 <script src="../js/vendor/jquery.js"></script>
    <script src="../js/foundation.min.js"></script>
    <script>
      $(document).foundation();
    </script>

    <script src="https://js.stripe.com/v2/"></script>


   @yield('footer')
      
    

</body>
</html>
