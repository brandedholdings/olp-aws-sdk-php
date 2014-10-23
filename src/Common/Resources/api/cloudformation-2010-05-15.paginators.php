<?php return [
  'pagination' => [
    'DescribeStackEvents' => [
      'input_token' => 'NextToken',
      'output_token' => 'NextToken',
      'result_key' => 'StackEvents',
    ],
    'DescribeStackResources' => [
      'result_key' => 'StackResources',
    ],
    'DescribeStacks' => [
      'input_token' => 'NextToken',
      'output_token' => 'NextToken',
      'result_key' => 'Stacks',
    ],
    'ListStackResources' => [
      'input_token' => 'NextToken',
      'output_token' => 'NextToken',
      'result_key' => 'StackResourceSummaries',
    ],
    'ListStacks' => [
      'input_token' => 'NextToken',
      'output_token' => 'NextToken',
      'result_key' => 'StackSummaries',
    ],
  ],
];
