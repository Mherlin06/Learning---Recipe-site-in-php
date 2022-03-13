<?php
try
{
	$db = new PDO('mysql:host=localhost;dbname=recipe_share;charset=utf8', 'root', 'root');
}
catch (Exception $e)
{
        die('Erreur : ' . $e->getMessage());
}
?>