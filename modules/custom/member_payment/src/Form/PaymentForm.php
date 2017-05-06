<?php
namespace Drupal\bd_node\Form;
use Drupal\Core\Form\FormBase;
use Drupal\Core\Form\ConfigFormBase;
use Drupal\Core\Form\FormInterface;
use Drupal\Core\Form\FormStateInterface;
use \Drupal\node\Entity\Node;
use \Drupal\file\Entity\File;
class PaymentForm extends FormBase
{
  public function getFormId() 
{
    return 'payment_add';
}
  public function buildForm(array $form, FormStateInterface $form_state) 
{
      
         $form['user_id'] = array(
      		'#type' => 'hidden',
       	);
         $form['payment_amount'] = array(
         '#type'  => 'textfield',
         '#title' => t('Add amount to your wallet'),
         '#required' => TRUE,
      );    
       $form['actions']['#type']= 'actions';
     
     $form['actions']['submit'] = array(
          '#type'  => 'submit',
          '#value' => t('Add'), 
    );
    return $form;
}
  public function validateForm(array &$form, FormStateInterface $form_state) 
  { 
  /*Nothing to validate on this form*/
  }
  public function submitForm(array &$form, FormStateInterface $form_state) 
  {  
}
