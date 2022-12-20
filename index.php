<?php

include_once __DIR__ . '/classi/generi.php';
include_once __DIR__ . '/classi/libro.php';
include_once __DIR__ . '/classi/audiolibro.php';



$generi = [
  'giallo' => new Generi('giallo', 'icon-font-awesome-giallo'),
  'horror' => new Generi('horror', 'icon-font-awesome-horror'),
  'jazz'   => new Generi('jazz','icona-horror'),
  'rock'   => new Generi('rock','icona-rock'),
];
//var_dump( $generi );


$prodotti = [
  new Libro( 'La scelta di Natan', 'Antonio Puccio', 23.40, $generi['giallo'], true, 'https://immagine-copertina.com', 250, 'flessibile' ),
  new audioLibro('La scelta di Natan', 'Antonio Puccio', 23.40, $generi['giallo'], true, 'https://immagine-copertina.com', 120, 'spotify', 'https://spotify-libri.com'),
  new Cd('nome','autore',29.90,$generi['jazz'],true,'immagine',10 ),
  new Cd('nome','autore',25.99,$generi['rock'],true,'immagine',20 ),
  new Dvd('nome','autore',25.99,$generi['giallo'],true,'immagine',120,'MPEG'),
  new Employe('Fulvio','immagine','schiavo',30,'maschio')

];

var_dump( $prodotti );

foreach( $prodotti as $elem ){
  //echo get_class($elem);
  echo "<br>";
}
?>
