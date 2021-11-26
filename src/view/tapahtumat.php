<?php $this->layout('template', ['title' => 'Kaikki talkoo tapahtumat']) ?>
<h1>Kaikki talkootapahtumat</h1>
<div class='tapahtumat'>
<?php

foreach ($tapahtumat as $tapahtuma) {
    $start = new DateTime($tapahtuma['tap_alkaa']);
    $end = new DateTime($tapahtuma['tap_loppuu']);

    echo "<div>";
        echo "<div>$tapahtuma[nimi]</div>";
        echo "<div>" . $start->format('j.n.Y') . "-" . $end->format('j.n.Y') . "</div>";
    echo "</div>";
}

?>
</div>