<?php

/**
 * Import Rules
 * https://github.com/FriendsOfPHP/PHP-CS-Fixer/blob/master/doc/rules/index.rst#import
 */

return [

    /**
     * Transforms imported FQCN parameters and return types in function 
     * arguments to short version.
     */
    'fully_qualified_strict_types' => true,

    /**
     * Remove leading slashes in use clauses.
     */
    'no_leading_import_slash' => true,

    /**
     * Ordering use statements.
     */
    'ordered_imports' => ['sort_algorithm' => 'alpha'],

    /**
     * There MUST be one use keyword per declaration.
     */
    'single_import_per_statement' => true,

    /**
     * Each namespace use MUST go on its own line and there MUST be one blank line after 
     * the use statements block.
     */
    'single_line_after_imports' => true,
];
