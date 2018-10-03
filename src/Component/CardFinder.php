<?php

namespace App\Component;

use Symfony\Component\Finder\Finder;
use App\Entity\Card;

class CardFinder {

  private $__projectDir;
  
  public function setProjectDir($projectDir) {
      $this->__projectDir = $projectDir;
  }

  /**
   * Finds a Card based on its ID and returns it as json
   * @param $card_id
   */
  public function findAFile($card_id) {
    $finder = new Finder();
    $pathToCards = $this->__projectDir.'/cards/data';
    $data = $finder->files()->name('card'.$card_id.'.json')->in($pathToCards);
    foreach($data as $date) {
        $data = json_decode($date->getContents(),true);
    }
    return $this->createCardObject($data);
  }

  /**
   * Finds all Cards in ProjectDirectory and returns them as json
   */
  public function findAllFiles() {
    $finder = new Finder();
    $cards = array();
    $pathToCards = $this->__projectDir.'/cards/data';
    $data = $finder->files()->name('card*.json')->in($pathToCards);
    foreach($data as $date) {
        $data = json_decode($date->getContents(),true);
        $cards[$data['id']] = $this->createCardObject($data);
    }
    return $cards;
  }

  /**
   * Creates a Card Object from json Data
   * @param $_data holds all information about a Card
   */
  private function createCardObject($_data) {
    $card = new Card();
    $card->setId($_data['id']);
    $card->setName($_data['name']);
    if(!empty($_data['typ'])) {
        $card->setType($_data['typ']);
    }
    if(!empty($_data['kosten'])) {
        $card->setCost($_data['kosten']);
    }
    if(!empty($_data['hp'])) {
        $card->setHp($_data['hp']);
    }
    if(!empty($_data['kartentypen'])) {
        $card->setCardtag($_data['kartentypen']);
    }
    if(!empty($_data['effekte'])) {
        $card->setEffect($_data['effekte']);
    }
    if(!empty($_data['infotext'])) {
        $card->setInfotext($_data['infotext']);
    }
    if(!empty($_data['trivia'])) {
        $card->setTrivia($_data['trivia']);
    }
    if(!empty($_data['alternative_bilder'])) {
        $card->setAlternativeArtworks($_data['alternative_bilder']);
    }
    return $card;
  }


  

}