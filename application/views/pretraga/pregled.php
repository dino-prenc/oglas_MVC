<?php
echo '<h1><a href="' .URL. '">Oglasnik</a></h1>';
echo '<h2>Pregled oglasa</h2>';
echo '<h3>' . $data->naslov . '</h3>';
echo '<p>Opis oglasa:<br>' . $data->opis . '</p>';
echo '<p>cijena: ' . $data->cijena . 'kn</p>';
echo '<p><a href="mailto:' . $email . '?Subject=Upit%20za%20oglas%20' . $data->naslov . '">Kontaktiraj</a></p>';
echo '<p>Broj pogleda: ' . $data->br_pogleda . '</p>';
echo '<p><br><a href=' .URL. '/pretraga>Natrag na sve oglase</a></p>';