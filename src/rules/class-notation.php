<?php

/**
 * Class Notation Rules
 * https://github.com/FriendsOfPHP/PHP-CS-Fixer/blob/master/doc/rules/index.rst#class-notation
 */

return [

    /**
     * Class, trait and interface elements must be separated with one or none blank line.
     */
    'class_attributes_separation' => [
        'elements' => [
            'const' => 'one',
            'method' => 'one',
            'property' => 'one',
            'trait_import' => 'none',
        ],
    ],
    
    /**
     * Whitespace around the keywords of a class, trait, enum or interfaces definition 
     * should be one space.
     */
    'class_definition' => [
        'multi_line_extends_each_single_line' => true,
        'single_item_single_line' => true,
        'single_line' => true,
    ],

    /**
     * There should be no empty lines after class opening brace.
     */
    'no_blank_lines_after_class_opening' => true,

    /**
     * Inside class or interface element self should be preferred to the class name itself.
     * (risky)
     */
    'self_accessor' => true,

    /**
     * There MUST NOT be more than one property or constant declared per statement.
     */
    'single_class_element_per_statement' => [
        'elements' => ['const', 'property'],
    ],

    /**
     * Visibility MUST be declared on all properties and methods; 
     * abstract and final MUST be declared before the visibility; 
     * static MUST be declared after the visibility.
     */
    'visibility_required' => [
        'elements' => ['method', 'property'],
    ],
];