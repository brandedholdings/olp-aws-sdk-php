<?php return [
  'metadata' => [
    'apiVersion' => '2013-06-30',
    'endpointPrefix' => 'storagegateway',
    'jsonVersion' => '1.1',
    'serviceFullName' => 'AWS Storage Gateway',
    'signatureVersion' => 'v4',
    'targetPrefix' => 'StorageGateway_20130630',
    'protocol' => 'json',
  ],
  'operations' => [
    'ActivateGateway' => [
      'name' => 'ActivateGateway',
      'http' => [
        'method' => 'POST',
        'requestUri' => '/',
      ],
      'input' => [
        'shape' => 'ActivateGatewayInput',
      ],
      'output' => [
        'shape' => 'ActivateGatewayOutput',
      ],
      'errors' => [
        [
          'shape' => 'InvalidGatewayRequestException',
          'error' => [
            'httpStatusCode' => 400,
          ],
          'exception' => true,
        ],
        [
          'shape' => 'InternalServerError',
          'error' => [
            'httpStatusCode' => 500,
          ],
          'exception' => true,
        ],
      ],
    ],
    'AddCache' => [
      'name' => 'AddCache',
      'http' => [
        'method' => 'POST',
        'requestUri' => '/',
      ],
      'input' => [
        'shape' => 'AddCacheInput',
      ],
      'output' => [
        'shape' => 'AddCacheOutput',
      ],
      'errors' => [
        [
          'shape' => 'InvalidGatewayRequestException',
          'error' => [
            'httpStatusCode' => 400,
          ],
          'exception' => true,
        ],
        [
          'shape' => 'InternalServerError',
          'error' => [
            'httpStatusCode' => 500,
          ],
          'exception' => true,
        ],
      ],
    ],
    'AddUploadBuffer' => [
      'name' => 'AddUploadBuffer',
      'http' => [
        'method' => 'POST',
        'requestUri' => '/',
      ],
      'input' => [
        'shape' => 'AddUploadBufferInput',
      ],
      'output' => [
        'shape' => 'AddUploadBufferOutput',
      ],
      'errors' => [
        [
          'shape' => 'InvalidGatewayRequestException',
          'error' => [
            'httpStatusCode' => 400,
          ],
          'exception' => true,
        ],
        [
          'shape' => 'InternalServerError',
          'error' => [
            'httpStatusCode' => 500,
          ],
          'exception' => true,
        ],
      ],
    ],
    'AddWorkingStorage' => [
      'name' => 'AddWorkingStorage',
      'http' => [
        'method' => 'POST',
        'requestUri' => '/',
      ],
      'input' => [
        'shape' => 'AddWorkingStorageInput',
      ],
      'output' => [
        'shape' => 'AddWorkingStorageOutput',
      ],
      'errors' => [
        [
          'shape' => 'InvalidGatewayRequestException',
          'error' => [
            'httpStatusCode' => 400,
          ],
          'exception' => true,
        ],
        [
          'shape' => 'InternalServerError',
          'error' => [
            'httpStatusCode' => 500,
          ],
          'exception' => true,
        ],
      ],
    ],
    'CancelArchival' => [
      'name' => 'CancelArchival',
      'http' => [
        'method' => 'POST',
        'requestUri' => '/',
      ],
      'input' => [
        'shape' => 'CancelArchivalInput',
      ],
      'output' => [
        'shape' => 'CancelArchivalOutput',
      ],
      'errors' => [
        [
          'shape' => 'InvalidGatewayRequestException',
          'error' => [
            'httpStatusCode' => 400,
          ],
          'exception' => true,
        ],
        [
          'shape' => 'InternalServerError',
          'error' => [
            'httpStatusCode' => 500,
          ],
          'exception' => true,
        ],
      ],
    ],
    'CancelRetrieval' => [
      'name' => 'CancelRetrieval',
      'http' => [
        'method' => 'POST',
        'requestUri' => '/',
      ],
      'input' => [
        'shape' => 'CancelRetrievalInput',
      ],
      'output' => [
        'shape' => 'CancelRetrievalOutput',
      ],
      'errors' => [
        [
          'shape' => 'InvalidGatewayRequestException',
          'error' => [
            'httpStatusCode' => 400,
          ],
          'exception' => true,
        ],
        [
          'shape' => 'InternalServerError',
          'error' => [
            'httpStatusCode' => 500,
          ],
          'exception' => true,
        ],
      ],
    ],
    'CreateCachediSCSIVolume' => [
      'name' => 'CreateCachediSCSIVolume',
      'http' => [
        'method' => 'POST',
        'requestUri' => '/',
      ],
      'input' => [
        'shape' => 'CreateCachediSCSIVolumeInput',
      ],
      'output' => [
        'shape' => 'CreateCachediSCSIVolumeOutput',
      ],
      'errors' => [
        [
          'shape' => 'InvalidGatewayRequestException',
          'error' => [
            'httpStatusCode' => 400,
          ],
          'exception' => true,
        ],
        [
          'shape' => 'InternalServerError',
          'error' => [
            'httpStatusCode' => 500,
          ],
          'exception' => true,
        ],
      ],
    ],
    'CreateSnapshot' => [
      'name' => 'CreateSnapshot',
      'http' => [
        'method' => 'POST',
        'requestUri' => '/',
      ],
      'input' => [
        'shape' => 'CreateSnapshotInput',
      ],
      'output' => [
        'shape' => 'CreateSnapshotOutput',
      ],
      'errors' => [
        [
          'shape' => 'InvalidGatewayRequestException',
          'error' => [
            'httpStatusCode' => 400,
          ],
          'exception' => true,
        ],
        [
          'shape' => 'InternalServerError',
          'error' => [
            'httpStatusCode' => 500,
          ],
          'exception' => true,
        ],
      ],
    ],
    'CreateSnapshotFromVolumeRecoveryPoint' => [
      'name' => 'CreateSnapshotFromVolumeRecoveryPoint',
      'http' => [
        'method' => 'POST',
        'requestUri' => '/',
      ],
      'input' => [
        'shape' => 'CreateSnapshotFromVolumeRecoveryPointInput',
      ],
      'output' => [
        'shape' => 'CreateSnapshotFromVolumeRecoveryPointOutput',
      ],
      'errors' => [
        [
          'shape' => 'InvalidGatewayRequestException',
          'error' => [
            'httpStatusCode' => 400,
          ],
          'exception' => true,
        ],
        [
          'shape' => 'InternalServerError',
          'error' => [
            'httpStatusCode' => 500,
          ],
          'exception' => true,
        ],
      ],
    ],
    'CreateStorediSCSIVolume' => [
      'name' => 'CreateStorediSCSIVolume',
      'http' => [
        'method' => 'POST',
        'requestUri' => '/',
      ],
      'input' => [
        'shape' => 'CreateStorediSCSIVolumeInput',
      ],
      'output' => [
        'shape' => 'CreateStorediSCSIVolumeOutput',
      ],
      'errors' => [
        [
          'shape' => 'InvalidGatewayRequestException',
          'error' => [
            'httpStatusCode' => 400,
          ],
          'exception' => true,
        ],
        [
          'shape' => 'InternalServerError',
          'error' => [
            'httpStatusCode' => 500,
          ],
          'exception' => true,
        ],
      ],
    ],
    'CreateTapes' => [
      'name' => 'CreateTapes',
      'http' => [
        'method' => 'POST',
        'requestUri' => '/',
      ],
      'input' => [
        'shape' => 'CreateTapesInput',
      ],
      'output' => [
        'shape' => 'CreateTapesOutput',
      ],
      'errors' => [
        [
          'shape' => 'InvalidGatewayRequestException',
          'error' => [
            'httpStatusCode' => 400,
          ],
          'exception' => true,
        ],
        [
          'shape' => 'InternalServerError',
          'error' => [
            'httpStatusCode' => 500,
          ],
          'exception' => true,
        ],
      ],
    ],
    'DeleteBandwidthRateLimit' => [
      'name' => 'DeleteBandwidthRateLimit',
      'http' => [
        'method' => 'POST',
        'requestUri' => '/',
      ],
      'input' => [
        'shape' => 'DeleteBandwidthRateLimitInput',
      ],
      'output' => [
        'shape' => 'DeleteBandwidthRateLimitOutput',
      ],
      'errors' => [
        [
          'shape' => 'InvalidGatewayRequestException',
          'error' => [
            'httpStatusCode' => 400,
          ],
          'exception' => true,
        ],
        [
          'shape' => 'InternalServerError',
          'error' => [
            'httpStatusCode' => 500,
          ],
          'exception' => true,
        ],
      ],
    ],
    'DeleteChapCredentials' => [
      'name' => 'DeleteChapCredentials',
      'http' => [
        'method' => 'POST',
        'requestUri' => '/',
      ],
      'input' => [
        'shape' => 'DeleteChapCredentialsInput',
      ],
      'output' => [
        'shape' => 'DeleteChapCredentialsOutput',
      ],
      'errors' => [
        [
          'shape' => 'InvalidGatewayRequestException',
          'error' => [
            'httpStatusCode' => 400,
          ],
          'exception' => true,
        ],
        [
          'shape' => 'InternalServerError',
          'error' => [
            'httpStatusCode' => 500,
          ],
          'exception' => true,
        ],
      ],
    ],
    'DeleteGateway' => [
      'name' => 'DeleteGateway',
      'http' => [
        'method' => 'POST',
        'requestUri' => '/',
      ],
      'input' => [
        'shape' => 'DeleteGatewayInput',
      ],
      'output' => [
        'shape' => 'DeleteGatewayOutput',
      ],
      'errors' => [
        [
          'shape' => 'InvalidGatewayRequestException',
          'error' => [
            'httpStatusCode' => 400,
          ],
          'exception' => true,
        ],
        [
          'shape' => 'InternalServerError',
          'error' => [
            'httpStatusCode' => 500,
          ],
          'exception' => true,
        ],
      ],
    ],
    'DeleteSnapshotSchedule' => [
      'name' => 'DeleteSnapshotSchedule',
      'http' => [
        'method' => 'POST',
        'requestUri' => '/',
      ],
      'input' => [
        'shape' => 'DeleteSnapshotScheduleInput',
      ],
      'output' => [
        'shape' => 'DeleteSnapshotScheduleOutput',
      ],
      'errors' => [
        [
          'shape' => 'InvalidGatewayRequestException',
          'error' => [
            'httpStatusCode' => 400,
          ],
          'exception' => true,
        ],
        [
          'shape' => 'InternalServerError',
          'error' => [
            'httpStatusCode' => 500,
          ],
          'exception' => true,
        ],
      ],
    ],
    'DeleteTape' => [
      'name' => 'DeleteTape',
      'http' => [
        'method' => 'POST',
        'requestUri' => '/',
      ],
      'input' => [
        'shape' => 'DeleteTapeInput',
      ],
      'output' => [
        'shape' => 'DeleteTapeOutput',
      ],
      'errors' => [
        [
          'shape' => 'InvalidGatewayRequestException',
          'error' => [
            'httpStatusCode' => 400,
          ],
          'exception' => true,
        ],
        [
          'shape' => 'InternalServerError',
          'error' => [
            'httpStatusCode' => 500,
          ],
          'exception' => true,
        ],
      ],
    ],
    'DeleteTapeArchive' => [
      'name' => 'DeleteTapeArchive',
      'http' => [
        'method' => 'POST',
        'requestUri' => '/',
      ],
      'input' => [
        'shape' => 'DeleteTapeArchiveInput',
      ],
      'output' => [
        'shape' => 'DeleteTapeArchiveOutput',
      ],
      'errors' => [
        [
          'shape' => 'InvalidGatewayRequestException',
          'error' => [
            'httpStatusCode' => 400,
          ],
          'exception' => true,
        ],
        [
          'shape' => 'InternalServerError',
          'error' => [
            'httpStatusCode' => 500,
          ],
          'exception' => true,
        ],
      ],
    ],
    'DeleteVolume' => [
      'name' => 'DeleteVolume',
      'http' => [
        'method' => 'POST',
        'requestUri' => '/',
      ],
      'input' => [
        'shape' => 'DeleteVolumeInput',
      ],
      'output' => [
        'shape' => 'DeleteVolumeOutput',
      ],
      'errors' => [
        [
          'shape' => 'InvalidGatewayRequestException',
          'error' => [
            'httpStatusCode' => 400,
          ],
          'exception' => true,
        ],
        [
          'shape' => 'InternalServerError',
          'error' => [
            'httpStatusCode' => 500,
          ],
          'exception' => true,
        ],
      ],
    ],
    'DescribeBandwidthRateLimit' => [
      'name' => 'DescribeBandwidthRateLimit',
      'http' => [
        'method' => 'POST',
        'requestUri' => '/',
      ],
      'input' => [
        'shape' => 'DescribeBandwidthRateLimitInput',
      ],
      'output' => [
        'shape' => 'DescribeBandwidthRateLimitOutput',
      ],
      'errors' => [
        [
          'shape' => 'InvalidGatewayRequestException',
          'error' => [
            'httpStatusCode' => 400,
          ],
          'exception' => true,
        ],
        [
          'shape' => 'InternalServerError',
          'error' => [
            'httpStatusCode' => 500,
          ],
          'exception' => true,
        ],
      ],
    ],
    'DescribeCache' => [
      'name' => 'DescribeCache',
      'http' => [
        'method' => 'POST',
        'requestUri' => '/',
      ],
      'input' => [
        'shape' => 'DescribeCacheInput',
      ],
      'output' => [
        'shape' => 'DescribeCacheOutput',
      ],
      'errors' => [
        [
          'shape' => 'InvalidGatewayRequestException',
          'error' => [
            'httpStatusCode' => 400,
          ],
          'exception' => true,
        ],
        [
          'shape' => 'InternalServerError',
          'error' => [
            'httpStatusCode' => 500,
          ],
          'exception' => true,
        ],
      ],
    ],
    'DescribeCachediSCSIVolumes' => [
      'name' => 'DescribeCachediSCSIVolumes',
      'http' => [
        'method' => 'POST',
        'requestUri' => '/',
      ],
      'input' => [
        'shape' => 'DescribeCachediSCSIVolumesInput',
      ],
      'output' => [
        'shape' => 'DescribeCachediSCSIVolumesOutput',
      ],
      'errors' => [
        [
          'shape' => 'InvalidGatewayRequestException',
          'error' => [
            'httpStatusCode' => 400,
          ],
          'exception' => true,
        ],
        [
          'shape' => 'InternalServerError',
          'error' => [
            'httpStatusCode' => 500,
          ],
          'exception' => true,
        ],
      ],
    ],
    'DescribeChapCredentials' => [
      'name' => 'DescribeChapCredentials',
      'http' => [
        'method' => 'POST',
        'requestUri' => '/',
      ],
      'input' => [
        'shape' => 'DescribeChapCredentialsInput',
      ],
      'output' => [
        'shape' => 'DescribeChapCredentialsOutput',
      ],
      'errors' => [
        [
          'shape' => 'InvalidGatewayRequestException',
          'error' => [
            'httpStatusCode' => 400,
          ],
          'exception' => true,
        ],
        [
          'shape' => 'InternalServerError',
          'error' => [
            'httpStatusCode' => 500,
          ],
          'exception' => true,
        ],
      ],
    ],
    'DescribeGatewayInformation' => [
      'name' => 'DescribeGatewayInformation',
      'http' => [
        'method' => 'POST',
        'requestUri' => '/',
      ],
      'input' => [
        'shape' => 'DescribeGatewayInformationInput',
      ],
      'output' => [
        'shape' => 'DescribeGatewayInformationOutput',
      ],
      'errors' => [
        [
          'shape' => 'InvalidGatewayRequestException',
          'error' => [
            'httpStatusCode' => 400,
          ],
          'exception' => true,
        ],
        [
          'shape' => 'InternalServerError',
          'error' => [
            'httpStatusCode' => 500,
          ],
          'exception' => true,
        ],
      ],
    ],
    'DescribeMaintenanceStartTime' => [
      'name' => 'DescribeMaintenanceStartTime',
      'http' => [
        'method' => 'POST',
        'requestUri' => '/',
      ],
      'input' => [
        'shape' => 'DescribeMaintenanceStartTimeInput',
      ],
      'output' => [
        'shape' => 'DescribeMaintenanceStartTimeOutput',
      ],
      'errors' => [
        [
          'shape' => 'InvalidGatewayRequestException',
          'error' => [
            'httpStatusCode' => 400,
          ],
          'exception' => true,
        ],
        [
          'shape' => 'InternalServerError',
          'error' => [
            'httpStatusCode' => 500,
          ],
          'exception' => true,
        ],
      ],
    ],
    'DescribeSnapshotSchedule' => [
      'name' => 'DescribeSnapshotSchedule',
      'http' => [
        'method' => 'POST',
        'requestUri' => '/',
      ],
      'input' => [
        'shape' => 'DescribeSnapshotScheduleInput',
      ],
      'output' => [
        'shape' => 'DescribeSnapshotScheduleOutput',
      ],
      'errors' => [
        [
          'shape' => 'InvalidGatewayRequestException',
          'error' => [
            'httpStatusCode' => 400,
          ],
          'exception' => true,
        ],
        [
          'shape' => 'InternalServerError',
          'error' => [
            'httpStatusCode' => 500,
          ],
          'exception' => true,
        ],
      ],
    ],
    'DescribeStorediSCSIVolumes' => [
      'name' => 'DescribeStorediSCSIVolumes',
      'http' => [
        'method' => 'POST',
        'requestUri' => '/',
      ],
      'input' => [
        'shape' => 'DescribeStorediSCSIVolumesInput',
      ],
      'output' => [
        'shape' => 'DescribeStorediSCSIVolumesOutput',
      ],
      'errors' => [
        [
          'shape' => 'InvalidGatewayRequestException',
          'error' => [
            'httpStatusCode' => 400,
          ],
          'exception' => true,
        ],
        [
          'shape' => 'InternalServerError',
          'error' => [
            'httpStatusCode' => 500,
          ],
          'exception' => true,
        ],
      ],
    ],
    'DescribeTapeArchives' => [
      'name' => 'DescribeTapeArchives',
      'http' => [
        'method' => 'POST',
        'requestUri' => '/',
      ],
      'input' => [
        'shape' => 'DescribeTapeArchivesInput',
      ],
      'output' => [
        'shape' => 'DescribeTapeArchivesOutput',
      ],
      'errors' => [
        [
          'shape' => 'InvalidGatewayRequestException',
          'error' => [
            'httpStatusCode' => 400,
          ],
          'exception' => true,
        ],
        [
          'shape' => 'InternalServerError',
          'error' => [
            'httpStatusCode' => 500,
          ],
          'exception' => true,
        ],
      ],
    ],
    'DescribeTapeRecoveryPoints' => [
      'name' => 'DescribeTapeRecoveryPoints',
      'http' => [
        'method' => 'POST',
        'requestUri' => '/',
      ],
      'input' => [
        'shape' => 'DescribeTapeRecoveryPointsInput',
      ],
      'output' => [
        'shape' => 'DescribeTapeRecoveryPointsOutput',
      ],
      'errors' => [
        [
          'shape' => 'InvalidGatewayRequestException',
          'error' => [
            'httpStatusCode' => 400,
          ],
          'exception' => true,
        ],
        [
          'shape' => 'InternalServerError',
          'error' => [
            'httpStatusCode' => 500,
          ],
          'exception' => true,
        ],
      ],
    ],
    'DescribeTapes' => [
      'name' => 'DescribeTapes',
      'http' => [
        'method' => 'POST',
        'requestUri' => '/',
      ],
      'input' => [
        'shape' => 'DescribeTapesInput',
      ],
      'output' => [
        'shape' => 'DescribeTapesOutput',
      ],
      'errors' => [
        [
          'shape' => 'InvalidGatewayRequestException',
          'error' => [
            'httpStatusCode' => 400,
          ],
          'exception' => true,
        ],
        [
          'shape' => 'InternalServerError',
          'error' => [
            'httpStatusCode' => 500,
          ],
          'exception' => true,
        ],
      ],
    ],
    'DescribeUploadBuffer' => [
      'name' => 'DescribeUploadBuffer',
      'http' => [
        'method' => 'POST',
        'requestUri' => '/',
      ],
      'input' => [
        'shape' => 'DescribeUploadBufferInput',
      ],
      'output' => [
        'shape' => 'DescribeUploadBufferOutput',
      ],
      'errors' => [
        [
          'shape' => 'InvalidGatewayRequestException',
          'error' => [
            'httpStatusCode' => 400,
          ],
          'exception' => true,
        ],
        [
          'shape' => 'InternalServerError',
          'error' => [
            'httpStatusCode' => 500,
          ],
          'exception' => true,
        ],
      ],
    ],
    'DescribeVTLDevices' => [
      'name' => 'DescribeVTLDevices',
      'http' => [
        'method' => 'POST',
        'requestUri' => '/',
      ],
      'input' => [
        'shape' => 'DescribeVTLDevicesInput',
      ],
      'output' => [
        'shape' => 'DescribeVTLDevicesOutput',
      ],
      'errors' => [
        [
          'shape' => 'InvalidGatewayRequestException',
          'error' => [
            'httpStatusCode' => 400,
          ],
          'exception' => true,
        ],
        [
          'shape' => 'InternalServerError',
          'error' => [
            'httpStatusCode' => 500,
          ],
          'exception' => true,
        ],
      ],
    ],
    'DescribeWorkingStorage' => [
      'name' => 'DescribeWorkingStorage',
      'http' => [
        'method' => 'POST',
        'requestUri' => '/',
      ],
      'input' => [
        'shape' => 'DescribeWorkingStorageInput',
      ],
      'output' => [
        'shape' => 'DescribeWorkingStorageOutput',
      ],
      'errors' => [
        [
          'shape' => 'InvalidGatewayRequestException',
          'error' => [
            'httpStatusCode' => 400,
          ],
          'exception' => true,
        ],
        [
          'shape' => 'InternalServerError',
          'error' => [
            'httpStatusCode' => 500,
          ],
          'exception' => true,
        ],
      ],
    ],
    'DisableGateway' => [
      'name' => 'DisableGateway',
      'http' => [
        'method' => 'POST',
        'requestUri' => '/',
      ],
      'input' => [
        'shape' => 'DisableGatewayInput',
      ],
      'output' => [
        'shape' => 'DisableGatewayOutput',
      ],
      'errors' => [
        [
          'shape' => 'InvalidGatewayRequestException',
          'error' => [
            'httpStatusCode' => 400,
          ],
          'exception' => true,
        ],
        [
          'shape' => 'InternalServerError',
          'error' => [
            'httpStatusCode' => 500,
          ],
          'exception' => true,
        ],
      ],
    ],
    'ListGateways' => [
      'name' => 'ListGateways',
      'http' => [
        'method' => 'POST',
        'requestUri' => '/',
      ],
      'input' => [
        'shape' => 'ListGatewaysInput',
      ],
      'output' => [
        'shape' => 'ListGatewaysOutput',
      ],
      'errors' => [
        [
          'shape' => 'InvalidGatewayRequestException',
          'error' => [
            'httpStatusCode' => 400,
          ],
          'exception' => true,
        ],
        [
          'shape' => 'InternalServerError',
          'error' => [
            'httpStatusCode' => 500,
          ],
          'exception' => true,
        ],
      ],
    ],
    'ListLocalDisks' => [
      'name' => 'ListLocalDisks',
      'http' => [
        'method' => 'POST',
        'requestUri' => '/',
      ],
      'input' => [
        'shape' => 'ListLocalDisksInput',
      ],
      'output' => [
        'shape' => 'ListLocalDisksOutput',
      ],
      'errors' => [
        [
          'shape' => 'InvalidGatewayRequestException',
          'error' => [
            'httpStatusCode' => 400,
          ],
          'exception' => true,
        ],
        [
          'shape' => 'InternalServerError',
          'error' => [
            'httpStatusCode' => 500,
          ],
          'exception' => true,
        ],
      ],
    ],
    'ListVolumeRecoveryPoints' => [
      'name' => 'ListVolumeRecoveryPoints',
      'http' => [
        'method' => 'POST',
        'requestUri' => '/',
      ],
      'input' => [
        'shape' => 'ListVolumeRecoveryPointsInput',
      ],
      'output' => [
        'shape' => 'ListVolumeRecoveryPointsOutput',
      ],
      'errors' => [
        [
          'shape' => 'InvalidGatewayRequestException',
          'error' => [
            'httpStatusCode' => 400,
          ],
          'exception' => true,
        ],
        [
          'shape' => 'InternalServerError',
          'error' => [
            'httpStatusCode' => 500,
          ],
          'exception' => true,
        ],
      ],
    ],
    'ListVolumes' => [
      'name' => 'ListVolumes',
      'http' => [
        'method' => 'POST',
        'requestUri' => '/',
      ],
      'input' => [
        'shape' => 'ListVolumesInput',
      ],
      'output' => [
        'shape' => 'ListVolumesOutput',
      ],
      'errors' => [
        [
          'shape' => 'InvalidGatewayRequestException',
          'error' => [
            'httpStatusCode' => 400,
          ],
          'exception' => true,
        ],
        [
          'shape' => 'InternalServerError',
          'error' => [
            'httpStatusCode' => 500,
          ],
          'exception' => true,
        ],
      ],
    ],
    'RetrieveTapeArchive' => [
      'name' => 'RetrieveTapeArchive',
      'http' => [
        'method' => 'POST',
        'requestUri' => '/',
      ],
      'input' => [
        'shape' => 'RetrieveTapeArchiveInput',
      ],
      'output' => [
        'shape' => 'RetrieveTapeArchiveOutput',
      ],
      'errors' => [
        [
          'shape' => 'InvalidGatewayRequestException',
          'error' => [
            'httpStatusCode' => 400,
          ],
          'exception' => true,
        ],
        [
          'shape' => 'InternalServerError',
          'error' => [
            'httpStatusCode' => 500,
          ],
          'exception' => true,
        ],
      ],
    ],
    'RetrieveTapeRecoveryPoint' => [
      'name' => 'RetrieveTapeRecoveryPoint',
      'http' => [
        'method' => 'POST',
        'requestUri' => '/',
      ],
      'input' => [
        'shape' => 'RetrieveTapeRecoveryPointInput',
      ],
      'output' => [
        'shape' => 'RetrieveTapeRecoveryPointOutput',
      ],
      'errors' => [
        [
          'shape' => 'InvalidGatewayRequestException',
          'error' => [
            'httpStatusCode' => 400,
          ],
          'exception' => true,
        ],
        [
          'shape' => 'InternalServerError',
          'error' => [
            'httpStatusCode' => 500,
          ],
          'exception' => true,
        ],
      ],
    ],
    'ShutdownGateway' => [
      'name' => 'ShutdownGateway',
      'http' => [
        'method' => 'POST',
        'requestUri' => '/',
      ],
      'input' => [
        'shape' => 'ShutdownGatewayInput',
      ],
      'output' => [
        'shape' => 'ShutdownGatewayOutput',
      ],
      'errors' => [
        [
          'shape' => 'InvalidGatewayRequestException',
          'error' => [
            'httpStatusCode' => 400,
          ],
          'exception' => true,
        ],
        [
          'shape' => 'InternalServerError',
          'error' => [
            'httpStatusCode' => 500,
          ],
          'exception' => true,
        ],
      ],
    ],
    'StartGateway' => [
      'name' => 'StartGateway',
      'http' => [
        'method' => 'POST',
        'requestUri' => '/',
      ],
      'input' => [
        'shape' => 'StartGatewayInput',
      ],
      'output' => [
        'shape' => 'StartGatewayOutput',
      ],
      'errors' => [
        [
          'shape' => 'InvalidGatewayRequestException',
          'error' => [
            'httpStatusCode' => 400,
          ],
          'exception' => true,
        ],
        [
          'shape' => 'InternalServerError',
          'error' => [
            'httpStatusCode' => 500,
          ],
          'exception' => true,
        ],
      ],
    ],
    'UpdateBandwidthRateLimit' => [
      'name' => 'UpdateBandwidthRateLimit',
      'http' => [
        'method' => 'POST',
        'requestUri' => '/',
      ],
      'input' => [
        'shape' => 'UpdateBandwidthRateLimitInput',
      ],
      'output' => [
        'shape' => 'UpdateBandwidthRateLimitOutput',
      ],
      'errors' => [
        [
          'shape' => 'InvalidGatewayRequestException',
          'error' => [
            'httpStatusCode' => 400,
          ],
          'exception' => true,
        ],
        [
          'shape' => 'InternalServerError',
          'error' => [
            'httpStatusCode' => 500,
          ],
          'exception' => true,
        ],
      ],
    ],
    'UpdateChapCredentials' => [
      'name' => 'UpdateChapCredentials',
      'http' => [
        'method' => 'POST',
        'requestUri' => '/',
      ],
      'input' => [
        'shape' => 'UpdateChapCredentialsInput',
      ],
      'output' => [
        'shape' => 'UpdateChapCredentialsOutput',
      ],
      'errors' => [
        [
          'shape' => 'InvalidGatewayRequestException',
          'error' => [
            'httpStatusCode' => 400,
          ],
          'exception' => true,
        ],
        [
          'shape' => 'InternalServerError',
          'error' => [
            'httpStatusCode' => 500,
          ],
          'exception' => true,
        ],
      ],
    ],
    'UpdateGatewayInformation' => [
      'name' => 'UpdateGatewayInformation',
      'http' => [
        'method' => 'POST',
        'requestUri' => '/',
      ],
      'input' => [
        'shape' => 'UpdateGatewayInformationInput',
      ],
      'output' => [
        'shape' => 'UpdateGatewayInformationOutput',
      ],
      'errors' => [
        [
          'shape' => 'InvalidGatewayRequestException',
          'error' => [
            'httpStatusCode' => 400,
          ],
          'exception' => true,
        ],
        [
          'shape' => 'InternalServerError',
          'error' => [
            'httpStatusCode' => 500,
          ],
          'exception' => true,
        ],
      ],
    ],
    'UpdateGatewaySoftwareNow' => [
      'name' => 'UpdateGatewaySoftwareNow',
      'http' => [
        'method' => 'POST',
        'requestUri' => '/',
      ],
      'input' => [
        'shape' => 'UpdateGatewaySoftwareNowInput',
      ],
      'output' => [
        'shape' => 'UpdateGatewaySoftwareNowOutput',
      ],
      'errors' => [
        [
          'shape' => 'InvalidGatewayRequestException',
          'error' => [
            'httpStatusCode' => 400,
          ],
          'exception' => true,
        ],
        [
          'shape' => 'InternalServerError',
          'error' => [
            'httpStatusCode' => 500,
          ],
          'exception' => true,
        ],
      ],
    ],
    'UpdateMaintenanceStartTime' => [
      'name' => 'UpdateMaintenanceStartTime',
      'http' => [
        'method' => 'POST',
        'requestUri' => '/',
      ],
      'input' => [
        'shape' => 'UpdateMaintenanceStartTimeInput',
      ],
      'output' => [
        'shape' => 'UpdateMaintenanceStartTimeOutput',
      ],
      'errors' => [
        [
          'shape' => 'InvalidGatewayRequestException',
          'error' => [
            'httpStatusCode' => 400,
          ],
          'exception' => true,
        ],
        [
          'shape' => 'InternalServerError',
          'error' => [
            'httpStatusCode' => 500,
          ],
          'exception' => true,
        ],
      ],
    ],
    'UpdateSnapshotSchedule' => [
      'name' => 'UpdateSnapshotSchedule',
      'http' => [
        'method' => 'POST',
        'requestUri' => '/',
      ],
      'input' => [
        'shape' => 'UpdateSnapshotScheduleInput',
      ],
      'output' => [
        'shape' => 'UpdateSnapshotScheduleOutput',
      ],
      'errors' => [
        [
          'shape' => 'InvalidGatewayRequestException',
          'error' => [
            'httpStatusCode' => 400,
          ],
          'exception' => true,
        ],
        [
          'shape' => 'InternalServerError',
          'error' => [
            'httpStatusCode' => 500,
          ],
          'exception' => true,
        ],
      ],
    ],
  ],
  'shapes' => [
    'ActivateGatewayInput' => [
      'type' => 'structure',
      'required' => [
        'ActivationKey',
        'GatewayName',
        'GatewayTimezone',
        'GatewayRegion',
      ],
      'members' => [
        'ActivationKey' => [
          'shape' => 'ActivationKey',
        ],
        'GatewayName' => [
          'shape' => 'GatewayName',
        ],
        'GatewayTimezone' => [
          'shape' => 'GatewayTimezone',
        ],
        'GatewayRegion' => [
          'shape' => 'RegionId',
        ],
        'GatewayType' => [
          'shape' => 'GatewayType',
        ],
        'TapeDriveType' => [
          'shape' => 'TapeDriveType',
        ],
        'MediumChangerType' => [
          'shape' => 'MediumChangerType',
        ],
      ],
    ],
    'ActivateGatewayOutput' => [
      'type' => 'structure',
      'members' => [
        'GatewayARN' => [
          'shape' => 'GatewayARN',
        ],
      ],
    ],
    'ActivationKey' => [
      'type' => 'string',
      'min' => 1,
      'max' => 50,
    ],
    'AddCacheInput' => [
      'type' => 'structure',
      'required' => [
        'GatewayARN',
        'DiskIds',
      ],
      'members' => [
        'GatewayARN' => [
          'shape' => 'GatewayARN',
        ],
        'DiskIds' => [
          'shape' => 'DiskIds',
        ],
      ],
    ],
    'AddCacheOutput' => [
      'type' => 'structure',
      'members' => [
        'GatewayARN' => [
          'shape' => 'GatewayARN',
        ],
      ],
    ],
    'AddUploadBufferInput' => [
      'type' => 'structure',
      'required' => [
        'GatewayARN',
        'DiskIds',
      ],
      'members' => [
        'GatewayARN' => [
          'shape' => 'GatewayARN',
        ],
        'DiskIds' => [
          'shape' => 'DiskIds',
        ],
      ],
    ],
    'AddUploadBufferOutput' => [
      'type' => 'structure',
      'members' => [
        'GatewayARN' => [
          'shape' => 'GatewayARN',
        ],
      ],
    ],
    'AddWorkingStorageInput' => [
      'type' => 'structure',
      'required' => [
        'GatewayARN',
        'DiskIds',
      ],
      'members' => [
        'GatewayARN' => [
          'shape' => 'GatewayARN',
        ],
        'DiskIds' => [
          'shape' => 'DiskIds',
        ],
      ],
    ],
    'AddWorkingStorageOutput' => [
      'type' => 'structure',
      'members' => [
        'GatewayARN' => [
          'shape' => 'GatewayARN',
        ],
      ],
    ],
    'BandwidthDownloadRateLimit' => [
      'type' => 'long',
      'min' => 102400,
    ],
    'BandwidthType' => [
      'type' => 'string',
      'min' => 3,
      'max' => 25,
    ],
    'BandwidthUploadRateLimit' => [
      'type' => 'long',
      'min' => 51200,
    ],
    'CachediSCSIVolume' => [
      'type' => 'structure',
      'members' => [
        'VolumeARN' => [
          'shape' => 'VolumeARN',
        ],
        'VolumeId' => [
          'shape' => 'VolumeId',
        ],
        'VolumeType' => [
          'shape' => 'VolumeType',
        ],
        'VolumeStatus' => [
          'shape' => 'VolumeStatus',
        ],
        'VolumeSizeInBytes' => [
          'shape' => 'long',
        ],
        'VolumeProgress' => [
          'shape' => 'DoubleObject',
        ],
        'SourceSnapshotId' => [
          'shape' => 'SnapshotId',
        ],
        'VolumeiSCSIAttributes' => [
          'shape' => 'VolumeiSCSIAttributes',
        ],
      ],
    ],
    'CachediSCSIVolumes' => [
      'type' => 'list',
      'member' => [
        'shape' => 'CachediSCSIVolume',
      ],
    ],
    'CancelArchivalInput' => [
      'type' => 'structure',
      'required' => [
        'GatewayARN',
        'TapeARN',
      ],
      'members' => [
        'GatewayARN' => [
          'shape' => 'GatewayARN',
        ],
        'TapeARN' => [
          'shape' => 'TapeARN',
        ],
      ],
    ],
    'CancelArchivalOutput' => [
      'type' => 'structure',
      'members' => [
        'TapeARN' => [
          'shape' => 'TapeARN',
        ],
      ],
    ],
    'CancelRetrievalInput' => [
      'type' => 'structure',
      'required' => [
        'GatewayARN',
        'TapeARN',
      ],
      'members' => [
        'GatewayARN' => [
          'shape' => 'GatewayARN',
        ],
        'TapeARN' => [
          'shape' => 'TapeARN',
        ],
      ],
    ],
    'CancelRetrievalOutput' => [
      'type' => 'structure',
      'members' => [
        'TapeARN' => [
          'shape' => 'TapeARN',
        ],
      ],
    ],
    'ChapCredentials' => [
      'type' => 'list',
      'member' => [
        'shape' => 'ChapInfo',
      ],
    ],
    'ChapInfo' => [
      'type' => 'structure',
      'members' => [
        'TargetARN' => [
          'shape' => 'TargetARN',
        ],
        'SecretToAuthenticateInitiator' => [
          'shape' => 'ChapSecret',
        ],
        'InitiatorName' => [
          'shape' => 'IqnName',
        ],
        'SecretToAuthenticateTarget' => [
          'shape' => 'ChapSecret',
        ],
      ],
    ],
    'ChapSecret' => [
      'type' => 'string',
      'min' => 12,
      'max' => 16,
    ],
    'ClientToken' => [
      'type' => 'string',
      'min' => 5,
      'max' => 100,
    ],
    'CreateCachediSCSIVolumeInput' => [
      'type' => 'structure',
      'required' => [
        'GatewayARN',
        'VolumeSizeInBytes',
        'TargetName',
        'NetworkInterfaceId',
        'ClientToken',
      ],
      'members' => [
        'GatewayARN' => [
          'shape' => 'GatewayARN',
        ],
        'VolumeSizeInBytes' => [
          'shape' => 'long',
        ],
        'SnapshotId' => [
          'shape' => 'SnapshotId',
        ],
        'TargetName' => [
          'shape' => 'TargetName',
        ],
        'NetworkInterfaceId' => [
          'shape' => 'NetworkInterfaceId',
        ],
        'ClientToken' => [
          'shape' => 'ClientToken',
        ],
      ],
    ],
    'CreateCachediSCSIVolumeOutput' => [
      'type' => 'structure',
      'members' => [
        'VolumeARN' => [
          'shape' => 'VolumeARN',
        ],
        'TargetARN' => [
          'shape' => 'TargetARN',
        ],
      ],
    ],
    'CreateSnapshotFromVolumeRecoveryPointInput' => [
      'type' => 'structure',
      'required' => [
        'VolumeARN',
        'SnapshotDescription',
      ],
      'members' => [
        'VolumeARN' => [
          'shape' => 'VolumeARN',
        ],
        'SnapshotDescription' => [
          'shape' => 'SnapshotDescription',
        ],
      ],
    ],
    'CreateSnapshotFromVolumeRecoveryPointOutput' => [
      'type' => 'structure',
      'members' => [
        'SnapshotId' => [
          'shape' => 'SnapshotId',
        ],
        'VolumeARN' => [
          'shape' => 'VolumeARN',
        ],
        'VolumeRecoveryPointTime' => [
          'shape' => 'string',
        ],
      ],
    ],
    'CreateSnapshotInput' => [
      'type' => 'structure',
      'required' => [
        'VolumeARN',
        'SnapshotDescription',
      ],
      'members' => [
        'VolumeARN' => [
          'shape' => 'VolumeARN',
        ],
        'SnapshotDescription' => [
          'shape' => 'SnapshotDescription',
        ],
      ],
    ],
    'CreateSnapshotOutput' => [
      'type' => 'structure',
      'members' => [
        'VolumeARN' => [
          'shape' => 'VolumeARN',
        ],
        'SnapshotId' => [
          'shape' => 'SnapshotId',
        ],
      ],
    ],
    'CreateStorediSCSIVolumeInput' => [
      'type' => 'structure',
      'required' => [
        'GatewayARN',
        'DiskId',
        'PreserveExistingData',
        'TargetName',
        'NetworkInterfaceId',
      ],
      'members' => [
        'GatewayARN' => [
          'shape' => 'GatewayARN',
        ],
        'DiskId' => [
          'shape' => 'DiskId',
        ],
        'SnapshotId' => [
          'shape' => 'SnapshotId',
        ],
        'PreserveExistingData' => [
          'shape' => 'boolean',
        ],
        'TargetName' => [
          'shape' => 'TargetName',
        ],
        'NetworkInterfaceId' => [
          'shape' => 'NetworkInterfaceId',
        ],
      ],
    ],
    'CreateStorediSCSIVolumeOutput' => [
      'type' => 'structure',
      'members' => [
        'VolumeARN' => [
          'shape' => 'VolumeARN',
        ],
        'VolumeSizeInBytes' => [
          'shape' => 'long',
        ],
        'TargetARN' => [
          'shape' => 'TargetARN',
        ],
      ],
    ],
    'CreateTapesInput' => [
      'type' => 'structure',
      'required' => [
        'GatewayARN',
        'TapeSizeInBytes',
        'ClientToken',
        'NumTapesToCreate',
        'TapeBarcodePrefix',
      ],
      'members' => [
        'GatewayARN' => [
          'shape' => 'GatewayARN',
        ],
        'TapeSizeInBytes' => [
          'shape' => 'TapeSize',
        ],
        'ClientToken' => [
          'shape' => 'ClientToken',
        ],
        'NumTapesToCreate' => [
          'shape' => 'NumTapesToCreate',
        ],
        'TapeBarcodePrefix' => [
          'shape' => 'TapeBarcodePrefix',
        ],
      ],
    ],
    'CreateTapesOutput' => [
      'type' => 'structure',
      'members' => [
        'TapeARNs' => [
          'shape' => 'TapeARNs',
        ],
      ],
    ],
    'DayOfWeek' => [
      'type' => 'integer',
      'min' => 0,
      'max' => 6,
    ],
    'DeleteBandwidthRateLimitInput' => [
      'type' => 'structure',
      'required' => [
        'GatewayARN',
        'BandwidthType',
      ],
      'members' => [
        'GatewayARN' => [
          'shape' => 'GatewayARN',
        ],
        'BandwidthType' => [
          'shape' => 'BandwidthType',
        ],
      ],
    ],
    'DeleteBandwidthRateLimitOutput' => [
      'type' => 'structure',
      'members' => [
        'GatewayARN' => [
          'shape' => 'GatewayARN',
        ],
      ],
    ],
    'DeleteChapCredentialsInput' => [
      'type' => 'structure',
      'required' => [
        'TargetARN',
        'InitiatorName',
      ],
      'members' => [
        'TargetARN' => [
          'shape' => 'TargetARN',
        ],
        'InitiatorName' => [
          'shape' => 'IqnName',
        ],
      ],
    ],
    'DeleteChapCredentialsOutput' => [
      'type' => 'structure',
      'members' => [
        'TargetARN' => [
          'shape' => 'TargetARN',
        ],
        'InitiatorName' => [
          'shape' => 'IqnName',
        ],
      ],
    ],
    'DeleteGatewayInput' => [
      'type' => 'structure',
      'required' => [
        'GatewayARN',
      ],
      'members' => [
        'GatewayARN' => [
          'shape' => 'GatewayARN',
        ],
      ],
    ],
    'DeleteGatewayOutput' => [
      'type' => 'structure',
      'members' => [
        'GatewayARN' => [
          'shape' => 'GatewayARN',
        ],
      ],
    ],
    'DeleteSnapshotScheduleInput' => [
      'type' => 'structure',
      'required' => [
        'VolumeARN',
      ],
      'members' => [
        'VolumeARN' => [
          'shape' => 'VolumeARN',
        ],
      ],
    ],
    'DeleteSnapshotScheduleOutput' => [
      'type' => 'structure',
      'members' => [
        'VolumeARN' => [
          'shape' => 'VolumeARN',
        ],
      ],
    ],
    'DeleteTapeArchiveInput' => [
      'type' => 'structure',
      'required' => [
        'TapeARN',
      ],
      'members' => [
        'TapeARN' => [
          'shape' => 'TapeARN',
        ],
      ],
    ],
    'DeleteTapeArchiveOutput' => [
      'type' => 'structure',
      'members' => [
        'TapeARN' => [
          'shape' => 'TapeARN',
        ],
      ],
    ],
    'DeleteTapeInput' => [
      'type' => 'structure',
      'required' => [
        'GatewayARN',
        'TapeARN',
      ],
      'members' => [
        'GatewayARN' => [
          'shape' => 'GatewayARN',
        ],
        'TapeARN' => [
          'shape' => 'TapeARN',
        ],
      ],
    ],
    'DeleteTapeOutput' => [
      'type' => 'structure',
      'members' => [
        'TapeARN' => [
          'shape' => 'TapeARN',
        ],
      ],
    ],
    'DeleteVolumeInput' => [
      'type' => 'structure',
      'required' => [
        'VolumeARN',
      ],
      'members' => [
        'VolumeARN' => [
          'shape' => 'VolumeARN',
        ],
      ],
    ],
    'DeleteVolumeOutput' => [
      'type' => 'structure',
      'members' => [
        'VolumeARN' => [
          'shape' => 'VolumeARN',
        ],
      ],
    ],
    'DescribeBandwidthRateLimitInput' => [
      'type' => 'structure',
      'required' => [
        'GatewayARN',
      ],
      'members' => [
        'GatewayARN' => [
          'shape' => 'GatewayARN',
        ],
      ],
    ],
    'DescribeBandwidthRateLimitOutput' => [
      'type' => 'structure',
      'members' => [
        'GatewayARN' => [
          'shape' => 'GatewayARN',
        ],
        'AverageUploadRateLimitInBitsPerSec' => [
          'shape' => 'BandwidthUploadRateLimit',
        ],
        'AverageDownloadRateLimitInBitsPerSec' => [
          'shape' => 'BandwidthDownloadRateLimit',
        ],
      ],
    ],
    'DescribeCacheInput' => [
      'type' => 'structure',
      'required' => [
        'GatewayARN',
      ],
      'members' => [
        'GatewayARN' => [
          'shape' => 'GatewayARN',
        ],
      ],
    ],
    'DescribeCacheOutput' => [
      'type' => 'structure',
      'members' => [
        'GatewayARN' => [
          'shape' => 'GatewayARN',
        ],
        'DiskIds' => [
          'shape' => 'DiskIds',
        ],
        'CacheAllocatedInBytes' => [
          'shape' => 'long',
        ],
        'CacheUsedPercentage' => [
          'shape' => 'double',
        ],
        'CacheDirtyPercentage' => [
          'shape' => 'double',
        ],
        'CacheHitPercentage' => [
          'shape' => 'double',
        ],
        'CacheMissPercentage' => [
          'shape' => 'double',
        ],
      ],
    ],
    'DescribeCachediSCSIVolumesInput' => [
      'type' => 'structure',
      'required' => [
        'VolumeARNs',
      ],
      'members' => [
        'VolumeARNs' => [
          'shape' => 'VolumeARNs',
        ],
      ],
    ],
    'DescribeCachediSCSIVolumesOutput' => [
      'type' => 'structure',
      'members' => [
        'CachediSCSIVolumes' => [
          'shape' => 'CachediSCSIVolumes',
        ],
      ],
    ],
    'DescribeChapCredentialsInput' => [
      'type' => 'structure',
      'required' => [
        'TargetARN',
      ],
      'members' => [
        'TargetARN' => [
          'shape' => 'TargetARN',
        ],
      ],
    ],
    'DescribeChapCredentialsOutput' => [
      'type' => 'structure',
      'members' => [
        'ChapCredentials' => [
          'shape' => 'ChapCredentials',
        ],
      ],
    ],
    'DescribeGatewayInformationInput' => [
      'type' => 'structure',
      'required' => [
        'GatewayARN',
      ],
      'members' => [
        'GatewayARN' => [
          'shape' => 'GatewayARN',
        ],
      ],
    ],
    'DescribeGatewayInformationOutput' => [
      'type' => 'structure',
      'members' => [
        'GatewayARN' => [
          'shape' => 'GatewayARN',
        ],
        'GatewayId' => [
          'shape' => 'GatewayId',
        ],
        'GatewayTimezone' => [
          'shape' => 'GatewayTimezone',
        ],
        'GatewayState' => [
          'shape' => 'GatewayState',
        ],
        'GatewayNetworkInterfaces' => [
          'shape' => 'GatewayNetworkInterfaces',
        ],
        'GatewayType' => [
          'shape' => 'GatewayType',
        ],
        'NextUpdateAvailabilityDate' => [
          'shape' => 'NextUpdateAvailabilityDate',
        ],
      ],
    ],
    'DescribeMaintenanceStartTimeInput' => [
      'type' => 'structure',
      'required' => [
        'GatewayARN',
      ],
      'members' => [
        'GatewayARN' => [
          'shape' => 'GatewayARN',
        ],
      ],
    ],
    'DescribeMaintenanceStartTimeOutput' => [
      'type' => 'structure',
      'members' => [
        'GatewayARN' => [
          'shape' => 'GatewayARN',
        ],
        'HourOfDay' => [
          'shape' => 'HourOfDay',
        ],
        'MinuteOfHour' => [
          'shape' => 'MinuteOfHour',
        ],
        'DayOfWeek' => [
          'shape' => 'DayOfWeek',
        ],
        'Timezone' => [
          'shape' => 'GatewayTimezone',
        ],
      ],
    ],
    'DescribeSnapshotScheduleInput' => [
      'type' => 'structure',
      'required' => [
        'VolumeARN',
      ],
      'members' => [
        'VolumeARN' => [
          'shape' => 'VolumeARN',
        ],
      ],
    ],
    'DescribeSnapshotScheduleOutput' => [
      'type' => 'structure',
      'members' => [
        'VolumeARN' => [
          'shape' => 'VolumeARN',
        ],
        'StartAt' => [
          'shape' => 'HourOfDay',
        ],
        'RecurrenceInHours' => [
          'shape' => 'RecurrenceInHours',
        ],
        'Description' => [
          'shape' => 'Description',
        ],
        'Timezone' => [
          'shape' => 'GatewayTimezone',
        ],
      ],
    ],
    'DescribeStorediSCSIVolumesInput' => [
      'type' => 'structure',
      'required' => [
        'VolumeARNs',
      ],
      'members' => [
        'VolumeARNs' => [
          'shape' => 'VolumeARNs',
        ],
      ],
    ],
    'DescribeStorediSCSIVolumesOutput' => [
      'type' => 'structure',
      'members' => [
        'StorediSCSIVolumes' => [
          'shape' => 'StorediSCSIVolumes',
        ],
      ],
    ],
    'DescribeTapeArchivesInput' => [
      'type' => 'structure',
      'members' => [
        'TapeARNs' => [
          'shape' => 'TapeARNs',
        ],
        'Marker' => [
          'shape' => 'Marker',
        ],
        'Limit' => [
          'shape' => 'PositiveIntObject',
        ],
      ],
    ],
    'DescribeTapeArchivesOutput' => [
      'type' => 'structure',
      'members' => [
        'TapeArchives' => [
          'shape' => 'TapeArchives',
        ],
        'Marker' => [
          'shape' => 'Marker',
        ],
      ],
    ],
    'DescribeTapeRecoveryPointsInput' => [
      'type' => 'structure',
      'required' => [
        'GatewayARN',
      ],
      'members' => [
        'GatewayARN' => [
          'shape' => 'GatewayARN',
        ],
        'Marker' => [
          'shape' => 'Marker',
        ],
        'Limit' => [
          'shape' => 'PositiveIntObject',
        ],
      ],
    ],
    'DescribeTapeRecoveryPointsOutput' => [
      'type' => 'structure',
      'members' => [
        'GatewayARN' => [
          'shape' => 'GatewayARN',
        ],
        'TapeRecoveryPointInfos' => [
          'shape' => 'TapeRecoveryPointInfos',
        ],
        'Marker' => [
          'shape' => 'Marker',
        ],
      ],
    ],
    'DescribeTapesInput' => [
      'type' => 'structure',
      'required' => [
        'GatewayARN',
      ],
      'members' => [
        'GatewayARN' => [
          'shape' => 'GatewayARN',
        ],
        'TapeARNs' => [
          'shape' => 'TapeARNs',
        ],
        'Marker' => [
          'shape' => 'Marker',
        ],
        'Limit' => [
          'shape' => 'PositiveIntObject',
        ],
      ],
    ],
    'DescribeTapesOutput' => [
      'type' => 'structure',
      'members' => [
        'Tapes' => [
          'shape' => 'Tapes',
        ],
        'Marker' => [
          'shape' => 'Marker',
        ],
      ],
    ],
    'DescribeUploadBufferInput' => [
      'type' => 'structure',
      'required' => [
        'GatewayARN',
      ],
      'members' => [
        'GatewayARN' => [
          'shape' => 'GatewayARN',
        ],
      ],
    ],
    'DescribeUploadBufferOutput' => [
      'type' => 'structure',
      'members' => [
        'GatewayARN' => [
          'shape' => 'GatewayARN',
        ],
        'DiskIds' => [
          'shape' => 'DiskIds',
        ],
        'UploadBufferUsedInBytes' => [
          'shape' => 'long',
        ],
        'UploadBufferAllocatedInBytes' => [
          'shape' => 'long',
        ],
      ],
    ],
    'DescribeVTLDevicesInput' => [
      'type' => 'structure',
      'required' => [
        'GatewayARN',
      ],
      'members' => [
        'GatewayARN' => [
          'shape' => 'GatewayARN',
        ],
        'VTLDeviceARNs' => [
          'shape' => 'VTLDeviceARNs',
        ],
        'Marker' => [
          'shape' => 'Marker',
        ],
        'Limit' => [
          'shape' => 'PositiveIntObject',
        ],
      ],
    ],
    'DescribeVTLDevicesOutput' => [
      'type' => 'structure',
      'members' => [
        'GatewayARN' => [
          'shape' => 'GatewayARN',
        ],
        'VTLDevices' => [
          'shape' => 'VTLDevices',
        ],
        'Marker' => [
          'shape' => 'Marker',
        ],
      ],
    ],
    'DescribeWorkingStorageInput' => [
      'type' => 'structure',
      'required' => [
        'GatewayARN',
      ],
      'members' => [
        'GatewayARN' => [
          'shape' => 'GatewayARN',
        ],
      ],
    ],
    'DescribeWorkingStorageOutput' => [
      'type' => 'structure',
      'members' => [
        'GatewayARN' => [
          'shape' => 'GatewayARN',
        ],
        'DiskIds' => [
          'shape' => 'DiskIds',
        ],
        'WorkingStorageUsedInBytes' => [
          'shape' => 'long',
        ],
        'WorkingStorageAllocatedInBytes' => [
          'shape' => 'long',
        ],
      ],
    ],
    'Description' => [
      'type' => 'string',
      'min' => 1,
      'max' => 255,
    ],
    'DeviceiSCSIAttributes' => [
      'type' => 'structure',
      'members' => [
        'TargetARN' => [
          'shape' => 'TargetARN',
        ],
        'NetworkInterfaceId' => [
          'shape' => 'NetworkInterfaceId',
        ],
        'NetworkInterfacePort' => [
          'shape' => 'integer',
        ],
        'ChapEnabled' => [
          'shape' => 'boolean',
        ],
      ],
    ],
    'DisableGatewayInput' => [
      'type' => 'structure',
      'required' => [
        'GatewayARN',
      ],
      'members' => [
        'GatewayARN' => [
          'shape' => 'GatewayARN',
        ],
      ],
    ],
    'DisableGatewayOutput' => [
      'type' => 'structure',
      'members' => [
        'GatewayARN' => [
          'shape' => 'GatewayARN',
        ],
      ],
    ],
    'Disk' => [
      'type' => 'structure',
      'members' => [
        'DiskId' => [
          'shape' => 'DiskId',
        ],
        'DiskPath' => [
          'shape' => 'string',
        ],
        'DiskNode' => [
          'shape' => 'string',
        ],
        'DiskSizeInBytes' => [
          'shape' => 'long',
        ],
        'DiskAllocationType' => [
          'shape' => 'DiskAllocationType',
        ],
        'DiskAllocationResource' => [
          'shape' => 'string',
        ],
      ],
    ],
    'DiskAllocationType' => [
      'type' => 'string',
      'min' => 3,
      'max' => 100,
    ],
    'DiskId' => [
      'type' => 'string',
      'min' => 1,
      'max' => 300,
    ],
    'DiskIds' => [
      'type' => 'list',
      'member' => [
        'shape' => 'DiskId',
      ],
    ],
    'Disks' => [
      'type' => 'list',
      'member' => [
        'shape' => 'Disk',
      ],
    ],
    'DoubleObject' => [
      'type' => 'double',
    ],
    'ErrorCode' => [
      'type' => 'string',
      'enum' => [
        'ActivationKeyExpired',
        'ActivationKeyInvalid',
        'ActivationKeyNotFound',
        'GatewayInternalError',
        'GatewayNotConnected',
        'GatewayNotFound',
        'GatewayProxyNetworkConnectionBusy',
        'AuthenticationFailure',
        'BandwidthThrottleScheduleNotFound',
        'Blocked',
        'CannotExportSnapshot',
        'ChapCredentialNotFound',
        'DiskAlreadyAllocated',
        'DiskDoesNotExist',
        'DiskSizeGreaterThanVolumeMaxSize',
        'DiskSizeLessThanVolumeSize',
        'DiskSizeNotGigAligned',
        'DuplicateCertificateInfo',
        'DuplicateSchedule',
        'EndpointNotFound',
        'IAMNotSupported',
        'InitiatorInvalid',
        'InitiatorNotFound',
        'InternalError',
        'InvalidGateway',
        'InvalidEndpoint',
        'InvalidParameters',
        'InvalidSchedule',
        'LocalStorageLimitExceeded',
        'LunAlreadyAllocated ',
        'LunInvalid',
        'MaximumContentLengthExceeded',
        'MaximumTapeCartridgeCountExceeded',
        'MaximumVolumeCountExceeded',
        'NetworkConfigurationChanged',
        'NoDisksAvailable',
        'NotImplemented',
        'NotSupported',
        'OperationAborted',
        'OutdatedGateway',
        'ParametersNotImplemented',
        'RegionInvalid',
        'RequestTimeout',
        'ServiceUnavailable',
        'SnapshotDeleted',
        'SnapshotIdInvalid',
        'SnapshotInProgress',
        'SnapshotNotFound',
        'SnapshotScheduleNotFound',
        'StagingAreaFull',
        'StorageFailure',
        'TapeCartridgeNotFound',
        'TargetAlreadyExists',
        'TargetInvalid',
        'TargetNotFound',
        'UnauthorizedOperation',
        'VolumeAlreadyExists',
        'VolumeIdInvalid',
        'VolumeInUse',
        'VolumeNotFound',
        'VolumeNotReady',
      ],
    ],
    'GatewayARN' => [
      'type' => 'string',
      'min' => 50,
      'max' => 500,
    ],
    'GatewayId' => [
      'type' => 'string',
      'min' => 12,
      'max' => 30,
    ],
    'GatewayInfo' => [
      'type' => 'structure',
      'members' => [
        'GatewayARN' => [
          'shape' => 'GatewayARN',
        ],
        'GatewayType' => [
          'shape' => 'GatewayType',
        ],
        'GatewayOperationalState' => [
          'shape' => 'GatewayOperationalState',
        ],
      ],
    ],
    'GatewayName' => [
      'type' => 'string',
      'min' => 2,
      'max' => 255,
      'pattern' => '^[ -\\.0-\\[\\]-~]*[!-\\.0-\\[\\]-~][ -\\.0-\\[\\]-~]*$',
    ],
    'GatewayNetworkInterfaces' => [
      'type' => 'list',
      'member' => [
        'shape' => 'NetworkInterface',
      ],
    ],
    'GatewayOperationalState' => [
      'type' => 'string',
      'min' => 2,
      'max' => 25,
    ],
    'GatewayState' => [
      'type' => 'string',
      'min' => 2,
      'max' => 25,
    ],
    'GatewayTimezone' => [
      'type' => 'string',
      'min' => 3,
      'max' => 10,
    ],
    'GatewayType' => [
      'type' => 'string',
      'min' => 2,
      'max' => 20,
    ],
    'Gateways' => [
      'type' => 'list',
      'member' => [
        'shape' => 'GatewayInfo',
      ],
    ],
    'HourOfDay' => [
      'type' => 'integer',
      'min' => 0,
      'max' => 23,
    ],
    'InternalServerError' => [
      'type' => 'structure',
      'members' => [
        'message' => [
          'shape' => 'string',
        ],
        'error' => [
          'shape' => 'StorageGatewayError',
        ],
      ],
      'error' => [
        'httpStatusCode' => 500,
      ],
      'exception' => true,
    ],
    'InvalidGatewayRequestException' => [
      'type' => 'structure',
      'members' => [
        'message' => [
          'shape' => 'string',
        ],
        'error' => [
          'shape' => 'StorageGatewayError',
        ],
      ],
      'error' => [
        'httpStatusCode' => 400,
      ],
      'exception' => true,
    ],
    'IqnName' => [
      'type' => 'string',
      'min' => 1,
      'max' => 255,
      'pattern' => '[0-9a-z:.-]+',
    ],
    'ListGatewaysInput' => [
      'type' => 'structure',
      'members' => [
        'Marker' => [
          'shape' => 'Marker',
        ],
        'Limit' => [
          'shape' => 'PositiveIntObject',
        ],
      ],
    ],
    'ListGatewaysOutput' => [
      'type' => 'structure',
      'members' => [
        'Gateways' => [
          'shape' => 'Gateways',
        ],
        'Marker' => [
          'shape' => 'Marker',
        ],
      ],
    ],
    'ListLocalDisksInput' => [
      'type' => 'structure',
      'required' => [
        'GatewayARN',
      ],
      'members' => [
        'GatewayARN' => [
          'shape' => 'GatewayARN',
        ],
      ],
    ],
    'ListLocalDisksOutput' => [
      'type' => 'structure',
      'members' => [
        'GatewayARN' => [
          'shape' => 'GatewayARN',
        ],
        'Disks' => [
          'shape' => 'Disks',
        ],
      ],
    ],
    'ListVolumeRecoveryPointsInput' => [
      'type' => 'structure',
      'required' => [
        'GatewayARN',
      ],
      'members' => [
        'GatewayARN' => [
          'shape' => 'GatewayARN',
        ],
      ],
    ],
    'ListVolumeRecoveryPointsOutput' => [
      'type' => 'structure',
      'members' => [
        'GatewayARN' => [
          'shape' => 'GatewayARN',
        ],
        'VolumeRecoveryPointInfos' => [
          'shape' => 'VolumeRecoveryPointInfos',
        ],
      ],
    ],
    'ListVolumesInput' => [
      'type' => 'structure',
      'required' => [
        'GatewayARN',
      ],
      'members' => [
        'GatewayARN' => [
          'shape' => 'GatewayARN',
        ],
        'Marker' => [
          'shape' => 'Marker',
        ],
        'Limit' => [
          'shape' => 'PositiveIntObject',
        ],
      ],
    ],
    'ListVolumesOutput' => [
      'type' => 'structure',
      'members' => [
        'GatewayARN' => [
          'shape' => 'GatewayARN',
        ],
        'Marker' => [
          'shape' => 'Marker',
        ],
        'VolumeInfos' => [
          'shape' => 'VolumeInfos',
        ],
      ],
    ],
    'Marker' => [
      'type' => 'string',
      'min' => 1,
      'max' => 1000,
    ],
    'MediumChangerType' => [
      'type' => 'string',
      'min' => 2,
      'max' => 50,
    ],
    'MinuteOfHour' => [
      'type' => 'integer',
      'min' => 0,
      'max' => 59,
    ],
    'NetworkInterface' => [
      'type' => 'structure',
      'members' => [
        'Ipv4Address' => [
          'shape' => 'string',
        ],
        'MacAddress' => [
          'shape' => 'string',
        ],
        'Ipv6Address' => [
          'shape' => 'string',
        ],
      ],
    ],
    'NetworkInterfaceId' => [
      'type' => 'string',
      'pattern' => '\\A(25[0-5]|2[0-4]\\d|[0-1]?\\d?\\d](\\.(25[0-5]|2[0-4]\\d|[0-1]?\\d?\\d]]{3}\\z',
    ],
    'NextUpdateAvailabilityDate' => [
      'type' => 'string',
      'min' => 1,
      'max' => 25,
    ],
    'NumTapesToCreate' => [
      'type' => 'integer',
      'min' => 1,
      'max' => 10,
    ],
    'PositiveIntObject' => [
      'type' => 'integer',
      'min' => 1,
    ],
    'RecurrenceInHours' => [
      'type' => 'integer',
      'min' => 1,
      'max' => 24,
    ],
    'RegionId' => [
      'type' => 'string',
      'min' => 1,
      'max' => 25,
    ],
    'RetrieveTapeArchiveInput' => [
      'type' => 'structure',
      'required' => [
        'TapeARN',
        'GatewayARN',
      ],
      'members' => [
        'TapeARN' => [
          'shape' => 'TapeARN',
        ],
        'GatewayARN' => [
          'shape' => 'GatewayARN',
        ],
      ],
    ],
    'RetrieveTapeArchiveOutput' => [
      'type' => 'structure',
      'members' => [
        'TapeARN' => [
          'shape' => 'TapeARN',
        ],
      ],
    ],
    'RetrieveTapeRecoveryPointInput' => [
      'type' => 'structure',
      'required' => [
        'TapeARN',
        'GatewayARN',
      ],
      'members' => [
        'TapeARN' => [
          'shape' => 'TapeARN',
        ],
        'GatewayARN' => [
          'shape' => 'GatewayARN',
        ],
      ],
    ],
    'RetrieveTapeRecoveryPointOutput' => [
      'type' => 'structure',
      'members' => [
        'TapeARN' => [
          'shape' => 'TapeARN',
        ],
      ],
    ],
    'ShutdownGatewayInput' => [
      'type' => 'structure',
      'required' => [
        'GatewayARN',
      ],
      'members' => [
        'GatewayARN' => [
          'shape' => 'GatewayARN',
        ],
      ],
    ],
    'ShutdownGatewayOutput' => [
      'type' => 'structure',
      'members' => [
        'GatewayARN' => [
          'shape' => 'GatewayARN',
        ],
      ],
    ],
    'SnapshotDescription' => [
      'type' => 'string',
      'min' => 1,
      'max' => 255,
    ],
    'SnapshotId' => [
      'type' => 'string',
      'pattern' => '\\Asnap-[0-9a-fA-F]{8}\\z',
    ],
    'StartGatewayInput' => [
      'type' => 'structure',
      'required' => [
        'GatewayARN',
      ],
      'members' => [
        'GatewayARN' => [
          'shape' => 'GatewayARN',
        ],
      ],
    ],
    'StartGatewayOutput' => [
      'type' => 'structure',
      'members' => [
        'GatewayARN' => [
          'shape' => 'GatewayARN',
        ],
      ],
    ],
    'StorageGatewayError' => [
      'type' => 'structure',
      'members' => [
        'errorCode' => [
          'shape' => 'ErrorCode',
        ],
        'errorDetails' => [
          'shape' => 'errorDetails',
        ],
      ],
    ],
    'StorediSCSIVolume' => [
      'type' => 'structure',
      'members' => [
        'VolumeARN' => [
          'shape' => 'VolumeARN',
        ],
        'VolumeId' => [
          'shape' => 'VolumeId',
        ],
        'VolumeType' => [
          'shape' => 'VolumeType',
        ],
        'VolumeStatus' => [
          'shape' => 'VolumeStatus',
        ],
        'VolumeSizeInBytes' => [
          'shape' => 'long',
        ],
        'VolumeProgress' => [
          'shape' => 'DoubleObject',
        ],
        'VolumeDiskId' => [
          'shape' => 'DiskId',
        ],
        'SourceSnapshotId' => [
          'shape' => 'SnapshotId',
        ],
        'PreservedExistingData' => [
          'shape' => 'boolean',
        ],
        'VolumeiSCSIAttributes' => [
          'shape' => 'VolumeiSCSIAttributes',
        ],
      ],
    ],
    'StorediSCSIVolumes' => [
      'type' => 'list',
      'member' => [
        'shape' => 'StorediSCSIVolume',
      ],
    ],
    'Tape' => [
      'type' => 'structure',
      'members' => [
        'TapeARN' => [
          'shape' => 'TapeARN',
        ],
        'TapeBarcode' => [
          'shape' => 'TapeBarcode',
        ],
        'TapeSizeInBytes' => [
          'shape' => 'TapeSize',
        ],
        'TapeStatus' => [
          'shape' => 'TapeStatus',
        ],
        'VTLDevice' => [
          'shape' => 'VTLDeviceARN',
        ],
        'Progress' => [
          'shape' => 'DoubleObject',
        ],
      ],
    ],
    'TapeARN' => [
      'type' => 'string',
      'min' => 50,
      'max' => 500,
    ],
    'TapeARNs' => [
      'type' => 'list',
      'member' => [
        'shape' => 'TapeARN',
      ],
    ],
    'TapeArchive' => [
      'type' => 'structure',
      'members' => [
        'TapeARN' => [
          'shape' => 'TapeARN',
        ],
        'TapeBarcode' => [
          'shape' => 'TapeBarcode',
        ],
        'TapeSizeInBytes' => [
          'shape' => 'TapeSize',
        ],
        'CompletionTime' => [
          'shape' => 'Time',
        ],
        'RetrievedTo' => [
          'shape' => 'GatewayARN',
        ],
        'TapeStatus' => [
          'shape' => 'TapeArchiveStatus',
        ],
      ],
    ],
    'TapeArchiveStatus' => [
      'type' => 'string',
    ],
    'TapeArchives' => [
      'type' => 'list',
      'member' => [
        'shape' => 'TapeArchive',
      ],
    ],
    'TapeBarcode' => [
      'type' => 'string',
      'min' => 8,
      'max' => 16,
      'pattern' => '^[A-Z0-9]*$',
    ],
    'TapeBarcodePrefix' => [
      'type' => 'string',
      'min' => 1,
      'max' => 4,
      'pattern' => '^[A-Z]*$',
    ],
    'TapeDriveType' => [
      'type' => 'string',
      'min' => 2,
      'max' => 50,
    ],
    'TapeRecoveryPointInfo' => [
      'type' => 'structure',
      'members' => [
        'TapeARN' => [
          'shape' => 'TapeARN',
        ],
        'TapeRecoveryPointTime' => [
          'shape' => 'Time',
        ],
        'TapeSizeInBytes' => [
          'shape' => 'TapeSize',
        ],
        'TapeStatus' => [
          'shape' => 'TapeRecoveryPointStatus',
        ],
      ],
    ],
    'TapeRecoveryPointInfos' => [
      'type' => 'list',
      'member' => [
        'shape' => 'TapeRecoveryPointInfo',
      ],
    ],
    'TapeRecoveryPointStatus' => [
      'type' => 'string',
    ],
    'TapeSize' => [
      'type' => 'long',
      'min' => 107374182400,
      'max' => 2748779069440,
    ],
    'TapeStatus' => [
      'type' => 'string',
    ],
    'Tapes' => [
      'type' => 'list',
      'member' => [
        'shape' => 'Tape',
      ],
    ],
    'TargetARN' => [
      'type' => 'string',
      'min' => 50,
      'max' => 800,
    ],
    'TargetName' => [
      'type' => 'string',
      'min' => 1,
      'max' => 200,
      'pattern' => '^[-\\.;a-z0-9]+$',
    ],
    'Time' => [
      'type' => 'timestamp',
    ],
    'UpdateBandwidthRateLimitInput' => [
      'type' => 'structure',
      'required' => [
        'GatewayARN',
      ],
      'members' => [
        'GatewayARN' => [
          'shape' => 'GatewayARN',
        ],
        'AverageUploadRateLimitInBitsPerSec' => [
          'shape' => 'BandwidthUploadRateLimit',
        ],
        'AverageDownloadRateLimitInBitsPerSec' => [
          'shape' => 'BandwidthDownloadRateLimit',
        ],
      ],
    ],
    'UpdateBandwidthRateLimitOutput' => [
      'type' => 'structure',
      'members' => [
        'GatewayARN' => [
          'shape' => 'GatewayARN',
        ],
      ],
    ],
    'UpdateChapCredentialsInput' => [
      'type' => 'structure',
      'required' => [
        'TargetARN',
        'SecretToAuthenticateInitiator',
        'InitiatorName',
      ],
      'members' => [
        'TargetARN' => [
          'shape' => 'TargetARN',
        ],
        'SecretToAuthenticateInitiator' => [
          'shape' => 'ChapSecret',
        ],
        'InitiatorName' => [
          'shape' => 'IqnName',
        ],
        'SecretToAuthenticateTarget' => [
          'shape' => 'ChapSecret',
        ],
      ],
    ],
    'UpdateChapCredentialsOutput' => [
      'type' => 'structure',
      'members' => [
        'TargetARN' => [
          'shape' => 'TargetARN',
        ],
        'InitiatorName' => [
          'shape' => 'IqnName',
        ],
      ],
    ],
    'UpdateGatewayInformationInput' => [
      'type' => 'structure',
      'required' => [
        'GatewayARN',
      ],
      'members' => [
        'GatewayARN' => [
          'shape' => 'GatewayARN',
        ],
        'GatewayName' => [
          'shape' => 'GatewayName',
        ],
        'GatewayTimezone' => [
          'shape' => 'GatewayTimezone',
        ],
      ],
    ],
    'UpdateGatewayInformationOutput' => [
      'type' => 'structure',
      'members' => [
        'GatewayARN' => [
          'shape' => 'GatewayARN',
        ],
      ],
    ],
    'UpdateGatewaySoftwareNowInput' => [
      'type' => 'structure',
      'required' => [
        'GatewayARN',
      ],
      'members' => [
        'GatewayARN' => [
          'shape' => 'GatewayARN',
        ],
      ],
    ],
    'UpdateGatewaySoftwareNowOutput' => [
      'type' => 'structure',
      'members' => [
        'GatewayARN' => [
          'shape' => 'GatewayARN',
        ],
      ],
    ],
    'UpdateMaintenanceStartTimeInput' => [
      'type' => 'structure',
      'required' => [
        'GatewayARN',
        'HourOfDay',
        'MinuteOfHour',
        'DayOfWeek',
      ],
      'members' => [
        'GatewayARN' => [
          'shape' => 'GatewayARN',
        ],
        'HourOfDay' => [
          'shape' => 'HourOfDay',
        ],
        'MinuteOfHour' => [
          'shape' => 'MinuteOfHour',
        ],
        'DayOfWeek' => [
          'shape' => 'DayOfWeek',
        ],
      ],
    ],
    'UpdateMaintenanceStartTimeOutput' => [
      'type' => 'structure',
      'members' => [
        'GatewayARN' => [
          'shape' => 'GatewayARN',
        ],
      ],
    ],
    'UpdateSnapshotScheduleInput' => [
      'type' => 'structure',
      'required' => [
        'VolumeARN',
        'StartAt',
        'RecurrenceInHours',
      ],
      'members' => [
        'VolumeARN' => [
          'shape' => 'VolumeARN',
        ],
        'StartAt' => [
          'shape' => 'HourOfDay',
        ],
        'RecurrenceInHours' => [
          'shape' => 'RecurrenceInHours',
        ],
        'Description' => [
          'shape' => 'Description',
        ],
      ],
    ],
    'UpdateSnapshotScheduleOutput' => [
      'type' => 'structure',
      'members' => [
        'VolumeARN' => [
          'shape' => 'VolumeARN',
        ],
      ],
    ],
    'VTLDevice' => [
      'type' => 'structure',
      'members' => [
        'VTLDeviceARN' => [
          'shape' => 'VTLDeviceARN',
        ],
        'VTLDeviceType' => [
          'shape' => 'VTLDeviceType',
        ],
        'VTLDeviceVendor' => [
          'shape' => 'VTLDeviceVendor',
        ],
        'VTLDeviceProductIdentifier' => [
          'shape' => 'VTLDeviceProductIdentifier',
        ],
        'DeviceiSCSIAttributes' => [
          'shape' => 'DeviceiSCSIAttributes',
        ],
      ],
    ],
    'VTLDeviceARN' => [
      'type' => 'string',
      'min' => 50,
      'max' => 500,
    ],
    'VTLDeviceARNs' => [
      'type' => 'list',
      'member' => [
        'shape' => 'VTLDeviceARN',
      ],
    ],
    'VTLDeviceProductIdentifier' => [
      'type' => 'string',
    ],
    'VTLDeviceType' => [
      'type' => 'string',
    ],
    'VTLDeviceVendor' => [
      'type' => 'string',
    ],
    'VTLDevices' => [
      'type' => 'list',
      'member' => [
        'shape' => 'VTLDevice',
      ],
    ],
    'VolumeARN' => [
      'type' => 'string',
      'min' => 50,
      'max' => 500,
    ],
    'VolumeARNs' => [
      'type' => 'list',
      'member' => [
        'shape' => 'VolumeARN',
      ],
    ],
    'VolumeId' => [
      'type' => 'string',
      'min' => 12,
      'max' => 30,
    ],
    'VolumeInfo' => [
      'type' => 'structure',
      'members' => [
        'VolumeARN' => [
          'shape' => 'VolumeARN',
        ],
        'VolumeType' => [
          'shape' => 'VolumeType',
        ],
      ],
    ],
    'VolumeInfos' => [
      'type' => 'list',
      'member' => [
        'shape' => 'VolumeInfo',
      ],
    ],
    'VolumeRecoveryPointInfo' => [
      'type' => 'structure',
      'members' => [
        'VolumeARN' => [
          'shape' => 'VolumeARN',
        ],
        'VolumeSizeInBytes' => [
          'shape' => 'long',
        ],
        'VolumeUsageInBytes' => [
          'shape' => 'long',
        ],
        'VolumeRecoveryPointTime' => [
          'shape' => 'string',
        ],
      ],
    ],
    'VolumeRecoveryPointInfos' => [
      'type' => 'list',
      'member' => [
        'shape' => 'VolumeRecoveryPointInfo',
      ],
    ],
    'VolumeStatus' => [
      'type' => 'string',
      'min' => 3,
      'max' => 50,
    ],
    'VolumeType' => [
      'type' => 'string',
      'min' => 3,
      'max' => 100,
    ],
    'VolumeiSCSIAttributes' => [
      'type' => 'structure',
      'members' => [
        'TargetARN' => [
          'shape' => 'TargetARN',
        ],
        'NetworkInterfaceId' => [
          'shape' => 'NetworkInterfaceId',
        ],
        'NetworkInterfacePort' => [
          'shape' => 'integer',
        ],
        'LunNumber' => [
          'shape' => 'PositiveIntObject',
        ],
        'ChapEnabled' => [
          'shape' => 'boolean',
        ],
      ],
    ],
    'boolean' => [
      'type' => 'boolean',
    ],
    'double' => [
      'type' => 'double',
    ],
    'errorDetails' => [
      'type' => 'map',
      'key' => [
        'shape' => 'string',
      ],
      'value' => [
        'shape' => 'string',
      ],
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
  ],
];
