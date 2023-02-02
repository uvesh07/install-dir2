<?php

  namespace Drupal\basic_page\Controller;
  use Drupal\core\Controller\ControllerBase;

  class BasicPageController extends ControllerBase{
      public function basicPage(){
        return[
          '#markup' => 'Hello'
        ];
      }
  }

?>