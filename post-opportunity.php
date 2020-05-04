<?php

require_once 'connection.php';
require_once 'defaults.php';

require_params(["post", "text", "link", "uid"]);

if ($i["post"] == 0){
    if(simple_query("S", $con, "SELECT id FROM opportunities WHERE uid = ? AND post = ? AND link = ? LIMIT 1;", [$i["uid"], $i["text"], $i["link"]]) !== false) error("You have already posted this opportunity");
    
    simple_query("I", $con, "INSERT INTO opportunities (uid, post, link) VALUES (?, ?, ?);", [$i["uid"], $i["text"], $i["link"]]);
}else {
    simple_query("U", $con, "UPDATE opportunities SET post = ?, link = ?, adate = UNIX_TIMESTAMP() WHERE id = ? LIMIT 1;", [$i["text"], $i["link"], $i["post"]]);
}

done();

?>