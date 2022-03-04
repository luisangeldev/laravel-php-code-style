<?php

/**
 * Return Notation Rules
 * https://github.com/FriendsOfPHP/PHP-CS-Fixer/blob/master/doc/rules/index.rst#return-notation
 */

return [

    /**
     * There should not be an empty return statement at the end of a function.
     */
    'no_useless_return' => true,

    /**
     * A return statement wishing to return void should not return null.
     */
    'simplified_null_return' => false, // disabled as "risky"
];