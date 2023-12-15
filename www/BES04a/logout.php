<head>
	<title>WEBAPP</title>
</head>

<body>
<h3>esegui il logout dalla pagina</h3>
<?php
    session_start();
    session_destroy();
    header('Location: login.php');
    exit;
?>
