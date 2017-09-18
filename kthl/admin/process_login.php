<?php session_start();
if(empty($_POST))
{
	exit;
}

if(empty($_POST['unm'])||empty($_POST['pwd']))
{
	echo "You must enter all fields";
}
//if($_POST['cat']=='employee')
//{


	$link=mysqli_connect("localhost","root","","riddhi")or die("can not connect");

    mysqli_select_db($link,"riddhi") or die("can not select database");

	$q = "select * from employees where ee_fnm = '".$_POST['unm']."'";

	$res = mysqli_query($link,$q) or die("wrong query");

	$row = mysqli_fetch_assoc($res);




	$link=mysqli_connect("localhost","root","","riddhi")or die("can not connect");
        mysqli_select_db($link,"riddhi") or die("can not select database");
	
	$q = "select * from employers where er_fnm = '".$_POST['unm']."'";
	
	$res = mysqli_query($link,$q) or die("wrong query");

	$row = mysqli_fetch_assoc($res);
	
	
	if(!empty($row))
	{
		if($_POST['pwd']==$row['er_pwd'])
		{
			//login
			$_SESSION = array();
			
			$_SESSION['unm']=$row['er_fnm'];
			$_SESSION['eid']=$row['er_id'];
			//$_SESSION['cat']='employer';
			$_SESSION['status']=1;
			//$_SESSION['employer']=1;
			header("location:index.php");
		}
		else
		{
			echo "Wrong Password .";
		}
	}
	else
	{
		echo "No Such User";
	}
	
	
//}
?>