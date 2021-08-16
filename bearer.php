<?php

if ($_SERVER['REQUEST_METHOD']=='POST'){
	$myrealkey="ELMAR";// my real bearer token
preg_match('/Bearer\s(\S+)/', $_SERVER['HTTP_AUTHORIZATION'], $matches);
if ($myrealkey!==$matches[1]) {
    // /Bearer\s((.*)\.(.*)\.(.*))/
    //
    header('HTTP/1.0 400 Bad Request');
    print_r ('Token not found in request ');
    exit;
}else{
	echo 'Your recieved key same ='.$matches[1];

}
}else{
	
	echo "Welcome just to homepage";
}
