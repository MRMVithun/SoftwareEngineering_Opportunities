<?php

require_once 'connection.php';
require_once 'defaults.php';

require_params(["post"]);

$post = simple_query("S", $con, "SELECT uid, post, link FROM opportunities WHERE id = ? ORDER BY id DESC LIMIT 1;", [$i["post"]]);

$o->uid = (int) $post["uid"];
$o->post = $post["post"];
$o->link = $post["link"];

done();

?>