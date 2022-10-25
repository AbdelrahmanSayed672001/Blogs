<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Blogs</title>
    <link rel="shortcut icon" href="../Styles/Icons/blog.png" type="image/x-icon">

    <!-- Font Icon -->
    <link rel="stylesheet" href="../Styles/LoginStyle/fonts/material-icon/css/material-design-iconic-font.min.css">

    <!-- Main css -->
    <link rel="stylesheet" href="../Styles/LoginStyle/css/style.css">
</head>
<body style="background-color:#8AD8DA ;">

    <div class="main" style="padding: 50px 0; background-color:#8AD8DA ;">

        <!-- Sing in  Form-->
        <section class="sign-in">
            <div class="container">
                <div class="signin-content">
                    <div class="signin-image">
                        <figure><img src="../Styles/LoginStyle/images/signin-image.jpg" alt="sing up image"></figure>
                        <a href="RegisterForm.php" class="signup-image-link">Create an account</a>
                    </div>

                    <div class="signin-form">
                        <h2 class="form-title">Login</h2>
                        <form method="POST" action="../Controller/LoginController.php" class="register-form" id="login-form">
                            <div class="form-group">
                                <label for="email"><i class="zmdi zmdi-email"></i></label>
                                <input type="email" name="Email" id="Email" placeholder="Email" required="" />
                            </div>
                            <div class="form-group">
                                <label for="your_pass"><i class="zmdi zmdi-lock"></i></label>
                                <input type="password" name="Password" id="Password" placeholder="Password" required="" />
                            </div>
                            
                            <div class="form-group form-button">
                                <input type="submit" name="signin" id="signin" class="form-submit" value="Log in" style="background-color: #d17d2f;" />
                            </div>
                        </form>
                        
                    </div>
                </div>
            </div>
        </section> 

    </div>

    <!-- JS -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="js/main.js"></script>
</body><!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>