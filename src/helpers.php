<?php

namespace LaravelPHPCodeStyle;

$rules = array_merge(
    __DIR__. '/rules/alias.php',
    __DIR__. '/rules/array-notation.php',
    __DIR__. '/rules/basic.php',
    __DIR__. '/rules/casing.php',
    __DIR__. '/rules/cast-notation.php',
    __DIR__. '/rules/class-notation.php',
    __DIR__. '/rules/comment.php',
    __DIR__. '/rules/control-structure.php',
    __DIR__. '/rules/function-notation.php',
    __DIR__. '/rules/import.php',
    __DIR__. '/rules/language-construct.php',
    __DIR__. '/rules/namespace-notation.php',
    __DIR__. '/rules/operator.php',
    __DIR__. '/rules/php-tag.php',
    __DIR__. '/rules/phpdoc.php',
    __DIR__. '/rules/return-notation.php',
    __DIR__. '/rules/semicolon.php',
    __DIR__. '/rules/string-notation.php',
    __DIR__. '/rules/whitespace.php',
);

return $rules;