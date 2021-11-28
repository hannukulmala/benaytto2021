<?php
//alustusskripti
require_once '../src/init.php';


// urlin polun siistiminen
$request = str_replace($config['urls']['baseUrl'], '', $_SERVER['REQUEST_URI']);
$request = strtok($request, '?');

// Luodaan uusi Plates-olio ja kytketään se sovelluksen sivupohjiin
$templates = new League\Plates\Engine(TEMPLATE_DIR);


// selvitetään mitä sivua on kutsuttu ja suoritetaan vastaava käsittelijä
if($request === '/' || $request === '/tapahtumat') {
    require_once MODEL_DIR . 'tapahtuma.php';
    $tapahtumat = haeTapahtumat();
    echo $templates->render('tapahtumat', ['tapahtumat' => $tapahtumat]);
} else if ($request === '/tapahtuma') {
    require_once MODEL_DIR . 'tapahtuma.php';
    $tapahtuma = haeTapahtuma($_GET['id']);
    if($tapahtuma) {
        echo $templates->render('tapahtuma', ['tapahtuma' => $tapahtuma]);
    } else {
        echo $templates->render('tapahtumanotfound');
    }
} else if($request === '/lisaa_tili') {
    echo $templates->render('lisaa_tili');
} else {
    echo $templates->render('notfound');
}
?>

