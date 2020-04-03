
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laundry Service</title>
    <link rel="stylesheet" href="./css/style.css">
    
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

    <style>
@media only screen and (min-width: 600px) {.a{padding-left:300px;padding-right:300px;}}
        </style>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark " style="background-color: #004986;">
  <a class="navbar-brand" href="#">
  <img src="images/logo.png" width="200" height="70" class="d-inline-block align-top" alt="">
  </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item ">
        <a class="nav-link" href="index.php">Home </a>
	  </li>
	  <li class="nav-item active">
        <a class="nav-link" href="services.php">Services <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">About Us</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">FAQ</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Contact Us</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">About Us</a>
	  </li>
	  


	  <li class="nav-item">
      <a class="nav-link">
    <?php  if (isset($_SESSION['user'])) : ?>
					<strong><?php echo $_SESSION['user']['username']; ?></strong>

					<small>
						<i  style="color: #888;">(<?php echo ucfirst($_SESSION['user']['user_type']); ?>)</i> 
					</small>

        <?php endif ?>
    </a>
      </li>



      <li class="nav-item">
      <a href="index.php?logout='1'"><button type="button" class="btn btn-danger">LOGOUT</button><a>
      </li>

     
      
      
    </ul>
    
  </div>
</nav>





<section>


<div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="images/contribute.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5></h5>
        <p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
      </div>
    </div>
    
    
  </div>
  <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>

</section>


<section>
<hr />


    
                
                        <h4>Laundry Type</h4>
                        
                        <div class="table-responsive">
                            <table class="table" >
                                <thead >
                                    <tr>
                                        <th>#</th>
                                        <th>Laundry Type Description</th>
                                        <th>Price/Kg</th>
                                        
                                    </tr>
                                </thead>
                                <tbody>
                             @foreach($users as $user)       
  
         <tr><td>{{$user->laun_type_id}}</td>
         <td>{{$user->laun_type_desc}}</td>
         <td>{{$user->laun_type_price}}</td>
       
    
    </tr>@endforeach
                                </tbody>
                            </table>
                           
                        
                </div>
                <!-- /. ROW  -->
                <hr />

    </section>


<section>

<div class="howtomain">


<div class="container">
<div class="howto">
<h3>Our Additional Services</h3>
<img src="images/header_bg.png">
</div>
<div class="row row-cols-1 row-cols-sm-1 row-cols-md-1">
    <div class="col">
    <div class="background">
<div class="card">

<div class="">
<h5 style="color:red;">Additional Services</h5>
<img src="images/header_bg.png">
<div class="a"><p>
                            Antiseptic wash <strong style="color:green">₹10/per kg</strong></p><p>

Starch (shirt/trouser/kurtha/pyjama) <strong style="color:green">₹25/per kg</strong></p><p>

Stain removal <strong style="color:green">₹40*</strong>
</p>
                            </div>
                        </div>

</div>
</div>
</div>


</section>





@include ('index5');

    </div>
</body>
</html>