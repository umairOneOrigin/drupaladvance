<?php
namespace Drupal\block_example\plugin\block;

use Drupal\Core\Block\BlockBase;

/**
 * Provides a block with simple text
 * 
 * @Block(
 *   id = "simple_example_block",
 *   admin_label = @Translation("Simple Text Block")
 * )
 */

class ExampleBlock extends BlockBase {

    /**
     * {@inheritdoc}
     */

    public function build() {
        return [
            '#type' => 'markup' ,
            '#markup' => 'This is drupal 9 custom block.',
        ];
    }
 }

 ?>