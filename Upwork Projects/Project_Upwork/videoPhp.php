<!DOCTYPE html>
<html>
<head>
<style>
* {
    box-sizing: border-box;
   
}

body {
    margin: 0;
    font-family: Arial;
    font-size: 17px;
    background-color: #151414;
}

#myVideo {
    position: fixed;
    right: 0;
    bottom: 0;
    max-height: 100%;
}

.content {
    position: fixed;
    bottom: 0;
    color: #f1f1f1;
    width: 100%;
    padding-left: 10%;
    padding-bottom: 2.5%;
    
}

#writingStyle {
    font-family: Arial;
    font-size: 100px;
    font-weight: 200;
    padding-bottom: 75px;
    
}
#myBtn {
    width: 100px;
    font-size: 18px;
    padding: 10px;
    border: none;
    background: #000;
    color: #fff;
    cursor: pointer;
}

#myBtn:hover {
    background: #ddd;
    color: black;
}
</style>
</head>
<body>

    <video autoplay loop id="myVideo" style="position:absolute; left: 6%;">
    <source src="Video/Enrique.mp4" type="video/mp4">
  Your browser does not support HTML5 video.
</video>

<div class="content">
    <div id="writingStyle">Bailando ~ Eminem</div>
   <button id="myBtn" onclick="myFunction()">Pause</button>
  <button id="myBtn" name="nextButton" onclick="showNext()">Next</button>
</div>

<script>
var video = document.getElementById("myVideo");
var btn = document.getElementById("myBtn");
var nxt=document.getElementsByName("nextButton");

function showNext()
{
    video.src="Video/Eminem.mp4";
    document.getElementById("writingStyle").innerHTML="Not Afraid ~ Eminem";
}
function myFunction() {
  if (video.paused) {
    video.play();
    btn.innerHTML = "Pause";
  } else {
    video.pause();
    btn.innerHTML = "Play";
  }
}
</script>

</body>
</html>
