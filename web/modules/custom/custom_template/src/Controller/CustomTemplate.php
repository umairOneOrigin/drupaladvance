<?php

namespace Drupal\custom_template\Controller;

use Drupal\Core\Controller\ControllerBase;

class CustomTemplate extends ControllerBase {

    public function customTemplate() {

        return [
            '#markup' => "Hi Umair, welcome to the custom twig page",
            '#theme' => 'custom_template',
            '#text' => 'Welcome to our Drupal 9 Channel',
        ];

    }

}

?>