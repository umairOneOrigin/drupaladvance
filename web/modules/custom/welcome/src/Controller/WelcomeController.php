<?php

namespace Drupal\welcome\Controller;

class WelcomeController
{
    public function welcome()
    {
        $element = array('#markup' => 'Welcome to Drupal Page');
        return $element;
    }
}