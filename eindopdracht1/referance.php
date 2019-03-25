<?php
class Huis {
  protected $_straatnaam;
  protected $_huisnummer;
  protected $_plaats;
  protected $_aantalKamers;
  protected $_aantalToiletten;
  protected $_verwarming;
  protected $_soortVerwarming;
  protected $_vierkanteMeterGrond;
  protected $_wozWaarde;
  protected $_soortDak;
  protected $_energielabel;
  protected $_belasting;

  public function __construct($parStraatnaam, $parHuisnummer, $parPlaats) { //Construct methode voor, straatnaam, huisnummer en plaats
    $this->_straatnaam = $parStraatnaam;
    $this->_huisnummer = $parHuisnummer;
    $this->_plaats = $parPlaats;
  }
  public function setAantalKamers($parAantalKamers) { //Setter voor het aantal kamers
    $this->_aantalKamers = $parAantalKamers;
  }
  public function setAantalToiletten($parAantalToiletten) { //Setter voor het aantal toiletten
    $this->_aantalToiletten = $parAantalToiletten;
  }
  public function setVerwarming($parVerwarming) { //Setter of er een verwarming is
    if ($parVerwarming == true || $parVerwarming == false) {
      $this->_verwarming = $parVerwarming;
    } else {
      $this->_verwarming = 'ERROR';
      echo '<strong>Verwarming kan alleen "True" of "False" zijn.</strong><br>';
    }
  }
  public function setSoortVerwarming($parSoortVerwarming) { //Setter voor de soort verwarming
    if (strtolower($parSoortVerwarming) == "vloerverwarming" || strtolower($parSoortVerwarming) == "cv") {
      $this->_soortVerwarming = $parSoortVerwarming;
    } else {
      $this->_soortVerwarming = 'ERROR';
      echo '<strong>Soorten verwarmingen zijn "CV" of "Vloerverwarming"</strong><br>';
    }
  }
  public function setVierkanteMeterGrond($parVierkanteMeterGrond) { //Setter voor het aantal vierkante meter grond
    $this->_vierkanteMeterGrond = $parVierkanteMeterGrond;
  }
  public function setWozWaarde($parWozWaarde) { //Setter voor de woz waarde
    $this->_wozWaarde = $parWozWaarde;
    $this->_berekenBelasting(); //Dit is de laatste eigenschap voor het berekenen van de belasting, vandaar dat de functie hier opgeroepen wordt
  }
  public function setSoortDak($parSoortDak) { //Setter voor het soort dak
    $this->_soortDak = $parSoortDak;
  }
  public function setEnergielabel($parEnergielabel) { //Setter voor het energielabel
    $this->_energielabel = $parEnergielabel;
  }
  public function getEigenschappen() { //Alle eigenschappen worden netjes weergegeven
    return 'Straatnaam = ' . $this->_straatnaam . '<br>' .
          'Huisnummer = ' . $this->_huisnummer . '<br>' .
          'Plaats = ' . $this->_plaats . '<br>' .
          'Aantal kamers = ' . $this->_aantalKamers . '<br>' .
          'Aantal toiletten = ' . $this->_aantalToiletten . '<br>' .
          'Verwarming = ' . $this->_verwarming . '<br>' .
          'Soort verwarming = ' . $this->_soortVerwarming . '<br>' .
          'Vierkante meter grond = ' . $this->_vierkanteMeterGrond . '<br>' .
          'WOZ-waarde = ' . $this->_wozWaarde . '<br>' .
          'Soort dak = ' . $this->_soortDak . '<br>' .
          'Energielabel = ' . $this->_energielabel . '<br>' .
          'Belasting = ' . $this->_belasting;
  }
  private function _berekenBelasting() { //Methode om de belasting te berekenen
    if ($this->_wozWaarde < 100000) { //Belasting gebaseerd op de woz waarde
      $this->_belasting += 600;
    } else if ($this->_wozWaarde < 200000) {
      $this->_belasting += 2000;
    } else if ($this->_wozWaarde > 200000) {
      $this->_belasting += 6000;
    }
    if ($this->_aantalKamers == 1) { //Belasting gebaseerd op het aantal kamers
      $this->_belasting += 100;
    } else if ($this->_aantalKamers == 2) {
      $this->_belasting += 300;
    } else if ($this->_aantalKamers >3) {
      $this->_belasting += 800;
    }
    if (strtolower($this->_plaats) == 'amsterdam' || strtolower($this->_plaats) == 'rotterdam'
    || strtolower($this->_plaats) == 'groningen') { //Belasting gebaseerd op de woonplaats
      $this->_belasting += 1000;
    }
  }
}
?>
