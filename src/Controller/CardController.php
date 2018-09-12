<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Finder\Finder;
use App\Entity\Card;

class CardController extends AbstractController {

  public $__projectDir;

  public function __construct($projectDir)
  {
      $this->__projectDir = $projectDir;
  }

  /**
   * @Route("/cards/card/{card_id}", name="app_card_info")
   */
  public function showCardInfo($card_id) {
    $card = $this->findAFile($card_id);
    return $this->render('card/card.html.twig', array(
      'card' => $card
    ));
  }

  /**
   * @Route("/cards", name="app_card_list")
   */
  public function showCardList() {
    $cards = $this->findAllFiles();
    return $this->render('card/cardlist.html.twig', array(
      'cards' => $cards
    ));
  }

  /**
   * @Route("/new/cards/card/{card_id}", name="new_app_card_info")
   */
  public function showNewCardInfo($card_id) {
    $card = $this->findAFile($card_id);
    return $this->render('new/card/card.html.twig', array(
      'card' => $card
    ));
  }

  /**
   * @Route("/new/cards", name="new_app_card_list")
   */
  public function showNewCardList() {
    $cards = $this->findAllFiles();
    return $this->render('new/card/cardlist.html.twig', array(
      'cards' => $cards
    ));
  }

  /**
   * @Route("/cards/example" , name="app_card_example")
   */
  public function showExampleCardPage() {
    return $this->render('card/card.html.twig');
  }

  private function findAFile($card_id) {
    $finder = new Finder();
    $pathToCards = $this->__projectDir.'/cards/data';
    $data = $finder->files()->name('card'.$card_id.'.json')->in($pathToCards);
    foreach($data as $date) {
        $data = json_decode($date->getContents(),true);
    }
    return $this->createCardObject($data);
  }

  private function findAllFiles() {
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
