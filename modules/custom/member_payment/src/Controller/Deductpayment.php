<?php
namespace Drupal\member_payment\Controller;
use Drupal\Core\Controller\ControllerBase;
use Symfony\Component\HttpFoundation\Request;
use Drupal\Core\Form\FormInterface;
use Drupal\Core\Form\FormStateInterface;
use \Drupal\node\Entity\Node;
use \Drupal\file\Entity\File;
use Drupal\user\Entity\User;
/**
 * Pregnancy due date calculator
 */
class Deductpayment extends ControllerBase {
/**
 * Pregnancy due date calculator
 * @param Request $request
 * @param int $month
 * @param int $day
 * @param int $year
 * @return print data in json format
 */
  public function content() {
     $id = \Drupal::request()->get('user_id');
     $hours = \Drupal::request()->get('hours');
     $total = \Drupal::request()->get('total');
     $result = db_query("Select payment_amount from member_payment where user_id = '" . $id . "'")->fetchCol();
     $upd_amt = $result[0]-$total;
   db_query("Update member_payment set payment_amount='$upd_amt' where user_id='$id'");
   drupal_set_message('Payment done successfully. Get ready to fit');
   return array(
      '#type' => 'markup',
      '#markup' => $this->t('Amount in your wallet :'.$upd_amt),
    );
  }
  }
