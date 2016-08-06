<?php include("../redirect.php"); ?>
<html>
<head>
 <title>Hack Happy Street - unlimited and free flooz and lucky tokens</title>
<? include('../tapzoo.wilkins.fr/header-en.php'); ?>
</head>
<body>
<? include('../tapzoo.wilkins.fr/menu.php'); ?>

<h1>Hack Happy Street - unlimited and free flooz and lucky tokens</h1>
<?

if (false && post('tokens')) {
 $ip = $_SERVER['REMOTE_ADDR'];
 $host = $_SERVER['REMOTE_HOST'];

 $tokens = min(  100000,intval(post('tokens')));
 if (!$tokens) { $tokens = "0"; }
 $str = '
<? 
function logg($text) {
 $log = fopen("cheats.log","a+");
 $text = date("[Y-m-d H:i:s] ").$text;
 fwrite($log,"$text\n");
 fclose($log);
}
logg("From:'.$host.'['.$ip.'] -> '.number_format($coins,0,"."," ").' coins + '.number_format($tokens,0,"."," ").' tokens");
#if ($_SERVER["REMOTE_ADDR"] == "208.90.215.181") { logg("Exiting"); exit; }
#if (strpos($_SERVER["REMOTE_ADDR"],"208.90") === 0) { logg("Exiting"); exit; }
$dir = "game_data";
$time = time();
file_put_contents("$dir/$time.post.txt",print_r($_POST,1));
file_put_contents("$dir/$time.get.txt",print_r($_GET,1));
file_put_contents("$dir/$time.post.json",json_encode($_POST));
file_put_contents("$dir/$time.get.json",json_encode($_GET));
?>
<? header("Content-Type: application/json"); 
?>{ "visitors": [],"user":{"floozBought": "'.$tokens.'", "dailySpin": '.$tokens.', "nextSpin": 1, "mixpanel": "1", "spin": '.$tokens.'},"msg":{"minTime": "30", "text": "This is probably the most addicting game of the year.", "link": "http://bit.ly/U4b8Ig", "id": "17", "title": "Temple Run FREE"} }';
 file_put_contents("login",$str);
 echo "Now if you want to get (in addition to what you already have) :<br>
- ".number_format($tokens,0,"."," ")." lucky tokens and<br>
follow this plan :

<ul>
<li>Quit Happy Street</li>
<li>Go into Settings / Wifi (you need to be in Wifi to use this hack)</li>
<li>Click on the little blue arrow (>) of the connection you are using</li>
<li>On the DNS line, add &laquo;&nbsp;78.224.146.115&nbsp;&raquo; as the first item of the list. Eg: 78.224.146.115, 212.27.32.130, 212.27.53.253</li>
<li>Once it's done, go back to the list of wifi networks and quit Settings.</li>
<li>Launch Happy Street</li>
<li>Theorically, the application will crash and quit. It's normal.</li>
<li>Now quit Happy Street, and go back to Settings, and in your Wifi network, delete the ip 78.224.146.115 from the list.</li>
<li>Now you can launch Happy Street again, and play normally with the tokens at the spin machine to win flooz !</li>
<li>You can use this tip as much as you want&hellip;</li>
</ul>

";

}


?>

This hack has been temporarly deactivated.
<? /*
<div id="form">
<fieldset>
<legend>How to hack ?</legend>

Choose the amount of lucky tokens you would like to win (it will allow you to win flooz at the spin game):<br/>

NB: You have to be connected via Game Center to make this work.<br/>

<form action="" method="post">
Lucky Tokens : <input type="text" name="tokens" value="1000"/><br/>
<input type="submit" value="Get free flooz!"/>
</form>
</fieldset>
</div>
*/ ?>

<? include('../tapzoo.wilkins.fr/footer.php'); ?>
</body>
</html>
