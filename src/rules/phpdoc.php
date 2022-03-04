<?php

/**
 * PHPDoc Rules
 * https://github.com/FriendsOfPHP/PHP-CS-Fixer/blob/master/doc/rules/index.rst#phpdoc
 */

return [
    /**
     * Renames PHPDoc tags.
     */
    'general_phpdoc_tag_rename' => true,

    /**
     * There should not be blank lines between docblock and the documented element.
     */
    'no_blank_lines_after_phpdoc' => true,

    /**
     * There should not be empty PHPDoc blocks.
     */
    'no_empty_phpdoc' => true,

    /**
     * Docblocks should have the same indentation as the documented subject.
     */
    'phpdoc_indent' => true,

    /**
     * Fixes PHPDoc inline tags.
     */
    'phpdoc_inline_tag_normalizer' => true,

    /**
     * @access annotations should be omitted from PHPDoc.
     */
    'phpdoc_no_access' => true,

    /**
     * @package and @subpackage annotations should be omitted from PHPDoc.
     */
    'phpdoc_no_package' => true,

    /**
     * Classy that does not inherit must not have @inheritdoc tags.
     */
    'phpdoc_no_useless_inheritdoc' => true,

    /**
     * Scalar types should always be written in the same form. 
     * int not integer, bool not boolean, float not real or double.
     */
    'phpdoc_scalar' => true,

    /**
     * Single line @var PHPDoc should have proper spacing.
     */
    'phpdoc_single_line_var_spacing' => true,

    /**
     * PHPDoc summary should end in either a full stop, exclamation mark, or question mark.
     */
    'phpdoc_summary' => false,

    /**
     * Docblocks should only be used on structural elements.
     */
    'phpdoc_to_comment' => false, // override to preserve user preference

    /**
     * Forces PHPDoc tags to be either regular annotations or inline.
     */
    'phpdoc_tag_type' => true,

    /**
     * PHPDoc should start and end with content, excluding 
     * the very first and last line of the docblocks.
     */
    'phpdoc_trim' => true,

    /**
     * The correct case must be used for standard PHP types in PHPDoc.
     */
    'phpdoc_types' => true,

    /**
     * @var and @type annotations of classy properties should not contain the name.
     */
    'phpdoc_var_without_name' => true,
];