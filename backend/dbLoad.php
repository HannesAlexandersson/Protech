<?php

$database = new PDO('sqlite:backend/products.db');

$proInfo = $database->query("
	SELECT *
	FROM products
	")->fetchAll();

?>