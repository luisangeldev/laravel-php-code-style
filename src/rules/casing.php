<?php

/**
 * Casing Rules
 * https://github.com/FriendsOfPHP/PHP-CS-Fixer/blob/master/doc/rules/index.rst#casing
 */

return [

    /**
     * The PHP constants true, false, and null MUST be written using the correct casing.
     */
    'constant_case' => ['case' => 'lower'],

    /**
     * PHP keywords MUST be in lower case.
     */
    'lowercase_keywords' => true,

    /**
     * Class static references self, static and parent MUST be in lower case.
     * (added from Symfony)
     */
    'lowercase_static_reference' => true,

    /**
     * Magic method definitions and calls must be using the correct casing.
     * (added from Symfony)
     */
    'magic_method_casing' => true,

    /**
     * Magic constants should be referred to using the correct casing.
     */
    'magic_constant_casing' => true,

    /**
     * Function defined by PHP should be called using the correct casing.
     */
    'native_function_casing' => true,
];