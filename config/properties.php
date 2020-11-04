<?php
// 接続データベース情報(本番)
define('DATABASE_NAME','syukatsu');
define('DATABASE_USER','root');
define('DATABASE_PASSWORD','');
define('DATABASE_HOST','localhost');

define('PDO_DSN','mysql:dbname=' . DATABASE_NAME .';host=' . DATABASE_HOST . '; charset=utf8');
?>
