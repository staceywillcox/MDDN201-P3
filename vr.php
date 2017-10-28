<?php
   /** 
   Template Name: VR
   */ 
   ?> 

<!DOCTYPE html>
<html>

	<head>
		<?php wp_head() ?>
	</head>

<body id="vrpage">
<div id="vrshade">

<a href="http://localhost/201tutorial/preview/"><h3>BACK TO PREVIEW</h3></a>
	<div id="vrtext">
		<h1>Please put on your VR headset</h1>
		<h2>Your VR Dream/Nightmare will begin in <span id="countdowntimer">10 </span> seconds</h2>
	</div>
</div>
<script type="text/javascript">
    var timeleft = 10;
    var downloadTimer = setInterval(function(){
    timeleft--;
    document.getElementById("countdowntimer").textContent = timeleft;
    if(timeleft <= 0)
        clearInterval(downloadTimer);
    },1000);
</script>
	<?php wp_footer(); ?>

	</body>
</html>