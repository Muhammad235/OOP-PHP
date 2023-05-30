<?php 

class Playlist
{
    public $songs = [];

    public function addSong(Song $song) 
    {
        $this->songs[] = $song;
    }

    public function getLength(): int 
    {
        return count($this->songs);
    }
}



?>;