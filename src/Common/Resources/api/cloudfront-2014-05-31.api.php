<?php return [
  'metadata' => [
    'apiVersion' => '2014-05-31',
    'endpointPrefix' => 'cloudfront',
    'globalEndpoint' => 'cloudfront.amazonaws.com',
    'serviceAbbreviation' => 'CloudFront',
    'serviceFullName' => 'Amazon CloudFront',
    'signatureVersion' => 'v4',
    'protocol' => 'rest-xml',
  ],
  'operations' => [
    'CreateCloudFrontOriginAccessIdentity' => [
      'name' => 'CreateCloudFrontOriginAccessIdentity2014_05_31',
      'http' => [
        'method' => 'POST',
        'requestUri' => '/2014-05-31/origin-access-identity/cloudfront',
        'responseCode' => 201,
      ],
      'input' => [
        'shape' => 'CreateCloudFrontOriginAccessIdentityRequest',
      ],
      'output' => [
        'shape' => 'CreateCloudFrontOriginAccessIdentityResult',
      ],
      'errors' => [
        [
          'shape' => 'CloudFrontOriginAccessIdentityAlreadyExists',
          'error' => [
            'httpStatusCode' => 409,
          ],
          'exception' => true,
        ],
        [
          'shape' => 'MissingBody',
          'error' => [
            'httpStatusCode' => 400,
          ],
          'exception' => true,
        ],
        [
          'shape' => 'TooManyCloudFrontOriginAccessIdentities',
          'error' => [
            'httpStatusCode' => 400,
          ],
          'exception' => true,
        ],
        [
          'shape' => 'InvalidArgument',
          'error' => [
            'httpStatusCode' => 400,
          ],
          'exception' => true,
        ],
        [
          'shape' => 'InconsistentQuantities',
          'error' => [
            'httpStatusCode' => 400,
          ],
          'exception' => true,
        ],
      ],
    ],
    'CreateDistribution' => [
      'name' => 'CreateDistribution2014_05_31',
      'http' => [
        'method' => 'POST',
        'requestUri' => '/2014-05-31/distribution',
        'responseCode' => 201,
      ],
      'input' => [
        'shape' => 'CreateDistributionRequest',
      ],
      'output' => [
        'shape' => 'CreateDistributionResult',
      ],
      'errors' => [
        [
          'shape' => 'CNAMEAlreadyExists',
          'error' => [
            'httpStatusCode' => 409,
          ],
          'exception' => true,
        ],
        [
          'shape' => 'DistributionAlreadyExists',
          'error' => [
            'httpStatusCode' => 409,
          ],
          'exception' => true,
        ],
        [
          'shape' => 'InvalidOrigin',
          'error' => [
            'httpStatusCode' => 400,
          ],
          'exception' => true,
        ],
        [
          'shape' => 'InvalidOriginAccessIdentity',
          'error' => [
            'httpStatusCode' => 400,
          ],
          'exception' => true,
        ],
        [
          'shape' => 'AccessDenied',
          'error' => [
            'httpStatusCode' => 403,
          ],
          'exception' => true,
        ],
        [
          'shape' => 'TooManyTrustedSigners',
          'error' => [
            'httpStatusCode' => 400,
          ],
          'exception' => true,
        ],
        [
          'shape' => 'TrustedSignerDoesNotExist',
          'error' => [
            'httpStatusCode' => 400,
          ],
          'exception' => true,
        ],
        [
          'shape' => 'InvalidViewerCertificate',
          'error' => [
            'httpStatusCode' => 400,
          ],
          'exception' => true,
        ],
        [
          'shape' => 'MissingBody',
          'error' => [
            'httpStatusCode' => 400,
          ],
          'exception' => true,
        ],
        [
          'shape' => 'TooManyDistributionCNAMEs',
          'error' => [
            'httpStatusCode' => 400,
          ],
          'exception' => true,
        ],
        [
          'shape' => 'TooManyDistributions',
          'error' => [
            'httpStatusCode' => 400,
          ],
          'exception' => true,
        ],
        [
          'shape' => 'InvalidDefaultRootObject',
          'error' => [
            'httpStatusCode' => 400,
          ],
          'exception' => true,
        ],
        [
          'shape' => 'InvalidRelativePath',
          'error' => [
            'httpStatusCode' => 400,
          ],
          'exception' => true,
        ],
        [
          'shape' => 'InvalidErrorCode',
          'error' => [
            'httpStatusCode' => 400,
          ],
          'exception' => true,
        ],
        [
          'shape' => 'InvalidResponseCode',
          'error' => [
            'httpStatusCode' => 400,
          ],
          'exception' => true,
        ],
        [
          'shape' => 'InvalidArgument',
          'error' => [
            'httpStatusCode' => 400,
          ],
          'exception' => true,
        ],
        [
          'shape' => 'InvalidRequiredProtocol',
          'error' => [
            'httpStatusCode' => 400,
          ],
          'exception' => true,
        ],
        [
          'shape' => 'NoSuchOrigin',
          'error' => [
            'httpStatusCode' => 404,
          ],
          'exception' => true,
        ],
        [
          'shape' => 'TooManyOrigins',
          'error' => [
            'httpStatusCode' => 400,
          ],
          'exception' => true,
        ],
        [
          'shape' => 'TooManyCacheBehaviors',
          'error' => [
            'httpStatusCode' => 400,
          ],
          'exception' => true,
        ],
        [
          'shape' => 'TooManyCookieNamesInWhiteList',
          'error' => [
            'httpStatusCode' => 400,
          ],
          'exception' => true,
        ],
        [
          'shape' => 'InvalidForwardCookies',
          'error' => [
            'httpStatusCode' => 400,
          ],
          'exception' => true,
        ],
        [
          'shape' => 'TooManyHeadersInForwardedValues',
          'error' => [
            'httpStatusCode' => 400,
          ],
          'exception' => true,
        ],
        [
          'shape' => 'InvalidHeadersForS3Origin',
          'error' => [
            'httpStatusCode' => 400,
          ],
          'exception' => true,
        ],
        [
          'shape' => 'InconsistentQuantities',
          'error' => [
            'httpStatusCode' => 400,
          ],
          'exception' => true,
        ],
        [
          'shape' => 'TooManyCertificates',
          'error' => [
            'httpStatusCode' => 400,
          ],
          'exception' => true,
        ],
        [
          'shape' => 'InvalidLocationCode',
          'error' => [
            'httpStatusCode' => 400,
          ],
          'exception' => true,
        ],
        [
          'shape' => 'InvalidGeoRestrictionParameter',
          'error' => [
            'httpStatusCode' => 400,
          ],
          'exception' => true,
        ],
      ],
    ],
    'CreateInvalidation' => [
      'name' => 'CreateInvalidation2014_05_31',
      'http' => [
        'method' => 'POST',
        'requestUri' => '/2014-05-31/distribution/{DistributionId}/invalidation',
        'responseCode' => 201,
      ],
      'input' => [
        'shape' => 'CreateInvalidationRequest',
      ],
      'output' => [
        'shape' => 'CreateInvalidationResult',
      ],
      'errors' => [
        [
          'shape' => 'AccessDenied',
          'error' => [
            'httpStatusCode' => 403,
          ],
          'exception' => true,
        ],
        [
          'shape' => 'MissingBody',
          'error' => [
            'httpStatusCode' => 400,
          ],
          'exception' => true,
        ],
        [
          'shape' => 'InvalidArgument',
          'error' => [
            'httpStatusCode' => 400,
          ],
          'exception' => true,
        ],
        [
          'shape' => 'NoSuchDistribution',
          'error' => [
            'httpStatusCode' => 404,
          ],
          'exception' => true,
        ],
        [
          'shape' => 'BatchTooLarge',
          'error' => [
            'httpStatusCode' => 413,
          ],
          'exception' => true,
        ],
        [
          'shape' => 'TooManyInvalidationsInProgress',
          'error' => [
            'httpStatusCode' => 400,
          ],
          'exception' => true,
        ],
        [
          'shape' => 'InconsistentQuantities',
          'error' => [
            'httpStatusCode' => 400,
          ],
          'exception' => true,
        ],
      ],
    ],
    'CreateStreamingDistribution' => [
      'name' => 'CreateStreamingDistribution2014_05_31',
      'http' => [
        'method' => 'POST',
        'requestUri' => '/2014-05-31/streaming-distribution',
        'responseCode' => 201,
      ],
      'input' => [
        'shape' => 'CreateStreamingDistributionRequest',
      ],
      'output' => [
        'shape' => 'CreateStreamingDistributionResult',
      ],
      'errors' => [
        [
          'shape' => 'CNAMEAlreadyExists',
          'error' => [
            'httpStatusCode' => 409,
          ],
          'exception' => true,
        ],
        [
          'shape' => 'StreamingDistributionAlreadyExists',
          'error' => [
            'httpStatusCode' => 409,
          ],
          'exception' => true,
        ],
        [
          'shape' => 'InvalidOrigin',
          'error' => [
            'httpStatusCode' => 400,
          ],
          'exception' => true,
        ],
        [
          'shape' => 'InvalidOriginAccessIdentity',
          'error' => [
            'httpStatusCode' => 400,
          ],
          'exception' => true,
        ],
        [
          'shape' => 'AccessDenied',
          'error' => [
            'httpStatusCode' => 403,
          ],
          'exception' => true,
        ],
        [
          'shape' => 'TooManyTrustedSigners',
          'error' => [
            'httpStatusCode' => 400,
          ],
          'exception' => true,
        ],
        [
          'shape' => 'TrustedSignerDoesNotExist',
          'error' => [
            'httpStatusCode' => 400,
          ],
          'exception' => true,
        ],
        [
          'shape' => 'MissingBody',
          'error' => [
            'httpStatusCode' => 400,
          ],
          'exception' => true,
        ],
        [
          'shape' => 'TooManyStreamingDistributionCNAMEs',
          'error' => [
            'httpStatusCode' => 400,
          ],
          'exception' => true,
        ],
        [
          'shape' => 'TooManyStreamingDistributions',
          'error' => [
            'httpStatusCode' => 400,
          ],
          'exception' => true,
        ],
        [
          'shape' => 'InvalidArgument',
          'error' => [
            'httpStatusCode' => 400,
          ],
          'exception' => true,
        ],
        [
          'shape' => 'InconsistentQuantities',
          'error' => [
            'httpStatusCode' => 400,
          ],
          'exception' => true,
        ],
      ],
    ],
    'DeleteCloudFrontOriginAccessIdentity' => [
      'name' => 'DeleteCloudFrontOriginAccessIdentity2014_05_31',
      'http' => [
        'method' => 'DELETE',
        'requestUri' => '/2014-05-31/origin-access-identity/cloudfront/{Id}',
        'responseCode' => 204,
      ],
      'input' => [
        'shape' => 'DeleteCloudFrontOriginAccessIdentityRequest',
      ],
      'errors' => [
        [
          'shape' => 'AccessDenied',
          'error' => [
            'httpStatusCode' => 403,
          ],
          'exception' => true,
        ],
        [
          'shape' => 'InvalidIfMatchVersion',
          'error' => [
            'httpStatusCode' => 400,
          ],
          'exception' => true,
        ],
        [
          'shape' => 'NoSuchCloudFrontOriginAccessIdentity',
          'error' => [
            'httpStatusCode' => 404,
          ],
          'exception' => true,
        ],
        [
          'shape' => 'PreconditionFailed',
          'error' => [
            'httpStatusCode' => 412,
          ],
          'exception' => true,
        ],
        [
          'shape' => 'CloudFrontOriginAccessIdentityInUse',
          'error' => [
            'httpStatusCode' => 409,
          ],
          'exception' => true,
        ],
      ],
    ],
    'DeleteDistribution' => [
      'name' => 'DeleteDistribution2014_05_31',
      'http' => [
        'method' => 'DELETE',
        'requestUri' => '/2014-05-31/distribution/{Id}',
        'responseCode' => 204,
      ],
      'input' => [
        'shape' => 'DeleteDistributionRequest',
      ],
      'errors' => [
        [
          'shape' => 'AccessDenied',
          'error' => [
            'httpStatusCode' => 403,
          ],
          'exception' => true,
        ],
        [
          'shape' => 'DistributionNotDisabled',
          'error' => [
            'httpStatusCode' => 409,
          ],
          'exception' => true,
        ],
        [
          'shape' => 'InvalidIfMatchVersion',
          'error' => [
            'httpStatusCode' => 400,
          ],
          'exception' => true,
        ],
        [
          'shape' => 'NoSuchDistribution',
          'error' => [
            'httpStatusCode' => 404,
          ],
          'exception' => true,
        ],
        [
          'shape' => 'PreconditionFailed',
          'error' => [
            'httpStatusCode' => 412,
          ],
          'exception' => true,
        ],
      ],
    ],
    'DeleteStreamingDistribution' => [
      'name' => 'DeleteStreamingDistribution2014_05_31',
      'http' => [
        'method' => 'DELETE',
        'requestUri' => '/2014-05-31/streaming-distribution/{Id}',
        'responseCode' => 204,
      ],
      'input' => [
        'shape' => 'DeleteStreamingDistributionRequest',
      ],
      'errors' => [
        [
          'shape' => 'AccessDenied',
          'error' => [
            'httpStatusCode' => 403,
          ],
          'exception' => true,
        ],
        [
          'shape' => 'StreamingDistributionNotDisabled',
          'error' => [
            'httpStatusCode' => 409,
          ],
          'exception' => true,
        ],
        [
          'shape' => 'InvalidIfMatchVersion',
          'error' => [
            'httpStatusCode' => 400,
          ],
          'exception' => true,
        ],
        [
          'shape' => 'NoSuchStreamingDistribution',
          'error' => [
            'httpStatusCode' => 404,
          ],
          'exception' => true,
        ],
        [
          'shape' => 'PreconditionFailed',
          'error' => [
            'httpStatusCode' => 412,
          ],
          'exception' => true,
        ],
      ],
    ],
    'GetCloudFrontOriginAccessIdentity' => [
      'name' => 'GetCloudFrontOriginAccessIdentity2014_05_31',
      'http' => [
        'method' => 'GET',
        'requestUri' => '/2014-05-31/origin-access-identity/cloudfront/{Id}',
      ],
      'input' => [
        'shape' => 'GetCloudFrontOriginAccessIdentityRequest',
      ],
      'output' => [
        'shape' => 'GetCloudFrontOriginAccessIdentityResult',
      ],
      'errors' => [
        [
          'shape' => 'NoSuchCloudFrontOriginAccessIdentity',
          'error' => [
            'httpStatusCode' => 404,
          ],
          'exception' => true,
        ],
        [
          'shape' => 'AccessDenied',
          'error' => [
            'httpStatusCode' => 403,
          ],
          'exception' => true,
        ],
      ],
    ],
    'GetCloudFrontOriginAccessIdentityConfig' => [
      'name' => 'GetCloudFrontOriginAccessIdentityConfig2014_05_31',
      'http' => [
        'method' => 'GET',
        'requestUri' => '/2014-05-31/origin-access-identity/cloudfront/{Id}/config',
      ],
      'input' => [
        'shape' => 'GetCloudFrontOriginAccessIdentityConfigRequest',
      ],
      'output' => [
        'shape' => 'GetCloudFrontOriginAccessIdentityConfigResult',
      ],
      'errors' => [
        [
          'shape' => 'NoSuchCloudFrontOriginAccessIdentity',
          'error' => [
            'httpStatusCode' => 404,
          ],
          'exception' => true,
        ],
        [
          'shape' => 'AccessDenied',
          'error' => [
            'httpStatusCode' => 403,
          ],
          'exception' => true,
        ],
      ],
    ],
    'GetDistribution' => [
      'name' => 'GetDistribution2014_05_31',
      'http' => [
        'method' => 'GET',
        'requestUri' => '/2014-05-31/distribution/{Id}',
      ],
      'input' => [
        'shape' => 'GetDistributionRequest',
      ],
      'output' => [
        'shape' => 'GetDistributionResult',
      ],
      'errors' => [
        [
          'shape' => 'NoSuchDistribution',
          'error' => [
            'httpStatusCode' => 404,
          ],
          'exception' => true,
        ],
        [
          'shape' => 'AccessDenied',
          'error' => [
            'httpStatusCode' => 403,
          ],
          'exception' => true,
        ],
      ],
    ],
    'GetDistributionConfig' => [
      'name' => 'GetDistributionConfig2014_05_31',
      'http' => [
        'method' => 'GET',
        'requestUri' => '/2014-05-31/distribution/{Id}/config',
      ],
      'input' => [
        'shape' => 'GetDistributionConfigRequest',
      ],
      'output' => [
        'shape' => 'GetDistributionConfigResult',
      ],
      'errors' => [
        [
          'shape' => 'NoSuchDistribution',
          'error' => [
            'httpStatusCode' => 404,
          ],
          'exception' => true,
        ],
        [
          'shape' => 'AccessDenied',
          'error' => [
            'httpStatusCode' => 403,
          ],
          'exception' => true,
        ],
      ],
    ],
    'GetInvalidation' => [
      'name' => 'GetInvalidation2014_05_31',
      'http' => [
        'method' => 'GET',
        'requestUri' => '/2014-05-31/distribution/{DistributionId}/invalidation/{Id}',
      ],
      'input' => [
        'shape' => 'GetInvalidationRequest',
      ],
      'output' => [
        'shape' => 'GetInvalidationResult',
      ],
      'errors' => [
        [
          'shape' => 'NoSuchInvalidation',
          'error' => [
            'httpStatusCode' => 404,
          ],
          'exception' => true,
        ],
        [
          'shape' => 'NoSuchDistribution',
          'error' => [
            'httpStatusCode' => 404,
          ],
          'exception' => true,
        ],
        [
          'shape' => 'AccessDenied',
          'error' => [
            'httpStatusCode' => 403,
          ],
          'exception' => true,
        ],
      ],
    ],
    'GetStreamingDistribution' => [
      'name' => 'GetStreamingDistribution2014_05_31',
      'http' => [
        'method' => 'GET',
        'requestUri' => '/2014-05-31/streaming-distribution/{Id}',
      ],
      'input' => [
        'shape' => 'GetStreamingDistributionRequest',
      ],
      'output' => [
        'shape' => 'GetStreamingDistributionResult',
      ],
      'errors' => [
        [
          'shape' => 'NoSuchStreamingDistribution',
          'error' => [
            'httpStatusCode' => 404,
          ],
          'exception' => true,
        ],
        [
          'shape' => 'AccessDenied',
          'error' => [
            'httpStatusCode' => 403,
          ],
          'exception' => true,
        ],
      ],
    ],
    'GetStreamingDistributionConfig' => [
      'name' => 'GetStreamingDistributionConfig2014_05_31',
      'http' => [
        'method' => 'GET',
        'requestUri' => '/2014-05-31/streaming-distribution/{Id}/config',
      ],
      'input' => [
        'shape' => 'GetStreamingDistributionConfigRequest',
      ],
      'output' => [
        'shape' => 'GetStreamingDistributionConfigResult',
      ],
      'errors' => [
        [
          'shape' => 'NoSuchStreamingDistribution',
          'error' => [
            'httpStatusCode' => 404,
          ],
          'exception' => true,
        ],
        [
          'shape' => 'AccessDenied',
          'error' => [
            'httpStatusCode' => 403,
          ],
          'exception' => true,
        ],
      ],
    ],
    'ListCloudFrontOriginAccessIdentities' => [
      'name' => 'ListCloudFrontOriginAccessIdentities2014_05_31',
      'http' => [
        'method' => 'GET',
        'requestUri' => '/2014-05-31/origin-access-identity/cloudfront',
      ],
      'input' => [
        'shape' => 'ListCloudFrontOriginAccessIdentitiesRequest',
      ],
      'output' => [
        'shape' => 'ListCloudFrontOriginAccessIdentitiesResult',
      ],
      'errors' => [
        [
          'shape' => 'InvalidArgument',
          'error' => [
            'httpStatusCode' => 400,
          ],
          'exception' => true,
        ],
      ],
    ],
    'ListDistributions' => [
      'name' => 'ListDistributions2014_05_31',
      'http' => [
        'method' => 'GET',
        'requestUri' => '/2014-05-31/distribution',
      ],
      'input' => [
        'shape' => 'ListDistributionsRequest',
      ],
      'output' => [
        'shape' => 'ListDistributionsResult',
      ],
      'errors' => [
        [
          'shape' => 'InvalidArgument',
          'error' => [
            'httpStatusCode' => 400,
          ],
          'exception' => true,
        ],
      ],
    ],
    'ListInvalidations' => [
      'name' => 'ListInvalidations2014_05_31',
      'http' => [
        'method' => 'GET',
        'requestUri' => '/2014-05-31/distribution/{DistributionId}/invalidation',
      ],
      'input' => [
        'shape' => 'ListInvalidationsRequest',
      ],
      'output' => [
        'shape' => 'ListInvalidationsResult',
      ],
      'errors' => [
        [
          'shape' => 'InvalidArgument',
          'error' => [
            'httpStatusCode' => 400,
          ],
          'exception' => true,
        ],
        [
          'shape' => 'NoSuchDistribution',
          'error' => [
            'httpStatusCode' => 404,
          ],
          'exception' => true,
        ],
        [
          'shape' => 'AccessDenied',
          'error' => [
            'httpStatusCode' => 403,
          ],
          'exception' => true,
        ],
      ],
    ],
    'ListStreamingDistributions' => [
      'name' => 'ListStreamingDistributions2014_05_31',
      'http' => [
        'method' => 'GET',
        'requestUri' => '/2014-05-31/streaming-distribution',
      ],
      'input' => [
        'shape' => 'ListStreamingDistributionsRequest',
      ],
      'output' => [
        'shape' => 'ListStreamingDistributionsResult',
      ],
      'errors' => [
        [
          'shape' => 'InvalidArgument',
          'error' => [
            'httpStatusCode' => 400,
          ],
          'exception' => true,
        ],
      ],
    ],
    'UpdateCloudFrontOriginAccessIdentity' => [
      'name' => 'UpdateCloudFrontOriginAccessIdentity2014_05_31',
      'http' => [
        'method' => 'PUT',
        'requestUri' => '/2014-05-31/origin-access-identity/cloudfront/{Id}/config',
      ],
      'input' => [
        'shape' => 'UpdateCloudFrontOriginAccessIdentityRequest',
      ],
      'output' => [
        'shape' => 'UpdateCloudFrontOriginAccessIdentityResult',
      ],
      'errors' => [
        [
          'shape' => 'AccessDenied',
          'error' => [
            'httpStatusCode' => 403,
          ],
          'exception' => true,
        ],
        [
          'shape' => 'IllegalUpdate',
          'error' => [
            'httpStatusCode' => 400,
          ],
          'exception' => true,
        ],
        [
          'shape' => 'InvalidIfMatchVersion',
          'error' => [
            'httpStatusCode' => 400,
          ],
          'exception' => true,
        ],
        [
          'shape' => 'MissingBody',
          'error' => [
            'httpStatusCode' => 400,
          ],
          'exception' => true,
        ],
        [
          'shape' => 'NoSuchCloudFrontOriginAccessIdentity',
          'error' => [
            'httpStatusCode' => 404,
          ],
          'exception' => true,
        ],
        [
          'shape' => 'PreconditionFailed',
          'error' => [
            'httpStatusCode' => 412,
          ],
          'exception' => true,
        ],
        [
          'shape' => 'InvalidArgument',
          'error' => [
            'httpStatusCode' => 400,
          ],
          'exception' => true,
        ],
        [
          'shape' => 'InconsistentQuantities',
          'error' => [
            'httpStatusCode' => 400,
          ],
          'exception' => true,
        ],
      ],
    ],
    'UpdateDistribution' => [
      'name' => 'UpdateDistribution2014_05_31',
      'http' => [
        'method' => 'PUT',
        'requestUri' => '/2014-05-31/distribution/{Id}/config',
      ],
      'input' => [
        'shape' => 'UpdateDistributionRequest',
      ],
      'output' => [
        'shape' => 'UpdateDistributionResult',
      ],
      'errors' => [
        [
          'shape' => 'AccessDenied',
          'error' => [
            'httpStatusCode' => 403,
          ],
          'exception' => true,
        ],
        [
          'shape' => 'CNAMEAlreadyExists',
          'error' => [
            'httpStatusCode' => 409,
          ],
          'exception' => true,
        ],
        [
          'shape' => 'IllegalUpdate',
          'error' => [
            'httpStatusCode' => 400,
          ],
          'exception' => true,
        ],
        [
          'shape' => 'InvalidIfMatchVersion',
          'error' => [
            'httpStatusCode' => 400,
          ],
          'exception' => true,
        ],
        [
          'shape' => 'MissingBody',
          'error' => [
            'httpStatusCode' => 400,
          ],
          'exception' => true,
        ],
        [
          'shape' => 'NoSuchDistribution',
          'error' => [
            'httpStatusCode' => 404,
          ],
          'exception' => true,
        ],
        [
          'shape' => 'PreconditionFailed',
          'error' => [
            'httpStatusCode' => 412,
          ],
          'exception' => true,
        ],
        [
          'shape' => 'TooManyDistributionCNAMEs',
          'error' => [
            'httpStatusCode' => 400,
          ],
          'exception' => true,
        ],
        [
          'shape' => 'InvalidDefaultRootObject',
          'error' => [
            'httpStatusCode' => 400,
          ],
          'exception' => true,
        ],
        [
          'shape' => 'InvalidRelativePath',
          'error' => [
            'httpStatusCode' => 400,
          ],
          'exception' => true,
        ],
        [
          'shape' => 'InvalidErrorCode',
          'error' => [
            'httpStatusCode' => 400,
          ],
          'exception' => true,
        ],
        [
          'shape' => 'InvalidResponseCode',
          'error' => [
            'httpStatusCode' => 400,
          ],
          'exception' => true,
        ],
        [
          'shape' => 'InvalidArgument',
          'error' => [
            'httpStatusCode' => 400,
          ],
          'exception' => true,
        ],
        [
          'shape' => 'InvalidOriginAccessIdentity',
          'error' => [
            'httpStatusCode' => 400,
          ],
          'exception' => true,
        ],
        [
          'shape' => 'TooManyTrustedSigners',
          'error' => [
            'httpStatusCode' => 400,
          ],
          'exception' => true,
        ],
        [
          'shape' => 'TrustedSignerDoesNotExist',
          'error' => [
            'httpStatusCode' => 400,
          ],
          'exception' => true,
        ],
        [
          'shape' => 'InvalidViewerCertificate',
          'error' => [
            'httpStatusCode' => 400,
          ],
          'exception' => true,
        ],
        [
          'shape' => 'InvalidRequiredProtocol',
          'error' => [
            'httpStatusCode' => 400,
          ],
          'exception' => true,
        ],
        [
          'shape' => 'NoSuchOrigin',
          'error' => [
            'httpStatusCode' => 404,
          ],
          'exception' => true,
        ],
        [
          'shape' => 'TooManyOrigins',
          'error' => [
            'httpStatusCode' => 400,
          ],
          'exception' => true,
        ],
        [
          'shape' => 'TooManyCacheBehaviors',
          'error' => [
            'httpStatusCode' => 400,
          ],
          'exception' => true,
        ],
        [
          'shape' => 'TooManyCookieNamesInWhiteList',
          'error' => [
            'httpStatusCode' => 400,
          ],
          'exception' => true,
        ],
        [
          'shape' => 'InvalidForwardCookies',
          'error' => [
            'httpStatusCode' => 400,
          ],
          'exception' => true,
        ],
        [
          'shape' => 'TooManyHeadersInForwardedValues',
          'error' => [
            'httpStatusCode' => 400,
          ],
          'exception' => true,
        ],
        [
          'shape' => 'InvalidHeadersForS3Origin',
          'error' => [
            'httpStatusCode' => 400,
          ],
          'exception' => true,
        ],
        [
          'shape' => 'InconsistentQuantities',
          'error' => [
            'httpStatusCode' => 400,
          ],
          'exception' => true,
        ],
        [
          'shape' => 'TooManyCertificates',
          'error' => [
            'httpStatusCode' => 400,
          ],
          'exception' => true,
        ],
        [
          'shape' => 'InvalidLocationCode',
          'error' => [
            'httpStatusCode' => 400,
          ],
          'exception' => true,
        ],
        [
          'shape' => 'InvalidGeoRestrictionParameter',
          'error' => [
            'httpStatusCode' => 400,
          ],
          'exception' => true,
        ],
      ],
    ],
    'UpdateStreamingDistribution' => [
      'name' => 'UpdateStreamingDistribution2014_05_31',
      'http' => [
        'method' => 'PUT',
        'requestUri' => '/2014-05-31/streaming-distribution/{Id}/config',
      ],
      'input' => [
        'shape' => 'UpdateStreamingDistributionRequest',
      ],
      'output' => [
        'shape' => 'UpdateStreamingDistributionResult',
      ],
      'errors' => [
        [
          'shape' => 'AccessDenied',
          'error' => [
            'httpStatusCode' => 403,
          ],
          'exception' => true,
        ],
        [
          'shape' => 'CNAMEAlreadyExists',
          'error' => [
            'httpStatusCode' => 409,
          ],
          'exception' => true,
        ],
        [
          'shape' => 'IllegalUpdate',
          'error' => [
            'httpStatusCode' => 400,
          ],
          'exception' => true,
        ],
        [
          'shape' => 'InvalidIfMatchVersion',
          'error' => [
            'httpStatusCode' => 400,
          ],
          'exception' => true,
        ],
        [
          'shape' => 'MissingBody',
          'error' => [
            'httpStatusCode' => 400,
          ],
          'exception' => true,
        ],
        [
          'shape' => 'NoSuchStreamingDistribution',
          'error' => [
            'httpStatusCode' => 404,
          ],
          'exception' => true,
        ],
        [
          'shape' => 'PreconditionFailed',
          'error' => [
            'httpStatusCode' => 412,
          ],
          'exception' => true,
        ],
        [
          'shape' => 'TooManyStreamingDistributionCNAMEs',
          'error' => [
            'httpStatusCode' => 400,
          ],
          'exception' => true,
        ],
        [
          'shape' => 'InvalidArgument',
          'error' => [
            'httpStatusCode' => 400,
          ],
          'exception' => true,
        ],
        [
          'shape' => 'InvalidOriginAccessIdentity',
          'error' => [
            'httpStatusCode' => 400,
          ],
          'exception' => true,
        ],
        [
          'shape' => 'TooManyTrustedSigners',
          'error' => [
            'httpStatusCode' => 400,
          ],
          'exception' => true,
        ],
        [
          'shape' => 'TrustedSignerDoesNotExist',
          'error' => [
            'httpStatusCode' => 400,
          ],
          'exception' => true,
        ],
        [
          'shape' => 'InconsistentQuantities',
          'error' => [
            'httpStatusCode' => 400,
          ],
          'exception' => true,
        ],
      ],
    ],
  ],
  'shapes' => [
    'AccessDenied' => [
      'type' => 'structure',
      'members' => [
        'Message' => [
          'shape' => 'string',
        ],
      ],
      'error' => [
        'httpStatusCode' => 403,
      ],
      'exception' => true,
    ],
    'ActiveTrustedSigners' => [
      'type' => 'structure',
      'required' => [
        'Enabled',
        'Quantity',
      ],
      'members' => [
        'Enabled' => [
          'shape' => 'boolean',
        ],
        'Quantity' => [
          'shape' => 'integer',
        ],
        'Items' => [
          'shape' => 'SignerList',
        ],
      ],
    ],
    'AliasList' => [
      'type' => 'list',
      'member' => [
        'shape' => 'string',
        'locationName' => 'CNAME',
      ],
    ],
    'Aliases' => [
      'type' => 'structure',
      'required' => [
        'Quantity',
      ],
      'members' => [
        'Quantity' => [
          'shape' => 'integer',
        ],
        'Items' => [
          'shape' => 'AliasList',
        ],
      ],
    ],
    'AllowedMethods' => [
      'type' => 'structure',
      'required' => [
        'Quantity',
      ],
      'members' => [
        'Quantity' => [
          'shape' => 'integer',
        ],
        'Items' => [
          'shape' => 'AllowedMethodsList',
        ],
      ],
    ],
    'AllowedMethodsList' => [
      'type' => 'list',
      'member' => [
        'shape' => 'Method',
        'locationName' => 'Method',
      ],
    ],
    'AwsAccountNumberList' => [
      'type' => 'list',
      'member' => [
        'shape' => 'string',
        'locationName' => 'AwsAccountNumber',
      ],
    ],
    'BatchTooLarge' => [
      'type' => 'structure',
      'members' => [
        'Message' => [
          'shape' => 'string',
        ],
      ],
      'error' => [
        'httpStatusCode' => 413,
      ],
      'exception' => true,
    ],
    'CNAMEAlreadyExists' => [
      'type' => 'structure',
      'members' => [
        'Message' => [
          'shape' => 'string',
        ],
      ],
      'error' => [
        'httpStatusCode' => 409,
      ],
      'exception' => true,
    ],
    'CacheBehavior' => [
      'type' => 'structure',
      'required' => [
        'PathPattern',
        'TargetOriginId',
        'ForwardedValues',
        'TrustedSigners',
        'ViewerProtocolPolicy',
        'MinTTL',
      ],
      'members' => [
        'PathPattern' => [
          'shape' => 'string',
        ],
        'TargetOriginId' => [
          'shape' => 'string',
        ],
        'ForwardedValues' => [
          'shape' => 'ForwardedValues',
        ],
        'TrustedSigners' => [
          'shape' => 'TrustedSigners',
        ],
        'ViewerProtocolPolicy' => [
          'shape' => 'ViewerProtocolPolicy',
        ],
        'MinTTL' => [
          'shape' => 'long',
        ],
        'AllowedMethods' => [
          'shape' => 'AllowedMethods',
        ],
        'SmoothStreaming' => [
          'shape' => 'boolean',
        ],
      ],
    ],
    'CacheBehaviorList' => [
      'type' => 'list',
      'member' => [
        'shape' => 'CacheBehavior',
        'locationName' => 'CacheBehavior',
      ],
    ],
    'CacheBehaviors' => [
      'type' => 'structure',
      'required' => [
        'Quantity',
      ],
      'members' => [
        'Quantity' => [
          'shape' => 'integer',
        ],
        'Items' => [
          'shape' => 'CacheBehaviorList',
        ],
      ],
    ],
    'CloudFrontOriginAccessIdentity' => [
      'type' => 'structure',
      'required' => [
        'Id',
        'S3CanonicalUserId',
      ],
      'members' => [
        'Id' => [
          'shape' => 'string',
        ],
        'S3CanonicalUserId' => [
          'shape' => 'string',
        ],
        'CloudFrontOriginAccessIdentityConfig' => [
          'shape' => 'CloudFrontOriginAccessIdentityConfig',
        ],
      ],
    ],
    'CloudFrontOriginAccessIdentityAlreadyExists' => [
      'type' => 'structure',
      'members' => [
        'Message' => [
          'shape' => 'string',
        ],
      ],
      'error' => [
        'httpStatusCode' => 409,
      ],
      'exception' => true,
    ],
    'CloudFrontOriginAccessIdentityConfig' => [
      'type' => 'structure',
      'required' => [
        'CallerReference',
        'Comment',
      ],
      'members' => [
        'CallerReference' => [
          'shape' => 'string',
        ],
        'Comment' => [
          'shape' => 'string',
        ],
      ],
    ],
    'CloudFrontOriginAccessIdentityInUse' => [
      'type' => 'structure',
      'members' => [
        'Message' => [
          'shape' => 'string',
        ],
      ],
      'error' => [
        'httpStatusCode' => 409,
      ],
      'exception' => true,
    ],
    'CloudFrontOriginAccessIdentityList' => [
      'type' => 'structure',
      'required' => [
        'Marker',
        'MaxItems',
        'IsTruncated',
        'Quantity',
      ],
      'members' => [
        'Marker' => [
          'shape' => 'string',
        ],
        'NextMarker' => [
          'shape' => 'string',
        ],
        'MaxItems' => [
          'shape' => 'integer',
        ],
        'IsTruncated' => [
          'shape' => 'boolean',
        ],
        'Quantity' => [
          'shape' => 'integer',
        ],
        'Items' => [
          'shape' => 'CloudFrontOriginAccessIdentitySummaryList',
        ],
      ],
    ],
    'CloudFrontOriginAccessIdentitySummary' => [
      'type' => 'structure',
      'required' => [
        'Id',
        'S3CanonicalUserId',
        'Comment',
      ],
      'members' => [
        'Id' => [
          'shape' => 'string',
        ],
        'S3CanonicalUserId' => [
          'shape' => 'string',
        ],
        'Comment' => [
          'shape' => 'string',
        ],
      ],
    ],
    'CloudFrontOriginAccessIdentitySummaryList' => [
      'type' => 'list',
      'member' => [
        'shape' => 'CloudFrontOriginAccessIdentitySummary',
        'locationName' => 'CloudFrontOriginAccessIdentitySummary',
      ],
    ],
    'CookieNameList' => [
      'type' => 'list',
      'member' => [
        'shape' => 'string',
        'locationName' => 'Name',
      ],
    ],
    'CookieNames' => [
      'type' => 'structure',
      'required' => [
        'Quantity',
      ],
      'members' => [
        'Quantity' => [
          'shape' => 'integer',
        ],
        'Items' => [
          'shape' => 'CookieNameList',
        ],
      ],
    ],
    'CookiePreference' => [
      'type' => 'structure',
      'required' => [
        'Forward',
      ],
      'members' => [
        'Forward' => [
          'shape' => 'ItemSelection',
        ],
        'WhitelistedNames' => [
          'shape' => 'CookieNames',
        ],
      ],
    ],
    'CreateCloudFrontOriginAccessIdentityRequest' => [
      'type' => 'structure',
      'required' => [
        'CloudFrontOriginAccessIdentityConfig',
      ],
      'members' => [
        'CloudFrontOriginAccessIdentityConfig' => [
          'shape' => 'CloudFrontOriginAccessIdentityConfig',
          'xmlNamespace' => [
            'uri' => 'http://cloudfront.amazonaws.com/doc/2014-05-31/',
          ],
          'locationName' => 'CloudFrontOriginAccessIdentityConfig',
        ],
      ],
      'payload' => 'CloudFrontOriginAccessIdentityConfig',
    ],
    'CreateCloudFrontOriginAccessIdentityResult' => [
      'type' => 'structure',
      'members' => [
        'CloudFrontOriginAccessIdentity' => [
          'shape' => 'CloudFrontOriginAccessIdentity',
        ],
        'Location' => [
          'shape' => 'string',
          'location' => 'header',
          'locationName' => 'Location',
        ],
        'ETag' => [
          'shape' => 'string',
          'location' => 'header',
          'locationName' => 'ETag',
        ],
      ],
      'payload' => 'CloudFrontOriginAccessIdentity',
    ],
    'CreateDistributionRequest' => [
      'type' => 'structure',
      'required' => [
        'DistributionConfig',
      ],
      'members' => [
        'DistributionConfig' => [
          'shape' => 'DistributionConfig',
          'xmlNamespace' => [
            'uri' => 'http://cloudfront.amazonaws.com/doc/2014-05-31/',
          ],
          'locationName' => 'DistributionConfig',
        ],
      ],
      'payload' => 'DistributionConfig',
    ],
    'CreateDistributionResult' => [
      'type' => 'structure',
      'members' => [
        'Distribution' => [
          'shape' => 'Distribution',
        ],
        'Location' => [
          'shape' => 'string',
          'location' => 'header',
          'locationName' => 'Location',
        ],
        'ETag' => [
          'shape' => 'string',
          'location' => 'header',
          'locationName' => 'ETag',
        ],
      ],
      'payload' => 'Distribution',
    ],
    'CreateInvalidationRequest' => [
      'type' => 'structure',
      'required' => [
        'DistributionId',
        'InvalidationBatch',
      ],
      'members' => [
        'DistributionId' => [
          'shape' => 'string',
          'location' => 'uri',
          'locationName' => 'DistributionId',
        ],
        'InvalidationBatch' => [
          'shape' => 'InvalidationBatch',
          'xmlNamespace' => [
            'uri' => 'http://cloudfront.amazonaws.com/doc/2014-05-31/',
          ],
          'locationName' => 'InvalidationBatch',
        ],
      ],
      'payload' => 'InvalidationBatch',
    ],
    'CreateInvalidationResult' => [
      'type' => 'structure',
      'members' => [
        'Location' => [
          'shape' => 'string',
          'location' => 'header',
          'locationName' => 'Location',
        ],
        'Invalidation' => [
          'shape' => 'Invalidation',
        ],
      ],
      'payload' => 'Invalidation',
    ],
    'CreateStreamingDistributionRequest' => [
      'type' => 'structure',
      'required' => [
        'StreamingDistributionConfig',
      ],
      'members' => [
        'StreamingDistributionConfig' => [
          'shape' => 'StreamingDistributionConfig',
          'xmlNamespace' => [
            'uri' => 'http://cloudfront.amazonaws.com/doc/2014-05-31/',
          ],
          'locationName' => 'StreamingDistributionConfig',
        ],
      ],
      'payload' => 'StreamingDistributionConfig',
    ],
    'CreateStreamingDistributionResult' => [
      'type' => 'structure',
      'members' => [
        'StreamingDistribution' => [
          'shape' => 'StreamingDistribution',
        ],
        'Location' => [
          'shape' => 'string',
          'location' => 'header',
          'locationName' => 'Location',
        ],
        'ETag' => [
          'shape' => 'string',
          'location' => 'header',
          'locationName' => 'ETag',
        ],
      ],
      'payload' => 'StreamingDistribution',
    ],
    'CustomErrorResponse' => [
      'type' => 'structure',
      'required' => [
        'ErrorCode',
      ],
      'members' => [
        'ErrorCode' => [
          'shape' => 'integer',
        ],
        'ResponsePagePath' => [
          'shape' => 'string',
        ],
        'ResponseCode' => [
          'shape' => 'string',
        ],
        'ErrorCachingMinTTL' => [
          'shape' => 'long',
        ],
      ],
    ],
    'CustomErrorResponseList' => [
      'type' => 'list',
      'member' => [
        'shape' => 'CustomErrorResponse',
        'locationName' => 'CustomErrorResponse',
      ],
    ],
    'CustomErrorResponses' => [
      'type' => 'structure',
      'required' => [
        'Quantity',
      ],
      'members' => [
        'Quantity' => [
          'shape' => 'integer',
        ],
        'Items' => [
          'shape' => 'CustomErrorResponseList',
        ],
      ],
    ],
    'CustomOriginConfig' => [
      'type' => 'structure',
      'required' => [
        'HTTPPort',
        'HTTPSPort',
        'OriginProtocolPolicy',
      ],
      'members' => [
        'HTTPPort' => [
          'shape' => 'integer',
        ],
        'HTTPSPort' => [
          'shape' => 'integer',
        ],
        'OriginProtocolPolicy' => [
          'shape' => 'OriginProtocolPolicy',
        ],
      ],
    ],
    'DefaultCacheBehavior' => [
      'type' => 'structure',
      'required' => [
        'TargetOriginId',
        'ForwardedValues',
        'TrustedSigners',
        'ViewerProtocolPolicy',
        'MinTTL',
      ],
      'members' => [
        'TargetOriginId' => [
          'shape' => 'string',
        ],
        'ForwardedValues' => [
          'shape' => 'ForwardedValues',
        ],
        'TrustedSigners' => [
          'shape' => 'TrustedSigners',
        ],
        'ViewerProtocolPolicy' => [
          'shape' => 'ViewerProtocolPolicy',
        ],
        'MinTTL' => [
          'shape' => 'long',
        ],
        'AllowedMethods' => [
          'shape' => 'AllowedMethods',
        ],
        'SmoothStreaming' => [
          'shape' => 'boolean',
        ],
      ],
    ],
    'DeleteCloudFrontOriginAccessIdentityRequest' => [
      'type' => 'structure',
      'members' => [
        'Id' => [
          'shape' => 'string',
          'location' => 'uri',
          'locationName' => 'Id',
        ],
        'IfMatch' => [
          'shape' => 'string',
          'location' => 'header',
          'locationName' => 'If-Match',
        ],
      ],
      'required' => [
        'Id',
      ],
    ],
    'DeleteDistributionRequest' => [
      'type' => 'structure',
      'members' => [
        'Id' => [
          'shape' => 'string',
          'location' => 'uri',
          'locationName' => 'Id',
        ],
        'IfMatch' => [
          'shape' => 'string',
          'location' => 'header',
          'locationName' => 'If-Match',
        ],
      ],
      'required' => [
        'Id',
      ],
    ],
    'DeleteStreamingDistributionRequest' => [
      'type' => 'structure',
      'members' => [
        'Id' => [
          'shape' => 'string',
          'location' => 'uri',
          'locationName' => 'Id',
        ],
        'IfMatch' => [
          'shape' => 'string',
          'location' => 'header',
          'locationName' => 'If-Match',
        ],
      ],
      'required' => [
        'Id',
      ],
    ],
    'Distribution' => [
      'type' => 'structure',
      'required' => [
        'Id',
        'Status',
        'LastModifiedTime',
        'InProgressInvalidationBatches',
        'DomainName',
        'ActiveTrustedSigners',
        'DistributionConfig',
      ],
      'members' => [
        'Id' => [
          'shape' => 'string',
        ],
        'Status' => [
          'shape' => 'string',
        ],
        'LastModifiedTime' => [
          'shape' => 'timestamp',
        ],
        'InProgressInvalidationBatches' => [
          'shape' => 'integer',
        ],
        'DomainName' => [
          'shape' => 'string',
        ],
        'ActiveTrustedSigners' => [
          'shape' => 'ActiveTrustedSigners',
        ],
        'DistributionConfig' => [
          'shape' => 'DistributionConfig',
        ],
      ],
    ],
    'DistributionAlreadyExists' => [
      'type' => 'structure',
      'members' => [
        'Message' => [
          'shape' => 'string',
        ],
      ],
      'error' => [
        'httpStatusCode' => 409,
      ],
      'exception' => true,
    ],
    'DistributionConfig' => [
      'type' => 'structure',
      'required' => [
        'CallerReference',
        'Aliases',
        'DefaultRootObject',
        'Origins',
        'DefaultCacheBehavior',
        'CacheBehaviors',
        'Comment',
        'Logging',
        'PriceClass',
        'Enabled',
      ],
      'members' => [
        'CallerReference' => [
          'shape' => 'string',
        ],
        'Aliases' => [
          'shape' => 'Aliases',
        ],
        'DefaultRootObject' => [
          'shape' => 'string',
        ],
        'Origins' => [
          'shape' => 'Origins',
        ],
        'DefaultCacheBehavior' => [
          'shape' => 'DefaultCacheBehavior',
        ],
        'CacheBehaviors' => [
          'shape' => 'CacheBehaviors',
        ],
        'CustomErrorResponses' => [
          'shape' => 'CustomErrorResponses',
        ],
        'Comment' => [
          'shape' => 'string',
        ],
        'Logging' => [
          'shape' => 'LoggingConfig',
        ],
        'PriceClass' => [
          'shape' => 'PriceClass',
        ],
        'Enabled' => [
          'shape' => 'boolean',
        ],
        'ViewerCertificate' => [
          'shape' => 'ViewerCertificate',
        ],
        'Restrictions' => [
          'shape' => 'Restrictions',
        ],
      ],
    ],
    'DistributionList' => [
      'type' => 'structure',
      'required' => [
        'Marker',
        'MaxItems',
        'IsTruncated',
        'Quantity',
      ],
      'members' => [
        'Marker' => [
          'shape' => 'string',
        ],
        'NextMarker' => [
          'shape' => 'string',
        ],
        'MaxItems' => [
          'shape' => 'integer',
        ],
        'IsTruncated' => [
          'shape' => 'boolean',
        ],
        'Quantity' => [
          'shape' => 'integer',
        ],
        'Items' => [
          'shape' => 'DistributionSummaryList',
        ],
      ],
    ],
    'DistributionNotDisabled' => [
      'type' => 'structure',
      'members' => [
        'Message' => [
          'shape' => 'string',
        ],
      ],
      'error' => [
        'httpStatusCode' => 409,
      ],
      'exception' => true,
    ],
    'DistributionSummary' => [
      'type' => 'structure',
      'required' => [
        'Id',
        'Status',
        'LastModifiedTime',
        'DomainName',
        'Aliases',
        'Origins',
        'DefaultCacheBehavior',
        'CacheBehaviors',
        'CustomErrorResponses',
        'Comment',
        'PriceClass',
        'Enabled',
        'ViewerCertificate',
        'Restrictions',
      ],
      'members' => [
        'Id' => [
          'shape' => 'string',
        ],
        'Status' => [
          'shape' => 'string',
        ],
        'LastModifiedTime' => [
          'shape' => 'timestamp',
        ],
        'DomainName' => [
          'shape' => 'string',
        ],
        'Aliases' => [
          'shape' => 'Aliases',
        ],
        'Origins' => [
          'shape' => 'Origins',
        ],
        'DefaultCacheBehavior' => [
          'shape' => 'DefaultCacheBehavior',
        ],
        'CacheBehaviors' => [
          'shape' => 'CacheBehaviors',
        ],
        'CustomErrorResponses' => [
          'shape' => 'CustomErrorResponses',
        ],
        'Comment' => [
          'shape' => 'string',
        ],
        'PriceClass' => [
          'shape' => 'PriceClass',
        ],
        'Enabled' => [
          'shape' => 'boolean',
        ],
        'ViewerCertificate' => [
          'shape' => 'ViewerCertificate',
        ],
        'Restrictions' => [
          'shape' => 'Restrictions',
        ],
      ],
    ],
    'DistributionSummaryList' => [
      'type' => 'list',
      'member' => [
        'shape' => 'DistributionSummary',
        'locationName' => 'DistributionSummary',
      ],
    ],
    'ForwardedValues' => [
      'type' => 'structure',
      'required' => [
        'QueryString',
        'Cookies',
      ],
      'members' => [
        'QueryString' => [
          'shape' => 'boolean',
        ],
        'Cookies' => [
          'shape' => 'CookiePreference',
        ],
        'Headers' => [
          'shape' => 'Headers',
        ],
      ],
    ],
    'GeoRestriction' => [
      'type' => 'structure',
      'required' => [
        'RestrictionType',
        'Quantity',
      ],
      'members' => [
        'RestrictionType' => [
          'shape' => 'GeoRestrictionType',
        ],
        'Quantity' => [
          'shape' => 'integer',
        ],
        'Items' => [
          'shape' => 'LocationList',
        ],
      ],
    ],
    'GeoRestrictionType' => [
      'type' => 'string',
      'enum' => [
        'blacklist',
        'whitelist',
        'none',
      ],
    ],
    'GetCloudFrontOriginAccessIdentityConfigRequest' => [
      'type' => 'structure',
      'members' => [
        'Id' => [
          'shape' => 'string',
          'location' => 'uri',
          'locationName' => 'Id',
        ],
      ],
      'required' => [
        'Id',
      ],
    ],
    'GetCloudFrontOriginAccessIdentityConfigResult' => [
      'type' => 'structure',
      'members' => [
        'CloudFrontOriginAccessIdentityConfig' => [
          'shape' => 'CloudFrontOriginAccessIdentityConfig',
        ],
        'ETag' => [
          'shape' => 'string',
          'location' => 'header',
          'locationName' => 'ETag',
        ],
      ],
      'payload' => 'CloudFrontOriginAccessIdentityConfig',
    ],
    'GetCloudFrontOriginAccessIdentityRequest' => [
      'type' => 'structure',
      'members' => [
        'Id' => [
          'shape' => 'string',
          'location' => 'uri',
          'locationName' => 'Id',
        ],
      ],
      'required' => [
        'Id',
      ],
    ],
    'GetCloudFrontOriginAccessIdentityResult' => [
      'type' => 'structure',
      'members' => [
        'CloudFrontOriginAccessIdentity' => [
          'shape' => 'CloudFrontOriginAccessIdentity',
        ],
        'ETag' => [
          'shape' => 'string',
          'location' => 'header',
          'locationName' => 'ETag',
        ],
      ],
      'payload' => 'CloudFrontOriginAccessIdentity',
    ],
    'GetDistributionConfigRequest' => [
      'type' => 'structure',
      'members' => [
        'Id' => [
          'shape' => 'string',
          'location' => 'uri',
          'locationName' => 'Id',
        ],
      ],
      'required' => [
        'Id',
      ],
    ],
    'GetDistributionConfigResult' => [
      'type' => 'structure',
      'members' => [
        'DistributionConfig' => [
          'shape' => 'DistributionConfig',
        ],
        'ETag' => [
          'shape' => 'string',
          'location' => 'header',
          'locationName' => 'ETag',
        ],
      ],
      'payload' => 'DistributionConfig',
    ],
    'GetDistributionRequest' => [
      'type' => 'structure',
      'members' => [
        'Id' => [
          'shape' => 'string',
          'location' => 'uri',
          'locationName' => 'Id',
        ],
      ],
      'required' => [
        'Id',
      ],
    ],
    'GetDistributionResult' => [
      'type' => 'structure',
      'members' => [
        'Distribution' => [
          'shape' => 'Distribution',
        ],
        'ETag' => [
          'shape' => 'string',
          'location' => 'header',
          'locationName' => 'ETag',
        ],
      ],
      'payload' => 'Distribution',
    ],
    'GetInvalidationRequest' => [
      'type' => 'structure',
      'required' => [
        'DistributionId',
        'Id',
      ],
      'members' => [
        'DistributionId' => [
          'shape' => 'string',
          'location' => 'uri',
          'locationName' => 'DistributionId',
        ],
        'Id' => [
          'shape' => 'string',
          'location' => 'uri',
          'locationName' => 'Id',
        ],
      ],
    ],
    'GetInvalidationResult' => [
      'type' => 'structure',
      'members' => [
        'Invalidation' => [
          'shape' => 'Invalidation',
        ],
      ],
      'payload' => 'Invalidation',
    ],
    'GetStreamingDistributionConfigRequest' => [
      'type' => 'structure',
      'members' => [
        'Id' => [
          'shape' => 'string',
          'location' => 'uri',
          'locationName' => 'Id',
        ],
      ],
      'required' => [
        'Id',
      ],
    ],
    'GetStreamingDistributionConfigResult' => [
      'type' => 'structure',
      'members' => [
        'StreamingDistributionConfig' => [
          'shape' => 'StreamingDistributionConfig',
        ],
        'ETag' => [
          'shape' => 'string',
          'location' => 'header',
          'locationName' => 'ETag',
        ],
      ],
      'payload' => 'StreamingDistributionConfig',
    ],
    'GetStreamingDistributionRequest' => [
      'type' => 'structure',
      'members' => [
        'Id' => [
          'shape' => 'string',
          'location' => 'uri',
          'locationName' => 'Id',
        ],
      ],
      'required' => [
        'Id',
      ],
    ],
    'GetStreamingDistributionResult' => [
      'type' => 'structure',
      'members' => [
        'StreamingDistribution' => [
          'shape' => 'StreamingDistribution',
        ],
        'ETag' => [
          'shape' => 'string',
          'location' => 'header',
          'locationName' => 'ETag',
        ],
      ],
      'payload' => 'StreamingDistribution',
    ],
    'HeaderList' => [
      'type' => 'list',
      'member' => [
        'shape' => 'string',
        'locationName' => 'Name',
      ],
    ],
    'Headers' => [
      'type' => 'structure',
      'required' => [
        'Quantity',
      ],
      'members' => [
        'Quantity' => [
          'shape' => 'integer',
        ],
        'Items' => [
          'shape' => 'HeaderList',
        ],
      ],
    ],
    'IllegalUpdate' => [
      'type' => 'structure',
      'members' => [
        'Message' => [
          'shape' => 'string',
        ],
      ],
      'error' => [
        'httpStatusCode' => 400,
      ],
      'exception' => true,
    ],
    'InconsistentQuantities' => [
      'type' => 'structure',
      'members' => [
        'Message' => [
          'shape' => 'string',
        ],
      ],
      'error' => [
        'httpStatusCode' => 400,
      ],
      'exception' => true,
    ],
    'InvalidArgument' => [
      'type' => 'structure',
      'members' => [
        'Message' => [
          'shape' => 'string',
        ],
      ],
      'error' => [
        'httpStatusCode' => 400,
      ],
      'exception' => true,
    ],
    'InvalidDefaultRootObject' => [
      'type' => 'structure',
      'members' => [
        'Message' => [
          'shape' => 'string',
        ],
      ],
      'error' => [
        'httpStatusCode' => 400,
      ],
      'exception' => true,
    ],
    'InvalidErrorCode' => [
      'type' => 'structure',
      'members' => [
        'Message' => [
          'shape' => 'string',
        ],
      ],
      'error' => [
        'httpStatusCode' => 400,
      ],
      'exception' => true,
    ],
    'InvalidForwardCookies' => [
      'type' => 'structure',
      'members' => [
        'Message' => [
          'shape' => 'string',
        ],
      ],
      'error' => [
        'httpStatusCode' => 400,
      ],
      'exception' => true,
    ],
    'InvalidGeoRestrictionParameter' => [
      'type' => 'structure',
      'members' => [
        'Message' => [
          'shape' => 'string',
        ],
      ],
      'error' => [
        'httpStatusCode' => 400,
      ],
      'exception' => true,
    ],
    'InvalidHeadersForS3Origin' => [
      'type' => 'structure',
      'members' => [
        'Message' => [
          'shape' => 'string',
        ],
      ],
      'error' => [
        'httpStatusCode' => 400,
      ],
      'exception' => true,
    ],
    'InvalidIfMatchVersion' => [
      'type' => 'structure',
      'members' => [
        'Message' => [
          'shape' => 'string',
        ],
      ],
      'error' => [
        'httpStatusCode' => 400,
      ],
      'exception' => true,
    ],
    'InvalidLocationCode' => [
      'type' => 'structure',
      'members' => [
        'Message' => [
          'shape' => 'string',
        ],
      ],
      'error' => [
        'httpStatusCode' => 400,
      ],
      'exception' => true,
    ],
    'InvalidOrigin' => [
      'type' => 'structure',
      'members' => [
        'Message' => [
          'shape' => 'string',
        ],
      ],
      'error' => [
        'httpStatusCode' => 400,
      ],
      'exception' => true,
    ],
    'InvalidOriginAccessIdentity' => [
      'type' => 'structure',
      'members' => [
        'Message' => [
          'shape' => 'string',
        ],
      ],
      'error' => [
        'httpStatusCode' => 400,
      ],
      'exception' => true,
    ],
    'InvalidRelativePath' => [
      'type' => 'structure',
      'members' => [
        'Message' => [
          'shape' => 'string',
        ],
      ],
      'error' => [
        'httpStatusCode' => 400,
      ],
      'exception' => true,
    ],
    'InvalidRequiredProtocol' => [
      'type' => 'structure',
      'members' => [
        'Message' => [
          'shape' => 'string',
        ],
      ],
      'error' => [
        'httpStatusCode' => 400,
      ],
      'exception' => true,
    ],
    'InvalidResponseCode' => [
      'type' => 'structure',
      'members' => [
        'Message' => [
          'shape' => 'string',
        ],
      ],
      'error' => [
        'httpStatusCode' => 400,
      ],
      'exception' => true,
    ],
    'InvalidViewerCertificate' => [
      'type' => 'structure',
      'members' => [
        'Message' => [
          'shape' => 'string',
        ],
      ],
      'error' => [
        'httpStatusCode' => 400,
      ],
      'exception' => true,
    ],
    'Invalidation' => [
      'type' => 'structure',
      'required' => [
        'Id',
        'Status',
        'CreateTime',
        'InvalidationBatch',
      ],
      'members' => [
        'Id' => [
          'shape' => 'string',
        ],
        'Status' => [
          'shape' => 'string',
        ],
        'CreateTime' => [
          'shape' => 'timestamp',
        ],
        'InvalidationBatch' => [
          'shape' => 'InvalidationBatch',
        ],
      ],
    ],
    'InvalidationBatch' => [
      'type' => 'structure',
      'required' => [
        'Paths',
        'CallerReference',
      ],
      'members' => [
        'Paths' => [
          'shape' => 'Paths',
        ],
        'CallerReference' => [
          'shape' => 'string',
        ],
      ],
    ],
    'InvalidationList' => [
      'type' => 'structure',
      'required' => [
        'Marker',
        'MaxItems',
        'IsTruncated',
        'Quantity',
      ],
      'members' => [
        'Marker' => [
          'shape' => 'string',
        ],
        'NextMarker' => [
          'shape' => 'string',
        ],
        'MaxItems' => [
          'shape' => 'integer',
        ],
        'IsTruncated' => [
          'shape' => 'boolean',
        ],
        'Quantity' => [
          'shape' => 'integer',
        ],
        'Items' => [
          'shape' => 'InvalidationSummaryList',
        ],
      ],
    ],
    'InvalidationSummary' => [
      'type' => 'structure',
      'required' => [
        'Id',
        'CreateTime',
        'Status',
      ],
      'members' => [
        'Id' => [
          'shape' => 'string',
        ],
        'CreateTime' => [
          'shape' => 'timestamp',
        ],
        'Status' => [
          'shape' => 'string',
        ],
      ],
    ],
    'InvalidationSummaryList' => [
      'type' => 'list',
      'member' => [
        'shape' => 'InvalidationSummary',
        'locationName' => 'InvalidationSummary',
      ],
    ],
    'ItemSelection' => [
      'type' => 'string',
      'enum' => [
        'none',
        'whitelist',
        'all',
      ],
    ],
    'KeyPairIdList' => [
      'type' => 'list',
      'member' => [
        'shape' => 'string',
        'locationName' => 'KeyPairId',
      ],
    ],
    'KeyPairIds' => [
      'type' => 'structure',
      'required' => [
        'Quantity',
      ],
      'members' => [
        'Quantity' => [
          'shape' => 'integer',
        ],
        'Items' => [
          'shape' => 'KeyPairIdList',
        ],
      ],
    ],
    'ListCloudFrontOriginAccessIdentitiesRequest' => [
      'type' => 'structure',
      'members' => [
        'Marker' => [
          'shape' => 'string',
          'location' => 'querystring',
          'locationName' => 'Marker',
        ],
        'MaxItems' => [
          'shape' => 'string',
          'location' => 'querystring',
          'locationName' => 'MaxItems',
        ],
      ],
    ],
    'ListCloudFrontOriginAccessIdentitiesResult' => [
      'type' => 'structure',
      'members' => [
        'CloudFrontOriginAccessIdentityList' => [
          'shape' => 'CloudFrontOriginAccessIdentityList',
        ],
      ],
      'payload' => 'CloudFrontOriginAccessIdentityList',
    ],
    'ListDistributionsRequest' => [
      'type' => 'structure',
      'members' => [
        'Marker' => [
          'shape' => 'string',
          'location' => 'querystring',
          'locationName' => 'Marker',
        ],
        'MaxItems' => [
          'shape' => 'string',
          'location' => 'querystring',
          'locationName' => 'MaxItems',
        ],
      ],
    ],
    'ListDistributionsResult' => [
      'type' => 'structure',
      'members' => [
        'DistributionList' => [
          'shape' => 'DistributionList',
        ],
      ],
      'payload' => 'DistributionList',
    ],
    'ListInvalidationsRequest' => [
      'type' => 'structure',
      'required' => [
        'DistributionId',
      ],
      'members' => [
        'DistributionId' => [
          'shape' => 'string',
          'location' => 'uri',
          'locationName' => 'DistributionId',
        ],
        'Marker' => [
          'shape' => 'string',
          'location' => 'querystring',
          'locationName' => 'Marker',
        ],
        'MaxItems' => [
          'shape' => 'string',
          'location' => 'querystring',
          'locationName' => 'MaxItems',
        ],
      ],
    ],
    'ListInvalidationsResult' => [
      'type' => 'structure',
      'members' => [
        'InvalidationList' => [
          'shape' => 'InvalidationList',
        ],
      ],
      'payload' => 'InvalidationList',
    ],
    'ListStreamingDistributionsRequest' => [
      'type' => 'structure',
      'members' => [
        'Marker' => [
          'shape' => 'string',
          'location' => 'querystring',
          'locationName' => 'Marker',
        ],
        'MaxItems' => [
          'shape' => 'string',
          'location' => 'querystring',
          'locationName' => 'MaxItems',
        ],
      ],
    ],
    'ListStreamingDistributionsResult' => [
      'type' => 'structure',
      'members' => [
        'StreamingDistributionList' => [
          'shape' => 'StreamingDistributionList',
        ],
      ],
      'payload' => 'StreamingDistributionList',
    ],
    'LocationList' => [
      'type' => 'list',
      'member' => [
        'shape' => 'string',
        'locationName' => 'Location',
      ],
    ],
    'LoggingConfig' => [
      'type' => 'structure',
      'required' => [
        'Enabled',
        'IncludeCookies',
        'Bucket',
        'Prefix',
      ],
      'members' => [
        'Enabled' => [
          'shape' => 'boolean',
        ],
        'IncludeCookies' => [
          'shape' => 'boolean',
        ],
        'Bucket' => [
          'shape' => 'string',
        ],
        'Prefix' => [
          'shape' => 'string',
        ],
      ],
    ],
    'Method' => [
      'type' => 'string',
      'enum' => [
        'GET',
        'HEAD',
        'POST',
        'PUT',
        'PATCH',
        'OPTIONS',
        'DELETE',
      ],
    ],
    'MissingBody' => [
      'type' => 'structure',
      'members' => [
        'Message' => [
          'shape' => 'string',
        ],
      ],
      'error' => [
        'httpStatusCode' => 400,
      ],
      'exception' => true,
    ],
    'NoSuchCloudFrontOriginAccessIdentity' => [
      'type' => 'structure',
      'members' => [
        'Message' => [
          'shape' => 'string',
        ],
      ],
      'error' => [
        'httpStatusCode' => 404,
      ],
      'exception' => true,
    ],
    'NoSuchDistribution' => [
      'type' => 'structure',
      'members' => [
        'Message' => [
          'shape' => 'string',
        ],
      ],
      'error' => [
        'httpStatusCode' => 404,
      ],
      'exception' => true,
    ],
    'NoSuchInvalidation' => [
      'type' => 'structure',
      'members' => [
        'Message' => [
          'shape' => 'string',
        ],
      ],
      'error' => [
        'httpStatusCode' => 404,
      ],
      'exception' => true,
    ],
    'NoSuchOrigin' => [
      'type' => 'structure',
      'members' => [
        'Message' => [
          'shape' => 'string',
        ],
      ],
      'error' => [
        'httpStatusCode' => 404,
      ],
      'exception' => true,
    ],
    'NoSuchStreamingDistribution' => [
      'type' => 'structure',
      'members' => [
        'Message' => [
          'shape' => 'string',
        ],
      ],
      'error' => [
        'httpStatusCode' => 404,
      ],
      'exception' => true,
    ],
    'Origin' => [
      'type' => 'structure',
      'required' => [
        'Id',
        'DomainName',
      ],
      'members' => [
        'Id' => [
          'shape' => 'string',
        ],
        'DomainName' => [
          'shape' => 'string',
        ],
        'S3OriginConfig' => [
          'shape' => 'S3OriginConfig',
        ],
        'CustomOriginConfig' => [
          'shape' => 'CustomOriginConfig',
        ],
      ],
    ],
    'OriginList' => [
      'type' => 'list',
      'member' => [
        'shape' => 'Origin',
        'locationName' => 'Origin',
      ],
      'min' => 1,
    ],
    'OriginProtocolPolicy' => [
      'type' => 'string',
      'enum' => [
        'http-only',
        'match-viewer',
      ],
    ],
    'Origins' => [
      'type' => 'structure',
      'required' => [
        'Quantity',
      ],
      'members' => [
        'Quantity' => [
          'shape' => 'integer',
        ],
        'Items' => [
          'shape' => 'OriginList',
        ],
      ],
    ],
    'PathList' => [
      'type' => 'list',
      'member' => [
        'shape' => 'string',
        'locationName' => 'Path',
      ],
    ],
    'Paths' => [
      'type' => 'structure',
      'required' => [
        'Quantity',
      ],
      'members' => [
        'Quantity' => [
          'shape' => 'integer',
        ],
        'Items' => [
          'shape' => 'PathList',
        ],
      ],
    ],
    'PreconditionFailed' => [
      'type' => 'structure',
      'members' => [
        'Message' => [
          'shape' => 'string',
        ],
      ],
      'error' => [
        'httpStatusCode' => 412,
      ],
      'exception' => true,
    ],
    'PriceClass' => [
      'type' => 'string',
      'enum' => [
        'PriceClass_100',
        'PriceClass_200',
        'PriceClass_All',
      ],
    ],
    'Restrictions' => [
      'type' => 'structure',
      'required' => [
        'GeoRestriction',
      ],
      'members' => [
        'GeoRestriction' => [
          'shape' => 'GeoRestriction',
        ],
      ],
    ],
    'S3Origin' => [
      'type' => 'structure',
      'required' => [
        'DomainName',
        'OriginAccessIdentity',
      ],
      'members' => [
        'DomainName' => [
          'shape' => 'string',
        ],
        'OriginAccessIdentity' => [
          'shape' => 'string',
        ],
      ],
    ],
    'S3OriginConfig' => [
      'type' => 'structure',
      'required' => [
        'OriginAccessIdentity',
      ],
      'members' => [
        'OriginAccessIdentity' => [
          'shape' => 'string',
        ],
      ],
    ],
    'SSLSupportMethod' => [
      'type' => 'string',
      'enum' => [
        'sni-only',
        'vip',
      ],
    ],
    'Signer' => [
      'type' => 'structure',
      'members' => [
        'AwsAccountNumber' => [
          'shape' => 'string',
        ],
        'KeyPairIds' => [
          'shape' => 'KeyPairIds',
        ],
      ],
    ],
    'SignerList' => [
      'type' => 'list',
      'member' => [
        'shape' => 'Signer',
        'locationName' => 'Signer',
      ],
    ],
    'StreamingDistribution' => [
      'type' => 'structure',
      'required' => [
        'Id',
        'Status',
        'DomainName',
        'ActiveTrustedSigners',
        'StreamingDistributionConfig',
      ],
      'members' => [
        'Id' => [
          'shape' => 'string',
        ],
        'Status' => [
          'shape' => 'string',
        ],
        'LastModifiedTime' => [
          'shape' => 'timestamp',
        ],
        'DomainName' => [
          'shape' => 'string',
        ],
        'ActiveTrustedSigners' => [
          'shape' => 'ActiveTrustedSigners',
        ],
        'StreamingDistributionConfig' => [
          'shape' => 'StreamingDistributionConfig',
        ],
      ],
    ],
    'StreamingDistributionAlreadyExists' => [
      'type' => 'structure',
      'members' => [
        'Message' => [
          'shape' => 'string',
        ],
      ],
      'error' => [
        'httpStatusCode' => 409,
      ],
      'exception' => true,
    ],
    'StreamingDistributionConfig' => [
      'type' => 'structure',
      'required' => [
        'CallerReference',
        'S3Origin',
        'Aliases',
        'Comment',
        'Logging',
        'TrustedSigners',
        'PriceClass',
        'Enabled',
      ],
      'members' => [
        'CallerReference' => [
          'shape' => 'string',
        ],
        'S3Origin' => [
          'shape' => 'S3Origin',
        ],
        'Aliases' => [
          'shape' => 'Aliases',
        ],
        'Comment' => [
          'shape' => 'string',
        ],
        'Logging' => [
          'shape' => 'StreamingLoggingConfig',
        ],
        'TrustedSigners' => [
          'shape' => 'TrustedSigners',
        ],
        'PriceClass' => [
          'shape' => 'PriceClass',
        ],
        'Enabled' => [
          'shape' => 'boolean',
        ],
      ],
    ],
    'StreamingDistributionList' => [
      'type' => 'structure',
      'required' => [
        'Marker',
        'MaxItems',
        'IsTruncated',
        'Quantity',
      ],
      'members' => [
        'Marker' => [
          'shape' => 'string',
        ],
        'NextMarker' => [
          'shape' => 'string',
        ],
        'MaxItems' => [
          'shape' => 'integer',
        ],
        'IsTruncated' => [
          'shape' => 'boolean',
        ],
        'Quantity' => [
          'shape' => 'integer',
        ],
        'Items' => [
          'shape' => 'StreamingDistributionSummaryList',
        ],
      ],
    ],
    'StreamingDistributionNotDisabled' => [
      'type' => 'structure',
      'members' => [
        'Message' => [
          'shape' => 'string',
        ],
      ],
      'error' => [
        'httpStatusCode' => 409,
      ],
      'exception' => true,
    ],
    'StreamingDistributionSummary' => [
      'type' => 'structure',
      'required' => [
        'Id',
        'Status',
        'LastModifiedTime',
        'DomainName',
        'S3Origin',
        'Aliases',
        'TrustedSigners',
        'Comment',
        'PriceClass',
        'Enabled',
      ],
      'members' => [
        'Id' => [
          'shape' => 'string',
        ],
        'Status' => [
          'shape' => 'string',
        ],
        'LastModifiedTime' => [
          'shape' => 'timestamp',
        ],
        'DomainName' => [
          'shape' => 'string',
        ],
        'S3Origin' => [
          'shape' => 'S3Origin',
        ],
        'Aliases' => [
          'shape' => 'Aliases',
        ],
        'TrustedSigners' => [
          'shape' => 'TrustedSigners',
        ],
        'Comment' => [
          'shape' => 'string',
        ],
        'PriceClass' => [
          'shape' => 'PriceClass',
        ],
        'Enabled' => [
          'shape' => 'boolean',
        ],
      ],
    ],
    'StreamingDistributionSummaryList' => [
      'type' => 'list',
      'member' => [
        'shape' => 'StreamingDistributionSummary',
        'locationName' => 'StreamingDistributionSummary',
      ],
    ],
    'StreamingLoggingConfig' => [
      'type' => 'structure',
      'required' => [
        'Enabled',
        'Bucket',
        'Prefix',
      ],
      'members' => [
        'Enabled' => [
          'shape' => 'boolean',
        ],
        'Bucket' => [
          'shape' => 'string',
        ],
        'Prefix' => [
          'shape' => 'string',
        ],
      ],
    ],
    'TooManyCacheBehaviors' => [
      'type' => 'structure',
      'members' => [
        'Message' => [
          'shape' => 'string',
        ],
      ],
      'error' => [
        'httpStatusCode' => 400,
      ],
      'exception' => true,
    ],
    'TooManyCertificates' => [
      'type' => 'structure',
      'members' => [
        'Message' => [
          'shape' => 'string',
        ],
      ],
      'error' => [
        'httpStatusCode' => 400,
      ],
      'exception' => true,
    ],
    'TooManyCloudFrontOriginAccessIdentities' => [
      'type' => 'structure',
      'members' => [
        'Message' => [
          'shape' => 'string',
        ],
      ],
      'error' => [
        'httpStatusCode' => 400,
      ],
      'exception' => true,
    ],
    'TooManyCookieNamesInWhiteList' => [
      'type' => 'structure',
      'members' => [
        'Message' => [
          'shape' => 'string',
        ],
      ],
      'error' => [
        'httpStatusCode' => 400,
      ],
      'exception' => true,
    ],
    'TooManyDistributionCNAMEs' => [
      'type' => 'structure',
      'members' => [
        'Message' => [
          'shape' => 'string',
        ],
      ],
      'error' => [
        'httpStatusCode' => 400,
      ],
      'exception' => true,
    ],
    'TooManyDistributions' => [
      'type' => 'structure',
      'members' => [
        'Message' => [
          'shape' => 'string',
        ],
      ],
      'error' => [
        'httpStatusCode' => 400,
      ],
      'exception' => true,
    ],
    'TooManyHeadersInForwardedValues' => [
      'type' => 'structure',
      'members' => [
        'Message' => [
          'shape' => 'string',
        ],
      ],
      'error' => [
        'httpStatusCode' => 400,
      ],
      'exception' => true,
    ],
    'TooManyInvalidationsInProgress' => [
      'type' => 'structure',
      'members' => [
        'Message' => [
          'shape' => 'string',
        ],
      ],
      'error' => [
        'httpStatusCode' => 400,
      ],
      'exception' => true,
    ],
    'TooManyOrigins' => [
      'type' => 'structure',
      'members' => [
        'Message' => [
          'shape' => 'string',
        ],
      ],
      'error' => [
        'httpStatusCode' => 400,
      ],
      'exception' => true,
    ],
    'TooManyStreamingDistributionCNAMEs' => [
      'type' => 'structure',
      'members' => [
        'Message' => [
          'shape' => 'string',
        ],
      ],
      'error' => [
        'httpStatusCode' => 400,
      ],
      'exception' => true,
    ],
    'TooManyStreamingDistributions' => [
      'type' => 'structure',
      'members' => [
        'Message' => [
          'shape' => 'string',
        ],
      ],
      'error' => [
        'httpStatusCode' => 400,
      ],
      'exception' => true,
    ],
    'TooManyTrustedSigners' => [
      'type' => 'structure',
      'members' => [
        'Message' => [
          'shape' => 'string',
        ],
      ],
      'error' => [
        'httpStatusCode' => 400,
      ],
      'exception' => true,
    ],
    'TrustedSignerDoesNotExist' => [
      'type' => 'structure',
      'members' => [
        'Message' => [
          'shape' => 'string',
        ],
      ],
      'error' => [
        'httpStatusCode' => 400,
      ],
      'exception' => true,
    ],
    'TrustedSigners' => [
      'type' => 'structure',
      'required' => [
        'Enabled',
        'Quantity',
      ],
      'members' => [
        'Enabled' => [
          'shape' => 'boolean',
        ],
        'Quantity' => [
          'shape' => 'integer',
        ],
        'Items' => [
          'shape' => 'AwsAccountNumberList',
        ],
      ],
    ],
    'UpdateCloudFrontOriginAccessIdentityRequest' => [
      'type' => 'structure',
      'required' => [
        'CloudFrontOriginAccessIdentityConfig',
        'Id',
      ],
      'members' => [
        'CloudFrontOriginAccessIdentityConfig' => [
          'shape' => 'CloudFrontOriginAccessIdentityConfig',
          'xmlNamespace' => [
            'uri' => 'http://cloudfront.amazonaws.com/doc/2014-05-31/',
          ],
          'locationName' => 'CloudFrontOriginAccessIdentityConfig',
        ],
        'Id' => [
          'shape' => 'string',
          'location' => 'uri',
          'locationName' => 'Id',
        ],
        'IfMatch' => [
          'shape' => 'string',
          'location' => 'header',
          'locationName' => 'If-Match',
        ],
      ],
      'payload' => 'CloudFrontOriginAccessIdentityConfig',
    ],
    'UpdateCloudFrontOriginAccessIdentityResult' => [
      'type' => 'structure',
      'members' => [
        'CloudFrontOriginAccessIdentity' => [
          'shape' => 'CloudFrontOriginAccessIdentity',
        ],
        'ETag' => [
          'shape' => 'string',
          'location' => 'header',
          'locationName' => 'ETag',
        ],
      ],
      'payload' => 'CloudFrontOriginAccessIdentity',
    ],
    'UpdateDistributionRequest' => [
      'type' => 'structure',
      'required' => [
        'DistributionConfig',
        'Id',
      ],
      'members' => [
        'DistributionConfig' => [
          'shape' => 'DistributionConfig',
          'xmlNamespace' => [
            'uri' => 'http://cloudfront.amazonaws.com/doc/2014-05-31/',
          ],
          'locationName' => 'DistributionConfig',
        ],
        'Id' => [
          'shape' => 'string',
          'location' => 'uri',
          'locationName' => 'Id',
        ],
        'IfMatch' => [
          'shape' => 'string',
          'location' => 'header',
          'locationName' => 'If-Match',
        ],
      ],
      'payload' => 'DistributionConfig',
    ],
    'UpdateDistributionResult' => [
      'type' => 'structure',
      'members' => [
        'Distribution' => [
          'shape' => 'Distribution',
        ],
        'ETag' => [
          'shape' => 'string',
          'location' => 'header',
          'locationName' => 'ETag',
        ],
      ],
      'payload' => 'Distribution',
    ],
    'UpdateStreamingDistributionRequest' => [
      'type' => 'structure',
      'required' => [
        'StreamingDistributionConfig',
        'Id',
      ],
      'members' => [
        'StreamingDistributionConfig' => [
          'shape' => 'StreamingDistributionConfig',
          'xmlNamespace' => [
            'uri' => 'http://cloudfront.amazonaws.com/doc/2014-05-31/',
          ],
          'locationName' => 'StreamingDistributionConfig',
        ],
        'Id' => [
          'shape' => 'string',
          'location' => 'uri',
          'locationName' => 'Id',
        ],
        'IfMatch' => [
          'shape' => 'string',
          'location' => 'header',
          'locationName' => 'If-Match',
        ],
      ],
      'payload' => 'StreamingDistributionConfig',
    ],
    'UpdateStreamingDistributionResult' => [
      'type' => 'structure',
      'members' => [
        'StreamingDistribution' => [
          'shape' => 'StreamingDistribution',
        ],
        'ETag' => [
          'shape' => 'string',
          'location' => 'header',
          'locationName' => 'ETag',
        ],
      ],
      'payload' => 'StreamingDistribution',
    ],
    'ViewerCertificate' => [
      'type' => 'structure',
      'members' => [
        'IAMCertificateId' => [
          'shape' => 'string',
        ],
        'CloudFrontDefaultCertificate' => [
          'shape' => 'boolean',
        ],
        'SSLSupportMethod' => [
          'shape' => 'SSLSupportMethod',
        ],
      ],
    ],
    'ViewerProtocolPolicy' => [
      'type' => 'string',
      'enum' => [
        'allow-all',
        'https-only',
        'redirect-to-https',
      ],
    ],
    'boolean' => [
      'type' => 'boolean',
    ],
    'integer' => [
      'type' => 'integer',
    ],
    'long' => [
      'type' => 'long',
    ],
    'string' => [
      'type' => 'string',
    ],
    'timestamp' => [
      'type' => 'timestamp',
    ],
  ],
];
