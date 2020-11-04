<?php
class getFormAction {

	public $pdo;

	function __construct() {
		try {
			//DB接続
			$this->pdo = new PDO( PDO_DSN, DATABASE_USER, DATABASE_PASSWORD);
		} catch (PDOException $e) {
			echo 'error' . $e->getMessage();
			die();
		}
	}

	function saveDbPostData($data){

		// 重複確認するのに件数のカウント
		$cnt = $this->pdo->prepare('select * from syukatsu where kigyoumei = "'. $data['kigyoumei'] . '"');
		$cnt->execute();
		$id = $cnt->fetch();

		$bikou = nl2br($data['bikou']);

		if($cnt->rowCount() == 0){
			$smt = $this->pdo->prepare('insert into syukatsu (kigyoumei,zyoukyou,nittei,bikou) values(:kigyoumei,:zyoukyou,:nittei,:bikou)');
			$smt->bindParam(':kigyoumei',$data['kigyoumei'], PDO::PARAM_STR);
			$smt->bindParam(':zyoukyou',$data['zyoukyou'], PDO::PARAM_STR);
			$smt->bindParam(':nittei',$data['nittei'], PDO::PARAM_STR);
			$smt->bindParam(':bikou',$bikou, PDO::PARAM_STR);
			$smt->execute();
		}else{
			$smt = $this->pdo->prepare('UPDATE syukatsu SET kigyoumei=":kigyoumei" AND nittei=":nittei" AND zyoukyou=":zyoukyou" AND bikou=":bikou" WHERE id='.$id['id']);
			$smt->bindParam(':kigyoumei',$data['kigyoumei'], PDO::PARAM_STR);
			$smt->bindParam(':zyoukyou',$data['zyoukyou'], PDO::PARAM_STR);
			$smt->bindParam(':nittei',$data['nittei'], PDO::PARAM_STR);
			$smt->bindParam(':bikou',$bikou, PDO::PARAM_STR);
			$smt->execute();
		}
	}
}
?>
