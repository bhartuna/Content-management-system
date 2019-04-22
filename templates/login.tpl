<!DOCTYPE html>
<html>
<head>
	<title>Logowanie</title>
	<meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
	<link href="css/login.css" rel="stylesheet" type="text/css" media="all" />
    <!--<script src="js/script.js"></script>-->
</head>
<body>
	<div class="container">
		<form method="POST" action="/cms/functions.php">
			<p class="error">{$error}</p>
			<input class="input" type="text" name="login" placeholder="Login">
			<input class="input" type="password" name="password" placeholder="Hasło">
			<input class="button" type="submit" value="Zaloguj">
		</form>
	</div>
</body>
</html>