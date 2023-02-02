<?php

namespace Drupal\cache\Plugin\Block;

use Drupal\Core\Block\BlockBase;

/**
 * Provides an example block.
 *
 * @Block(
 *   id = "cache_example",
 *   admin_label = @Translation("Example"),
 *   category = @Translation("cache")
 * )
 */
class ExampleBlock extends BlockBase {

  /**
   * {@inheritdoc}
   */
  public function build() {

    $num = rand(10,1000);

    $build['content'] = [
      '#markup' => $this->t('It works! ' . $num),
      '#cache' => [
        'tags' => [
          // 'node:1',
          // 'node_list',//rendom number chage every time of editing any node
          // 'user_list',//By edit user details and save and view on site rendom number change
          // 'user:13',
        ],//While editing and save node 34, random number change. But refreshing or url change it will remain same
        'contexts' => [
          // 'url',
          // 'route',
          // 'user.permission',
        ],
        'max-age' => 10,//every 10 second If you are refreshing page you can see the change in random number
      ],
    ];
    return $build;
  }

}