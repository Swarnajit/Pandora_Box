<!DOCTYPE html>
<html>
<head>
<style>
.buttons { position: fixed; bottom: 0; margin:0 auto 20px auto; padding:20px; float:left; display:block; background-color:transparent; border-radius:4px; }
		.button { padding:10px 20px; font-weight:bold; letter-spacing:5px; outline:none; cursor:pointer; color:white; background-color:#7F8C8D; border:none; border-radius:4px; }
		#play-button { background-color:transparent; }
		#play-button:hover { background-color:#f1f1f1; }
		#pause-button { background-color:transparent; }
		#pause-button:hover { background-color:#f1f1f1; }
		#stop-button { background-color:transparent; }
		#stop-button:hover { background-color:#f1f1f1; }
		#pause-button, #stop-button { margin-left:15px; }
		iframe { margin:0 auto; width:560px; height:315px; float:left; clear:both; display:block; background-color:#eee; }

* { box-sizing: border-box; }
.video-background {
  background: #000;
  position: fixed;
  top: 0; right: 0; bottom: 0; left: 0;
  z-index: -99;
}
.video-foreground,
.video-background iframe {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  pointer-events: none;
}
#vidtop-content {
	top: 0;
	color: #fff;
}
.vid-info { position: absolute; bottom: 5%; right: 0; background: rgba(0,0,0,0.3); color: #fff; padding: 1rem; font-family: Avenir, Helvetica, sans-serif; }
.vid-info h1 { font-size: 2rem; font-weight: 700; margin-top: 0; line-height: 1.2; }
.vid-info a { display: block; color: #fff; text-decoration: none; background: rgba(0,0,0,0.5); transition: .6s background; border-bottom: none; margin: 1rem auto; text-align: center; }
@media (min-aspect-ratio: 16/9) {
  .video-foreground { height: 300%; top: -100%; }
}
@media (max-aspect-ratio: 16/9) {
  .video-foreground { width: 300%; left: -100%; }
}
@media all and (max-width: 600px) {
.vid-info { width: 50%; padding: .5rem; }
.vid-info h1 { margin-bottom: .2rem; }
}
@media all and (max-width: 500px) {
.vid-info .acronym { display: none; }
}
#writingStyle {
    font-family: Arial;
    font-size: 75px;
    font-weight: 50;
    padding-bottom: 75px;
    color: whitesmoke;
    
}
</style>
</head>
<body>
<div class="buttons">
    <div id="writingStyle">Bound 2 ~ Kenye West</div>
    <button class="button" id="play-button"><img src="Video/149125.png" width="100"/></button>
    <button class="button" id="pause-button"><img src="Video/Pause-icon.png" width="100"/></button>
    <button class="button" id="stop-button"><img src="Video/109432.png" width="100"/></button>
	</div>

	<!-- Make sure ?enablejsapi=1 is on URL -->
<div class="video-background">
    
    <div class="video-foreground">
 <iframe id="video" class="youtube-video" width="560" height="315" src="https://www.youtube.com/embed/BBAtAM7vtgc?rel=0&enablejsapi=1&version=3&playerapiid=ytplayer&autoplay=1" frameborder="0" allowfullscreen></iframe>

</div>
</div>
<script>
// global variable for the player
	var player;

	// this function gets called when API is ready to use
	function onYouTubePlayerAPIReady() {
	  // create the global player from the specific iframe (#video)
	  player = new YT.Player('video', {
	    events: {
	      // call this function when player is ready to use
	      'onReady': onPlayerReady,
              'onStateChange': onPlayerStateChange
	    }
	  });
	}
function onPlayerStateChange(evt) {
    if (evt.data == YT.PlayerState.ENDED){
        //done=true;
        //console.log("Ended called!");
        //alert("Video Ended");
        document.getElementById("writingStyle").innerHTML="Hero ~ Enrique";
        player.loadVideoById({'videoId': 'koJlIGDImiU'});
    }       
    if (evt.data == YT.PlayerState.PAUSED) {
       //alert("Video Paused");
       
    }

}
	function onPlayerReady(event) {
	  
	  // bind events
	  var playButton = document.getElementById("play-button");
	  playButton.addEventListener("click", function() {
	    player.playVideo();
	  });
	  
	  var pauseButton = document.getElementById("pause-button");
	  pauseButton.addEventListener("click", function() {
	  player.pauseVideo();
	  });

	  var stopButton = document.getElementById("stop-button");
	  stopButton.addEventListener("click", function() { 
          player.loadVideoById({'videoId': 'koJlIGDImiU'});
          document.getElementById("writingStyle").innerHTML="Hero ~ Enrique";
          //player.stopVideo();
	  //document.getElementById("video").innerHTML="dfsdbfsdbfndbfnb";
	  });
	  
	}

	// Inject YouTube API script
	var tag = document.createElement('script');
	tag.src = "https://www.youtube.com/player_api";
	var firstScriptTag = document.getElementsByTagName('script')[0];
	firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);
</script>

</body>
</html>


