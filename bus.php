<?php
date_default_timezone_set("Europe/Copenhagen");
$date = date("d.m.Y") ; 
$time = date("H:i") ;
 
$json = file_get_contents("http://xmlopen.rejseplanen.dk/bin/rest.exe/departureBoard?id=461118200&date=$date&time=$time&useTog=0&format=json");
 
 header('Content-type: application/json');

 echo $json; 
?> 
