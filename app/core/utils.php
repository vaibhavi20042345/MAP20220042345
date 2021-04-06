<?php
function check_permissions()
{	
	if($_SESSION[permissions][role] !='admin')
	{
 		
	 if($_SESSION[permissions][role] !='manager')
		{
			if($_SESSION[permissions][role] != $_SESSION[controller])
		 	{ 
				$_SESSION['page']  = $_SESSION[controller];
			   header('Location: /');
		 	}
		}
		else
		{
			if($_SESSION[controller]!="manager" && $_SESSION[controller]!="staff")
			{
				$_SESSION['page']  = $_SESSION[controller];
				 header('Location: /');
			}
			else
	{
		$_SESSION['page'] ==null;
	}
		}
	}
	else
	{
		$_SESSION['page'] ==null;
	}
}

?>