<!DOCTYPE html>
<html lang="fi">
    <head>
        <title>Frisbeegolfseura - <?=$this->e($title)?></title>
        <meta charset="UTF-8">
        <link href="styles/styles.css" rel="stylesheet">
    </head>
    <body>
        <header>
            <h1><a href="<?=BASEURL?>">Frisbeegolfseura</a></h1>
        </header>
        <section>
            <?=$this->section('content')?>
        </section>
        <footer>
            <hr>
            <div> Frisbeegolfseura by Hane</div>
        </footer>
    </body>
</html>