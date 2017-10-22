<?php


use Behat\MinkExtension\Context\RawMinkContext;

/**
 * Context for account suite.
 */
class AccountContext extends RawMinkContext
{
    use CommonFunctions;
    public function __construct()
    {
    }

    /**
     * @When /^(?:|I )fill in "(?P<field>(?:[^"]|\\")*)" with random yopmail$/
     */
    public function fillFieldRandom($field)
    {
        //complete the random characters required
        $randomYopmail = $this->doRandom('char') . '@yopmail.com';

        $this->getSession()->getPage()->fillField($field, $randomYopmail);
    }
}