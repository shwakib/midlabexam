<?php
		
		session_start();

	if(isset($_REQUEST['signup']))
	{
		$data=$_REQUEST['uid']|$_REQUEST['upassword']|$_REQUEST['cupassword']|$_REQUEST['uname']|$_REQUEST['usertype'];
		echo $data;
	}
		

		


?>