<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dingtalk\Vhrm_1_0;

use AlibabaCloud\OpenApiUtil\OpenApiUtilClient;
use AlibabaCloud\SDK\Dingtalk\Vhrm_1_0\Models\AddHrmPreentryHeaders;
use AlibabaCloud\SDK\Dingtalk\Vhrm_1_0\Models\AddHrmPreentryRequest;
use AlibabaCloud\SDK\Dingtalk\Vhrm_1_0\Models\AddHrmPreentryResponse;
use AlibabaCloud\SDK\Dingtalk\Vhrm_1_0\Models\ECertQueryHeaders;
use AlibabaCloud\SDK\Dingtalk\Vhrm_1_0\Models\ECertQueryRequest;
use AlibabaCloud\SDK\Dingtalk\Vhrm_1_0\Models\ECertQueryResponse;
use AlibabaCloud\SDK\Dingtalk\Vhrm_1_0\Models\QueryCustomEntryProcessesHeaders;
use AlibabaCloud\SDK\Dingtalk\Vhrm_1_0\Models\QueryCustomEntryProcessesRequest;
use AlibabaCloud\SDK\Dingtalk\Vhrm_1_0\Models\QueryCustomEntryProcessesResponse;
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
     * @param ECertQueryRequest $request
     *
     * @return ECertQueryResponse
     */
    public function eCertQuery($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new ECertQueryHeaders([]);

        return $this->eCertQueryWithOptions($request, $headers, $runtime);
    }

    /**
     * @param ECertQueryRequest $request
     * @param ECertQueryHeaders $headers
     * @param RuntimeOptions    $runtime
     *
     * @return ECertQueryResponse
     */
    public function eCertQueryWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->userId)) {
            @$query['userId'] = $request->userId;
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

        return ECertQueryResponse::fromMap($this->doROARequest('ECertQuery', 'hrm_1.0', 'HTTP', 'GET', 'AK', '/v1.0/hrm/eCerts', 'json', $req, $runtime));
    }

    /**
     * @param QueryCustomEntryProcessesRequest $request
     *
     * @return QueryCustomEntryProcessesResponse
     */
    public function queryCustomEntryProcesses($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new QueryCustomEntryProcessesHeaders([]);

        return $this->queryCustomEntryProcessesWithOptions($request, $headers, $runtime);
    }

    /**
     * @param QueryCustomEntryProcessesRequest $request
     * @param QueryCustomEntryProcessesHeaders $headers
     * @param RuntimeOptions                   $runtime
     *
     * @return QueryCustomEntryProcessesResponse
     */
    public function queryCustomEntryProcessesWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->operateUserId)) {
            @$query['operateUserId'] = $request->operateUserId;
        }
        if (!Utils::isUnset($request->nextToken)) {
            @$query['nextToken'] = $request->nextToken;
        }
        if (!Utils::isUnset($request->maxResults)) {
            @$query['maxResults'] = $request->maxResults;
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

        return QueryCustomEntryProcessesResponse::fromMap($this->doROARequest('QueryCustomEntryProcesses', 'hrm_1.0', 'HTTP', 'GET', 'AK', '/v1.0/hrm/customEntryProcesses', 'json', $req, $runtime));
    }

    /**
     * @param AddHrmPreentryRequest $request
     *
     * @return AddHrmPreentryResponse
     */
    public function addHrmPreentry($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new AddHrmPreentryHeaders([]);

        return $this->addHrmPreentryWithOptions($request, $headers, $runtime);
    }

    /**
     * @param AddHrmPreentryRequest $request
     * @param AddHrmPreentryHeaders $headers
     * @param RuntimeOptions        $runtime
     *
     * @return AddHrmPreentryResponse
     */
    public function addHrmPreentryWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->preEntryTime)) {
            @$body['preEntryTime'] = $request->preEntryTime;
        }
        if (!Utils::isUnset($request->name)) {
            @$body['name'] = $request->name;
        }
        if (!Utils::isUnset($request->mobile)) {
            @$body['mobile'] = $request->mobile;
        }
        if (!Utils::isUnset($request->agentId)) {
            @$body['agentId'] = $request->agentId;
        }
        if (!Utils::isUnset($request->groups)) {
            @$body['groups'] = $request->groups;
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

        return AddHrmPreentryResponse::fromMap($this->doROARequest('AddHrmPreentry', 'hrm_1.0', 'HTTP', 'POST', 'AK', '/v1.0/hrm/preentries', 'json', $req, $runtime));
    }
}
