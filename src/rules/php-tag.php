<?

/**
 * PHP Tag Rules
 * https://github.com/FriendsOfPHP/PHP-CS-Fixer/blob/master/doc/rules/index.rst#php-tag
 */

return [
    
    /**
     * Ensure there is no code on the same line as the PHP open tag and it is followed by a blank line.
     */
    'blank_line_after_opening_tag' => true,

    /**
     * PHP code must use the long tags or short-echo tags and not other tag variations.
     */
    'full_opening_tag' => true,

    /**
     * Ensure there is no code on the same line as the PHP open tag.
     */
    'linebreak_after_opening_tag' => true,

    /**
     * The closing ?> tag MUST be omitted from files containing only PHP.
     */
    'no_closing_tag' => true,
];