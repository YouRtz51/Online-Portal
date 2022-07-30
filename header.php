<?php session_start();
?>
<!doctype html>
<html lang="en">

<head>
   <!-- Required meta tags -->
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <!-- favicon-->
   <link rel="icon" type="icon/jpeg" href="favicon.webp">
   <!--CSS links -->
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet">
   <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
   <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
   <link rel="stylesheet" type="text/css" href="assets/style.css">
   <title>Feat</title>
</head>
<?php include 'inits/_connect.php'; ?>
<?php include 'inits/_modal.php'; ?>

<body>
   <!-- =============================header=========================== -->
   <header id="header">
      <div class="shadow-sm navbar bg-light">
         <nav class="px-3 container-fluid d-flex justify-content-between align-items-center">
            <div class="navbar-brand">
               <a class="text-dark text-decoration-none fw-normal" href="Index.php">Fea<i class="fa fa-apple text-danger"></i>t</a>
            </div>
            <ul class="list-unstyled nav">
               <li class="navbar-item"><a href="index.php" class="nav-link">Home</a></li>
               <li class="navbar-item"><a href="#" class="nav-link">Topics</a></li>
               <li class="navbar-item"><a href="#" class="nav-link">Discussions</a></li>
               <li class="navbar-item"><a href="#" class="nav-link">About</a></li>
               <li class="navbar-item"><a href="#" class="nav-link">Help</a></li>
            </ul>
            <ul class="list-unstyled nav d-flex">
               <div class="mx-3 border rounded border-dark bg-light searchbox">
                  <input style="outline:none;" type="search" class="border-0 outline-none search" size="12" placeholder="Search"><i class="mx-2 my-2 d-inline-block fa fa-search"></i>
               </div>
               <?php
               if (isset($_SESSION["logged_in"])) {
                  echo '  <div class="text-danger d-flex align-items-center">
                          <i style="font-size:28px; border:1px solid #111; border-radius:50%;" class="bx bx-user text-success"></i>      
                          <strong class="mx-1">' . $_SESSION["username"] . '</strong>
                          <a href="inits/_logout.php" type="button" class="mx-2 btn btn-sm btn-warning">Logout</a>
                          </div>
                         ';
               } else {
                  echo '
                       <button type="button" class="mx-2 btn btn-sm btn-success" data-bs-toggle="modal" data-bs-target="#login_modal">Login</button>
                       <button type="button" class="mx-2 btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#signup_modal">Signup</button>
                       ';
               };
               ?>
            </ul>
         </nav>
      </div>
      <div class="alertbox">
         <!-- alerts for signup -->
         <?php
         if (isset($_GET["signup"]) && $_GET["signup"] == "true") {
            echo '
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                 <strong>Holla..!</strong> Your account is Created Successfully.
                  Please <a class="alert-link" style="cursor:pointer;" data-bs-toggle="modal" data-bs-target="#login_modal">Login</a> to continue
                 <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
                 ';
         };
         if (isset($_GET["signup"]) && $_GET["signup"] == "false") {
            echo '
               <div class="alert alert-warning alert-dismissible fade show" role="alert">
                  <strong> Your Email Already Exists. </strong>  
                  Please <a class="alert-link" style="cursor:pointer;" data-bs-toggle="modal" data-bs-target="#login_modal">Login</a> with that Email
                  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
               </div>
                 ';
         };
         ?>

         <!-- alerts for login -->
         <?php
         if (isset($_GET["login"]) && $_GET["login"] == "true") {
            if (isset($_SESSION["logged_in"])) {
               echo '
               <div class="alert alert-success alert-dismissible fade show" role="alert">
                  <strong>' . $_SESSION["username"] . '</strong> You are Logged in ..!
                  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
               </div>
                    ';
            };
         };
         if (isset($_GET["login"]) && $_GET["login"] == "false") {
            echo '
            <div class="alert alert-warning alert-dismissible fade show" role="alert">
                 <strong>Invalid Credentials</strong> Please enter valid email and password
                 <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
                 ';
         };
         ?>
         
         <!-- alerts for comment addition -->
         <?php
         if (isset($_GET["comment_added"]) && $_GET["comment_added"] == "true") {
            echo '
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                 <strong>Holla..!</strong> Your Comment is added Successfully
                 <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
                 ';
         };
         if (isset($_GET["comment_added"]) && $_GET["comment_added"] == "false") {
            echo '
               <div class="alert alert-warning alert-dismissible fade show" role="alert">
                  <strong>Error</strong>  Please Try again After SomeTime 
                  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
               </div>
                 ';
         };
         ?>
      </div>
   </header>
   <!-- .header -->



















   <?php
   /*
   <div class="alertbox">
         <!-- alerts for signup -->
         <?php
         if (isset($_GET["signup"])) {
            if ($_GET["signup"] = "true") {
               echo '
             <div class="alert alert-success alert-dismissible fade show" role="alert">
                  <strong>Holla..!</strong> Your account is Created Successfully.
                   Please <a class="alert-link" style="cursor:pointer;" data-bs-toggle="modal" data-bs-target="#login_modal">Login</a> to continue
                  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
             </div>
             ';
            };
         } else {
            echo '
          <div class="alert alert-warning alert-dismissible fade show" role="alert">
               <strong> Your Email Already Exists. </strong>  
               Please <a class="alert-link" style="cursor:pointer;" data-bs-toggle="modal" data-bs-target="#login_modal">Login</a> with that Email
               <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>
         ';
         };
         ?>
         <!-- alerts for login -->
         <?php
         if (isset($_GET["login"])) {
            if ($_GET["login"] = "true" && isset($_SESSION["logged_in"])) {
               echo '
                      <div class="alert alert-success alert-dismissible fade show" role="alert">
                           <strong>' . $_SESSION["username"] . '</strong> You are Logged in ..!
                           <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                      </div>
                      ';
            } else {
               echo '
                      <div class="alert alert-warning alert-dismissible fade show" role="alert">
                           <strong>Invalid Credentials</strong> Please enter valid email and password
                           <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                      </div>
                      ';
            };
         };
         ?>
      </div>
*/
   ?>