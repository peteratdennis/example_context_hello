<?php

namespace Peteradennis\Behat\Context;

use Behat\Behat\Context\Context;

class ExampleHelloContext implements Context {

  /**
   * Say hello world
   *
   * @Given /^I say hello world$/
   */
  public function iSayHelloWorld() {
    throw new \Exception('I did not hear "Hello world"');
  }

}
