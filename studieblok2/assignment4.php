<?php
class User {
  public $firstname;
  public $birthday;

  public function setFirstName($firstname) {
    $this->firstname = $firstname;
  }

  public function getFirstName() {
    return $this->firstname;
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
$user->setBirthday('25-04-1998');

echo $user->getFirstName();
echo $user->getBirthday();
?>
