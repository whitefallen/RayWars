<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class RulesetController extends AbstractController {

  /**
   * @Route("/ruleset", name="app_ruleset")
   */
  public function show() {
    return $this->render('ruleset/ruleset.html.twig');
  }

}
