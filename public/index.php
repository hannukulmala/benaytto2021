<?php
//alustusskripti
require_once '../src/init.php';


// urlin polun siistiminen
$request = str_replace($config['urls']['baseUrl'], '', $_SERVER['REQUEST_URI']);
$request = strtok($request, '?');

// selvitetään mitä sivua on kutsuttu ja suoritetaan vastaava käsittelijä
if($request === '/' || $request === '/kaikki') {
    echo '<h1>Kaikki talkoot</h1>';
} else if ($request === '/yksi') {
    echo '<h1>Yksittäisen talkoo tapahtuman tiedot</h1>';
} else {
    echo '<h1>Pyydettyä sivua ei löytynyt!</h1>';
}
?>

