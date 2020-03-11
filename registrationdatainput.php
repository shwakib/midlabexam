<?php
		
		session_start();

	if(isset($_REQUEST['signup']))
	{
		if(empty($_REQUEST['uid'])||empty($_REQUEST['upassword'])||empty($_REQUEST['cupassword'])||empty($_REQUEST['uname'])||empty($_REQUEST['usertype']))
		{
			echo "Field Cannot be empty";
			header("location:Registration.php");
		}
		else
		{
			if($_REQUEST['upassword']==$_REQUEST['cupassword'])
			{
				$id=$_REQUEST['uid'];
				$password=$_REQUEST['cupassword'];
				$name=$_REQUEST['uname'];
				$type=$_REQUEST['usertype'];

				$myfile=fopen('userverify.txt', 'a');
				fwrite($myfile,"$id|$password|$name|$type\r\n");
				fclose($myfile);
				header("location:Login.php");
			}
			else
			{
				echo "Password didnot match";
			}
		}
	}
	else
	{
		header("location:Registration.php");
	}
		

		


?>