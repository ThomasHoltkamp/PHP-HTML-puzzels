<?php
?>
<html>
<head>
    <title>Ontsnapt.wav</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<video id="video" src="oned.mp4" title="Nice meme.ogg" autoplay controls>
    Video not supported
</video>

</body>
</html>
<script type='text/javascript'>
    //redirect after movie
    document.getElementById('video').addEventListener('ended',myHandler,false);
    function myHandler(e) {
        //location
        window.location = "index2.php";
    }
</script>