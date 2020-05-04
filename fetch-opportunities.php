<?php

require_once 'connection.php';
require_once 'defaults.php';

$m = simple_query("M", $con, "SELECT * FROM opportunities ORDER BY adate;", []);

$arr = array();
foreach($m as $p){
    $arr[] = (object)[
        "id" => (int) $p["id"],
        "uid" => (int) $p["uid"],
        "post" => $p["post"],
        "link" => $p["link"],
        "date" => gdate($p["adate"] - 14400)." at ".gtime($p["adate"] - 14400)
    ];
}
$o->posts = $arr;

done();

?>