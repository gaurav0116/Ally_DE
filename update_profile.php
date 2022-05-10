<?php
session_start();
if (!isset($_SESSION['id'])){
	header("location:login.html");
}
else
{
	$userid=$_SESSION['id'];
$alusername=$_SESSION['alname'];
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" conten="text/html; charset=utf-8" />
<title>Update Profile</title>
<link rel="stylesheet" href="css/update_profile.css" />
</head>

<body>
<?php 
include_once"connect_database.php";
include_once"setting/updateprofile_navigation.php";
?>
<div>
<br /><br />
<h2>Update Profile</h2>
<br />
<form method="post" name="profile" enctype="multipart/form-data">
<table class="updatetable1" cellspacing="20px" align="center">
  <tr>
    <th>Address:</th>
    <td class="updatetd1"><textarea name="address" cols="40" rows="6"></textarea></td>
  </tr>
  <tr>
    <th>Mobile Number:</th>
    <td class="updatetd1"><input type="text" name="contact" size="38" maxlength="10" pattern="[0-9]{10}"required></td>
  </tr>
  <tr>
	<th>Company:</th>
	<td class="updatetd1"><input type="text" name="comp" size="38" onkeypress="return ((event.charCode > 64 && event.charCode < 91) || (event.charCode > 96 && event.charCode < 123) || event.charCode == 8 || event.charCode == 32 || (event.charCode >= 48 && event.charCode <= 57));" onkeyup="this.value = this.value.toUpperCase();"/></td>
  </tr>

  <!-- position -->

  <tr>
	<th>Position in company:</th>
	<td class="updatetd1">
		<select name="position" class="select">
			<option>Select</option>
			<option>Softwere engineer</option>
			<option>Machine learning engineer</option>
			<option>Data Scientist</option>
			<option>Full stack engineer</option>
			<option>Front-end developer</option>
			<option>Backend developer</option>
			<option>Database engineer</option>
			<option>Android developer</option>
			<option>IOS developer</option>
			<option>Web developer</option>
			<option>UI/UX designer</option>
		</select>
	</td>
  </tr>

  <tr>
    <th>Email:</th>
	<td class="updatetd1"><input type="email" name="email" size="38" /></td>
  </tr>
  <tr>
    <th>Session:</th>
	<td><select class="select" name="batch">
				<option>Select</option>							
				<option>2011-2015</option>
				<option>2012-2016</option>
				<option>2013-2017</option>
				<option>2014-2018</option>
				<option>2015-2019</option>
				<option>2016-2020</option>
				<option>2017-2021</option>
				<option>2018-2022</option>
				<option>2019-2023</option>
				<option>2020-2024</option>
			</select></td>
  </tr>
  <tr>
    <th>Branch:</th>
    <td><select class="select" name="prog" >						
				<option>CSE</option>
				<option>EC</option>
				<option>EE</option>
				<option>MECH</option>
				<option>CIVIL</option>
			</select></td>
  </tr>
  <tr>
    <th>Profile Picture:</th>
    <td class="updatetd1"><input type="file" name="pp" size="38" /></td>
  </tr>
  <tr>
    <td class="updatetd1" colspan="2" align="right">
	<button class="updatebt" type="submit" name="update" onclick="check()">Update</button></td>
  </tr>
</table>
</form>
</div>
<br /><br /><br /><br /><br /><br />
<?php
if(isset($_POST['update']))
{
	
	$gender=$_POST['gender'];
	$address=$_REQUEST['address'];
	$contact=$_REQUEST['contact'];
	$email=$_REQUEST['email'];
	$batch=$_REQUEST['batch'];
	$prog=$_REQUEST['prog'];
	$comp=$_REQUEST['comp'];
	$position=$_REQUEST['position'];
	$pp=addslashes(file_get_contents($_FILES['pp']['tmp_name']));
	
	
	if( $address=="" && $contact==""&& $comp=="" && $email=="" && $batch=="" && $prog=="" && $position==""  && $gender=="" && $pp==false)
	{
		echo "<script>alert('Empty field. No update made.');</script>";		
	}
	else
	{
		
		if($gender!="")
		{
			$sql1 = "UPDATE alumniinfo SET pi_gender='".$gender."' WHERE pi_register='$userid'";
			$result1 = $conn->query($sql1); 
		}
		if($address!="")
		{
			$sql2 = "UPDATE alumniinfo SET pi_address='".$address."' WHERE pi_register='$userid'";
			$result2 = $conn->query($sql2); 
		}
		if($contact!="")
		{
			$sql3 = "UPDATE alumniinfo SET pi_mobile='".$contact."' WHERE pi_register='$userid'";
			$result3 = $conn->query($sql3); 
		}
		if($email!="")
		{
			$sql4 = "UPDATE alumniinfo SET pi_email='".$email."' WHERE pi_register='$userid'";
			$result4 = $conn->query($sql4); 
		}
		if($batch!="")
		{
			$sql5 = "UPDATE alumniinfo SET pi_session='".$batch."' WHERE pi_register='$userid'";
			$result5 = $conn->query($sql5); 
		}
		if($prog!="")
		{
			$sql6 = "UPDATE alumniinfo SET pi_branch='".$prog."' WHERE pi_register='$userid'";
			$result6 = $conn->query($sql6);
		}
		if($position!=""){
			$sql7 = "UPDATE alumniinfo SET pi_position='".$position."' WHERE pi_register='$userid'";
			$result7 = $conn->query($sql7);
		}

		if($pp==true)
		{
			$sql8 = "UPDATE alumniinfo SET pi_picture='".$pp."' WHERE pi_register='$userid'";
			$result8 = $conn->query($sql8); 
		}	
		if($comp==true)
		{
			$sql9 = "UPDATE alumniinfo SET pi_company='".$comp."' WHERE pi_register='$userid'";
			$result9 = $conn->query($sql9 ); 
		}	
		if($result1==true || $result2==true || $result3==true || $result4==true || $result5==true || 
		$result6==true || $result7==true || $result8==true || $result9==true)
		{
			echo "<script>alert('Update Success.');</script>";
		}
		else
		{
			echo "Fail";	
		}
	}
}
?>
</body>
<script>
	function check(){
	var phoneno=/^\d{10}$/;
	var my=document.getElementById('mobile')
	if(my.value.match(phoneno))
	{
		return true;
	}
	else
	{
		alert ("ENTER VALID MOBILE NUMBER");
		return false;
	}
	}
</script>
</html>