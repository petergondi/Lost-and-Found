<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Lost and found</title>
    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom fonts for this template -->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
    <!-- Plugin CSS -->
    <link href="vendor/magnific-popup/magnific-popup.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="css/creative.min.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
  <link rel="stylesheet" href="bootstrap.css"/>
  <script src="bootstrap.js"></script>

  <style>
#loginModal{width:500px; margin-left: 30% }
</style>

  </head>

  <body id="page-top">

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
      <div class="container">
        <a class="navbar-brand js-scroll-trigger" href="#page-top"><font color="chocolate"><strong>Lost n Found</font></strong></a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#about"><font color="chocolate">Home</font></a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger"name="register" id="register" class="btn btn-success" data-toggle="modal" data-target="#loginModal"  href="#services"><font color="chocolate">Register Your ID</font></a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#portfolio"><font color="chocolate">Sign-Up</font></a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#contact"><font color="chocolate">Contact</font></a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <header class="masthead text-center text-white d-flex">
      <div class="container my-auto">
        <div class="row">
          <div class="col-lg-10 mx-auto">
            <h1 class="text-uppercase">
              <strong><font color= "black">Don't Worry, We Can Help You Find Your Lost ID.</font></strong>
            </h1>
            <hr>
          </div>
          <div class="col-lg-8 mx-auto">
            <p class="text-faded mb-5" font-family="arial"><font color= "black">Start Finding Your Lost Id by few simple clicks</font></p>
            <a class="btn btn-primary btn-xl js-scroll-trigger" href="map.php">Found Or Lost an ID?</a>
          </div>
        </div>
      </div>
    </header>

    <section class="bg-primary" id="about">
      <div class="container">
        <div class="row">
          <div class="col-lg-8 mx-auto text-center">
            <h2 class="section-heading text-white">How it works!</h2>
            <hr class="light my-4">
            <p class="text-faded mb-4">One of the special benefits the brand is that it offers  a FREE Lost & Found Service.
ID numbers are labelled with a special  ID number. After registering this number, your product will be matched with your details on our website.!</p>
            <a class="btn btn-light btn-xl js-scroll-trigger" href="#services">Sign In</a>
          </div>
        </div>
      </div>
    </section>

    <section id="contact">
      <div class="container">
        <div class="row">
          <div class="col-lg-8 mx-auto text-center">
            <h2 class="section-heading">Let's Get In Touch!</h2>
            <hr class="my-4">
            <p class="mb-5">Ready to start your next project with us? That's great! Give us a call or send us an email and we will get back to you as soon as possible!</p>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-4 ml-auto text-center">
            <i class="fa fa-phone fa-3x mb-3 sr-contact"></i>
            <p>0725272888</p>
          </div>
          <div class="col-lg-4 mr-auto text-center">
            <i class="fa fa-envelope-o fa-3x mb-3 sr-contact"></i>
            <p>
              <a href="mailto:your-email@your-domain.com">feedback@gondipeters@gmail.com</a>
            </p>
          </div>
        </div>
      </div>
    </section>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
    <script src="vendor/scrollreveal/scrollreveal.min.js"></script>
    <script src="vendor/magnific-popup/jquery.magnific-popup.min.js"></script>

    <!-- Custom scripts for this template -->
    <script src="js/creative.min.js"></script>

  </body>
  <div id='loginModal' class="modal fade" role="dialog">
               <div class="modal-content">
          </div class="modal-header">
           
               <h4 class="modal-title" align="center" ><font color="olive green">Register ID</font></h4>
                 <div class="modal-body">
                  <label><font color="olive green">Name</font></label>
                    <input type="text" name="name" id="name" class="form-control" placeholder="Miguna Miguna"/>
                  </br>
                  <label><font color="olive green">Email</font></label>
                  <input type="text" name="email" id="email" class="form-control" placeholder="@example.com"/>
                  <label><font color="olive green">ID Registration No</font></label>
                  <input type="text" name="registration" id="registration" class="form-control" placeholder="J17/XXXX/2011"/>
                </br>
                  <button type="button" name="button" id="button" class="btn btn-warning">Register</button>
                   <button type="button" class="close" data-dismiss='modal' data-toggle='modal'><font color="red">&times;</font></button>
               </div>
            </div>

</html>
<script>
$(document).ready(function(){
  $('#button').click(function(){
    var name=$('#name').val();
    var email=$('#email').val();
    var registration=$('#registration').val();
    if(name !='' && email !=''&& registration !='')
    {
      $.ajax({
        url:"action.php",
        method="POST",
        data:{name:email:registration},
        sucess:function(data){

        }
      });
    }
    else{
      alert("fill all the required fields");
    }
  });
})

              </script>

