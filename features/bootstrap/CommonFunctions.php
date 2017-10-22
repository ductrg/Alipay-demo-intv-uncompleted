<?php

trait CommonFunctions
{
    /**
    * Generate 3 letters randomly
    */
    public function doRandom($type)
    {
        if ($type == 'char') {
            $string = substr(str_shuffle("abcdefghijklmnopqrstuvwxyz"), 0, 3);
            return $string;

        } else {
            throw new \InvalidArgumentException(sprintf('This random type "%s" is not supported', $type));
        }
    }
}