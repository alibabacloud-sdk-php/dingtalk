<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dingtalk\Vassistant_1_0;

use AlibabaCloud\OpenApiUtil\OpenApiUtilClient;
use AlibabaCloud\SDK\Dingtalk\Vassistant_1_0\Models\AddDomainWordsHeaders;
use AlibabaCloud\SDK\Dingtalk\Vassistant_1_0\Models\AddDomainWordsRequest;
use AlibabaCloud\SDK\Dingtalk\Vassistant_1_0\Models\AddDomainWordsResponse;
use AlibabaCloud\SDK\Dingtalk\Vassistant_1_0\Models\AddToOrgSkillRepositoryHeaders;
use AlibabaCloud\SDK\Dingtalk\Vassistant_1_0\Models\AddToOrgSkillRepositoryRequest;
use AlibabaCloud\SDK\Dingtalk\Vassistant_1_0\Models\AddToOrgSkillRepositoryResponse;
use AlibabaCloud\SDK\Dingtalk\Vassistant_1_0\Models\AssistantMeResponseHeaders;
use AlibabaCloud\SDK\Dingtalk\Vassistant_1_0\Models\AssistantMeResponseRequest;
use AlibabaCloud\SDK\Dingtalk\Vassistant_1_0\Models\AssistantMeResponseResponse;
use AlibabaCloud\SDK\Dingtalk\Vassistant_1_0\Models\AssistantResponseHeaders;
use AlibabaCloud\SDK\Dingtalk\Vassistant_1_0\Models\AssistantResponseRequest;
use AlibabaCloud\SDK\Dingtalk\Vassistant_1_0\Models\AssistantResponseResponse;
use AlibabaCloud\SDK\Dingtalk\Vassistant_1_0\Models\BatchGetAICreditsRecordHeaders;
use AlibabaCloud\SDK\Dingtalk\Vassistant_1_0\Models\BatchGetAICreditsRecordRequest;
use AlibabaCloud\SDK\Dingtalk\Vassistant_1_0\Models\BatchGetAICreditsRecordResponse;
use AlibabaCloud\SDK\Dingtalk\Vassistant_1_0\Models\CreateAssistantHeaders;
use AlibabaCloud\SDK\Dingtalk\Vassistant_1_0\Models\CreateAssistantMessageHeaders;
use AlibabaCloud\SDK\Dingtalk\Vassistant_1_0\Models\CreateAssistantMessageRequest;
use AlibabaCloud\SDK\Dingtalk\Vassistant_1_0\Models\CreateAssistantMessageResponse;
use AlibabaCloud\SDK\Dingtalk\Vassistant_1_0\Models\CreateAssistantRequest;
use AlibabaCloud\SDK\Dingtalk\Vassistant_1_0\Models\CreateAssistantResponse;
use AlibabaCloud\SDK\Dingtalk\Vassistant_1_0\Models\CreateAssistantRunHeaders;
use AlibabaCloud\SDK\Dingtalk\Vassistant_1_0\Models\CreateAssistantRunRequest;
use AlibabaCloud\SDK\Dingtalk\Vassistant_1_0\Models\CreateAssistantRunResponse;
use AlibabaCloud\SDK\Dingtalk\Vassistant_1_0\Models\CreateAssistantThreadHeaders;
use AlibabaCloud\SDK\Dingtalk\Vassistant_1_0\Models\CreateAssistantThreadRequest;
use AlibabaCloud\SDK\Dingtalk\Vassistant_1_0\Models\CreateAssistantThreadResponse;
use AlibabaCloud\SDK\Dingtalk\Vassistant_1_0\Models\DeleteAssistantHeaders;
use AlibabaCloud\SDK\Dingtalk\Vassistant_1_0\Models\DeleteAssistantMessageHeaders;
use AlibabaCloud\SDK\Dingtalk\Vassistant_1_0\Models\DeleteAssistantMessageResponse;
use AlibabaCloud\SDK\Dingtalk\Vassistant_1_0\Models\DeleteAssistantRequest;
use AlibabaCloud\SDK\Dingtalk\Vassistant_1_0\Models\DeleteAssistantResponse;
use AlibabaCloud\SDK\Dingtalk\Vassistant_1_0\Models\DeleteAssistantThreadHeaders;
use AlibabaCloud\SDK\Dingtalk\Vassistant_1_0\Models\DeleteAssistantThreadResponse;
use AlibabaCloud\SDK\Dingtalk\Vassistant_1_0\Models\DeleteDomainWordsHeaders;
use AlibabaCloud\SDK\Dingtalk\Vassistant_1_0\Models\DeleteDomainWordsRequest;
use AlibabaCloud\SDK\Dingtalk\Vassistant_1_0\Models\DeleteDomainWordsResponse;
use AlibabaCloud\SDK\Dingtalk\Vassistant_1_0\Models\DeleteKnowledgeHeaders;
use AlibabaCloud\SDK\Dingtalk\Vassistant_1_0\Models\DeleteKnowledgeRequest;
use AlibabaCloud\SDK\Dingtalk\Vassistant_1_0\Models\DeleteKnowledgeResponse;
use AlibabaCloud\SDK\Dingtalk\Vassistant_1_0\Models\GetAskDetailHeaders;
use AlibabaCloud\SDK\Dingtalk\Vassistant_1_0\Models\GetAskDetailRequest;
use AlibabaCloud\SDK\Dingtalk\Vassistant_1_0\Models\GetAskDetailResponse;
use AlibabaCloud\SDK\Dingtalk\Vassistant_1_0\Models\GetAssistantActionInfoHeaders;
use AlibabaCloud\SDK\Dingtalk\Vassistant_1_0\Models\GetAssistantActionInfoRequest;
use AlibabaCloud\SDK\Dingtalk\Vassistant_1_0\Models\GetAssistantActionInfoResponse;
use AlibabaCloud\SDK\Dingtalk\Vassistant_1_0\Models\GetDomainWordsHeaders;
use AlibabaCloud\SDK\Dingtalk\Vassistant_1_0\Models\GetDomainWordsRequest;
use AlibabaCloud\SDK\Dingtalk\Vassistant_1_0\Models\GetDomainWordsResponse;
use AlibabaCloud\SDK\Dingtalk\Vassistant_1_0\Models\GetKnowledgeListHeaders;
use AlibabaCloud\SDK\Dingtalk\Vassistant_1_0\Models\GetKnowledgeListRequest;
use AlibabaCloud\SDK\Dingtalk\Vassistant_1_0\Models\GetKnowledgeListResponse;
use AlibabaCloud\SDK\Dingtalk\Vassistant_1_0\Models\InstallAssistantHeaders;
use AlibabaCloud\SDK\Dingtalk\Vassistant_1_0\Models\InstallAssistantRequest;
use AlibabaCloud\SDK\Dingtalk\Vassistant_1_0\Models\InstallAssistantResponse;
use AlibabaCloud\SDK\Dingtalk\Vassistant_1_0\Models\LearnKnowledgeHeaders;
use AlibabaCloud\SDK\Dingtalk\Vassistant_1_0\Models\LearnKnowledgeRequest;
use AlibabaCloud\SDK\Dingtalk\Vassistant_1_0\Models\LearnKnowledgeResponse;
use AlibabaCloud\SDK\Dingtalk\Vassistant_1_0\Models\ListAssistantHeaders;
use AlibabaCloud\SDK\Dingtalk\Vassistant_1_0\Models\ListAssistantMessageHeaders;
use AlibabaCloud\SDK\Dingtalk\Vassistant_1_0\Models\ListAssistantMessageRequest;
use AlibabaCloud\SDK\Dingtalk\Vassistant_1_0\Models\ListAssistantMessageResponse;
use AlibabaCloud\SDK\Dingtalk\Vassistant_1_0\Models\ListAssistantRequest;
use AlibabaCloud\SDK\Dingtalk\Vassistant_1_0\Models\ListAssistantResponse;
use AlibabaCloud\SDK\Dingtalk\Vassistant_1_0\Models\ListAssistantRunHeaders;
use AlibabaCloud\SDK\Dingtalk\Vassistant_1_0\Models\ListAssistantRunRequest;
use AlibabaCloud\SDK\Dingtalk\Vassistant_1_0\Models\ListAssistantRunResponse;
use AlibabaCloud\SDK\Dingtalk\Vassistant_1_0\Models\ListInstanceHeaders;
use AlibabaCloud\SDK\Dingtalk\Vassistant_1_0\Models\ListInstanceRequest;
use AlibabaCloud\SDK\Dingtalk\Vassistant_1_0\Models\ListInstanceResponse;
use AlibabaCloud\SDK\Dingtalk\Vassistant_1_0\Models\ListVisibleAssistantHeaders;
use AlibabaCloud\SDK\Dingtalk\Vassistant_1_0\Models\ListVisibleAssistantRequest;
use AlibabaCloud\SDK\Dingtalk\Vassistant_1_0\Models\ListVisibleAssistantResponse;
use AlibabaCloud\SDK\Dingtalk\Vassistant_1_0\Models\LogListHeaders;
use AlibabaCloud\SDK\Dingtalk\Vassistant_1_0\Models\LogListRequest;
use AlibabaCloud\SDK\Dingtalk\Vassistant_1_0\Models\LogListResponse;
use AlibabaCloud\SDK\Dingtalk\Vassistant_1_0\Models\RelearnKnowledgeHeaders;
use AlibabaCloud\SDK\Dingtalk\Vassistant_1_0\Models\RelearnKnowledgeRequest;
use AlibabaCloud\SDK\Dingtalk\Vassistant_1_0\Models\RelearnKnowledgeResponse;
use AlibabaCloud\SDK\Dingtalk\Vassistant_1_0\Models\RemoveAssistantHeaders;
use AlibabaCloud\SDK\Dingtalk\Vassistant_1_0\Models\RemoveAssistantRequest;
use AlibabaCloud\SDK\Dingtalk\Vassistant_1_0\Models\RemoveAssistantResponse;
use AlibabaCloud\SDK\Dingtalk\Vassistant_1_0\Models\RemoveFromOrgSkillRepositoryHeaders;
use AlibabaCloud\SDK\Dingtalk\Vassistant_1_0\Models\RemoveFromOrgSkillRepositoryRequest;
use AlibabaCloud\SDK\Dingtalk\Vassistant_1_0\Models\RemoveFromOrgSkillRepositoryResponse;
use AlibabaCloud\SDK\Dingtalk\Vassistant_1_0\Models\RetrieveAssistantBasicInfoHeaders;
use AlibabaCloud\SDK\Dingtalk\Vassistant_1_0\Models\RetrieveAssistantBasicInfoRequest;
use AlibabaCloud\SDK\Dingtalk\Vassistant_1_0\Models\RetrieveAssistantBasicInfoResponse;
use AlibabaCloud\SDK\Dingtalk\Vassistant_1_0\Models\RetrieveAssistantMessageHeaders;
use AlibabaCloud\SDK\Dingtalk\Vassistant_1_0\Models\RetrieveAssistantMessageResponse;
use AlibabaCloud\SDK\Dingtalk\Vassistant_1_0\Models\RetrieveAssistantRunHeaders;
use AlibabaCloud\SDK\Dingtalk\Vassistant_1_0\Models\RetrieveAssistantRunResponse;
use AlibabaCloud\SDK\Dingtalk\Vassistant_1_0\Models\RetrieveAssistantScopeHeaders;
use AlibabaCloud\SDK\Dingtalk\Vassistant_1_0\Models\RetrieveAssistantScopeRequest;
use AlibabaCloud\SDK\Dingtalk\Vassistant_1_0\Models\RetrieveAssistantScopeResponse;
use AlibabaCloud\SDK\Dingtalk\Vassistant_1_0\Models\RetrieveAssistantThreadHeaders;
use AlibabaCloud\SDK\Dingtalk\Vassistant_1_0\Models\RetrieveAssistantThreadResponse;
use AlibabaCloud\SDK\Dingtalk\Vassistant_1_0\Models\UpdateAssistantBasicInfoHeaders;
use AlibabaCloud\SDK\Dingtalk\Vassistant_1_0\Models\UpdateAssistantBasicInfoRequest;
use AlibabaCloud\SDK\Dingtalk\Vassistant_1_0\Models\UpdateAssistantBasicInfoResponse;
use AlibabaCloud\SDK\Dingtalk\Vassistant_1_0\Models\UpdateAssistantScopeHeaders;
use AlibabaCloud\SDK\Dingtalk\Vassistant_1_0\Models\UpdateAssistantScopeRequest;
use AlibabaCloud\SDK\Dingtalk\Vassistant_1_0\Models\UpdateAssistantScopeResponse;
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
     * @summary 助理添加专业词汇
     *  *
     * @param AddDomainWordsRequest $request AddDomainWordsRequest
     * @param AddDomainWordsHeaders $headers AddDomainWordsHeaders
     * @param RuntimeOptions        $runtime runtime options for this request RuntimeOptions
     *
     * @return AddDomainWordsResponse AddDomainWordsResponse
     */
    public function addDomainWordsWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->assistantId)) {
            $body['assistantId'] = $request->assistantId;
        }
        if (!Utils::isUnset($request->domainWords)) {
            $body['domainWords'] = $request->domainWords;
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
            'action' => 'AddDomainWords',
            'version' => 'assistant_1.0',
            'protocol' => 'HTTP',
            'pathname' => '/v1.0/assistant/domainWords',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'none',
            'bodyType' => 'json',
        ]);

        return AddDomainWordsResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary 助理添加专业词汇
     *  *
     * @param AddDomainWordsRequest $request AddDomainWordsRequest
     *
     * @return AddDomainWordsResponse AddDomainWordsResponse
     */
    public function addDomainWords($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new AddDomainWordsHeaders([]);

        return $this->addDomainWordsWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 添加技能到组织技能库
     *  *
     * @param AddToOrgSkillRepositoryRequest $request AddToOrgSkillRepositoryRequest
     * @param AddToOrgSkillRepositoryHeaders $headers AddToOrgSkillRepositoryHeaders
     * @param RuntimeOptions                 $runtime runtime options for this request RuntimeOptions
     *
     * @return AddToOrgSkillRepositoryResponse AddToOrgSkillRepositoryResponse
     */
    public function addToOrgSkillRepositoryWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->actionId)) {
            $body['actionId'] = $request->actionId;
        }
        if (!Utils::isUnset($request->actionVersion)) {
            $body['actionVersion'] = $request->actionVersion;
        }
        if (!Utils::isUnset($request->operatorUnionId)) {
            $body['operatorUnionId'] = $request->operatorUnionId;
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
            'action' => 'AddToOrgSkillRepository',
            'version' => 'assistant_1.0',
            'protocol' => 'HTTP',
            'pathname' => '/v1.0/assistant/orgActionRepositories',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'none',
            'bodyType' => 'json',
        ]);

        return AddToOrgSkillRepositoryResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary 添加技能到组织技能库
     *  *
     * @param AddToOrgSkillRepositoryRequest $request AddToOrgSkillRepositoryRequest
     *
     * @return AddToOrgSkillRepositoryResponse AddToOrgSkillRepositoryResponse
     */
    public function addToOrgSkillRepository($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new AddToOrgSkillRepositoryHeaders([]);

        return $this->addToOrgSkillRepositoryWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 助理响应接口-委托权限
     *  *
     * @param string                     $assistantId
     * @param AssistantMeResponseRequest $request     AssistantMeResponseRequest
     * @param AssistantMeResponseHeaders $headers     AssistantMeResponseHeaders
     * @param RuntimeOptions             $runtime     runtime options for this request RuntimeOptions
     *
     * @return AssistantMeResponseResponse AssistantMeResponseResponse
     */
    public function assistantMeResponseWithOptions($assistantId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->input)) {
            $body['input'] = $request->input;
        }
        if (!Utils::isUnset($request->instructions)) {
            $body['instructions'] = $request->instructions;
        }
        if (!Utils::isUnset($request->metadata)) {
            $body['metadata'] = $request->metadata;
        }
        if (!Utils::isUnset($request->stream)) {
            $body['stream'] = $request->stream;
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
            'action' => 'AssistantMeResponse',
            'version' => 'assistant_1.0',
            'protocol' => 'HTTP',
            'pathname' => '/v1.0/assistant/' . $assistantId . '/me/compatible-mode/responses',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'none',
            'bodyType' => 'json',
        ]);

        return AssistantMeResponseResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary 助理响应接口-委托权限
     *  *
     * @param string                     $assistantId
     * @param AssistantMeResponseRequest $request     AssistantMeResponseRequest
     *
     * @return AssistantMeResponseResponse AssistantMeResponseResponse
     */
    public function assistantMeResponse($assistantId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new AssistantMeResponseHeaders([]);

        return $this->assistantMeResponseWithOptions($assistantId, $request, $headers, $runtime);
    }

    /**
     * @summary 助理响应接口-应用权限
     *  *
     * @param string                   $assistantId
     * @param AssistantResponseRequest $request     AssistantResponseRequest
     * @param AssistantResponseHeaders $headers     AssistantResponseHeaders
     * @param RuntimeOptions           $runtime     runtime options for this request RuntimeOptions
     *
     * @return AssistantResponseResponse AssistantResponseResponse
     */
    public function assistantResponseWithOptions($assistantId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->input)) {
            $body['input'] = $request->input;
        }
        if (!Utils::isUnset($request->instructions)) {
            $body['instructions'] = $request->instructions;
        }
        if (!Utils::isUnset($request->metadata)) {
            $body['metadata'] = $request->metadata;
        }
        if (!Utils::isUnset($request->stream)) {
            $body['stream'] = $request->stream;
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
            'action' => 'AssistantResponse',
            'version' => 'assistant_1.0',
            'protocol' => 'HTTP',
            'pathname' => '/v1.0/assistant/' . $assistantId . '/compatible-mode/responses',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'none',
            'bodyType' => 'json',
        ]);

        return AssistantResponseResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary 助理响应接口-应用权限
     *  *
     * @param string                   $assistantId
     * @param AssistantResponseRequest $request     AssistantResponseRequest
     *
     * @return AssistantResponseResponse AssistantResponseResponse
     */
    public function assistantResponse($assistantId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new AssistantResponseHeaders([]);

        return $this->assistantResponseWithOptions($assistantId, $request, $headers, $runtime);
    }

    /**
     * @summary 分页查询算粒的使用记录
     *  *
     * @param BatchGetAICreditsRecordRequest $request BatchGetAICreditsRecordRequest
     * @param BatchGetAICreditsRecordHeaders $headers BatchGetAICreditsRecordHeaders
     * @param RuntimeOptions                 $runtime runtime options for this request RuntimeOptions
     *
     * @return BatchGetAICreditsRecordResponse BatchGetAICreditsRecordResponse
     */
    public function batchGetAICreditsRecordWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->assistantId)) {
            $query['assistantId'] = $request->assistantId;
        }
        if (!Utils::isUnset($request->endTime)) {
            $query['endTime'] = $request->endTime;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $query['pageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['pageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->startTime)) {
            $query['startTime'] = $request->startTime;
        }
        if (!Utils::isUnset($request->unionId)) {
            $query['unionId'] = $request->unionId;
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
            'action' => 'BatchGetAICreditsRecord',
            'version' => 'assistant_1.0',
            'protocol' => 'HTTP',
            'pathname' => '/v1.0/assistant/aiCredits/list',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'none',
            'bodyType' => 'json',
        ]);

        return BatchGetAICreditsRecordResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary 分页查询算粒的使用记录
     *  *
     * @param BatchGetAICreditsRecordRequest $request BatchGetAICreditsRecordRequest
     *
     * @return BatchGetAICreditsRecordResponse BatchGetAICreditsRecordResponse
     */
    public function batchGetAICreditsRecord($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new BatchGetAICreditsRecordHeaders([]);

        return $this->batchGetAICreditsRecordWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 创建AI助理
     *  *
     * @param CreateAssistantRequest $request CreateAssistantRequest
     * @param CreateAssistantHeaders $headers CreateAssistantHeaders
     * @param RuntimeOptions         $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateAssistantResponse CreateAssistantResponse
     */
    public function createAssistantWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->description)) {
            $body['description'] = $request->description;
        }
        if (!Utils::isUnset($request->icon)) {
            $body['icon'] = $request->icon;
        }
        if (!Utils::isUnset($request->instructions)) {
            $body['instructions'] = $request->instructions;
        }
        if (!Utils::isUnset($request->name)) {
            $body['name'] = $request->name;
        }
        if (!Utils::isUnset($request->operatorUnionId)) {
            $body['operatorUnionId'] = $request->operatorUnionId;
        }
        if (!Utils::isUnset($request->recommendPrompts)) {
            $body['recommendPrompts'] = $request->recommendPrompts;
        }
        if (!Utils::isUnset($request->welcomeContent)) {
            $body['welcomeContent'] = $request->welcomeContent;
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
            'action' => 'CreateAssistant',
            'version' => 'assistant_1.0',
            'protocol' => 'HTTP',
            'pathname' => '/v1.0/assistant/basicInfo',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'none',
            'bodyType' => 'json',
        ]);

        return CreateAssistantResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary 创建AI助理
     *  *
     * @param CreateAssistantRequest $request CreateAssistantRequest
     *
     * @return CreateAssistantResponse CreateAssistantResponse
     */
    public function createAssistant($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new CreateAssistantHeaders([]);

        return $this->createAssistantWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 创建AI助理的消息体
     *  *
     * @param string                        $threadId
     * @param CreateAssistantMessageRequest $request  CreateAssistantMessageRequest
     * @param CreateAssistantMessageHeaders $headers  CreateAssistantMessageHeaders
     * @param RuntimeOptions                $runtime  runtime options for this request RuntimeOptions
     *
     * @return CreateAssistantMessageResponse CreateAssistantMessageResponse
     */
    public function createAssistantMessageWithOptions($threadId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->content)) {
            $body['content'] = $request->content;
        }
        if (!Utils::isUnset($request->extension)) {
            $body['extension'] = $request->extension;
        }
        if (!Utils::isUnset($request->metadata)) {
            $body['metadata'] = $request->metadata;
        }
        if (!Utils::isUnset($request->role)) {
            $body['role'] = $request->role;
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
            'action' => 'CreateAssistantMessage',
            'version' => 'assistant_1.0',
            'protocol' => 'HTTP',
            'pathname' => '/v1.0/assistant/threads/' . $threadId . '/messages',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'none',
            'bodyType' => 'json',
        ]);

        return CreateAssistantMessageResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary 创建AI助理的消息体
     *  *
     * @param string                        $threadId
     * @param CreateAssistantMessageRequest $request  CreateAssistantMessageRequest
     *
     * @return CreateAssistantMessageResponse CreateAssistantMessageResponse
     */
    public function createAssistantMessage($threadId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new CreateAssistantMessageHeaders([]);

        return $this->createAssistantMessageWithOptions($threadId, $request, $headers, $runtime);
    }

    /**
     * @summary 创建AI助理的运行任务
     *  *
     * @param string                    $threadId
     * @param CreateAssistantRunRequest $request  CreateAssistantRunRequest
     * @param CreateAssistantRunHeaders $headers  CreateAssistantRunHeaders
     * @param RuntimeOptions            $runtime  runtime options for this request RuntimeOptions
     *
     * @return CreateAssistantRunResponse CreateAssistantRunResponse
     */
    public function createAssistantRunWithOptions($threadId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->assistantId)) {
            $body['assistantId'] = $request->assistantId;
        }
        if (!Utils::isUnset($request->instructions)) {
            $body['instructions'] = $request->instructions;
        }
        if (!Utils::isUnset($request->metadata)) {
            $body['metadata'] = $request->metadata;
        }
        if (!Utils::isUnset($request->stream)) {
            $body['stream'] = $request->stream;
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
            'action' => 'CreateAssistantRun',
            'version' => 'assistant_1.0',
            'protocol' => 'HTTP',
            'pathname' => '/v1.0/assistant/threads/' . $threadId . '/runs',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'none',
            'bodyType' => 'json',
        ]);

        return CreateAssistantRunResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary 创建AI助理的运行任务
     *  *
     * @param string                    $threadId
     * @param CreateAssistantRunRequest $request  CreateAssistantRunRequest
     *
     * @return CreateAssistantRunResponse CreateAssistantRunResponse
     */
    public function createAssistantRun($threadId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new CreateAssistantRunHeaders([]);

        return $this->createAssistantRunWithOptions($threadId, $request, $headers, $runtime);
    }

    /**
     * @summary 创建AI助理线程实例
     *  *
     * @param CreateAssistantThreadRequest $request CreateAssistantThreadRequest
     * @param CreateAssistantThreadHeaders $headers CreateAssistantThreadHeaders
     * @param RuntimeOptions               $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateAssistantThreadResponse CreateAssistantThreadResponse
     */
    public function createAssistantThreadWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->metadata)) {
            $body['metadata'] = $request->metadata;
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
            'action' => 'CreateAssistantThread',
            'version' => 'assistant_1.0',
            'protocol' => 'HTTP',
            'pathname' => '/v1.0/assistant/threads',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'none',
            'bodyType' => 'json',
        ]);

        return CreateAssistantThreadResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary 创建AI助理线程实例
     *  *
     * @param CreateAssistantThreadRequest $request CreateAssistantThreadRequest
     *
     * @return CreateAssistantThreadResponse CreateAssistantThreadResponse
     */
    public function createAssistantThread($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new CreateAssistantThreadHeaders([]);

        return $this->createAssistantThreadWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 删除AI助理
     *  *
     * @param DeleteAssistantRequest $request DeleteAssistantRequest
     * @param DeleteAssistantHeaders $headers DeleteAssistantHeaders
     * @param RuntimeOptions         $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteAssistantResponse DeleteAssistantResponse
     */
    public function deleteAssistantWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->assistantId)) {
            $query['assistantId'] = $request->assistantId;
        }
        if (!Utils::isUnset($request->operatorUnionId)) {
            $query['operatorUnionId'] = $request->operatorUnionId;
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
            'action' => 'DeleteAssistant',
            'version' => 'assistant_1.0',
            'protocol' => 'HTTP',
            'pathname' => '/v1.0/assistant/basicInfo',
            'method' => 'DELETE',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'none',
            'bodyType' => 'json',
        ]);

        return DeleteAssistantResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary 删除AI助理
     *  *
     * @param DeleteAssistantRequest $request DeleteAssistantRequest
     *
     * @return DeleteAssistantResponse DeleteAssistantResponse
     */
    public function deleteAssistant($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new DeleteAssistantHeaders([]);

        return $this->deleteAssistantWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 删除AI助理的消息体
     *  *
     * @param string                        $threadId
     * @param string                        $messageId
     * @param DeleteAssistantMessageHeaders $headers   DeleteAssistantMessageHeaders
     * @param RuntimeOptions                $runtime   runtime options for this request RuntimeOptions
     *
     * @return DeleteAssistantMessageResponse DeleteAssistantMessageResponse
     */
    public function deleteAssistantMessageWithOptions($threadId, $messageId, $headers, $runtime)
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
            'action' => 'DeleteAssistantMessage',
            'version' => 'assistant_1.0',
            'protocol' => 'HTTP',
            'pathname' => '/v1.0/assistant/threads/' . $threadId . '/messages/' . $messageId . '',
            'method' => 'DELETE',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'none',
            'bodyType' => 'json',
        ]);

        return DeleteAssistantMessageResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary 删除AI助理的消息体
     *  *
     * @param string $threadId
     * @param string $messageId
     *
     * @return DeleteAssistantMessageResponse DeleteAssistantMessageResponse
     */
    public function deleteAssistantMessage($threadId, $messageId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new DeleteAssistantMessageHeaders([]);

        return $this->deleteAssistantMessageWithOptions($threadId, $messageId, $headers, $runtime);
    }

    /**
     * @summary 删除AI助理线程实例
     *  *
     * @param string                       $threadId
     * @param DeleteAssistantThreadHeaders $headers  DeleteAssistantThreadHeaders
     * @param RuntimeOptions               $runtime  runtime options for this request RuntimeOptions
     *
     * @return DeleteAssistantThreadResponse DeleteAssistantThreadResponse
     */
    public function deleteAssistantThreadWithOptions($threadId, $headers, $runtime)
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
            'action' => 'DeleteAssistantThread',
            'version' => 'assistant_1.0',
            'protocol' => 'HTTP',
            'pathname' => '/v1.0/assistant/threads/' . $threadId . '',
            'method' => 'DELETE',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'none',
            'bodyType' => 'json',
        ]);

        return DeleteAssistantThreadResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary 删除AI助理线程实例
     *  *
     * @param string $threadId
     *
     * @return DeleteAssistantThreadResponse DeleteAssistantThreadResponse
     */
    public function deleteAssistantThread($threadId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new DeleteAssistantThreadHeaders([]);

        return $this->deleteAssistantThreadWithOptions($threadId, $headers, $runtime);
    }

    /**
     * @summary 助理删除专业词汇
     *  *
     * @param DeleteDomainWordsRequest $request DeleteDomainWordsRequest
     * @param DeleteDomainWordsHeaders $headers DeleteDomainWordsHeaders
     * @param RuntimeOptions           $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteDomainWordsResponse DeleteDomainWordsResponse
     */
    public function deleteDomainWordsWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->assistantId)) {
            $body['assistantId'] = $request->assistantId;
        }
        if (!Utils::isUnset($request->domainWords)) {
            $body['domainWords'] = $request->domainWords;
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
            'action' => 'DeleteDomainWords',
            'version' => 'assistant_1.0',
            'protocol' => 'HTTP',
            'pathname' => '/v1.0/assistant/domainWords/remove',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'none',
            'bodyType' => 'json',
        ]);

        return DeleteDomainWordsResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary 助理删除专业词汇
     *  *
     * @param DeleteDomainWordsRequest $request DeleteDomainWordsRequest
     *
     * @return DeleteDomainWordsResponse DeleteDomainWordsResponse
     */
    public function deleteDomainWords($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new DeleteDomainWordsHeaders([]);

        return $this->deleteDomainWordsWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 删除助理知识
     *  *
     * @param DeleteKnowledgeRequest $request DeleteKnowledgeRequest
     * @param DeleteKnowledgeHeaders $headers DeleteKnowledgeHeaders
     * @param RuntimeOptions         $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteKnowledgeResponse DeleteKnowledgeResponse
     */
    public function deleteKnowledgeWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->assistantId)) {
            $query['assistantId'] = $request->assistantId;
        }
        if (!Utils::isUnset($request->studyId)) {
            $query['studyId'] = $request->studyId;
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
            'action' => 'DeleteKnowledge',
            'version' => 'assistant_1.0',
            'protocol' => 'HTTP',
            'pathname' => '/v1.0/assistant/knowledges/items',
            'method' => 'DELETE',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'none',
            'bodyType' => 'json',
        ]);

        return DeleteKnowledgeResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary 删除助理知识
     *  *
     * @param DeleteKnowledgeRequest $request DeleteKnowledgeRequest
     *
     * @return DeleteKnowledgeResponse DeleteKnowledgeResponse
     */
    public function deleteKnowledge($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new DeleteKnowledgeHeaders([]);

        return $this->deleteKnowledgeWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 获取助理问答明细
     *  *
     * @param GetAskDetailRequest $request GetAskDetailRequest
     * @param GetAskDetailHeaders $headers GetAskDetailHeaders
     * @param RuntimeOptions      $runtime runtime options for this request RuntimeOptions
     *
     * @return GetAskDetailResponse GetAskDetailResponse
     */
    public function getAskDetailWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->assistantId)) {
            $query['assistantId'] = $request->assistantId;
        }
        if (!Utils::isUnset($request->endTime)) {
            $query['endTime'] = $request->endTime;
        }
        if (!Utils::isUnset($request->offset)) {
            $query['offset'] = $request->offset;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['pageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->startTime)) {
            $query['startTime'] = $request->startTime;
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
            'action' => 'GetAskDetail',
            'version' => 'assistant_1.0',
            'protocol' => 'HTTP',
            'pathname' => '/v1.0/assistant/askDetails',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'none',
            'bodyType' => 'json',
        ]);

        return GetAskDetailResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary 获取助理问答明细
     *  *
     * @param GetAskDetailRequest $request GetAskDetailRequest
     *
     * @return GetAskDetailResponse GetAskDetailResponse
     */
    public function getAskDetail($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new GetAskDetailHeaders([]);

        return $this->getAskDetailWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 获取AI助理技能列表信息
     *  *
     * @param GetAssistantActionInfoRequest $request GetAssistantActionInfoRequest
     * @param GetAssistantActionInfoHeaders $headers GetAssistantActionInfoHeaders
     * @param RuntimeOptions                $runtime runtime options for this request RuntimeOptions
     *
     * @return GetAssistantActionInfoResponse GetAssistantActionInfoResponse
     */
    public function getAssistantActionInfoWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->assistantId)) {
            $query['assistantId'] = $request->assistantId;
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
            'action' => 'GetAssistantActionInfo',
            'version' => 'assistant_1.0',
            'protocol' => 'HTTP',
            'pathname' => '/v1.0/assistant/actionLists',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'none',
            'bodyType' => 'json',
        ]);

        return GetAssistantActionInfoResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary 获取AI助理技能列表信息
     *  *
     * @param GetAssistantActionInfoRequest $request GetAssistantActionInfoRequest
     *
     * @return GetAssistantActionInfoResponse GetAssistantActionInfoResponse
     */
    public function getAssistantActionInfo($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new GetAssistantActionInfoHeaders([]);

        return $this->getAssistantActionInfoWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 获取助理专业词汇
     *  *
     * @param GetDomainWordsRequest $request GetDomainWordsRequest
     * @param GetDomainWordsHeaders $headers GetDomainWordsHeaders
     * @param RuntimeOptions        $runtime runtime options for this request RuntimeOptions
     *
     * @return GetDomainWordsResponse GetDomainWordsResponse
     */
    public function getDomainWordsWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->assistantId)) {
            $query['assistantId'] = $request->assistantId;
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
            'action' => 'GetDomainWords',
            'version' => 'assistant_1.0',
            'protocol' => 'HTTP',
            'pathname' => '/v1.0/assistant/domainWords',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'none',
            'bodyType' => 'json',
        ]);

        return GetDomainWordsResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary 获取助理专业词汇
     *  *
     * @param GetDomainWordsRequest $request GetDomainWordsRequest
     *
     * @return GetDomainWordsResponse GetDomainWordsResponse
     */
    public function getDomainWords($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new GetDomainWordsHeaders([]);

        return $this->getDomainWordsWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 获取助理知识列表
     *  *
     * @param GetKnowledgeListRequest $request GetKnowledgeListRequest
     * @param GetKnowledgeListHeaders $headers GetKnowledgeListHeaders
     * @param RuntimeOptions          $runtime runtime options for this request RuntimeOptions
     *
     * @return GetKnowledgeListResponse GetKnowledgeListResponse
     */
    public function getKnowledgeListWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->assistantId)) {
            $query['assistantId'] = $request->assistantId;
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
            'action' => 'GetKnowledgeList',
            'version' => 'assistant_1.0',
            'protocol' => 'HTTP',
            'pathname' => '/v1.0/assistant/knowledges/items',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'none',
            'bodyType' => 'json',
        ]);

        return GetKnowledgeListResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary 获取助理知识列表
     *  *
     * @param GetKnowledgeListRequest $request GetKnowledgeListRequest
     *
     * @return GetKnowledgeListResponse GetKnowledgeListResponse
     */
    public function getKnowledgeList($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new GetKnowledgeListHeaders([]);

        return $this->getKnowledgeListWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 安装助理
     *  *
     * @param InstallAssistantRequest $request InstallAssistantRequest
     * @param InstallAssistantHeaders $headers InstallAssistantHeaders
     * @param RuntimeOptions          $runtime runtime options for this request RuntimeOptions
     *
     * @return InstallAssistantResponse InstallAssistantResponse
     */
    public function installAssistantWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->assistantId)) {
            $body['assistantId'] = $request->assistantId;
        }
        if (!Utils::isUnset($request->isAllOrgMemberVisible)) {
            $body['isAllOrgMemberVisible'] = $request->isAllOrgMemberVisible;
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
            'action' => 'InstallAssistant',
            'version' => 'assistant_1.0',
            'protocol' => 'HTTP',
            'pathname' => '/v1.0/assistant/install',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'none',
            'bodyType' => 'json',
        ]);

        return InstallAssistantResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary 安装助理
     *  *
     * @param InstallAssistantRequest $request InstallAssistantRequest
     *
     * @return InstallAssistantResponse InstallAssistantResponse
     */
    public function installAssistant($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new InstallAssistantHeaders([]);

        return $this->installAssistantWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 助理学习知识
     *  *
     * @param LearnKnowledgeRequest $request LearnKnowledgeRequest
     * @param LearnKnowledgeHeaders $headers LearnKnowledgeHeaders
     * @param RuntimeOptions        $runtime runtime options for this request RuntimeOptions
     *
     * @return LearnKnowledgeResponse LearnKnowledgeResponse
     */
    public function learnKnowledgeWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->assistantId)) {
            $body['assistantId'] = $request->assistantId;
        }
        if (!Utils::isUnset($request->docUrl)) {
            $body['docUrl'] = $request->docUrl;
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
            'action' => 'LearnKnowledge',
            'version' => 'assistant_1.0',
            'protocol' => 'HTTP',
            'pathname' => '/v1.0/assistant/knowledges/items',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'none',
            'bodyType' => 'json',
        ]);

        return LearnKnowledgeResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary 助理学习知识
     *  *
     * @param LearnKnowledgeRequest $request LearnKnowledgeRequest
     *
     * @return LearnKnowledgeResponse LearnKnowledgeResponse
     */
    public function learnKnowledge($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new LearnKnowledgeHeaders([]);

        return $this->learnKnowledgeWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 获取AI助理列表
     *  *
     * @param ListAssistantRequest $request ListAssistantRequest
     * @param ListAssistantHeaders $headers ListAssistantHeaders
     * @param RuntimeOptions       $runtime runtime options for this request RuntimeOptions
     *
     * @return ListAssistantResponse ListAssistantResponse
     */
    public function listAssistantWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->cursor)) {
            $query['cursor'] = $request->cursor;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['pageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->unionId)) {
            $query['unionId'] = $request->unionId;
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
            'action' => 'ListAssistant',
            'version' => 'assistant_1.0',
            'protocol' => 'HTTP',
            'pathname' => '/v1.0/assistant/list',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'none',
            'bodyType' => 'json',
        ]);

        return ListAssistantResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary 获取AI助理列表
     *  *
     * @param ListAssistantRequest $request ListAssistantRequest
     *
     * @return ListAssistantResponse ListAssistantResponse
     */
    public function listAssistant($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new ListAssistantHeaders([]);

        return $this->listAssistantWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 获取AI助理消息列表
     *  *
     * @param string                      $threadId
     * @param ListAssistantMessageRequest $request  ListAssistantMessageRequest
     * @param ListAssistantMessageHeaders $headers  ListAssistantMessageHeaders
     * @param RuntimeOptions              $runtime  runtime options for this request RuntimeOptions
     *
     * @return ListAssistantMessageResponse ListAssistantMessageResponse
     */
    public function listAssistantMessageWithOptions($threadId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->limit)) {
            $query['limit'] = $request->limit;
        }
        if (!Utils::isUnset($request->order)) {
            $query['order'] = $request->order;
        }
        if (!Utils::isUnset($request->runId)) {
            $query['runId'] = $request->runId;
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
            'action' => 'ListAssistantMessage',
            'version' => 'assistant_1.0',
            'protocol' => 'HTTP',
            'pathname' => '/v1.0/assistant/threads/' . $threadId . '/messages',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'none',
            'bodyType' => 'json',
        ]);

        return ListAssistantMessageResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary 获取AI助理消息列表
     *  *
     * @param string                      $threadId
     * @param ListAssistantMessageRequest $request  ListAssistantMessageRequest
     *
     * @return ListAssistantMessageResponse ListAssistantMessageResponse
     */
    public function listAssistantMessage($threadId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new ListAssistantMessageHeaders([]);

        return $this->listAssistantMessageWithOptions($threadId, $request, $headers, $runtime);
    }

    /**
     * @summary 获取AI助理的运行任务的列表
     *  *
     * @param string                  $threadId
     * @param ListAssistantRunRequest $request  ListAssistantRunRequest
     * @param ListAssistantRunHeaders $headers  ListAssistantRunHeaders
     * @param RuntimeOptions          $runtime  runtime options for this request RuntimeOptions
     *
     * @return ListAssistantRunResponse ListAssistantRunResponse
     */
    public function listAssistantRunWithOptions($threadId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->limit)) {
            $query['limit'] = $request->limit;
        }
        if (!Utils::isUnset($request->order)) {
            $query['order'] = $request->order;
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
            'action' => 'ListAssistantRun',
            'version' => 'assistant_1.0',
            'protocol' => 'HTTP',
            'pathname' => '/v1.0/assistant/threads/' . $threadId . '/runs',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'none',
            'bodyType' => 'json',
        ]);

        return ListAssistantRunResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary 获取AI助理的运行任务的列表
     *  *
     * @param string                  $threadId
     * @param ListAssistantRunRequest $request  ListAssistantRunRequest
     *
     * @return ListAssistantRunResponse ListAssistantRunResponse
     */
    public function listAssistantRun($threadId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new ListAssistantRunHeaders([]);

        return $this->listAssistantRunWithOptions($threadId, $request, $headers, $runtime);
    }

    /**
     * @summary 获取指定助理在组织下已安装的实例信息列表
     *  *
     * @param ListInstanceRequest $request ListInstanceRequest
     * @param ListInstanceHeaders $headers ListInstanceHeaders
     * @param RuntimeOptions      $runtime runtime options for this request RuntimeOptions
     *
     * @return ListInstanceResponse ListInstanceResponse
     */
    public function listInstanceWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->prototypeAssistantId)) {
            $query['prototypeAssistantId'] = $request->prototypeAssistantId;
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
            'action' => 'ListInstance',
            'version' => 'assistant_1.0',
            'protocol' => 'HTTP',
            'pathname' => '/v1.0/assistant/instances/list',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'none',
            'bodyType' => 'json',
        ]);

        return ListInstanceResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary 获取指定助理在组织下已安装的实例信息列表
     *  *
     * @param ListInstanceRequest $request ListInstanceRequest
     *
     * @return ListInstanceResponse ListInstanceResponse
     */
    public function listInstance($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new ListInstanceHeaders([]);

        return $this->listInstanceWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 获取用户可见范围的AI助理列表
     *  *
     * @param ListVisibleAssistantRequest $request ListVisibleAssistantRequest
     * @param ListVisibleAssistantHeaders $headers ListVisibleAssistantHeaders
     * @param RuntimeOptions              $runtime runtime options for this request RuntimeOptions
     *
     * @return ListVisibleAssistantResponse ListVisibleAssistantResponse
     */
    public function listVisibleAssistantWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->cursor)) {
            $query['cursor'] = $request->cursor;
        }
        if (!Utils::isUnset($request->name)) {
            $query['name'] = $request->name;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['pageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->unionId)) {
            $query['unionId'] = $request->unionId;
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
            'action' => 'ListVisibleAssistant',
            'version' => 'assistant_1.0',
            'protocol' => 'HTTP',
            'pathname' => '/v1.0/assistant/visibleList',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'none',
            'bodyType' => 'json',
        ]);

        return ListVisibleAssistantResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary 获取用户可见范围的AI助理列表
     *  *
     * @param ListVisibleAssistantRequest $request ListVisibleAssistantRequest
     *
     * @return ListVisibleAssistantResponse ListVisibleAssistantResponse
     */
    public function listVisibleAssistant($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new ListVisibleAssistantHeaders([]);

        return $this->listVisibleAssistantWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 获取对话明细列表
     *  *
     * @param LogListRequest $request LogListRequest
     * @param LogListHeaders $headers LogListHeaders
     * @param RuntimeOptions $runtime runtime options for this request RuntimeOptions
     *
     * @return LogListResponse LogListResponse
     */
    public function logListWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->assistantId)) {
            $query['assistantId'] = $request->assistantId;
        }
        if (!Utils::isUnset($request->endTime)) {
            $query['endTime'] = $request->endTime;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $query['pageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['pageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->startTime)) {
            $query['startTime'] = $request->startTime;
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
            'action' => 'LogList',
            'version' => 'assistant_1.0',
            'protocol' => 'HTTP',
            'pathname' => '/v1.0/assistant/logs/list',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'none',
            'bodyType' => 'json',
        ]);

        return LogListResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary 获取对话明细列表
     *  *
     * @param LogListRequest $request LogListRequest
     *
     * @return LogListResponse LogListResponse
     */
    public function logList($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new LogListHeaders([]);

        return $this->logListWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 助理学习增量知识
     *  *
     * @param RelearnKnowledgeRequest $request RelearnKnowledgeRequest
     * @param RelearnKnowledgeHeaders $headers RelearnKnowledgeHeaders
     * @param RuntimeOptions          $runtime runtime options for this request RuntimeOptions
     *
     * @return RelearnKnowledgeResponse RelearnKnowledgeResponse
     */
    public function relearnKnowledgeWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->assistantId)) {
            $body['assistantId'] = $request->assistantId;
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
            'action' => 'RelearnKnowledge',
            'version' => 'assistant_1.0',
            'protocol' => 'HTTP',
            'pathname' => '/v1.0/assistant/knowledges/incrLearning',
            'method' => 'PUT',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'none',
            'bodyType' => 'json',
        ]);

        return RelearnKnowledgeResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary 助理学习增量知识
     *  *
     * @param RelearnKnowledgeRequest $request RelearnKnowledgeRequest
     *
     * @return RelearnKnowledgeResponse RelearnKnowledgeResponse
     */
    public function relearnKnowledge($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new RelearnKnowledgeHeaders([]);

        return $this->relearnKnowledgeWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 卸载助理
     *  *
     * @param RemoveAssistantRequest $request RemoveAssistantRequest
     * @param RemoveAssistantHeaders $headers RemoveAssistantHeaders
     * @param RuntimeOptions         $runtime runtime options for this request RuntimeOptions
     *
     * @return RemoveAssistantResponse RemoveAssistantResponse
     */
    public function removeAssistantWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->assistantId)) {
            $body['assistantId'] = $request->assistantId;
        }
        if (!Utils::isUnset($request->operatorUnionId)) {
            $body['operatorUnionId'] = $request->operatorUnionId;
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
            'action' => 'RemoveAssistant',
            'version' => 'assistant_1.0',
            'protocol' => 'HTTP',
            'pathname' => '/v1.0/assistant/uninstall',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'none',
            'bodyType' => 'json',
        ]);

        return RemoveAssistantResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary 卸载助理
     *  *
     * @param RemoveAssistantRequest $request RemoveAssistantRequest
     *
     * @return RemoveAssistantResponse RemoveAssistantResponse
     */
    public function removeAssistant($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new RemoveAssistantHeaders([]);

        return $this->removeAssistantWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 移除组织技能库技能
     *  *
     * @param RemoveFromOrgSkillRepositoryRequest $request RemoveFromOrgSkillRepositoryRequest
     * @param RemoveFromOrgSkillRepositoryHeaders $headers RemoveFromOrgSkillRepositoryHeaders
     * @param RuntimeOptions                      $runtime runtime options for this request RuntimeOptions
     *
     * @return RemoveFromOrgSkillRepositoryResponse RemoveFromOrgSkillRepositoryResponse
     */
    public function removeFromOrgSkillRepositoryWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->actionId)) {
            $query['actionId'] = $request->actionId;
        }
        if (!Utils::isUnset($request->operatorUnionId)) {
            $query['operatorUnionId'] = $request->operatorUnionId;
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
            'action' => 'RemoveFromOrgSkillRepository',
            'version' => 'assistant_1.0',
            'protocol' => 'HTTP',
            'pathname' => '/v1.0/assistant/orgActionRepositories',
            'method' => 'DELETE',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'none',
            'bodyType' => 'json',
        ]);

        return RemoveFromOrgSkillRepositoryResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary 移除组织技能库技能
     *  *
     * @param RemoveFromOrgSkillRepositoryRequest $request RemoveFromOrgSkillRepositoryRequest
     *
     * @return RemoveFromOrgSkillRepositoryResponse RemoveFromOrgSkillRepositoryResponse
     */
    public function removeFromOrgSkillRepository($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new RemoveFromOrgSkillRepositoryHeaders([]);

        return $this->removeFromOrgSkillRepositoryWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 查询 AI 助理的基本信息
     *  *
     * @param RetrieveAssistantBasicInfoRequest $request RetrieveAssistantBasicInfoRequest
     * @param RetrieveAssistantBasicInfoHeaders $headers RetrieveAssistantBasicInfoHeaders
     * @param RuntimeOptions                    $runtime runtime options for this request RuntimeOptions
     *
     * @return RetrieveAssistantBasicInfoResponse RetrieveAssistantBasicInfoResponse
     */
    public function retrieveAssistantBasicInfoWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->assistantId)) {
            $query['assistantId'] = $request->assistantId;
        }
        if (!Utils::isUnset($request->unionId)) {
            $query['unionId'] = $request->unionId;
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
            'action' => 'RetrieveAssistantBasicInfo',
            'version' => 'assistant_1.0',
            'protocol' => 'HTTP',
            'pathname' => '/v1.0/assistant/basicInfo',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'none',
            'bodyType' => 'json',
        ]);

        return RetrieveAssistantBasicInfoResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary 查询 AI 助理的基本信息
     *  *
     * @param RetrieveAssistantBasicInfoRequest $request RetrieveAssistantBasicInfoRequest
     *
     * @return RetrieveAssistantBasicInfoResponse RetrieveAssistantBasicInfoResponse
     */
    public function retrieveAssistantBasicInfo($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new RetrieveAssistantBasicInfoHeaders([]);

        return $this->retrieveAssistantBasicInfoWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 获取AI助理的消息体
     *  *
     * @param string                          $threadId
     * @param string                          $messageId
     * @param RetrieveAssistantMessageHeaders $headers   RetrieveAssistantMessageHeaders
     * @param RuntimeOptions                  $runtime   runtime options for this request RuntimeOptions
     *
     * @return RetrieveAssistantMessageResponse RetrieveAssistantMessageResponse
     */
    public function retrieveAssistantMessageWithOptions($threadId, $messageId, $headers, $runtime)
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
            'action' => 'RetrieveAssistantMessage',
            'version' => 'assistant_1.0',
            'protocol' => 'HTTP',
            'pathname' => '/v1.0/assistant/threads/' . $threadId . '/messages/' . $messageId . '',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'none',
            'bodyType' => 'json',
        ]);

        return RetrieveAssistantMessageResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary 获取AI助理的消息体
     *  *
     * @param string $threadId
     * @param string $messageId
     *
     * @return RetrieveAssistantMessageResponse RetrieveAssistantMessageResponse
     */
    public function retrieveAssistantMessage($threadId, $messageId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new RetrieveAssistantMessageHeaders([]);

        return $this->retrieveAssistantMessageWithOptions($threadId, $messageId, $headers, $runtime);
    }

    /**
     * @summary 检索AI助理的运行任务
     *  *
     * @param string                      $threadId
     * @param string                      $runId
     * @param RetrieveAssistantRunHeaders $headers  RetrieveAssistantRunHeaders
     * @param RuntimeOptions              $runtime  runtime options for this request RuntimeOptions
     *
     * @return RetrieveAssistantRunResponse RetrieveAssistantRunResponse
     */
    public function retrieveAssistantRunWithOptions($threadId, $runId, $headers, $runtime)
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
            'action' => 'RetrieveAssistantRun',
            'version' => 'assistant_1.0',
            'protocol' => 'HTTP',
            'pathname' => '/v1.0/assistant/threads/' . $threadId . '/runs/' . $runId . '',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'none',
            'bodyType' => 'json',
        ]);

        return RetrieveAssistantRunResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary 检索AI助理的运行任务
     *  *
     * @param string $threadId
     * @param string $runId
     *
     * @return RetrieveAssistantRunResponse RetrieveAssistantRunResponse
     */
    public function retrieveAssistantRun($threadId, $runId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new RetrieveAssistantRunHeaders([]);

        return $this->retrieveAssistantRunWithOptions($threadId, $runId, $headers, $runtime);
    }

    /**
     * @summary 获取助理的使用范围
     *  *
     * @param RetrieveAssistantScopeRequest $request RetrieveAssistantScopeRequest
     * @param RetrieveAssistantScopeHeaders $headers RetrieveAssistantScopeHeaders
     * @param RuntimeOptions                $runtime runtime options for this request RuntimeOptions
     *
     * @return RetrieveAssistantScopeResponse RetrieveAssistantScopeResponse
     */
    public function retrieveAssistantScopeWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->assistantId)) {
            $query['assistantId'] = $request->assistantId;
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
            'action' => 'RetrieveAssistantScope',
            'version' => 'assistant_1.0',
            'protocol' => 'HTTP',
            'pathname' => '/v1.0/assistant/scope',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'none',
            'bodyType' => 'json',
        ]);

        return RetrieveAssistantScopeResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary 获取助理的使用范围
     *  *
     * @param RetrieveAssistantScopeRequest $request RetrieveAssistantScopeRequest
     *
     * @return RetrieveAssistantScopeResponse RetrieveAssistantScopeResponse
     */
    public function retrieveAssistantScope($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new RetrieveAssistantScopeHeaders([]);

        return $this->retrieveAssistantScopeWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 检索AI助理线程实例
     *  *
     * @param string                         $threadId
     * @param RetrieveAssistantThreadHeaders $headers  RetrieveAssistantThreadHeaders
     * @param RuntimeOptions                 $runtime  runtime options for this request RuntimeOptions
     *
     * @return RetrieveAssistantThreadResponse RetrieveAssistantThreadResponse
     */
    public function retrieveAssistantThreadWithOptions($threadId, $headers, $runtime)
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
            'action' => 'RetrieveAssistantThread',
            'version' => 'assistant_1.0',
            'protocol' => 'HTTP',
            'pathname' => '/v1.0/assistant/threads/' . $threadId . '',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'none',
            'bodyType' => 'json',
        ]);

        return RetrieveAssistantThreadResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary 检索AI助理线程实例
     *  *
     * @param string $threadId
     *
     * @return RetrieveAssistantThreadResponse RetrieveAssistantThreadResponse
     */
    public function retrieveAssistantThread($threadId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new RetrieveAssistantThreadHeaders([]);

        return $this->retrieveAssistantThreadWithOptions($threadId, $headers, $runtime);
    }

    /**
     * @summary 更新AI助理基础信息
     *  *
     * @param UpdateAssistantBasicInfoRequest $request UpdateAssistantBasicInfoRequest
     * @param UpdateAssistantBasicInfoHeaders $headers UpdateAssistantBasicInfoHeaders
     * @param RuntimeOptions                  $runtime runtime options for this request RuntimeOptions
     *
     * @return UpdateAssistantBasicInfoResponse UpdateAssistantBasicInfoResponse
     */
    public function updateAssistantBasicInfoWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->assistantId)) {
            $body['assistantId'] = $request->assistantId;
        }
        if (!Utils::isUnset($request->description)) {
            $body['description'] = $request->description;
        }
        if (!Utils::isUnset($request->fallbackContent)) {
            $body['fallbackContent'] = $request->fallbackContent;
        }
        if (!Utils::isUnset($request->icon)) {
            $body['icon'] = $request->icon;
        }
        if (!Utils::isUnset($request->instructions)) {
            $body['instructions'] = $request->instructions;
        }
        if (!Utils::isUnset($request->name)) {
            $body['name'] = $request->name;
        }
        if (!Utils::isUnset($request->operatorUnionId)) {
            $body['operatorUnionId'] = $request->operatorUnionId;
        }
        if (!Utils::isUnset($request->recommendPrompts)) {
            $body['recommendPrompts'] = $request->recommendPrompts;
        }
        if (!Utils::isUnset($request->welcomeContent)) {
            $body['welcomeContent'] = $request->welcomeContent;
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
            'action' => 'UpdateAssistantBasicInfo',
            'version' => 'assistant_1.0',
            'protocol' => 'HTTP',
            'pathname' => '/v1.0/assistant/basicInfo',
            'method' => 'PUT',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'none',
            'bodyType' => 'json',
        ]);

        return UpdateAssistantBasicInfoResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary 更新AI助理基础信息
     *  *
     * @param UpdateAssistantBasicInfoRequest $request UpdateAssistantBasicInfoRequest
     *
     * @return UpdateAssistantBasicInfoResponse UpdateAssistantBasicInfoResponse
     */
    public function updateAssistantBasicInfo($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new UpdateAssistantBasicInfoHeaders([]);

        return $this->updateAssistantBasicInfoWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 更新 AI 助理使用范围
     *  *
     * @param UpdateAssistantScopeRequest $request UpdateAssistantScopeRequest
     * @param UpdateAssistantScopeHeaders $headers UpdateAssistantScopeHeaders
     * @param RuntimeOptions              $runtime runtime options for this request RuntimeOptions
     *
     * @return UpdateAssistantScopeResponse UpdateAssistantScopeResponse
     */
    public function updateAssistantScopeWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->assistantId)) {
            $body['assistantId'] = $request->assistantId;
        }
        if (!Utils::isUnset($request->operatorUnionId)) {
            $body['operatorUnionId'] = $request->operatorUnionId;
        }
        if (!Utils::isUnset($request->scopes)) {
            $body['scopes'] = $request->scopes;
        }
        if (!Utils::isUnset($request->sharing)) {
            $body['sharing'] = $request->sharing;
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
            'action' => 'UpdateAssistantScope',
            'version' => 'assistant_1.0',
            'protocol' => 'HTTP',
            'pathname' => '/v1.0/assistant/scope',
            'method' => 'PUT',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'none',
            'bodyType' => 'any',
        ]);

        return UpdateAssistantScopeResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary 更新 AI 助理使用范围
     *  *
     * @param UpdateAssistantScopeRequest $request UpdateAssistantScopeRequest
     *
     * @return UpdateAssistantScopeResponse UpdateAssistantScopeResponse
     */
    public function updateAssistantScope($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new UpdateAssistantScopeHeaders([]);

        return $this->updateAssistantScopeWithOptions($request, $headers, $runtime);
    }
}
