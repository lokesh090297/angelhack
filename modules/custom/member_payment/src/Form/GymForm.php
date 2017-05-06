<?php
namespace Drupal\member_payment\Form;
use Drupal\Core\Form\FormBase;
use Drupal\Core\Form\ConfigFormBase;
use Drupal\Core\Form\FormInterface;
use Drupal\Core\Form\FormStateInterface;
use \Drupal\node\Entity\Node;
use \Drupal\file\Entity\File;
use Drupal\user\Entity\User;
class GymForm extends FormBase
{
  public function getFormId() 
{
    return 'gym_add';
}
  public function buildForm(array $form, FormStateInterface $form_state) 
{
      
         $form['user_id'] = array(
      	'#type'  => 'textfield',
        '#title' => t('User ID'),
        '#required' => TRUE,
       	);
         $form['hours'] = array(
         '#type'  => 'textfield',
         '#title' => t('No. of hours'),
         '#required' => TRUE,
      ); 
         $form['co-members'] = array(
         '#type'  => 'textfield',
         '#title' => t('Co-Gymmembers'),
         '#required' => TRUE,
      ); 
          $form['amount'] = array(
         '#type'  => 'textfield',
         '#title' => t('Amount'),
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
    $id = $form_state->getValue('user_id');
    $payment_amount = $form_state->getValue('amount');
    $result = db_query("Select payment_amount from member_payment where user_id = '" . $id . "'")->fetchCol();
    if(isset($result[0]))
    { 
       if($result[0] == 0)
       {
          echo 'asds';
          die;
       }
       else {
         echo 'sdsd';
         die;
       }
    }
   else 
    {
      
    }
    
}
}
