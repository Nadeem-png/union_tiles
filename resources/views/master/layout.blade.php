<!DOCTYPE html>
<html>
<head>
   <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title')</title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="js/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.7.0/css/all.css' integrity='sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ' crossorigin='anonymous'>
    <style>
        .a1{
                color: white;
            }

            .a1:hover{
                color: lightcyan;
            }
             .navbar-nav{
            
            z-index:1000;
            background-color:#2f3640;
            }
           .navbar-collapse{
            
            z-index:1000;
        
            }
.back-to-top {
 position: fixed;
 bottom: 30px;
 right: 12px;
 width: 64px;
 height: 64px;
 z-index: 9999;
 cursor: pointer;
 text-decoration: none;
 transition: opacity 0.2s ease-out;
 background-image: url(top.png);
}

.back-to-top:hover{
 opacity: 0.7;
}
            
    </style>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
<script>
$(document).ready(function(){
 
 //Check to see if the window is top if not then display button
 $(window).scroll(function(){
  // Show button after 100px
  var showAfter = 100;
  if ($(this).scrollTop() > showAfter ) { 
   $('.back-to-top').fadeIn();
  } else { 
   $('.back-to-top').fadeOut();
  }
 });
 
 //Click event to scroll to top
 $('.back-to-top').click(function(){
  $('html, body').animate({scrollTop : 0},800);
  return false;
 });
 
});
</script>
</head>
<body style="">
<nav class="navbar nav1 fixed-top  navbar-expand-lg"style="padding:0px 10px;background-color:#2f3640 ">
<div class="w-25">
        <a href="/" class="navbar-brand">
            <img src="{{asset('')}}" class="img-fluid rounded-circle " style="margin-left:50px;width:60px; height:60px">
        </a>
    </div>
    <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#mynav"><i class="fas fa-bars text-white"></i></button>
  
    <div class="navbar-collapse   collapse" id="mynav">
        <ul class="navbar-nav mt-3">
        <li class="nav-item" @yield('nava')>
                    <a href="/" class="nav-link a1  ml-5 font-weight-bold">Home</a>
                </li>
            <li class="nav-item" @yield('nava')>
                <a href="#about" class="nav-link a1 ml-5 font-weight-bold">Services</a>
            </li>

            <li class="nav-item" @yield('nava')>
                <a href="#portfolio" class="nav-link a1 ml-5 font-weight-bold">About</a>
            </li>

            <li class="nav-item" @yield('nava')>
                <a href="#pricing" class="nav-link a1 ml-5 font-weight-bold">Contact</a>
            </li>

            <li class="nav-item" @yield('nava')>
                <a href="#contact" class="nav-link a1 ml-5 font-weight-bold">Gallery</a>
            </li>

            

            


        </ul>
    </div>
</nav>

@yield('content')
<!-- Back to top -->
<a href="#" class="back-to-top"><i class="fas fa-arrow-circle-up fa-3x text-dark-50"></i></a>
<script>
  AOS.init();
</script>
</body>
</html>
