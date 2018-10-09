<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class ContactController extends AbstractController {

  public $__projectDir;

  public function __construct($projectDir)
  {
      $this->__projectDir = $projectDir;
  }

  /**
   * @Route("/contact", name="app_contact")
   */
  public function showTest() {
    return $this->render('contact/contact.html.twig');
  }

}
