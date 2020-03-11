<?php
	
	session_start();

	if(isset($_REQUEST['login']))
	{
		

		if(empty($_REQUEST['uidl']) || empty($_REQUEST['upasswordl']))
		{

			echo "Null Submission found";
			header("location:Login.php");
		}
		else
		{
			$id=$_REQUEST['uidl'];
			$password=$_REQUEST['upasswordl'];
			$myfile=fopen('userverify.txt','r');
			while(!feof($myfile))
			{
				$line=fgets($myfile);
				$data=explode('|', $line);
				if($id==$data[0]&&$password==$data[1])
				{
					$_SESSION['id']=$id;
					$_SESSION['password']=$password;
					$_SESSION['name']=$data[2];
					fclose($myfile);
					header("location:userhome.php");
				}
				else
				{
					echo "Password didnot match";
					

				}

			}

			
		}

	}
	else
	{
		header("location:Login.php");
	}

?>