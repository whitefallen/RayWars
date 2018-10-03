<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class RulesetController extends AbstractController {

  public $__projectDir;

  public function __construct($projectDir)
  {
      $this->__projectDir = $projectDir;
  }

  /**
   * @Route("/ruleset", name="app_ruleset")
   */
  public function showNew() {
    return $this->render('ruleset/ruleset.html.twig');
  }

}
