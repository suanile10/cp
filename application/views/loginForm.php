<!DOCTYPE html>
<html>
<head>
	<title>Login Page</title>
</head>
<body>
<h1>Login Ho</h1>
</body>
</html>
<?PHP
	echo form_open('register/LoginValidaion');

	echo validation_errors();

	echo "<p>Username:";
	echo form_input ('text');
	echo "</p>";

	echo "<p>Password:";
	echo form_input ('password');
	echo "</p>";


	echo "<p>:";
	echo form_submit ('login_submit', 'Login');
	echo "</p>";

	echo form_close();
?>