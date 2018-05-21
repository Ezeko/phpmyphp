<?php
	session_start();
	$_SESSION['message'] = '';

	//to connect to the data base

	$mysqli = new mysqli("localhost", "root", "", "ezeko");

	if($_SERVER['REQUEST_METHOD']=='POST'){

		//make sure two passwords match

		if($_POST['password'] == $_POST['confirmPassword']){

			$username = $mysqli->real_escape_string($_POST['username']);
			$fullname = $mysqli->real_escape_string($_POST['Name']);
			$password = $mysqli-> real_escape_string($_POST['password']);
			
			// copy files to files folder

			if (isset($_POST)){
				$_SESSION['username'] = $username;
				$_SESSION['fullname'] = $fullname;


				$sql = "INSERT INTO user_info (fullname, username, file, password)" . "VALUES ('$fullname', '$username', '$password',)"; 

				// if the query is successful redirect to dashboard

				if ($mysqli->query($sql)=== true){
					echo "User registration successful";
					$_SESSION['message'] ='Registration Successful!!!';

					header("location: dashboard.php");
				}
				else {
					$_SESSION['message'] = 'user could not be added to database';

			}}

			else {
				$_SESSION['message'] = "file upload failed";
			}
		}	
		else {
			$_SESSION['message'] = 'passwords not match';
		}
        }
 
?>