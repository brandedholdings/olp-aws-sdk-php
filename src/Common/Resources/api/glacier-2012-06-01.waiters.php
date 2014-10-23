<?php return [
  'waiters' => [
    '__default__' => [
      'interval' => 3,
      'max_attempts' => 15,
    ],
    '__VaultState' => [
      'operation' => 'DescribeVault',
    ],
    'VaultExists' => [
      'extends' => '__VaultState',
      'ignore_errors' => [
        'ResourceNotFoundException',
      ],
      'success_type' => 'output',
    ],
    'VaultNotExists' => [
      'extends' => '__VaultState',
      'success_type' => 'error',
      'success_value' => 'ResourceNotFoundException',
    ],
  ],
];
