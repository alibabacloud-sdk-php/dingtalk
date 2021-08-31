<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dingtalk\Vconference_1_0;

use AlibabaCloud\OpenApiUtil\OpenApiUtilClient;
use AlibabaCloud\SDK\Dingtalk\Vconference_1_0\Models\CloseVideoConferenceHeaders;
use AlibabaCloud\SDK\Dingtalk\Vconference_1_0\Models\CloseVideoConferenceRequest;
use AlibabaCloud\SDK\Dingtalk\Vconference_1_0\Models\CloseVideoConferenceResponse;
use AlibabaCloud\SDK\Dingtalk\Vconference_1_0\Models\CreateVideoConferenceHeaders;
use AlibabaCloud\SDK\Dingtalk\Vconference_1_0\Models\CreateVideoConferenceRequest;
use AlibabaCloud\SDK\Dingtalk\Vconference_1_0\Models\CreateVideoConferenceResponse;
use AlibabaCloud\SDK\Dingtalk\Vconference_1_0\Models\QueryConferenceInfoBatchHeaders;
use AlibabaCloud\SDK\Dingtalk\Vconference_1_0\Models\QueryConferenceInfoBatchRequest;
use AlibabaCloud\SDK\Dingtalk\Vconference_1_0\Models\QueryConferenceInfoBatchResponse;
use AlibabaCloud\SDK\Dingtalk\Vconference_1_0\Models\StartCloudRecordHeaders;
use AlibabaCloud\SDK\Dingtalk\Vconference_1_0\Models\StartCloudRecordRequest;
use AlibabaCloud\SDK\Dingtalk\Vconference_1_0\Models\StartCloudRecordResponse;
use AlibabaCloud\SDK\Dingtalk\Vconference_1_0\Models\StartStreamOutHeaders;
use AlibabaCloud\SDK\Dingtalk\Vconference_1_0\Models\StartStreamOutRequest;
use AlibabaCloud\SDK\Dingtalk\Vconference_1_0\Models\StartStreamOutResponse;
use AlibabaCloud\SDK\Dingtalk\Vconference_1_0\Models\StopCloudRecordHeaders;
use AlibabaCloud\SDK\Dingtalk\Vconference_1_0\Models\StopCloudRecordRequest;
use AlibabaCloud\SDK\Dingtalk\Vconference_1_0\Models\StopCloudRecordResponse;
use AlibabaCloud\SDK\Dingtalk\Vconference_1_0\Models\StopStreamOutHeaders;
use AlibabaCloud\SDK\Dingtalk\Vconference_1_0\Models\StopStreamOutRequest;
use AlibabaCloud\SDK\Dingtalk\Vconference_1_0\Models\StopStreamOutResponse;
use AlibabaCloud\SDK\Dingtalk\Vconference_1_0\Models\UpdateVideoConferenceExtInfoHeaders;
use AlibabaCloud\SDK\Dingtalk\Vconference_1_0\Models\UpdateVideoConferenceExtInfoResponse;
use AlibabaCloud\Tea\Utils\Utils;
use AlibabaCloud\Tea\Utils\Utils\RuntimeOptions;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\OpenApiClient;

class Dingtalk extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_endpointRule = '';
        if (Utils::empty_($this->_endpoint)) {
            $this->_endpoint = 'api.dingtalk.com';
        }
    }

    /**
     * @param CreateVideoConferenceRequest $request
     *
     * @return CreateVideoConferenceResponse
     */
    public function createVideoConference($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new CreateVideoConferenceHeaders([]);

        return $this->createVideoConferenceWithOptions($request, $headers, $runtime);
    }

    /**
     * @param CreateVideoConferenceRequest $request
     * @param CreateVideoConferenceHeaders $headers
     * @param RuntimeOptions               $runtime
     *
     * @return CreateVideoConferenceResponse
     */
    public function createVideoConferenceWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->userId)) {
            @$body['userId'] = $request->userId;
        }
        if (!Utils::isUnset($request->confTitle)) {
            @$body['confTitle'] = $request->confTitle;
        }
        if (!Utils::isUnset($request->inviteUserIds)) {
            @$body['inviteUserIds'] = $request->inviteUserIds;
        }
        $realHeaders = [];
        if (!Utils::isUnset($headers->commonHeaders)) {
            $realHeaders = $headers->commonHeaders;
        }
        if (!Utils::isUnset($headers->xAcsDingtalkAccessToken)) {
            @$realHeaders['x-acs-dingtalk-access-token'] = $headers->xAcsDingtalkAccessToken;
        }
        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);

        return CreateVideoConferenceResponse::fromMap($this->doROARequest('CreateVideoConference', 'conference_1.0', 'HTTP', 'POST', 'AK', '/v1.0/conference/videoConferences', 'json', $req, $runtime));
    }

    /**
     * @param QueryConferenceInfoBatchRequest $request
     *
     * @return QueryConferenceInfoBatchResponse
     */
    public function queryConferenceInfoBatch($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new QueryConferenceInfoBatchHeaders([]);

        return $this->queryConferenceInfoBatchWithOptions($request, $headers, $runtime);
    }

    /**
     * @param QueryConferenceInfoBatchRequest $request
     * @param QueryConferenceInfoBatchHeaders $headers
     * @param RuntimeOptions                  $runtime
     *
     * @return QueryConferenceInfoBatchResponse
     */
    public function queryConferenceInfoBatchWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->conferenceIdList)) {
            @$body['conferenceIdList'] = $request->conferenceIdList;
        }
        $realHeaders = [];
        if (!Utils::isUnset($headers->commonHeaders)) {
            $realHeaders = $headers->commonHeaders;
        }
        if (!Utils::isUnset($headers->xAcsDingtalkAccessToken)) {
            @$realHeaders['x-acs-dingtalk-access-token'] = $headers->xAcsDingtalkAccessToken;
        }
        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);

        return QueryConferenceInfoBatchResponse::fromMap($this->doROARequest('QueryConferenceInfoBatch', 'conference_1.0', 'HTTP', 'POST', 'AK', '/v1.0/conference/videoConferences/query', 'json', $req, $runtime));
    }

    /**
     * @param string                 $conferenceId
     * @param StopCloudRecordRequest $request
     *
     * @return StopCloudRecordResponse
     */
    public function stopCloudRecord($conferenceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new StopCloudRecordHeaders([]);

        return $this->stopCloudRecordWithOptions($conferenceId, $request, $headers, $runtime);
    }

    /**
     * @param string                 $conferenceId
     * @param StopCloudRecordRequest $request
     * @param StopCloudRecordHeaders $headers
     * @param RuntimeOptions         $runtime
     *
     * @return StopCloudRecordResponse
     */
    public function stopCloudRecordWithOptions($conferenceId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->unionId)) {
            @$body['unionId'] = $request->unionId;
        }
        $realHeaders = [];
        if (!Utils::isUnset($headers->commonHeaders)) {
            $realHeaders = $headers->commonHeaders;
        }
        if (!Utils::isUnset($headers->xAcsDingtalkAccessToken)) {
            @$realHeaders['x-acs-dingtalk-access-token'] = $headers->xAcsDingtalkAccessToken;
        }
        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);

        return StopCloudRecordResponse::fromMap($this->doROARequest('StopCloudRecord', 'conference_1.0', 'HTTP', 'POST', 'AK', '/v1.0/conference/videoConferences/' . $conferenceId . '/cloudRecords/stop', 'json', $req, $runtime));
    }

    /**
     * @param string $conferenceId
     *
     * @return UpdateVideoConferenceExtInfoResponse
     */
    public function updateVideoConferenceExtInfo($conferenceId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new UpdateVideoConferenceExtInfoHeaders([]);

        return $this->updateVideoConferenceExtInfoWithOptions($conferenceId, $headers, $runtime);
    }

    /**
     * @param string                              $conferenceId
     * @param UpdateVideoConferenceExtInfoHeaders $headers
     * @param RuntimeOptions                      $runtime
     *
     * @return UpdateVideoConferenceExtInfoResponse
     */
    public function updateVideoConferenceExtInfoWithOptions($conferenceId, $headers, $runtime)
    {
        $realHeaders = [];
        if (!Utils::isUnset($headers->commonHeaders)) {
            $realHeaders = $headers->commonHeaders;
        }
        if (!Utils::isUnset($headers->xAcsDingtalkAccessToken)) {
            @$realHeaders['x-acs-dingtalk-access-token'] = $headers->xAcsDingtalkAccessToken;
        }
        $req = new OpenApiRequest([
            'headers' => $realHeaders,
        ]);

        return UpdateVideoConferenceExtInfoResponse::fromMap($this->doROARequest('UpdateVideoConferenceExtInfo', 'conference_1.0', 'HTTP', 'PUT', 'AK', '/v1.0/conference/videoConferences/' . $conferenceId . '/extInfo', 'json', $req, $runtime));
    }

    /**
     * @param string                      $conferenceId
     * @param CloseVideoConferenceRequest $request
     *
     * @return CloseVideoConferenceResponse
     */
    public function closeVideoConference($conferenceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new CloseVideoConferenceHeaders([]);

        return $this->closeVideoConferenceWithOptions($conferenceId, $request, $headers, $runtime);
    }

    /**
     * @param string                      $conferenceId
     * @param CloseVideoConferenceRequest $request
     * @param CloseVideoConferenceHeaders $headers
     * @param RuntimeOptions              $runtime
     *
     * @return CloseVideoConferenceResponse
     */
    public function closeVideoConferenceWithOptions($conferenceId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->unionId)) {
            @$query['unionId'] = $request->unionId;
        }
        $realHeaders = [];
        if (!Utils::isUnset($headers->commonHeaders)) {
            $realHeaders = $headers->commonHeaders;
        }
        if (!Utils::isUnset($headers->xAcsDingtalkAccessToken)) {
            @$realHeaders['x-acs-dingtalk-access-token'] = $headers->xAcsDingtalkAccessToken;
        }
        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'query'   => OpenApiUtilClient::query($query),
        ]);

        return CloseVideoConferenceResponse::fromMap($this->doROARequest('CloseVideoConference', 'conference_1.0', 'HTTP', 'DELETE', 'AK', '/v1.0/conference/videoConferences/' . $conferenceId . '', 'json', $req, $runtime));
    }

    /**
     * @param string               $conferenceId
     * @param StopStreamOutRequest $request
     *
     * @return StopStreamOutResponse
     */
    public function stopStreamOut($conferenceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new StopStreamOutHeaders([]);

        return $this->stopStreamOutWithOptions($conferenceId, $request, $headers, $runtime);
    }

    /**
     * @param string               $conferenceId
     * @param StopStreamOutRequest $request
     * @param StopStreamOutHeaders $headers
     * @param RuntimeOptions       $runtime
     *
     * @return StopStreamOutResponse
     */
    public function stopStreamOutWithOptions($conferenceId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->streamId)) {
            @$body['streamId'] = $request->streamId;
        }
        if (!Utils::isUnset($request->stopAllStream)) {
            @$body['stopAllStream'] = $request->stopAllStream;
        }
        if (!Utils::isUnset($request->unionId)) {
            @$body['unionId'] = $request->unionId;
        }
        $realHeaders = [];
        if (!Utils::isUnset($headers->commonHeaders)) {
            $realHeaders = $headers->commonHeaders;
        }
        if (!Utils::isUnset($headers->xAcsDingtalkAccessToken)) {
            @$realHeaders['x-acs-dingtalk-access-token'] = $headers->xAcsDingtalkAccessToken;
        }
        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);

        return StopStreamOutResponse::fromMap($this->doROARequest('StopStreamOut', 'conference_1.0', 'HTTP', 'POST', 'AK', '/v1.0/conference/videoConferences/' . $conferenceId . '/streamOuts/stop', 'json', $req, $runtime));
    }

    /**
     * @param string                  $conferenceId
     * @param StartCloudRecordRequest $request
     *
     * @return StartCloudRecordResponse
     */
    public function startCloudRecord($conferenceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new StartCloudRecordHeaders([]);

        return $this->startCloudRecordWithOptions($conferenceId, $request, $headers, $runtime);
    }

    /**
     * @param string                  $conferenceId
     * @param StartCloudRecordRequest $request
     * @param StartCloudRecordHeaders $headers
     * @param RuntimeOptions          $runtime
     *
     * @return StartCloudRecordResponse
     */
    public function startCloudRecordWithOptions($conferenceId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->unionId)) {
            @$body['unionId'] = $request->unionId;
        }
        if (!Utils::isUnset($request->smallWindowPosition)) {
            @$body['smallWindowPosition'] = $request->smallWindowPosition;
        }
        if (!Utils::isUnset($request->mode)) {
            @$body['mode'] = $request->mode;
        }
        $realHeaders = [];
        if (!Utils::isUnset($headers->commonHeaders)) {
            $realHeaders = $headers->commonHeaders;
        }
        if (!Utils::isUnset($headers->xAcsDingtalkAccessToken)) {
            @$realHeaders['x-acs-dingtalk-access-token'] = $headers->xAcsDingtalkAccessToken;
        }
        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);

        return StartCloudRecordResponse::fromMap($this->doROARequest('StartCloudRecord', 'conference_1.0', 'HTTP', 'POST', 'AK', '/v1.0/conference/videoConferences/' . $conferenceId . '/cloudRecords/start', 'json', $req, $runtime));
    }

    /**
     * @param string                $conferenceId
     * @param StartStreamOutRequest $request
     *
     * @return StartStreamOutResponse
     */
    public function startStreamOut($conferenceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new StartStreamOutHeaders([]);

        return $this->startStreamOutWithOptions($conferenceId, $request, $headers, $runtime);
    }

    /**
     * @param string                $conferenceId
     * @param StartStreamOutRequest $request
     * @param StartStreamOutHeaders $headers
     * @param RuntimeOptions        $runtime
     *
     * @return StartStreamOutResponse
     */
    public function startStreamOutWithOptions($conferenceId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->unionId)) {
            @$body['unionId'] = $request->unionId;
        }
        if (!Utils::isUnset($request->needHostJoin)) {
            @$body['needHostJoin'] = $request->needHostJoin;
        }
        if (!Utils::isUnset($request->streamUrlList)) {
            @$body['streamUrlList'] = $request->streamUrlList;
        }
        if (!Utils::isUnset($request->streamName)) {
            @$body['streamName'] = $request->streamName;
        }
        if (!Utils::isUnset($request->mode)) {
            @$body['mode'] = $request->mode;
        }
        if (!Utils::isUnset($request->smallWindowPosition)) {
            @$body['smallWindowPosition'] = $request->smallWindowPosition;
        }
        $realHeaders = [];
        if (!Utils::isUnset($headers->commonHeaders)) {
            $realHeaders = $headers->commonHeaders;
        }
        if (!Utils::isUnset($headers->xAcsDingtalkAccessToken)) {
            @$realHeaders['x-acs-dingtalk-access-token'] = $headers->xAcsDingtalkAccessToken;
        }
        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);

        return StartStreamOutResponse::fromMap($this->doROARequest('StartStreamOut', 'conference_1.0', 'HTTP', 'POST', 'AK', '/v1.0/conference/videoConferences/' . $conferenceId . '/streamOuts/start', 'json', $req, $runtime));
    }
}
