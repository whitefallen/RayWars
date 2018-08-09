<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class CardController extends AbstractController {

  // TODO Add a Finder, thats Find a Json File , iterate through it, save attributes to Entity, and display it in twig Template

  /**
   * @Route("/cards/card/{card_id}", name="app_card_info")
   */
  public function showCardInfo($card_id) {
    var_dump($card_id);
    return $this->render('card/card.html.twig');
  }

  /**
   * @Route("/cards/example" , name="app_card_example")
   */
  public function showExampleCardPage() {
    return $this->render('card/card.html.twig');
  }

}
