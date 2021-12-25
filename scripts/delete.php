<?
require_once 'config.php';


session_start();
$user_id = $_SESSION['user']['id'];

$get_id = @$_GET['id'];

$user_actions = $pdo->query("SELECT action_id FROM `users_actions` WHERE user_id=$user_id")->fetchAll(PDO::FETCH_COLUMN, 0);

if (isset($_POST['delete_submit'])) {
	$sql = "DELETE FROM log_taking WHERE id=?";
	$query = $pdo->prepare($sql);
	$query->execute([$get_id]);
	header('Location: '. $_SERVER['HTTP_REFERER']);
}