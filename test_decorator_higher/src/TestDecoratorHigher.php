<?php

namespace Drupal\test_decorator_higher;

use Drupal\test_decorator_core\TestDecoratorCore;
use Drupal\test_decorator_core\TestDecoratorInterface;

class TestDecoratorHigher extends TestDecoratorCore {

  /**
   * The inner service.
   *
   * @var \Drupal\test_decorator_core\TestDecoratorInterface
   */
  protected $testDecorator;

  
  public function __construct(TestDecoratorInterface $test_decorator) {
    $this->testDecorator = $test_decorator;
    parent::__construct();
  }

  /**
   * {@inheritdoc}
   */
  public function publicFunction() {
    $this->testDecorator->publicFunction();
    print "Decorator HIGHER Public\n";
  }
  
}
