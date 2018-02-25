<?php
session_start();
require_once 'Database.php';
$i=1;
$choice=$_SESSION["id"]; //value comes from videos.php
//echo $choice;
//$livesearch="dfsdfsdfsdfsd";
$sqlquery="select bookinfo.Book_Name,bookinfo.BookImage,bookinfo.Book_ID,order_handler.order_date from bookinfo INNER JOIN order_handler
ON order_handler.Book_ID=bookinfo.Book_ID where order_handler.user_id='".$choice."' ORDER BY order_date DESC";
$result= $conn->query($sqlquery);
 //mysqli_query($conn,$sqlquery);
//$row = mysql_fetch_assoc($result); 
$num=mysqli_num_rows($result);
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
    <link rel="icon" href="Graphicloads-Colorful-Long-Shadow-Book.ico">

    <title>Profile of <?php echo $_SESSION["Name"];?></title>

    <!-- Bootstrap core CSS -->
    <link href="CSS/bootstrap.min.css" rel="stylesheet">
    <link href="CSS/formStyle.css" rel="stylesheet">
    <link href="CSS/blog.css" rel="stylesheet">
        <!-- Custom styles for this template -->
    <script src="JS/ie-emulation-modes-warning.js"></script>
  </head>
  <?php
if($num==0)
    echo '<html>'
    . '<body>'
        . 'You have not ordered anything yet'
        .'</body>'
        .'</html>';
    else {
       
    ?>
        
  <body>
          <!-- Fixed navbar -->
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
          
          <div id="login-box" class="login-popup">
        <a href="#" class="close"><img src="close_pop.png" class="btn_close" title="Close Window" alt="Close" /></a>
        <form method="get" class="signin" action="order.php">
                <fieldset class="textbox">
            	<label class="username">
                    <input id="username" name="hideed" value="" type="text" autocomplete="off" placeholder="Search your book in our library" onkeyup="showHint(this.value,'<?php echo $livesearch;?>')">
                    
                </label>
                
                </fieldset>
            <div id="livesearch"></div>
          </form>
		</div>
          <br>
          <br>
          <br>
    <div class="container theme-showcase" role="main">

      <!-- Main jumbotron for a primary marketing message or call to action -->
      
      <div class="page-header">
        <h1>Ordered Books</h1>
      </div>
      <div class="row">
    
        
          <table class="table table-striped">
            <thead>
              <tr>
                <th>#</th>
                <th>Book Cover</th>
                <th>Book Name</th>
                <th>Language</th>
                <th>Ordered On</th>
		<th>Valid upto</th>
		<th>Status</th>
              </tr>
            </thead>
            <tbody>
                <?php
                while($row = mysqli_fetch_assoc($result)) 
        {
                    
                ?>
                
              <tr>
                <td><?php echo $i;?></td>
                <td><img class="square" src="<?php echo $row['BookImage'];?>" alt="<?php echo $row['BookImage'];?>" width="100" height="100"></td>
                <td><?php echo $row['Book_Name'];?></td>
                <td></td>
				<td><?php echo date('d-m-Y', strtotime($row['order_date']));?></td>
                                <td><?php echo date('d-m-Y', strtotime($row['order_date'] .'+24 hour'));?></td>
                <?php
                date_default_timezone_set('Asia/Kolkata');
                 $date_now = date('d-m-Y H:i:s'); // this format is string comparable
                 if ($date_now < date('d-m-Y', strtotime($row['order_date'] .'+24 hour'))) {
        ?>
            <td><Button onclick="delBook(this.value)" value="<?php echo $row['Book_ID'];?>">Delete</button></td>
        <?php                        
                 }
                 else
                 {
        ?>
            <td>Delivered</td>
            <?php
                 }
                ?>
                                
              </tr>
         <?php
         $i++;
                 }
    }
                 ?>
            </tbody>
          </table>
        </div>
    </div>

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
        function showHint(str,newstr) {
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
        xmlhttp.open("GET", newstr + str, true);
        xmlhttp.send();
    }
}
function delBook(str)
{
    //var bookinfo=str;
    //alert(bookinfo);
    var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                alert(this.responseText);
                location.reload();
                
            }
        };
        xmlhttp.open("GET", "delete.php?q=" + str, true);
        xmlhttp.send();
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