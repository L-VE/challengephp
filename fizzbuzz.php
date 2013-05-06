
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php

	for($i = 1; $i <=100; $i++ )
	{
		if($i % 3 == 0)
		{
			echo "<div class='fizz'>Fizz</div>";
		}
		else if ($i % 5 == 0)
		{
			echo "<div class='buzz'>Buzz</div>";
		}
		if($i % 3 == 0 && $i % 5 == 0){
			echo "<div class='fizzbuzz'>fizzbuzz</div>";}
		else
		{
			echo $i . " </br>";
		}
	}
?>
</body>
</html>