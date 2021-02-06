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
<?php include "menu.php"; ?>
<section class="my-5">
  <div class="py-5">
       <h2 class="text-center">Contact Us </h2>
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




