<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../../../favicon.ico">

    <title>Login or Signup</title>

    <!-- Bootstrap core CSS -->
    <link href="CSS/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="CSS/signin.css" rel="stylesheet">
  </head>

  <body>

    <div class="container">

        <form class="form-signin" action="checkprofile.php" method="post" enctype="multipart/form-data">
        <h2 class="form-signin-heading">Please sign in</h2>
        <label for="inputEmail" class="sr-only">Phone Number</label>
        <input id="inputEmail" name="number" class="form-control" placeholder="Phone Number" required autofocus>
        <input id="inputPassword" name="password1" type="password" class="form-control" placeholder="Password" required autofocus>
                <div class="checkbox">
          <label>
            <input type="checkbox" value="remember-me"> Remember me
          </label>
        </div>
        <!--<label for="inputPassword" class="sr-only">Password</label>
        <input type="password" id="inputPassword" class="form-control" placeholder="Password" required>
        <div class="checkbox">
          <label>
            <input type="checkbox" value="remember-me"> Remember me
          </label>
        </div>-->
        <button class="btn btn-lg btn-primary btn-block" type="button" onclick="profileCheck()">Sign in</button>
      </form>
        <p><div id="demo"></div>
    </div> <!-- /container -->
    <script type="text/javascript" src="JS/loginfunction.js"></script>
        
  </body>
</html>

