<?php

/**
 * Cast Notation Rules
 * https://github.com/FriendsOfPHP/PHP-CS-Fixer/blob/master/doc/rules/index.rst#cast-notation
 */

return [

    /**
     * A single space or none should be between cast and variable.
     */
    'cast_spaces' => true,

    /**
     * Cast should be written in lower case.
     */
    'lowercase_cast' => true,

    /**
     * Short cast bool using double exclamation mark should not be used.
     */
    'no_short_bool_cast' => true,

    /**
     * Cast (boolean) and (integer) should be written as (bool) and (int), 
     * (double) and (real) as (float), (binary) as (string).
     */
    'short_scalar_cast' => true,
];