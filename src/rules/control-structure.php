<?php

/**
 * Control Structure Rules
 * https://github.com/FriendsOfPHP/PHP-CS-Fixer/blob/master/doc/rules/index.rst#control-structure
 */

return [

    /**
     * The keyword elseif should be used instead of else 
     * if so that all control keywords look like single words.
     */
    'elseif' => true,

    /**
     * Include/Require and file path should be divided with a single space. 
     * File path should not be placed under brackets.
     */
    'include' => true,

    /**
     * Remove trailing commas in list function calls.
     */
    'no_trailing_comma_in_list_call' => true,

    /**
     * Removes unneeded parentheses around control statements.
     */
    'no_unneeded_control_parentheses' => [
        'statements' => ['break', 'clone', 'continue', 'echo_print', 'return', 'switch_case', 'yield'],
    ],

    /**
     * A case should be followed by a colon and not a semicolon.
     */
    'switch_case_semicolon_to_colon' => true,

    /**
     * Removes extra spaces between colon and case value.
     */
    'switch_case_space' => true,

    /**
     * Multi-line arrays, arguments list and parameters list must have a trailing comma.
     */
    'trailing_comma_in_multiline' => ['elements' => ['arrays']],
];