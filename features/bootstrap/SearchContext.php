<?php

use Behat\MinkExtension\Context\RawMinkContext;

/**
 * Context for search suite.
 */
class SearchContext extends RawMinkContext
{
    public function __construct()
    {
    }

    public function fillFieldRandom($field)
    {
    }
var search = 'randomS'.toLowerCase();
var result = document.querySelectorAll('.c-product-card__name');
var i;
var y = 1;
for (i = 0; i < result.length; i++) {
if (result[i].innerText.toLowerCase().indexOf(search) == -1
{
y = 0;
break;
}
return y;
}

}