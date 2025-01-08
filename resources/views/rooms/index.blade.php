<!DOCTYPE html>
<html lang="en">
   <head>
      <!-- basic -->
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <!-- mobile metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="viewport" content="initial-scale=1, maximum-scale=1">
      <!-- site metas -->
      <title>Beach Resort System</title>
      <meta name="keywords" content="">
      <meta name="description" content="">
      <meta name="author" content="">
      <!-- bootstrap css -->
      <link rel="stylesheet" href="css/bootstrap.min.css">
      <!-- style css -->
      <link rel="stylesheet" href="css/style.css">
      <!-- Responsive-->
      <link rel="stylesheet" href="css/responsive.css">
      <!-- fevicon -->
      <link rel="icon" href="images/fevicon.png" type="image/gif" />
      <!-- Scrollbar Custom CSS -->
      <link rel="stylesheet" href="css/jquery.mCustomScrollbar.min.css">
      <!-- Tweaks for older IEs-->
      <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
      <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
   </head>
   <!-- body -->
   <body class="main-layout">
      <!-- loader  -->
      <div class="loader_bg">
         <div class="loader"><img src="images/loading.gif" alt="#"/></div>
      </div>
      <!-- end loader -->
      <!-- header -->
      <header>
         <!-- header inner -->
         <div class="header">
            <div class="container">
               <div class="row">
                  <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col logo_section">
                     <div class="full">
                        <div class="center-desk">
                           
                        </div>
                     </div>
                  </div>
                  <div class="col-xl-9 col-lg-9 col-md-9 col-sm-9">
                     <nav class="navigation navbar navbar-expand-md navbar-dark ">
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample04" aria-controls="navbarsExample04" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarsExample04">
                           <ul class="navbar-nav mr-auto">
                              <li class="nav-item ">
                                 <a class="nav-link" href="{{url('/home')}}">Home</a>
                              </li>
                              <li class="nav-item">
                                 <a class="nav-link" href="{{url('/about')}}">About</a>
                              </li>
                              <li class="nav-item active">
                              <a class="nav-link" href="{{url('/rooms')}}">Our Room</a>
                              </li>
                              <li class="nav-item">
                                 <a class="nav-link" href="{{url('/seaviews')}}">Seaside Scenes</a>
                              </li>
                              <li class="nav-item">
                                 <a class="nav-link" href="{{url('/contact')}}">Contact Us</a>
                              </li>
                              @if (Route::has('login'))
             
                      @auth
                 <x-app-layout>

                  </x-app-layout>

                 @else
                 <li class="nav-item" style="padding-right: 10px;">
                <a class="btn btn-success" href="{{url('login')}}">Login</a>
                  </li>
                   @if (Route::has('register'))
       
                <li class="nav-item">
                      <a class="btn btn-primary" href="{{url('register')}}">Register</a>
                 </li>
                 @endif
                 @endauth

                   @endif

                           </ul>
                        </div>
                     </nav>
                  </div>
               </div>
            </div>
         </div>
      </header>
      <!-- end header inner -->
      <!-- end header -->
      <div class="back_re">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <div class="title">
                     <h2>Our Room</h2>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- our_room -->
      <div  class="our_room">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <div class="titlepage">
                     <p  class="margin_0">Get a glimpse of the rooms that could be yours</p>
                  </div>
               </div>
            </div>
            <div class="row">
               <div class="col-md-4 col-sm-6">
                  <div id="serv_hover"  class="room">
                     <div class="room_img">
                        <figure><img src="images/Standard Room.jpg" alt="#"/></figure>
                     </div>
                     <div class="bed_room">
                        <h3>Standard Room</h3>
                        <p>Suitable for couples or solo travelers, these rooms are similar to single or queen rooms </p>
                     </div>
                  </div>
               </div>
               <div class="col-md-4 col-sm-6">
                  <div id="serv_hover"  class="room">
                     <div class="room_img">
                        <figure><img src="images/Family Room.jpg" alt="#"/></figure>
                     </div>
                     <div class="bed_room">
                        <h3>Family Room</h3>
                        <p>Designed for families with children, these rooms are larger and may include extra beds, sofa beds, and child-friendly amenities </p>
                     </div>
                  </div>
               </div>
               <div class="col-md-4 col-sm-6">
                  <div id="serv_hover"  class="room">
                     <div class="room_img">
                        <figure><img src="images/Honeymoon Suites.jpg" alt="#"/></figure>
                     </div>
                     <div class="bed_room">
                        <h3>Honeymoon Suites</h3>
                        <p>Romantic suites that offer special services for newlyweds, such as champagne, roses, private dining, and couple's activities </p>
                     </div>
                  </div>
               </div>
               <div class="col-md-4 col-sm-6">
                  <div id="serv_hover"  class="room">
                     <div class="room_img">
                        <figure><img src="/images/Studio Room.jpg" alt="#"/></figure>
                     </div>
                     <div class="bed_room">
                        <h3>Studio Room</h3>
                        <p>Rooms with a studio bed that can be converted into other furniture, like a couch or sofa </p>
                     </div>
                  </div>
               </div>
               <div class="col-md-4 col-sm-6">
                  <div id="serv_hover"  class="room">
                     <div class="room_img">
                        <figure><img src="images/Suites.png" alt="#"/></figure>
                     </div>
                     <div class="bed_room">
                        <h3>Suites</h3>
                        <p>One of the most expensive types of hotel rooms </p>
                     </div>
                  </div>
               </div>
               <div class="col-md-4 col-sm-6">
                  <div id="serv_hover"  class="room">
                     <div class="room_img">
                        <figure><img src="images/Bunk Room.png" alt="#"/></figure>
                     </div>
                     <div class="bed_room">
                        <h3>Bunk Room</h3>
                        <p>If you are going to use a passage of Lorem Ipsum, you need to be sure there </p>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- end our_room -->
     
      <!--  footer -->
      <footer>
         <div class="footer">
            <div class="container">
               <div class="row">
                  <div class=" col-md-4">
                     <h3>Contact US</h3>
                     <ul class="conta">
                        <li><i class="fa fa-map-marker" aria-hidden="true"></i> Address</li>
                        <li><i class="fa fa-mobile" aria-hidden="true"></i>09301071994</li>
                        <li> <i class="fa fa-envelope" aria-hidden="true"></i><a href="#"> naz@gmail.com</a></li>
                     </ul>
                  </div>
                  <div class="col-md-4">
                     <h3>Menu Link</h3>
                     <ul class="link_menu">
                        <li><a href="{{url('/')}}">Home</a></li>
                        <li><a href="{{url('/about')}}"> about</a></li>
                        <li class="active"><a href="{{url('/rooms')}}">Our Room</a></li>
                        <li><a href="{{url('/seaviews')}}">Seaside Scenes</a></li>
                        <li><a href="{{url('/contact')}}">Contact Us</a></li>
                     </ul>
                  </div>
                 
               </div>
            </div>
           
         </div>
      </footer>
      <!-- end footer -->
      <!-- Javascript files-->
      <script src="js/jquery.min.js"></script>
      <script src="js/bootstrap.bundle.min.js"></script>
      <script src="js/jquery-3.0.0.min.js"></script>
      <!-- sidebar -->
      <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
      <script src="js/custom.js"></script>
   </body>
</html>