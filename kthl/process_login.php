<?php session_start();
if(empty($_POST))
{
    //echo 'hi';
    exit;
}

if(empty($_POST['unm'])||empty($_POST['pwd']))
{
    echo "You must enter all fields";
}
//if($_POST['cat']=='employee') //Users
//{


  //  $link=mysqli_connect("localhost","mahesharavind","Aravind@007","kthl")or die("can not connect");
    //echo mysql_error($link);

   // mysqli_select_db($link,"kthl") or die("can not select database");

    require('includes/config.php');    

    $q = "select * from employees where ee_fnm = '".$_POST['unm']."'";

    $res = mysqli_query($link,$q) or die("wrong query");

    $row = mysqli_fetch_assoc($res);


    if(!empty($row))
    {
        if($_POST['pwd']==$row['ee_pwd'])
        {
            //login
            $_SESSION = array();

            $_SESSION['unm']=$row['ee_fnm'];
            $_SESSION['eeid']=$row['ee_id'];
           // $_SESSION['cat']='employee';
            $_SESSION['status']=1;
           // $_SESSION['employee']=1;

            header("location:jobs.php");
        }
        else
        {
            echo "Wrong Password";
        }
    }
    else
    {
        echo "No Such User";
    }

//}

?>