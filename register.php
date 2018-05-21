<?php include("form.php") ?>
<!DOCTYPE html>
<html>
<head>
	<title>User registration form</title>
</head>
<body style="width:200px">
<form  class="form" action="form.php" method="POST" >
	<div class="alert alert-error"><?php $_SESSION['message'] ='' ?></div>
	<p><span><label for="name">NAME:</label><input type="text" name="Name" placeholder="Type your fullname here"></span></p>
	<p><span><label for="username">USERNAME:</label><input type="text" name="username" placeholder="Type your username here"></span></p>
	<p><span><label for="file">FILE:</label><input type="file" name="entry" accept="files/" required></span></p>
	<p><span><label for="password">PASSWORD:</label><input type="password" name="password" placeholder="Type your password here"></span></p>
	<p><span><label for="confirmPassword">CONFIRM PASSWORD:</label><input type="password" name="confirmPassword"  placeholder="Type your password here again"></span></p><br><br>
	<input type="submit" name="" value="REGISTER">&nbsp;&nbsp; <a href="login.php">Already a member? Login here</a>

</form>
</body>
</html>