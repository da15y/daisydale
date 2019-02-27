<?php


$db = new mysqli('localhost', 'root', '', 'daisy');

if (isset($_POST["obscurity"])) {
	$q = $db->query("UPDATE USERS SET ISBANNED = 1 WHERE ID = " . $_POST["id"] . ";");
}
