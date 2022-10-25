<?php
  require "../Model/PostClass.php";
  session_start();
  if (!isset($_SESSION["ID"])) {
    header("Location:../Views/LoginForm.php");
    exit;
  }

  $model=new Post();
  $con=$model->ConnectToDB();
  

  $query="SELECT user.Username,post.Text,post.PostIMG,post.ID FROM `user`
          JOIN post ON user.ID=post.UserID ORDER BY post.ID DESC";
  $res=$model->execQuery($con,$query);


?>

<!doctype html>
<html lang="en">
  <head>
    <title>Blogs</title>
    <link rel="shortcut icon" href="../Styles/Icons/blog.png" type="image/x-icon">
    <!-- <link rel="stylesheet" href="../Styles/CssPersonal.css"> -->

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
  
  <!-- Create post -->
    <div class="data" style="margin-left: 22%;padding-top:90px ;width: auto;display: flex;justify-content: space-between;">
        <div class="personalpost" > 
            <a href="CreatePost.php"> 
                
                <button  style="width: 50rem;height: 2.5rem;background-color: #626363;border-radius: 10px;-webkit-border-radius: 10px;-moz-border-radius: 10px;-ms-border-radius: 10px;-o-border-radius: 10px;border: none;cursor: pointer;">
                    <img src="../Styles/Icons/create.png" alt="Create post" style="width:28px ;">
                    Create post
                </button>
            </a> 
        </div>
    </div>
   
    <!-- Post -->
    <?php
      while ($row=mysqli_fetch_assoc($res)) {
    ?>
    <a href="Post.php?id=<?=$row["ID"]?>">
        <div class="posts" style="margin-left: 28%;padding-top:10px ;max-width:650px ;display: flex;justify-content: space-between;">
            <div class="personalpost" style="width: 650px;height: auto;background-color: #4dd2d6;border-radius: 10px;-webkit-border-radius: 10px;-moz-border-radius: 10px;-ms-border-radius: 10px;-o-border-radius: 10px;border: none;cursor: pointer; color: black;padding:15px;" >   
                <h4 style="font-weight: Bold;"><?= $row["Username"]?></h4>
                <p style="padding-left: 15px;"><?= $row["Text"]?></p>
                <p style="padding-left: 15px;">
                    <?php 
                        if ($row["PostIMG"]) {
                          echo"<img src='../images/".$row['PostIMG']."' style='width: 200px;height: 200px; ;' >  "; 
                        }
                    ?>  
                </p>  

              </div>
            
        </div>
        
    </a>
    <?php
      }
    ?>
    




  
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