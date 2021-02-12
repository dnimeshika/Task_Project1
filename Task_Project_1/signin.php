<!DOCTYPE html>
<html lang="en">
   <!-- Basic -->
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
   <title>Project1</title>
   <meta name="keywords" content="HTML, CSS, JavaScript">
   <meta name="description" content="Onling shopping">
   <meta name="author" content="Dilini Nimeshika">
   <link href="css/style.css" rel="stylesheet">
   <link href="css/bootstrap.css" rel="stylesheet">
   <body id="signin" class="signin">
        <div class="signin">
            <div class="container">
                <div class="row" style="margin-left:0%;margin-top:2%;">
                    <div class="col-sm-1">
                        <div class="logo" >
                            <a href="index.php"><img src="img/logo.png" alt="#" /></a>
                        </div>
                    </div>        
                </div>       
            </div>
        </div>
        <div class="heading">
            <div class="container">
                <div class="row">
                        <div class="col-lg-12">
                            <div class="heading-text text-center pt-20">
                                <h2>Hi</h2>
                                <p style="margin-bottom: 40px;">Sign in to Project1 or <a href="signup.php" > Create an account</a></p>
                                
                                <form class="form" action="signincon.php" method="POST">
                                    <div class="form-Sign" >
                                        <input type="text"  class="signin-form" style="text-align:left;"name="username" placeholder="Username" autofocus>
                                    </div>
                                    <div class="form-Sign">
                                        <input type="password" class="signin-form" style="text-align: left;" name ="password"  placeholder="Password" >
                                    </div>
                                
                                    <button type="submit"  name="signin-btn" id="btn1" class="btn btn-primary" >Sign In</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>       
            </div>
        </div>
    </body>
</html>
  