<?php
	if(empty($_GET))
	{
		header("location:index.php");
	}
	
	//$link=mysqli_connect("localhost","mahesharavind","Aravind@007","kthl")or die("can not connect");
	
	//mysqli_select_db($link,"kthl") or die("can not select database");
	require('includes/config.php');    

		$q="delete from jobs where j_id=".$_GET['id'];

		mysqli_query($link,$q);
		
		header("location:manage.php");	
?>