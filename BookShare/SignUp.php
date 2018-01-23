<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../../../favicon.ico">

    <title>Sign In Page</title>

    <!-- Bootstrap core CSS -->
    <link href="CSS/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="CSS/signin.css" rel="stylesheet">
  </head>

  <body>

    <div class="container">
<!--<form class="form-signin" action="sms.php" method="get" enctype="multipart/form-data">-->
<form id="signin" class="form-signin" action="profile.php" method="post" enctype="multipart/form-data">
        <h2 class="form-signin-heading">Sign Up</h2>
        <label for="inputEmail" class="sr-only">Phone Number</label>
        <input id="inputName" name="inputName" class="form-control" placeholder="Name" autocomplete="off" required autofocus>
        <input id="inputPhone" name="inputPhone" class="form-control" placeholder="Phone Number" autocomplete="off" required>
        <input id="inputPassword" name="inputPassword" type="password" class="form-control" placeholder="Password" autocomplete="off" onkeyup="check();" required>
        <input id="confirmPassword" name="confirmPassword" type="password" class="form-control" placeholder="Confirm Password" autocomplete="off" onkeyup="check();"required>
        <!--<label for="inputPassword" class="sr-only">Password</label>
        <input type="password" id="inputPassword" class="form-control" placeholder="Password" required>
        <div class="checkbox">
          <label>
            <input type="checkbox" value="remember-me"> Remember me
          </label>
        </div>-->
        <button disabled class="btn btn-lg btn-primary btn-block" id="abcd" type="submit">Sign up</button>
      </form>

    </div> <!-- /container -->
    <script>
        
var check = function() {
   var phone= document.getElementById("inputPhone");
        var inputPassword=document.getElementById('inputPassword');
        var confirmPassword=document.getElementById('confirmPassword');
        var newbutton=document.getElementById('abcd');
  if (inputPassword.value ===
    confirmPassword.value){
    newbutton.disabled =false;
    newbutton.innerHTML="Sign In";
  } else {
    newbutton.disabled=true;
    newbutton.innerHTML="Password not matched";
  }
}
/*var phonecheck=function()
{
    var phone= document.getElementById("inputPhone").value;
    alert(phone);
    if(phone.length!=10)
    {
        document.getElementById('abcd').disabled=true;
        document.getElementById('abcd').innerHTML="Proper number please";
    }   
    else
    {
        document.getElementById('abcd').disabled=false;
        document.getElementById('abcd').innerHTML="Sign In";
    }
       
}*/
   </script> 
  </body>
</html>

