
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="http://gerbercutter.programtech.eu/video.png">
<?php
    $choice = $_GET["nextPage"]; //value comes from index.php
    echo "<title>$choice | Navigate through your genre</title>"
?>        
    
    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">



    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="js/ie-emulation-modes-warning.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

      <br>
   <?php
   if ($choice=="Romance")
   {
   ?>
    <div class="container">

      <div class="row row-offcanvas row-offcanvas-right">

        <div class="col-xs-12 col-sm-9">
		<iframe width="100%" height="500px" src="https://www.youtube.com/embed/NCRBY9ss-58?autoplay=1" name="player" style="border:none">
		</iframe>

        </div><!--/.col-xs-12.col-sm-9-->

        <div class="col-xs-6 col-sm-3 sidebar-offcanvas" id="sidebar">
          <div class="list-group" style="width:300px">
              <form action="watch.php" method="get" id="showVideo">
            <button type="submit" class="imageButton" name="show" value="0kKZvX" style="height:130px;width:300px"><img src="img/Wedding.jpg" class="buttonImage" style="height:80px;width:150px"/><br>The Cafe Story<br><br></button>
            <button type=\"submit\" class=\"imageButton\" name=\"show\" value=\"n-gdd4t98\" style=\"height:130px;width:300px;\"><img src=\"img/Wedding.jpg\" class=\"buttonImage\" style=\"height:80px;width:150px"/><br>The Wedding Saree<br><br></button>\n" +
                <button type=\"submit\" class=\"imageButton\" name=\"show\" value=\"uyt9-t5cd\" style=\"height:130px;width:300px;\"><img src=\"img/cupod.jpg\" class=\"buttonImage\" style=\"height:80px;width:150px;\"/><br> Cupido:Love is blind<br><br></button>\n" +

            <a href="https://www.youtube.com/embed/IP8psM4LWXk?autoplay=1" class="list-group-item" target="player"><p style="float: left;clear: left"><img src="img/the most beautiful thing.jpg" style="height: 80px;width: 150px"><p style="color: #000000"> The Most Beautiful Thing<br><br><br></p>
                </p></a>
            <a href="https://www.youtube.com/embed/RqCsMW90W0k?autoplay=1" class="list-group-item" target="player"><p style="float: left;clear: left"><img src="img/bittersweet love.jpg" style="height: 80px;width: 150px"><p style="color: #000000"> Bittersweet Love<br><br><br><br></p>
                </p></a>

            <a href="#" class="list-group-item">Link</a>
            <a href="#" class="list-group-item">Link</a>
              </form>
          </div>
        </div><!--/.sidebar-offcanvas-->
      </div><!--/row-->
    </div><!--/.container-->
    <?php }
    elseif ($choice=="Laughter") {
        ?><div class="container">

      <div class="row row-offcanvas row-offcanvas-right">

        <div class="col-xs-12 col-sm-9">
		<iframe width="100%" height="500px" src="https://www.youtube.com/embed/1nUAPIysIdE?autoplay=1" name="player" style="border:none">
		</iframe>

        </div><!--/.col-xs-12.col-sm-9-->

        <div class="col-xs-6 col-sm-3 sidebar-offcanvas" id="sidebar">
          <div class="list-group" style="width:300px">
            <a href="https://www.youtube.com/embed/1nUAPIysIdE?autoplay=1" class="list-group-item" target="player"><img src="http://news.entecity.com/files/2013/03/alfie-short-film-malayalam-699x342.jpg" style="height: 80px;width: 150px"></a>
            <a href="https://www.youtube.com/embed/NCRBY9ss-58?autoplay=1" class="list-group-item" target="player"><p style="float: left;clear: left"><img src="http://i.ytimg.com/vi/q7mHIWEVxQE/maxresdefault.jpg" style="height: 80px;width: 150px"><p style="color: #000000"> Tom and Jerry in Highland Castle<br><br><br></p>
                </p></a>
            <a href="https://www.youtube.com/embed/koO5-AWq5Es?autoplay=1" class="list-group-item" target="player"><p style="float: left;clear: left"><img src="http://media.indiatimes.in/media/videocafe/2015/Oct/debi_card_1444817308.jpg" style="height: 80px;width: 150px"><p style="color: #000000"> DEBI- A Short Film<br><br><br><br></p>
                </p></a>
            <a href="https://www.youtube.com/embed/IP8psM4LWXk?autoplay=1" class="list-group-item" target="player"><p style="float: left;clear: left"><img src="img/the most beautiful thing.jpg" style="height: 80px;width: 150px"><p style="color: #000000"> The Most Beautiful Thing<br><br><br></p>
                </p></a>
            <a href="https://www.youtube.com/embed/RqCsMW90W0k?autoplay=1" class="list-group-item" target="player"><p style="float: left;clear: left"><img src="img/bittersweet love.jpg" style="height: 80px;width: 150px"><p style="color: #000000"> Bittersweet Love<br><br><br><br></p>
                </p></a>
            <a href="#" class="list-group-item">Link</a>
            <a href="#" class="list-group-item">Link</a>
          </div>
        </div><!--/.sidebar-offcanvas-->
      </div><!--/row-->
    </div><!--/.container-->
    
    <?php }
    include("webFrame.php"); ?>
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="js/ie10-viewport-bug-workaround.js"></script>

    <script src="js/offcanvas.js"></script>
  </body>
</html>
