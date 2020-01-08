<?php

const STR = '.....Belle marquise , vos beaux yeux , d\'amour , me font mourir !-----';
echo PHP_EOL;
echo PHP_EOL;
echo strlen(STR);
echo PHP_EOL;
echo "First Char:",STR[0];
echo PHP_EOL;
echo "9th char :", STR[8];
echo PHP_EOL;
echo "last char :", STR[strlen(STR)-1];
echo PHP_EOL;
echo "Replacement 1",str_replace(', ' , '-' , STR);
echo PHP_EOL;
echo "Replacement 2",str_replace('marquise' , 'duchesse' , STR);
echo PHP_EOL;
echo "Replacement case insensitive:",str_ireplace('Marquise' , 'duchesse' , STR);
echo PHP_EOL;
echo "Trim :",trim( STR ,".");
echo PHP_EOL;
echo "RTrim :",rtrim(  STR,"-" );
echo PHP_EOL;
echo "LTrim :",ltrim(  STR,"-" );
echo PHP_EOL;
echo "get the type : ",gettype(STR);
echo PHP_EOL;
echo "get the type : ",gettype((string)1);
echo PHP_EOL;
$url = 'http://www.isi-mtl.com/home.php';
echo PHP_EOL;
echo "url : ",$url;
echo PHP_EOL;
echo PHP_EOL;
echo "position of substring com : ",strpos($url,"com");
echo PHP_EOL;
echo PHP_EOL;
echo "position of substring org : ",$res=strpos($url,"org");
echo PHP_EOL;
echo PHP_EOL;
echo "type of it : ",gettype($res);
echo PHP_EOL;
echo PHP_EOL;
if (false !== strpos($url, 'com')) {
echo "Substring com is present in the url.";
 }
 echo PHP_EOL;
echo PHP_EOL;
if (false !== strpos($url, 'org')) {
echo "Substring org is present in the url.";
 }
 else{
	 echo "Substring org is absent in the url.";
 }
 echo PHP_EOL;
echo PHP_EOL;
echo "14 chars starting at pos 5:",substr(STR,5,14);
echo PHP_EOL;
echo PHP_EOL;
echo "to lower case:", strtolower(STR);
echo PHP_EOL;
echo PHP_EOL;
echo "to upper case:",strtoupper(STR);
echo PHP_EOL;
echo PHP_EOL;
echo "Capitalize:",ucfirst($url);
echo PHP_EOL;
echo PHP_EOL;
echo "Thank you!!";