<?php
//require_once __DIR__."/lib.php";
/*
function logg($text) {
 $log = fopen("cheats.log","a+");
 $text = date("[Y-m-d H:i:s] ").$text;
 fwrite($log,"$text\n");
 fclose($log);
}
logg("From:[78.205.16.115] -> 1 000 tokens");
if ($_SERVER["REMOTE_ADDR"] == "208.90.215.181") { logg("Exiting"); exit; }
if (strpos($_SERVER["REMOTE_ADDR"],"208.90") === 0) { logg("Exiting"); exit; }
$dir = "game_data";
$time = time();
file_put_contents("$dir/$time.post.txt",print_r($_POST,1));
file_put_contents("$dir/$time.get.txt",print_r($_GET,1));
file_put_contents("$dir/$time.post.json",json_encode($_POST));
file_put_contents("$dir/$time.get.json",json_encode($_GET));
	*/
?>
<? header("Content-Type: application/json"); 
?>{ "visitors": [],"user":{"floozBought": "1000", "dailySpin": 1000, "nextSpin": 1, "mixpanel": "1", "spin": 1000},"msg":{"minTime": "30", "text": "This is probably the most addicting game of the year.", "link": "http://bit.ly/U4b8Ig", "id": "17", "title": "Temple Run FREE"} }
