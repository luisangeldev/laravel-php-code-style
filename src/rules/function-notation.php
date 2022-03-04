<?php

/**
 * Function Notation Rules
 * https://github.com/FriendsOfPHP/PHP-CS-Fixer/blob/master/doc/rules/index.rst#function-notation
 */

return [
    /**
     * Spaces should be properly placed in a function declaration.
     */
    'function_declaration' => true,

    /**
     * Ensure single space between function's argument and its typehint.
     */
    'function_typehint_space' => true,

    /**
     * In method arguments and method call, there MUST NOT be a space before each comma 
     * and there MUST be one space after each comma. Argument lists MAY be split across 
     * multiple lines, where each subsequent line is indented once. 
     * When doing so, the first item in the list MUST be on the next line, and there 
     * MUST be only one argument per line.
     */
    'method_argument_space' => [
        'on_multiline' => 'ignore',
    ],

    /**
     * In function arguments there must not be arguments with default values before 
     * non-default ones. (risky)
     */
    'no_unreachable_default_argument_value' => true,
];