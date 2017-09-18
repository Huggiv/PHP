<?php
        $responseCode = 0;
        $errMessage = "";
	$msg[]= substr($_FILES['resume']['name'],-4);
	
if(!(strtoupper(substr($_FILES['resume']['name'],-4))=='DOCX') && !(strtoupper(substr($_FILES['resume']['name'],-4))=='.PDF'))
	{
		$msg[] = "wrong file type";
	}




	if(empty($_POST))
	{
		$responseCode = 0;
        $errMessage = "Invalid details";
	}
	$msg=array();
	if(empty($_POST['nm'])|| empty($_POST['gender'])|| empty($_POST['email'])|| empty($_POST['addr'])||
	empty($_POST['ph'])|| empty($_POST['mobile'])|| empty($_POST['cl'])|| empty($_POST['cas'])||
	empty($_POST['cindustry'])||empty($_POST['quali'])|| empty($_POST['profile']) || empty($_POST['dob']) || empty($_POST['marry']) || empty($_POST['pwd'] ))

	{
		$msg[]="Field is empty";
	}
	if(strlen($_POST['pwd'])<6)
	{
		$msg[]="please enter atlist 6 digit password";
	}

	if(strlen($_POST['ph'])!=10)
	{

		$msg[]="please enter 10 digit number";

	}
	if(strlen($_POST['mobile'])!=10)
	{
		$msg[]="please enter 10 digit number";
	}
	if(!is_numeric($_POST['cas']))
	{
		$msg[]="only numeric valueis valid";
	}
	if(empty($_FILES['resume']['name']))
	{
		$msg[] = "Plz select a file";
	}

	if($_FILES['resume']['error']>0)
	{
		$msg[] = "error uploading file";
	}

	if(file_exists("uploads/".$_FILES['resume']['name']))
	{
		$msg[] = "this file is already uploaded.";
	}


	if(!(strtoupper(substr($_FILES['resume']['name'],-4))=='DOCX')&& !(strtoupper(substr($_FILES['resume']['name'],-4))=='.PDF'))
	{
		$msg[] = "wrong file type";
	}

	if(empty($msg))
	{
		require('includes/config.php');    
		$nm=$_POST['nm'];
		$gender=$_POST['gender'];
		$email=$_POST['email'];
		$addr=$_POST['addr'];
		$ph=$_POST['ph'];
		$mobile=$_POST['mobile'];
		$cl=$_POST['cl'];
		$cas=$_POST['cas'];
		$cindustry=$_POST['cindustry'];
		$quali=$_POST['quali'];
		$profile=$_POST['profile'];
		$dob=$_POST['dob'];
		$marry=$_POST['marry'];
		$pwd=$_POST['pwd'];
		move_uploaded_file($_FILES['resume']['tmp_name'],"uploads/".$_FILES['resume']['name']);
		$path = "uploads/".$_FILES['resume']['name'];


		$q="insert into employees(ee_dob,ee_marry,ee_resume,ee_pwd,ee_fnm,ee_gender,ee_email,ee_add,ee_phno,ee_mobileno,
		     ee_current_location,ee_annualsalary,ee_current_industry,ee_qualification,ee_profile)
	    values ('$dob','$marry','$path','$pwd','$nm','$gender','$email','$addr','$ph','$mobile','$cl','$cas','$cindustry','$quali','$profile')";

		mysqli_query($link,$q)or die("wrong query");
		//mysqli_close($link);
		
		if (mysqli_query($link, $q)) {
			$responseCode = 1;
                    $errMessage = "Success details";
		} else {
		$responseCode = 0;
                    $errMessage = "Invalid details";
		}
	}
	else
	{
		//$link=mysqli_connect("localhost","root","","riddhi")or die("can not connect");

        //mysqli_select_db($link,"riddhi") or die("can not select database");
		
     }
                
                $retarry['responseCode']=$responseCode;
                $retarry['errMessage']=$errMessage;
                $retarry['msg']=$msg;
                $myJSON = json_encode($retarry);
                echo $myJSON;
		exit;
		//header("location:login.php");
	
?>