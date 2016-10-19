<?php

namespace Drupal\test_decorator_protect;

use Drupal\test_decorator_core\TestDecoratorCore;
use Drupal\test_decorator_core\TestDecoratorInterface;

class TestDecoratorProtect extends TestDecoratorCore {
  
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

  protected function protectedFunction() {
    print "Decorator PROTECT Protected\n";
  }
  
}
