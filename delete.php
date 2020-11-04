<?php
try {
	$user = "root";
	$password = "";

	$dbh = new PDO("mysql:host=localhost; dbname=syukatsu; charset=utf8", "$user", "$password");

	if(isset($_GET['id'])) { $id = $_GET['id']; }
	$stmt = $dbh->prepare('DELETE FROM syukatsu WHERE id =' . $id);

	$stmt->execute();

	header('Location: ./');
　exit;

} catch (Exception $e) {
	echo 'エラーが発生しました。:' . $e->getMessage();
}
?>
