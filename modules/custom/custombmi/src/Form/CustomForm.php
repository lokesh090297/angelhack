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
      '#title' => $this->t('Weight'),
      '#required' => TRUE,
      '#suffix' => '<span>Kgs</span>'
    ];
    $form['BMI']['Height']=[
      '#type' => 'number',
      '#title' => $this->t('Height'),
      '#required' => TRUE,
      '#suffix' => '<span>cms</span>'
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
        $result= round($weight/($height*$height));
        $response->addCommand(new \Drupal\Core\Ajax\HtmlCommand('#result',$result));
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