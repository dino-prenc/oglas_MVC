<?php
echo '<h1><a href="' .URL. '">Oglasnik</a></h1>';
echo '<h2>Predaja oglasa</h2>';
echo '<form method="post" action="' .URL. '/oglasi/noviOglas">';
echo '<p>Naslov: <input type="text" name="naslov"></p>';
echo '<p><textarea name="opis" rows="15" cols="60">Opis oglasa</textarea></p>';
echo '<p>Cijena: <input type="number" name="cijena" min="1" step="0.01"></p>';
echo '<p>Kategorija: <select name="kategorija">';
echo '<option value="null">Odaberi kategoriju</option>';
foreach($kategorije as $kategorija) {
    echo '<option value="' . $kategorija->id_kategorija . '">' . $kategorija->naziv . '</option></p>';
}
echo '</select>';
echo '<p><input type="submit" name="submit_predaja" value="Predaj oglas"></p>';
echo '</form>';
echo '<p><a href="' .URL. '/dash">Natrag</a></p>';
