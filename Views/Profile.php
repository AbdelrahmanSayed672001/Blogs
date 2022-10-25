<?php
  require "../Model/User.php";
  session_start();
  if (! isset($_SESSION["ID"])) {
      header("Location:LoginForm.php");
      exit;
  }

  $model=new User();
  $con=$model->ConnectToDB();

  $query=" SELECT * FROM `user` WHERE ID= '".$_SESSION["ID"]."' ";
  $res=mysqli_query($con,$query);


?>





<!doctype html>
<html lang="en">
  <head>
    <title>Blogs</title>
    <link rel="shortcut icon" href="../Styles/Icons/blog.png" type="image/x-icon">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">
    <link rel="stylesheet" href="../Styles/HomePageStyle/fonts/icomoon/style.css">

    <link rel="stylesheet" href="../Styles/HomePageStyle/css/bootstrap.min.css">
    <link rel="stylesheet" href="../Styles/HomePageStyle/css/jquery-ui.css">
    <link rel="stylesheet" href="../Styles/HomePageStyle/css/owl.carousel.min.css">
    <link rel="stylesheet" href="../Styles/HomePageStyle/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="../Styles/HomePageStyle/css/owl.theme.default.min.css">

    <link rel="stylesheet" href="../Styles/HomePageStyle/css/jquery.fancybox.min.css">

    <link rel="stylesheet" href="../Styles/HomePageStyle/css/bootstrap-datepicker.css">

    <link rel="stylesheet" href="../Styles/HomePageStyle/fonts/flaticon/font/flaticon.css">

    <link rel="stylesheet" href="../Styles/HomePageStyle/css/aos.css">

    <link rel="stylesheet" href="../Styles/HomePageStyle/css/style.css">
    
  </head>

<style>
    /* Table Styles */

    .table-wrapper{
        /* margin: 10px 70px 70px; */
        padding-top:40px;
        box-shadow: 0px 35px 50px #88f4f7;
        
    }

    .fl-table {
        border-radius: 5px;
        font-size: 12px;
        font-weight: normal;
        border: none;
        border-collapse: collapse;
        width: 100%;
        max-width: 100%;
        white-space: nowrap;
        background-color: #4dd2d6;
        color: black;
        
    }

    .fl-table td, .fl-table th {
        text-align: center;
        padding: 8px;
    
    }

    .fl-table td {
        border-right: 1px solid #f8f8f8;
        font-size: 20px;
    }

    .fl-table thead th {
        color: #ffffff;
        background: #4FC3A1;
    }


    .fl-table thead th:nth-child(odd) {
        color: #ffffff;
        background: #88f4f7;
    }

    .fl-table tr:nth-child(even) {
        background: #F8F8F8;
    }

    h2{
    text-align: center;
    font-size: 25px;
    text-transform: uppercase;
    letter-spacing: 1px;
    color: black;
    font-family:monospace;
    padding-top: 80px ;
    }

</style>





  <body data-spy="scroll" data-target=".site-navbar-target" data-offset="300" style="background-color:#8AD8DA ;">
  

  <div id="overlayer"></div>
  <div class="loader">
    <div class="spinner-border text-primary" role="status">
      <span class="sr-only">Loading...</span>
    </div>
  </div>


  <div class="site-wrap">

    <div class="site-mobile-menu site-navbar-target">
      <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close mt-3">
          <span class="icon-close2 js-menu-toggle"></span>
        </div>
      </div>
      <div class="site-mobile-menu-body"></div>
    </div>
   
    
    <header class="site-navbar js-sticky-header site-navbar-target" role="banner" style="background-color: #d17d2f;">

      <div class="container">
        <div class="row align-items-center">
          
          <div class="col-6 col-xl-2">
            <h1 class="mb-0 site-logo"><a href="../Styles/HomePageStyle/index.html" class="h2 mb-0">Blogs<span class="text-primary">.</span> </a></h1>
          </div>

          <div class="col-12 col-md-10 d-none d-xl-block">
            <nav class="site-navigation position-relative text-right" role="navigation">

              <ul class="site-menu main-menu js-clone-nav mr-auto d-none d-lg-block">
                <li>
                    <a href="HomePage.php" class="nav-link">
                        <img src="../Styles/Icons/home.png" alt="HomePage" style="width:28px ;">
                    </a>
                </li>
                <li>
                    <a href="CreatePost.php" class="nav-link">
                        <img src="../Styles/Icons/post.png" alt="Posts" style="width: 28px;">
                    </a>
                </li>
                <li>
                    <a href="Profile.php" class="nav-link">
                        <img src="../Styles/Icons/user.png" alt="Profile" style="width: 28px;">
                    </a>
                </li>   
                <li>
                    <a href="Logout.php" class="nav-link">
                        <img src="../Styles/Icons/logout.png" alt="Logout" style="width: 28px;">
                    </a>
                </li>             
              </ul>
            </nav>
          </div>


          <div class="col-6 d-inline-block d-xl-none ml-md-0 py-3" style="position: relative; top: 3px;"><a href="#" class="site-menu-toggle js-menu-toggle float-right"><span class="icon-menu h3"></span></a></div>

        </div>
      </div>
      
    </header>
  </div>

    <div class="table-wrapper"  >
        
        <table class="fl-table" style="margin-top: 180px;" >
            
            <tbody>
              <?php
                  while ($row=mysqli_fetch_assoc($res)) {
              ?>
            <tr> 
                <td>Email</td> 
                <td> <?=$row["Email"] ?> </td>
            </tr>
            <tr>
                <td> Username </td>
                <td> <?=$row["Username"] ?></td>  
            </tr>
            
            <tr> 
                <td>Password</td>
                <td><?=$row["Password"] ?></td> 
            </tr>
            
            <tr> 
                <td>Age</td>
                <td><?=$row["Age"] ?></td> 
            </tr>
            
            <?php 
                  }
                  // mysqli_free_result($res);
                  // $model->Disconnect($con);
            ?>

        
            <tbody>
        </table>

    
    </div>
     
   

   


  </div> 

  
  </body>
</html>


<!-- .site-wrap -->

<script src="../Styles/HomePageStyle/js/jquery-3.3.1.min.js"></script>
  <script src="../Styles/HomePageStyle/js/jquery-ui.js"></script>
  <script src="../Styles/HomePageStyle/js/popper.min.js"></script>
  <script src="../Styles/HomePageStyle/js/bootstrap.min.js"></script>
  <script src="../Styles/HomePageStyle/js/owl.carousel.min.js"></script>
  <script src="../Styles/HomePageStyle/js/jquery.countdown.min.js"></script>
  <script src="../Styles/HomePageStyle/js/jquery.easing.1.3.js"></script>
  <script src="../Styles/HomePageStyle/js/aos.js"></script>
  <script src="../Styles/HomePageStyle/js/jquery.fancybox.min.js"></script>
  <script src="../Styles/HomePageStyle/js/jquery.sticky.js"></script>
  <script src="../Styles/HomePageStyle/js/isotope.pkgd.min.js"></script>

  
  <script src="../Styles/HomePageStyle/js/main.js"></script>