<?php 
session_start();

if (isset($_SESSION['id']) && isset($_SESSION['user_name'])) {

 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Inicial</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body class="container-sm">>
     <h1>Bem vindo <?php echo $_SESSION['name']; ?></h1>
     <a href="logout.php">Sair</a>
</body>
</html>

<?php 
}else{
     header("Location: index.php");
     exit();
}
 ?>