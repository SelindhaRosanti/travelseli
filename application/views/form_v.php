<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<title>Form Input - User</title>
</head>
<body>

	<form action:"http://localhost/travelseli/index.php/user/add method="POST">
		<tr><td>Username<br/><input name="username" value=""></td></tr>
		<tr><td>Password<br/><input name="password" type="password" value=""></td></tr>
		<tr><td>Fullname<br/><input name="fullname" value=""></td></tr>
		Level<br/>
		<select name="level">
			<option value="admin">Admin</option>
			<option value="user">User</option>
		<select><br/>
		<input type="submit" value="simpan" />
	</form>
</body>
</html>