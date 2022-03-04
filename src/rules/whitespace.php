<?php

/**
 * Whitespace Rules
 * https://github.com/FriendsOfPHP/PHP-CS-Fixer/blob/master/doc/rules/index.rst#whitespace
 */

return [
    /**
     * Each element of an array must be indented exactly once.
     */
    'array_indentation' => true,
    
    /**
     * An empty line feed must precede any configured statement.
     */
    'blank_line_before_statement' => [
        'statements' => ['return'],
    ],

    /**
     * Code MUST use configured indentation type.
     */
    'indentation_type' => true,

    /**
     * All PHP files must use same line ending.
     */
    'line_ending' => true,

    /**
     * Removes extra blank lines and/or blank lines following configuration.
     */
    'no_extra_blank_lines' => [
        'tokens' => [
            'extra',
            'throw',
            'use',
        ],
    ],

    /**
     * There MUST NOT be spaces around offset braces.
     */
    'no_spaces_around_offset' => [
        'positions' => ['inside', 'outside'],
    ],

    /**
     * There MUST NOT be a space after the opening parenthesis. 
     * There MUST NOT be a space before the closing parenthesis.
     */
    'no_spaces_inside_parenthesis' => true,

    /**
     * Remove trailing whitespace at the end of non-blank lines.
     */
    'no_trailing_whitespace' => true,

    /**
     * Remove trailing whitespace at the end of blank lines.
     */
    'no_whitespace_in_blank_line' => true,

    /**
     * A PHP file without end tag must always end with a single empty line feed.
     */
    'single_blank_line_at_eof' => true,
];