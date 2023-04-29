<html>
<body></body>

<?php
    $uname=$_POST["usrn"];
    $pass=$_POST["pass"];
    $place=$_POST["place"];
    $rating=$_POST["rating"];

    $file=fopen("userinfo.txt","r");
	
    while(!feof($file))
    {
	$line=fgets($file);
        $y=explode(" ",$line);
        if($y[2]==$uname && $y[4]==$pass)
        {
            $fil=fopen("feedbackinfo.txt","a+");
            while(!feof($fil))
            {
                $lin=fgets($fil);
        	$z=explode(" ",$lin);
                if($z[0]==$uname && $z[1]==$pass && $z[2]==$place)
                {
                    echo"You have already responded for this place.";
                    exit(1);
                }
                else
                {
                    continue;
                }
            }
            $p=$uname." ".$pass." ".$place." ".$rating."\n";
            fwrite($fil,$p);
            fclose($fil);
            echo ("Your feedback has been noted. Thanks for your response.");
            /*if($place == "a1")
            {
            	echo ("A1 is coming");
            }*/
            if($place=="a1")
            {
            	$f1=fopen("Breview.txt","r");
            	$l1=fgets($f1);
        	$r1=explode(" ",$l1);
        	$r11=$r1[0];
        	$r12=$r1[1];
        	fclose($f1);
        	
            	if($rating=="one")
            	{
            		$fa1=fopen("Breview.txt","w");
            		$r11=(($r11*$r12)+1)/($r12+1);
            		$r12=$r12+1;
            		$q=$r11." ".$r12."\n";
            		fwrite($fa1,$q);
            		fclose($fa1);
            	}
            	else if($rating=="two")
            	{
            		$fb1=fopen("Breview.txt","w");
            		$r11=(($r11*$r12)+2)/($r12+1);
            		$r12=$r12+1;
            		$q=$r11." ".$r12."\n";
            		fwrite($fb1,$q);
            		fclose($fb1);
            	}
            	else if($rating=="three")
            	{
            		$fc1=fopen("Breview.txt","w");
            		$r11=(($r11*$r12)+3)/($r12+1);
            		$r12=$r12+1;
            		$q=$r11." ".$r12."\n";
            		fwrite($fc1,$q);
            		fclose($fc1);
            	}
            	else if($rating=="four")
            	{
            		$fd1=fopen("Breview.txt","w");
            		$r11=(($r11*$r12)+4)/($r12+1);
            		$r12=$r12+1;
            		$q=$r11." ".$r12."\n";
            		fwrite($fd1,$q);
            		fclose($fd1);
            	}
            	else
            	{
            		$fe1=fopen("Breview.txt","w");
            		$r11=(($r11*$r12)+5)/($r12+1);
            		$r12=$r12+1;
            		$q=$r11." ".$r12."\n";
            		fwrite($fe1,$q);
            		fclose($fe1);
            	}
            }
            
            else if($place=="a2")
            {
            	$f1=fopen("Creview.txt","r");
            	$l1=fgets($f1);
        	$r1=explode(" ",$l1);
        	$r11=$r1[0];
        	$r12=$r1[1];
        	fclose($f1);
        	
            	if($rating=="one")
            	{
            		$fa1=fopen("Creview.txt","w");
            		$r11=(($r11*$r12)+1)/($r12+1);
            		$r12=$r12+1;
            		$q=$r11." ".$r12."\n";
            		fwrite($fa1,$q);
            		fclose($fa1);
            	}
            	else if($rating=="two")
            	{
            		$fb1=fopen("Creview.txt","w");
            		$r11=(($r11*$r12)+2)/($r12+1);
            		$r12=$r12+1;
            		$q=$r11." ".$r12."\n";
            		fwrite($fb1,$q);
            		fclose($fb1);
            	}
            	else if($rating=="three")
            	{
            		$fc1=fopen("Creview.txt","w");
            		$r11=(($r11*$r12)+3)/($r12+1);
            		$r12=$r12+1;
            		$q=$r11." ".$r12."\n";
            		fwrite($fc1,$q);
            		fclose($fc1);
            	}
            	else if($rating=="four")
            	{
            		$fd1=fopen("Creview.txt","w");
            		$r11=(($r11*$r12)+4)/($r12+1);
            		$r12=$r12+1;
            		$q=$r11." ".$r12."\n";
            		fwrite($fd1,$q);
            		fclose($fd1);
            	}
            	else
            	{
            		$fe1=fopen("Creview.txt","w");
            		$r11=(($r11*$r12)+5)/($r12+1);
            		$r12=$r12+1;
            		$q=$r11." ".$r12."\n";
            		fwrite($fe1,$q);
            		fclose($fe1);
            	}
            }
            
            else if($place=="a3")
            {
            	$f1=fopen("Kreview.txt","r");
            	$l1=fgets($f1);
        	$r1=explode(" ",$l1);
        	$r11=$r1[0];
        	$r12=$r1[1];
        	fclose($f1);
        	
            	if($rating=="one")
            	{
            		$fa1=fopen("Kreview.txt","w");
            		$r11=(($r11*$r12)+1)/($r12+1);
            		$r12=$r12+1;
            		$q=$r11." ".$r12."\n";
            		fwrite($fa1,$q);
            		fclose($fa1);
            	}
            	else if($rating=="two")
            	{
            		$fb1=fopen("Kreview.txt","w");
            		$r11=(($r11*$r12)+2)/($r12+1);
            		$r12=$r12+1;
            		$q=$r11." ".$r12."\n";
            		fwrite($fb1,$q);
            		fclose($fb1);
            	}
            	else if($rating=="three")
            	{
            		$fc1=fopen("Kreview.txt","w");
            		$r11=(($r11*$r12)+3)/($r12+1);
            		$r12=$r12+1;
            		$q=$r11." ".$r12."\n";
            		fwrite($fc1,$q);
            		fclose($fc1);
            	}
            	else if($rating=="four")
            	{
            		$fd1=fopen("Kreview.txt","w");
            		$r11=(($r11*$r12)+4)/($r12+1);
            		$r12=$r12+1;
            		$q=$r11." ".$r12."\n";
            		fwrite($fd1,$q);
            		fclose($fd1);
            	}
            	else
            	{
            		$fe1=fopen("Kreview.txt","w");
            		$r11=(($r11*$r12)+5)/($r12+1);
            		$r12=$r12+1;
            		$q=$r11." ".$r12."\n";
            		fwrite($fe1,$q);
            		fclose($fe1);
            	}
            }
            
            else if($place=="a4")
            {
            	$f1=fopen("Mreview.txt","r");
            	$l1=fgets($f1);
        	$r1=explode(" ",$l1);
        	$r11=$r1[0];
        	$r12=$r1[1];
        	fclose($f1);
        	
            	if($rating=="one")
            	{
            		$fa1=fopen("Mreview.txt","w");
            		$r11=(($r11*$r12)+1)/($r12+1);
            		$r12=$r12+1;
            		$q=$r11." ".$r12."\n";
            		fwrite($fa1,$q);
            		fclose($fa1);
            	}
            	else if($rating=="two")
            	{
            		$fb1=fopen("Mreview.txt","w");
            		$r11=(($r11*$r12)+2)/($r12+1);
            		$r12=$r12+1;
            		$q=$r11." ".$r12."\n";
            		fwrite($fb1,$q);
            		fclose($fb1);
            	}
            	else if($rating=="three")
            	{
            		$fc1=fopen("Mreview.txt","w");
            		$r11=(($r11*$r12)+3)/($r12+1);
            		$r12=$r12+1;
            		$q=$r11." ".$r12."\n";
            		fwrite($fc1,$q);
            		fclose($fc1);
            	}
            	else if($rating=="four")
            	{
            		$fd1=fopen("Mreview.txt","w");
            		$r11=(($r11*$r12)+4)/($r12+1);
            		$r12=$r12+1;
            		$q=$r11." ".$r12."\n";
            		fwrite($fd1,$q);
            		fclose($fd1);
            	}
            	else
            	{
            		$fe1=fopen("Mreview.txt","w");
            		$r11=(($r11*$r12)+5)/($r12+1);
            		$r12=$r12+1;
            		$q=$r11." ".$r12."\n";
            		fwrite($fe1,$q);
            		fclose($fe1);
            	}
            }
            
            
            exit(1);
        }
        else
        {
            continue;
        }
    }
    echo"Wrong credentials";
?>

</html>
