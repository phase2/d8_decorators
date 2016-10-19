<?php

namespace Drupal\test_decorator_core;

use Drupal\test_decorator_core\TestDecoratorInterface;

class TestDecoratorCore implements TestDecoratorInterface {

  /**
   * Constructs the service.
   */
  public function __construct() {
  }
  
  protected function protectedFunction() {
    print "Core Protected\n";
  }

  /**
   * {@inheritdoc}
   */
  public function publicFunction() {
    $this->protectedFunction();
    print "Core Public\n";
  }
  
  /**
   * {@inheritdoc}
   */
  public function runService() {
    $this->publicFunction();
  }

}
