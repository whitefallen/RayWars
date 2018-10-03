<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use App\Component\CardFinder;

class CardController extends AbstractController {

  public $__projectDir;
  private $cardFinder;

  public function __construct($projectDir)
  {
      $this->__projectDir = $projectDir;
      $this->cardFinder = new CardFinder();
      $this->cardFinder->setProjectDir($projectDir);
  }

  /**
   * @Route("/cards/card/{card_id}", name="app_card_info")
   */
  public function showCardInfo($card_id) {
    $card = $this->cardFinder->findAFile($card_id);
    return $this->render('card/card.html.twig', array(
      'card' => $card
    ));
  }

  /**
   * @Route("/cardlist", name="app_card_list")
   */
  public function showCardList() {
    $cards = $this->cardFinder->findAllFiles();
    asort($cards);
    return $this->render('card/cardlist.html.twig', array(
      'cards' => $cards
    ));
    
  }

  /**
   * @Route("/cardtaglist/{slug}/{slugcontent}", name="app_card_taglist")
   */
  public function showCardTagList($slug, $slugcontent) {
    $cards = $this->cardFinder->findAllFiles();
    asort($cards);
    return $this->render('card/cardtaglist.html.twig', array(
      'cards' => $cards,
      'slug' => $slug,
      'slugcontent' => $slugcontent
    ));
  }
}
