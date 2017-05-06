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
      $ac =array(1000,2000,3000
       );
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
         '#type' => 'select',
         '#title' => t('Amount'),
         '#options' => $ac,   
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
     $id = $form_state->getValue('user_id');
    if (!preg_match("/^[1-9][0-9]*$/", $id)) 
     {
     $form_state->setErrorByName('User ID', t('Incorrect User-id'));
     }
  }
  public function submitForm(array &$form, FormStateInterface $form_state) 
  {  
    $id = $form_state->getValue('user_id');
    $hours = $form_state->getValue('hours');
    $name=$form_state->getValue('amount');
    $payment_amount =$form['amount']['#options'][$name];
    $mem = $form_state->getValue('co-members');
    $total = $hours*$payment_amount*$mem;
    $user_data = \Drupal::service('entity_type.manager')->getStorage('user')->load($id);
    $result = db_query("Select payment_amount from member_payment where user_id = '" . $id . "'")->fetchCol();
    if(isset($result[0]))
    { 
       if($result[0] == 0)
       {
          drupal_set_message("No amount in your wallet");
       }
       else {
          $site_mail = \Drupal::config('system.site')->get('mail');
          $send_mail = new \Drupal\Core\Mail\Plugin\Mail\PhpMail();
          $message['headers'] = array(
          'content-type' => 'text/html',
          'MIME-Version' => '1.0',
          'reply-to' => $site_mail,
           'from' =>  $site_mail
          );
       $message['subject']= 'Confirmation Link to get start your Gyming';
       $message['body'] = '<html>
                     <body>
                          Hello ,<br>
                           Hey there, we’re just writing to let you know that you’ve been registered with us and you get your slot by clicking on this confirmation link - angelhack.com/'.$id.'/'.$hours.'/'.$total.'
                          <br>
                          Sincere Thanks
                      </body>
                      </html> ';
//  $message['body'] = '<html>
//          <body>
//  Hello, Thank you for quick response!'.$mes.
//'</body>
//          </html>';
     $message['to'] = $user_data->get('mail')->value;
     $result = $send_mail->mail($message);
       }
    }
   else 
    {
     drupal_set_message("User is not registered");
    }
    
}
}
