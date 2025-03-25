<?php
declare(strict_types=1);

use PhpCsFixer\Runner\Parallel\ParallelConfigFactory;

$finder = PhpCsFixer\Finder::create()
    ->in(
        [
            __DIR__ . '/src',
            __DIR__ . '/tests',
            __DIR__ . '/generated',
            __DIR__ . '/examples',
        ]
    )
    ->append(
        [
            __FILE__,
        ]
    )
    ->notContains([
        '_generated',
    ])
;
$rules = [
    /** symfony set @see \PhpCsFixer\RuleSet\Sets\PSR12Set */
    '@PSR12'                 => true,
    /** symfony set @see \PhpCsFixer\RuleSet\Sets\SymfonySet */
    '@Symfony'               => true,
    /** symfony set @see \PhpCsFixer\RuleSet\Sets\SymfonyRiskySet */
    '@Symfony:risky'           => true,
    '@PhpCsFixer:risky'        => true,
    '@PHP83Migration'          => true,
    '@DoctrineAnnotation'      => true,
    // OEG Set:
    'binary_operator_spaces'                        => [
        'default'   => 'align',
        'operators' => [
            '??' => 'single_space',
        ],
    ],
    'concat_space'                                  => ['spacing' => 'one'],

    'encoding'                                      => true,
    'blank_lines_before_namespace'                  => true,
    'blank_line_after_opening_tag'                  => false, // psr 12 = true
    'strict_param'                                  => true,
    'no_useless_else'                               => true,
    'no_useless_return'                             => true,
    'modernize_types_casting'                       => true,
    'declare_strict_types'                          => true,
    'dir_constant'                                  => true,

    'php_unit_dedicate_assert'                      => ['target' => 'newest'],
    'php_unit_test_case_static_method_calls'        => ['call_type' => 'this'],
    'fopen_flags'                                   => false,
    'combine_nested_dirname'                        => true,

    'ordered_imports'                               => [
        'imports_order'  => [
            // symfony order: Class Function Const
            // OEG:
            'const',
            'class',
            'function',
        ],
        'sort_algorithm' => 'alpha',
    ],

    'global_namespace_import'                       => [
        'import_classes'   => true,
        'import_functions' => true,
        'import_constants' => true,
    ],

    // if this is true, phpstan checks will fail
    'phpdoc_to_comment'                                => false,
    'nullable_type_declaration_for_default_null_value' => true,
    'no_superfluous_phpdoc_tags'                       => false, // symfony -> true löscht aber mixed return was phpstan aggro macht
    // prevent mega diff
    'blank_line_between_import_groups'              => false, // PSR 12 = true

    // new stuff that fails to much:
    'ordered_types' => [
        // default symfony "always_last"
        'null_adjustment' => 'always_first',
    ],
];

$config = new PhpCsFixer\Config('webproject-style');
$config->setRules($rules);
$config->setUsingCache(true);
$config->setLineEnding("\n");
$config->setRiskyAllowed(true);
$config->setParallelConfig(ParallelConfigFactory::detect());
$config->setFinder($finder);

return $config;
