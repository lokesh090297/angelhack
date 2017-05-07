<?php
/**
 * @file
 * Contains \Drupal\member_payment\Plugin\Block\Amount.
 */
namespace Drupal\member_payment\Plugin\Block;
use Drupal\Core\Block\BlockBase;
use Drupal\node\Entity\Node;
use Drupal\Core\Url;
use Drupal\user\Entity\User;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Drupal\Core\Entity\Query\QueryFactory;
use Drupal\Core\Plugin\ContainerFactoryPluginInterface;
/**
 * Provides a 'Amount balance' block.
 *
 * @Block(
 *   id = "amount",
 *   admin_label = @Translation("Amount Block"),
 *   category = @Translation("Custom Amount block")
 * )
 */
class Amount extends BlockBase {
  public function build() {
    $current_user = \Drupal::currentUser();
    $id = $current_user->id();
    $result = db_query("Select payment_amount from member_payment where user_id = '" . $id . "'")->fetchCol();
    return array(
        '#type' => 'markup',
        '#markup' => $this->t('Amount in your wallet:'.$result[0]),
   
            );
  }
}
  
