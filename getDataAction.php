<?php
class getDataAction{

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

	function getData($case){
		$smt = $this->pdo->prepare('select * from syukatsu where zyoukyou = "'.$case.'"');
		$smt->execute();

		if ($smt->rowCount() != 0) {
			echo "<table><tr><th>企業名</th><th>日程</th><th>備考</th><th>操作</th></tr>";
					foreach( $smt as $value ) {
						echo "<tr><td>$value[kigyoumei]</td><td>$value[nittei]</td><td>$value[bikou]</td><td>
            <form action=\"./modify.php?id=$value[id]\" method=\"post\"><input type=\"submit\" value=\"更新\"></form>
            <form action=\"./delete.php?id=$value[id]\" method=\"post\"><input type=\"submit\" value=\"削除\"></form>
            </td></tr>";
					}
			echo "</table>";
		}else{
			echo "データがありません。<br/>";
		}
	}

	function deleteData($id){
		$smt = $this->pdo->prepare('select * from syukatsu where zyoukyou = "'.$case.'"');
		$smt->execute();
	}
}
?>
