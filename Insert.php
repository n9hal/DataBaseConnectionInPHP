<!DOCTYPE html>
<html>
<body>
	<?php
	require 'connect.php';
	if(isset($_POST['Submit']))
	{
            $fname = $_POST['fname'];
            $lname = $_POST['lname'];
            $e = $_POST['mail'];
            $no =$_POST['no'];
            $u = $_POST['uname'];
			$p = $_POST['pass'];
			$sql = "INSERT INTO userdata(First_Name,Last_Name,Email,Username,Mobile_Number,Password)"."values('$fname','$lname','$e','$no','$u','$p')";
			$res = mysqli_query($con,$sql);
			if(!$res)
			{
				die("Query Failed".mysqli_error($con));
			}
			else
			{
				header("Location:Login.html");
			}
		}
	?>
</body>
</html>
