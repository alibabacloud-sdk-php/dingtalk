<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dingtalk\Vagoal_1_0;

use AlibabaCloud\OpenApiUtil\OpenApiUtilClient;
use AlibabaCloud\SDK\Dingtalk\Vagoal_1_0\Models\AgoalCreateProgressHeaders;
use AlibabaCloud\SDK\Dingtalk\Vagoal_1_0\Models\AgoalCreateProgressRequest;
use AlibabaCloud\SDK\Dingtalk\Vagoal_1_0\Models\AgoalCreateProgressResponse;
use AlibabaCloud\SDK\Dingtalk\Vagoal_1_0\Models\AgoalEntityCreateHeaders;
use AlibabaCloud\SDK\Dingtalk\Vagoal_1_0\Models\AgoalEntityCreateRequest;
use AlibabaCloud\SDK\Dingtalk\Vagoal_1_0\Models\AgoalEntityCreateResponse;
use AlibabaCloud\SDK\Dingtalk\Vagoal_1_0\Models\AgoalEntityUpdateHeaders;
use AlibabaCloud\SDK\Dingtalk\Vagoal_1_0\Models\AgoalEntityUpdateRequest;
use AlibabaCloud\SDK\Dingtalk\Vagoal_1_0\Models\AgoalEntityUpdateResponse;
use AlibabaCloud\SDK\Dingtalk\Vagoal_1_0\Models\AgoalFieldUpdateHeaders;
use AlibabaCloud\SDK\Dingtalk\Vagoal_1_0\Models\AgoalFieldUpdateRequest;
use AlibabaCloud\SDK\Dingtalk\Vagoal_1_0\Models\AgoalFieldUpdateResponse;
use AlibabaCloud\SDK\Dingtalk\Vagoal_1_0\Models\AgoalFieldUpdateShrinkRequest;
use AlibabaCloud\SDK\Dingtalk\Vagoal_1_0\Models\AgoalObjectiveKeyActionListHeaders;
use AlibabaCloud\SDK\Dingtalk\Vagoal_1_0\Models\AgoalObjectiveKeyActionListRequest;
use AlibabaCloud\SDK\Dingtalk\Vagoal_1_0\Models\AgoalObjectiveKeyActionListResponse;
use AlibabaCloud\SDK\Dingtalk\Vagoal_1_0\Models\AgoalObjectiveRulePeriodListHeaders;
use AlibabaCloud\SDK\Dingtalk\Vagoal_1_0\Models\AgoalObjectiveRulePeriodListRequest;
use AlibabaCloud\SDK\Dingtalk\Vagoal_1_0\Models\AgoalObjectiveRulePeriodListResponse;
use AlibabaCloud\SDK\Dingtalk\Vagoal_1_0\Models\AgoalOrgObjectiveListHeaders;
use AlibabaCloud\SDK\Dingtalk\Vagoal_1_0\Models\AgoalOrgObjectiveListRequest;
use AlibabaCloud\SDK\Dingtalk\Vagoal_1_0\Models\AgoalOrgObjectiveListResponse;
use AlibabaCloud\SDK\Dingtalk\Vagoal_1_0\Models\AgoalOrgObjectiveQueryHeaders;
use AlibabaCloud\SDK\Dingtalk\Vagoal_1_0\Models\AgoalOrgObjectiveQueryRequest;
use AlibabaCloud\SDK\Dingtalk\Vagoal_1_0\Models\AgoalOrgObjectiveQueryResponse;
use AlibabaCloud\SDK\Dingtalk\Vagoal_1_0\Models\AgoalOrgObjectiveRuleListHeaders;
use AlibabaCloud\SDK\Dingtalk\Vagoal_1_0\Models\AgoalOrgObjectiveRuleListResponse;
use AlibabaCloud\SDK\Dingtalk\Vagoal_1_0\Models\AgoalPerfTaskCreateHeaders;
use AlibabaCloud\SDK\Dingtalk\Vagoal_1_0\Models\AgoalPerfTaskCreateRequest;
use AlibabaCloud\SDK\Dingtalk\Vagoal_1_0\Models\AgoalPerfTaskCreateResponse;
use AlibabaCloud\SDK\Dingtalk\Vagoal_1_0\Models\AgoalPerfTaskUpdateHeaders;
use AlibabaCloud\SDK\Dingtalk\Vagoal_1_0\Models\AgoalPerfTaskUpdateRequest;
use AlibabaCloud\SDK\Dingtalk\Vagoal_1_0\Models\AgoalPerfTaskUpdateResponse;
use AlibabaCloud\SDK\Dingtalk\Vagoal_1_0\Models\AgoalPeriodListHeaders;
use AlibabaCloud\SDK\Dingtalk\Vagoal_1_0\Models\AgoalPeriodListRequest;
use AlibabaCloud\SDK\Dingtalk\Vagoal_1_0\Models\AgoalPeriodListResponse;
use AlibabaCloud\SDK\Dingtalk\Vagoal_1_0\Models\AgoalPeriodListShrinkRequest;
use AlibabaCloud\SDK\Dingtalk\Vagoal_1_0\Models\AgoalSendMessageHeaders;
use AlibabaCloud\SDK\Dingtalk\Vagoal_1_0\Models\AgoalSendMessageRequest;
use AlibabaCloud\SDK\Dingtalk\Vagoal_1_0\Models\AgoalSendMessageResponse;
use AlibabaCloud\SDK\Dingtalk\Vagoal_1_0\Models\AgoalUserAdminListHeaders;
use AlibabaCloud\SDK\Dingtalk\Vagoal_1_0\Models\AgoalUserAdminListResponse;
use AlibabaCloud\SDK\Dingtalk\Vagoal_1_0\Models\AgoalUserObjectiveListHeaders;
use AlibabaCloud\SDK\Dingtalk\Vagoal_1_0\Models\AgoalUserObjectiveListRequest;
use AlibabaCloud\SDK\Dingtalk\Vagoal_1_0\Models\AgoalUserObjectiveListResponse;
use AlibabaCloud\SDK\Dingtalk\Vagoal_1_0\Models\AgoalUserSubAdminListHeaders;
use AlibabaCloud\SDK\Dingtalk\Vagoal_1_0\Models\AgoalUserSubAdminListRequest;
use AlibabaCloud\SDK\Dingtalk\Vagoal_1_0\Models\AgoalUserSubAdminListResponse;
use AlibabaCloud\Tea\Utils\Utils;
use AlibabaCloud\Tea\Utils\Utils\RuntimeOptions;
use Darabonba\GatewayDingTalk\Client;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;

class Dingtalk extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
        $gatewayClient = new Client();
        $this->_spi = $gatewayClient;
        $this->_endpointRule = '';
        if (Utils::empty_($this->_endpoint)) {
            $this->_endpoint = 'api.dingtalk.com';
        }
    }

    /**
     * @summary 创建目标进展
     *  *
     * @param AgoalCreateProgressRequest $request AgoalCreateProgressRequest
     * @param AgoalCreateProgressHeaders $headers AgoalCreateProgressHeaders
     * @param RuntimeOptions             $runtime runtime options for this request RuntimeOptions
     *
     * @return AgoalCreateProgressResponse AgoalCreateProgressResponse
     */
    public function agoalCreateProgressWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->krId)) {
            $body['krId'] = $request->krId;
        }
        if (!Utils::isUnset($request->mergeIntoLatestProgress)) {
            $body['mergeIntoLatestProgress'] = $request->mergeIntoLatestProgress;
        }
        if (!Utils::isUnset($request->objectiveId)) {
            $body['objectiveId'] = $request->objectiveId;
        }
        if (!Utils::isUnset($request->plainText)) {
            $body['plainText'] = $request->plainText;
        }
        if (!Utils::isUnset($request->progress)) {
            $body['progress'] = $request->progress;
        }
        if (!Utils::isUnset($request->progressMergePeriod)) {
            $body['progressMergePeriod'] = $request->progressMergePeriod;
        }
        $realHeaders = [];
        if (!Utils::isUnset($headers->commonHeaders)) {
            $realHeaders = $headers->commonHeaders;
        }
        if (!Utils::isUnset($headers->xAcsDingtalkAccessToken)) {
            $realHeaders['x-acs-dingtalk-access-token'] = Utils::toJSONString($headers->xAcsDingtalkAccessToken);
        }
        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'AgoalCreateProgress',
            'version' => 'agoal_1.0',
            'protocol' => 'HTTP',
            'pathname' => '/v1.0/agoal/objectives/progresses',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'none',
            'bodyType' => 'json',
        ]);

        return AgoalCreateProgressResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary 创建目标进展
     *  *
     * @param AgoalCreateProgressRequest $request AgoalCreateProgressRequest
     *
     * @return AgoalCreateProgressResponse AgoalCreateProgressResponse
     */
    public function agoalCreateProgress($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new AgoalCreateProgressHeaders([]);

        return $this->agoalCreateProgressWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 创建业务实体
     *  *
     * @param AgoalEntityCreateRequest $request AgoalEntityCreateRequest
     * @param AgoalEntityCreateHeaders $headers AgoalEntityCreateHeaders
     * @param RuntimeOptions           $runtime runtime options for this request RuntimeOptions
     *
     * @return AgoalEntityCreateResponse AgoalEntityCreateResponse
     */
    public function agoalEntityCreateWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $realHeaders = [];
        if (!Utils::isUnset($headers->commonHeaders)) {
            $realHeaders = $headers->commonHeaders;
        }
        if (!Utils::isUnset($headers->xAcsDingtalkAccessToken)) {
            $realHeaders['x-acs-dingtalk-access-token'] = Utils::toJSONString($headers->xAcsDingtalkAccessToken);
        }
        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'body' => Utils::toArray($request->body),
        ]);
        $params = new Params([
            'action' => 'AgoalEntityCreate',
            'version' => 'agoal_1.0',
            'protocol' => 'HTTP',
            'pathname' => '/v1.0/agoal/entities',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'none',
            'bodyType' => 'json',
        ]);

        return AgoalEntityCreateResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary 创建业务实体
     *  *
     * @param AgoalEntityCreateRequest $request AgoalEntityCreateRequest
     *
     * @return AgoalEntityCreateResponse AgoalEntityCreateResponse
     */
    public function agoalEntityCreate($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new AgoalEntityCreateHeaders([]);

        return $this->agoalEntityCreateWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 更新业务实体
     *  *
     * @param AgoalEntityUpdateRequest $request AgoalEntityUpdateRequest
     * @param AgoalEntityUpdateHeaders $headers AgoalEntityUpdateHeaders
     * @param RuntimeOptions           $runtime runtime options for this request RuntimeOptions
     *
     * @return AgoalEntityUpdateResponse AgoalEntityUpdateResponse
     */
    public function agoalEntityUpdateWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $realHeaders = [];
        if (!Utils::isUnset($headers->commonHeaders)) {
            $realHeaders = $headers->commonHeaders;
        }
        if (!Utils::isUnset($headers->xAcsDingtalkAccessToken)) {
            $realHeaders['x-acs-dingtalk-access-token'] = Utils::toJSONString($headers->xAcsDingtalkAccessToken);
        }
        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'body' => Utils::toArray($request->body),
        ]);
        $params = new Params([
            'action' => 'AgoalEntityUpdate',
            'version' => 'agoal_1.0',
            'protocol' => 'HTTP',
            'pathname' => '/v1.0/agoal/entities',
            'method' => 'PUT',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'none',
            'bodyType' => 'json',
        ]);

        return AgoalEntityUpdateResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary 更新业务实体
     *  *
     * @param AgoalEntityUpdateRequest $request AgoalEntityUpdateRequest
     *
     * @return AgoalEntityUpdateResponse AgoalEntityUpdateResponse
     */
    public function agoalEntityUpdate($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new AgoalEntityUpdateHeaders([]);

        return $this->agoalEntityUpdateWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 更新 Agoal 字段值
     *  *
     * @param AgoalFieldUpdateRequest $tmpReq  AgoalFieldUpdateRequest
     * @param AgoalFieldUpdateHeaders $headers AgoalFieldUpdateHeaders
     * @param RuntimeOptions          $runtime runtime options for this request RuntimeOptions
     *
     * @return AgoalFieldUpdateResponse AgoalFieldUpdateResponse
     */
    public function agoalFieldUpdateWithOptions($tmpReq, $headers, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new AgoalFieldUpdateShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->body)) {
            $request->bodyShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->body, 'body', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->bodyShrink)) {
            $query['body'] = $request->bodyShrink;
        }
        $realHeaders = [];
        if (!Utils::isUnset($headers->commonHeaders)) {
            $realHeaders = $headers->commonHeaders;
        }
        if (!Utils::isUnset($headers->xAcsDingtalkAccessToken)) {
            $realHeaders['x-acs-dingtalk-access-token'] = Utils::toJSONString($headers->xAcsDingtalkAccessToken);
        }
        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action' => 'AgoalFieldUpdate',
            'version' => 'agoal_1.0',
            'protocol' => 'HTTP',
            'pathname' => '/v1.0/agoal/fields',
            'method' => 'PUT',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'none',
            'bodyType' => 'json',
        ]);

        return AgoalFieldUpdateResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary 更新 Agoal 字段值
     *  *
     * @param AgoalFieldUpdateRequest $request AgoalFieldUpdateRequest
     *
     * @return AgoalFieldUpdateResponse AgoalFieldUpdateResponse
     */
    public function agoalFieldUpdate($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new AgoalFieldUpdateHeaders([]);

        return $this->agoalFieldUpdateWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 获取Agoal指定目标或者关键结果关联的关键行动
     *  *
     * @param AgoalObjectiveKeyActionListRequest $request AgoalObjectiveKeyActionListRequest
     * @param AgoalObjectiveKeyActionListHeaders $headers AgoalObjectiveKeyActionListHeaders
     * @param RuntimeOptions                     $runtime runtime options for this request RuntimeOptions
     *
     * @return AgoalObjectiveKeyActionListResponse AgoalObjectiveKeyActionListResponse
     */
    public function agoalObjectiveKeyActionListWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->dingUserId)) {
            $query['dingUserId'] = $request->dingUserId;
        }
        if (!Utils::isUnset($request->keyResultId)) {
            $query['keyResultId'] = $request->keyResultId;
        }
        if (!Utils::isUnset($request->objectiveId)) {
            $query['objectiveId'] = $request->objectiveId;
        }
        $realHeaders = [];
        if (!Utils::isUnset($headers->commonHeaders)) {
            $realHeaders = $headers->commonHeaders;
        }
        if (!Utils::isUnset($headers->xAcsDingtalkAccessToken)) {
            $realHeaders['x-acs-dingtalk-access-token'] = Utils::toJSONString($headers->xAcsDingtalkAccessToken);
        }
        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action' => 'AgoalObjectiveKeyActionList',
            'version' => 'agoal_1.0',
            'protocol' => 'HTTP',
            'pathname' => '/v1.0/agoal/objectives/keyActionLists',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'none',
            'bodyType' => 'json',
        ]);

        return AgoalObjectiveKeyActionListResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary 获取Agoal指定目标或者关键结果关联的关键行动
     *  *
     * @param AgoalObjectiveKeyActionListRequest $request AgoalObjectiveKeyActionListRequest
     *
     * @return AgoalObjectiveKeyActionListResponse AgoalObjectiveKeyActionListResponse
     */
    public function agoalObjectiveKeyActionList($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new AgoalObjectiveKeyActionListHeaders([]);

        return $this->agoalObjectiveKeyActionListWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 获取Agoal目标规则下的周期列表
     *  *
     * @param AgoalObjectiveRulePeriodListRequest $request AgoalObjectiveRulePeriodListRequest
     * @param AgoalObjectiveRulePeriodListHeaders $headers AgoalObjectiveRulePeriodListHeaders
     * @param RuntimeOptions                      $runtime runtime options for this request RuntimeOptions
     *
     * @return AgoalObjectiveRulePeriodListResponse AgoalObjectiveRulePeriodListResponse
     */
    public function agoalObjectiveRulePeriodListWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->objectiveRuleId)) {
            $query['objectiveRuleId'] = $request->objectiveRuleId;
        }
        $realHeaders = [];
        if (!Utils::isUnset($headers->commonHeaders)) {
            $realHeaders = $headers->commonHeaders;
        }
        if (!Utils::isUnset($headers->xAcsDingtalkAccessToken)) {
            $realHeaders['x-acs-dingtalk-access-token'] = Utils::toJSONString($headers->xAcsDingtalkAccessToken);
        }
        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action' => 'AgoalObjectiveRulePeriodList',
            'version' => 'agoal_1.0',
            'protocol' => 'HTTP',
            'pathname' => '/v1.0/agoal/objectiveRules/periodLists',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'none',
            'bodyType' => 'json',
        ]);

        return AgoalObjectiveRulePeriodListResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary 获取Agoal目标规则下的周期列表
     *  *
     * @param AgoalObjectiveRulePeriodListRequest $request AgoalObjectiveRulePeriodListRequest
     *
     * @return AgoalObjectiveRulePeriodListResponse AgoalObjectiveRulePeriodListResponse
     */
    public function agoalObjectiveRulePeriodList($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new AgoalObjectiveRulePeriodListHeaders([]);

        return $this->agoalObjectiveRulePeriodListWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 获取 Agoal 组织目标列表
     *  *
     * @param AgoalOrgObjectiveListRequest $request AgoalOrgObjectiveListRequest
     * @param AgoalOrgObjectiveListHeaders $headers AgoalOrgObjectiveListHeaders
     * @param RuntimeOptions               $runtime runtime options for this request RuntimeOptions
     *
     * @return AgoalOrgObjectiveListResponse AgoalOrgObjectiveListResponse
     */
    public function agoalOrgObjectiveListWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->dingTeamId)) {
            $query['dingTeamId'] = $request->dingTeamId;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $query['pageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['pageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->periodId)) {
            $query['periodId'] = $request->periodId;
        }
        $realHeaders = [];
        if (!Utils::isUnset($headers->commonHeaders)) {
            $realHeaders = $headers->commonHeaders;
        }
        if (!Utils::isUnset($headers->xAcsDingtalkAccessToken)) {
            $realHeaders['x-acs-dingtalk-access-token'] = Utils::toJSONString($headers->xAcsDingtalkAccessToken);
        }
        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action' => 'AgoalOrgObjectiveList',
            'version' => 'agoal_1.0',
            'protocol' => 'HTTP',
            'pathname' => '/v1.0/agoal/orgObjectives/list',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'none',
            'bodyType' => 'json',
        ]);

        return AgoalOrgObjectiveListResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary 获取 Agoal 组织目标列表
     *  *
     * @param AgoalOrgObjectiveListRequest $request AgoalOrgObjectiveListRequest
     *
     * @return AgoalOrgObjectiveListResponse AgoalOrgObjectiveListResponse
     */
    public function agoalOrgObjectiveList($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new AgoalOrgObjectiveListHeaders([]);

        return $this->agoalOrgObjectiveListWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 查询组织目标详情
     *  *
     * @param AgoalOrgObjectiveQueryRequest $request AgoalOrgObjectiveQueryRequest
     * @param AgoalOrgObjectiveQueryHeaders $headers AgoalOrgObjectiveQueryHeaders
     * @param RuntimeOptions                $runtime runtime options for this request RuntimeOptions
     *
     * @return AgoalOrgObjectiveQueryResponse AgoalOrgObjectiveQueryResponse
     */
    public function agoalOrgObjectiveQueryWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->objectiveId)) {
            $query['objectiveId'] = $request->objectiveId;
        }
        $realHeaders = [];
        if (!Utils::isUnset($headers->commonHeaders)) {
            $realHeaders = $headers->commonHeaders;
        }
        if (!Utils::isUnset($headers->xAcsDingtalkAccessToken)) {
            $realHeaders['x-acs-dingtalk-access-token'] = Utils::toJSONString($headers->xAcsDingtalkAccessToken);
        }
        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action' => 'AgoalOrgObjectiveQuery',
            'version' => 'agoal_1.0',
            'protocol' => 'HTTP',
            'pathname' => '/v1.0/agoal/orgObjectives',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'none',
            'bodyType' => 'json',
        ]);

        return AgoalOrgObjectiveQueryResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary 查询组织目标详情
     *  *
     * @param AgoalOrgObjectiveQueryRequest $request AgoalOrgObjectiveQueryRequest
     *
     * @return AgoalOrgObjectiveQueryResponse AgoalOrgObjectiveQueryResponse
     */
    public function agoalOrgObjectiveQuery($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new AgoalOrgObjectiveQueryHeaders([]);

        return $this->agoalOrgObjectiveQueryWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 获取Agoal目标规则列表
     *  *
     * @param AgoalOrgObjectiveRuleListHeaders $headers AgoalOrgObjectiveRuleListHeaders
     * @param RuntimeOptions                   $runtime runtime options for this request RuntimeOptions
     *
     * @return AgoalOrgObjectiveRuleListResponse AgoalOrgObjectiveRuleListResponse
     */
    public function agoalOrgObjectiveRuleListWithOptions($headers, $runtime)
    {
        $realHeaders = [];
        if (!Utils::isUnset($headers->commonHeaders)) {
            $realHeaders = $headers->commonHeaders;
        }
        if (!Utils::isUnset($headers->xAcsDingtalkAccessToken)) {
            $realHeaders['x-acs-dingtalk-access-token'] = Utils::toJSONString($headers->xAcsDingtalkAccessToken);
        }
        $req = new OpenApiRequest([
            'headers' => $realHeaders,
        ]);
        $params = new Params([
            'action' => 'AgoalOrgObjectiveRuleList',
            'version' => 'agoal_1.0',
            'protocol' => 'HTTP',
            'pathname' => '/v1.0/agoal/objectiveRules/lists',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'none',
            'bodyType' => 'json',
        ]);

        return AgoalOrgObjectiveRuleListResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary 获取Agoal目标规则列表
     *  *
     * @return AgoalOrgObjectiveRuleListResponse AgoalOrgObjectiveRuleListResponse
     */
    public function agoalOrgObjectiveRuleList()
    {
        $runtime = new RuntimeOptions([]);
        $headers = new AgoalOrgObjectiveRuleListHeaders([]);

        return $this->agoalOrgObjectiveRuleListWithOptions($headers, $runtime);
    }

    /**
     * @summary 创建考核任务
     *  *
     * @param AgoalPerfTaskCreateRequest $request AgoalPerfTaskCreateRequest
     * @param AgoalPerfTaskCreateHeaders $headers AgoalPerfTaskCreateHeaders
     * @param RuntimeOptions             $runtime runtime options for this request RuntimeOptions
     *
     * @return AgoalPerfTaskCreateResponse AgoalPerfTaskCreateResponse
     */
    public function agoalPerfTaskCreateWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $realHeaders = [];
        if (!Utils::isUnset($headers->commonHeaders)) {
            $realHeaders = $headers->commonHeaders;
        }
        if (!Utils::isUnset($headers->xAcsDingtalkAccessToken)) {
            $realHeaders['x-acs-dingtalk-access-token'] = Utils::toJSONString($headers->xAcsDingtalkAccessToken);
        }
        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'body' => Utils::toArray($request->body),
        ]);
        $params = new Params([
            'action' => 'AgoalPerfTaskCreate',
            'version' => 'agoal_1.0',
            'protocol' => 'HTTP',
            'pathname' => '/v1.0/agoal/perfTasks',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'none',
            'bodyType' => 'json',
        ]);

        return AgoalPerfTaskCreateResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary 创建考核任务
     *  *
     * @param AgoalPerfTaskCreateRequest $request AgoalPerfTaskCreateRequest
     *
     * @return AgoalPerfTaskCreateResponse AgoalPerfTaskCreateResponse
     */
    public function agoalPerfTaskCreate($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new AgoalPerfTaskCreateHeaders([]);

        return $this->agoalPerfTaskCreateWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 更新考核任务
     *  *
     * @param AgoalPerfTaskUpdateRequest $request AgoalPerfTaskUpdateRequest
     * @param AgoalPerfTaskUpdateHeaders $headers AgoalPerfTaskUpdateHeaders
     * @param RuntimeOptions             $runtime runtime options for this request RuntimeOptions
     *
     * @return AgoalPerfTaskUpdateResponse AgoalPerfTaskUpdateResponse
     */
    public function agoalPerfTaskUpdateWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $realHeaders = [];
        if (!Utils::isUnset($headers->commonHeaders)) {
            $realHeaders = $headers->commonHeaders;
        }
        if (!Utils::isUnset($headers->xAcsDingtalkAccessToken)) {
            $realHeaders['x-acs-dingtalk-access-token'] = Utils::toJSONString($headers->xAcsDingtalkAccessToken);
        }
        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'body' => Utils::toArray($request->body),
        ]);
        $params = new Params([
            'action' => 'AgoalPerfTaskUpdate',
            'version' => 'agoal_1.0',
            'protocol' => 'HTTP',
            'pathname' => '/v1.0/agoal/perfTasks',
            'method' => 'PUT',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'none',
            'bodyType' => 'json',
        ]);

        return AgoalPerfTaskUpdateResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary 更新考核任务
     *  *
     * @param AgoalPerfTaskUpdateRequest $request AgoalPerfTaskUpdateRequest
     *
     * @return AgoalPerfTaskUpdateResponse AgoalPerfTaskUpdateResponse
     */
    public function agoalPerfTaskUpdate($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new AgoalPerfTaskUpdateHeaders([]);

        return $this->agoalPerfTaskUpdateWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 获取 Agoal 周期列表
     *  *
     * @param AgoalPeriodListRequest $tmpReq  AgoalPeriodListRequest
     * @param AgoalPeriodListHeaders $headers AgoalPeriodListHeaders
     * @param RuntimeOptions         $runtime runtime options for this request RuntimeOptions
     *
     * @return AgoalPeriodListResponse AgoalPeriodListResponse
     */
    public function agoalPeriodListWithOptions($tmpReq, $headers, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new AgoalPeriodListShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->body)) {
            $request->bodyShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->body, 'body', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->bodyShrink)) {
            $query['body'] = $request->bodyShrink;
        }
        $realHeaders = [];
        if (!Utils::isUnset($headers->commonHeaders)) {
            $realHeaders = $headers->commonHeaders;
        }
        if (!Utils::isUnset($headers->xAcsDingtalkAccessToken)) {
            $realHeaders['x-acs-dingtalk-access-token'] = Utils::toJSONString($headers->xAcsDingtalkAccessToken);
        }
        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action' => 'AgoalPeriodList',
            'version' => 'agoal_1.0',
            'protocol' => 'HTTP',
            'pathname' => '/v1.0/agoal/periods/list',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'none',
            'bodyType' => 'json',
        ]);

        return AgoalPeriodListResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary 获取 Agoal 周期列表
     *  *
     * @param AgoalPeriodListRequest $request AgoalPeriodListRequest
     *
     * @return AgoalPeriodListResponse AgoalPeriodListResponse
     */
    public function agoalPeriodList($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new AgoalPeriodListHeaders([]);

        return $this->agoalPeriodListWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary Agoal消息发送
     *  *
     * @param AgoalSendMessageRequest $request AgoalSendMessageRequest
     * @param AgoalSendMessageHeaders $headers AgoalSendMessageHeaders
     * @param RuntimeOptions          $runtime runtime options for this request RuntimeOptions
     *
     * @return AgoalSendMessageResponse AgoalSendMessageResponse
     */
    public function agoalSendMessageWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->mobileUrl)) {
            $body['mobileUrl'] = $request->mobileUrl;
        }
        if (!Utils::isUnset($request->params)) {
            $body['params'] = $request->params;
        }
        if (!Utils::isUnset($request->pcUrl)) {
            $body['pcUrl'] = $request->pcUrl;
        }
        if (!Utils::isUnset($request->sourceDingUserId)) {
            $body['sourceDingUserId'] = $request->sourceDingUserId;
        }
        if (!Utils::isUnset($request->targetDingUserIds)) {
            $body['targetDingUserIds'] = $request->targetDingUserIds;
        }
        if (!Utils::isUnset($request->templateId)) {
            $body['templateId'] = $request->templateId;
        }
        $realHeaders = [];
        if (!Utils::isUnset($headers->commonHeaders)) {
            $realHeaders = $headers->commonHeaders;
        }
        if (!Utils::isUnset($headers->xAcsDingtalkAccessToken)) {
            $realHeaders['x-acs-dingtalk-access-token'] = Utils::toJSONString($headers->xAcsDingtalkAccessToken);
        }
        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'AgoalSendMessage',
            'version' => 'agoal_1.0',
            'protocol' => 'HTTP',
            'pathname' => '/v1.0/agoal/messages/send',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'none',
            'bodyType' => 'json',
        ]);

        return AgoalSendMessageResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Agoal消息发送
     *  *
     * @param AgoalSendMessageRequest $request AgoalSendMessageRequest
     *
     * @return AgoalSendMessageResponse AgoalSendMessageResponse
     */
    public function agoalSendMessage($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new AgoalSendMessageHeaders([]);

        return $this->agoalSendMessageWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 获取Agoal管理员列表
     *  *
     * @param AgoalUserAdminListHeaders $headers AgoalUserAdminListHeaders
     * @param RuntimeOptions            $runtime runtime options for this request RuntimeOptions
     *
     * @return AgoalUserAdminListResponse AgoalUserAdminListResponse
     */
    public function agoalUserAdminListWithOptions($headers, $runtime)
    {
        $realHeaders = [];
        if (!Utils::isUnset($headers->commonHeaders)) {
            $realHeaders = $headers->commonHeaders;
        }
        if (!Utils::isUnset($headers->xAcsDingtalkAccessToken)) {
            $realHeaders['x-acs-dingtalk-access-token'] = Utils::toJSONString($headers->xAcsDingtalkAccessToken);
        }
        $req = new OpenApiRequest([
            'headers' => $realHeaders,
        ]);
        $params = new Params([
            'action' => 'AgoalUserAdminList',
            'version' => 'agoal_1.0',
            'protocol' => 'HTTP',
            'pathname' => '/v1.0/agoal/administrators/lists',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'none',
            'bodyType' => 'json',
        ]);

        return AgoalUserAdminListResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary 获取Agoal管理员列表
     *  *
     * @return AgoalUserAdminListResponse AgoalUserAdminListResponse
     */
    public function agoalUserAdminList()
    {
        $runtime = new RuntimeOptions([]);
        $headers = new AgoalUserAdminListHeaders([]);

        return $this->agoalUserAdminListWithOptions($headers, $runtime);
    }

    /**
     * @summary Agoal用户目标列表
     *  *
     * @param AgoalUserObjectiveListRequest $request AgoalUserObjectiveListRequest
     * @param AgoalUserObjectiveListHeaders $headers AgoalUserObjectiveListHeaders
     * @param RuntimeOptions                $runtime runtime options for this request RuntimeOptions
     *
     * @return AgoalUserObjectiveListResponse AgoalUserObjectiveListResponse
     */
    public function agoalUserObjectiveListWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->dingUserId)) {
            $body['dingUserId'] = $request->dingUserId;
        }
        if (!Utils::isUnset($request->objectiveRuleId)) {
            $body['objectiveRuleId'] = $request->objectiveRuleId;
        }
        if (!Utils::isUnset($request->periodIds)) {
            $body['periodIds'] = $request->periodIds;
        }
        $realHeaders = [];
        if (!Utils::isUnset($headers->commonHeaders)) {
            $realHeaders = $headers->commonHeaders;
        }
        if (!Utils::isUnset($headers->xAcsDingtalkAccessToken)) {
            $realHeaders['x-acs-dingtalk-access-token'] = Utils::toJSONString($headers->xAcsDingtalkAccessToken);
        }
        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'AgoalUserObjectiveList',
            'version' => 'agoal_1.0',
            'protocol' => 'HTTP',
            'pathname' => '/v1.0/agoal/users/objectiveLists/query',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'none',
            'bodyType' => 'json',
        ]);

        return AgoalUserObjectiveListResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Agoal用户目标列表
     *  *
     * @param AgoalUserObjectiveListRequest $request AgoalUserObjectiveListRequest
     *
     * @return AgoalUserObjectiveListResponse AgoalUserObjectiveListResponse
     */
    public function agoalUserObjectiveList($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new AgoalUserObjectiveListHeaders([]);

        return $this->agoalUserObjectiveListWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 获取Agoal子管理员列表
     *  *
     * @param AgoalUserSubAdminListRequest $request AgoalUserSubAdminListRequest
     * @param AgoalUserSubAdminListHeaders $headers AgoalUserSubAdminListHeaders
     * @param RuntimeOptions               $runtime runtime options for this request RuntimeOptions
     *
     * @return AgoalUserSubAdminListResponse AgoalUserSubAdminListResponse
     */
    public function agoalUserSubAdminListWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->funcPermissionGroup)) {
            $query['funcPermissionGroup'] = $request->funcPermissionGroup;
        }
        $realHeaders = [];
        if (!Utils::isUnset($headers->commonHeaders)) {
            $realHeaders = $headers->commonHeaders;
        }
        if (!Utils::isUnset($headers->xAcsDingtalkAccessToken)) {
            $realHeaders['x-acs-dingtalk-access-token'] = Utils::toJSONString($headers->xAcsDingtalkAccessToken);
        }
        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action' => 'AgoalUserSubAdminList',
            'version' => 'agoal_1.0',
            'protocol' => 'HTTP',
            'pathname' => '/v1.0/agoal/administrators/sub/lists',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'none',
            'bodyType' => 'json',
        ]);

        return AgoalUserSubAdminListResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary 获取Agoal子管理员列表
     *  *
     * @param AgoalUserSubAdminListRequest $request AgoalUserSubAdminListRequest
     *
     * @return AgoalUserSubAdminListResponse AgoalUserSubAdminListResponse
     */
    public function agoalUserSubAdminList($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new AgoalUserSubAdminListHeaders([]);

        return $this->agoalUserSubAdminListWithOptions($request, $headers, $runtime);
    }
}
