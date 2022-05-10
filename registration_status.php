<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Success Registration</title>
</head>

<link rel="stylesheet" href="css/registration_login_status.css" />

<body>
<?php
include_once"connect_database.php"
?>

<?php
if(isset($_REQUEST['register']))
{
	$name=$_REQUEST['pi_name'];
	$gender=$_REQUEST['pi_gender'];
	$registration=$_REQUEST['pi_register'];
	$branch=$_REQUEST['pi_branch'];
	$sessiona=$_REQUEST['pi_session'];
	$email=$_REQUEST['pi_email'];
	$mobile=$_REQUEST['pi_mobile'];
	$password=$_REQUEST['pi_password'];
	
	
	if ($name=='' || $gender=='' || $registration==""|| $branch=='' || $sessiona=="" || $password=="")
	{
		echo "<br><br>";
		echo "Incomplete information. Please try again.";
		echo "<br/><br/>"; 
		echo "Redirecting you back to main page in 5 seconds.";
		echo "<br/><br/>"; 
		echo "Or click <a href=index.php>here.</a>";
		header("refresh:5;url=index.php" );
	}
	else
	{
		$al_status="Approve";
		$register_sql = "INSERT INTO alumnimember (pi_register, al_password) 
		VALUES ('$registration', '$password')";

		if ($conn->query($register_sql) === TRUE) 
		{
			$register_sql = "INSERT INTO alumniinfo (pi_name,pi_gender,pi_register,pi_branch,pi_session,pi_email,pi_mobile) 
			VALUES ('$name', '$gender', '$registration','$branch', '$sessiona','$email', '$mobile')";
			$conn->query($register_sql);
	    	echo "<br><br>";
			echo "Registration successful. ";
			echo "<br/><br/>"; 
			if(isset($_REQUEST['register'])) {
			   $mailto = "alumniconnect09@gmail.com";
			   $name = $_POST['pi_name'];
			   $fromEmail = $_POST['pi_email'];
			   $phone = $_POST['pi_mobile'];
			   $subject = "New Alumni";
			   $subject2 = "Confirmation | Alumni"; 

			   $message = "Client Name: ".$name."\n"."Phone Number: ".$phone."\n"."Email Id: ".$fromEmail."\n";

			   $message2 = "Dear ".$name."\n"."Thank you for contacting us. You have Successfully registered with Alumni"."\n\n"."Regards,"."\n"."- Alumni";
			   
			   $headers = "From: ".$fromEmail; 
			   $headers2 = "From: ".$mailto; 
			   
				$result1 = mail($mailto, $subject, $message, $headers);
				$result2 = mail($fromEmail, $subject2, $message2, $headers2);

				if ($result1 && $result2) {
				  $success = "Confermation massage sent in your Mail Id!";
				  echo $success;
				} else {
				  $failed = "Failed to send confermation messege in Mail!";
				  echo $failed;
				}
			   
			  }
			echo "<br/><br/>";
			echo "Redirecting you to login page in 5 seconds.";
			echo "<br/><br/>"; 
			echo "Or click <a href=login.html>here.</a>";
			header("refresh:5;url=login.html" );
		} 
		else 
		{
    		echo "Error: " . $register_sql . "<br>" . $conn->error;
			header("refresh:5;url=register.html" );
		}
	}
}
?>
</body>
</html>
