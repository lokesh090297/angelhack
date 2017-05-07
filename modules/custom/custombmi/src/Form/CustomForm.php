<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
namespace Drupal\custombmi\Form;
use Drupal\Core\Form\FormBase;
class CustomForm extends FormBase{
  
  public function buildForm(array $form, \Drupal\Core\Form\FormStateInterface $form_state) {
    $form['BMI']=[
      '#type' => 'details',
      '#title' => $this->t('BMI Calculations'),
      '#open' => TRUE,
    ];
    $form['BMI']['weight']=[
      '#type' => 'number',
      '#title' => $this->t('Weight (Kgs)'),
      '#required' => TRUE,
    ];
    $form['BMI']['Height']=[
      '#type' => 'number',
      '#title' => $this->t('Height (cms)'),
      '#required' => TRUE,
    ];
    $form['BMI']['calculate']=[
      '#type' =>'submit',
      '#value' => 'Calculate',
      '#ajax' => [
        'callback' => '::bmicalc',
        'event' => 'click',
        'progress'=>[
          'type' => 'throbber',
          'message' => 'Processing'
        ]
      ]
    ];
    $form['BMI']['result']=[
      '#prefix' => '<div id="result">',
      '#suffix' => '</div>'
    ];
    return $form;
  }
  
  public function bmicalc(array &$form, \Drupal\Core\Form\FormStateInterface $form_state){
  $response=new \Drupal\Core\Ajax\AjaxResponse();
  $height=$form_state->getValue('Height');
  $weight=$form_state->getValue('weight');
      if($height>0 && $weight>0){
        $height=$height/100;
        $result= round($weight/($height*$height));
        if ($result <= 18.5){
        $text_bmi='Under Weight';
        }
        elseif ($result > 18.5 && $result <= 24.9) {
        $text_bmi='Normal Weight';
      }elseif ($result >24.9 && $result <= 29.9){
        $text_bmi='Over Weight';
       }else{
         $text_bmi='Obesity';
       }
              
        $response->addCommand(new \Drupal\Core\Ajax\HtmlCommand('#result',$result."  ".$text_bmi));
      }else{
        $response->addCommand(new \Drupal\Core\Ajax\HtmlCommand('#result',"Enter the correct Height and weigth"));
        
      }
      return $response;
  }

  public function getFormId() {
    return 'bmi.form';
  }

  public function submitForm(array &$form, \Drupal\Core\Form\FormStateInterface $form_state) {
    
  }

}