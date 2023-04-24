<html>
<body></body>

<?php
	$uname=$_POST["usrn"];
	$pass=$_POST["pass"];
	
	$file=fopen("userinfo.txt","r");
	
	while(!feof($file))
	{
		$line=fgets($file);
        	$y=explode(" ",$line);
        	if($y[2]==$uname && $y[4]==$pass)
        	{	
        		echo"Login successfull";
        		break;
        	}
        	else
        	{
        		echo"Login failed. Check you username & password";
        		break;
        	}
	}
?>

</html>
