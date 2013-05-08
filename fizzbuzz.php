
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>The FizzyBuzz</title>

<link rel="stylesheet" href="style.css" media="screen">
<link rel="stylesheet" href="normalize.css" media="all">


</head>

<body>

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
