<?php

namespace Drupal\test_decorator_inter;

use Drupal\test_decorator_core\TestDecoratorCore;
use Drupal\test_decorator_core\TestDecoratorInterface;

class TestDecoratorInter implements TestDecoratorInterface {

  /**
   * The inner service.
   *
   * @var \Drupal\test_decorator_core\TestDecoratorInterface
   */
  protected $testDecorator;

  
  public function __construct(TestDecoratorInterface $test_decorator) {
    $this->testDecorator = $test_decorator;
  }

  /**
   * {@inheritdoc}
   */
  public function publicFunction() {
    print "Decorator INTERFACE injection Public\n";
    $this->testDecorator->publicFunction();
  }
  
  /**
   * {@inheritdoc}
   */
  public function runService() {
    $this->publicFunction();
  }

}
