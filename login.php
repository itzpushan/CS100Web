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
        		exit(1);
        	}
        	else
        	{
        		continue;
        	}
        	
	}
	echo "Login Failed! Invalid Credentials" 
?>

</html>
