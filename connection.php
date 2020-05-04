<?php

try {
// 	$con = new PDO('mysql:host=localhost; dbname=u592345215_test', 'u592345215_test'/*username*/, 'PocBL79jvYCt'/*password*/);
    $con = new PDO('mysql:host=localhost; dbname=u394972817_se', 'u394972817_se'/*username*/, '86fnxsR4'/*password*/);
	$con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}catch (PDOException $e){
	die("Sorry... Encountered a database problem. :( We'll fix it asap. Check back again soon :)");
}

?>