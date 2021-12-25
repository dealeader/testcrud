<?
require_once 'config.php';

$sql = $pdo->prepare("SELECT * FROM `log_taking`");
$sql->execute();
$result = $sql->fetchAll();