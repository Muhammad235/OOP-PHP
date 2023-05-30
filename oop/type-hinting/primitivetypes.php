<?php



declare(strict_types = 1);

// type hinting

require 'song.php';
            
$song = new Song('1234', 113);


print $song->name . PHP_EOL;

var_dump($song->name);

?>