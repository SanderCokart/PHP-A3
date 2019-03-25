<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <style media="screen">
            *{
                /* because it is the best font ever */
                font-family: comic sans ms;
                font-size: 1.1em;
            }
        </style>
        <meta charset="utf-8">
        <title></title>
    </head>
    <body>

    </body>
</html>

<?php
class House {//creates a blueprint for a house

    protected $yearOfConstruction = "<strong>N/A</strong>";//initiates a class protected variable that defines the year of construction;
    protected $streetName = "<strong>N/A</strong>";//initiates a class protected variable that defines the name of the street the house is on;
    protected $houseNumber = "<strong>N/A</strong>";//initiates a class protected variable that defines the number of the house/appartment;
    protected $city = "<strong>N/A</strong>";//initiates a class protected variable that defines the city where the house is located;
    protected $amountOfRooms = "<strong>N/A</strong>";//initiates a class protected variable that defines the amount of rooms in the house;
    protected $amountOfToilets = "<strong>N/A</strong>";//initiates a class protected variable that defines the amount of toilets in the house;
    protected $heater = "<strong>N/A</strong>";//initiates a class protected variable that defines wether or not the house contains a heater;
    protected $heaterSort = "<strong>N/A</strong>";//initiates a class protected variable that defines the sort of heater that is in the house;
    protected $energyLabel = "<strong>N/A</strong>";//initiates a class protected variable that defines the energy label of the house;
    protected $squareMeters = "<strong>N/A</strong>";//initiates a class protected variable that defines the squaremeters of the house;
    protected $roofSort = "<strong>N/A</strong>";//initiates a class protected variable that defines the sort of roof there is on the house;
    protected $wozValue = "<strong>N/A</strong>";//initiates a class protected variable that defines de WoZ Value of the house;
    protected $tax = "<strong>N/A</strong>";//initiates a class protected variable that defines the tax cost of the house;


    public function __construct($streetName, $houseNumber, $city){//when a new object is created immediately redefine the values of the street name, house number and city. these are taken as parameters as the object is created;
        $this->streetName = $streetName;
        $this->houseNumber = $houseNumber;
        $this->city = $city;
    }

    public function setYearOfConstuction($yearOfConstruction){//function that takes an argument to set the current yearOfConstruction;
        $this->yearOfConstruction = $yearOfConstruction;
    }

    public function setAmountOfRooms($amountOfRooms){//function that takes an argument to set the current amountOfRooms;
        $this->amountOfRooms = $amountOfRooms;
    }

    public function setAmountOfToilets($amountOfToilets){//function that takes an argument to set the current amountOfToilets;
        $this->amountOfToilets = $amountOfToilets;
    }

    public function setHeater($heater){//function that takes an argument to set the value of heater either to true or false;
        if ($heater == true || $heater == false) {//if the value entered is equal to true or false execurte code
            if ($heater == true) {//if value equals to true
                $heater = "Yes";
            } elseif ($heater == false) {//if valiue equals to false
                $heater = "No";
            }
            $this->heater = $heater;
        } else {//if the value entered is NOT equal to true or false then;
            echo "Please set the heater value to either true or false.";//ERROR
        }
    }

    public function setHeaterSort($heaterSort){//function that takes an argument to set the current sort of heater;
        $answers = array("floorheating", "cv", "combo");
        if (in_array(strtolower($heaterSort), $answers)) {//if the value(formated to lowercase) equals to floorheating or cv or combo then execute this code;
            $this->heaterSort = $heaterSort;
            $this->setHeater(true);//if the heater sort is set then set this->heater to true;
        } else { //ERROR with available options;
             echo ("ERROR: Please assign one of the following values to sort of heater<br><br>
             <ul>
             <li>Floorheating</li>
             <li>CV</li>
             <li>Combo</li>
             </ul>");
        }
    }

    public function setEnergyLabel($energyLabel){//function that takes an argument to set the current energy label;
        $answers = array("a+++", "a++", "a+", "a", "b", "c", "d");//array of valid answers;
        if (in_array(strtolower($energyLabel), $answers)) {//if the entered argument equals to anything from this array;
            $this->energyLabel = strtoupper($energyLabel);
        } else {// ERROR
            echo "ERROR: Wrong label!<br>Please use one of the following values:<br><br>
            <ul>
            <li>A+++</li>
            <li>A++</li>
            <li>A+</li>
            <li>A</li>
            <li>B</li>
            <li>C</li>
            <li>D</li>
            </ul>";
        }
    }

    public function setSquareMeters($squareMeters){//function that takes an argument to set the current squareMeters;
        $this->squareMeters = $squareMeters . "m<sup>2</sub>";
    }

    public function setRoofSort($roofSort){//function that takes an argument to set the current sort of roof;
        $this->roofSort = $roofSort;
    }

    public function setWOZValue($wozValue){//function that takes an argument to set the current WoZ Value;
        $this->wozValue = "€" . $wozValue . ",-";
        $this->setTaxesValue($wozValue);//run function setTaxesValue;
    }

    private function setTaxesValue($tax){//function that takes an argument to set the current amount of tax;
        //START OF HOUSE TAX
        if ($this->wozValue <= 100000) {//if the WoZ value is less than 100.000;
            $tax += 600;
        } elseif ($this->wozValue <= 200000) {//if the WoZ value is less than 200.000;
            $tax += 2000;
        } elseif ($this->wozValue > 200000) {//if the WoZ value is more than 200.000;
            $tax =+ 6000;
        }
        //END OF HOUSE TAX
        //START OF ROOM TAX
        if ($this->amountOfRooms == 1) {//if the amount of rooms is 1;
            $tax += 100;
        } elseif ($this->amountOfRooms == 2) {//if the amount of rooms is 2;
            $tax += 300;
        } elseif ($this->amountOfRooms > 2) {//if the amount of rooms is more than 2;
            $tax += 800;
        }

        $answers = array("amsterdam" , "rotterdam", "groningen");//array of answers;
        if (in_array(strtolower($this->city), $answers)) {//if the city of the current object equals to anything from the array;
            $tax += 1000;
        }
        //END OF ROOM TAX

        $this->tax = "€" . $tax . ",-";
    }


    public function getProperties(){//function that retrieves the properties of the class;
        return  "Street name: " . $this->streetName . "<br>" .
                "House number: " . $this->houseNumber . "<br>" .
                "City: " . $this->city . "<br>" .
                "Amount of rooms: " . $this->amountOfRooms . "<br>" .
                "Amount of toilets: " . $this->amountOfToilets . "<br>" .
                "Heater: " . $this->heater . "<br>" .
                "Heater Sort: " . $this->heaterSort . "<br>" .
                "Energy Label:" . $this->energyLabel . "<br>" .
                "Square Meters: " . $this->squareMeters . "<br>" .
                "Roof Sort: " . $this->roofSort . "<br>" .
                "WoZ value: " . $this->wozValue . "<br>" .
                "Taxes: " . $this->tax . "<hr>";
    }
}

$house1 = new House("Elk Street", 3543, "Amsterdam");
echo $house1->getProperties();
$house1->setWOZValue(90000);
$house1->setHeaterSort("floorheating");

$house2 = new House("White Pine Lane", 3013, "Ashburn");
$house2->setWOZValue(200001);
$house2->setSquareMeters(200);
$house2->setEnergyLabel("a++");
echo $house2->getProperties();
