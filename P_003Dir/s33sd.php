<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>ASD233sR33</title>
    <link rel="stylesheet" href="../P_123SDD/style.css">

  </head>
  <body>

    <p class="yee"><a href="../Puzzel%20index/index.php">I got it.</a></p>

    <video autoplay muted id="myVideo">
  <source src="asdasd.mp4" type="video/mp4">
</video>


    <audio autoplay id="myAudio">
      <source src="morsss.wav" type="audio/wav">
    </audio>

  </body>
  <script>
    var audioControl = document.getElementById("myAudio");
    audioControl.onended = function(){
      this.currentTime = 0;
    var delay = setTimeout(function(){
      audioControl.play();
      clearTimeout(delay);
    }, 5000);
    }

    var videoControl = document.getElementById("myVideo");
    videoControl.onended = function(){
      this.currentTime = 0;
    var delay = setTimeout(function(){
      videoControl.play();
      clearTimeout(delay);
    }, 3500);
    }
    </script>
</html>
