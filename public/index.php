<?php

error_reporting(0);
@set_time_limit(3);

$r       = mt_rand(1,3);
$plname  = 'Player';
$map     = '';
$avatar  = 'img/nouser.png';

$authors = array(
    1 => 'song',
    2 => 'Zelda Main Theme',
    3 => 'Song Of Storms'
);

$pictures = array(1,2,3);
shuffle($pictures);

if (isset($_GET['mapname']))
    $map = '<br>You will play the map: '.$_GET['mapname'];

if (isset($_GET['steamid'])) {
    $data = 'http://api.steampowered.com/ISteamUser/GetPlayerSummaries/v0002/?key=XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX&steamids='.$_GET['steamid'];
    $f = file_get_contents($data);
    $arr = json_decode($f, true);
    if (isset($arr['response']['players'][0]['personaname']))
        $plname = $arr['response']['players'][0]['personaname'];
    if (isset($arr['response']['players'][0]['avatar']))
        $avatar = $arr['response']['players'][0]['avatar'];
    
}

?>
<!DOCTYPE html>
<html class="no-js">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title></title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/animations.css">
    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Source+Sans+Pro">

    <script src="js/vendor/modernizr-2.6.2-respond-1.1.0.min.js"></script>
</head>
<body> 
    <audio autoplay loop>
        <source src="music/<?php echo $r?>.ogg" type="audio/ogg">
    </audio>
    <div class="container">
        <div class="jumbotron" style="margin-top: 50px;">
            <h1 id="title" class="bigEntrance" style="font-size: 50px;">Butt Crust</h1>
            <p class="lead">
                Welcome To Butt crust, Have Fun!<br>
                <small>
                    <ul style="line-height: 1.6;">
                        <li>Be Nice</li>
                        <li>No RDM</li>
                        <li>No Ghosting!</li>
                        <li>English please</li>
                        <li>Admins will be kicking/baning if something is wrong</li>
                    </ul>
                    All used Workshop items can be found here:
                    <br>
                    <a href="http://steamcommunity.com/sharedfiles/filedetails/?id=375321007">Buttcrust Server Content Pack</a><br>
                    Join our steam group!
                    <br>
                    <a href="http://steamcommunity.com/groups/ButtCrustServers">Buttcrust steam group</a><br>
                    <center>Click on the link below to Donate (If you are kind enough :D)
                    <center><form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
                    <input type="hidden" name="cmd" value="_s-xclick">
                    <input type="hidden" name="hosted_button_id" value="P8HBT8PVLRMDS">
                    <input type="image" src="http://influenceintl.org/wp-content/uploads/2014/08/donate-button.png" border="0" name="submit" alt="PayPal &#151; The safer, easier way to pay online.">
                    <img alt="" border="0" src="https://www.paypalobjects.com/en_AU/i/scr/pixel.gif" width="1" height="1">
                    </form></center>
                </small>
            </p>

        </div>
    </div>
    <script src="js/vendor/jquery-1.10.1.min.js"></script>
    <script src="js/vendor/bootstrap.min.js"></script>
    <script src="js/jquery.cycle2.min.js"></script>
    <script src="js/main.js"></script>
</body>
</html>
