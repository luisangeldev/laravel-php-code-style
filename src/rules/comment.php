<?php

/**
 * Comment Rules
 * https://github.com/FriendsOfPHP/PHP-CS-Fixer/blob/master/doc/rules/index.rst#comment
 */

return [

    /**
     * There MUST be no trailing spaces inside comment or PHPDoc.
     */
    'no_trailing_whitespace_in_comment' => true,

    /**
     * Single-line comments and multi-line comments with only one line of actual 
     * content should use the // syntax.
     */
    'single_line_comment_style' => [
        'comment_types' => ['hash'],
    ],
];