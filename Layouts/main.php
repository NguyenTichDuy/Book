<?php 
	$page = "";
	if (isset($_REQUEST["page"]))
	{
		$page=$_REQUEST["page"];			
		switch($page)
		{
			case "home":
			    include_once("Modules/Common/home.php");
				break;
			case "newdetail":
				include_once("Modules/News/newdetail.php");
				break;	
		}
	}
	else
		 include_once("Modules/News/new.php");
?> 