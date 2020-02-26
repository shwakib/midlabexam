<?php
	
	session_start();

	if(isset($_REQUEST['login']))
	{
		$id=$_REQUEST['uidl'];
		$password=$_REQUEST['upasswordl'];

		if(empty(trim($id)) || empty(trim($password)))
		{
			echo "Null Submission found";
		}
		else
		{
			$file=fopen('userverify.txt', 'r');
			$user=fread($file,filesize('userverify.txt'));
			$data=explode('|', $user);

			if(trim($data[0])==$id && trim($data[1])==$password)
			{
				$_SESSION['id']=$id;
				$_SESSION['password']=$password;
				if (trim($data[2])=='admin')
				{
					header("location:adminhome.php");
				}
				else
				{
					header("location:userhome.php");
				}
			}
			else
			{
				echo "Invalid username";
				// header("location:Login.php");
			}
		}

	}
	else
	{
		header("location:Login.php");
	}

?>