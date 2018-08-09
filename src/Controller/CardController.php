<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class CardController extends AbstractController {

  /**
   * @Route("/cards/card/{card_id}", name="app_card_info")
   */
  public function showCardInfo($card_id) {
    return $this->render('index/index.html.twig');
  }

  /**
   * @Route("/cards/example" , name="app_card_example")
   */
  public function showExampleCardPage() {
    return $this->render('card/card.html.twig');
  }

}
