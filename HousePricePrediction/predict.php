<?php

//recieve post request
$lotsize=$_POST["lotsize"];
$bathrms=$_POST["bathrms"];
$driveway=$_POST["driveway"];
$recroom=$_POST["recroom"];
$fullbase=$_POST["fullbase"];
$lotsize=$_POST["lotsize"];
$gashw=$_POST["gashw"];
$airco=$_POST["airco"];
$garagepl=$_POST["garagepl"];
$prefarea=$_POST["prefarea"];
$stories_four=$_POST["stories_four"];
$stories_one=$_POST["stories_one"];
$stories_three=$_POST["stories_three"];

//send these inputs to house_model.py
//system is used to execute terminal based commands

system('C:\Users\"\deepti bhatia"\\AppData\Local\Programs\Python\Python37\python.exe house_model.py '.$lotsize.' '.$bathrms.' '.$driveway.' '.
$recroom.' '.$fullbase.' '.$gashw.' '.$airco.' '.$garagepl.' '.
$prefarea.' '.$stories_four.' '.$stories_one.' '.$stories_three.' 2<&1');  

?>