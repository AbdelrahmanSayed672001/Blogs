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

        <!-- Sign up form -->
        <section class="signup">
            <div class="container">
                <div class="signup-content">
                    <div class="signup-form">
                        <h2 class="form-title">Sign up</h2>
                        <form method="POST" action="../Controller/RegisterController.php" class="register-form" id="register-form">
                            <div class="form-group">
                                <label for="name"><i class="zmdi zmdi-account material-icons-name"></i></label>
                                <input type="text" name="Username" id="name" placeholder="Username" required="" />
                            </div>
                            <div class="form-group">
                                <label for="age"><i class="zmdi zmdi-account material-icons-name"></i></label>
                                <input type="text" name="Age" id="age" placeholder="Age" required="" />
                            </div>
                            <div class="form-group">
                                <label for="email"><i class="zmdi zmdi-email"></i></label>
                                <input type="email" name="Email" id="email" placeholder="Email" required=""/>
                            </div>
                            <div class="form-group">
                                <label for="pass"><i class="zmdi zmdi-lock"></i></label>
                                <input type="password" name="Password" id="pass" placeholder="Password" required=""/>
                            </div>
                            
                           
                            <div class="form-group form-button" >
                                <input type="submit" name="signup" id="signup" class="form-submit" value="Register" style="background-color: #d17d2f;" />
                            </div>
                        </form>
                    </div>
                    <div class="signup-image">
                        <figure><img src="../Styles/LoginStyle/images/signup-image.jpg" alt="sing up image"></figure>
                        <a href="LoginForm.php" class="signup-image-link">I am already member</a>
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