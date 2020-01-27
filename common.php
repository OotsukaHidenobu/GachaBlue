<?php
function getDB1($sql, $param=[]){
	$dsn  = 'mysql:dbname=GachaBlueDB;host=localhost';
	$user = 'my1366';
	$pw   = 'aalqawwj';
	$dbh = new PDO($dsn, $user, $pw);
	$sth = $dbh->prepare($sql);
	$sth->execute($param);
	return( $sth->fetch(PDO::FETCH_ASSOC) );
}