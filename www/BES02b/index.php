<html>
<head>
	<title>ITCS ERASMO DA ROTTERDAM</title>
</head>

<body>
<h4>Richiesta credenziali</h4><hr/>
	<form name="frmLogin" action="index.php" method="POST">
		User name: <input type="text" name="username" placeholder="username"><br>
		Password: <input type="text" name="password" placeholder="password"><br>
		<input type="submit" value="Submit">
	</form><hr/>
<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') 
{

	$nome = $_POST[''];
	$password = $_POST[''];
	
	if ($nome=="Bianchi" && $pwd=='Alessio') 
	{

	  echo "<h4>Benvenuto $nome <br/>Nell'area riservata del sito!</h4>";
	} 
		else 
		{
	 	 echo "<h4>Attenzione! Nome utente o password sbagliate</h4>";
		}
}
  

?>