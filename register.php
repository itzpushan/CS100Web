<?php

$name=$_POST["name"];
$sname=$_POST["sname"];
$uname=$_POST["usrn"];
$email=$_POST["email"];
$pass=$_POST["pass"];
$gndr=$_POST["gender"];

$file=fopen("userinfo.txt","a+");

while(!feof($file))
{
	$line=fgets($file);
        $y=explode(" ",$line);
        if($y[2]==$uname)
        {
        	echo "username already taken";
        	break;
        }
        else if($y[3]==$email)
        {
        	echo "This email has been already registered";
        	break;
        }
        else
        {
        	$d=$name." ".$sname." ".$uname." ".$email." ".$pass." ".$gndr." "."\n";
		fwrite($file,$d);
		fclose($file);
        	echo "Your registration is successful";
        }
}

?>
