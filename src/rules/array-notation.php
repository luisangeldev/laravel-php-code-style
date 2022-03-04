<?php

/**
 * Array Notation Rules
 * https://github.com/FriendsOfPHP/PHP-CS-Fixer/blob/master/doc/rules/index.rst#array-notation
 */

return [
    
    /**
     * PHP arrays should be declared using the configured syntax.
     */
    'array_syntax' => ['syntax' => 'short'],

    /**
     * Operator => should not be surrounded by multi-line whitespaces.
     */
    'no_multiline_whitespace_around_double_arrow' => true,

    /**
     * PHP single-line arrays should not have trailing comma.
     */
    'no_trailing_comma_in_singleline_array' => true,

    /**
     * In array declaration, there MUST NOT be a whitespace before each comma.
     */
    'no_whitespace_before_comma_in_array' => true,

    /**
     * Array index should always be written by using square braces.
     */
    'normalize_index_brace' => true,

    /**
     * Arrays should be formatted like function/method arguments, 
     * without leading or trailing single line space.
     */
    'trim_array_spaces' => true,

    /**
     * In array declaration, there MUST be a whitespace after each comma.
     */
    'whitespace_after_comma_in_array' => true,
];