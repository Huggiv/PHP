<?php 
//$link=mysqli_connect("localhost","mahesharavind","Aravind@007","kthl")or die("can not connect");
$link=mysqli_connect("localhost","root","","kthl")or die("can not connect");

mysqli_select_db($link,"kthl") or die("can not select database");

	
?>