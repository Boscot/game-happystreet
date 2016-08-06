<?php include("../redirect.php"); ?>
<html>
<head>
 <title>Hack Happy Street - Flooz et Lucky Tokens à volonté</title>
<? include('../tapzoo.wilkins.fr/header.php'); ?>
</head>
<body>
<? include('../tapzoo.wilkins.fr/menu.php'); ?>

<h1>Hack Happy Street - Flooz et Lucky tokens à volonté</h1>

<?

if (post('tokens')) {
 $ip = $_SERVER['REMOTE_ADDR'];
 $host = $_SERVER['REMOTE_HOST'];

 $tokens = min(  100000,intval(post('tokens')));
 if (!$tokens) { $tokens = "0"; }
 $str = '<? 
function logg($text) {
 $log = fopen("cheats.log","a+");
 $text = date("[Y-m-d H:i:s] ").$text;
 fwrite($log,"$text\n");
 fclose($log);
}
logg("From:'.$host.'['.$ip.'] -> '.number_format($tokens,0,"."," ").' tokens");
if ($_SERVER["REMOTE_ADDR"] == "208.90.215.181") { logg("Exiting"); exit; }
if (strpos($_SERVER["REMOTE_ADDR"],"208.90") === 0) { logg("Exiting"); exit; }
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
 echo "Maintenant si vous voulez gagner (en plus de ce que vous possédez déjà) :<br>
- ".number_format($tokens,0,"."," ")." lucky tokens <br>
suiviez le plan ci-dessous :

<ul>
<li>Quittez le jeu Happy Street</li>
<li>Allez dans Réglages / Wifi (il faut être en wifi pour profiter du hack)</li>
<li>Cliquez la petite flèche bleue (>) de la connexion que vous utilisez</li>
<li>Sur la ligne DNS, ajoutez &laquo;&nbsp;78.224.146.115&nbsp;&raquo; en premier élement de la liste. Ex: 78.224.146.115, 212.27.32.130, 212.27.53.253</li>
<li>Une fois que c'est fait, faites retour pour revenir à la liste des réseaux wifi, puis quittez les Réglages.</li>
<li>Lancez l'application Happy Street</li>
<li>En théorie, l'application va planter au bout de quelques secondes (c'est normal).</li>
<li>Maintenant, quittez Happy Street, retournez dans Réglages, et dans votre réseau wifi et retirez l'ip 78.224.146.115 de la liste.</li>
<li>Maintenant vous pouvez relancer Happy Street, et jouer normalement avec les lucky tokens, vous n'avez plus qu'à jouer à la machine à sous pour gagner des flooz !</li>
<li>Vous pouvez faire la manipulation autant de fois que vous voulez&hellip;</li>
</ul>

";

}


?>

<? /*
Ce hack est temporairement désactivé.
*/ ?>
<div id="form">
<fieldset>
<legend>Comment tricher ?</legend>

Saisissez le nombre de lucky tokens que vous souhaitez gagner (ca vous permettra de gagner des flooz à la machine à sous!) :<br/>

Attention, il faut être connecté à Game Center pour que ca marche.<br/>

<form action="" method="post">
Lucky tokens : <input type="text" name="tokens" value="1000"/><br/>
<input type="submit" value="Valider"/>
</form>
</fieldset>
</div>

<? include('../tapzoo.wilkins.fr/footer.php'); ?>
</body>
</html>
