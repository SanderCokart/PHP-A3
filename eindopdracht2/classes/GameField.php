<?php
require 'Button.php';


class GameField{
    private $buttonArray;

    public function generateField(){
        $this->buttonArray = array(1,1,2,2,3,3,4,4,5,5,6,6,7,7,8,8);
        shuffle($this->buttonArray);

        $button = array();

        for ($i=0; $i < 16; $i++) {
            $button[$i] = new Button($i, $this->buttonArray);
            $button[$i]->render($i);
        }
    }
}
?>
