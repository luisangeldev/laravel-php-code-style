<?php

/**
 * Basic rules
 * https://github.com/FriendsOfPHP/PHP-CS-Fixer/blob/master/doc/rules/index.rst#basic
 */

return [
    
    /**
     * The body of each structure MUST be enclosed by braces. 
     * Braces should be properly placed. Body of braces should be properly indented.
     */
    'braces' => true,

    /**
     * PHP code MUST use only UTF-8 without BOM (remove BOM).
     */
    'encoding' => true,

    /**
     * Classes must be in a path that matches their namespace, 
     * be at least one namespace deep and the class name should match the file name.
     */
    'psr_autoloading' => true,
];