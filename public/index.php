<?php
//alustusskripti
require_once '../src/init.php';


// urlin polun siistiminen
$request = str_replace($config['urls']['baseUrl'], '', $_SERVER['REQUEST_URI']);
$request = strtok($request, '?');

// Luodaan uusi Plates-olio ja kytketään se sovelluksen sivupohjiin
$templates = new League\Plates\Engine('../src/view');


// selvitetään mitä sivua on kutsuttu ja suoritetaan vastaava käsittelijä
if($request === '/' || $request === '/kaikki') {
    echo $templates->render('kaikki');
} else if ($request === '/yksi') {
    echo $templates->render('yksi');
} else {
    echo $templates->render('notfound');
}
?>

