<?php
class User {
  private $firstname;
  public $lastname;
  public $birthday;

  public function setFirstName($firstname) {
    $this->firstname = $firstname;
  }

  public function getFirstName() {
    return $this->firstname;
  }


  public function setLastName($lastname) {
      $this->lastname = $lastname;
  }

  public function getLastName() {
      return $this->lastname;
  }

  public function setBirthday($birthday){
      $this->birthday = $birthday;
  }

  public function getBirthday(){
      return $this->birthday;
  }
}

$user = new User();
$user->setFirstName('Sander');
$user->setLastName('Cokart');
$user->setBirthday('25-04-1998');

echo $user->firstname;
echo $user->getFirstName();
echo $user->getLastName();
echo $user->getBirthday();
?>
