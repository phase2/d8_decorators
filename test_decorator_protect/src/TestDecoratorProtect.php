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
    // NOTE: We need to call parent::public here to get our overridden
    // protected function to be called.
    parent::publicFunction();
    // NOTE: You should NOT do the following:
    // $this->testDecorator->publicFunction()
    // because then it will call the protected function of the inner service
    // rather than calling our override below.
  }

  protected function protectedFunction() {
    print "Decorator PROTECT Protected\n";
    // You can still call the parent protected function if you don't need
    // to completely replace it.
    parent::protectedFunction();
    // NOTE: You CANNOT do the following:
    // $this->testDecorator->protectedFunction()
    // Because you can only call public methods of the inner decorator.
  }

}
