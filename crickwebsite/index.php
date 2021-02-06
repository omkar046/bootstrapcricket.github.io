<!DOCTYPE html>
<html>
<head>
<title></title>
<meta charset="utf-50">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@700&display=swap" rel="stylesheet">
  </head>
<body>  
<?php include 'menu.php'; ?>
<div id="demo" class="carousel slide" data-ride="carousel">
<ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
  </ul>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="images\img2.jpg" alt="About Batting" width="1500" height="500">
    </div>
    <div class="carousel-item">
      <img src="images\crickbat.jpg" alt="About Balling" width="1500" height="500">
    </div>
    <div class="carousel-item">
      <img src="images\team.jpg" alt="About Team" width="1500" height="500">
    </div>
  </div>
  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>
</div>
<section class="my-5">
  <div class="py-5">
       <h2 class="text-center">About Us</h2>
</div>
<div class="container-fluid">
<div class="row">
    <div class="col-lg-6 col-md-6 col-12">
         <img src="images\team3.jpg" class="img-fluid aboutimg" style="height: 302spx;">
    </div>
    <div class="col-lg-6 col-md-6 col-12">
     <h2 class="display-5">REGARDING OUR TEAM...</h2>
     <p class="py-10">Our team consists of 11 players with all the ranking players.Our team enhances the players to learn new strategies of cricket.By joining our team you will get to learn from experienced players also here you will play with various players in different states. Our team is ranking on first place in Maharashtra district.We also conduct games and various events ad celebrations to increase and boost up and cheer up our team players.So do register as fast as possible to enjoy and have fun and play cricket with enthusiasm.THANK-YOU!!!!</p>
      <a href="about.php" class="btn btn-success">Check More</a>
    </div>
  </div>
</div>
</section> 

<section class="my-5">
  <div class="py-5">
       <h2 class="text-center">Our Services</h2>
  </div>   

  <div class="container-fluid">
       <div class="row">
          <div class="col-lg-4 col-md-4 col-12">
              <div class="card" style="width:397px">
       <img class="card-img-top" src="images\train2.jpg" alt="Card image">
                  <div class="card-body">
                        <h4 class="card-title">Training</h4>
                        <p class="card-text">Here you will get to learn new cricket skills.</p>
                        <a href="#" class="btn btn-primary">See More</a>
                  </div>
              </div>
           </div>    
          <div class="col-lg-4 col-md-4 col-12">
              <div class="card" style="width:397px">
       <img class="card-img-top" src="images\discussion.jpg" alt="Card image">
                  <div class="card-body">
                        <h4 class="card-title">Leadership Qualities</h4>
                        <p class="card-text">Here we will teach you leadership qualities.</p>
                        <a href="#" class="btn btn-primary">See More</a>
                  </div>
              </div>
          </div>
          <div class="col-lg-4 col-md-4 col-12">
              <div class="card" style="width:397px">
       <img class="card-img-top" src="images\tropyyy.jpg" alt="Card image">
                  <div class="card-body">
                        <h4 class="card-title">Competitions & Events</h4>
                        <p class="card-text">Here you will find interesting things.</p>
                        <a href="#" class="btn btn-primary">See More</a>
                  </div>
              </div>
</div>
       </div>  
   </div>
</section>

<section class="my-5">
  <div class="py-5">
       <h2 class="text-center">Our Gallery</h2>
</div>

<div class="container-fluid">
          <div class="row">
          <div class="col-lg-4 col-md-4 col-12">
          <img src="images\ground.jpg" class="img-fluid pb-100" style="width:300px">
          </div>
          <div class="col-lg-4 col-md-4 col-12">
          <img src="images\ballbat.jpg" class="img-fluid pb-8" style="width:300px">
          </div>
          <div class="col-lg-4 col-md-4 col-12">
          <img src="images\trophy.jpg" class="img-fluid pb-8" style="width:300px">
          </div>
          <div class="col-lg-4 col-md-4 col-12">
          <img src="images\training.jpg" class="img-fluid pb-8" style="width:300px">
          </div>
          <div class="col-lg-4 col-md-4 col-12">
          <img src="images\team4.jpg" class="img-fluid pb-8" style="width:300px">
          </div>
          <div class="col-lg-4 col-md-4 col-12">
          <img src="images\indiabeat.jpg" class="img-fluid pb-8" style="width:300px">
          </div>
          <div class="col-lg-4 col-md-4 col-12">
          <img src="images\tm.jpg" class="img-fluid pb-8" style="width:300px">
          </div>
          <div class="col-lg-4 col-md-4 col-12">
          <img src="images\team.jpg" class="img-fluid pb-8" style="width:300px">
          </div>
          <div class="col-lg-4 col-md-4 col-12">
          <img src="images\discussion.jpg" class="img-fluid pb-8" style="width:300px">
          </div>
          </div>
</div>

</section>

<section class="my-5">
  <div class="py-5">
       <h2 class="text-center">Contact Us</h2>
</div>
<div class="w-50 m-auto"> 
  <form action="userinfo.php" method="post">
    <div class="form-group">
      <label>Username</label>
      <input type="text" name="User" autpcomplete="off" class="form-control">
</div>
<div class="form-group">
      <label>Email</label>
      <input type="text" name="Email" autpcomplete="off" class="form-control">
</div>
<div class="form-group">
      <label>Mobile</label>
      <input type="text" name="user" autpcomplete="off" class="form-control">
</div>
<div class="form-group">
      <label>Comments</label>
      <textarea class="form-control" name="Comments">      
      </textarea>
</div> 
<button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>
</section>

<footer>
    <p class="p-3 bg-dark text-white text-center">@PIRANKAR PRODUCTION</p>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>  
  </body>
  </html>




