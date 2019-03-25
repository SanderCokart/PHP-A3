<?php
class Button{
    private $id = 0;
    private $randomNumber;


    public function __construct($id, $buttonArray){
        $this->id = $id;
        $this->randomNumber = $buttonArray[$id];
    }

    public function render(){
        echo "<button class='button' hidden id=\"". "button".$this->id ."\">". $this->randomNumber ."</button>";

        echo "<button class='emptyButton' id=\"". "emptybutton".$this->id ."\"></button>";
    }
}
