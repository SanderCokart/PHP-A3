<?php
class User {
  public $firstname;
  public $birthday;

public function __construct($firstname, $lastname, $birthday) {
    $this->firstname = $firstname;
        echo "contruct made a user with the first name being: " . $this->firstname . "<br>";
    $this->lastname = $lastname;
        echo "contruct made a user with the last name being: " . $this->lastname . "<br>";
    $this->birthday = $birthday;
        echo "contruct made a user with the birthday being: " . $this->birthday . "<br>";
}

    public function getUser(){
        return $this->firstname . "<br>" . $this->lastname . "<br>" . $this->birthday;
    }

}

$user = new User('Sander', "Cokart", "25-04-1998");
$user = new User('Diana', "Lazarus", "14-09-1977");

echo $user->getUser();
?>
