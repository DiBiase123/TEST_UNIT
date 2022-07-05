<?php

use Behat\Behat\Context\Context;
use Behat\Gherkin\Node\PyStringNode;
use Behat\Gherkin\Node\TableNode;

/**
 * Defines application features from the specific context.
 */
class FeatureContext implements Context
{
  /**
     * @When je calcul son Impots
     */
    public function jeCalculSonImpots()
    {
        throw new PendingException();
    }

    /**
     * @Then il doit payer :arg1
     */
    public function ilDoitPayer($arg1)
    {
        throw new PendingException();
    }

    public function __construct()
    {
    }
}
