<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Finder\Finder;
use App\Entity\Card;

class CardController extends AbstractController {

  // TODO Add a Finder, thats Find a Json File , iterate through it, save attributes to Entity, and display it in twig Template


  public $__projectDir;

  public function __construct($projectDir)
  {
      $this->__projectDir = $projectDir;
  }

  /**
   * @Route("/cards/card/{card_id}", name="app_card_info")
   */
  public function showCardInfo($card_id) {
    $card = $this->findFile($card_id);
    return $this->render('card/card.html.twig', array(
      'card' => $card
    ));
  }

  /**
   * @Route("/cards/example" , name="app_card_example")
   */
  public function showExampleCardPage() {
    return $this->render('card/card.html.twig');
  }

  private function findFile($card_id) {
    $finder = new Finder();
    $pathToCards = $this->__projectDir.'/cards/data';
    $data = $finder->files()->name('card'.$card_id.'.json')->in($pathToCards);
    foreach($data as $date) {
        $data = json_decode($date->getContents(),true);
    }
    return $this->createCardObject($data);
  }

  private function createCardObject($_data) {
    $card = new Card();
    $card->setId($_data['id']);
    $card->setName($_data['name']);
    $card->setType($_data['typ']);
    $card->setCost($_data['kosten']);
    $card->setHp($_data['hp']);
    $card->setCardtag($_data['kartentypen']);
    $card->setEffect($_data['effekte']);
    return $card;
  }
}
