<?php

/**
 * Alias Rules
 * https://github.com/FriendsOfPHP/PHP-CS-Fixer/blob/master/doc/rules/index.rst#alias
 */

return [

    /**
     * Master functions shall be used instead of aliases. (risky)
     */
    'no_alias_functions' => true,

    /**
     * Either language construct print or echo should be used.
     */
    'no_mixed_echo_print' => [
        'use' => 'echo',
    ],
];