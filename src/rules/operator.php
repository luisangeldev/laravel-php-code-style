<?php

/**
 * Operator Rules
 * https://github.com/FriendsOfPHP/PHP-CS-Fixer/blob/master/doc/rules/index.rst#operator
 */

return [
    /**
     * Binary operators should be surrounded by space as configured.
     */
    'binary_operator_spaces' => [
        'default' => 'single_space',
        'operators' => ['=>' => null],
    ],

    /**
     * Concatenation should be spaced according configuration.
     */
    'concat_space' => [
        'spacing' => 'none',
    ],
    
    /**
     * Pre- or post-increment and decrement operators should be used if possible.
     */
    'increment_style' => ['style' => 'post'],

    /**
     * Logical NOT operators (!) should have one trailing whitespace.
     */
    'not_operator_with_successor_space' => true,

    /**
     * There should not be space before or after object operators -> and ?->.
     */
    'object_operator_without_whitespace' => true,

    /**
     * Replace all <> with !=.
     */
    'standardize_not_equals' => true,

    /**
     * Standardize spaces around ternary operator.
     */
    'ternary_operator_spaces' => true,

    /**
     * Unary operators should be placed adjacent to their operands.
     */
    'unary_operator_spaces' => true,
];