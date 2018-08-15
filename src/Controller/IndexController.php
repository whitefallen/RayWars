<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class IndexController extends AbstractController {

  public $__projectDir;

  public function __construct($projectDir)
  {
      $this->__projectDir = $projectDir;
  }

  /**
   * @Route("/", name="app_index")
   */
  public function show() {
    return $this->render('index/index.html.twig');
  }

  /**
   * @Route("/test", name="test_index")
   */
  public function showTest() {
    return $this->render('new/index/index.html.twig');
  }

}
