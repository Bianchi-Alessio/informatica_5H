<head>
	<title>WEBAPP</title>
</head>
<body>
	<h2>BENVENUTO NELLA WEBAPP</h4><hr/>

<?php
    session_start();
    if(!isset($_SESSION['username']))
    {
        header('Location: login.php');
        exit();
    }
    $username=$_SESSION['username'];
    echo "BENVENUTO NELLA PAGINA RISERVATA DELLA WEBAPP";
?>
<br><a href="logout.php" >esegui il logout </a></br>
<br><a href="index.php" >torna alla pagina home</a></br>
