<?php


class Song 
{
    public $name;
    public $numberOfPlays;

    /**
     * @param string $name
     * @param int $numberOfPlays
    * */
    
    public function __construct(string $name, int $numberOfplays)
    {
        $this->name = $name;
        $this->numberOfplays = $numberOfplays;
    }


}




?>