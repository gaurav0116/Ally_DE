<!DOCTYPE html
	PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>Search Alumni</title>
	<link rel="stylesheet" href="css/index.css" />
	<?php
include_once"setting/search_navigation.php";
?>
</head>
<?php
include_once "connect_database.php";
?>
<style>
	.dropbtn {
		background-color: white;
		color: #red;
		padding: 5px 116px;
		font-size: 15px;
		cursor: pointer;
	}

	input.i1 {
		padding: 3px 119px;
		font-size: 20px;
	}
</style>

<body>
<form action="search_result2.php" method="post">
		<center>
			<width="450" style="border:hidden;font-size:25px"> Search Via Anyone of the following:
		</center>
		<table width="710" align="center" style="border:2px hidden;" cellspacing="20">
			
			<!-- Name -->
			<tr>
				<th align="left" width="450" style="border:hidden;font-size:18px">Name </th>
				<td width="450" style="border:hidden"><input size="45" type="text" name="pid" /></td>
			</tr>

			<tr>
				<th align="left" width="450" style="border:hidden;font-size:18px"> </th>
				<td width="450" style="border:hidden;font-size:15px">OR</td>
			</tr>

			<!-- Registration number -->
			<tr>
				<th align="left" width="450" style="border:hidden;font-size:18px">Registration Number </th>
				<td width="450" style="border:hidden"><input size="45" type="text" name="aid" /></td>
			</tr>
			<tr>
				<th align="left" width="450" style="border:hidden;font-size:18px"> </th>
				<td width="450" style="border:hidden;font-size:15px">OR</td>
			</tr>

			<!-- Branch -->
			<tr>
				<th align="left" width="450" style="border:hidden;font-size:18px">Branch </th>
				<td width="450" style="border:hidden">
					<select class="dropbtn" name="pp">
						<option value="">Select</option>
						<option>CSE</option>
						<option>EC</option>
						<option>EE</option>
						<option>MECH</option>
						<option>CIVIL</option>
				</td>
			</tr>
			<tr>
				<th align="left" width="450" style="border:hidden;font-size:18px"> </th>
				<td width="450" style="border:hidden;font-size:15px">OR</td>
			</tr>

			<!-- Session year -->
			<tr>
				<th align="left" width="450" style="border:hidden;font-size:18px">Session </th>
				<td width="450" style="border:hidden">
					<select class="dropbtn" name="sp">
						<option value="">Select</option>
						<option>2005-2009</option>
						<option>2006-2010</option>
						<option>2007-2011</option>
						<option>2008-2012</option>
						<option>2009-2013</option>
						<option>2010-2014</option>
						<option>2011-2015</option>
						<option>2012-2016</option>
						<option>2013-2017</option>
						<option>2014-2018</option>
						<option>2015-2019</option>
						<option>2016-2020</option>
				</td>
			</tr>
			<tr>
				<th align="left" width="450" style="border:hidden;font-size:18px"> </th>
				<td width="450" style="border:hidden;font-size:15px">OR</td>
			</tr>

			<!-- Company name  -->
			<tr>
				<th align="left" width="450" style="border:hidden;font-size:18px">Company Name : </th>
				<td width="450" style="border:hidden"><input size="45" type="text" name="cname" onkeyup="this.value = this.value.toUpperCase();"/></td>
			</tr>
			<tr>
				<th align="left" width="450" style="border:hidden;font-size:18px"> </th>
				<td width="450" style="border:hidden;font-size:15px">OR</td>
			</tr>

			<!-- company position -->
			<tr>
				<th align="left" width="450" style="border:hidden;font-size:18px">Position in company : </th>
				<td width="450" style="border:hidden">
					<select class="dropbtn" name="position">
					<option value="">Select</option>
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
				</td>
			</tr>

			<tr>
			<td colspan=2 align="center" style="border:hidden"><button type="submit" name="addpayment">Submit</button>
			</td>
			</tr>
		</table>
	</form>

</html>