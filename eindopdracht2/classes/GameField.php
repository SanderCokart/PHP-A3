<?php
require 'Button.php';//imports Button class;


class GameField{//Gamefield object;
    private $buttonArray;//button array;

    public function generateField(){
        $this->buttonArray = array(1,1,2,2,3,3,4,4,5,5,6,6,7,7,8,8);//contains all the numbers the randomizer can use;
        shuffle($this->buttonArray);//shuffles the array;

        $button = array();//defines new array;

        for ($i=0; $i < 16; $i++) {//creates new Button objects 16x;
            $button[$i] = new Button($i, $this->buttonArray);
            $button[$i]->render($i);//renders all 16 button objects;
        }
    }
}
?>
