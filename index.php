<?php
require_once("./config/properties.php");
require_once('./getFormAction.php');
require_once('./getDataAction.php');

$action = new getFormAction();

$eventId = null;
// イベントID取得
if (isset($_POST['eventId'])) {
	$eventId = $_POST['eventId'];
}

switch ($eventId) {

	// DBsave
	case 'save':

	$action->saveDbPostData($_POST);
	require("./view/post.php");
	break;

	// 初回アクセス時、投稿画面表示
	default:
	require("./view/post.php");
	break;
}
?>
