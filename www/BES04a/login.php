<html>
<head>
	<title>WEBAPP</title>
</head>

<body>
<h3>Controllo credenziali</h3>

<h2>Richiesta credenziali</h4><hr/>
	<form name="frmLogin" action="login.php" method="POST">
		User name: <input type="text" name="username" placeholder="username"><br>
		Password: <input type="text" name="password" placeholder="password"><br>
		<input type="submit" value="Submit">
	</form><hr/>

	<a href="index.php" >torna alla pagina home</a><br>
<?php

session_start();

if ($_SERVER['REQUEST_METHOD'] == 'POST') 
{

	$username = $_POST['username'];
	$password = $_POST['password'];
	
	if ($username=='bianchi' && $password=='erasmo') 
	{
		$_SESSION['username'] = $username;
		session_start();
		header('Location: riservata.php');
		exit;
	} 
		else 
		{
	 	 echo "<h4>Attenzione! Nome utente o password sbagliate</h4>";
		}
}

?>
</body>

