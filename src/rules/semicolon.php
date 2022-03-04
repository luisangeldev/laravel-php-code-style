<?php

/**
 * Semicolon Rules
 * https://github.com/FriendsOfPHP/PHP-CS-Fixer/blob/master/doc/rules/index.rst#semicolon
 */

return [

    /**
     * Forbid multi-line whitespace before the closing semicolon or move 
     * the semicolon to the new line for chained calls.
     */    
    'multiline_whitespace_before_semicolons' => [
        'strategy' => 'no_multi_line',
    ],

    /**
     * Remove useless (semicolon) statements.
     */
    'no_empty_statement' => true,

    /**
     * Single-line whitespace before closing semicolon are prohibited.
     */
    'no_singleline_whitespace_before_semicolons' => true,

    /**
     * Fix whitespace after a semicolon.
     */
    'space_after_semicolon' => true,
 ];