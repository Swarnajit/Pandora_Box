<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="http://gerbercutter.programtech.eu/video.png">
    <style>
.center {
    margin: auto;
    width: 60%;
    padding: 10px;
}
</style>
<title>Video</title>
  </head> 
  <body>

                    <h3></h3>
                    <div class="center">
                        <p class="center">
                            <button onclick="playPause()">Play/Pause</button> 
                        <button onclick="makeBig()">Big</button>
                            <button onclick="makeSmall()">Small</button>
                        </p>
                        
                                             
                               
  <br><br>
                    <video id="player" width="320" height="240" autoplay controls>
                        <source src="Video/The Beatles - Hey Jude.mp4" type="video/mp4">
                    </video>  
   </div>
                        
       
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script>
     var video1=document.getElementById("player");
     function playPause()
     {
         if(video1.paused)
             video1.play();
         else
             video1.pause();
     }
     function makeBig()
     {
         video1.width=600;
     }
     function makeSmall()
     {
         video1.width=180;
     }
    </script>
  </body>
</html>
        
<!--<iframe width="100px" height="500px" src="E:\TV Series\Genius.2017.S01E10.Chapter.Ten.720p.WEB-DL.DD5.1.H264-NTb[rarbg]\Genius.2017.S01E10.Chapter.Ten.720p.WEB-DL.DD5.1.H264-NTb.mkv" name="player" style="border:none">-->
