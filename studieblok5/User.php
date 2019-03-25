<?php
class User {
  private $firstname;
  private $lastname;
  private $birthday;
  private static $amount = 0;

  public function __construct($firstname, $lastname, $birthday){
      $this->firstname = $firstname;
      $this->lastname = $lastname;
      $this->birthday = $birthday;
  }

  public function getUserData(){
      User::$amount++;
      echo $this->firstname . "<br>" . $this->lastname . "<br>" . $this->birthday . "<br> amount of total users: " . User::$amount . "<hr>";
  }

}

$user1 = new User("Sander", "Cokart", "25-04-1998");
$user2 = new User("Diana", "Lamberts", "12-09-1996");
$user3 = new User("Souraya", "Hilm", "03-03-1996");

$user1->getUserData();
$user2->getUserData();
$user3->getUserData();
?>
