<?php return [
  'metadata' => [
    'apiVersion' => '2012-01-25',
    'endpointPrefix' => 'swf',
    'jsonVersion' => '1.0',
    'serviceAbbreviation' => 'Amazon SWF',
    'serviceFullName' => 'Amazon Simple Workflow Service',
    'signatureVersion' => 'v4',
    'targetPrefix' => 'SimpleWorkflowService',
    'timestampFormat' => 'unixTimestamp',
    'protocol' => 'json',
  ],
  'operations' => [
    'CountClosedWorkflowExecutions' => [
      'name' => 'CountClosedWorkflowExecutions',
      'http' => [
        'method' => 'POST',
        'requestUri' => '/',
      ],
      'input' => [
        'shape' => 'CountClosedWorkflowExecutionsInput',
      ],
      'output' => [
        'shape' => 'WorkflowExecutionCount',
      ],
      'errors' => [
        [
          'shape' => 'UnknownResourceFault',
          'exception' => true,
        ],
        [
          'shape' => 'OperationNotPermittedFault',
          'exception' => true,
        ],
      ],
    ],
    'CountOpenWorkflowExecutions' => [
      'name' => 'CountOpenWorkflowExecutions',
      'http' => [
        'method' => 'POST',
        'requestUri' => '/',
      ],
      'input' => [
        'shape' => 'CountOpenWorkflowExecutionsInput',
      ],
      'output' => [
        'shape' => 'WorkflowExecutionCount',
      ],
      'errors' => [
        [
          'shape' => 'UnknownResourceFault',
          'exception' => true,
        ],
        [
          'shape' => 'OperationNotPermittedFault',
          'exception' => true,
        ],
      ],
    ],
    'CountPendingActivityTasks' => [
      'name' => 'CountPendingActivityTasks',
      'http' => [
        'method' => 'POST',
        'requestUri' => '/',
      ],
      'input' => [
        'shape' => 'CountPendingActivityTasksInput',
      ],
      'output' => [
        'shape' => 'PendingTaskCount',
      ],
      'errors' => [
        [
          'shape' => 'UnknownResourceFault',
          'exception' => true,
        ],
        [
          'shape' => 'OperationNotPermittedFault',
          'exception' => true,
        ],
      ],
    ],
    'CountPendingDecisionTasks' => [
      'name' => 'CountPendingDecisionTasks',
      'http' => [
        'method' => 'POST',
        'requestUri' => '/',
      ],
      'input' => [
        'shape' => 'CountPendingDecisionTasksInput',
      ],
      'output' => [
        'shape' => 'PendingTaskCount',
      ],
      'errors' => [
        [
          'shape' => 'UnknownResourceFault',
          'exception' => true,
        ],
        [
          'shape' => 'OperationNotPermittedFault',
          'exception' => true,
        ],
      ],
    ],
    'DeprecateActivityType' => [
      'name' => 'DeprecateActivityType',
      'http' => [
        'method' => 'POST',
        'requestUri' => '/',
      ],
      'input' => [
        'shape' => 'DeprecateActivityTypeInput',
      ],
      'errors' => [
        [
          'shape' => 'UnknownResourceFault',
          'exception' => true,
        ],
        [
          'shape' => 'TypeDeprecatedFault',
          'exception' => true,
        ],
        [
          'shape' => 'OperationNotPermittedFault',
          'exception' => true,
        ],
      ],
    ],
    'DeprecateDomain' => [
      'name' => 'DeprecateDomain',
      'http' => [
        'method' => 'POST',
        'requestUri' => '/',
      ],
      'input' => [
        'shape' => 'DeprecateDomainInput',
      ],
      'errors' => [
        [
          'shape' => 'UnknownResourceFault',
          'exception' => true,
        ],
        [
          'shape' => 'DomainDeprecatedFault',
          'exception' => true,
        ],
        [
          'shape' => 'OperationNotPermittedFault',
          'exception' => true,
        ],
      ],
    ],
    'DeprecateWorkflowType' => [
      'name' => 'DeprecateWorkflowType',
      'http' => [
        'method' => 'POST',
        'requestUri' => '/',
      ],
      'input' => [
        'shape' => 'DeprecateWorkflowTypeInput',
      ],
      'errors' => [
        [
          'shape' => 'UnknownResourceFault',
          'exception' => true,
        ],
        [
          'shape' => 'TypeDeprecatedFault',
          'exception' => true,
        ],
        [
          'shape' => 'OperationNotPermittedFault',
          'exception' => true,
        ],
      ],
    ],
    'DescribeActivityType' => [
      'name' => 'DescribeActivityType',
      'http' => [
        'method' => 'POST',
        'requestUri' => '/',
      ],
      'input' => [
        'shape' => 'DescribeActivityTypeInput',
      ],
      'output' => [
        'shape' => 'ActivityTypeDetail',
      ],
      'errors' => [
        [
          'shape' => 'UnknownResourceFault',
          'exception' => true,
        ],
        [
          'shape' => 'OperationNotPermittedFault',
          'exception' => true,
        ],
      ],
    ],
    'DescribeDomain' => [
      'name' => 'DescribeDomain',
      'http' => [
        'method' => 'POST',
        'requestUri' => '/',
      ],
      'input' => [
        'shape' => 'DescribeDomainInput',
      ],
      'output' => [
        'shape' => 'DomainDetail',
      ],
      'errors' => [
        [
          'shape' => 'UnknownResourceFault',
          'exception' => true,
        ],
        [
          'shape' => 'OperationNotPermittedFault',
          'exception' => true,
        ],
      ],
    ],
    'DescribeWorkflowExecution' => [
      'name' => 'DescribeWorkflowExecution',
      'http' => [
        'method' => 'POST',
        'requestUri' => '/',
      ],
      'input' => [
        'shape' => 'DescribeWorkflowExecutionInput',
      ],
      'output' => [
        'shape' => 'WorkflowExecutionDetail',
      ],
      'errors' => [
        [
          'shape' => 'UnknownResourceFault',
          'exception' => true,
        ],
        [
          'shape' => 'OperationNotPermittedFault',
          'exception' => true,
        ],
      ],
    ],
    'DescribeWorkflowType' => [
      'name' => 'DescribeWorkflowType',
      'http' => [
        'method' => 'POST',
        'requestUri' => '/',
      ],
      'input' => [
        'shape' => 'DescribeWorkflowTypeInput',
      ],
      'output' => [
        'shape' => 'WorkflowTypeDetail',
      ],
      'errors' => [
        [
          'shape' => 'UnknownResourceFault',
          'exception' => true,
        ],
        [
          'shape' => 'OperationNotPermittedFault',
          'exception' => true,
        ],
      ],
    ],
    'GetWorkflowExecutionHistory' => [
      'name' => 'GetWorkflowExecutionHistory',
      'http' => [
        'method' => 'POST',
        'requestUri' => '/',
      ],
      'input' => [
        'shape' => 'GetWorkflowExecutionHistoryInput',
      ],
      'output' => [
        'shape' => 'History',
      ],
      'errors' => [
        [
          'shape' => 'UnknownResourceFault',
          'exception' => true,
        ],
        [
          'shape' => 'OperationNotPermittedFault',
          'exception' => true,
        ],
      ],
    ],
    'ListActivityTypes' => [
      'name' => 'ListActivityTypes',
      'http' => [
        'method' => 'POST',
        'requestUri' => '/',
      ],
      'input' => [
        'shape' => 'ListActivityTypesInput',
      ],
      'output' => [
        'shape' => 'ActivityTypeInfos',
      ],
      'errors' => [
        [
          'shape' => 'OperationNotPermittedFault',
          'exception' => true,
        ],
        [
          'shape' => 'UnknownResourceFault',
          'exception' => true,
        ],
      ],
    ],
    'ListClosedWorkflowExecutions' => [
      'name' => 'ListClosedWorkflowExecutions',
      'http' => [
        'method' => 'POST',
        'requestUri' => '/',
      ],
      'input' => [
        'shape' => 'ListClosedWorkflowExecutionsInput',
      ],
      'output' => [
        'shape' => 'WorkflowExecutionInfos',
      ],
      'errors' => [
        [
          'shape' => 'UnknownResourceFault',
          'exception' => true,
        ],
        [
          'shape' => 'OperationNotPermittedFault',
          'exception' => true,
        ],
      ],
    ],
    'ListDomains' => [
      'name' => 'ListDomains',
      'http' => [
        'method' => 'POST',
        'requestUri' => '/',
      ],
      'input' => [
        'shape' => 'ListDomainsInput',
      ],
      'output' => [
        'shape' => 'DomainInfos',
      ],
      'errors' => [
        [
          'shape' => 'OperationNotPermittedFault',
          'exception' => true,
        ],
      ],
    ],
    'ListOpenWorkflowExecutions' => [
      'name' => 'ListOpenWorkflowExecutions',
      'http' => [
        'method' => 'POST',
        'requestUri' => '/',
      ],
      'input' => [
        'shape' => 'ListOpenWorkflowExecutionsInput',
      ],
      'output' => [
        'shape' => 'WorkflowExecutionInfos',
      ],
      'errors' => [
        [
          'shape' => 'UnknownResourceFault',
          'exception' => true,
        ],
        [
          'shape' => 'OperationNotPermittedFault',
          'exception' => true,
        ],
      ],
    ],
    'ListWorkflowTypes' => [
      'name' => 'ListWorkflowTypes',
      'http' => [
        'method' => 'POST',
        'requestUri' => '/',
      ],
      'input' => [
        'shape' => 'ListWorkflowTypesInput',
      ],
      'output' => [
        'shape' => 'WorkflowTypeInfos',
      ],
      'errors' => [
        [
          'shape' => 'OperationNotPermittedFault',
          'exception' => true,
        ],
        [
          'shape' => 'UnknownResourceFault',
          'exception' => true,
        ],
      ],
    ],
    'PollForActivityTask' => [
      'name' => 'PollForActivityTask',
      'http' => [
        'method' => 'POST',
        'requestUri' => '/',
      ],
      'input' => [
        'shape' => 'PollForActivityTaskInput',
      ],
      'output' => [
        'shape' => 'ActivityTask',
      ],
      'errors' => [
        [
          'shape' => 'UnknownResourceFault',
          'exception' => true,
        ],
        [
          'shape' => 'OperationNotPermittedFault',
          'exception' => true,
        ],
        [
          'shape' => 'LimitExceededFault',
          'exception' => true,
        ],
      ],
    ],
    'PollForDecisionTask' => [
      'name' => 'PollForDecisionTask',
      'http' => [
        'method' => 'POST',
        'requestUri' => '/',
      ],
      'input' => [
        'shape' => 'PollForDecisionTaskInput',
      ],
      'output' => [
        'shape' => 'DecisionTask',
      ],
      'errors' => [
        [
          'shape' => 'UnknownResourceFault',
          'exception' => true,
        ],
        [
          'shape' => 'OperationNotPermittedFault',
          'exception' => true,
        ],
        [
          'shape' => 'LimitExceededFault',
          'exception' => true,
        ],
      ],
    ],
    'RecordActivityTaskHeartbeat' => [
      'name' => 'RecordActivityTaskHeartbeat',
      'http' => [
        'method' => 'POST',
        'requestUri' => '/',
      ],
      'input' => [
        'shape' => 'RecordActivityTaskHeartbeatInput',
      ],
      'output' => [
        'shape' => 'ActivityTaskStatus',
      ],
      'errors' => [
        [
          'shape' => 'UnknownResourceFault',
          'exception' => true,
        ],
        [
          'shape' => 'OperationNotPermittedFault',
          'exception' => true,
        ],
      ],
    ],
    'RegisterActivityType' => [
      'name' => 'RegisterActivityType',
      'http' => [
        'method' => 'POST',
        'requestUri' => '/',
      ],
      'input' => [
        'shape' => 'RegisterActivityTypeInput',
      ],
      'errors' => [
        [
          'shape' => 'TypeAlreadyExistsFault',
          'exception' => true,
        ],
        [
          'shape' => 'LimitExceededFault',
          'exception' => true,
        ],
        [
          'shape' => 'UnknownResourceFault',
          'exception' => true,
        ],
        [
          'shape' => 'OperationNotPermittedFault',
          'exception' => true,
        ],
      ],
    ],
    'RegisterDomain' => [
      'name' => 'RegisterDomain',
      'http' => [
        'method' => 'POST',
        'requestUri' => '/',
      ],
      'input' => [
        'shape' => 'RegisterDomainInput',
      ],
      'errors' => [
        [
          'shape' => 'DomainAlreadyExistsFault',
          'exception' => true,
        ],
        [
          'shape' => 'LimitExceededFault',
          'exception' => true,
        ],
        [
          'shape' => 'OperationNotPermittedFault',
          'exception' => true,
        ],
      ],
    ],
    'RegisterWorkflowType' => [
      'name' => 'RegisterWorkflowType',
      'http' => [
        'method' => 'POST',
        'requestUri' => '/',
      ],
      'input' => [
        'shape' => 'RegisterWorkflowTypeInput',
      ],
      'errors' => [
        [
          'shape' => 'TypeAlreadyExistsFault',
          'exception' => true,
        ],
        [
          'shape' => 'LimitExceededFault',
          'exception' => true,
        ],
        [
          'shape' => 'UnknownResourceFault',
          'exception' => true,
        ],
        [
          'shape' => 'OperationNotPermittedFault',
          'exception' => true,
        ],
      ],
    ],
    'RequestCancelWorkflowExecution' => [
      'name' => 'RequestCancelWorkflowExecution',
      'http' => [
        'method' => 'POST',
        'requestUri' => '/',
      ],
      'input' => [
        'shape' => 'RequestCancelWorkflowExecutionInput',
      ],
      'errors' => [
        [
          'shape' => 'UnknownResourceFault',
          'exception' => true,
        ],
        [
          'shape' => 'OperationNotPermittedFault',
          'exception' => true,
        ],
      ],
    ],
    'RespondActivityTaskCanceled' => [
      'name' => 'RespondActivityTaskCanceled',
      'http' => [
        'method' => 'POST',
        'requestUri' => '/',
      ],
      'input' => [
        'shape' => 'RespondActivityTaskCanceledInput',
      ],
      'errors' => [
        [
          'shape' => 'UnknownResourceFault',
          'exception' => true,
        ],
        [
          'shape' => 'OperationNotPermittedFault',
          'exception' => true,
        ],
      ],
    ],
    'RespondActivityTaskCompleted' => [
      'name' => 'RespondActivityTaskCompleted',
      'http' => [
        'method' => 'POST',
        'requestUri' => '/',
      ],
      'input' => [
        'shape' => 'RespondActivityTaskCompletedInput',
      ],
      'errors' => [
        [
          'shape' => 'UnknownResourceFault',
          'exception' => true,
        ],
        [
          'shape' => 'OperationNotPermittedFault',
          'exception' => true,
        ],
      ],
    ],
    'RespondActivityTaskFailed' => [
      'name' => 'RespondActivityTaskFailed',
      'http' => [
        'method' => 'POST',
        'requestUri' => '/',
      ],
      'input' => [
        'shape' => 'RespondActivityTaskFailedInput',
      ],
      'errors' => [
        [
          'shape' => 'UnknownResourceFault',
          'exception' => true,
        ],
        [
          'shape' => 'OperationNotPermittedFault',
          'exception' => true,
        ],
      ],
    ],
    'RespondDecisionTaskCompleted' => [
      'name' => 'RespondDecisionTaskCompleted',
      'http' => [
        'method' => 'POST',
        'requestUri' => '/',
      ],
      'input' => [
        'shape' => 'RespondDecisionTaskCompletedInput',
      ],
      'errors' => [
        [
          'shape' => 'UnknownResourceFault',
          'exception' => true,
        ],
        [
          'shape' => 'OperationNotPermittedFault',
          'exception' => true,
        ],
      ],
    ],
    'SignalWorkflowExecution' => [
      'name' => 'SignalWorkflowExecution',
      'http' => [
        'method' => 'POST',
        'requestUri' => '/',
      ],
      'input' => [
        'shape' => 'SignalWorkflowExecutionInput',
      ],
      'errors' => [
        [
          'shape' => 'UnknownResourceFault',
          'exception' => true,
        ],
        [
          'shape' => 'OperationNotPermittedFault',
          'exception' => true,
        ],
      ],
    ],
    'StartWorkflowExecution' => [
      'name' => 'StartWorkflowExecution',
      'http' => [
        'method' => 'POST',
        'requestUri' => '/',
      ],
      'input' => [
        'shape' => 'StartWorkflowExecutionInput',
      ],
      'output' => [
        'shape' => 'Run',
      ],
      'errors' => [
        [
          'shape' => 'UnknownResourceFault',
          'exception' => true,
        ],
        [
          'shape' => 'TypeDeprecatedFault',
          'exception' => true,
        ],
        [
          'shape' => 'WorkflowExecutionAlreadyStartedFault',
          'exception' => true,
        ],
        [
          'shape' => 'LimitExceededFault',
          'exception' => true,
        ],
        [
          'shape' => 'OperationNotPermittedFault',
          'exception' => true,
        ],
        [
          'shape' => 'DefaultUndefinedFault',
          'exception' => true,
        ],
      ],
    ],
    'TerminateWorkflowExecution' => [
      'name' => 'TerminateWorkflowExecution',
      'http' => [
        'method' => 'POST',
        'requestUri' => '/',
      ],
      'input' => [
        'shape' => 'TerminateWorkflowExecutionInput',
      ],
      'errors' => [
        [
          'shape' => 'UnknownResourceFault',
          'exception' => true,
        ],
        [
          'shape' => 'OperationNotPermittedFault',
          'exception' => true,
        ],
      ],
    ],
  ],
  'shapes' => [
    'ActivityId' => [
      'type' => 'string',
      'min' => 1,
      'max' => 256,
    ],
    'ActivityTask' => [
      'type' => 'structure',
      'required' => [
        'taskToken',
        'activityId',
        'startedEventId',
        'workflowExecution',
        'activityType',
      ],
      'members' => [
        'taskToken' => [
          'shape' => 'TaskToken',
        ],
        'activityId' => [
          'shape' => 'ActivityId',
        ],
        'startedEventId' => [
          'shape' => 'EventId',
        ],
        'workflowExecution' => [
          'shape' => 'WorkflowExecution',
        ],
        'activityType' => [
          'shape' => 'ActivityType',
        ],
        'input' => [
          'shape' => 'Data',
        ],
      ],
    ],
    'ActivityTaskCancelRequestedEventAttributes' => [
      'type' => 'structure',
      'required' => [
        'decisionTaskCompletedEventId',
        'activityId',
      ],
      'members' => [
        'decisionTaskCompletedEventId' => [
          'shape' => 'EventId',
        ],
        'activityId' => [
          'shape' => 'ActivityId',
        ],
      ],
    ],
    'ActivityTaskCanceledEventAttributes' => [
      'type' => 'structure',
      'required' => [
        'scheduledEventId',
        'startedEventId',
      ],
      'members' => [
        'details' => [
          'shape' => 'Data',
        ],
        'scheduledEventId' => [
          'shape' => 'EventId',
        ],
        'startedEventId' => [
          'shape' => 'EventId',
        ],
        'latestCancelRequestedEventId' => [
          'shape' => 'EventId',
        ],
      ],
    ],
    'ActivityTaskCompletedEventAttributes' => [
      'type' => 'structure',
      'required' => [
        'scheduledEventId',
        'startedEventId',
      ],
      'members' => [
        'result' => [
          'shape' => 'Data',
        ],
        'scheduledEventId' => [
          'shape' => 'EventId',
        ],
        'startedEventId' => [
          'shape' => 'EventId',
        ],
      ],
    ],
    'ActivityTaskFailedEventAttributes' => [
      'type' => 'structure',
      'required' => [
        'scheduledEventId',
        'startedEventId',
      ],
      'members' => [
        'reason' => [
          'shape' => 'FailureReason',
        ],
        'details' => [
          'shape' => 'Data',
        ],
        'scheduledEventId' => [
          'shape' => 'EventId',
        ],
        'startedEventId' => [
          'shape' => 'EventId',
        ],
      ],
    ],
    'ActivityTaskScheduledEventAttributes' => [
      'type' => 'structure',
      'required' => [
        'activityType',
        'activityId',
        'taskList',
        'decisionTaskCompletedEventId',
      ],
      'members' => [
        'activityType' => [
          'shape' => 'ActivityType',
        ],
        'activityId' => [
          'shape' => 'ActivityId',
        ],
        'input' => [
          'shape' => 'Data',
        ],
        'control' => [
          'shape' => 'Data',
        ],
        'scheduleToStartTimeout' => [
          'shape' => 'DurationInSecondsOptional',
        ],
        'scheduleToCloseTimeout' => [
          'shape' => 'DurationInSecondsOptional',
        ],
        'startToCloseTimeout' => [
          'shape' => 'DurationInSecondsOptional',
        ],
        'taskList' => [
          'shape' => 'TaskList',
        ],
        'decisionTaskCompletedEventId' => [
          'shape' => 'EventId',
        ],
        'heartbeatTimeout' => [
          'shape' => 'DurationInSecondsOptional',
        ],
      ],
    ],
    'ActivityTaskStartedEventAttributes' => [
      'type' => 'structure',
      'required' => [
        'scheduledEventId',
      ],
      'members' => [
        'identity' => [
          'shape' => 'Identity',
        ],
        'scheduledEventId' => [
          'shape' => 'EventId',
        ],
      ],
    ],
    'ActivityTaskStatus' => [
      'type' => 'structure',
      'required' => [
        'cancelRequested',
      ],
      'members' => [
        'cancelRequested' => [
          'shape' => 'Canceled',
        ],
      ],
    ],
    'ActivityTaskTimedOutEventAttributes' => [
      'type' => 'structure',
      'required' => [
        'timeoutType',
        'scheduledEventId',
        'startedEventId',
      ],
      'members' => [
        'timeoutType' => [
          'shape' => 'ActivityTaskTimeoutType',
        ],
        'scheduledEventId' => [
          'shape' => 'EventId',
        ],
        'startedEventId' => [
          'shape' => 'EventId',
        ],
        'details' => [
          'shape' => 'LimitedData',
        ],
      ],
    ],
    'ActivityTaskTimeoutType' => [
      'type' => 'string',
      'enum' => [
        'START_TO_CLOSE',
        'SCHEDULE_TO_START',
        'SCHEDULE_TO_CLOSE',
        'HEARTBEAT',
      ],
    ],
    'ActivityType' => [
      'type' => 'structure',
      'required' => [
        'name',
        'version',
      ],
      'members' => [
        'name' => [
          'shape' => 'Name',
        ],
        'version' => [
          'shape' => 'Version',
        ],
      ],
    ],
    'ActivityTypeConfiguration' => [
      'type' => 'structure',
      'members' => [
        'defaultTaskStartToCloseTimeout' => [
          'shape' => 'DurationInSecondsOptional',
        ],
        'defaultTaskHeartbeatTimeout' => [
          'shape' => 'DurationInSecondsOptional',
        ],
        'defaultTaskList' => [
          'shape' => 'TaskList',
        ],
        'defaultTaskScheduleToStartTimeout' => [
          'shape' => 'DurationInSecondsOptional',
        ],
        'defaultTaskScheduleToCloseTimeout' => [
          'shape' => 'DurationInSecondsOptional',
        ],
      ],
    ],
    'ActivityTypeDetail' => [
      'type' => 'structure',
      'required' => [
        'typeInfo',
        'configuration',
      ],
      'members' => [
        'typeInfo' => [
          'shape' => 'ActivityTypeInfo',
        ],
        'configuration' => [
          'shape' => 'ActivityTypeConfiguration',
        ],
      ],
    ],
    'ActivityTypeInfo' => [
      'type' => 'structure',
      'required' => [
        'activityType',
        'status',
        'creationDate',
      ],
      'members' => [
        'activityType' => [
          'shape' => 'ActivityType',
        ],
        'status' => [
          'shape' => 'RegistrationStatus',
        ],
        'description' => [
          'shape' => 'Description',
        ],
        'creationDate' => [
          'shape' => 'Timestamp',
        ],
        'deprecationDate' => [
          'shape' => 'Timestamp',
        ],
      ],
    ],
    'ActivityTypeInfoList' => [
      'type' => 'list',
      'member' => [
        'shape' => 'ActivityTypeInfo',
      ],
    ],
    'ActivityTypeInfos' => [
      'type' => 'structure',
      'required' => [
        'typeInfos',
      ],
      'members' => [
        'typeInfos' => [
          'shape' => 'ActivityTypeInfoList',
        ],
        'nextPageToken' => [
          'shape' => 'PageToken',
        ],
      ],
    ],
    'CancelTimerDecisionAttributes' => [
      'type' => 'structure',
      'required' => [
        'timerId',
      ],
      'members' => [
        'timerId' => [
          'shape' => 'TimerId',
        ],
      ],
    ],
    'CancelTimerFailedCause' => [
      'type' => 'string',
      'enum' => [
        'TIMER_ID_UNKNOWN',
        'OPERATION_NOT_PERMITTED',
      ],
    ],
    'CancelTimerFailedEventAttributes' => [
      'type' => 'structure',
      'required' => [
        'timerId',
        'cause',
        'decisionTaskCompletedEventId',
      ],
      'members' => [
        'timerId' => [
          'shape' => 'TimerId',
        ],
        'cause' => [
          'shape' => 'CancelTimerFailedCause',
        ],
        'decisionTaskCompletedEventId' => [
          'shape' => 'EventId',
        ],
      ],
    ],
    'CancelWorkflowExecutionDecisionAttributes' => [
      'type' => 'structure',
      'members' => [
        'details' => [
          'shape' => 'Data',
        ],
      ],
    ],
    'CancelWorkflowExecutionFailedCause' => [
      'type' => 'string',
      'enum' => [
        'UNHANDLED_DECISION',
        'OPERATION_NOT_PERMITTED',
      ],
    ],
    'CancelWorkflowExecutionFailedEventAttributes' => [
      'type' => 'structure',
      'required' => [
        'cause',
        'decisionTaskCompletedEventId',
      ],
      'members' => [
        'cause' => [
          'shape' => 'CancelWorkflowExecutionFailedCause',
        ],
        'decisionTaskCompletedEventId' => [
          'shape' => 'EventId',
        ],
      ],
    ],
    'Canceled' => [
      'type' => 'boolean',
    ],
    'ChildPolicy' => [
      'type' => 'string',
      'enum' => [
        'TERMINATE',
        'REQUEST_CANCEL',
        'ABANDON',
      ],
    ],
    'ChildWorkflowExecutionCanceledEventAttributes' => [
      'type' => 'structure',
      'required' => [
        'workflowExecution',
        'workflowType',
        'initiatedEventId',
        'startedEventId',
      ],
      'members' => [
        'workflowExecution' => [
          'shape' => 'WorkflowExecution',
        ],
        'workflowType' => [
          'shape' => 'WorkflowType',
        ],
        'details' => [
          'shape' => 'Data',
        ],
        'initiatedEventId' => [
          'shape' => 'EventId',
        ],
        'startedEventId' => [
          'shape' => 'EventId',
        ],
      ],
    ],
    'ChildWorkflowExecutionCompletedEventAttributes' => [
      'type' => 'structure',
      'required' => [
        'workflowExecution',
        'workflowType',
        'initiatedEventId',
        'startedEventId',
      ],
      'members' => [
        'workflowExecution' => [
          'shape' => 'WorkflowExecution',
        ],
        'workflowType' => [
          'shape' => 'WorkflowType',
        ],
        'result' => [
          'shape' => 'Data',
        ],
        'initiatedEventId' => [
          'shape' => 'EventId',
        ],
        'startedEventId' => [
          'shape' => 'EventId',
        ],
      ],
    ],
    'ChildWorkflowExecutionFailedEventAttributes' => [
      'type' => 'structure',
      'required' => [
        'workflowExecution',
        'workflowType',
        'initiatedEventId',
        'startedEventId',
      ],
      'members' => [
        'workflowExecution' => [
          'shape' => 'WorkflowExecution',
        ],
        'workflowType' => [
          'shape' => 'WorkflowType',
        ],
        'reason' => [
          'shape' => 'FailureReason',
        ],
        'details' => [
          'shape' => 'Data',
        ],
        'initiatedEventId' => [
          'shape' => 'EventId',
        ],
        'startedEventId' => [
          'shape' => 'EventId',
        ],
      ],
    ],
    'ChildWorkflowExecutionStartedEventAttributes' => [
      'type' => 'structure',
      'required' => [
        'workflowExecution',
        'workflowType',
        'initiatedEventId',
      ],
      'members' => [
        'workflowExecution' => [
          'shape' => 'WorkflowExecution',
        ],
        'workflowType' => [
          'shape' => 'WorkflowType',
        ],
        'initiatedEventId' => [
          'shape' => 'EventId',
        ],
      ],
    ],
    'ChildWorkflowExecutionTerminatedEventAttributes' => [
      'type' => 'structure',
      'required' => [
        'workflowExecution',
        'workflowType',
        'initiatedEventId',
        'startedEventId',
      ],
      'members' => [
        'workflowExecution' => [
          'shape' => 'WorkflowExecution',
        ],
        'workflowType' => [
          'shape' => 'WorkflowType',
        ],
        'initiatedEventId' => [
          'shape' => 'EventId',
        ],
        'startedEventId' => [
          'shape' => 'EventId',
        ],
      ],
    ],
    'ChildWorkflowExecutionTimedOutEventAttributes' => [
      'type' => 'structure',
      'required' => [
        'workflowExecution',
        'workflowType',
        'timeoutType',
        'initiatedEventId',
        'startedEventId',
      ],
      'members' => [
        'workflowExecution' => [
          'shape' => 'WorkflowExecution',
        ],
        'workflowType' => [
          'shape' => 'WorkflowType',
        ],
        'timeoutType' => [
          'shape' => 'WorkflowExecutionTimeoutType',
        ],
        'initiatedEventId' => [
          'shape' => 'EventId',
        ],
        'startedEventId' => [
          'shape' => 'EventId',
        ],
      ],
    ],
    'CloseStatus' => [
      'type' => 'string',
      'enum' => [
        'COMPLETED',
        'FAILED',
        'CANCELED',
        'TERMINATED',
        'CONTINUED_AS_NEW',
        'TIMED_OUT',
      ],
    ],
    'CloseStatusFilter' => [
      'type' => 'structure',
      'required' => [
        'status',
      ],
      'members' => [
        'status' => [
          'shape' => 'CloseStatus',
        ],
      ],
    ],
    'CompleteWorkflowExecutionDecisionAttributes' => [
      'type' => 'structure',
      'members' => [
        'result' => [
          'shape' => 'Data',
        ],
      ],
    ],
    'CompleteWorkflowExecutionFailedCause' => [
      'type' => 'string',
      'enum' => [
        'UNHANDLED_DECISION',
        'OPERATION_NOT_PERMITTED',
      ],
    ],
    'CompleteWorkflowExecutionFailedEventAttributes' => [
      'type' => 'structure',
      'required' => [
        'cause',
        'decisionTaskCompletedEventId',
      ],
      'members' => [
        'cause' => [
          'shape' => 'CompleteWorkflowExecutionFailedCause',
        ],
        'decisionTaskCompletedEventId' => [
          'shape' => 'EventId',
        ],
      ],
    ],
    'ContinueAsNewWorkflowExecutionDecisionAttributes' => [
      'type' => 'structure',
      'members' => [
        'input' => [
          'shape' => 'Data',
        ],
        'executionStartToCloseTimeout' => [
          'shape' => 'DurationInSecondsOptional',
        ],
        'taskList' => [
          'shape' => 'TaskList',
        ],
        'taskStartToCloseTimeout' => [
          'shape' => 'DurationInSecondsOptional',
        ],
        'childPolicy' => [
          'shape' => 'ChildPolicy',
        ],
        'tagList' => [
          'shape' => 'TagList',
        ],
        'workflowTypeVersion' => [
          'shape' => 'Version',
        ],
      ],
    ],
    'ContinueAsNewWorkflowExecutionFailedCause' => [
      'type' => 'string',
      'enum' => [
        'UNHANDLED_DECISION',
        'WORKFLOW_TYPE_DEPRECATED',
        'WORKFLOW_TYPE_DOES_NOT_EXIST',
        'DEFAULT_EXECUTION_START_TO_CLOSE_TIMEOUT_UNDEFINED',
        'DEFAULT_TASK_START_TO_CLOSE_TIMEOUT_UNDEFINED',
        'DEFAULT_TASK_LIST_UNDEFINED',
        'DEFAULT_CHILD_POLICY_UNDEFINED',
        'OPERATION_NOT_PERMITTED',
      ],
    ],
    'ContinueAsNewWorkflowExecutionFailedEventAttributes' => [
      'type' => 'structure',
      'required' => [
        'cause',
        'decisionTaskCompletedEventId',
      ],
      'members' => [
        'cause' => [
          'shape' => 'ContinueAsNewWorkflowExecutionFailedCause',
        ],
        'decisionTaskCompletedEventId' => [
          'shape' => 'EventId',
        ],
      ],
    ],
    'Count' => [
      'type' => 'integer',
      'min' => 0,
    ],
    'CountClosedWorkflowExecutionsInput' => [
      'type' => 'structure',
      'required' => [
        'domain',
      ],
      'members' => [
        'domain' => [
          'shape' => 'DomainName',
        ],
        'startTimeFilter' => [
          'shape' => 'ExecutionTimeFilter',
        ],
        'closeTimeFilter' => [
          'shape' => 'ExecutionTimeFilter',
        ],
        'executionFilter' => [
          'shape' => 'WorkflowExecutionFilter',
        ],
        'typeFilter' => [
          'shape' => 'WorkflowTypeFilter',
        ],
        'tagFilter' => [
          'shape' => 'TagFilter',
        ],
        'closeStatusFilter' => [
          'shape' => 'CloseStatusFilter',
        ],
      ],
    ],
    'CountOpenWorkflowExecutionsInput' => [
      'type' => 'structure',
      'required' => [
        'domain',
        'startTimeFilter',
      ],
      'members' => [
        'domain' => [
          'shape' => 'DomainName',
        ],
        'startTimeFilter' => [
          'shape' => 'ExecutionTimeFilter',
        ],
        'typeFilter' => [
          'shape' => 'WorkflowTypeFilter',
        ],
        'tagFilter' => [
          'shape' => 'TagFilter',
        ],
        'executionFilter' => [
          'shape' => 'WorkflowExecutionFilter',
        ],
      ],
    ],
    'CountPendingActivityTasksInput' => [
      'type' => 'structure',
      'required' => [
        'domain',
        'taskList',
      ],
      'members' => [
        'domain' => [
          'shape' => 'DomainName',
        ],
        'taskList' => [
          'shape' => 'TaskList',
        ],
      ],
    ],
    'CountPendingDecisionTasksInput' => [
      'type' => 'structure',
      'required' => [
        'domain',
        'taskList',
      ],
      'members' => [
        'domain' => [
          'shape' => 'DomainName',
        ],
        'taskList' => [
          'shape' => 'TaskList',
        ],
      ],
    ],
    'Data' => [
      'type' => 'string',
      'max' => 32768,
    ],
    'Decision' => [
      'type' => 'structure',
      'required' => [
        'decisionType',
      ],
      'members' => [
        'decisionType' => [
          'shape' => 'DecisionType',
        ],
        'scheduleActivityTaskDecisionAttributes' => [
          'shape' => 'ScheduleActivityTaskDecisionAttributes',
        ],
        'requestCancelActivityTaskDecisionAttributes' => [
          'shape' => 'RequestCancelActivityTaskDecisionAttributes',
        ],
        'completeWorkflowExecutionDecisionAttributes' => [
          'shape' => 'CompleteWorkflowExecutionDecisionAttributes',
        ],
        'failWorkflowExecutionDecisionAttributes' => [
          'shape' => 'FailWorkflowExecutionDecisionAttributes',
        ],
        'cancelWorkflowExecutionDecisionAttributes' => [
          'shape' => 'CancelWorkflowExecutionDecisionAttributes',
        ],
        'continueAsNewWorkflowExecutionDecisionAttributes' => [
          'shape' => 'ContinueAsNewWorkflowExecutionDecisionAttributes',
        ],
        'recordMarkerDecisionAttributes' => [
          'shape' => 'RecordMarkerDecisionAttributes',
        ],
        'startTimerDecisionAttributes' => [
          'shape' => 'StartTimerDecisionAttributes',
        ],
        'cancelTimerDecisionAttributes' => [
          'shape' => 'CancelTimerDecisionAttributes',
        ],
        'signalExternalWorkflowExecutionDecisionAttributes' => [
          'shape' => 'SignalExternalWorkflowExecutionDecisionAttributes',
        ],
        'requestCancelExternalWorkflowExecutionDecisionAttributes' => [
          'shape' => 'RequestCancelExternalWorkflowExecutionDecisionAttributes',
        ],
        'startChildWorkflowExecutionDecisionAttributes' => [
          'shape' => 'StartChildWorkflowExecutionDecisionAttributes',
        ],
      ],
    ],
    'DecisionList' => [
      'type' => 'list',
      'member' => [
        'shape' => 'Decision',
      ],
    ],
    'DecisionTask' => [
      'type' => 'structure',
      'required' => [
        'taskToken',
        'startedEventId',
        'workflowExecution',
        'workflowType',
        'events',
      ],
      'members' => [
        'taskToken' => [
          'shape' => 'TaskToken',
        ],
        'startedEventId' => [
          'shape' => 'EventId',
        ],
        'workflowExecution' => [
          'shape' => 'WorkflowExecution',
        ],
        'workflowType' => [
          'shape' => 'WorkflowType',
        ],
        'events' => [
          'shape' => 'HistoryEventList',
        ],
        'nextPageToken' => [
          'shape' => 'PageToken',
        ],
        'previousStartedEventId' => [
          'shape' => 'EventId',
        ],
      ],
    ],
    'DecisionTaskCompletedEventAttributes' => [
      'type' => 'structure',
      'required' => [
        'scheduledEventId',
        'startedEventId',
      ],
      'members' => [
        'executionContext' => [
          'shape' => 'Data',
        ],
        'scheduledEventId' => [
          'shape' => 'EventId',
        ],
        'startedEventId' => [
          'shape' => 'EventId',
        ],
      ],
    ],
    'DecisionTaskScheduledEventAttributes' => [
      'type' => 'structure',
      'required' => [
        'taskList',
      ],
      'members' => [
        'taskList' => [
          'shape' => 'TaskList',
        ],
        'startToCloseTimeout' => [
          'shape' => 'DurationInSecondsOptional',
        ],
      ],
    ],
    'DecisionTaskStartedEventAttributes' => [
      'type' => 'structure',
      'required' => [
        'scheduledEventId',
      ],
      'members' => [
        'identity' => [
          'shape' => 'Identity',
        ],
        'scheduledEventId' => [
          'shape' => 'EventId',
        ],
      ],
    ],
    'DecisionTaskTimedOutEventAttributes' => [
      'type' => 'structure',
      'required' => [
        'timeoutType',
        'scheduledEventId',
        'startedEventId',
      ],
      'members' => [
        'timeoutType' => [
          'shape' => 'DecisionTaskTimeoutType',
        ],
        'scheduledEventId' => [
          'shape' => 'EventId',
        ],
        'startedEventId' => [
          'shape' => 'EventId',
        ],
      ],
    ],
    'DecisionTaskTimeoutType' => [
      'type' => 'string',
      'enum' => [
        'START_TO_CLOSE',
      ],
    ],
    'DecisionType' => [
      'type' => 'string',
      'enum' => [
        'ScheduleActivityTask',
        'RequestCancelActivityTask',
        'CompleteWorkflowExecution',
        'FailWorkflowExecution',
        'CancelWorkflowExecution',
        'ContinueAsNewWorkflowExecution',
        'RecordMarker',
        'StartTimer',
        'CancelTimer',
        'SignalExternalWorkflowExecution',
        'RequestCancelExternalWorkflowExecution',
        'StartChildWorkflowExecution',
      ],
    ],
    'DefaultUndefinedFault' => [
      'type' => 'structure',
      'members' => [
        'message' => [
          'shape' => 'ErrorMessage',
        ],
      ],
      'exception' => true,
    ],
    'DeprecateActivityTypeInput' => [
      'type' => 'structure',
      'required' => [
        'domain',
        'activityType',
      ],
      'members' => [
        'domain' => [
          'shape' => 'DomainName',
        ],
        'activityType' => [
          'shape' => 'ActivityType',
        ],
      ],
    ],
    'DeprecateDomainInput' => [
      'type' => 'structure',
      'required' => [
        'name',
      ],
      'members' => [
        'name' => [
          'shape' => 'DomainName',
        ],
      ],
    ],
    'DeprecateWorkflowTypeInput' => [
      'type' => 'structure',
      'required' => [
        'domain',
        'workflowType',
      ],
      'members' => [
        'domain' => [
          'shape' => 'DomainName',
        ],
        'workflowType' => [
          'shape' => 'WorkflowType',
        ],
      ],
    ],
    'DescribeActivityTypeInput' => [
      'type' => 'structure',
      'required' => [
        'domain',
        'activityType',
      ],
      'members' => [
        'domain' => [
          'shape' => 'DomainName',
        ],
        'activityType' => [
          'shape' => 'ActivityType',
        ],
      ],
    ],
    'DescribeDomainInput' => [
      'type' => 'structure',
      'required' => [
        'name',
      ],
      'members' => [
        'name' => [
          'shape' => 'DomainName',
        ],
      ],
    ],
    'DescribeWorkflowExecutionInput' => [
      'type' => 'structure',
      'required' => [
        'domain',
        'execution',
      ],
      'members' => [
        'domain' => [
          'shape' => 'DomainName',
        ],
        'execution' => [
          'shape' => 'WorkflowExecution',
        ],
      ],
    ],
    'DescribeWorkflowTypeInput' => [
      'type' => 'structure',
      'required' => [
        'domain',
        'workflowType',
      ],
      'members' => [
        'domain' => [
          'shape' => 'DomainName',
        ],
        'workflowType' => [
          'shape' => 'WorkflowType',
        ],
      ],
    ],
    'Description' => [
      'type' => 'string',
      'max' => 1024,
    ],
    'DomainAlreadyExistsFault' => [
      'type' => 'structure',
      'members' => [
        'message' => [
          'shape' => 'ErrorMessage',
        ],
      ],
      'exception' => true,
    ],
    'DomainConfiguration' => [
      'type' => 'structure',
      'required' => [
        'workflowExecutionRetentionPeriodInDays',
      ],
      'members' => [
        'workflowExecutionRetentionPeriodInDays' => [
          'shape' => 'DurationInDays',
        ],
      ],
    ],
    'DomainDeprecatedFault' => [
      'type' => 'structure',
      'members' => [
        'message' => [
          'shape' => 'ErrorMessage',
        ],
      ],
      'exception' => true,
    ],
    'DomainDetail' => [
      'type' => 'structure',
      'required' => [
        'domainInfo',
        'configuration',
      ],
      'members' => [
        'domainInfo' => [
          'shape' => 'DomainInfo',
        ],
        'configuration' => [
          'shape' => 'DomainConfiguration',
        ],
      ],
    ],
    'DomainInfo' => [
      'type' => 'structure',
      'required' => [
        'name',
        'status',
      ],
      'members' => [
        'name' => [
          'shape' => 'DomainName',
        ],
        'status' => [
          'shape' => 'RegistrationStatus',
        ],
        'description' => [
          'shape' => 'Description',
        ],
      ],
    ],
    'DomainInfoList' => [
      'type' => 'list',
      'member' => [
        'shape' => 'DomainInfo',
      ],
    ],
    'DomainInfos' => [
      'type' => 'structure',
      'required' => [
        'domainInfos',
      ],
      'members' => [
        'domainInfos' => [
          'shape' => 'DomainInfoList',
        ],
        'nextPageToken' => [
          'shape' => 'PageToken',
        ],
      ],
    ],
    'DomainName' => [
      'type' => 'string',
      'min' => 1,
      'max' => 256,
    ],
    'DurationInDays' => [
      'type' => 'string',
      'min' => 1,
      'max' => 8,
    ],
    'DurationInSeconds' => [
      'type' => 'string',
      'min' => 1,
      'max' => 8,
    ],
    'DurationInSecondsOptional' => [
      'type' => 'string',
      'max' => 8,
    ],
    'ErrorMessage' => [
      'type' => 'string',
    ],
    'EventId' => [
      'type' => 'long',
    ],
    'EventType' => [
      'type' => 'string',
      'enum' => [
        'WorkflowExecutionStarted',
        'WorkflowExecutionCancelRequested',
        'WorkflowExecutionCompleted',
        'CompleteWorkflowExecutionFailed',
        'WorkflowExecutionFailed',
        'FailWorkflowExecutionFailed',
        'WorkflowExecutionTimedOut',
        'WorkflowExecutionCanceled',
        'CancelWorkflowExecutionFailed',
        'WorkflowExecutionContinuedAsNew',
        'ContinueAsNewWorkflowExecutionFailed',
        'WorkflowExecutionTerminated',
        'DecisionTaskScheduled',
        'DecisionTaskStarted',
        'DecisionTaskCompleted',
        'DecisionTaskTimedOut',
        'ActivityTaskScheduled',
        'ScheduleActivityTaskFailed',
        'ActivityTaskStarted',
        'ActivityTaskCompleted',
        'ActivityTaskFailed',
        'ActivityTaskTimedOut',
        'ActivityTaskCanceled',
        'ActivityTaskCancelRequested',
        'RequestCancelActivityTaskFailed',
        'WorkflowExecutionSignaled',
        'MarkerRecorded',
        'RecordMarkerFailed',
        'TimerStarted',
        'StartTimerFailed',
        'TimerFired',
        'TimerCanceled',
        'CancelTimerFailed',
        'StartChildWorkflowExecutionInitiated',
        'StartChildWorkflowExecutionFailed',
        'ChildWorkflowExecutionStarted',
        'ChildWorkflowExecutionCompleted',
        'ChildWorkflowExecutionFailed',
        'ChildWorkflowExecutionTimedOut',
        'ChildWorkflowExecutionCanceled',
        'ChildWorkflowExecutionTerminated',
        'SignalExternalWorkflowExecutionInitiated',
        'SignalExternalWorkflowExecutionFailed',
        'ExternalWorkflowExecutionSignaled',
        'RequestCancelExternalWorkflowExecutionInitiated',
        'RequestCancelExternalWorkflowExecutionFailed',
        'ExternalWorkflowExecutionCancelRequested',
      ],
    ],
    'ExecutionStatus' => [
      'type' => 'string',
      'enum' => [
        'OPEN',
        'CLOSED',
      ],
    ],
    'ExecutionTimeFilter' => [
      'type' => 'structure',
      'required' => [
        'oldestDate',
      ],
      'members' => [
        'oldestDate' => [
          'shape' => 'Timestamp',
        ],
        'latestDate' => [
          'shape' => 'Timestamp',
        ],
      ],
    ],
    'ExternalWorkflowExecutionCancelRequestedEventAttributes' => [
      'type' => 'structure',
      'required' => [
        'workflowExecution',
        'initiatedEventId',
      ],
      'members' => [
        'workflowExecution' => [
          'shape' => 'WorkflowExecution',
        ],
        'initiatedEventId' => [
          'shape' => 'EventId',
        ],
      ],
    ],
    'ExternalWorkflowExecutionSignaledEventAttributes' => [
      'type' => 'structure',
      'required' => [
        'workflowExecution',
        'initiatedEventId',
      ],
      'members' => [
        'workflowExecution' => [
          'shape' => 'WorkflowExecution',
        ],
        'initiatedEventId' => [
          'shape' => 'EventId',
        ],
      ],
    ],
    'FailWorkflowExecutionDecisionAttributes' => [
      'type' => 'structure',
      'members' => [
        'reason' => [
          'shape' => 'FailureReason',
        ],
        'details' => [
          'shape' => 'Data',
        ],
      ],
    ],
    'FailWorkflowExecutionFailedCause' => [
      'type' => 'string',
      'enum' => [
        'UNHANDLED_DECISION',
        'OPERATION_NOT_PERMITTED',
      ],
    ],
    'FailWorkflowExecutionFailedEventAttributes' => [
      'type' => 'structure',
      'required' => [
        'cause',
        'decisionTaskCompletedEventId',
      ],
      'members' => [
        'cause' => [
          'shape' => 'FailWorkflowExecutionFailedCause',
        ],
        'decisionTaskCompletedEventId' => [
          'shape' => 'EventId',
        ],
      ],
    ],
    'FailureReason' => [
      'type' => 'string',
      'max' => 256,
    ],
    'GetWorkflowExecutionHistoryInput' => [
      'type' => 'structure',
      'required' => [
        'domain',
        'execution',
      ],
      'members' => [
        'domain' => [
          'shape' => 'DomainName',
        ],
        'execution' => [
          'shape' => 'WorkflowExecution',
        ],
        'nextPageToken' => [
          'shape' => 'PageToken',
        ],
        'maximumPageSize' => [
          'shape' => 'PageSize',
        ],
        'reverseOrder' => [
          'shape' => 'ReverseOrder',
        ],
      ],
    ],
    'History' => [
      'type' => 'structure',
      'required' => [
        'events',
      ],
      'members' => [
        'events' => [
          'shape' => 'HistoryEventList',
        ],
        'nextPageToken' => [
          'shape' => 'PageToken',
        ],
      ],
    ],
    'HistoryEvent' => [
      'type' => 'structure',
      'required' => [
        'eventTimestamp',
        'eventType',
        'eventId',
      ],
      'members' => [
        'eventTimestamp' => [
          'shape' => 'Timestamp',
        ],
        'eventType' => [
          'shape' => 'EventType',
        ],
        'eventId' => [
          'shape' => 'EventId',
        ],
        'workflowExecutionStartedEventAttributes' => [
          'shape' => 'WorkflowExecutionStartedEventAttributes',
        ],
        'workflowExecutionCompletedEventAttributes' => [
          'shape' => 'WorkflowExecutionCompletedEventAttributes',
        ],
        'completeWorkflowExecutionFailedEventAttributes' => [
          'shape' => 'CompleteWorkflowExecutionFailedEventAttributes',
        ],
        'workflowExecutionFailedEventAttributes' => [
          'shape' => 'WorkflowExecutionFailedEventAttributes',
        ],
        'failWorkflowExecutionFailedEventAttributes' => [
          'shape' => 'FailWorkflowExecutionFailedEventAttributes',
        ],
        'workflowExecutionTimedOutEventAttributes' => [
          'shape' => 'WorkflowExecutionTimedOutEventAttributes',
        ],
        'workflowExecutionCanceledEventAttributes' => [
          'shape' => 'WorkflowExecutionCanceledEventAttributes',
        ],
        'cancelWorkflowExecutionFailedEventAttributes' => [
          'shape' => 'CancelWorkflowExecutionFailedEventAttributes',
        ],
        'workflowExecutionContinuedAsNewEventAttributes' => [
          'shape' => 'WorkflowExecutionContinuedAsNewEventAttributes',
        ],
        'continueAsNewWorkflowExecutionFailedEventAttributes' => [
          'shape' => 'ContinueAsNewWorkflowExecutionFailedEventAttributes',
        ],
        'workflowExecutionTerminatedEventAttributes' => [
          'shape' => 'WorkflowExecutionTerminatedEventAttributes',
        ],
        'workflowExecutionCancelRequestedEventAttributes' => [
          'shape' => 'WorkflowExecutionCancelRequestedEventAttributes',
        ],
        'decisionTaskScheduledEventAttributes' => [
          'shape' => 'DecisionTaskScheduledEventAttributes',
        ],
        'decisionTaskStartedEventAttributes' => [
          'shape' => 'DecisionTaskStartedEventAttributes',
        ],
        'decisionTaskCompletedEventAttributes' => [
          'shape' => 'DecisionTaskCompletedEventAttributes',
        ],
        'decisionTaskTimedOutEventAttributes' => [
          'shape' => 'DecisionTaskTimedOutEventAttributes',
        ],
        'activityTaskScheduledEventAttributes' => [
          'shape' => 'ActivityTaskScheduledEventAttributes',
        ],
        'activityTaskStartedEventAttributes' => [
          'shape' => 'ActivityTaskStartedEventAttributes',
        ],
        'activityTaskCompletedEventAttributes' => [
          'shape' => 'ActivityTaskCompletedEventAttributes',
        ],
        'activityTaskFailedEventAttributes' => [
          'shape' => 'ActivityTaskFailedEventAttributes',
        ],
        'activityTaskTimedOutEventAttributes' => [
          'shape' => 'ActivityTaskTimedOutEventAttributes',
        ],
        'activityTaskCanceledEventAttributes' => [
          'shape' => 'ActivityTaskCanceledEventAttributes',
        ],
        'activityTaskCancelRequestedEventAttributes' => [
          'shape' => 'ActivityTaskCancelRequestedEventAttributes',
        ],
        'workflowExecutionSignaledEventAttributes' => [
          'shape' => 'WorkflowExecutionSignaledEventAttributes',
        ],
        'markerRecordedEventAttributes' => [
          'shape' => 'MarkerRecordedEventAttributes',
        ],
        'recordMarkerFailedEventAttributes' => [
          'shape' => 'RecordMarkerFailedEventAttributes',
        ],
        'timerStartedEventAttributes' => [
          'shape' => 'TimerStartedEventAttributes',
        ],
        'timerFiredEventAttributes' => [
          'shape' => 'TimerFiredEventAttributes',
        ],
        'timerCanceledEventAttributes' => [
          'shape' => 'TimerCanceledEventAttributes',
        ],
        'startChildWorkflowExecutionInitiatedEventAttributes' => [
          'shape' => 'StartChildWorkflowExecutionInitiatedEventAttributes',
        ],
        'childWorkflowExecutionStartedEventAttributes' => [
          'shape' => 'ChildWorkflowExecutionStartedEventAttributes',
        ],
        'childWorkflowExecutionCompletedEventAttributes' => [
          'shape' => 'ChildWorkflowExecutionCompletedEventAttributes',
        ],
        'childWorkflowExecutionFailedEventAttributes' => [
          'shape' => 'ChildWorkflowExecutionFailedEventAttributes',
        ],
        'childWorkflowExecutionTimedOutEventAttributes' => [
          'shape' => 'ChildWorkflowExecutionTimedOutEventAttributes',
        ],
        'childWorkflowExecutionCanceledEventAttributes' => [
          'shape' => 'ChildWorkflowExecutionCanceledEventAttributes',
        ],
        'childWorkflowExecutionTerminatedEventAttributes' => [
          'shape' => 'ChildWorkflowExecutionTerminatedEventAttributes',
        ],
        'signalExternalWorkflowExecutionInitiatedEventAttributes' => [
          'shape' => 'SignalExternalWorkflowExecutionInitiatedEventAttributes',
        ],
        'externalWorkflowExecutionSignaledEventAttributes' => [
          'shape' => 'ExternalWorkflowExecutionSignaledEventAttributes',
        ],
        'signalExternalWorkflowExecutionFailedEventAttributes' => [
          'shape' => 'SignalExternalWorkflowExecutionFailedEventAttributes',
        ],
        'externalWorkflowExecutionCancelRequestedEventAttributes' => [
          'shape' => 'ExternalWorkflowExecutionCancelRequestedEventAttributes',
        ],
        'requestCancelExternalWorkflowExecutionInitiatedEventAttributes' => [
          'shape' => 'RequestCancelExternalWorkflowExecutionInitiatedEventAttributes',
        ],
        'requestCancelExternalWorkflowExecutionFailedEventAttributes' => [
          'shape' => 'RequestCancelExternalWorkflowExecutionFailedEventAttributes',
        ],
        'scheduleActivityTaskFailedEventAttributes' => [
          'shape' => 'ScheduleActivityTaskFailedEventAttributes',
        ],
        'requestCancelActivityTaskFailedEventAttributes' => [
          'shape' => 'RequestCancelActivityTaskFailedEventAttributes',
        ],
        'startTimerFailedEventAttributes' => [
          'shape' => 'StartTimerFailedEventAttributes',
        ],
        'cancelTimerFailedEventAttributes' => [
          'shape' => 'CancelTimerFailedEventAttributes',
        ],
        'startChildWorkflowExecutionFailedEventAttributes' => [
          'shape' => 'StartChildWorkflowExecutionFailedEventAttributes',
        ],
      ],
    ],
    'HistoryEventList' => [
      'type' => 'list',
      'member' => [
        'shape' => 'HistoryEvent',
      ],
    ],
    'Identity' => [
      'type' => 'string',
      'max' => 256,
    ],
    'LimitExceededFault' => [
      'type' => 'structure',
      'members' => [
        'message' => [
          'shape' => 'ErrorMessage',
        ],
      ],
      'exception' => true,
    ],
    'LimitedData' => [
      'type' => 'string',
      'max' => 2048,
    ],
    'ListActivityTypesInput' => [
      'type' => 'structure',
      'required' => [
        'domain',
        'registrationStatus',
      ],
      'members' => [
        'domain' => [
          'shape' => 'DomainName',
        ],
        'name' => [
          'shape' => 'Name',
        ],
        'registrationStatus' => [
          'shape' => 'RegistrationStatus',
        ],
        'nextPageToken' => [
          'shape' => 'PageToken',
        ],
        'maximumPageSize' => [
          'shape' => 'PageSize',
        ],
        'reverseOrder' => [
          'shape' => 'ReverseOrder',
        ],
      ],
    ],
    'ListClosedWorkflowExecutionsInput' => [
      'type' => 'structure',
      'required' => [
        'domain',
      ],
      'members' => [
        'domain' => [
          'shape' => 'DomainName',
        ],
        'startTimeFilter' => [
          'shape' => 'ExecutionTimeFilter',
        ],
        'closeTimeFilter' => [
          'shape' => 'ExecutionTimeFilter',
        ],
        'executionFilter' => [
          'shape' => 'WorkflowExecutionFilter',
        ],
        'closeStatusFilter' => [
          'shape' => 'CloseStatusFilter',
        ],
        'typeFilter' => [
          'shape' => 'WorkflowTypeFilter',
        ],
        'tagFilter' => [
          'shape' => 'TagFilter',
        ],
        'nextPageToken' => [
          'shape' => 'PageToken',
        ],
        'maximumPageSize' => [
          'shape' => 'PageSize',
        ],
        'reverseOrder' => [
          'shape' => 'ReverseOrder',
        ],
      ],
    ],
    'ListDomainsInput' => [
      'type' => 'structure',
      'required' => [
        'registrationStatus',
      ],
      'members' => [
        'nextPageToken' => [
          'shape' => 'PageToken',
        ],
        'registrationStatus' => [
          'shape' => 'RegistrationStatus',
        ],
        'maximumPageSize' => [
          'shape' => 'PageSize',
        ],
        'reverseOrder' => [
          'shape' => 'ReverseOrder',
        ],
      ],
    ],
    'ListOpenWorkflowExecutionsInput' => [
      'type' => 'structure',
      'required' => [
        'domain',
        'startTimeFilter',
      ],
      'members' => [
        'domain' => [
          'shape' => 'DomainName',
        ],
        'startTimeFilter' => [
          'shape' => 'ExecutionTimeFilter',
        ],
        'typeFilter' => [
          'shape' => 'WorkflowTypeFilter',
        ],
        'tagFilter' => [
          'shape' => 'TagFilter',
        ],
        'nextPageToken' => [
          'shape' => 'PageToken',
        ],
        'maximumPageSize' => [
          'shape' => 'PageSize',
        ],
        'reverseOrder' => [
          'shape' => 'ReverseOrder',
        ],
        'executionFilter' => [
          'shape' => 'WorkflowExecutionFilter',
        ],
      ],
    ],
    'ListWorkflowTypesInput' => [
      'type' => 'structure',
      'required' => [
        'domain',
        'registrationStatus',
      ],
      'members' => [
        'domain' => [
          'shape' => 'DomainName',
        ],
        'name' => [
          'shape' => 'Name',
        ],
        'registrationStatus' => [
          'shape' => 'RegistrationStatus',
        ],
        'nextPageToken' => [
          'shape' => 'PageToken',
        ],
        'maximumPageSize' => [
          'shape' => 'PageSize',
        ],
        'reverseOrder' => [
          'shape' => 'ReverseOrder',
        ],
      ],
    ],
    'MarkerName' => [
      'type' => 'string',
      'min' => 1,
      'max' => 256,
    ],
    'MarkerRecordedEventAttributes' => [
      'type' => 'structure',
      'required' => [
        'markerName',
        'decisionTaskCompletedEventId',
      ],
      'members' => [
        'markerName' => [
          'shape' => 'MarkerName',
        ],
        'details' => [
          'shape' => 'Data',
        ],
        'decisionTaskCompletedEventId' => [
          'shape' => 'EventId',
        ],
      ],
    ],
    'Name' => [
      'type' => 'string',
      'min' => 1,
      'max' => 256,
    ],
    'OpenDecisionTasksCount' => [
      'type' => 'integer',
      'min' => 0,
      'max' => 1,
    ],
    'OperationNotPermittedFault' => [
      'type' => 'structure',
      'members' => [
        'message' => [
          'shape' => 'ErrorMessage',
        ],
      ],
      'exception' => true,
    ],
    'PageSize' => [
      'type' => 'integer',
      'min' => 0,
      'max' => 1000,
    ],
    'PageToken' => [
      'type' => 'string',
      'max' => 2048,
    ],
    'PendingTaskCount' => [
      'type' => 'structure',
      'required' => [
        'count',
      ],
      'members' => [
        'count' => [
          'shape' => 'Count',
        ],
        'truncated' => [
          'shape' => 'Truncated',
        ],
      ],
    ],
    'PollForActivityTaskInput' => [
      'type' => 'structure',
      'required' => [
        'domain',
        'taskList',
      ],
      'members' => [
        'domain' => [
          'shape' => 'DomainName',
        ],
        'taskList' => [
          'shape' => 'TaskList',
        ],
        'identity' => [
          'shape' => 'Identity',
        ],
      ],
    ],
    'PollForDecisionTaskInput' => [
      'type' => 'structure',
      'required' => [
        'domain',
        'taskList',
      ],
      'members' => [
        'domain' => [
          'shape' => 'DomainName',
        ],
        'taskList' => [
          'shape' => 'TaskList',
        ],
        'identity' => [
          'shape' => 'Identity',
        ],
        'nextPageToken' => [
          'shape' => 'PageToken',
        ],
        'maximumPageSize' => [
          'shape' => 'PageSize',
        ],
        'reverseOrder' => [
          'shape' => 'ReverseOrder',
        ],
      ],
    ],
    'RecordActivityTaskHeartbeatInput' => [
      'type' => 'structure',
      'required' => [
        'taskToken',
      ],
      'members' => [
        'taskToken' => [
          'shape' => 'TaskToken',
        ],
        'details' => [
          'shape' => 'LimitedData',
        ],
      ],
    ],
    'RecordMarkerDecisionAttributes' => [
      'type' => 'structure',
      'required' => [
        'markerName',
      ],
      'members' => [
        'markerName' => [
          'shape' => 'MarkerName',
        ],
        'details' => [
          'shape' => 'Data',
        ],
      ],
    ],
    'RecordMarkerFailedCause' => [
      'type' => 'string',
      'enum' => [
        'OPERATION_NOT_PERMITTED',
      ],
    ],
    'RecordMarkerFailedEventAttributes' => [
      'type' => 'structure',
      'required' => [
        'markerName',
        'cause',
        'decisionTaskCompletedEventId',
      ],
      'members' => [
        'markerName' => [
          'shape' => 'MarkerName',
        ],
        'cause' => [
          'shape' => 'RecordMarkerFailedCause',
        ],
        'decisionTaskCompletedEventId' => [
          'shape' => 'EventId',
        ],
      ],
    ],
    'RegisterActivityTypeInput' => [
      'type' => 'structure',
      'required' => [
        'domain',
        'name',
        'version',
      ],
      'members' => [
        'domain' => [
          'shape' => 'DomainName',
        ],
        'name' => [
          'shape' => 'Name',
        ],
        'version' => [
          'shape' => 'Version',
        ],
        'description' => [
          'shape' => 'Description',
        ],
        'defaultTaskStartToCloseTimeout' => [
          'shape' => 'DurationInSecondsOptional',
        ],
        'defaultTaskHeartbeatTimeout' => [
          'shape' => 'DurationInSecondsOptional',
        ],
        'defaultTaskList' => [
          'shape' => 'TaskList',
        ],
        'defaultTaskScheduleToStartTimeout' => [
          'shape' => 'DurationInSecondsOptional',
        ],
        'defaultTaskScheduleToCloseTimeout' => [
          'shape' => 'DurationInSecondsOptional',
        ],
      ],
    ],
    'RegisterDomainInput' => [
      'type' => 'structure',
      'required' => [
        'name',
        'workflowExecutionRetentionPeriodInDays',
      ],
      'members' => [
        'name' => [
          'shape' => 'DomainName',
        ],
        'description' => [
          'shape' => 'Description',
        ],
        'workflowExecutionRetentionPeriodInDays' => [
          'shape' => 'DurationInDays',
        ],
      ],
    ],
    'RegisterWorkflowTypeInput' => [
      'type' => 'structure',
      'required' => [
        'domain',
        'name',
        'version',
      ],
      'members' => [
        'domain' => [
          'shape' => 'DomainName',
        ],
        'name' => [
          'shape' => 'Name',
        ],
        'version' => [
          'shape' => 'Version',
        ],
        'description' => [
          'shape' => 'Description',
        ],
        'defaultTaskStartToCloseTimeout' => [
          'shape' => 'DurationInSecondsOptional',
        ],
        'defaultExecutionStartToCloseTimeout' => [
          'shape' => 'DurationInSecondsOptional',
        ],
        'defaultTaskList' => [
          'shape' => 'TaskList',
        ],
        'defaultChildPolicy' => [
          'shape' => 'ChildPolicy',
        ],
      ],
    ],
    'RegistrationStatus' => [
      'type' => 'string',
      'enum' => [
        'REGISTERED',
        'DEPRECATED',
      ],
    ],
    'RequestCancelActivityTaskDecisionAttributes' => [
      'type' => 'structure',
      'required' => [
        'activityId',
      ],
      'members' => [
        'activityId' => [
          'shape' => 'ActivityId',
        ],
      ],
    ],
    'RequestCancelActivityTaskFailedCause' => [
      'type' => 'string',
      'enum' => [
        'ACTIVITY_ID_UNKNOWN',
        'OPERATION_NOT_PERMITTED',
      ],
    ],
    'RequestCancelActivityTaskFailedEventAttributes' => [
      'type' => 'structure',
      'required' => [
        'activityId',
        'cause',
        'decisionTaskCompletedEventId',
      ],
      'members' => [
        'activityId' => [
          'shape' => 'ActivityId',
        ],
        'cause' => [
          'shape' => 'RequestCancelActivityTaskFailedCause',
        ],
        'decisionTaskCompletedEventId' => [
          'shape' => 'EventId',
        ],
      ],
    ],
    'RequestCancelExternalWorkflowExecutionDecisionAttributes' => [
      'type' => 'structure',
      'required' => [
        'workflowId',
      ],
      'members' => [
        'workflowId' => [
          'shape' => 'WorkflowId',
        ],
        'runId' => [
          'shape' => 'RunIdOptional',
        ],
        'control' => [
          'shape' => 'Data',
        ],
      ],
    ],
    'RequestCancelExternalWorkflowExecutionFailedCause' => [
      'type' => 'string',
      'enum' => [
        'UNKNOWN_EXTERNAL_WORKFLOW_EXECUTION',
        'REQUEST_CANCEL_EXTERNAL_WORKFLOW_EXECUTION_RATE_EXCEEDED',
        'OPERATION_NOT_PERMITTED',
      ],
    ],
    'RequestCancelExternalWorkflowExecutionFailedEventAttributes' => [
      'type' => 'structure',
      'required' => [
        'workflowId',
        'cause',
        'initiatedEventId',
        'decisionTaskCompletedEventId',
      ],
      'members' => [
        'workflowId' => [
          'shape' => 'WorkflowId',
        ],
        'runId' => [
          'shape' => 'RunIdOptional',
        ],
        'cause' => [
          'shape' => 'RequestCancelExternalWorkflowExecutionFailedCause',
        ],
        'initiatedEventId' => [
          'shape' => 'EventId',
        ],
        'decisionTaskCompletedEventId' => [
          'shape' => 'EventId',
        ],
        'control' => [
          'shape' => 'Data',
        ],
      ],
    ],
    'RequestCancelExternalWorkflowExecutionInitiatedEventAttributes' => [
      'type' => 'structure',
      'required' => [
        'workflowId',
        'decisionTaskCompletedEventId',
      ],
      'members' => [
        'workflowId' => [
          'shape' => 'WorkflowId',
        ],
        'runId' => [
          'shape' => 'RunIdOptional',
        ],
        'decisionTaskCompletedEventId' => [
          'shape' => 'EventId',
        ],
        'control' => [
          'shape' => 'Data',
        ],
      ],
    ],
    'RequestCancelWorkflowExecutionInput' => [
      'type' => 'structure',
      'required' => [
        'domain',
        'workflowId',
      ],
      'members' => [
        'domain' => [
          'shape' => 'DomainName',
        ],
        'workflowId' => [
          'shape' => 'WorkflowId',
        ],
        'runId' => [
          'shape' => 'RunIdOptional',
        ],
      ],
    ],
    'RespondActivityTaskCanceledInput' => [
      'type' => 'structure',
      'required' => [
        'taskToken',
      ],
      'members' => [
        'taskToken' => [
          'shape' => 'TaskToken',
        ],
        'details' => [
          'shape' => 'Data',
        ],
      ],
    ],
    'RespondActivityTaskCompletedInput' => [
      'type' => 'structure',
      'required' => [
        'taskToken',
      ],
      'members' => [
        'taskToken' => [
          'shape' => 'TaskToken',
        ],
        'result' => [
          'shape' => 'Data',
        ],
      ],
    ],
    'RespondActivityTaskFailedInput' => [
      'type' => 'structure',
      'required' => [
        'taskToken',
      ],
      'members' => [
        'taskToken' => [
          'shape' => 'TaskToken',
        ],
        'reason' => [
          'shape' => 'FailureReason',
        ],
        'details' => [
          'shape' => 'Data',
        ],
      ],
    ],
    'RespondDecisionTaskCompletedInput' => [
      'type' => 'structure',
      'required' => [
        'taskToken',
      ],
      'members' => [
        'taskToken' => [
          'shape' => 'TaskToken',
        ],
        'decisions' => [
          'shape' => 'DecisionList',
        ],
        'executionContext' => [
          'shape' => 'Data',
        ],
      ],
    ],
    'ReverseOrder' => [
      'type' => 'boolean',
    ],
    'Run' => [
      'type' => 'structure',
      'members' => [
        'runId' => [
          'shape' => 'RunId',
        ],
      ],
    ],
    'RunId' => [
      'type' => 'string',
      'min' => 1,
      'max' => 64,
    ],
    'RunIdOptional' => [
      'type' => 'string',
      'max' => 64,
    ],
    'ScheduleActivityTaskDecisionAttributes' => [
      'type' => 'structure',
      'required' => [
        'activityType',
        'activityId',
      ],
      'members' => [
        'activityType' => [
          'shape' => 'ActivityType',
        ],
        'activityId' => [
          'shape' => 'ActivityId',
        ],
        'control' => [
          'shape' => 'Data',
        ],
        'input' => [
          'shape' => 'Data',
        ],
        'scheduleToCloseTimeout' => [
          'shape' => 'DurationInSecondsOptional',
        ],
        'taskList' => [
          'shape' => 'TaskList',
        ],
        'scheduleToStartTimeout' => [
          'shape' => 'DurationInSecondsOptional',
        ],
        'startToCloseTimeout' => [
          'shape' => 'DurationInSecondsOptional',
        ],
        'heartbeatTimeout' => [
          'shape' => 'DurationInSecondsOptional',
        ],
      ],
    ],
    'ScheduleActivityTaskFailedCause' => [
      'type' => 'string',
      'enum' => [
        'ACTIVITY_TYPE_DEPRECATED',
        'ACTIVITY_TYPE_DOES_NOT_EXIST',
        'ACTIVITY_ID_ALREADY_IN_USE',
        'OPEN_ACTIVITIES_LIMIT_EXCEEDED',
        'ACTIVITY_CREATION_RATE_EXCEEDED',
        'DEFAULT_SCHEDULE_TO_CLOSE_TIMEOUT_UNDEFINED',
        'DEFAULT_TASK_LIST_UNDEFINED',
        'DEFAULT_SCHEDULE_TO_START_TIMEOUT_UNDEFINED',
        'DEFAULT_START_TO_CLOSE_TIMEOUT_UNDEFINED',
        'DEFAULT_HEARTBEAT_TIMEOUT_UNDEFINED',
        'OPERATION_NOT_PERMITTED',
      ],
    ],
    'ScheduleActivityTaskFailedEventAttributes' => [
      'type' => 'structure',
      'required' => [
        'activityType',
        'activityId',
        'cause',
        'decisionTaskCompletedEventId',
      ],
      'members' => [
        'activityType' => [
          'shape' => 'ActivityType',
        ],
        'activityId' => [
          'shape' => 'ActivityId',
        ],
        'cause' => [
          'shape' => 'ScheduleActivityTaskFailedCause',
        ],
        'decisionTaskCompletedEventId' => [
          'shape' => 'EventId',
        ],
      ],
    ],
    'SignalExternalWorkflowExecutionDecisionAttributes' => [
      'type' => 'structure',
      'required' => [
        'workflowId',
        'signalName',
      ],
      'members' => [
        'workflowId' => [
          'shape' => 'WorkflowId',
        ],
        'runId' => [
          'shape' => 'RunIdOptional',
        ],
        'signalName' => [
          'shape' => 'SignalName',
        ],
        'input' => [
          'shape' => 'Data',
        ],
        'control' => [
          'shape' => 'Data',
        ],
      ],
    ],
    'SignalExternalWorkflowExecutionFailedCause' => [
      'type' => 'string',
      'enum' => [
        'UNKNOWN_EXTERNAL_WORKFLOW_EXECUTION',
        'SIGNAL_EXTERNAL_WORKFLOW_EXECUTION_RATE_EXCEEDED',
        'OPERATION_NOT_PERMITTED',
      ],
    ],
    'SignalExternalWorkflowExecutionFailedEventAttributes' => [
      'type' => 'structure',
      'required' => [
        'workflowId',
        'cause',
        'initiatedEventId',
        'decisionTaskCompletedEventId',
      ],
      'members' => [
        'workflowId' => [
          'shape' => 'WorkflowId',
        ],
        'runId' => [
          'shape' => 'RunIdOptional',
        ],
        'cause' => [
          'shape' => 'SignalExternalWorkflowExecutionFailedCause',
        ],
        'initiatedEventId' => [
          'shape' => 'EventId',
        ],
        'decisionTaskCompletedEventId' => [
          'shape' => 'EventId',
        ],
        'control' => [
          'shape' => 'Data',
        ],
      ],
    ],
    'SignalExternalWorkflowExecutionInitiatedEventAttributes' => [
      'type' => 'structure',
      'required' => [
        'workflowId',
        'signalName',
        'decisionTaskCompletedEventId',
      ],
      'members' => [
        'workflowId' => [
          'shape' => 'WorkflowId',
        ],
        'runId' => [
          'shape' => 'RunIdOptional',
        ],
        'signalName' => [
          'shape' => 'SignalName',
        ],
        'input' => [
          'shape' => 'Data',
        ],
        'decisionTaskCompletedEventId' => [
          'shape' => 'EventId',
        ],
        'control' => [
          'shape' => 'Data',
        ],
      ],
    ],
    'SignalName' => [
      'type' => 'string',
      'min' => 1,
      'max' => 256,
    ],
    'SignalWorkflowExecutionInput' => [
      'type' => 'structure',
      'required' => [
        'domain',
        'workflowId',
        'signalName',
      ],
      'members' => [
        'domain' => [
          'shape' => 'DomainName',
        ],
        'workflowId' => [
          'shape' => 'WorkflowId',
        ],
        'runId' => [
          'shape' => 'RunIdOptional',
        ],
        'signalName' => [
          'shape' => 'SignalName',
        ],
        'input' => [
          'shape' => 'Data',
        ],
      ],
    ],
    'StartChildWorkflowExecutionDecisionAttributes' => [
      'type' => 'structure',
      'required' => [
        'workflowType',
        'workflowId',
      ],
      'members' => [
        'workflowType' => [
          'shape' => 'WorkflowType',
        ],
        'workflowId' => [
          'shape' => 'WorkflowId',
        ],
        'control' => [
          'shape' => 'Data',
        ],
        'input' => [
          'shape' => 'Data',
        ],
        'executionStartToCloseTimeout' => [
          'shape' => 'DurationInSecondsOptional',
        ],
        'taskList' => [
          'shape' => 'TaskList',
        ],
        'taskStartToCloseTimeout' => [
          'shape' => 'DurationInSecondsOptional',
        ],
        'childPolicy' => [
          'shape' => 'ChildPolicy',
        ],
        'tagList' => [
          'shape' => 'TagList',
        ],
      ],
    ],
    'StartChildWorkflowExecutionFailedCause' => [
      'type' => 'string',
      'enum' => [
        'WORKFLOW_TYPE_DOES_NOT_EXIST',
        'WORKFLOW_TYPE_DEPRECATED',
        'OPEN_CHILDREN_LIMIT_EXCEEDED',
        'OPEN_WORKFLOWS_LIMIT_EXCEEDED',
        'CHILD_CREATION_RATE_EXCEEDED',
        'WORKFLOW_ALREADY_RUNNING',
        'DEFAULT_EXECUTION_START_TO_CLOSE_TIMEOUT_UNDEFINED',
        'DEFAULT_TASK_LIST_UNDEFINED',
        'DEFAULT_TASK_START_TO_CLOSE_TIMEOUT_UNDEFINED',
        'DEFAULT_CHILD_POLICY_UNDEFINED',
        'OPERATION_NOT_PERMITTED',
      ],
    ],
    'StartChildWorkflowExecutionFailedEventAttributes' => [
      'type' => 'structure',
      'required' => [
        'workflowType',
        'cause',
        'workflowId',
        'initiatedEventId',
        'decisionTaskCompletedEventId',
      ],
      'members' => [
        'workflowType' => [
          'shape' => 'WorkflowType',
        ],
        'cause' => [
          'shape' => 'StartChildWorkflowExecutionFailedCause',
        ],
        'workflowId' => [
          'shape' => 'WorkflowId',
        ],
        'initiatedEventId' => [
          'shape' => 'EventId',
        ],
        'decisionTaskCompletedEventId' => [
          'shape' => 'EventId',
        ],
        'control' => [
          'shape' => 'Data',
        ],
      ],
    ],
    'StartChildWorkflowExecutionInitiatedEventAttributes' => [
      'type' => 'structure',
      'required' => [
        'workflowId',
        'workflowType',
        'taskList',
        'decisionTaskCompletedEventId',
        'childPolicy',
      ],
      'members' => [
        'workflowId' => [
          'shape' => 'WorkflowId',
        ],
        'workflowType' => [
          'shape' => 'WorkflowType',
        ],
        'control' => [
          'shape' => 'Data',
        ],
        'input' => [
          'shape' => 'Data',
        ],
        'executionStartToCloseTimeout' => [
          'shape' => 'DurationInSecondsOptional',
        ],
        'taskList' => [
          'shape' => 'TaskList',
        ],
        'decisionTaskCompletedEventId' => [
          'shape' => 'EventId',
        ],
        'childPolicy' => [
          'shape' => 'ChildPolicy',
        ],
        'taskStartToCloseTimeout' => [
          'shape' => 'DurationInSecondsOptional',
        ],
        'tagList' => [
          'shape' => 'TagList',
        ],
      ],
    ],
    'StartTimerDecisionAttributes' => [
      'type' => 'structure',
      'required' => [
        'timerId',
        'startToFireTimeout',
      ],
      'members' => [
        'timerId' => [
          'shape' => 'TimerId',
        ],
        'control' => [
          'shape' => 'Data',
        ],
        'startToFireTimeout' => [
          'shape' => 'DurationInSeconds',
        ],
      ],
    ],
    'StartTimerFailedCause' => [
      'type' => 'string',
      'enum' => [
        'TIMER_ID_ALREADY_IN_USE',
        'OPEN_TIMERS_LIMIT_EXCEEDED',
        'TIMER_CREATION_RATE_EXCEEDED',
        'OPERATION_NOT_PERMITTED',
      ],
    ],
    'StartTimerFailedEventAttributes' => [
      'type' => 'structure',
      'required' => [
        'timerId',
        'cause',
        'decisionTaskCompletedEventId',
      ],
      'members' => [
        'timerId' => [
          'shape' => 'TimerId',
        ],
        'cause' => [
          'shape' => 'StartTimerFailedCause',
        ],
        'decisionTaskCompletedEventId' => [
          'shape' => 'EventId',
        ],
      ],
    ],
    'StartWorkflowExecutionInput' => [
      'type' => 'structure',
      'required' => [
        'domain',
        'workflowId',
        'workflowType',
      ],
      'members' => [
        'domain' => [
          'shape' => 'DomainName',
        ],
        'workflowId' => [
          'shape' => 'WorkflowId',
        ],
        'workflowType' => [
          'shape' => 'WorkflowType',
        ],
        'taskList' => [
          'shape' => 'TaskList',
        ],
        'input' => [
          'shape' => 'Data',
        ],
        'executionStartToCloseTimeout' => [
          'shape' => 'DurationInSecondsOptional',
        ],
        'tagList' => [
          'shape' => 'TagList',
        ],
        'taskStartToCloseTimeout' => [
          'shape' => 'DurationInSecondsOptional',
        ],
        'childPolicy' => [
          'shape' => 'ChildPolicy',
        ],
      ],
    ],
    'Tag' => [
      'type' => 'string',
      'min' => 1,
      'max' => 256,
    ],
    'TagFilter' => [
      'type' => 'structure',
      'required' => [
        'tag',
      ],
      'members' => [
        'tag' => [
          'shape' => 'Tag',
        ],
      ],
    ],
    'TagList' => [
      'type' => 'list',
      'member' => [
        'shape' => 'Tag',
      ],
      'max' => 5,
    ],
    'TaskList' => [
      'type' => 'structure',
      'required' => [
        'name',
      ],
      'members' => [
        'name' => [
          'shape' => 'Name',
        ],
      ],
    ],
    'TaskToken' => [
      'type' => 'string',
      'min' => 1,
      'max' => 1024,
    ],
    'TerminateReason' => [
      'type' => 'string',
      'max' => 256,
    ],
    'TerminateWorkflowExecutionInput' => [
      'type' => 'structure',
      'required' => [
        'domain',
        'workflowId',
      ],
      'members' => [
        'domain' => [
          'shape' => 'DomainName',
        ],
        'workflowId' => [
          'shape' => 'WorkflowId',
        ],
        'runId' => [
          'shape' => 'RunIdOptional',
        ],
        'reason' => [
          'shape' => 'TerminateReason',
        ],
        'details' => [
          'shape' => 'Data',
        ],
        'childPolicy' => [
          'shape' => 'ChildPolicy',
        ],
      ],
    ],
    'TimerCanceledEventAttributes' => [
      'type' => 'structure',
      'required' => [
        'timerId',
        'startedEventId',
        'decisionTaskCompletedEventId',
      ],
      'members' => [
        'timerId' => [
          'shape' => 'TimerId',
        ],
        'startedEventId' => [
          'shape' => 'EventId',
        ],
        'decisionTaskCompletedEventId' => [
          'shape' => 'EventId',
        ],
      ],
    ],
    'TimerFiredEventAttributes' => [
      'type' => 'structure',
      'required' => [
        'timerId',
        'startedEventId',
      ],
      'members' => [
        'timerId' => [
          'shape' => 'TimerId',
        ],
        'startedEventId' => [
          'shape' => 'EventId',
        ],
      ],
    ],
    'TimerId' => [
      'type' => 'string',
      'min' => 1,
      'max' => 256,
    ],
    'TimerStartedEventAttributes' => [
      'type' => 'structure',
      'required' => [
        'timerId',
        'startToFireTimeout',
        'decisionTaskCompletedEventId',
      ],
      'members' => [
        'timerId' => [
          'shape' => 'TimerId',
        ],
        'control' => [
          'shape' => 'Data',
        ],
        'startToFireTimeout' => [
          'shape' => 'DurationInSeconds',
        ],
        'decisionTaskCompletedEventId' => [
          'shape' => 'EventId',
        ],
      ],
    ],
    'Timestamp' => [
      'type' => 'timestamp',
    ],
    'Truncated' => [
      'type' => 'boolean',
    ],
    'TypeAlreadyExistsFault' => [
      'type' => 'structure',
      'members' => [
        'message' => [
          'shape' => 'ErrorMessage',
        ],
      ],
      'exception' => true,
    ],
    'TypeDeprecatedFault' => [
      'type' => 'structure',
      'members' => [
        'message' => [
          'shape' => 'ErrorMessage',
        ],
      ],
      'exception' => true,
    ],
    'UnknownResourceFault' => [
      'type' => 'structure',
      'members' => [
        'message' => [
          'shape' => 'ErrorMessage',
        ],
      ],
      'exception' => true,
    ],
    'Version' => [
      'type' => 'string',
      'min' => 1,
      'max' => 64,
    ],
    'VersionOptional' => [
      'type' => 'string',
      'max' => 64,
    ],
    'WorkflowExecution' => [
      'type' => 'structure',
      'required' => [
        'workflowId',
        'runId',
      ],
      'members' => [
        'workflowId' => [
          'shape' => 'WorkflowId',
        ],
        'runId' => [
          'shape' => 'RunId',
        ],
      ],
    ],
    'WorkflowExecutionAlreadyStartedFault' => [
      'type' => 'structure',
      'members' => [
        'message' => [
          'shape' => 'ErrorMessage',
        ],
      ],
      'exception' => true,
    ],
    'WorkflowExecutionCancelRequestedCause' => [
      'type' => 'string',
      'enum' => [
        'CHILD_POLICY_APPLIED',
      ],
    ],
    'WorkflowExecutionCancelRequestedEventAttributes' => [
      'type' => 'structure',
      'members' => [
        'externalWorkflowExecution' => [
          'shape' => 'WorkflowExecution',
        ],
        'externalInitiatedEventId' => [
          'shape' => 'EventId',
        ],
        'cause' => [
          'shape' => 'WorkflowExecutionCancelRequestedCause',
        ],
      ],
    ],
    'WorkflowExecutionCanceledEventAttributes' => [
      'type' => 'structure',
      'required' => [
        'decisionTaskCompletedEventId',
      ],
      'members' => [
        'details' => [
          'shape' => 'Data',
        ],
        'decisionTaskCompletedEventId' => [
          'shape' => 'EventId',
        ],
      ],
    ],
    'WorkflowExecutionCompletedEventAttributes' => [
      'type' => 'structure',
      'required' => [
        'decisionTaskCompletedEventId',
      ],
      'members' => [
        'result' => [
          'shape' => 'Data',
        ],
        'decisionTaskCompletedEventId' => [
          'shape' => 'EventId',
        ],
      ],
    ],
    'WorkflowExecutionConfiguration' => [
      'type' => 'structure',
      'required' => [
        'taskStartToCloseTimeout',
        'executionStartToCloseTimeout',
        'taskList',
        'childPolicy',
      ],
      'members' => [
        'taskStartToCloseTimeout' => [
          'shape' => 'DurationInSeconds',
        ],
        'executionStartToCloseTimeout' => [
          'shape' => 'DurationInSeconds',
        ],
        'taskList' => [
          'shape' => 'TaskList',
        ],
        'childPolicy' => [
          'shape' => 'ChildPolicy',
        ],
      ],
    ],
    'WorkflowExecutionContinuedAsNewEventAttributes' => [
      'type' => 'structure',
      'required' => [
        'decisionTaskCompletedEventId',
        'newExecutionRunId',
        'taskList',
        'childPolicy',
        'workflowType',
      ],
      'members' => [
        'input' => [
          'shape' => 'Data',
        ],
        'decisionTaskCompletedEventId' => [
          'shape' => 'EventId',
        ],
        'newExecutionRunId' => [
          'shape' => 'RunId',
        ],
        'executionStartToCloseTimeout' => [
          'shape' => 'DurationInSecondsOptional',
        ],
        'taskList' => [
          'shape' => 'TaskList',
        ],
        'taskStartToCloseTimeout' => [
          'shape' => 'DurationInSecondsOptional',
        ],
        'childPolicy' => [
          'shape' => 'ChildPolicy',
        ],
        'tagList' => [
          'shape' => 'TagList',
        ],
        'workflowType' => [
          'shape' => 'WorkflowType',
        ],
      ],
    ],
    'WorkflowExecutionCount' => [
      'type' => 'structure',
      'required' => [
        'count',
      ],
      'members' => [
        'count' => [
          'shape' => 'Count',
        ],
        'truncated' => [
          'shape' => 'Truncated',
        ],
      ],
    ],
    'WorkflowExecutionDetail' => [
      'type' => 'structure',
      'required' => [
        'executionInfo',
        'executionConfiguration',
        'openCounts',
      ],
      'members' => [
        'executionInfo' => [
          'shape' => 'WorkflowExecutionInfo',
        ],
        'executionConfiguration' => [
          'shape' => 'WorkflowExecutionConfiguration',
        ],
        'openCounts' => [
          'shape' => 'WorkflowExecutionOpenCounts',
        ],
        'latestActivityTaskTimestamp' => [
          'shape' => 'Timestamp',
        ],
        'latestExecutionContext' => [
          'shape' => 'Data',
        ],
      ],
    ],
    'WorkflowExecutionFailedEventAttributes' => [
      'type' => 'structure',
      'required' => [
        'decisionTaskCompletedEventId',
      ],
      'members' => [
        'reason' => [
          'shape' => 'FailureReason',
        ],
        'details' => [
          'shape' => 'Data',
        ],
        'decisionTaskCompletedEventId' => [
          'shape' => 'EventId',
        ],
      ],
    ],
    'WorkflowExecutionFilter' => [
      'type' => 'structure',
      'required' => [
        'workflowId',
      ],
      'members' => [
        'workflowId' => [
          'shape' => 'WorkflowId',
        ],
      ],
    ],
    'WorkflowExecutionInfo' => [
      'type' => 'structure',
      'required' => [
        'execution',
        'workflowType',
        'startTimestamp',
        'executionStatus',
      ],
      'members' => [
        'execution' => [
          'shape' => 'WorkflowExecution',
        ],
        'workflowType' => [
          'shape' => 'WorkflowType',
        ],
        'startTimestamp' => [
          'shape' => 'Timestamp',
        ],
        'closeTimestamp' => [
          'shape' => 'Timestamp',
        ],
        'executionStatus' => [
          'shape' => 'ExecutionStatus',
        ],
        'closeStatus' => [
          'shape' => 'CloseStatus',
        ],
        'parent' => [
          'shape' => 'WorkflowExecution',
        ],
        'tagList' => [
          'shape' => 'TagList',
        ],
        'cancelRequested' => [
          'shape' => 'Canceled',
        ],
      ],
    ],
    'WorkflowExecutionInfoList' => [
      'type' => 'list',
      'member' => [
        'shape' => 'WorkflowExecutionInfo',
      ],
    ],
    'WorkflowExecutionInfos' => [
      'type' => 'structure',
      'required' => [
        'executionInfos',
      ],
      'members' => [
        'executionInfos' => [
          'shape' => 'WorkflowExecutionInfoList',
        ],
        'nextPageToken' => [
          'shape' => 'PageToken',
        ],
      ],
    ],
    'WorkflowExecutionOpenCounts' => [
      'type' => 'structure',
      'required' => [
        'openActivityTasks',
        'openDecisionTasks',
        'openTimers',
        'openChildWorkflowExecutions',
      ],
      'members' => [
        'openActivityTasks' => [
          'shape' => 'Count',
        ],
        'openDecisionTasks' => [
          'shape' => 'OpenDecisionTasksCount',
        ],
        'openTimers' => [
          'shape' => 'Count',
        ],
        'openChildWorkflowExecutions' => [
          'shape' => 'Count',
        ],
      ],
    ],
    'WorkflowExecutionSignaledEventAttributes' => [
      'type' => 'structure',
      'required' => [
        'signalName',
      ],
      'members' => [
        'signalName' => [
          'shape' => 'SignalName',
        ],
        'input' => [
          'shape' => 'Data',
        ],
        'externalWorkflowExecution' => [
          'shape' => 'WorkflowExecution',
        ],
        'externalInitiatedEventId' => [
          'shape' => 'EventId',
        ],
      ],
    ],
    'WorkflowExecutionStartedEventAttributes' => [
      'type' => 'structure',
      'required' => [
        'childPolicy',
        'taskList',
        'workflowType',
      ],
      'members' => [
        'input' => [
          'shape' => 'Data',
        ],
        'executionStartToCloseTimeout' => [
          'shape' => 'DurationInSecondsOptional',
        ],
        'taskStartToCloseTimeout' => [
          'shape' => 'DurationInSecondsOptional',
        ],
        'childPolicy' => [
          'shape' => 'ChildPolicy',
        ],
        'taskList' => [
          'shape' => 'TaskList',
        ],
        'workflowType' => [
          'shape' => 'WorkflowType',
        ],
        'tagList' => [
          'shape' => 'TagList',
        ],
        'continuedExecutionRunId' => [
          'shape' => 'RunIdOptional',
        ],
        'parentWorkflowExecution' => [
          'shape' => 'WorkflowExecution',
        ],
        'parentInitiatedEventId' => [
          'shape' => 'EventId',
        ],
      ],
    ],
    'WorkflowExecutionTerminatedCause' => [
      'type' => 'string',
      'enum' => [
        'CHILD_POLICY_APPLIED',
        'EVENT_LIMIT_EXCEEDED',
        'OPERATOR_INITIATED',
      ],
    ],
    'WorkflowExecutionTerminatedEventAttributes' => [
      'type' => 'structure',
      'required' => [
        'childPolicy',
      ],
      'members' => [
        'reason' => [
          'shape' => 'TerminateReason',
        ],
        'details' => [
          'shape' => 'Data',
        ],
        'childPolicy' => [
          'shape' => 'ChildPolicy',
        ],
        'cause' => [
          'shape' => 'WorkflowExecutionTerminatedCause',
        ],
      ],
    ],
    'WorkflowExecutionTimedOutEventAttributes' => [
      'type' => 'structure',
      'required' => [
        'timeoutType',
        'childPolicy',
      ],
      'members' => [
        'timeoutType' => [
          'shape' => 'WorkflowExecutionTimeoutType',
        ],
        'childPolicy' => [
          'shape' => 'ChildPolicy',
        ],
      ],
    ],
    'WorkflowExecutionTimeoutType' => [
      'type' => 'string',
      'enum' => [
        'START_TO_CLOSE',
      ],
    ],
    'WorkflowId' => [
      'type' => 'string',
      'min' => 1,
      'max' => 256,
    ],
    'WorkflowType' => [
      'type' => 'structure',
      'required' => [
        'name',
        'version',
      ],
      'members' => [
        'name' => [
          'shape' => 'Name',
        ],
        'version' => [
          'shape' => 'Version',
        ],
      ],
    ],
    'WorkflowTypeConfiguration' => [
      'type' => 'structure',
      'members' => [
        'defaultTaskStartToCloseTimeout' => [
          'shape' => 'DurationInSecondsOptional',
        ],
        'defaultExecutionStartToCloseTimeout' => [
          'shape' => 'DurationInSecondsOptional',
        ],
        'defaultTaskList' => [
          'shape' => 'TaskList',
        ],
        'defaultChildPolicy' => [
          'shape' => 'ChildPolicy',
        ],
      ],
    ],
    'WorkflowTypeDetail' => [
      'type' => 'structure',
      'required' => [
        'typeInfo',
        'configuration',
      ],
      'members' => [
        'typeInfo' => [
          'shape' => 'WorkflowTypeInfo',
        ],
        'configuration' => [
          'shape' => 'WorkflowTypeConfiguration',
        ],
      ],
    ],
    'WorkflowTypeFilter' => [
      'type' => 'structure',
      'required' => [
        'name',
      ],
      'members' => [
        'name' => [
          'shape' => 'Name',
        ],
        'version' => [
          'shape' => 'VersionOptional',
        ],
      ],
    ],
    'WorkflowTypeInfo' => [
      'type' => 'structure',
      'required' => [
        'workflowType',
        'status',
        'creationDate',
      ],
      'members' => [
        'workflowType' => [
          'shape' => 'WorkflowType',
        ],
        'status' => [
          'shape' => 'RegistrationStatus',
        ],
        'description' => [
          'shape' => 'Description',
        ],
        'creationDate' => [
          'shape' => 'Timestamp',
        ],
        'deprecationDate' => [
          'shape' => 'Timestamp',
        ],
      ],
    ],
    'WorkflowTypeInfoList' => [
      'type' => 'list',
      'member' => [
        'shape' => 'WorkflowTypeInfo',
      ],
    ],
    'WorkflowTypeInfos' => [
      'type' => 'structure',
      'required' => [
        'typeInfos',
      ],
      'members' => [
        'typeInfos' => [
          'shape' => 'WorkflowTypeInfoList',
        ],
        'nextPageToken' => [
          'shape' => 'PageToken',
        ],
      ],
    ],
  ],
];
