<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Update Profile Navigation</title>
<link rel="stylesheet" href="css/header_navigationbar.css" />
</head>

<body>
<div>
<img src="image/alumni.jpg" width="100%" height="280px"/>
</div>
<div style="padding-top: 5px;">
<table class="table">
<tr>
<td>
<ul class="ul1">
	<div class="dropdown">
	<li class="li_image"><img src="image/logo.jpg" width="68px" height="60px" style="padding-right:20px" /></li>
    </div>
    <div class="dropdown">
    <li class="li1 active"><a href="alumni_home.php"><span class="span1">My Profile</span></a></li>
    <div class="dropdown-content">
    		<a href="update_profile.php">Update Profile</a>
   		</div>
    </div>
    </div>
    <div class="dropdown">
  	<li class="li1"><a href="search_alumni2.php"><span class="span1">Search Alumni</span></a></li>
    </div>
    <li class="li2"><span class="span2"><?php
	echo "Welcome "." ".$alusername;
	?></span>
    <li class="li2"><a href="logout.php"><span class="span1">Logout</span></a></li>
</ul>
</td>
</tr>
</table>
</div>
<button id="updateprofile_totop" onclick="topFunction()"><img src="image/top.jpg" width="50px" height="50px"/></button>
<script src="javascript/updateprofile_totop.js"></script>
</body>
</html>