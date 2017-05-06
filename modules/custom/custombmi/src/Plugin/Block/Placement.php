<?php

namespace Drupal\custombmi\Plugin\Block;
use Drupal\Core\Block\BlockBase;

/**
 * 
 *
 * @Block(
 *  id = "bmi_calculate",
 *  admin_label = @Translation("BMI calculate"),
 * )
 */

class CurrencyConvertorBlock extends BlockBase{
  
  public function build() {
   
    $build['form']= \Drupal::formBuilder()->getForm('Drupal\custombmi\Form\CustomForm');
    
    return $build;
    
  }

}