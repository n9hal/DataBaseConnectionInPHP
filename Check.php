<!DOCTYPE html>
<html>
<body>
	<?php
		require 'connect.php';
		if(isset($_POST['Submit']))
		{
			$uname = $_POST['uname'];
			$pass = $_POST['pass'];
			$sql = "select * from userdata where Email=\"$uname\" and Password=\"$pass\"";
			$res = mysqli_query($con,$sql);
			if(!$res)
			{
				die("Query Failed".mysqli_error($con));
			}
			else
			{
				if(mysqli_num_rows($res)>0)
				{
					header("Location:Homepage.html");
				}
				else
				{
       				header("Location:Registration.html");
				}
			}
		}
	?>
</body>
</html>
