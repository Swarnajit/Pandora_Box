<?php
session_start();
//$choice=$_GET["hideed"]; //value comes from videos.php
//$newchoice=$_SESSION["id"];
//echo $newchoice."\n";
include 'order_handle.php';
//$user=$_SESSION["id"];
          if(strlen($choice1)==6)
          {
               if($num==0)         
                {
                    echo "Dur BAl";//............ divert to 404 page not found
                    exit;

                }
                else
                {
    while($row = mysqli_fetch_assoc($result)) 
    {
    ?> 
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>About <?php  echo $row['Book_Name'];?></title>

    <!-- Bootstrap core CSS -->
    <link href="CSS/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="CSS/blog.css" rel="stylesheet">
    <link href="CSS/formStyle.css" rel="stylesheet">
    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="../../assets/js/ie-emulation-modes-warning.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>
    <div class="container">
        <nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top">
      <a class="navbar-brand" href="#">BookShare</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarsExampleDefault">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item">
            <a class="nav-link" href="Fiction">Fiction <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Horror</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">BestSellers</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Academic</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Self-Help</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Request</a>
          </li>
          <?php
            if(isset($_SESSION["Name"]))
            {    
          ?>
          <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><?php echo $_SESSION["Name"]?></a>
              <div class="dropdown-menu" aria-labelledby="dropdown01">
              <a class="dropdown-item" href="profile">Profile</a>
              <a class="dropdown-item" href="destroy">Logout</a>
            </div>
          </li>
          
          <?php
            }
          else
          {
           ?>
          <li class="nav-item active">
              <a class="nav-link" href="Login">Login</a>
          </li>
          <?php
          }
          ?>
        </ul>
        <div class="nav-item">
              <a href="#login-box" class="login-window"><img src="search-icon-png-27.png" height="30" width="30" alt="Search" title="Search"></a>
        	</div>
      </div>
    </nav>
	<!--Search form-------------->
        <div id="login-box" class="login-popup">
        <a href="#" class="close"><img src="close_pop.png" class="btn_close" title="Close Window" alt="Close" /></a>
        <form method="post" class="signin" action="searchPage.php">
                <fieldset class="textbox">
            	<label class="username">
                    <input id="username" name="username" value="" type="text" autocomplete="off" placeholder="Search your book in our library" onkeyup="showHint(this.value)">
                    
                </label>
                
                </fieldset>
            <div id="livesearch"></div>
          </form>
		</div>
        <br>
	<!--Search form-------------->
      <div class="blog-header">
        <h1 class="blog-title"><?php  echo $row['Book_Name'];?></h1>
        <p class="lead blog-description"><?php  echo $row['Author'];?></p>
      </div>

      <div class="row">

        <div class="col-sm-8 blog-main">

          <div class="blog-post">
            <h2 class="blog-post-title"><?php  echo $row['About'];?></h2>
            <p class="blog-post-meta">Tags <a href="#"><?php  echo $row['Tags'];?></a></p>

            
          </div><!-- /.blog-post -->



        </div><!-- /.blog-main -->

        <div class="col-sm-3 col-sm-offset-1 blog-sidebar">
          <div class="sidebar-module sidebar-module-inset">
            <h4>About</h4>
               
            <img class="square" src="<?php  echo $row['BookImage'];?>" alt="Generic placeholder image" width="200" height="300">         
                   </div>
            <p><form action="request_book" method="post">
                <input type="hidden" value="<?php echo $row['Book_ID'];?>" name="hideed">
                <?php
            if(isset($_SESSION["Name"]))
            {    
          ?>
                <input type="hidden" value="<?php echo $_SESSION["id"];?>" name="pagla">
            <?php
            }
            ?>
                <button class="btn btn-primary" type="submit" role="button">Request &raquo;</button>
            </form>     
      <?php
    }   
    }    
          }
          else {
              header("Location: Login.php");////............ divert to 404 page not found
              echo 'Hacking attempt';
          }
              
?>
        </div><!-- /.blog-sidebar -->

      </div><!-- /.row -->

    </div><!-- /.container -->

    <footer class="blog-footer">
      <p>Blog template built for <a href="http://getbootstrap.com">Bootstrap</a> by <a href="https://twitter.com/mdo">@mdo</a>.</p>
      <p>
        <a href="#">Back to top</a>
      </p>
    </footer>


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="JS/jquery.min.js"><\/script>')</script>
    <script src="JS/popper.min.js"></script>
    <script src="JS/bootstrap.min.js"></script>
    <!-- Just to make our placeholder images work. Don't actually copy the next line! -->
    <script src="JS/holder.min.js"></script>
    <script>
    function showHint(str) {
    if (str.length == 0) { 
        document.getElementById("livesearch").innerHTML = "";
        return;
    } else {
        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("livesearch").innerHTML =this.responseText;
                
            }
        };
        xmlhttp.open("GET", "gethint.php?q=" + str, true);
        xmlhttp.send();
    }
}
</script>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js"></script>
<script type="text/javascript">
$(document).ready(function() {
	$('a.login-window').click(function() {
		
		// Getting the variable's value from a link 
		var loginBox = $(this).attr('href');

		//Fade in the Popup and add close button
		$(loginBox).fadeIn(300);
		
		//Set the center alignment padding + border
		var popMargTop = ($(loginBox).height() + 24) / 2; 
		var popMargLeft = ($(loginBox).width() + 24) / 2; 
		
		$(loginBox).css({ 
			'margin-top' : -popMargTop,
			'margin-left' : -popMargLeft
		});
		
		// Add the mask to body
		$('body').append('<div id="mask"></div>');
		$('#mask').fadeIn(300);
		
		return false;
	});
	
	// When clicking on the button close or the mask layer the popup closed
	$('a.close, #mask').live('click', function() { 
	  $('#mask , .login-popup').fadeOut(300 , function() {
		$('#mask').remove();  
	}); 
	return false;
	});
});    
    </script>
  </body>
</html>

