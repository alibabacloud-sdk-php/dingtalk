<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dingtalk\Vcontract_1_0;

use AlibabaCloud\OpenApiUtil\OpenApiUtilClient;
use AlibabaCloud\SDK\Dingtalk\Vcontract_1_0\Models\CancelReviewOrderHeaders;
use AlibabaCloud\SDK\Dingtalk\Vcontract_1_0\Models\CancelReviewOrderRequest;
use AlibabaCloud\SDK\Dingtalk\Vcontract_1_0\Models\CancelReviewOrderResponse;
use AlibabaCloud\SDK\Dingtalk\Vcontract_1_0\Models\ContractBenefitConsumeHeaders;
use AlibabaCloud\SDK\Dingtalk\Vcontract_1_0\Models\ContractBenefitConsumeRequest;
use AlibabaCloud\SDK\Dingtalk\Vcontract_1_0\Models\ContractBenefitConsumeResponse;
use AlibabaCloud\SDK\Dingtalk\Vcontract_1_0\Models\CreateContractCompareTaskHeaders;
use AlibabaCloud\SDK\Dingtalk\Vcontract_1_0\Models\CreateContractCompareTaskRequest;
use AlibabaCloud\SDK\Dingtalk\Vcontract_1_0\Models\CreateContractCompareTaskResponse;
use AlibabaCloud\SDK\Dingtalk\Vcontract_1_0\Models\CreateContractExtractTaskHeaders;
use AlibabaCloud\SDK\Dingtalk\Vcontract_1_0\Models\CreateContractExtractTaskRequest;
use AlibabaCloud\SDK\Dingtalk\Vcontract_1_0\Models\CreateContractExtractTaskResponse;
use AlibabaCloud\SDK\Dingtalk\Vcontract_1_0\Models\CreateContractReviewTaskHeaders;
use AlibabaCloud\SDK\Dingtalk\Vcontract_1_0\Models\CreateContractReviewTaskRequest;
use AlibabaCloud\SDK\Dingtalk\Vcontract_1_0\Models\CreateContractReviewTaskResponse;
use AlibabaCloud\SDK\Dingtalk\Vcontract_1_0\Models\EsignQueryApprovalInfoHeaders;
use AlibabaCloud\SDK\Dingtalk\Vcontract_1_0\Models\EsignQueryApprovalInfoRequest;
use AlibabaCloud\SDK\Dingtalk\Vcontract_1_0\Models\EsignQueryApprovalInfoResponse;
use AlibabaCloud\SDK\Dingtalk\Vcontract_1_0\Models\EsignQueryGrantInfoHeaders;
use AlibabaCloud\SDK\Dingtalk\Vcontract_1_0\Models\EsignQueryGrantInfoRequest;
use AlibabaCloud\SDK\Dingtalk\Vcontract_1_0\Models\EsignQueryGrantInfoResponse;
use AlibabaCloud\SDK\Dingtalk\Vcontract_1_0\Models\EsignQueryIdentityByTicketHeaders;
use AlibabaCloud\SDK\Dingtalk\Vcontract_1_0\Models\EsignQueryIdentityByTicketRequest;
use AlibabaCloud\SDK\Dingtalk\Vcontract_1_0\Models\EsignQueryIdentityByTicketResponse;
use AlibabaCloud\SDK\Dingtalk\Vcontract_1_0\Models\EsignSyncEventHeaders;
use AlibabaCloud\SDK\Dingtalk\Vcontract_1_0\Models\EsignSyncEventRequest;
use AlibabaCloud\SDK\Dingtalk\Vcontract_1_0\Models\EsignSyncEventResponse;
use AlibabaCloud\SDK\Dingtalk\Vcontract_1_0\Models\EsignUserVerifyHeaders;
use AlibabaCloud\SDK\Dingtalk\Vcontract_1_0\Models\EsignUserVerifyRequest;
use AlibabaCloud\SDK\Dingtalk\Vcontract_1_0\Models\EsignUserVerifyResponse;
use AlibabaCloud\SDK\Dingtalk\Vcontract_1_0\Models\FinishReviewOrderHeaders;
use AlibabaCloud\SDK\Dingtalk\Vcontract_1_0\Models\FinishReviewOrderRequest;
use AlibabaCloud\SDK\Dingtalk\Vcontract_1_0\Models\FinishReviewOrderResponse;
use AlibabaCloud\SDK\Dingtalk\Vcontract_1_0\Models\QueryAdvancedContractVersionHeaders;
use AlibabaCloud\SDK\Dingtalk\Vcontract_1_0\Models\QueryAdvancedContractVersionRequest;
use AlibabaCloud\SDK\Dingtalk\Vcontract_1_0\Models\QueryAdvancedContractVersionResponse;
use AlibabaCloud\SDK\Dingtalk\Vcontract_1_0\Models\QueryContractCompareResultHeaders;
use AlibabaCloud\SDK\Dingtalk\Vcontract_1_0\Models\QueryContractCompareResultRequest;
use AlibabaCloud\SDK\Dingtalk\Vcontract_1_0\Models\QueryContractCompareResultResponse;
use AlibabaCloud\SDK\Dingtalk\Vcontract_1_0\Models\QueryContractExtractResultHeaders;
use AlibabaCloud\SDK\Dingtalk\Vcontract_1_0\Models\QueryContractExtractResultRequest;
use AlibabaCloud\SDK\Dingtalk\Vcontract_1_0\Models\QueryContractExtractResultResponse;
use AlibabaCloud\SDK\Dingtalk\Vcontract_1_0\Models\QueryContractReviewResultHeaders;
use AlibabaCloud\SDK\Dingtalk\Vcontract_1_0\Models\QueryContractReviewResultRequest;
use AlibabaCloud\SDK\Dingtalk\Vcontract_1_0\Models\QueryContractReviewResultResponse;
use AlibabaCloud\SDK\Dingtalk\Vcontract_1_0\Models\SendContractCardHeaders;
use AlibabaCloud\SDK\Dingtalk\Vcontract_1_0\Models\SendContractCardRequest;
use AlibabaCloud\SDK\Dingtalk\Vcontract_1_0\Models\SendContractCardResponse;
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
        $gatewayClient       = new Client();
        $this->_spi          = $gatewayClient;
        $this->_endpointRule = '';
        if (Utils::empty_($this->_endpoint)) {
            $this->_endpoint = 'api.dingtalk.com';
        }
    }

    /**
     * @summary 取消审查工单接口
     *  *
     * @param CancelReviewOrderRequest $request CancelReviewOrderRequest
     * @param CancelReviewOrderHeaders $headers CancelReviewOrderHeaders
     * @param RuntimeOptions           $runtime runtime options for this request RuntimeOptions
     *
     * @return CancelReviewOrderResponse CancelReviewOrderResponse
     */
    public function cancelReviewOrderWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->endFiles)) {
            $body['endFiles'] = $request->endFiles;
        }
        if (!Utils::isUnset($request->extension)) {
            $body['extension'] = $request->extension;
        }
        if (!Utils::isUnset($request->orderId)) {
            $body['orderId'] = $request->orderId;
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
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CancelReviewOrder',
            'version'     => 'contract_1.0',
            'protocol'    => 'HTTP',
            'pathname'    => '/v1.0/contract/reviews/cancel',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'none',
            'bodyType'    => 'json',
        ]);

        return CancelReviewOrderResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary 取消审查工单接口
     *  *
     * @param CancelReviewOrderRequest $request CancelReviewOrderRequest
     *
     * @return CancelReviewOrderResponse CancelReviewOrderResponse
     */
    public function cancelReviewOrder($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new CancelReviewOrderHeaders([]);

        return $this->cancelReviewOrderWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 合同权益核销
     *  *
     * @param ContractBenefitConsumeRequest $request ContractBenefitConsumeRequest
     * @param ContractBenefitConsumeHeaders $headers ContractBenefitConsumeHeaders
     * @param RuntimeOptions                $runtime runtime options for this request RuntimeOptions
     *
     * @return ContractBenefitConsumeResponse ContractBenefitConsumeResponse
     */
    public function contractBenefitConsumeWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->benefitPoint)) {
            $body['benefitPoint'] = $request->benefitPoint;
        }
        if (!Utils::isUnset($request->bizRequestId)) {
            $body['bizRequestId'] = $request->bizRequestId;
        }
        if (!Utils::isUnset($request->consumeQuota)) {
            $body['consumeQuota'] = $request->consumeQuota;
        }
        if (!Utils::isUnset($request->corpId)) {
            $body['corpId'] = $request->corpId;
        }
        if (!Utils::isUnset($request->extParams)) {
            $body['extParams'] = $request->extParams;
        }
        if (!Utils::isUnset($request->isvCorpId)) {
            $body['isvCorpId'] = $request->isvCorpId;
        }
        if (!Utils::isUnset($request->optUnionId)) {
            $body['optUnionId'] = $request->optUnionId;
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
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'ContractBenefitConsume',
            'version'     => 'contract_1.0',
            'protocol'    => 'HTTP',
            'pathname'    => '/v1.0/contract/benefits/consume',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'none',
            'bodyType'    => 'json',
        ]);

        return ContractBenefitConsumeResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary 合同权益核销
     *  *
     * @param ContractBenefitConsumeRequest $request ContractBenefitConsumeRequest
     *
     * @return ContractBenefitConsumeResponse ContractBenefitConsumeResponse
     */
    public function contractBenefitConsume($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new ContractBenefitConsumeHeaders([]);

        return $this->contractBenefitConsumeWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 创建合同比对任务
     *  *
     * @param CreateContractCompareTaskRequest $request CreateContractCompareTaskRequest
     * @param CreateContractCompareTaskHeaders $headers CreateContractCompareTaskHeaders
     * @param RuntimeOptions                   $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateContractCompareTaskResponse CreateContractCompareTaskResponse
     */
    public function createContractCompareTaskWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->comparativeFile)) {
            $body['comparativeFile'] = $request->comparativeFile;
        }
        if (!Utils::isUnset($request->comparativeFileDownloadUrl)) {
            $body['comparativeFileDownloadUrl'] = $request->comparativeFileDownloadUrl;
        }
        if (!Utils::isUnset($request->comparativeFileName)) {
            $body['comparativeFileName'] = $request->comparativeFileName;
        }
        if (!Utils::isUnset($request->fileSource)) {
            $body['fileSource'] = $request->fileSource;
        }
        if (!Utils::isUnset($request->requestId)) {
            $body['requestId'] = $request->requestId;
        }
        if (!Utils::isUnset($request->standardFile)) {
            $body['standardFile'] = $request->standardFile;
        }
        if (!Utils::isUnset($request->standardFileDownloadUrl)) {
            $body['standardFileDownloadUrl'] = $request->standardFileDownloadUrl;
        }
        if (!Utils::isUnset($request->standardFileName)) {
            $body['standardFileName'] = $request->standardFileName;
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
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CreateContractCompareTask',
            'version'     => 'contract_1.0',
            'protocol'    => 'HTTP',
            'pathname'    => '/v1.0/contract/comparisonTasks',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'none',
            'bodyType'    => 'json',
        ]);

        return CreateContractCompareTaskResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary 创建合同比对任务
     *  *
     * @param CreateContractCompareTaskRequest $request CreateContractCompareTaskRequest
     *
     * @return CreateContractCompareTaskResponse CreateContractCompareTaskResponse
     */
    public function createContractCompareTask($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new CreateContractCompareTaskHeaders([]);

        return $this->createContractCompareTaskWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 创建合同提取任务
     *  *
     * @param CreateContractExtractTaskRequest $request CreateContractExtractTaskRequest
     * @param CreateContractExtractTaskHeaders $headers CreateContractExtractTaskHeaders
     * @param RuntimeOptions                   $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateContractExtractTaskResponse CreateContractExtractTaskResponse
     */
    public function createContractExtractTaskWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->contractFile)) {
            $body['contractFile'] = $request->contractFile;
        }
        if (!Utils::isUnset($request->contractFileDownloadUrl)) {
            $body['contractFileDownloadUrl'] = $request->contractFileDownloadUrl;
        }
        if (!Utils::isUnset($request->contractFileName)) {
            $body['contractFileName'] = $request->contractFileName;
        }
        if (!Utils::isUnset($request->extractKeys)) {
            $body['extractKeys'] = $request->extractKeys;
        }
        if (!Utils::isUnset($request->fileSource)) {
            $body['fileSource'] = $request->fileSource;
        }
        if (!Utils::isUnset($request->requestId)) {
            $body['requestId'] = $request->requestId;
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
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CreateContractExtractTask',
            'version'     => 'contract_1.0',
            'protocol'    => 'HTTP',
            'pathname'    => '/v1.0/contract/extractTasks',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'none',
            'bodyType'    => 'json',
        ]);

        return CreateContractExtractTaskResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary 创建合同提取任务
     *  *
     * @param CreateContractExtractTaskRequest $request CreateContractExtractTaskRequest
     *
     * @return CreateContractExtractTaskResponse CreateContractExtractTaskResponse
     */
    public function createContractExtractTask($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new CreateContractExtractTaskHeaders([]);

        return $this->createContractExtractTaskWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 创建合同审查任务
     *  *
     * @param CreateContractReviewTaskRequest $request CreateContractReviewTaskRequest
     * @param CreateContractReviewTaskHeaders $headers CreateContractReviewTaskHeaders
     * @param RuntimeOptions                  $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateContractReviewTaskResponse CreateContractReviewTaskResponse
     */
    public function createContractReviewTaskWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->contractFile)) {
            $body['contractFile'] = $request->contractFile;
        }
        if (!Utils::isUnset($request->contractFileDownloadUrl)) {
            $body['contractFileDownloadUrl'] = $request->contractFileDownloadUrl;
        }
        if (!Utils::isUnset($request->contractFileName)) {
            $body['contractFileName'] = $request->contractFileName;
        }
        if (!Utils::isUnset($request->fileSource)) {
            $body['fileSource'] = $request->fileSource;
        }
        if (!Utils::isUnset($request->requestId)) {
            $body['requestId'] = $request->requestId;
        }
        if (!Utils::isUnset($request->reviewCustomRules)) {
            $body['reviewCustomRules'] = $request->reviewCustomRules;
        }
        if (!Utils::isUnset($request->ruleType)) {
            $body['ruleType'] = $request->ruleType;
        }
        if (!Utils::isUnset($request->standpoint)) {
            $body['standpoint'] = $request->standpoint;
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
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CreateContractReviewTask',
            'version'     => 'contract_1.0',
            'protocol'    => 'HTTP',
            'pathname'    => '/v1.0/contract/reviewTasks',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'none',
            'bodyType'    => 'json',
        ]);

        return CreateContractReviewTaskResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary 创建合同审查任务
     *  *
     * @param CreateContractReviewTaskRequest $request CreateContractReviewTaskRequest
     *
     * @return CreateContractReviewTaskResponse CreateContractReviewTaskResponse
     */
    public function createContractReviewTask($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new CreateContractReviewTaskHeaders([]);

        return $this->createContractReviewTaskWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 天谷侧查询审批单
     *  *
     * @param EsignQueryApprovalInfoRequest $request EsignQueryApprovalInfoRequest
     * @param EsignQueryApprovalInfoHeaders $headers EsignQueryApprovalInfoHeaders
     * @param RuntimeOptions                $runtime runtime options for this request RuntimeOptions
     *
     * @return EsignQueryApprovalInfoResponse EsignQueryApprovalInfoResponse
     */
    public function esignQueryApprovalInfoWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->corpId)) {
            $body['corpId'] = $request->corpId;
        }
        if (!Utils::isUnset($request->esignFlowId)) {
            $body['esignFlowId'] = $request->esignFlowId;
        }
        if (!Utils::isUnset($request->unionId)) {
            $body['unionId'] = $request->unionId;
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
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'EsignQueryApprovalInfo',
            'version'     => 'contract_1.0',
            'protocol'    => 'HTTP',
            'pathname'    => '/v1.0/contract/esign/approvalInfos/query',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'none',
            'bodyType'    => 'json',
        ]);

        return EsignQueryApprovalInfoResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary 天谷侧查询审批单
     *  *
     * @param EsignQueryApprovalInfoRequest $request EsignQueryApprovalInfoRequest
     *
     * @return EsignQueryApprovalInfoResponse EsignQueryApprovalInfoResponse
     */
    public function esignQueryApprovalInfo($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new EsignQueryApprovalInfoHeaders([]);

        return $this->esignQueryApprovalInfoWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 天谷侧查询授权信息接口
     *  *
     * @param EsignQueryGrantInfoRequest $request EsignQueryGrantInfoRequest
     * @param EsignQueryGrantInfoHeaders $headers EsignQueryGrantInfoHeaders
     * @param RuntimeOptions             $runtime runtime options for this request RuntimeOptions
     *
     * @return EsignQueryGrantInfoResponse EsignQueryGrantInfoResponse
     */
    public function esignQueryGrantInfoWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->corpId)) {
            $body['corpId'] = $request->corpId;
        }
        if (!Utils::isUnset($request->extension)) {
            $body['extension'] = $request->extension;
        }
        if (!Utils::isUnset($request->unionId)) {
            $body['unionId'] = $request->unionId;
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
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'EsignQueryGrantInfo',
            'version'     => 'contract_1.0',
            'protocol'    => 'HTTP',
            'pathname'    => '/v1.0/contract/esign/anthInfos/query',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'none',
            'bodyType'    => 'json',
        ]);

        return EsignQueryGrantInfoResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary 天谷侧查询授权信息接口
     *  *
     * @param EsignQueryGrantInfoRequest $request EsignQueryGrantInfoRequest
     *
     * @return EsignQueryGrantInfoResponse EsignQueryGrantInfoResponse
     */
    public function esignQueryGrantInfo($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new EsignQueryGrantInfoHeaders([]);

        return $this->esignQueryGrantInfoWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 天谷侧查询获取免登信息
     *  *
     * @param EsignQueryIdentityByTicketRequest $request EsignQueryIdentityByTicketRequest
     * @param EsignQueryIdentityByTicketHeaders $headers EsignQueryIdentityByTicketHeaders
     * @param RuntimeOptions                    $runtime runtime options for this request RuntimeOptions
     *
     * @return EsignQueryIdentityByTicketResponse EsignQueryIdentityByTicketResponse
     */
    public function esignQueryIdentityByTicketWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->corpId)) {
            $body['corpId'] = $request->corpId;
        }
        if (!Utils::isUnset($request->extension)) {
            $body['extension'] = $request->extension;
        }
        if (!Utils::isUnset($request->ticket)) {
            $body['ticket'] = $request->ticket;
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
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'EsignQueryIdentityByTicket',
            'version'     => 'contract_1.0',
            'protocol'    => 'HTTP',
            'pathname'    => '/v1.0/contract/esign/tickets/identities/query',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'none',
            'bodyType'    => 'json',
        ]);

        return EsignQueryIdentityByTicketResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary 天谷侧查询获取免登信息
     *  *
     * @param EsignQueryIdentityByTicketRequest $request EsignQueryIdentityByTicketRequest
     *
     * @return EsignQueryIdentityByTicketResponse EsignQueryIdentityByTicketResponse
     */
    public function esignQueryIdentityByTicket($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new EsignQueryIdentityByTicketHeaders([]);

        return $this->esignQueryIdentityByTicketWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary e签宝电子签事件同步回传接口
     *  *
     * @param EsignSyncEventRequest $request EsignSyncEventRequest
     * @param EsignSyncEventHeaders $headers EsignSyncEventHeaders
     * @param RuntimeOptions        $runtime runtime options for this request RuntimeOptions
     *
     * @return EsignSyncEventResponse EsignSyncEventResponse
     */
    public function esignSyncEventWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->action)) {
            $body['action'] = $request->action;
        }
        if (!Utils::isUnset($request->corpId)) {
            $body['corpId'] = $request->corpId;
        }
        if (!Utils::isUnset($request->esignData)) {
            $body['esignData'] = $request->esignData;
        }
        if (!Utils::isUnset($request->extension)) {
            $body['extension'] = $request->extension;
        }
        if (!Utils::isUnset($request->unionId)) {
            $body['unionId'] = $request->unionId;
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
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'EsignSyncEvent',
            'version'     => 'contract_1.0',
            'protocol'    => 'HTTP',
            'pathname'    => '/v1.0/contract/esign/events/sync',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'none',
            'bodyType'    => 'json',
        ]);

        return EsignSyncEventResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary e签宝电子签事件同步回传接口
     *  *
     * @param EsignSyncEventRequest $request EsignSyncEventRequest
     *
     * @return EsignSyncEventResponse EsignSyncEventResponse
     */
    public function esignSyncEvent($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new EsignSyncEventHeaders([]);

        return $this->esignSyncEventWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 校验钉钉用户能否访问e签宝页面接口
     *  *
     * @param EsignUserVerifyRequest $request EsignUserVerifyRequest
     * @param EsignUserVerifyHeaders $headers EsignUserVerifyHeaders
     * @param RuntimeOptions         $runtime runtime options for this request RuntimeOptions
     *
     * @return EsignUserVerifyResponse EsignUserVerifyResponse
     */
    public function esignUserVerifyWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->corpId)) {
            $body['corpId'] = $request->corpId;
        }
        if (!Utils::isUnset($request->unionId)) {
            $body['unionId'] = $request->unionId;
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
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'EsignUserVerify',
            'version'     => 'contract_1.0',
            'protocol'    => 'HTTP',
            'pathname'    => '/v1.0/contract/esign/user/verify',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'none',
            'bodyType'    => 'json',
        ]);

        return EsignUserVerifyResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary 校验钉钉用户能否访问e签宝页面接口
     *  *
     * @param EsignUserVerifyRequest $request EsignUserVerifyRequest
     *
     * @return EsignUserVerifyResponse EsignUserVerifyResponse
     */
    public function esignUserVerify($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new EsignUserVerifyHeaders([]);

        return $this->esignUserVerifyWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 完成工单审查接口
     *  *
     * @param FinishReviewOrderRequest $request FinishReviewOrderRequest
     * @param FinishReviewOrderHeaders $headers FinishReviewOrderHeaders
     * @param RuntimeOptions           $runtime runtime options for this request RuntimeOptions
     *
     * @return FinishReviewOrderResponse FinishReviewOrderResponse
     */
    public function finishReviewOrderWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->endFiles)) {
            $body['endFiles'] = $request->endFiles;
        }
        if (!Utils::isUnset($request->extension)) {
            $body['extension'] = $request->extension;
        }
        if (!Utils::isUnset($request->orderId)) {
            $body['orderId'] = $request->orderId;
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
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'FinishReviewOrder',
            'version'     => 'contract_1.0',
            'protocol'    => 'HTTP',
            'pathname'    => '/v1.0/contract/reviews/finish',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'none',
            'bodyType'    => 'json',
        ]);

        return FinishReviewOrderResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary 完成工单审查接口
     *  *
     * @param FinishReviewOrderRequest $request FinishReviewOrderRequest
     *
     * @return FinishReviewOrderResponse FinishReviewOrderResponse
     */
    public function finishReviewOrder($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new FinishReviewOrderHeaders([]);

        return $this->finishReviewOrderWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary e签宝查询智能合同版本接口
     *  *
     * @param QueryAdvancedContractVersionRequest $request QueryAdvancedContractVersionRequest
     * @param QueryAdvancedContractVersionHeaders $headers QueryAdvancedContractVersionHeaders
     * @param RuntimeOptions                      $runtime runtime options for this request RuntimeOptions
     *
     * @return QueryAdvancedContractVersionResponse QueryAdvancedContractVersionResponse
     */
    public function queryAdvancedContractVersionWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->corpId)) {
            $body['corpId'] = $request->corpId;
        }
        if (!Utils::isUnset($request->extension)) {
            $body['extension'] = $request->extension;
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
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'QueryAdvancedContractVersion',
            'version'     => 'contract_1.0',
            'protocol'    => 'HTTP',
            'pathname'    => '/v1.0/contract/versions/query',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'none',
            'bodyType'    => 'json',
        ]);

        return QueryAdvancedContractVersionResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary e签宝查询智能合同版本接口
     *  *
     * @param QueryAdvancedContractVersionRequest $request QueryAdvancedContractVersionRequest
     *
     * @return QueryAdvancedContractVersionResponse QueryAdvancedContractVersionResponse
     */
    public function queryAdvancedContractVersion($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new QueryAdvancedContractVersionHeaders([]);

        return $this->queryAdvancedContractVersionWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 查询合同比对结果
     *  *
     * @param QueryContractCompareResultRequest $request QueryContractCompareResultRequest
     * @param QueryContractCompareResultHeaders $headers QueryContractCompareResultHeaders
     * @param RuntimeOptions                    $runtime runtime options for this request RuntimeOptions
     *
     * @return QueryContractCompareResultResponse QueryContractCompareResultResponse
     */
    public function queryContractCompareResultWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->compareTaskId)) {
            $body['compareTaskId'] = $request->compareTaskId;
        }
        if (!Utils::isUnset($request->requestId)) {
            $body['requestId'] = $request->requestId;
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
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'QueryContractCompareResult',
            'version'     => 'contract_1.0',
            'protocol'    => 'HTTP',
            'pathname'    => '/v1.0/contract/comparisonResults/query',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'none',
            'bodyType'    => 'json',
        ]);

        return QueryContractCompareResultResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary 查询合同比对结果
     *  *
     * @param QueryContractCompareResultRequest $request QueryContractCompareResultRequest
     *
     * @return QueryContractCompareResultResponse QueryContractCompareResultResponse
     */
    public function queryContractCompareResult($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new QueryContractCompareResultHeaders([]);

        return $this->queryContractCompareResultWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 查询合同提取结果
     *  *
     * @param QueryContractExtractResultRequest $request QueryContractExtractResultRequest
     * @param QueryContractExtractResultHeaders $headers QueryContractExtractResultHeaders
     * @param RuntimeOptions                    $runtime runtime options for this request RuntimeOptions
     *
     * @return QueryContractExtractResultResponse QueryContractExtractResultResponse
     */
    public function queryContractExtractResultWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->extractTaskId)) {
            $body['extractTaskId'] = $request->extractTaskId;
        }
        if (!Utils::isUnset($request->requestId)) {
            $body['requestId'] = $request->requestId;
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
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'QueryContractExtractResult',
            'version'     => 'contract_1.0',
            'protocol'    => 'HTTP',
            'pathname'    => '/v1.0/contract/extractResults/query',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'none',
            'bodyType'    => 'json',
        ]);

        return QueryContractExtractResultResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary 查询合同提取结果
     *  *
     * @param QueryContractExtractResultRequest $request QueryContractExtractResultRequest
     *
     * @return QueryContractExtractResultResponse QueryContractExtractResultResponse
     */
    public function queryContractExtractResult($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new QueryContractExtractResultHeaders([]);

        return $this->queryContractExtractResultWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 查询合同审查结果
     *  *
     * @param QueryContractReviewResultRequest $request QueryContractReviewResultRequest
     * @param QueryContractReviewResultHeaders $headers QueryContractReviewResultHeaders
     * @param RuntimeOptions                   $runtime runtime options for this request RuntimeOptions
     *
     * @return QueryContractReviewResultResponse QueryContractReviewResultResponse
     */
    public function queryContractReviewResultWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->requestId)) {
            $body['requestId'] = $request->requestId;
        }
        if (!Utils::isUnset($request->reviewTaskId)) {
            $body['reviewTaskId'] = $request->reviewTaskId;
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
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'QueryContractReviewResult',
            'version'     => 'contract_1.0',
            'protocol'    => 'HTTP',
            'pathname'    => '/v1.0/contract/reviewResults/query',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'none',
            'bodyType'    => 'json',
        ]);

        return QueryContractReviewResultResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary 查询合同审查结果
     *  *
     * @param QueryContractReviewResultRequest $request QueryContractReviewResultRequest
     *
     * @return QueryContractReviewResultResponse QueryContractReviewResultResponse
     */
    public function queryContractReviewResult($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new QueryContractReviewResultHeaders([]);

        return $this->queryContractReviewResultWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 发送合同相关卡片
     *  *
     * @param SendContractCardRequest $request SendContractCardRequest
     * @param SendContractCardHeaders $headers SendContractCardHeaders
     * @param RuntimeOptions          $runtime runtime options for this request RuntimeOptions
     *
     * @return SendContractCardResponse SendContractCardResponse
     */
    public function sendContractCardWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->cardType)) {
            $body['cardType'] = $request->cardType;
        }
        if (!Utils::isUnset($request->contractInfo)) {
            $body['contractInfo'] = $request->contractInfo;
        }
        if (!Utils::isUnset($request->corpId)) {
            $body['corpId'] = $request->corpId;
        }
        if (!Utils::isUnset($request->extension)) {
            $body['extension'] = $request->extension;
        }
        if (!Utils::isUnset($request->processInstanceId)) {
            $body['processInstanceId'] = $request->processInstanceId;
        }
        if (!Utils::isUnset($request->receiveGroups)) {
            $body['receiveGroups'] = $request->receiveGroups;
        }
        if (!Utils::isUnset($request->receivers)) {
            $body['receivers'] = $request->receivers;
        }
        if (!Utils::isUnset($request->sender)) {
            $body['sender'] = $request->sender;
        }
        if (!Utils::isUnset($request->syncSingleChat)) {
            $body['syncSingleChat'] = $request->syncSingleChat;
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
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'SendContractCard',
            'version'     => 'contract_1.0',
            'protocol'    => 'HTTP',
            'pathname'    => '/v1.0/contract/cards/send',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'none',
            'bodyType'    => 'json',
        ]);

        return SendContractCardResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary 发送合同相关卡片
     *  *
     * @param SendContractCardRequest $request SendContractCardRequest
     *
     * @return SendContractCardResponse SendContractCardResponse
     */
    public function sendContractCard($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new SendContractCardHeaders([]);

        return $this->sendContractCardWithOptions($request, $headers, $runtime);
    }
}
