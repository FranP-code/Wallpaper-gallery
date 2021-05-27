<?php

try {
	$connection = new PDO('mysql:host=localhost;dbname=galeriabd', 'root', '');
} catch(PDOexception $e) {
	echo "Error: " . $e -> getMessage();
}

?>