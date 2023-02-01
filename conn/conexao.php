
<?php 
require 'config.php';
$dsn = "mysql:host=$host;dbname=$db;charset=$carateres";

try {
	$conexao = new PDO($dsn, $user, $password);

	if ($conexao) {
		// echo "Connected to the $db database successfully!";
	}
} catch (PDOException $e) {
	echo $e->getMessage();
}