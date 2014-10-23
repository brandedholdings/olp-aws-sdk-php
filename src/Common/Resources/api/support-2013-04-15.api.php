<?php return [
  'metadata' => [
    'apiVersion' => '2013-04-15',
    'endpointPrefix' => 'support',
    'jsonVersion' => '1.1',
    'serviceFullName' => 'AWS Support',
    'signatureVersion' => 'v4',
    'targetPrefix' => 'AWSSupport_20130415',
    'protocol' => 'json',
  ],
  'operations' => [
    'AddAttachmentsToSet' => [
      'name' => 'AddAttachmentsToSet',
      'http' => [
        'method' => 'POST',
        'requestUri' => '/',
      ],
      'input' => [
        'shape' => 'AddAttachmentsToSetRequest',
      ],
      'output' => [
        'shape' => 'AddAttachmentsToSetResponse',
      ],
      'errors' => [
        [
          'shape' => 'InternalServerError',
          'exception' => true,
          'fault' => true,
        ],
        [
          'shape' => 'AttachmentSetIdNotFound',
          'exception' => true,
        ],
        [
          'shape' => 'AttachmentSetExpired',
          'exception' => true,
        ],
        [
          'shape' => 'AttachmentSetSizeLimitExceeded',
          'exception' => true,
        ],
        [
          'shape' => 'AttachmentLimitExceeded',
          'exception' => true,
        ],
      ],
    ],
    'AddCommunicationToCase' => [
      'name' => 'AddCommunicationToCase',
      'http' => [
        'method' => 'POST',
        'requestUri' => '/',
      ],
      'input' => [
        'shape' => 'AddCommunicationToCaseRequest',
      ],
      'output' => [
        'shape' => 'AddCommunicationToCaseResponse',
      ],
      'errors' => [
        [
          'shape' => 'InternalServerError',
          'exception' => true,
          'fault' => true,
        ],
        [
          'shape' => 'CaseIdNotFound',
          'exception' => true,
        ],
        [
          'shape' => 'AttachmentSetIdNotFound',
          'exception' => true,
        ],
        [
          'shape' => 'AttachmentSetExpired',
          'exception' => true,
        ],
      ],
    ],
    'CreateCase' => [
      'name' => 'CreateCase',
      'http' => [
        'method' => 'POST',
        'requestUri' => '/',
      ],
      'input' => [
        'shape' => 'CreateCaseRequest',
      ],
      'output' => [
        'shape' => 'CreateCaseResponse',
      ],
      'errors' => [
        [
          'shape' => 'InternalServerError',
          'exception' => true,
          'fault' => true,
        ],
        [
          'shape' => 'CaseCreationLimitExceeded',
          'exception' => true,
        ],
        [
          'shape' => 'AttachmentSetIdNotFound',
          'exception' => true,
        ],
        [
          'shape' => 'AttachmentSetExpired',
          'exception' => true,
        ],
      ],
    ],
    'DescribeAttachment' => [
      'name' => 'DescribeAttachment',
      'http' => [
        'method' => 'POST',
        'requestUri' => '/',
      ],
      'input' => [
        'shape' => 'DescribeAttachmentRequest',
      ],
      'output' => [
        'shape' => 'DescribeAttachmentResponse',
      ],
      'errors' => [
        [
          'shape' => 'InternalServerError',
          'exception' => true,
          'fault' => true,
        ],
        [
          'shape' => 'DescribeAttachmentLimitExceeded',
          'exception' => true,
        ],
        [
          'shape' => 'AttachmentIdNotFound',
          'exception' => true,
        ],
      ],
    ],
    'DescribeCases' => [
      'name' => 'DescribeCases',
      'http' => [
        'method' => 'POST',
        'requestUri' => '/',
      ],
      'input' => [
        'shape' => 'DescribeCasesRequest',
      ],
      'output' => [
        'shape' => 'DescribeCasesResponse',
      ],
      'errors' => [
        [
          'shape' => 'InternalServerError',
          'exception' => true,
          'fault' => true,
        ],
        [
          'shape' => 'CaseIdNotFound',
          'exception' => true,
        ],
      ],
    ],
    'DescribeCommunications' => [
      'name' => 'DescribeCommunications',
      'http' => [
        'method' => 'POST',
        'requestUri' => '/',
      ],
      'input' => [
        'shape' => 'DescribeCommunicationsRequest',
      ],
      'output' => [
        'shape' => 'DescribeCommunicationsResponse',
      ],
      'errors' => [
        [
          'shape' => 'InternalServerError',
          'exception' => true,
          'fault' => true,
        ],
        [
          'shape' => 'CaseIdNotFound',
          'exception' => true,
        ],
      ],
    ],
    'DescribeServices' => [
      'name' => 'DescribeServices',
      'http' => [
        'method' => 'POST',
        'requestUri' => '/',
      ],
      'input' => [
        'shape' => 'DescribeServicesRequest',
      ],
      'output' => [
        'shape' => 'DescribeServicesResponse',
      ],
      'errors' => [
        [
          'shape' => 'InternalServerError',
          'exception' => true,
          'fault' => true,
        ],
      ],
    ],
    'DescribeSeverityLevels' => [
      'name' => 'DescribeSeverityLevels',
      'http' => [
        'method' => 'POST',
        'requestUri' => '/',
      ],
      'input' => [
        'shape' => 'DescribeSeverityLevelsRequest',
      ],
      'output' => [
        'shape' => 'DescribeSeverityLevelsResponse',
      ],
      'errors' => [
        [
          'shape' => 'InternalServerError',
          'exception' => true,
          'fault' => true,
        ],
      ],
    ],
    'DescribeTrustedAdvisorCheckRefreshStatuses' => [
      'name' => 'DescribeTrustedAdvisorCheckRefreshStatuses',
      'http' => [
        'method' => 'POST',
        'requestUri' => '/',
      ],
      'input' => [
        'shape' => 'DescribeTrustedAdvisorCheckRefreshStatusesRequest',
      ],
      'output' => [
        'shape' => 'DescribeTrustedAdvisorCheckRefreshStatusesResponse',
      ],
      'errors' => [
        [
          'shape' => 'InternalServerError',
          'exception' => true,
          'fault' => true,
        ],
      ],
    ],
    'DescribeTrustedAdvisorCheckResult' => [
      'name' => 'DescribeTrustedAdvisorCheckResult',
      'http' => [
        'method' => 'POST',
        'requestUri' => '/',
      ],
      'input' => [
        'shape' => 'DescribeTrustedAdvisorCheckResultRequest',
      ],
      'output' => [
        'shape' => 'DescribeTrustedAdvisorCheckResultResponse',
      ],
      'errors' => [
        [
          'shape' => 'InternalServerError',
          'exception' => true,
          'fault' => true,
        ],
      ],
    ],
    'DescribeTrustedAdvisorCheckSummaries' => [
      'name' => 'DescribeTrustedAdvisorCheckSummaries',
      'http' => [
        'method' => 'POST',
        'requestUri' => '/',
      ],
      'input' => [
        'shape' => 'DescribeTrustedAdvisorCheckSummariesRequest',
      ],
      'output' => [
        'shape' => 'DescribeTrustedAdvisorCheckSummariesResponse',
      ],
      'errors' => [
        [
          'shape' => 'InternalServerError',
          'exception' => true,
          'fault' => true,
        ],
      ],
    ],
    'DescribeTrustedAdvisorChecks' => [
      'name' => 'DescribeTrustedAdvisorChecks',
      'http' => [
        'method' => 'POST',
        'requestUri' => '/',
      ],
      'input' => [
        'shape' => 'DescribeTrustedAdvisorChecksRequest',
      ],
      'output' => [
        'shape' => 'DescribeTrustedAdvisorChecksResponse',
      ],
      'errors' => [
        [
          'shape' => 'InternalServerError',
          'exception' => true,
          'fault' => true,
        ],
      ],
    ],
    'RefreshTrustedAdvisorCheck' => [
      'name' => 'RefreshTrustedAdvisorCheck',
      'http' => [
        'method' => 'POST',
        'requestUri' => '/',
      ],
      'input' => [
        'shape' => 'RefreshTrustedAdvisorCheckRequest',
      ],
      'output' => [
        'shape' => 'RefreshTrustedAdvisorCheckResponse',
      ],
      'errors' => [
        [
          'shape' => 'InternalServerError',
          'exception' => true,
          'fault' => true,
        ],
      ],
    ],
    'ResolveCase' => [
      'name' => 'ResolveCase',
      'http' => [
        'method' => 'POST',
        'requestUri' => '/',
      ],
      'input' => [
        'shape' => 'ResolveCaseRequest',
      ],
      'output' => [
        'shape' => 'ResolveCaseResponse',
      ],
      'errors' => [
        [
          'shape' => 'InternalServerError',
          'exception' => true,
          'fault' => true,
        ],
        [
          'shape' => 'CaseIdNotFound',
          'exception' => true,
        ],
      ],
    ],
  ],
  'shapes' => [
    'AddAttachmentsToSetRequest' => [
      'type' => 'structure',
      'required' => [
        'attachments',
      ],
      'members' => [
        'attachmentSetId' => [
          'shape' => 'AttachmentSetId',
        ],
        'attachments' => [
          'shape' => 'Attachments',
        ],
      ],
    ],
    'AddAttachmentsToSetResponse' => [
      'type' => 'structure',
      'members' => [
        'attachmentSetId' => [
          'shape' => 'AttachmentSetId',
        ],
        'expiryTime' => [
          'shape' => 'ExpiryTime',
        ],
      ],
    ],
    'AddCommunicationToCaseRequest' => [
      'type' => 'structure',
      'required' => [
        'communicationBody',
      ],
      'members' => [
        'caseId' => [
          'shape' => 'CaseId',
        ],
        'communicationBody' => [
          'shape' => 'CommunicationBody',
        ],
        'ccEmailAddresses' => [
          'shape' => 'CcEmailAddressList',
        ],
        'attachmentSetId' => [
          'shape' => 'AttachmentSetId',
        ],
      ],
    ],
    'AddCommunicationToCaseResponse' => [
      'type' => 'structure',
      'members' => [
        'result' => [
          'shape' => 'Result',
        ],
      ],
    ],
    'AfterTime' => [
      'type' => 'string',
    ],
    'Attachment' => [
      'type' => 'structure',
      'members' => [
        'fileName' => [
          'shape' => 'FileName',
        ],
        'data' => [
          'shape' => 'Data',
        ],
      ],
    ],
    'AttachmentDetails' => [
      'type' => 'structure',
      'members' => [
        'attachmentId' => [
          'shape' => 'AttachmentId',
        ],
        'fileName' => [
          'shape' => 'FileName',
        ],
      ],
    ],
    'AttachmentId' => [
      'type' => 'string',
    ],
    'AttachmentIdNotFound' => [
      'type' => 'structure',
      'members' => [
        'message' => [
          'shape' => 'ErrorMessage',
        ],
      ],
      'exception' => true,
    ],
    'AttachmentLimitExceeded' => [
      'type' => 'structure',
      'members' => [
        'message' => [
          'shape' => 'ErrorMessage',
        ],
      ],
      'exception' => true,
    ],
    'AttachmentSet' => [
      'type' => 'list',
      'member' => [
        'shape' => 'AttachmentDetails',
      ],
    ],
    'AttachmentSetExpired' => [
      'type' => 'structure',
      'members' => [
        'message' => [
          'shape' => 'ErrorMessage',
        ],
      ],
      'exception' => true,
    ],
    'AttachmentSetId' => [
      'type' => 'string',
    ],
    'AttachmentSetIdNotFound' => [
      'type' => 'structure',
      'members' => [
        'message' => [
          'shape' => 'ErrorMessage',
        ],
      ],
      'exception' => true,
    ],
    'AttachmentSetSizeLimitExceeded' => [
      'type' => 'structure',
      'members' => [
        'message' => [
          'shape' => 'ErrorMessage',
        ],
      ],
      'exception' => true,
    ],
    'Attachments' => [
      'type' => 'list',
      'member' => [
        'shape' => 'Attachment',
      ],
    ],
    'BeforeTime' => [
      'type' => 'string',
    ],
    'Boolean' => [
      'type' => 'boolean',
    ],
    'CaseCreationLimitExceeded' => [
      'type' => 'structure',
      'members' => [
        'message' => [
          'shape' => 'ErrorMessage',
        ],
      ],
      'exception' => true,
    ],
    'CaseDetails' => [
      'type' => 'structure',
      'members' => [
        'caseId' => [
          'shape' => 'CaseId',
        ],
        'displayId' => [
          'shape' => 'DisplayId',
        ],
        'subject' => [
          'shape' => 'Subject',
        ],
        'status' => [
          'shape' => 'Status',
        ],
        'serviceCode' => [
          'shape' => 'ServiceCode',
        ],
        'categoryCode' => [
          'shape' => 'CategoryCode',
        ],
        'severityCode' => [
          'shape' => 'SeverityCode',
        ],
        'submittedBy' => [
          'shape' => 'SubmittedBy',
        ],
        'timeCreated' => [
          'shape' => 'TimeCreated',
        ],
        'recentCommunications' => [
          'shape' => 'RecentCaseCommunications',
        ],
        'ccEmailAddresses' => [
          'shape' => 'CcEmailAddressList',
        ],
        'language' => [
          'shape' => 'Language',
        ],
      ],
    ],
    'CaseId' => [
      'type' => 'string',
    ],
    'CaseIdList' => [
      'type' => 'list',
      'member' => [
        'shape' => 'CaseId',
      ],
      'min' => 0,
      'max' => 100,
    ],
    'CaseIdNotFound' => [
      'type' => 'structure',
      'members' => [
        'message' => [
          'shape' => 'ErrorMessage',
        ],
      ],
      'exception' => true,
    ],
    'CaseList' => [
      'type' => 'list',
      'member' => [
        'shape' => 'CaseDetails',
      ],
    ],
    'CaseStatus' => [
      'type' => 'string',
    ],
    'Category' => [
      'type' => 'structure',
      'members' => [
        'code' => [
          'shape' => 'CategoryCode',
        ],
        'name' => [
          'shape' => 'CategoryName',
        ],
      ],
    ],
    'CategoryCode' => [
      'type' => 'string',
    ],
    'CategoryList' => [
      'type' => 'list',
      'member' => [
        'shape' => 'Category',
      ],
    ],
    'CategoryName' => [
      'type' => 'string',
    ],
    'CcEmailAddress' => [
      'type' => 'string',
    ],
    'CcEmailAddressList' => [
      'type' => 'list',
      'member' => [
        'shape' => 'CcEmailAddress',
      ],
    ],
    'Communication' => [
      'type' => 'structure',
      'members' => [
        'caseId' => [
          'shape' => 'CaseId',
        ],
        'body' => [
          'shape' => 'CommunicationBody',
        ],
        'submittedBy' => [
          'shape' => 'SubmittedBy',
        ],
        'timeCreated' => [
          'shape' => 'TimeCreated',
        ],
        'attachmentSet' => [
          'shape' => 'AttachmentSet',
        ],
      ],
    ],
    'CommunicationBody' => [
      'type' => 'string',
    ],
    'CommunicationList' => [
      'type' => 'list',
      'member' => [
        'shape' => 'Communication',
      ],
    ],
    'CreateCaseRequest' => [
      'type' => 'structure',
      'required' => [
        'subject',
        'communicationBody',
      ],
      'members' => [
        'subject' => [
          'shape' => 'Subject',
        ],
        'serviceCode' => [
          'shape' => 'ServiceCode',
        ],
        'severityCode' => [
          'shape' => 'SeverityCode',
        ],
        'categoryCode' => [
          'shape' => 'CategoryCode',
        ],
        'communicationBody' => [
          'shape' => 'CommunicationBody',
        ],
        'ccEmailAddresses' => [
          'shape' => 'CcEmailAddressList',
        ],
        'language' => [
          'shape' => 'Language',
        ],
        'issueType' => [
          'shape' => 'IssueType',
        ],
        'attachmentSetId' => [
          'shape' => 'AttachmentSetId',
        ],
      ],
    ],
    'CreateCaseResponse' => [
      'type' => 'structure',
      'members' => [
        'caseId' => [
          'shape' => 'CaseId',
        ],
      ],
    ],
    'Data' => [
      'type' => 'blob',
    ],
    'DescribeAttachmentLimitExceeded' => [
      'type' => 'structure',
      'members' => [
        'message' => [
          'shape' => 'ErrorMessage',
        ],
      ],
      'exception' => true,
    ],
    'DescribeAttachmentRequest' => [
      'type' => 'structure',
      'required' => [
        'attachmentId',
      ],
      'members' => [
        'attachmentId' => [
          'shape' => 'AttachmentId',
        ],
      ],
    ],
    'DescribeAttachmentResponse' => [
      'type' => 'structure',
      'members' => [
        'attachment' => [
          'shape' => 'Attachment',
        ],
      ],
    ],
    'DescribeCasesRequest' => [
      'type' => 'structure',
      'members' => [
        'caseIdList' => [
          'shape' => 'CaseIdList',
        ],
        'displayId' => [
          'shape' => 'DisplayId',
        ],
        'afterTime' => [
          'shape' => 'AfterTime',
        ],
        'beforeTime' => [
          'shape' => 'BeforeTime',
        ],
        'includeResolvedCases' => [
          'shape' => 'IncludeResolvedCases',
        ],
        'nextToken' => [
          'shape' => 'NextToken',
        ],
        'maxResults' => [
          'shape' => 'MaxResults',
        ],
        'language' => [
          'shape' => 'Language',
        ],
        'includeCommunications' => [
          'shape' => 'IncludeCommunications',
        ],
      ],
    ],
    'DescribeCasesResponse' => [
      'type' => 'structure',
      'members' => [
        'cases' => [
          'shape' => 'CaseList',
        ],
        'nextToken' => [
          'shape' => 'NextToken',
        ],
      ],
    ],
    'DescribeCommunicationsRequest' => [
      'type' => 'structure',
      'required' => [
        'caseId',
      ],
      'members' => [
        'caseId' => [
          'shape' => 'CaseId',
        ],
        'beforeTime' => [
          'shape' => 'BeforeTime',
        ],
        'afterTime' => [
          'shape' => 'AfterTime',
        ],
        'nextToken' => [
          'shape' => 'NextToken',
        ],
        'maxResults' => [
          'shape' => 'MaxResults',
        ],
      ],
    ],
    'DescribeCommunicationsResponse' => [
      'type' => 'structure',
      'members' => [
        'communications' => [
          'shape' => 'CommunicationList',
        ],
        'nextToken' => [
          'shape' => 'NextToken',
        ],
      ],
    ],
    'DescribeServicesRequest' => [
      'type' => 'structure',
      'members' => [
        'serviceCodeList' => [
          'shape' => 'ServiceCodeList',
        ],
        'language' => [
          'shape' => 'Language',
        ],
      ],
    ],
    'DescribeServicesResponse' => [
      'type' => 'structure',
      'members' => [
        'services' => [
          'shape' => 'ServiceList',
        ],
      ],
    ],
    'DescribeSeverityLevelsRequest' => [
      'type' => 'structure',
      'members' => [
        'language' => [
          'shape' => 'Language',
        ],
      ],
    ],
    'DescribeSeverityLevelsResponse' => [
      'type' => 'structure',
      'members' => [
        'severityLevels' => [
          'shape' => 'SeverityLevelsList',
        ],
      ],
    ],
    'DescribeTrustedAdvisorCheckRefreshStatusesRequest' => [
      'type' => 'structure',
      'required' => [
        'checkIds',
      ],
      'members' => [
        'checkIds' => [
          'shape' => 'StringList',
        ],
      ],
    ],
    'DescribeTrustedAdvisorCheckRefreshStatusesResponse' => [
      'type' => 'structure',
      'required' => [
        'statuses',
      ],
      'members' => [
        'statuses' => [
          'shape' => 'TrustedAdvisorCheckRefreshStatusList',
        ],
      ],
    ],
    'DescribeTrustedAdvisorCheckResultRequest' => [
      'type' => 'structure',
      'required' => [
        'checkId',
      ],
      'members' => [
        'checkId' => [
          'shape' => 'String',
        ],
        'language' => [
          'shape' => 'String',
        ],
      ],
    ],
    'DescribeTrustedAdvisorCheckResultResponse' => [
      'type' => 'structure',
      'members' => [
        'result' => [
          'shape' => 'TrustedAdvisorCheckResult',
        ],
      ],
    ],
    'DescribeTrustedAdvisorCheckSummariesRequest' => [
      'type' => 'structure',
      'required' => [
        'checkIds',
      ],
      'members' => [
        'checkIds' => [
          'shape' => 'StringList',
        ],
      ],
    ],
    'DescribeTrustedAdvisorCheckSummariesResponse' => [
      'type' => 'structure',
      'required' => [
        'summaries',
      ],
      'members' => [
        'summaries' => [
          'shape' => 'TrustedAdvisorCheckSummaryList',
        ],
      ],
    ],
    'DescribeTrustedAdvisorChecksRequest' => [
      'type' => 'structure',
      'required' => [
        'language',
      ],
      'members' => [
        'language' => [
          'shape' => 'String',
        ],
      ],
    ],
    'DescribeTrustedAdvisorChecksResponse' => [
      'type' => 'structure',
      'required' => [
        'checks',
      ],
      'members' => [
        'checks' => [
          'shape' => 'TrustedAdvisorCheckList',
        ],
      ],
    ],
    'DisplayId' => [
      'type' => 'string',
    ],
    'Double' => [
      'type' => 'double',
    ],
    'ErrorMessage' => [
      'type' => 'string',
    ],
    'ExpiryTime' => [
      'type' => 'string',
    ],
    'FileName' => [
      'type' => 'string',
    ],
    'IncludeCommunications' => [
      'type' => 'boolean',
    ],
    'IncludeResolvedCases' => [
      'type' => 'boolean',
    ],
    'InternalServerError' => [
      'type' => 'structure',
      'members' => [
        'message' => [
          'shape' => 'ErrorMessage',
        ],
      ],
      'exception' => true,
      'fault' => true,
    ],
    'IssueType' => [
      'type' => 'string',
    ],
    'Language' => [
      'type' => 'string',
    ],
    'Long' => [
      'type' => 'long',
    ],
    'MaxResults' => [
      'type' => 'integer',
      'min' => 10,
      'max' => 100,
    ],
    'NextToken' => [
      'type' => 'string',
    ],
    'RecentCaseCommunications' => [
      'type' => 'structure',
      'members' => [
        'communications' => [
          'shape' => 'CommunicationList',
        ],
        'nextToken' => [
          'shape' => 'NextToken',
        ],
      ],
    ],
    'RefreshTrustedAdvisorCheckRequest' => [
      'type' => 'structure',
      'required' => [
        'checkId',
      ],
      'members' => [
        'checkId' => [
          'shape' => 'String',
        ],
      ],
    ],
    'RefreshTrustedAdvisorCheckResponse' => [
      'type' => 'structure',
      'required' => [
        'status',
      ],
      'members' => [
        'status' => [
          'shape' => 'TrustedAdvisorCheckRefreshStatus',
        ],
      ],
    ],
    'ResolveCaseRequest' => [
      'type' => 'structure',
      'members' => [
        'caseId' => [
          'shape' => 'CaseId',
        ],
      ],
    ],
    'ResolveCaseResponse' => [
      'type' => 'structure',
      'members' => [
        'initialCaseStatus' => [
          'shape' => 'CaseStatus',
        ],
        'finalCaseStatus' => [
          'shape' => 'CaseStatus',
        ],
      ],
    ],
    'Result' => [
      'type' => 'boolean',
    ],
    'Service' => [
      'type' => 'structure',
      'members' => [
        'code' => [
          'shape' => 'ServiceCode',
        ],
        'name' => [
          'shape' => 'ServiceName',
        ],
        'categories' => [
          'shape' => 'CategoryList',
        ],
      ],
    ],
    'ServiceCode' => [
      'type' => 'string',
      'pattern' => '[0-9a-z\\-_]+',
    ],
    'ServiceCodeList' => [
      'type' => 'list',
      'member' => [
        'shape' => 'ServiceCode',
      ],
      'min' => 0,
      'max' => 100,
    ],
    'ServiceList' => [
      'type' => 'list',
      'member' => [
        'shape' => 'Service',
      ],
    ],
    'ServiceName' => [
      'type' => 'string',
    ],
    'SeverityCode' => [
      'type' => 'string',
    ],
    'SeverityLevel' => [
      'type' => 'structure',
      'members' => [
        'code' => [
          'shape' => 'SeverityLevelCode',
        ],
        'name' => [
          'shape' => 'SeverityLevelName',
        ],
      ],
    ],
    'SeverityLevelCode' => [
      'type' => 'string',
    ],
    'SeverityLevelName' => [
      'type' => 'string',
    ],
    'SeverityLevelsList' => [
      'type' => 'list',
      'member' => [
        'shape' => 'SeverityLevel',
      ],
    ],
    'Status' => [
      'type' => 'string',
    ],
    'String' => [
      'type' => 'string',
    ],
    'StringList' => [
      'type' => 'list',
      'member' => [
        'shape' => 'String',
      ],
    ],
    'Subject' => [
      'type' => 'string',
    ],
    'SubmittedBy' => [
      'type' => 'string',
    ],
    'TimeCreated' => [
      'type' => 'string',
    ],
    'TrustedAdvisorCategorySpecificSummary' => [
      'type' => 'structure',
      'members' => [
        'costOptimizing' => [
          'shape' => 'TrustedAdvisorCostOptimizingSummary',
        ],
      ],
    ],
    'TrustedAdvisorCheckDescription' => [
      'type' => 'structure',
      'required' => [
        'id',
        'name',
        'description',
        'category',
        'metadata',
      ],
      'members' => [
        'id' => [
          'shape' => 'String',
        ],
        'name' => [
          'shape' => 'String',
        ],
        'description' => [
          'shape' => 'String',
        ],
        'category' => [
          'shape' => 'String',
        ],
        'metadata' => [
          'shape' => 'StringList',
        ],
      ],
    ],
    'TrustedAdvisorCheckList' => [
      'type' => 'list',
      'member' => [
        'shape' => 'TrustedAdvisorCheckDescription',
      ],
    ],
    'TrustedAdvisorCheckRefreshStatus' => [
      'type' => 'structure',
      'required' => [
        'checkId',
        'status',
        'millisUntilNextRefreshable',
      ],
      'members' => [
        'checkId' => [
          'shape' => 'String',
        ],
        'status' => [
          'shape' => 'String',
        ],
        'millisUntilNextRefreshable' => [
          'shape' => 'Long',
        ],
      ],
    ],
    'TrustedAdvisorCheckRefreshStatusList' => [
      'type' => 'list',
      'member' => [
        'shape' => 'TrustedAdvisorCheckRefreshStatus',
      ],
    ],
    'TrustedAdvisorCheckResult' => [
      'type' => 'structure',
      'required' => [
        'checkId',
        'timestamp',
        'status',
        'resourcesSummary',
        'categorySpecificSummary',
        'flaggedResources',
      ],
      'members' => [
        'checkId' => [
          'shape' => 'String',
        ],
        'timestamp' => [
          'shape' => 'String',
        ],
        'status' => [
          'shape' => 'String',
        ],
        'resourcesSummary' => [
          'shape' => 'TrustedAdvisorResourcesSummary',
        ],
        'categorySpecificSummary' => [
          'shape' => 'TrustedAdvisorCategorySpecificSummary',
        ],
        'flaggedResources' => [
          'shape' => 'TrustedAdvisorResourceDetailList',
        ],
      ],
    ],
    'TrustedAdvisorCheckSummary' => [
      'type' => 'structure',
      'required' => [
        'checkId',
        'timestamp',
        'status',
        'resourcesSummary',
        'categorySpecificSummary',
      ],
      'members' => [
        'checkId' => [
          'shape' => 'String',
        ],
        'timestamp' => [
          'shape' => 'String',
        ],
        'status' => [
          'shape' => 'String',
        ],
        'hasFlaggedResources' => [
          'shape' => 'Boolean',
        ],
        'resourcesSummary' => [
          'shape' => 'TrustedAdvisorResourcesSummary',
        ],
        'categorySpecificSummary' => [
          'shape' => 'TrustedAdvisorCategorySpecificSummary',
        ],
      ],
    ],
    'TrustedAdvisorCheckSummaryList' => [
      'type' => 'list',
      'member' => [
        'shape' => 'TrustedAdvisorCheckSummary',
      ],
    ],
    'TrustedAdvisorCostOptimizingSummary' => [
      'type' => 'structure',
      'required' => [
        'estimatedMonthlySavings',
        'estimatedPercentMonthlySavings',
      ],
      'members' => [
        'estimatedMonthlySavings' => [
          'shape' => 'Double',
        ],
        'estimatedPercentMonthlySavings' => [
          'shape' => 'Double',
        ],
      ],
    ],
    'TrustedAdvisorResourceDetail' => [
      'type' => 'structure',
      'required' => [
        'status',
        'region',
        'resourceId',
        'metadata',
      ],
      'members' => [
        'status' => [
          'shape' => 'String',
        ],
        'region' => [
          'shape' => 'String',
        ],
        'resourceId' => [
          'shape' => 'String',
        ],
        'isSuppressed' => [
          'shape' => 'Boolean',
        ],
        'metadata' => [
          'shape' => 'StringList',
        ],
      ],
    ],
    'TrustedAdvisorResourceDetailList' => [
      'type' => 'list',
      'member' => [
        'shape' => 'TrustedAdvisorResourceDetail',
      ],
    ],
    'TrustedAdvisorResourcesSummary' => [
      'type' => 'structure',
      'required' => [
        'resourcesProcessed',
        'resourcesFlagged',
        'resourcesIgnored',
        'resourcesSuppressed',
      ],
      'members' => [
        'resourcesProcessed' => [
          'shape' => 'Long',
        ],
        'resourcesFlagged' => [
          'shape' => 'Long',
        ],
        'resourcesIgnored' => [
          'shape' => 'Long',
        ],
        'resourcesSuppressed' => [
          'shape' => 'Long',
        ],
      ],
    ],
  ],
];
