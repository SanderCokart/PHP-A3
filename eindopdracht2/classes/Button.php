<?php
class Button{//object button;
    private $id = 0;//id attr;
    private $randomNumber;//randomNumber attr;


    public function __construct($id, $buttonArray){//on object creation
        $this->id = $id;//sets id var as id of this class;
        $this->randomNumber = $buttonArray[$id];//sets $randomNumber var as the $buttonArray;
    }

    public function render(){//prints the buttons on screen;
        echo "<button class='button' hidden id=\"". "button".$this->id ."\">". $this->randomNumber ."</button>";

        echo "<button class='emptyButton' id=\"". "emptybutton".$this->id ."\"></button>";
    }
}
