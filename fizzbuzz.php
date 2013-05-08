
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>The FizzyBuzz</title>

<link rel="stylesheet" href="style.css" media="screen">
<link rel="stylesheet" href="normalize.css" media="all">

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.3/jquery.min.js"></script>
<script>!window.jQuery && document.write('<script src="Raptorize-Kit/jquery-1.4.3.min.js"><\/script>')</script>
<script src="Raptorize-Kit/jquery.raptorize.1.0.js"></script>
<script type="text/javascript">
     $(window).load(function() {
          $('.myButton').raptorize();
     });
</script>

</head>

<body>
<button class="myButton">UNLEASH THE RAPTOR IN YOU</button></br>
<?php

	for($i = 1; $i <=100; $i++ )
	{if($i % 3 == 0 && $i % 5 == 0){
			echo "<div id='fizzbuzz'>fizzbuzz</div>";}
		else if($i % 3 == 0)
		{
			echo "<div id='fizz'>Fizz</div>";
		}
		
		else if ($i % 5 == 0)
		{
			echo "<div id='buzz'>Buzz</div>";
		}
		
		else
		{
			echo $i . " </br>";
		}
	}
?>
</body>
</html>
