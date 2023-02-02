<?php

  namespace Drupal\new_page\Controller;
  use Drupal\Core\Controller\ControllerBase;


  class NewPageController extends ControllerBase{
    public function newPage(){
      return [
        '#title'=>'New page Information',
        '#markup'=>'<h3> This is for practicing custom module and block </h3>'
      ];
    }

    public function information(){

      $data = array(
        'name' => 'Pathan Uvesh',
        'email' => 'uvesh54@gmail.com'
      );

      return[
        '#title'=>'Information Page',
        '#theme'=>'information_page',
        '#items'=>$data
      ];
    }
  }

?>