<?php

	//setcookie(""mob",$mob,time()-3600");
	setcookie("mob",$mob,time()-3600);
	setcookie("gid",$gid,time()-3600);
	setcookie("vid",$id,time()-3600);
	setcookie("category",$category,time()-3600);

	header("location: index.html");

?>
