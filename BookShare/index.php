<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php
session_start();
require_once 'Database.php';
//include 'webFrame.php';
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="Graphicloads-Colorful-Long-Shadow-Book.ico">

    <title>GetBookOnline- Online Library and Book rent</title>

    <!-- Bootstrap core CSS -->
    <link href="CSS/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="CSS/carousel.css" rel="stylesheet">
    <link href="CSS/blog.css" rel="stylesheet">
    <link href="CSS/formStyle.css" rel="stylesheet">
  </head>
  <body>

    <main role="main">
	
	<!--header added-->
	<nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top">
      <a class="navbar-brand" href="#">GetBookOnline</a>
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
                  <a class="dropdown-item" href="newProfile.php">Profile</a>
                  <a class="dropdown-item" href="settings.php">Settings</a>
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
                    <input id="booksearch" name="booksearch" value="" type="text" autocomplete="off" placeholder="Search your book in our library" onkeyup="showHint(this.value)">
                    
                </label>
                
                </fieldset>
            <div id="livesearch"></div>
          </form>
		</div>
	<!--Search form-------------->
      <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
          <li data-target="#myCarousel" data-slide-to="1"></li>
          <li data-target="#myCarousel" data-slide-to="2"></li>
          <li data-target="#myCarousel" data-slide-to="3"></li>
	  <li data-target="#myCarousel" data-slide-to="4"></li>
        </ol>
        <div class="carousel-inner">
          <div class="carousel-item active">
              <img class="first-slide" src="coconut oil coffee green clean eating living recipe.jpg" alt="First slide">
            <div class="container">
              <div class="carousel-caption">
                  <h1 style="color: black">Example headline.</h1>
                <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
                <p><a class="btn btn-lg btn-primary" href="SignUp.php" role="button">Sign up today</a></p>
              </div>
            </div>
          </div>
          <div class="carousel-item">
              <img class="second-slide" src="411522.jpg" alt="Second slide">
            <div class="container">
              <div class="carousel-caption">
                <h1>Another example headline.</h1>
                <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
                <p><a class="btn btn-lg btn-primary" href="pricing.html" role="button">Check our price</a></p>
              </div>
            </div>
          </div>
          <div class="carousel-item">
              <img class="third-slide" src="reading_feature.jpg" alt="Third slide">
            <div class="container">
              <div class="carousel-caption text-right">
                  <h1>One more for good measure.</h1>
                <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
                <p><a class="btn btn-lg btn-primary" href="#" role="button">Browse gallery</a></p>
              </div>
            </div>
          </div>
		  <div class="carousel-item">
            <img class="third-slide" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Third slide">
            <div class="container">
              <div class="carousel-caption text-right">
                <h1>One more for good measure.</h1>
                <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
                <p><a class="btn btn-lg btn-primary" href="#" role="button">Browse gallery</a></p>
              </div>
            </div>
          </div>
		  <div class="carousel-item">
            <img class="third-slide" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Third slide">
            <div class="container">
              <div class="carousel-caption text-right">
                <h1>One more for good measure.</h1>
                <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
                <p><a class="btn btn-lg btn-primary" href="#" role="button">Browse gallery</a></p>
              </div>
            </div>
          </div>
        </div>
        <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>


      <!-- Marketing messaging and featurettes
      ================================================== -->
      <!-- Wrap the rest of the page in another container to center all the content. -->           
      <div class="container marketing">
        <!-- Example row of columns -->
        <div class="row">
       <?php
       $sqlquery="select * from bookinfo limit 3";
        $result= $conn->query($sqlquery);
 //mysqli_query($conn,$sqlquery);
//$row = mysql_fetch_assoc($result); 
        $num=mysqli_num_rows($result);
       if($num==0)
        {
            echo "No record";
            //exit;
        }
        else
        {
            while($row= mysqli_fetch_assoc($result))
            {
            ?>
          <div class="col-lg-4">
              <h2><?php echo $row['Book_Name'];?></h2>
			<img class="square" src="<?php echo $row['BookImage'];?>" alt="Generic placeholder image" width="150" height="200">
            <p><?php echo $row['About'];?></p>
            <p><form action="order.php" method="get">
                <input type="hidden" value="<?php echo $row['Book_ID']; ?>" name="hideed">
                <button class="btn btn-primary" type="submit" role="button">Request &raquo;</button>
            </form> 
          </div>          
        
<?php
            }
        }
?>        
	</div>
</div>
<!--Footer-->
<?php
include 'webFrame.php';
?>
    </main>


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

