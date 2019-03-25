<?php
class Table {//creates a blueprint for a table
    private $_rows;//initiates a private variable $_rows, this is only accesable by this class;

    private function __construct() {//automatically turn the variable rows into an array;
        $this->_rows = array();
    }

    public function append($row) {//function that appends $row variable which comes in via an argument to the $_rows array;
        $this->_rows[] = $row;
    }

    public function draw() {//function does nothing

    }
}

class Row {//blueprint for rows
    private $_cells;//initiates a private variable $_cells, this is only accesable by this class;

    public function __construct() {//automatically turns the variable $_cells into an array;
        $this->_cells = array();
    }

    public function append($cell) {//function that appends/pushes the the $cell variable to the $_cells array;
        $this->_cells[] = $cell;
    }

    public function getCells() {//a function that returns the value of the _cells array;
        return $this->_cells;
    }
}

class Cell {//blueprint for a cell;
    private $_content;//creates a private variable $_content that can only be accessed by this class;

    public function __construct($content) {//automatically sets the Cell content to the argument $content;
        $this->_content = $content;
    }

    public function getContent() {//funciton that returns the value of Cell->_content
        return $this->_content;
    }



}
?>
