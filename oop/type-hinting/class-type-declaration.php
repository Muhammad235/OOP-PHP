<?php

require_once 'playlist.php';
require_once 'Song.php';

$playlist = new Playlist();

$song1 = new Song('Blackbird', 100);
// $song2 = 'Yesterday';
$song2 = new Song('monkenbird', 200);

$playlist->addSong($song1);
$playlist->addSong($song2);


print count($playlist->songs);

foreach($playlist->songs as $song){

    print $song->name . PHP_EOL;
    print $song->numberOfplays . PHP_EOL;
}




?>