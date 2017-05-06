<?php
namespace Drupal\member_payment\Form;
use Drupal\Core\Form\FormBase;
use Drupal\Core\Form\ConfigFormBase;
use Drupal\Core\Form\FormInterface;
use Drupal\Core\Form\FormStateInterface;
use \Drupal\node\Entity\Node;
use \Drupal\file\Entity\File;
use Drupal\user\Entity\User;
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
  { $name=$form_state->getValue('payment_amount');
    if (!preg_match("/^[1-9][0-9]*$/", $name)) 
     {
     $form_state->setErrorByName('Add amount to your wallet', t('INCORRENT AMOUNT'));
     }
  }
  public function submitForm(array &$form, FormStateInterface $form_state) 
  {  
    $current_user = \Drupal::currentUser();
    $id = $current_user->id();
    $payment_amount = $form_state->getValue('payment_amount');
    $result = db_query("Select payment_amount from member_payment where user_id = '" . $id . "'")->fetchCol();
    if(isset($result[0]))
    {
     $upd_amt = $result[0]-$payment_amount;  
      db_query("Update member_payment set payment_amount='$upd_amt' where user_id='$id'");
    }
   else 
    {
      db_query("insert into member_payment values ('$id','$payment_amount')" );
    }
    
}
}
