<?php
session_start();
//$choice=$_GET["hideed"]; //value comes from videos.php
//$newchoice=$_SESSION["id"];
//echo $newchoice."\n";
include 'order_handle.php';
//$user=$_SESSION["id"];
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

    <title>Blog Template for Bootstrap</title>

    <!-- Bootstrap core CSS -->
    <link href="CSS/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="CSS/blog.css" rel="stylesheet">

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
          <li class="nav-item active">
              <a class="nav-link" href="destroy"><?php echo $_SESSION["Name"];?></a>
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
        <form class="form-inline my-2 my-lg-0">
          <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
        </form>
      </div>
        </nav>
        <br>
      <div class="blog-header">
          <?php
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
            <p><form action="request_book" method="get">
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
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="JS/bootstrap.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="JS/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>

