<!DOCTYPE html>
<html>
<head>
	<title></title>
	 <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <link href="https://fonts.googleapis.com/css?family=Josefin+Sans&display=swap" rel="stylesheet">
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
   
   <style>
     *{
        margin: 0; padding: 0;font-family: 'Josefin Sans', sans-serif;
     }
    /* Make the image fully responsive */
    .carousel-inner img {
      width: 100%;
      height: 50%;
    }
    </style>
</head>
<body>
<header>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <img src="Salon_project/Salon_management_system/image/images1.png" alt="Los Angeles" width="30" height="30">
    <a class="navbar-brand" href="#">Santosh</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
  
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ml-auto">
       <!-- <li class="nav-item active">
          <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
        </li>-->
        <li class="nav-item">
          <a class="nav-link" href="#">Sign-up</a>
          
        </li>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="login.php">Login</a>
          
        </li>
        <!--<li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Dropdown
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="#">Action</a>
            <a class="dropdown-item" href="#">Another action</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">Something else here</a>
          </div>
        </li>-->
        
      </ul>
      <!--<form class="form-inline my-2 my-lg-0">
        <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
      </form>
    </div>-->
  </nav>

  <div id="demo" class="carousel slide" data-ride="carousel">
    <ul class="carousel-indicators">
      <li data-target="#demo" data-slide-to="0" class="active"></li>
      <li data-target="#demo" data-slide-to="1"></li>
      <li data-target="#demo" data-slide-to="2"></li>
    </ul>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="image/images.jpeg" alt="Los Angeles" width="1100" height="500">
        <div class="carousel-caption">
          <h3>Los Angeles</h3>
          <p>We had such a great time in LA!</p>
        </div>   
      </div>
      <div class="carousel-item">
        <img src="image/images.jpeg" alt="Chicago" width="1100" height="500">
        <div class="carousel-caption">
          <h3>Chicago</h3>
          <p>Thank you, Chicago!</p>
        </div>   
      </div>
      <div class="carousel-item">
        <img src="image/bbbb.png" alt="New York" width="1100" height="500">
        <div class="carousel-caption">
          <h3>New York</h3>
          <p>We love the Big Apple!</p>
        </div>   
      </div>
    </div>
    <a class="carousel-control-prev" href="#demo" data-slide="prev">
      <span class="carousel-control-prev-icon"></span>
    </a>
    <a class="carousel-control-next" href="#demo" data-slide="next">
      <span class="carousel-control-next-icon"></span>
    </a>
  </div>
  
</header>


<!--about us-->


<section>
  <div class="container-fluid"> 
    <h1 class="text-center text-capitalize pt-5">about us</h1>
    <hr class="w=25 mx-auto pt-5">

    <div class="row mb-5">
    <div class="col-lg-6 col-md-6 col-12">
      <img src="image/background.jpg" class="img-fluid" >
    </div>
    <div class="col-lg-6 col-md-6 col-12">
        <h1>who am I?</h1>
        <hr>
        <p class="pt-4">You can apply many formats to paragraphs using the buttons
           on the Formatting toolbar. The Formatting toolbar is shown below as a floating
            toolbar, customized to show only the buttons for paragraph formatting.</p>
            <button class="btn bg-primary text-white">wanna kuow me</button>

      </div>
    </div>
</section>



<!--srerices-->
<section>
<div class="container"> 
  <h1 class="text-center text-capitalize pt-5">srervices</h1>
  <hr class="w=25 mx-auto pt-5">

     
  <div class="row text-center mb-5">
    <div class="col-lg-4 col-md-4 col-12">
      <div class="card">
       <img class="card-img-top" src="website/image/santosh1.jpg" alt="Card image">
        <div class="card-body">
        <h4 class="card-title">John Doe</h4>
        <p class="card-text">Some example text.</p>
        <a href="#" class="btn btn-primary">button</a>
    </div>
  </div>
</div>


  <div class="col-lg-4 col-md-4 col-12">
    <div class="card">
     <img class="card-img-top" src="website/image/image.jpeg" alt="Card image">
      <div class="card-body">
      <h4 class="card-title">John Doe</h4>
      <p class="card-text">Some example text.</p>
      <a href="#" class="btn btn-primary">button</a>
  </div>
</div>
</div>


  <div class="col-lg-4 col-md-4 col-12">
    <div class="card">
     <img class="card-img-top" src="website/image/download.jpeg" alt="Card image">
      <div class="card-body">
      <h4 class="card-title">John Doe</h4>
      <p class="card-text">Some example text.</p>
      <a href="#" class="btn btn-primary">button</a>
  </div>
</div>
</div>

</div>
  
</section>

<!--contact now-->
<section class="bg-primary text-white">
    <article class="py-5 text-center">
        <div>
            <h3 class="display-4 ">+91 7488262854</h3>
            <p>if you best service call us now.</p>
            <button class="btn btn-warning">contact now</button>

        </div>
    </article>
  </section>


  <!--gallery-->
    <section>
      <div class="container"> 
        <h1 class="text-center text-capitalize pt-5">Gallery</h1>
        <hr class="w=25 mx-auto pt-5">

      <div class="row">
        <div class="col-lg-4 col-md-2 col-12 mb-4">
            <img src="website/image/santosh.jfif" class="img-fluid"> 
        </div>
        <div class="col-lg-4 col-md-2 col-12 mb-4">
          <img src="website/image/santosh.jfif" class="img-fluid"> 
        </div>  
        <div class="col-lg-4 col-md-2 col-12 mb-4">
          <img src="website/image/santosh.jfif" class="img-fluid"> 
        </div> 
        <div class="col-lg-4 col-md-2 col-12 mb-4">
          <img src="website/image/santosh.jfif" class="img-fluid"> 
        </div> 
        <div class="col-lg-4 col-md-2 col-12 mb-4">
          <img src="website/image/santosh.jfif" class="img-fluid"> 
        </div> 
        <div class="col-lg-4 col-md-2 col-12 mb-4">
          <img src="website/image/santosh.jfif" class="img-fluid"> 
        </div> 
        <div class="col-lg-4 col-md-2 col-12 mb-4">
          <img src="website/image/santosh.jfif" class="img-fluid"> 
        </div> 
        <div class="col-lg-4 col-md-2 col-12 mb-4">
          <img src="website/image/santosh.jfif" class="img-fluid"> 
        </div> 
        <div class="col-lg-4 col-md-2 col-12 mb-4">
          <img src="website/image/santosh.jfif" class="img-fluid"> 
        </div> 
      </div>
      </div>
      
    </section>


    <!--join now-->
      <section class="bg-primary ">
        <article class="py-5 ">
            <div class="text-center text-white">
                <h3 class="display-4 ">Want TO Join</h3>
                <p>Be a part of Santosh Technical Family</p>
                <button class="btn btn-warning"data-toggle="modal"data-toggle="modal" data-target="#myModal">Joni Now </button>
    
            </div>
             <!-- The Modal -->
            <div class="modal fade" id="myModal">
              <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                
                  <!-- Modal Header -->
                  <div class="modal-header">
                    <h4 class="modal-title">Singup</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                  </div>
                  
                  <!-- Modal body -->
                  <div class="modal-body">
                    <form action="/action_page.php">
                      <div class="form-group">
                        <label for="email">Email address:</label>
                        <input type="email" class="form-control" placeholder="Enter email" id="email" autocomplete="off">
                      </div>
                      <div class="form-group">
                        <label for="pwd">Password:</label>
                        <input type="password" class="form-control" placeholder="Enter password" id="pwd">
                      </div>
                      <div class="form-group form-check">
                        <label class="form-check-label">
                          <input class="form-check-input" type="checkbox"> Remember me
                        </label>
                      </div>
                      <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                    Modal body..
                  </div>
                  
                  <!-- Modal footer -->
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                  </div>
                  
                </div>
              </div>
            </div>
        </article>
      </section>
    
    
    <!--contact us start-->
    <section>
      <div class="container"> 
        <h1 class="text-center text-capitalize pt-5">Contact Us</h1>
        <hr class="w=25 mx-auto pt-5">
      <div class="w-50 mx-auto">
        <form action="/action_page.php">
          <div class="form-group">
            <label for="name">Your Name:</label>
            <input type="text" class="form-control" placeholder="Your Name" id="email" autocomplete="off" placeholder="enter your name">
          </div>
          <div class="form-group">
            <label for="pwd">Email:</label>
            <input type="email" class="form-control" placeholder="Enter email" id="pwd">
          </div>
          <div class="form-group form-check">
            <label class="form-check-label">
              <input class="form-check-input" type="checkbox"> Remember me
            </label>
          </div>
          <button type="submit" class="btn btn-primary">Submit</button>
        </form>
      </div>
      </div>
      </section>

     <!--note  -->

     
     <section class="bg-wight ">
      <article class="py-5 ">
          <div class="text-center">
              <h5 class="display-9 ">power by santosh kumar</h5>
              <p>Be a part of Santosh Technical Family</p>
             <!-- <button class="btn btn-warning"data-toggle="modal"data-toggle="modal" data-target="#myModal">Joni Now </button>-->
          </div>
        </article>
      </section>
       

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js">
  </script>

</body>
</html>