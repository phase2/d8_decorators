<?php

namespace Drupal\test_decorator_core;

/**
 * Interface for service.
 */
interface TestDecoratorInterface {

  /**
   * Public function of the service.
   */
  public function publicFunction();
  
  /**
   * Runs the service. 
   */
  public function runService();
  
}
