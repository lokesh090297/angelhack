<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
namespace Drupal\filterdata\Form;
use Drupal\Core\Form\FormBase;
class CustomSearchForm extends FormBase{
  
  public function buildForm(array $form, \Drupal\Core\Form\FormStateInterface $form_state) {
    $form['search']=[
      '#type' => 'label',
      '#title' => $this->t('Discover by city...')
        ];
    $form['box']=[
      '#type' => 'textfield',
      '#placeholder' => $this->t("Enter cities.."),
      '#required' => TRUE
          ];
    $form['query']=[
      '#type' => 'submit',
      '#value' => $this->t('Discover Gym'),
      '#ajax' =>[
        'callback' => '::FetchDataCheck',
        'event' => 'click',
        'progress' =>[
          'type' => 'throbber',
          'message' => 'getting data'
        ]
      ]
    ];
    $form['results']=[
      '#type' => 'container',
      '#prefix' => '<div id="searchresult">',
      '#suffix' => '</div>'
    ];
    return $form;
  }
  
  public function FetchDataCheck(array $form, \Drupal\Core\Form\FormStateInterface $form_state){
  $response=new \Drupal\Core\Ajax\AjaxResponse();
  $strsearch=$form_state->getValue('box');
  
  $res=\Drupal::database()->select('node_field_data','nfd')
      ->fields('gc',[''])
      ->execute()->fetchAll();
$result=json_decode(json_encode($res), TRUE);
  
  
  if(!in_array($strsearch, $result)){
        $response->addCommand(new \Drupal\Core\Ajax\HtmlCommand('#searchresult',$strsearch." Match Found"));
      }else{
        $response->addCommand(new \Drupal\Core\Ajax\HtmlCommand('#searchresult',"sorry"));
      }
      return $response;
  }

  public function getFormId() {
    return 'search.form';
  }

  public function submitForm(array &$form, \Drupal\Core\Form\FormStateInterface $form_state) {
    
  }

}