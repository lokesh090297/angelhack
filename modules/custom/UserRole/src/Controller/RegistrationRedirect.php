<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
namespace Drupal\UserRole\Controller;
use Drupal\Core\Controller\ControllerBase;
class RegistrationRedirect extends ControllerBase{
  public function getRedirect(){
    $form=[];
// $form= \Drupal::formBuilder()->getForm('\Drupal\user\Form\UserLoginForm');
    return $form;
  }
}