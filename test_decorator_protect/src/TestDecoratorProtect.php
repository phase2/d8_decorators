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

  /**
   * {@inheritdoc}
   */
  public function publicFunction() {
    print "Decorator PROTECT Public\n";
    // Note we need to call parent::public here to get our overridden
    // protected function to be called.  If we used $this->testDecorator
    // then the protected method in the chained service will be run instead
    // of ours.
    parent::publicFunction();
  }

  protected function protectedFunction() {
    print "Decorator PROTECT Protected\n";
  }

}
