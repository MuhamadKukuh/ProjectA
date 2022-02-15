<!DOCTYPE html>
<html>
  <head>
    <title>Branding</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{ asset('branding/style.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.12/css/all.css"
     integrity="sha384-G0fIWCsCzJIMAVNQPfjH08cyYaUtMwjJwqiRKxxE/rx96Uroj1BtIQ6MLJuheaO9" crossorigin="anonymous">
     <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
     <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
    </head>
    <body>
      <div class="w3-row">
        <div class="w3-half"><h1 class="text-left"> Brand <br>your company</h1></div>
        <div class="w3-half"><h2>Template is done<br><b>by Natallia Rak</b></h2></div>
      </div>
      <div class="w3-row">
        <div class="w3-quarter">
          <br>
            <div class="menu">
             <nav class="navbar">
               <ul class="navbar-nav list-group">
                  <li class="nav-item text-center list-group-item">
                      <a class="nav-link" href="{{ Route('login') }}">Login</a>
                  </li>
                  <li class="nav-item text-center list-group-item">
                      <a class="nav-link" href="#">Branding</a>
                  </li>
                  <li class="nav-item text-center list-group-item">
                      <a class="nav-link" href="#">Web-design</a>
                  </li>
                  <li class="nav-item text-center list-group-item">
                      <a class="nav-link" href="#">Contacts</a>
                  </li>
               </ul>
            </nav>
           <ul class="site-links">
             <li class="text-right">
                 <a href="#">Our service</a>
             </li>
             <li class="text-right">
                 <a href="#">Our portfolio</a>
             </li>
             <li class="text-right">
                 <a href="#">Blog</a>
             </li>
             <li class="text-right">
                 <a href="#">Our service</a>
             </li>
             <li class="text-right">
                 <a href="#">Our portfolio</a>
             </li>
             <li class="text-right">
                 <a href="#">Blog</a>
             </li>
           </ul>
           <br>
           <br>
           <br>
           <ul class="social text-center">
             <li> <a href="#"><i class="fab fa-facebook-f"></i></a>
             </li>
             <li> <a href="#"><i class="fab fa-google-plus-g"></i></a>
             </li>
             <li> <a href="#"><i class="fab fa-twitter"></i></a>
             </li>
             <li> <a href="#"><i class="fab fa-pinterest-p"></i></a>
             </li>
             <li> <a href="#"><i class="fab fa-behance"></i></a>
             </li>
             <li> <a href="#"><i class="fab fa-instagram"></i></a>
             </li>
           </ul>
           <br>
         </div>
        </div>
        <div class="w3-rest">
          <br>
             <div class="w3-row">
                 <div class="w3-col s4">
                   <img src="{{ asset('branding/images/1.jpg') }}">
                 </div>
                 <div class="w3-col s4">
                   <img src="{{ asset('branding/images/2.jpeg') }}">
                 </div>
                 <div class="w3-col s4">
                   <img src="{{ asset('branding/images/3.jpeg') }}">
                 </div>
             </div>
             <div class="w3-row">
                 <div class="w3-col s4">
                   <img src="{{ asset('branding/images/5.jpeg') }}">
                 </div>
                 <div class="w3-col s4 bg">
                    <img src="{{ asset('branding/images/12.jpeg') }}">
                 </div>
                 <div class="w3-col s4">
                   <img src="{{ asset('branding/images/8.jpeg') }}">
                 </div>
             </div>
             <div class="w3-row">
                 <div class="w3-col s4">
                   <img src="{{ asset('branding/images/7.jpeg') }}">
                 </div>
                 <div class="w3-col s4">
                   <img src="{{ asset('branding/images/10.jpeg') }}">
                 </div>
                 <div class="w3-col s4">
                   <img src="{{ asset('branding/images/9.jpeg') }}">
                 </div>
             </div>
        </div>
      </div>
    </body>
  </html>
