<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dingtalk\Vhrm_1_0;

use AlibabaCloud\OpenApiUtil\OpenApiUtilClient;
use AlibabaCloud\SDK\Dingtalk\Vhrm_1_0\Models\AddHrmLegalEntityHeaders;
use AlibabaCloud\SDK\Dingtalk\Vhrm_1_0\Models\AddHrmLegalEntityRequest;
use AlibabaCloud\SDK\Dingtalk\Vhrm_1_0\Models\AddHrmLegalEntityResponse;
use AlibabaCloud\SDK\Dingtalk\Vhrm_1_0\Models\AddHrmPreentryHeaders;
use AlibabaCloud\SDK\Dingtalk\Vhrm_1_0\Models\AddHrmPreentryRequest;
use AlibabaCloud\SDK\Dingtalk\Vhrm_1_0\Models\AddHrmPreentryResponse;
use AlibabaCloud\SDK\Dingtalk\Vhrm_1_0\Models\CreateRecordHeaders;
use AlibabaCloud\SDK\Dingtalk\Vhrm_1_0\Models\CreateRecordRequest;
use AlibabaCloud\SDK\Dingtalk\Vhrm_1_0\Models\CreateRecordResponse;
use AlibabaCloud\SDK\Dingtalk\Vhrm_1_0\Models\DeviceMarketManagerResponse;
use AlibabaCloud\SDK\Dingtalk\Vhrm_1_0\Models\DeviceMarketOrderManagerResponse;
use AlibabaCloud\SDK\Dingtalk\Vhrm_1_0\Models\ECertQueryHeaders;
use AlibabaCloud\SDK\Dingtalk\Vhrm_1_0\Models\ECertQueryRequest;
use AlibabaCloud\SDK\Dingtalk\Vhrm_1_0\Models\ECertQueryResponse;
use AlibabaCloud\SDK\Dingtalk\Vhrm_1_0\Models\EmployeeAttachmentUpdateHeaders;
use AlibabaCloud\SDK\Dingtalk\Vhrm_1_0\Models\EmployeeAttachmentUpdateRequest;
use AlibabaCloud\SDK\Dingtalk\Vhrm_1_0\Models\EmployeeAttachmentUpdateResponse;
use AlibabaCloud\SDK\Dingtalk\Vhrm_1_0\Models\EmpStartDismissionHeaders;
use AlibabaCloud\SDK\Dingtalk\Vhrm_1_0\Models\EmpStartDismissionRequest;
use AlibabaCloud\SDK\Dingtalk\Vhrm_1_0\Models\EmpStartDismissionResponse;
use AlibabaCloud\SDK\Dingtalk\Vhrm_1_0\Models\EsignRollbackHeaders;
use AlibabaCloud\SDK\Dingtalk\Vhrm_1_0\Models\EsignRollbackRequest;
use AlibabaCloud\SDK\Dingtalk\Vhrm_1_0\Models\EsignRollbackResponse;
use AlibabaCloud\SDK\Dingtalk\Vhrm_1_0\Models\GetAllDismissionReasonsHeaders;
use AlibabaCloud\SDK\Dingtalk\Vhrm_1_0\Models\GetAllDismissionReasonsResponse;
use AlibabaCloud\SDK\Dingtalk\Vhrm_1_0\Models\GetEmployeeRosterByFieldHeaders;
use AlibabaCloud\SDK\Dingtalk\Vhrm_1_0\Models\GetEmployeeRosterByFieldRequest;
use AlibabaCloud\SDK\Dingtalk\Vhrm_1_0\Models\GetEmployeeRosterByFieldResponse;
use AlibabaCloud\SDK\Dingtalk\Vhrm_1_0\Models\GetFileTemplateListHeaders;
use AlibabaCloud\SDK\Dingtalk\Vhrm_1_0\Models\GetFileTemplateListRequest;
use AlibabaCloud\SDK\Dingtalk\Vhrm_1_0\Models\GetFileTemplateListResponse;
use AlibabaCloud\SDK\Dingtalk\Vhrm_1_0\Models\GetSignRecordByIdHeaders;
use AlibabaCloud\SDK\Dingtalk\Vhrm_1_0\Models\GetSignRecordByIdRequest;
use AlibabaCloud\SDK\Dingtalk\Vhrm_1_0\Models\GetSignRecordByIdResponse;
use AlibabaCloud\SDK\Dingtalk\Vhrm_1_0\Models\GetSignRecordByUserIdHeaders;
use AlibabaCloud\SDK\Dingtalk\Vhrm_1_0\Models\GetSignRecordByUserIdRequest;
use AlibabaCloud\SDK\Dingtalk\Vhrm_1_0\Models\GetSignRecordByUserIdResponse;
use AlibabaCloud\SDK\Dingtalk\Vhrm_1_0\Models\GetUserSignedRecordsByOuterIdHeaders;
use AlibabaCloud\SDK\Dingtalk\Vhrm_1_0\Models\GetUserSignedRecordsByOuterIdRequest;
use AlibabaCloud\SDK\Dingtalk\Vhrm_1_0\Models\GetUserSignedRecordsByOuterIdResponse;
use AlibabaCloud\SDK\Dingtalk\Vhrm_1_0\Models\HrmAuthResourcesQueryHeaders;
use AlibabaCloud\SDK\Dingtalk\Vhrm_1_0\Models\HrmAuthResourcesQueryRequest;
use AlibabaCloud\SDK\Dingtalk\Vhrm_1_0\Models\HrmAuthResourcesQueryResponse;
use AlibabaCloud\SDK\Dingtalk\Vhrm_1_0\Models\HrmBenefitQueryHeaders;
use AlibabaCloud\SDK\Dingtalk\Vhrm_1_0\Models\HrmBenefitQueryRequest;
use AlibabaCloud\SDK\Dingtalk\Vhrm_1_0\Models\HrmBenefitQueryResponse;
use AlibabaCloud\SDK\Dingtalk\Vhrm_1_0\Models\HrmCorpConfigQueryHeaders;
use AlibabaCloud\SDK\Dingtalk\Vhrm_1_0\Models\HrmCorpConfigQueryRequest;
use AlibabaCloud\SDK\Dingtalk\Vhrm_1_0\Models\HrmCorpConfigQueryResponse;
use AlibabaCloud\SDK\Dingtalk\Vhrm_1_0\Models\HrmMailSendHeaders;
use AlibabaCloud\SDK\Dingtalk\Vhrm_1_0\Models\HrmMailSendRequest;
use AlibabaCloud\SDK\Dingtalk\Vhrm_1_0\Models\HrmMailSendResponse;
use AlibabaCloud\SDK\Dingtalk\Vhrm_1_0\Models\HrmMokaEventHeaders;
use AlibabaCloud\SDK\Dingtalk\Vhrm_1_0\Models\HrmMokaEventRequest;
use AlibabaCloud\SDK\Dingtalk\Vhrm_1_0\Models\HrmMokaEventResponse;
use AlibabaCloud\SDK\Dingtalk\Vhrm_1_0\Models\HrmMokaOapiHeaders;
use AlibabaCloud\SDK\Dingtalk\Vhrm_1_0\Models\HrmMokaOapiRequest;
use AlibabaCloud\SDK\Dingtalk\Vhrm_1_0\Models\HrmMokaOapiResponse;
use AlibabaCloud\SDK\Dingtalk\Vhrm_1_0\Models\HrmProcessRegularHeaders;
use AlibabaCloud\SDK\Dingtalk\Vhrm_1_0\Models\HrmProcessRegularRequest;
use AlibabaCloud\SDK\Dingtalk\Vhrm_1_0\Models\HrmProcessRegularResponse;
use AlibabaCloud\SDK\Dingtalk\Vhrm_1_0\Models\HrmProcessTerminationAndHandoverHeaders;
use AlibabaCloud\SDK\Dingtalk\Vhrm_1_0\Models\HrmProcessTerminationAndHandoverRequest;
use AlibabaCloud\SDK\Dingtalk\Vhrm_1_0\Models\HrmProcessTerminationAndHandoverResponse;
use AlibabaCloud\SDK\Dingtalk\Vhrm_1_0\Models\HrmProcessTransferHeaders;
use AlibabaCloud\SDK\Dingtalk\Vhrm_1_0\Models\HrmProcessTransferRequest;
use AlibabaCloud\SDK\Dingtalk\Vhrm_1_0\Models\HrmProcessTransferResponse;
use AlibabaCloud\SDK\Dingtalk\Vhrm_1_0\Models\HrmProcessUpdateTerminationInfoHeaders;
use AlibabaCloud\SDK\Dingtalk\Vhrm_1_0\Models\HrmProcessUpdateTerminationInfoRequest;
use AlibabaCloud\SDK\Dingtalk\Vhrm_1_0\Models\HrmProcessUpdateTerminationInfoResponse;
use AlibabaCloud\SDK\Dingtalk\Vhrm_1_0\Models\HrmPtsServiceHeaders;
use AlibabaCloud\SDK\Dingtalk\Vhrm_1_0\Models\HrmPtsServiceRequest;
use AlibabaCloud\SDK\Dingtalk\Vhrm_1_0\Models\HrmPtsServiceResponse;
use AlibabaCloud\SDK\Dingtalk\Vhrm_1_0\Models\InvalidSignRecordsHeaders;
use AlibabaCloud\SDK\Dingtalk\Vhrm_1_0\Models\InvalidSignRecordsRequest;
use AlibabaCloud\SDK\Dingtalk\Vhrm_1_0\Models\InvalidSignRecordsResponse;
use AlibabaCloud\SDK\Dingtalk\Vhrm_1_0\Models\MasterDataDeleteHeaders;
use AlibabaCloud\SDK\Dingtalk\Vhrm_1_0\Models\MasterDataDeleteRequest;
use AlibabaCloud\SDK\Dingtalk\Vhrm_1_0\Models\MasterDataDeleteResponse;
use AlibabaCloud\SDK\Dingtalk\Vhrm_1_0\Models\MasterDataQueryHeaders;
use AlibabaCloud\SDK\Dingtalk\Vhrm_1_0\Models\MasterDataQueryRequest;
use AlibabaCloud\SDK\Dingtalk\Vhrm_1_0\Models\MasterDataQueryResponse;
use AlibabaCloud\SDK\Dingtalk\Vhrm_1_0\Models\MasterDataSaveHeaders;
use AlibabaCloud\SDK\Dingtalk\Vhrm_1_0\Models\MasterDataSaveRequest;
use AlibabaCloud\SDK\Dingtalk\Vhrm_1_0\Models\MasterDataSaveResponse;
use AlibabaCloud\SDK\Dingtalk\Vhrm_1_0\Models\MasterDatasGetHeaders;
use AlibabaCloud\SDK\Dingtalk\Vhrm_1_0\Models\MasterDatasGetRequest;
use AlibabaCloud\SDK\Dingtalk\Vhrm_1_0\Models\MasterDatasGetResponse;
use AlibabaCloud\SDK\Dingtalk\Vhrm_1_0\Models\MasterDatasQueryHeaders;
use AlibabaCloud\SDK\Dingtalk\Vhrm_1_0\Models\MasterDatasQueryRequest;
use AlibabaCloud\SDK\Dingtalk\Vhrm_1_0\Models\MasterDatasQueryResponse;
use AlibabaCloud\SDK\Dingtalk\Vhrm_1_0\Models\MasterDataTenantQueyHeaders;
use AlibabaCloud\SDK\Dingtalk\Vhrm_1_0\Models\MasterDataTenantQueyRequest;
use AlibabaCloud\SDK\Dingtalk\Vhrm_1_0\Models\MasterDataTenantQueyResponse;
use AlibabaCloud\SDK\Dingtalk\Vhrm_1_0\Models\OpenOemMicroAppHeaders;
use AlibabaCloud\SDK\Dingtalk\Vhrm_1_0\Models\OpenOemMicroAppRequest;
use AlibabaCloud\SDK\Dingtalk\Vhrm_1_0\Models\OpenOemMicroAppResponse;
use AlibabaCloud\SDK\Dingtalk\Vhrm_1_0\Models\QueryCustomEntryProcessesHeaders;
use AlibabaCloud\SDK\Dingtalk\Vhrm_1_0\Models\QueryCustomEntryProcessesRequest;
use AlibabaCloud\SDK\Dingtalk\Vhrm_1_0\Models\QueryCustomEntryProcessesResponse;
use AlibabaCloud\SDK\Dingtalk\Vhrm_1_0\Models\QueryDismissionStaffIdListHeaders;
use AlibabaCloud\SDK\Dingtalk\Vhrm_1_0\Models\QueryDismissionStaffIdListRequest;
use AlibabaCloud\SDK\Dingtalk\Vhrm_1_0\Models\QueryDismissionStaffIdListResponse;
use AlibabaCloud\SDK\Dingtalk\Vhrm_1_0\Models\QueryHrmEmployeeDismissionInfoHeaders;
use AlibabaCloud\SDK\Dingtalk\Vhrm_1_0\Models\QueryHrmEmployeeDismissionInfoRequest;
use AlibabaCloud\SDK\Dingtalk\Vhrm_1_0\Models\QueryHrmEmployeeDismissionInfoResponse;
use AlibabaCloud\SDK\Dingtalk\Vhrm_1_0\Models\QueryHrmEmployeeDismissionInfoShrinkRequest;
use AlibabaCloud\SDK\Dingtalk\Vhrm_1_0\Models\QueryJobRanksHeaders;
use AlibabaCloud\SDK\Dingtalk\Vhrm_1_0\Models\QueryJobRanksRequest;
use AlibabaCloud\SDK\Dingtalk\Vhrm_1_0\Models\QueryJobRanksResponse;
use AlibabaCloud\SDK\Dingtalk\Vhrm_1_0\Models\QueryJobsHeaders;
use AlibabaCloud\SDK\Dingtalk\Vhrm_1_0\Models\QueryJobsRequest;
use AlibabaCloud\SDK\Dingtalk\Vhrm_1_0\Models\QueryJobsResponse;
use AlibabaCloud\SDK\Dingtalk\Vhrm_1_0\Models\QueryMicroAppStatusHeaders;
use AlibabaCloud\SDK\Dingtalk\Vhrm_1_0\Models\QueryMicroAppStatusRequest;
use AlibabaCloud\SDK\Dingtalk\Vhrm_1_0\Models\QueryMicroAppStatusResponse;
use AlibabaCloud\SDK\Dingtalk\Vhrm_1_0\Models\QueryMicroAppViewHeaders;
use AlibabaCloud\SDK\Dingtalk\Vhrm_1_0\Models\QueryMicroAppViewRequest;
use AlibabaCloud\SDK\Dingtalk\Vhrm_1_0\Models\QueryMicroAppViewResponse;
use AlibabaCloud\SDK\Dingtalk\Vhrm_1_0\Models\QueryPositionsHeaders;
use AlibabaCloud\SDK\Dingtalk\Vhrm_1_0\Models\QueryPositionsRequest;
use AlibabaCloud\SDK\Dingtalk\Vhrm_1_0\Models\QueryPositionsResponse;
use AlibabaCloud\SDK\Dingtalk\Vhrm_1_0\Models\QueryPositionVersionHeaders;
use AlibabaCloud\SDK\Dingtalk\Vhrm_1_0\Models\QueryPositionVersionResponse;
use AlibabaCloud\SDK\Dingtalk\Vhrm_1_0\Models\RevokeSignRecordsHeaders;
use AlibabaCloud\SDK\Dingtalk\Vhrm_1_0\Models\RevokeSignRecordsRequest;
use AlibabaCloud\SDK\Dingtalk\Vhrm_1_0\Models\RevokeSignRecordsResponse;
use AlibabaCloud\SDK\Dingtalk\Vhrm_1_0\Models\RevokeTerminationHeaders;
use AlibabaCloud\SDK\Dingtalk\Vhrm_1_0\Models\RevokeTerminationRequest;
use AlibabaCloud\SDK\Dingtalk\Vhrm_1_0\Models\RevokeTerminationResponse;
use AlibabaCloud\SDK\Dingtalk\Vhrm_1_0\Models\RosterMetaAvailableFieldListHeaders;
use AlibabaCloud\SDK\Dingtalk\Vhrm_1_0\Models\RosterMetaAvailableFieldListRequest;
use AlibabaCloud\SDK\Dingtalk\Vhrm_1_0\Models\RosterMetaAvailableFieldListResponse;
use AlibabaCloud\SDK\Dingtalk\Vhrm_1_0\Models\RosterMetaFieldOptionsUpdateHeaders;
use AlibabaCloud\SDK\Dingtalk\Vhrm_1_0\Models\RosterMetaFieldOptionsUpdateRequest;
use AlibabaCloud\SDK\Dingtalk\Vhrm_1_0\Models\RosterMetaFieldOptionsUpdateResponse;
use AlibabaCloud\SDK\Dingtalk\Vhrm_1_0\Models\SendIsvCardMessageHeaders;
use AlibabaCloud\SDK\Dingtalk\Vhrm_1_0\Models\SendIsvCardMessageRequest;
use AlibabaCloud\SDK\Dingtalk\Vhrm_1_0\Models\SendIsvCardMessageResponse;
use AlibabaCloud\SDK\Dingtalk\Vhrm_1_0\Models\SolutionTaskInitHeaders;
use AlibabaCloud\SDK\Dingtalk\Vhrm_1_0\Models\SolutionTaskInitRequest;
use AlibabaCloud\SDK\Dingtalk\Vhrm_1_0\Models\SolutionTaskInitResponse;
use AlibabaCloud\SDK\Dingtalk\Vhrm_1_0\Models\SolutionTaskSaveHeaders;
use AlibabaCloud\SDK\Dingtalk\Vhrm_1_0\Models\SolutionTaskSaveRequest;
use AlibabaCloud\SDK\Dingtalk\Vhrm_1_0\Models\SolutionTaskSaveResponse;
use AlibabaCloud\SDK\Dingtalk\Vhrm_1_0\Models\SyncSolutionStatusHeaders;
use AlibabaCloud\SDK\Dingtalk\Vhrm_1_0\Models\SyncSolutionStatusRequest;
use AlibabaCloud\SDK\Dingtalk\Vhrm_1_0\Models\SyncSolutionStatusResponse;
use AlibabaCloud\SDK\Dingtalk\Vhrm_1_0\Models\SyncTaskTemplateHeaders;
use AlibabaCloud\SDK\Dingtalk\Vhrm_1_0\Models\SyncTaskTemplateRequest;
use AlibabaCloud\SDK\Dingtalk\Vhrm_1_0\Models\SyncTaskTemplateResponse;
use AlibabaCloud\SDK\Dingtalk\Vhrm_1_0\Models\UpdateEmpDismissionInfoHeaders;
use AlibabaCloud\SDK\Dingtalk\Vhrm_1_0\Models\UpdateEmpDismissionInfoRequest;
use AlibabaCloud\SDK\Dingtalk\Vhrm_1_0\Models\UpdateEmpDismissionInfoResponse;
use AlibabaCloud\SDK\Dingtalk\Vhrm_1_0\Models\UpdateHrmLegalEntityNameHeaders;
use AlibabaCloud\SDK\Dingtalk\Vhrm_1_0\Models\UpdateHrmLegalEntityNameRequest;
use AlibabaCloud\SDK\Dingtalk\Vhrm_1_0\Models\UpdateHrmLegalEntityNameResponse;
use AlibabaCloud\SDK\Dingtalk\Vhrm_1_0\Models\UpdateHrmLegalEntityWithoutNameHeaders;
use AlibabaCloud\SDK\Dingtalk\Vhrm_1_0\Models\UpdateHrmLegalEntityWithoutNameRequest;
use AlibabaCloud\SDK\Dingtalk\Vhrm_1_0\Models\UpdateHrmLegalEntityWithoutNameResponse;
use AlibabaCloud\SDK\Dingtalk\Vhrm_1_0\Models\UpdateHrmVersionRollBackStatusHeaders;
use AlibabaCloud\SDK\Dingtalk\Vhrm_1_0\Models\UpdateHrmVersionRollBackStatusRequest;
use AlibabaCloud\SDK\Dingtalk\Vhrm_1_0\Models\UpdateHrmVersionRollBackStatusResponse;
use AlibabaCloud\SDK\Dingtalk\Vhrm_1_0\Models\UpdateIsvCardMessageHeaders;
use AlibabaCloud\SDK\Dingtalk\Vhrm_1_0\Models\UpdateIsvCardMessageRequest;
use AlibabaCloud\SDK\Dingtalk\Vhrm_1_0\Models\UpdateIsvCardMessageResponse;
use AlibabaCloud\SDK\Dingtalk\Vhrm_1_0\Models\UploadAttachmentHeaders;
use AlibabaCloud\SDK\Dingtalk\Vhrm_1_0\Models\UploadAttachmentRequest;
use AlibabaCloud\SDK\Dingtalk\Vhrm_1_0\Models\UploadAttachmentResponse;
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
        $this->_signatureAlgorithm = 'v2';
        $this->_endpointRule = '';
        if (Utils::empty_($this->_endpoint)) {
            $this->_endpoint = 'api.dingtalk.com';
        }
    }

    /**
     * @summary 新增法人公司
     *  *
     * @param AddHrmLegalEntityRequest $request AddHrmLegalEntityRequest
     * @param AddHrmLegalEntityHeaders $headers AddHrmLegalEntityHeaders
     * @param RuntimeOptions           $runtime runtime options for this request RuntimeOptions
     *
     * @return AddHrmLegalEntityResponse AddHrmLegalEntityResponse
     */
    public function addHrmLegalEntityWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->dingTenantId)) {
            $query['dingTenantId'] = $request->dingTenantId;
        }
        $body = [];
        if (!Utils::isUnset($request->corpId)) {
            $body['corpId'] = $request->corpId;
        }
        if (!Utils::isUnset($request->createUserId)) {
            $body['createUserId'] = $request->createUserId;
        }
        if (!Utils::isUnset($request->ext)) {
            $body['ext'] = $request->ext;
        }
        if (!Utils::isUnset($request->legalEntityName)) {
            $body['legalEntityName'] = $request->legalEntityName;
        }
        if (!Utils::isUnset($request->legalEntityShortName)) {
            $body['legalEntityShortName'] = $request->legalEntityShortName;
        }
        if (!Utils::isUnset($request->legalEntityStatus)) {
            $body['legalEntityStatus'] = $request->legalEntityStatus;
        }
        if (!Utils::isUnset($request->legalPersonName)) {
            $body['legalPersonName'] = $request->legalPersonName;
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
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'AddHrmLegalEntity',
            'version' => 'hrm_1.0',
            'protocol' => 'HTTP',
            'pathname' => '/v1.0/hrm/masters/legalEntities/companies',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'none',
            'bodyType' => 'json',
        ]);

        return AddHrmLegalEntityResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary 新增法人公司
     *  *
     * @param AddHrmLegalEntityRequest $request AddHrmLegalEntityRequest
     *
     * @return AddHrmLegalEntityResponse AddHrmLegalEntityResponse
     */
    public function addHrmLegalEntity($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new AddHrmLegalEntityHeaders([]);

        return $this->addHrmLegalEntityWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 智能人事添加待入职员工信息(支持花名册数据和分组明细更新)
     *  *
     * @param AddHrmPreentryRequest $request AddHrmPreentryRequest
     * @param AddHrmPreentryHeaders $headers AddHrmPreentryHeaders
     * @param RuntimeOptions        $runtime runtime options for this request RuntimeOptions
     *
     * @return AddHrmPreentryResponse AddHrmPreentryResponse
     */
    public function addHrmPreentryWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->agentId)) {
            $body['agentId'] = $request->agentId;
        }
        if (!Utils::isUnset($request->groups)) {
            $body['groups'] = $request->groups;
        }
        if (!Utils::isUnset($request->mobile)) {
            $body['mobile'] = $request->mobile;
        }
        if (!Utils::isUnset($request->name)) {
            $body['name'] = $request->name;
        }
        if (!Utils::isUnset($request->needSendPreEntryMsg)) {
            $body['needSendPreEntryMsg'] = $request->needSendPreEntryMsg;
        }
        if (!Utils::isUnset($request->preEntryTime)) {
            $body['preEntryTime'] = $request->preEntryTime;
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
            'action' => 'AddHrmPreentry',
            'version' => 'hrm_1.0',
            'protocol' => 'HTTP',
            'pathname' => '/v1.0/hrm/preentries',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'none',
            'bodyType' => 'json',
        ]);

        return AddHrmPreentryResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary 智能人事添加待入职员工信息(支持花名册数据和分组明细更新)
     *  *
     * @param AddHrmPreentryRequest $request AddHrmPreentryRequest
     *
     * @return AddHrmPreentryResponse AddHrmPreentryResponse
     */
    public function addHrmPreentry($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new AddHrmPreentryHeaders([]);

        return $this->addHrmPreentryWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 创建电子签签署记录
     *  *
     * @param CreateRecordRequest $request CreateRecordRequest
     * @param CreateRecordHeaders $headers CreateRecordHeaders
     * @param RuntimeOptions      $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateRecordResponse CreateRecordResponse
     */
    public function createRecordWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->attachmentList)) {
            $body['attachmentList'] = $request->attachmentList;
        }
        if (!Utils::isUnset($request->deptId)) {
            $body['deptId'] = $request->deptId;
        }
        if (!Utils::isUnset($request->fieldList)) {
            $body['fieldList'] = $request->fieldList;
        }
        if (!Utils::isUnset($request->groupList)) {
            $body['groupList'] = $request->groupList;
        }
        if (!Utils::isUnset($request->outerId)) {
            $body['outerId'] = $request->outerId;
        }
        if (!Utils::isUnset($request->remark)) {
            $body['remark'] = $request->remark;
        }
        if (!Utils::isUnset($request->signLastLegalEntityName)) {
            $body['signLastLegalEntityName'] = $request->signLastLegalEntityName;
        }
        if (!Utils::isUnset($request->signLegalEntityName)) {
            $body['signLegalEntityName'] = $request->signLegalEntityName;
        }
        if (!Utils::isUnset($request->signSource)) {
            $body['signSource'] = $request->signSource;
        }
        if (!Utils::isUnset($request->signStartUserId)) {
            $body['signStartUserId'] = $request->signStartUserId;
        }
        if (!Utils::isUnset($request->signUserId)) {
            $body['signUserId'] = $request->signUserId;
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
            'action' => 'CreateRecord',
            'version' => 'hrm_1.0',
            'protocol' => 'HTTP',
            'pathname' => '/v1.0/hrm/masters/signCenters/records',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'none',
            'bodyType' => 'json',
        ]);

        return CreateRecordResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary 创建电子签签署记录
     *  *
     * @param CreateRecordRequest $request CreateRecordRequest
     *
     * @return CreateRecordResponse CreateRecordResponse
     */
    public function createRecord($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new CreateRecordHeaders([]);

        return $this->createRecordWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 智能人事设备市场管理
     *  *
     * @param string[]       $headers map
     * @param RuntimeOptions $runtime runtime options for this request RuntimeOptions
     *
     * @return DeviceMarketManagerResponse DeviceMarketManagerResponse
     */
    public function deviceMarketManagerWithOptions($headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'DeviceMarketManager',
            'version' => 'hrm_1.0',
            'protocol' => 'HTTP',
            'pathname' => '/v1.0/hrm/device/market/manager',
            'method' => 'GET',
            'authType' => 'Anonymous',
            'style' => 'ROA',
            'reqBodyType' => 'none',
            'bodyType' => 'json',
        ]);

        return DeviceMarketManagerResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary 智能人事设备市场管理
     *  *
     * @return DeviceMarketManagerResponse DeviceMarketManagerResponse
     */
    public function deviceMarketManager()
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deviceMarketManagerWithOptions($headers, $runtime);
    }

    /**
     * @summary 智能人事设备定向管理接口
     *  *
     * @param string[]       $headers map
     * @param RuntimeOptions $runtime runtime options for this request RuntimeOptions
     *
     * @return DeviceMarketOrderManagerResponse DeviceMarketOrderManagerResponse
     */
    public function deviceMarketOrderManagerWithOptions($headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'DeviceMarketOrderManager',
            'version' => 'hrm_1.0',
            'protocol' => 'HTTP',
            'pathname' => '/v1.0/hrm/device/market/order/manager',
            'method' => 'GET',
            'authType' => 'Anonymous',
            'style' => 'ROA',
            'reqBodyType' => 'none',
            'bodyType' => 'json',
        ]);

        return DeviceMarketOrderManagerResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary 智能人事设备定向管理接口
     *  *
     * @return DeviceMarketOrderManagerResponse DeviceMarketOrderManagerResponse
     */
    public function deviceMarketOrderManager()
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deviceMarketOrderManagerWithOptions($headers, $runtime);
    }

    /**
     * @summary e签宝专有查询证件接口
     *  *
     * @param ECertQueryRequest $request ECertQueryRequest
     * @param ECertQueryHeaders $headers ECertQueryHeaders
     * @param RuntimeOptions    $runtime runtime options for this request RuntimeOptions
     *
     * @return ECertQueryResponse ECertQueryResponse
     */
    public function eCertQueryWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->userId)) {
            $query['userId'] = $request->userId;
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
            'action' => 'ECertQuery',
            'version' => 'hrm_1.0',
            'protocol' => 'HTTP',
            'pathname' => '/v1.0/hrm/eCerts',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ECertQueryResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary e签宝专有查询证件接口
     *  *
     * @param ECertQueryRequest $request ECertQueryRequest
     *
     * @return ECertQueryResponse ECertQueryResponse
     */
    public function eCertQuery($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new ECertQueryHeaders([]);

        return $this->eCertQueryWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 加入待离职
     *  *
     * @param EmpStartDismissionRequest $request EmpStartDismissionRequest
     * @param EmpStartDismissionHeaders $headers EmpStartDismissionHeaders
     * @param RuntimeOptions            $runtime runtime options for this request RuntimeOptions
     *
     * @return EmpStartDismissionResponse EmpStartDismissionResponse
     */
    public function empStartDismissionWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->lastWorkDate)) {
            $body['lastWorkDate'] = $request->lastWorkDate;
        }
        if (!Utils::isUnset($request->partner)) {
            $body['partner'] = $request->partner;
        }
        if (!Utils::isUnset($request->remark)) {
            $body['remark'] = $request->remark;
        }
        if (!Utils::isUnset($request->terminationReasonPassive)) {
            $body['terminationReasonPassive'] = $request->terminationReasonPassive;
        }
        if (!Utils::isUnset($request->terminationReasonVoluntary)) {
            $body['terminationReasonVoluntary'] = $request->terminationReasonVoluntary;
        }
        if (!Utils::isUnset($request->toHireBlackList)) {
            $body['toHireBlackList'] = $request->toHireBlackList;
        }
        if (!Utils::isUnset($request->toHireDismissionTalent)) {
            $body['toHireDismissionTalent'] = $request->toHireDismissionTalent;
        }
        if (!Utils::isUnset($request->toHrmBlackList)) {
            $body['toHrmBlackList'] = $request->toHrmBlackList;
        }
        if (!Utils::isUnset($request->userId)) {
            $body['userId'] = $request->userId;
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
            'action' => 'EmpStartDismission',
            'version' => 'hrm_1.0',
            'protocol' => 'HTTP',
            'pathname' => '/v1.0/hrm/pendingDismission/start',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'none',
            'bodyType' => 'json',
        ]);

        return EmpStartDismissionResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary 加入待离职
     *  *
     * @param EmpStartDismissionRequest $request EmpStartDismissionRequest
     *
     * @return EmpStartDismissionResponse EmpStartDismissionResponse
     */
    public function empStartDismission($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new EmpStartDismissionHeaders([]);

        return $this->empStartDismissionWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 智能人事员工档案附件更新
     *  *
     * @param EmployeeAttachmentUpdateRequest $request EmployeeAttachmentUpdateRequest
     * @param EmployeeAttachmentUpdateHeaders $headers EmployeeAttachmentUpdateHeaders
     * @param RuntimeOptions                  $runtime runtime options for this request RuntimeOptions
     *
     * @return EmployeeAttachmentUpdateResponse EmployeeAttachmentUpdateResponse
     */
    public function employeeAttachmentUpdateWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->appAgentId)) {
            $query['appAgentId'] = $request->appAgentId;
        }
        $body = [];
        if (!Utils::isUnset($request->fieldCode)) {
            $body['fieldCode'] = $request->fieldCode;
        }
        if (!Utils::isUnset($request->fileSuffix)) {
            $body['fileSuffix'] = $request->fileSuffix;
        }
        if (!Utils::isUnset($request->mediaId)) {
            $body['mediaId'] = $request->mediaId;
        }
        if (!Utils::isUnset($request->userId)) {
            $body['userId'] = $request->userId;
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
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'EmployeeAttachmentUpdate',
            'version' => 'hrm_1.0',
            'protocol' => 'HTTP',
            'pathname' => '/v1.0/hrm/employees/attachments',
            'method' => 'PUT',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'none',
            'bodyType' => 'json',
        ]);

        return EmployeeAttachmentUpdateResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary 智能人事员工档案附件更新
     *  *
     * @param EmployeeAttachmentUpdateRequest $request EmployeeAttachmentUpdateRequest
     *
     * @return EmployeeAttachmentUpdateResponse EmployeeAttachmentUpdateResponse
     */
    public function employeeAttachmentUpdate($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new EmployeeAttachmentUpdateHeaders([]);

        return $this->employeeAttachmentUpdateWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 人事高级合同管理回退
     *  *
     * @param EsignRollbackRequest $request EsignRollbackRequest
     * @param EsignRollbackHeaders $headers EsignRollbackHeaders
     * @param RuntimeOptions       $runtime runtime options for this request RuntimeOptions
     *
     * @return EsignRollbackResponse EsignRollbackResponse
     */
    public function esignRollbackWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->optUserId)) {
            $query['optUserId'] = $request->optUserId;
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
            'action' => 'EsignRollback',
            'version' => 'hrm_1.0',
            'protocol' => 'HTTP',
            'pathname' => '/v1.0/hrm/contracts/esign/rollback',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'none',
            'bodyType' => 'json',
        ]);

        return EsignRollbackResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary 人事高级合同管理回退
     *  *
     * @param EsignRollbackRequest $request EsignRollbackRequest
     *
     * @return EsignRollbackResponse EsignRollbackResponse
     */
    public function esignRollback($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new EsignRollbackHeaders([]);

        return $this->esignRollbackWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 获取所有离职原因
     *  *
     * @param GetAllDismissionReasonsHeaders $headers GetAllDismissionReasonsHeaders
     * @param RuntimeOptions                 $runtime runtime options for this request RuntimeOptions
     *
     * @return GetAllDismissionReasonsResponse GetAllDismissionReasonsResponse
     */
    public function getAllDismissionReasonsWithOptions($headers, $runtime)
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
            'action' => 'GetAllDismissionReasons',
            'version' => 'hrm_1.0',
            'protocol' => 'HTTP',
            'pathname' => '/v1.0/hrm/dismission/reasons',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'none',
            'bodyType' => 'json',
        ]);

        return GetAllDismissionReasonsResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary 获取所有离职原因
     *  *
     * @return GetAllDismissionReasonsResponse GetAllDismissionReasonsResponse
     */
    public function getAllDismissionReasons()
    {
        $runtime = new RuntimeOptions([]);
        $headers = new GetAllDismissionReasonsHeaders([]);

        return $this->getAllDismissionReasonsWithOptions($headers, $runtime);
    }

    /**
     * @summary 获取员工花名册指定字段的信息，支持明细分组字段
     *  *
     * @param GetEmployeeRosterByFieldRequest $request GetEmployeeRosterByFieldRequest
     * @param GetEmployeeRosterByFieldHeaders $headers GetEmployeeRosterByFieldHeaders
     * @param RuntimeOptions                  $runtime runtime options for this request RuntimeOptions
     *
     * @return GetEmployeeRosterByFieldResponse GetEmployeeRosterByFieldResponse
     */
    public function getEmployeeRosterByFieldWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->appAgentId)) {
            $body['appAgentId'] = $request->appAgentId;
        }
        if (!Utils::isUnset($request->fieldFilterList)) {
            $body['fieldFilterList'] = $request->fieldFilterList;
        }
        if (!Utils::isUnset($request->text2SelectConvert)) {
            $body['text2SelectConvert'] = $request->text2SelectConvert;
        }
        if (!Utils::isUnset($request->userIdList)) {
            $body['userIdList'] = $request->userIdList;
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
            'action' => 'GetEmployeeRosterByField',
            'version' => 'hrm_1.0',
            'protocol' => 'HTTP',
            'pathname' => '/v1.0/hrm/rosters/lists/query',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'none',
            'bodyType' => 'json',
        ]);

        return GetEmployeeRosterByFieldResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary 获取员工花名册指定字段的信息，支持明细分组字段
     *  *
     * @param GetEmployeeRosterByFieldRequest $request GetEmployeeRosterByFieldRequest
     *
     * @return GetEmployeeRosterByFieldResponse GetEmployeeRosterByFieldResponse
     */
    public function getEmployeeRosterByField($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new GetEmployeeRosterByFieldHeaders([]);

        return $this->getEmployeeRosterByFieldWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 查询文件模板列表及文件模板内花名册字段
     *  *
     * @param GetFileTemplateListRequest $request GetFileTemplateListRequest
     * @param GetFileTemplateListHeaders $headers GetFileTemplateListHeaders
     * @param RuntimeOptions             $runtime runtime options for this request RuntimeOptions
     *
     * @return GetFileTemplateListResponse GetFileTemplateListResponse
     */
    public function getFileTemplateListWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->maxResults)) {
            $body['maxResults'] = $request->maxResults;
        }
        if (!Utils::isUnset($request->nextToken)) {
            $body['nextToken'] = $request->nextToken;
        }
        if (!Utils::isUnset($request->signSource)) {
            $body['signSource'] = $request->signSource;
        }
        if (!Utils::isUnset($request->templateStatus)) {
            $body['templateStatus'] = $request->templateStatus;
        }
        if (!Utils::isUnset($request->templateTypeList)) {
            $body['templateTypeList'] = $request->templateTypeList;
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
            'action' => 'GetFileTemplateList',
            'version' => 'hrm_1.0',
            'protocol' => 'HTTP',
            'pathname' => '/v1.0/hrm/masters/fileTemplates/lists/query',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'none',
            'bodyType' => 'json',
        ]);

        return GetFileTemplateListResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary 查询文件模板列表及文件模板内花名册字段
     *  *
     * @param GetFileTemplateListRequest $request GetFileTemplateListRequest
     *
     * @return GetFileTemplateListResponse GetFileTemplateListResponse
     */
    public function getFileTemplateList($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new GetFileTemplateListHeaders([]);

        return $this->getFileTemplateListWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 通过签署记录id查询指定的电子签署记录
     *  *
     * @param GetSignRecordByIdRequest $request GetSignRecordByIdRequest
     * @param GetSignRecordByIdHeaders $headers GetSignRecordByIdHeaders
     * @param RuntimeOptions           $runtime runtime options for this request RuntimeOptions
     *
     * @return GetSignRecordByIdResponse GetSignRecordByIdResponse
     */
    public function getSignRecordByIdWithOptions($request, $headers, $runtime)
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
            'body' => $request->body,
        ]);
        $params = new Params([
            'action' => 'GetSignRecordById',
            'version' => 'hrm_1.0',
            'protocol' => 'HTTP',
            'pathname' => '/v1.0/hrm/masters/signCenters/records/query',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'none',
            'bodyType' => 'json',
        ]);

        return GetSignRecordByIdResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary 通过签署记录id查询指定的电子签署记录
     *  *
     * @param GetSignRecordByIdRequest $request GetSignRecordByIdRequest
     *
     * @return GetSignRecordByIdResponse GetSignRecordByIdResponse
     */
    public function getSignRecordById($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new GetSignRecordByIdHeaders([]);

        return $this->getSignRecordByIdWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 查询指定用户的电子签署记录，并返回签署记录的基本数据及已签署完成的文件预览地址
     *  *
     * @param GetSignRecordByUserIdRequest $request GetSignRecordByUserIdRequest
     * @param GetSignRecordByUserIdHeaders $headers GetSignRecordByUserIdHeaders
     * @param RuntimeOptions               $runtime runtime options for this request RuntimeOptions
     *
     * @return GetSignRecordByUserIdResponse GetSignRecordByUserIdResponse
     */
    public function getSignRecordByUserIdWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->maxResults)) {
            $body['maxResults'] = $request->maxResults;
        }
        if (!Utils::isUnset($request->nextToken)) {
            $body['nextToken'] = $request->nextToken;
        }
        if (!Utils::isUnset($request->signStatus)) {
            $body['signStatus'] = $request->signStatus;
        }
        if (!Utils::isUnset($request->signUserId)) {
            $body['signUserId'] = $request->signUserId;
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
            'action' => 'GetSignRecordByUserId',
            'version' => 'hrm_1.0',
            'protocol' => 'HTTP',
            'pathname' => '/v1.0/hrm/masters/signCenters/users/records/query',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'none',
            'bodyType' => 'json',
        ]);

        return GetSignRecordByUserIdResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary 查询指定用户的电子签署记录，并返回签署记录的基本数据及已签署完成的文件预览地址
     *  *
     * @param GetSignRecordByUserIdRequest $request GetSignRecordByUserIdRequest
     *
     * @return GetSignRecordByUserIdResponse GetSignRecordByUserIdResponse
     */
    public function getSignRecordByUserId($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new GetSignRecordByUserIdHeaders([]);

        return $this->getSignRecordByUserIdWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 查询指定outerId的电子签署记录详情
     *  *
     * @param GetUserSignedRecordsByOuterIdRequest $request GetUserSignedRecordsByOuterIdRequest
     * @param GetUserSignedRecordsByOuterIdHeaders $headers GetUserSignedRecordsByOuterIdHeaders
     * @param RuntimeOptions                       $runtime runtime options for this request RuntimeOptions
     *
     * @return GetUserSignedRecordsByOuterIdResponse GetUserSignedRecordsByOuterIdResponse
     */
    public function getUserSignedRecordsByOuterIdWithOptions($request, $headers, $runtime)
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
            'body' => $request->body,
        ]);
        $params = new Params([
            'action' => 'GetUserSignedRecordsByOuterId',
            'version' => 'hrm_1.0',
            'protocol' => 'HTTP',
            'pathname' => '/v1.0/hrm/masters/signCenters/outerIds/records/query',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'none',
            'bodyType' => 'json',
        ]);

        return GetUserSignedRecordsByOuterIdResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary 查询指定outerId的电子签署记录详情
     *  *
     * @param GetUserSignedRecordsByOuterIdRequest $request GetUserSignedRecordsByOuterIdRequest
     *
     * @return GetUserSignedRecordsByOuterIdResponse GetUserSignedRecordsByOuterIdResponse
     */
    public function getUserSignedRecordsByOuterId($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new GetUserSignedRecordsByOuterIdHeaders([]);

        return $this->getUserSignedRecordsByOuterIdWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 智能人事权限查询
     *  *
     * @param HrmAuthResourcesQueryRequest $request HrmAuthResourcesQueryRequest
     * @param HrmAuthResourcesQueryHeaders $headers HrmAuthResourcesQueryHeaders
     * @param RuntimeOptions               $runtime runtime options for this request RuntimeOptions
     *
     * @return HrmAuthResourcesQueryResponse HrmAuthResourcesQueryResponse
     */
    public function hrmAuthResourcesQueryWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->authResourceIds)) {
            $body['authResourceIds'] = $request->authResourceIds;
        }
        if (!Utils::isUnset($request->userId)) {
            $body['userId'] = $request->userId;
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
            'action' => 'HrmAuthResourcesQuery',
            'version' => 'hrm_1.0',
            'protocol' => 'HTTP',
            'pathname' => '/v1.0/hrm/authResources/query',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'none',
            'bodyType' => 'json',
        ]);

        return HrmAuthResourcesQueryResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary 智能人事权限查询
     *  *
     * @param HrmAuthResourcesQueryRequest $request HrmAuthResourcesQueryRequest
     *
     * @return HrmAuthResourcesQueryResponse HrmAuthResourcesQueryResponse
     */
    public function hrmAuthResourcesQuery($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new HrmAuthResourcesQueryHeaders([]);

        return $this->hrmAuthResourcesQueryWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 智能人事权益查询
     *  *
     * @param HrmBenefitQueryRequest $request HrmBenefitQueryRequest
     * @param HrmBenefitQueryHeaders $headers HrmBenefitQueryHeaders
     * @param RuntimeOptions         $runtime runtime options for this request RuntimeOptions
     *
     * @return HrmBenefitQueryResponse HrmBenefitQueryResponse
     */
    public function hrmBenefitQueryWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->benefitCodes)) {
            $body['benefitCodes'] = $request->benefitCodes;
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
            'action' => 'HrmBenefitQuery',
            'version' => 'hrm_1.0',
            'protocol' => 'HTTP',
            'pathname' => '/v1.0/hrm/benefits/query',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'none',
            'bodyType' => 'json',
        ]);

        return HrmBenefitQueryResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary 智能人事权益查询
     *  *
     * @param HrmBenefitQueryRequest $request HrmBenefitQueryRequest
     *
     * @return HrmBenefitQueryResponse HrmBenefitQueryResponse
     */
    public function hrmBenefitQuery($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new HrmBenefitQueryHeaders([]);

        return $this->hrmBenefitQueryWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 查询企业配置信息
     *  *
     * @param HrmCorpConfigQueryRequest $request HrmCorpConfigQueryRequest
     * @param HrmCorpConfigQueryHeaders $headers HrmCorpConfigQueryHeaders
     * @param RuntimeOptions            $runtime runtime options for this request RuntimeOptions
     *
     * @return HrmCorpConfigQueryResponse HrmCorpConfigQueryResponse
     */
    public function hrmCorpConfigQueryWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->subType)) {
            $body['subType'] = $request->subType;
        }
        if (!Utils::isUnset($request->type)) {
            $body['type'] = $request->type;
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
            'action' => 'HrmCorpConfigQuery',
            'version' => 'hrm_1.0',
            'protocol' => 'HTTP',
            'pathname' => '/v1.0/hrm/corp/configs/query',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'none',
            'bodyType' => 'json',
        ]);

        return HrmCorpConfigQueryResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary 查询企业配置信息
     *  *
     * @param HrmCorpConfigQueryRequest $request HrmCorpConfigQueryRequest
     *
     * @return HrmCorpConfigQueryResponse HrmCorpConfigQueryResponse
     */
    public function hrmCorpConfigQuery($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new HrmCorpConfigQueryHeaders([]);

        return $this->hrmCorpConfigQueryWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 智能人事邮件发送
     *  *
     * @param HrmMailSendRequest $request HrmMailSendRequest
     * @param HrmMailSendHeaders $headers HrmMailSendHeaders
     * @param RuntimeOptions     $runtime runtime options for this request RuntimeOptions
     *
     * @return HrmMailSendResponse HrmMailSendResponse
     */
    public function hrmMailSendWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->mail)) {
            $body['mail'] = $request->mail;
        }
        if (!Utils::isUnset($request->operator)) {
            $body['operator'] = $request->operator;
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
            'action' => 'HrmMailSend',
            'version' => 'hrm_1.0',
            'protocol' => 'HTTP',
            'pathname' => '/v1.0/hrm/mails/send',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'none',
            'bodyType' => 'json',
        ]);

        return HrmMailSendResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary 智能人事邮件发送
     *  *
     * @param HrmMailSendRequest $request HrmMailSendRequest
     *
     * @return HrmMailSendResponse HrmMailSendResponse
     */
    public function hrmMailSend($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new HrmMailSendHeaders([]);

        return $this->hrmMailSendWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 人事2.0支持Moka事件转发
     *  *
     * @param HrmMokaEventRequest $request HrmMokaEventRequest
     * @param HrmMokaEventHeaders $headers HrmMokaEventHeaders
     * @param RuntimeOptions      $runtime runtime options for this request RuntimeOptions
     *
     * @return HrmMokaEventResponse HrmMokaEventResponse
     */
    public function hrmMokaEventWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->bizId)) {
            $body['bizId'] = $request->bizId;
        }
        if (!Utils::isUnset($request->content)) {
            $body['content'] = $request->content;
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
            'action' => 'HrmMokaEvent',
            'version' => 'hrm_1.0',
            'protocol' => 'HTTP',
            'pathname' => '/v1.0/hrm/moka/events/forward',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'none',
            'bodyType' => 'json',
        ]);

        return HrmMokaEventResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary 人事2.0支持Moka事件转发
     *  *
     * @param HrmMokaEventRequest $request HrmMokaEventRequest
     *
     * @return HrmMokaEventResponse HrmMokaEventResponse
     */
    public function hrmMokaEvent($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new HrmMokaEventHeaders([]);

        return $this->hrmMokaEventWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 人事2.0支持Moka接口转发
     *  *
     * @param HrmMokaOapiRequest $request HrmMokaOapiRequest
     * @param HrmMokaOapiHeaders $headers HrmMokaOapiHeaders
     * @param RuntimeOptions     $runtime runtime options for this request RuntimeOptions
     *
     * @return HrmMokaOapiResponse HrmMokaOapiResponse
     */
    public function hrmMokaOapiWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->apiCode)) {
            $body['apiCode'] = $request->apiCode;
        }
        if (!Utils::isUnset($request->params)) {
            $body['params'] = $request->params;
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
            'action' => 'HrmMokaOapi',
            'version' => 'hrm_1.0',
            'protocol' => 'HTTP',
            'pathname' => '/v1.0/hrm/moka/forward',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'none',
            'bodyType' => 'json',
        ]);

        return HrmMokaOapiResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary 人事2.0支持Moka接口转发
     *  *
     * @param HrmMokaOapiRequest $request HrmMokaOapiRequest
     *
     * @return HrmMokaOapiResponse HrmMokaOapiResponse
     */
    public function hrmMokaOapi($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new HrmMokaOapiHeaders([]);

        return $this->hrmMokaOapiWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 智能人事转正接口
     *  *
     * @param HrmProcessRegularRequest $request HrmProcessRegularRequest
     * @param HrmProcessRegularHeaders $headers HrmProcessRegularHeaders
     * @param RuntimeOptions           $runtime runtime options for this request RuntimeOptions
     *
     * @return HrmProcessRegularResponse HrmProcessRegularResponse
     */
    public function hrmProcessRegularWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->operationId)) {
            $body['operationId'] = $request->operationId;
        }
        if (!Utils::isUnset($request->regularDate)) {
            $body['regularDate'] = $request->regularDate;
        }
        if (!Utils::isUnset($request->remark)) {
            $body['remark'] = $request->remark;
        }
        if (!Utils::isUnset($request->userId)) {
            $body['userId'] = $request->userId;
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
            'action' => 'HrmProcessRegular',
            'version' => 'hrm_1.0',
            'protocol' => 'HTTP',
            'pathname' => '/v1.0/hrm/processes/regulars/become',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'none',
            'bodyType' => 'json',
        ]);

        return HrmProcessRegularResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary 智能人事转正接口
     *  *
     * @param HrmProcessRegularRequest $request HrmProcessRegularRequest
     *
     * @return HrmProcessRegularResponse HrmProcessRegularResponse
     */
    public function hrmProcessRegular($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new HrmProcessRegularHeaders([]);

        return $this->hrmProcessRegularWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 智能人事离职和交接接口
     *  *
     * @param HrmProcessTerminationAndHandoverRequest $request HrmProcessTerminationAndHandoverRequest
     * @param HrmProcessTerminationAndHandoverHeaders $headers HrmProcessTerminationAndHandoverHeaders
     * @param RuntimeOptions                          $runtime runtime options for this request RuntimeOptions
     *
     * @return HrmProcessTerminationAndHandoverResponse HrmProcessTerminationAndHandoverResponse
     */
    public function hrmProcessTerminationAndHandoverWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->aflowHandOverUserId)) {
            $body['aflowHandOverUserId'] = $request->aflowHandOverUserId;
        }
        if (!Utils::isUnset($request->dingPanHandoverUserId)) {
            $body['dingPanHandoverUserId'] = $request->dingPanHandoverUserId;
        }
        if (!Utils::isUnset($request->directSubordinatesHandoverUserId)) {
            $body['directSubordinatesHandoverUserId'] = $request->directSubordinatesHandoverUserId;
        }
        if (!Utils::isUnset($request->dismissionMemo)) {
            $body['dismissionMemo'] = $request->dismissionMemo;
        }
        if (!Utils::isUnset($request->dismissionReason)) {
            $body['dismissionReason'] = $request->dismissionReason;
        }
        if (!Utils::isUnset($request->docNoteHandoverUserId)) {
            $body['docNoteHandoverUserId'] = $request->docNoteHandoverUserId;
        }
        if (!Utils::isUnset($request->lastWorkDate)) {
            $body['lastWorkDate'] = $request->lastWorkDate;
        }
        if (!Utils::isUnset($request->optUserId)) {
            $body['optUserId'] = $request->optUserId;
        }
        if (!Utils::isUnset($request->permissionHandoverUserId)) {
            $body['permissionHandoverUserId'] = $request->permissionHandoverUserId;
        }
        if (!Utils::isUnset($request->terminationReasonPassive)) {
            $body['terminationReasonPassive'] = $request->terminationReasonPassive;
        }
        if (!Utils::isUnset($request->terminationReasonVoluntary)) {
            $body['terminationReasonVoluntary'] = $request->terminationReasonVoluntary;
        }
        if (!Utils::isUnset($request->userId)) {
            $body['userId'] = $request->userId;
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
            'action' => 'HrmProcessTerminationAndHandover',
            'version' => 'hrm_1.0',
            'protocol' => 'HTTP',
            'pathname' => '/v1.0/hrm/processes/terminateAndHandOver',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'none',
            'bodyType' => 'json',
        ]);

        return HrmProcessTerminationAndHandoverResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary 智能人事离职和交接接口
     *  *
     * @param HrmProcessTerminationAndHandoverRequest $request HrmProcessTerminationAndHandoverRequest
     *
     * @return HrmProcessTerminationAndHandoverResponse HrmProcessTerminationAndHandoverResponse
     */
    public function hrmProcessTerminationAndHandover($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new HrmProcessTerminationAndHandoverHeaders([]);

        return $this->hrmProcessTerminationAndHandoverWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 智能人事调岗接口
     *  *
     * @param HrmProcessTransferRequest $request HrmProcessTransferRequest
     * @param HrmProcessTransferHeaders $headers HrmProcessTransferHeaders
     * @param RuntimeOptions            $runtime runtime options for this request RuntimeOptions
     *
     * @return HrmProcessTransferResponse HrmProcessTransferResponse
     */
    public function hrmProcessTransferWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->deptIdsAfterTransfer)) {
            $body['deptIdsAfterTransfer'] = $request->deptIdsAfterTransfer;
        }
        if (!Utils::isUnset($request->jobIdAfterTransfer)) {
            $body['jobIdAfterTransfer'] = $request->jobIdAfterTransfer;
        }
        if (!Utils::isUnset($request->mainDeptIdAfterTransfer)) {
            $body['mainDeptIdAfterTransfer'] = $request->mainDeptIdAfterTransfer;
        }
        if (!Utils::isUnset($request->operateUserId)) {
            $body['operateUserId'] = $request->operateUserId;
        }
        if (!Utils::isUnset($request->positionIdAfterTransfer)) {
            $body['positionIdAfterTransfer'] = $request->positionIdAfterTransfer;
        }
        if (!Utils::isUnset($request->positionLevelAfterTransfer)) {
            $body['positionLevelAfterTransfer'] = $request->positionLevelAfterTransfer;
        }
        if (!Utils::isUnset($request->positionNameAfterTransfer)) {
            $body['positionNameAfterTransfer'] = $request->positionNameAfterTransfer;
        }
        if (!Utils::isUnset($request->rankIdAfterTransfer)) {
            $body['rankIdAfterTransfer'] = $request->rankIdAfterTransfer;
        }
        if (!Utils::isUnset($request->userId)) {
            $body['userId'] = $request->userId;
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
            'action' => 'HrmProcessTransfer',
            'version' => 'hrm_1.0',
            'protocol' => 'HTTP',
            'pathname' => '/v1.0/hrm/processes/transfer',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'none',
            'bodyType' => 'json',
        ]);

        return HrmProcessTransferResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary 智能人事调岗接口
     *  *
     * @param HrmProcessTransferRequest $request HrmProcessTransferRequest
     *
     * @return HrmProcessTransferResponse HrmProcessTransferResponse
     */
    public function hrmProcessTransfer($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new HrmProcessTransferHeaders([]);

        return $this->hrmProcessTransferWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 修改员工最后一次离职信息
     *  *
     * @param HrmProcessUpdateTerminationInfoRequest $request HrmProcessUpdateTerminationInfoRequest
     * @param HrmProcessUpdateTerminationInfoHeaders $headers HrmProcessUpdateTerminationInfoHeaders
     * @param RuntimeOptions                         $runtime runtime options for this request RuntimeOptions
     *
     * @return HrmProcessUpdateTerminationInfoResponse HrmProcessUpdateTerminationInfoResponse
     */
    public function hrmProcessUpdateTerminationInfoWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->dismissionMemo)) {
            $body['dismissionMemo'] = $request->dismissionMemo;
        }
        if (!Utils::isUnset($request->lastWorkDate)) {
            $body['lastWorkDate'] = $request->lastWorkDate;
        }
        if (!Utils::isUnset($request->userId)) {
            $body['userId'] = $request->userId;
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
            'action' => 'HrmProcessUpdateTerminationInfo',
            'version' => 'hrm_1.0',
            'protocol' => 'HTTP',
            'pathname' => '/v1.0/hrm/processes/employees/terminations',
            'method' => 'PUT',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'none',
            'bodyType' => 'json',
        ]);

        return HrmProcessUpdateTerminationInfoResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary 修改员工最后一次离职信息
     *  *
     * @param HrmProcessUpdateTerminationInfoRequest $request HrmProcessUpdateTerminationInfoRequest
     *
     * @return HrmProcessUpdateTerminationInfoResponse HrmProcessUpdateTerminationInfoResponse
     */
    public function hrmProcessUpdateTerminationInfo($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new HrmProcessUpdateTerminationInfoHeaders([]);

        return $this->hrmProcessUpdateTerminationInfoWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 智能人事pts能力调用
     *  *
     * @param HrmPtsServiceRequest $request HrmPtsServiceRequest
     * @param HrmPtsServiceHeaders $headers HrmPtsServiceHeaders
     * @param RuntimeOptions       $runtime runtime options for this request RuntimeOptions
     *
     * @return HrmPtsServiceResponse HrmPtsServiceResponse
     */
    public function hrmPtsServiceWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->env)) {
            $body['env'] = $request->env;
        }
        if (!Utils::isUnset($request->method)) {
            $body['method'] = $request->method;
        }
        if (!Utils::isUnset($request->outerId)) {
            $body['outerId'] = $request->outerId;
        }
        if (!Utils::isUnset($request->params)) {
            $body['params'] = $request->params;
        }
        if (!Utils::isUnset($request->path)) {
            $body['path'] = $request->path;
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
            'action' => 'HrmPtsService',
            'version' => 'hrm_1.0',
            'protocol' => 'HTTP',
            'pathname' => '/v1.0/hrm/pts/request',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'none',
            'bodyType' => 'json',
        ]);

        return HrmPtsServiceResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary 智能人事pts能力调用
     *  *
     * @param HrmPtsServiceRequest $request HrmPtsServiceRequest
     *
     * @return HrmPtsServiceResponse HrmPtsServiceResponse
     */
    public function hrmPtsService($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new HrmPtsServiceHeaders([]);

        return $this->hrmPtsServiceWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 作废签署记录
     *  *
     * @param InvalidSignRecordsRequest $request InvalidSignRecordsRequest
     * @param InvalidSignRecordsHeaders $headers InvalidSignRecordsHeaders
     * @param RuntimeOptions            $runtime runtime options for this request RuntimeOptions
     *
     * @return InvalidSignRecordsResponse InvalidSignRecordsResponse
     */
    public function invalidSignRecordsWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->invalidUserId)) {
            $body['invalidUserId'] = $request->invalidUserId;
        }
        if (!Utils::isUnset($request->signRecordIds)) {
            $body['signRecordIds'] = $request->signRecordIds;
        }
        if (!Utils::isUnset($request->statusRemark)) {
            $body['statusRemark'] = $request->statusRemark;
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
            'action' => 'InvalidSignRecords',
            'version' => 'hrm_1.0',
            'protocol' => 'HTTP',
            'pathname' => '/v1.0/hrm/masters/signCenters/records/invalid',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'none',
            'bodyType' => 'json',
        ]);

        return InvalidSignRecordsResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary 作废签署记录
     *  *
     * @param InvalidSignRecordsRequest $request InvalidSignRecordsRequest
     *
     * @return InvalidSignRecordsResponse InvalidSignRecordsResponse
     */
    public function invalidSignRecords($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new InvalidSignRecordsHeaders([]);

        return $this->invalidSignRecordsWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 智能人事主数据删除服务
     *  *
     * @param MasterDataDeleteRequest $request MasterDataDeleteRequest
     * @param MasterDataDeleteHeaders $headers MasterDataDeleteHeaders
     * @param RuntimeOptions          $runtime runtime options for this request RuntimeOptions
     *
     * @return MasterDataDeleteResponse MasterDataDeleteResponse
     */
    public function masterDataDeleteWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->tenantId)) {
            $query['tenantId'] = $request->tenantId;
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
            'body' => Utils::toArray($request->body),
        ]);
        $params = new Params([
            'action' => 'MasterDataDelete',
            'version' => 'hrm_1.0',
            'protocol' => 'HTTP',
            'pathname' => '/v1.0/hrm/masters/datas/batchRemove',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'none',
            'bodyType' => 'json',
        ]);

        return MasterDataDeleteResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary 智能人事主数据删除服务
     *  *
     * @param MasterDataDeleteRequest $request MasterDataDeleteRequest
     *
     * @return MasterDataDeleteResponse MasterDataDeleteResponse
     */
    public function masterDataDelete($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new MasterDataDeleteHeaders([]);

        return $this->masterDataDeleteWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 智能人事主数据查询服务
     *  *
     * @param MasterDataQueryRequest $request MasterDataQueryRequest
     * @param MasterDataQueryHeaders $headers MasterDataQueryHeaders
     * @param RuntimeOptions         $runtime runtime options for this request RuntimeOptions
     *
     * @return MasterDataQueryResponse MasterDataQueryResponse
     */
    public function masterDataQueryWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->bizUK)) {
            $body['bizUK'] = $request->bizUK;
        }
        if (!Utils::isUnset($request->maxResults)) {
            $body['maxResults'] = $request->maxResults;
        }
        if (!Utils::isUnset($request->nextToken)) {
            $body['nextToken'] = $request->nextToken;
        }
        if (!Utils::isUnset($request->optUserId)) {
            $body['optUserId'] = $request->optUserId;
        }
        if (!Utils::isUnset($request->queryParams)) {
            $body['queryParams'] = $request->queryParams;
        }
        if (!Utils::isUnset($request->relationIds)) {
            $body['relationIds'] = $request->relationIds;
        }
        if (!Utils::isUnset($request->scopeCode)) {
            $body['scopeCode'] = $request->scopeCode;
        }
        if (!Utils::isUnset($request->tenantId)) {
            $body['tenantId'] = $request->tenantId;
        }
        if (!Utils::isUnset($request->viewEntityCode)) {
            $body['viewEntityCode'] = $request->viewEntityCode;
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
            'action' => 'MasterDataQuery',
            'version' => 'hrm_1.0',
            'protocol' => 'HTTP',
            'pathname' => '/v1.0/hrm/masters/datas/query',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'none',
            'bodyType' => 'json',
        ]);

        return MasterDataQueryResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary 智能人事主数据查询服务
     *  *
     * @param MasterDataQueryRequest $request MasterDataQueryRequest
     *
     * @return MasterDataQueryResponse MasterDataQueryResponse
     */
    public function masterDataQuery($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new MasterDataQueryHeaders([]);

        return $this->masterDataQueryWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 智能人事主数据保存服务
     *  *
     * @param MasterDataSaveRequest $request MasterDataSaveRequest
     * @param MasterDataSaveHeaders $headers MasterDataSaveHeaders
     * @param RuntimeOptions        $runtime runtime options for this request RuntimeOptions
     *
     * @return MasterDataSaveResponse MasterDataSaveResponse
     */
    public function masterDataSaveWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->tenantId)) {
            $query['tenantId'] = $request->tenantId;
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
            'body' => Utils::toArray($request->body),
        ]);
        $params = new Params([
            'action' => 'MasterDataSave',
            'version' => 'hrm_1.0',
            'protocol' => 'HTTP',
            'pathname' => '/v1.0/hrm/masters/datas/save',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'none',
            'bodyType' => 'json',
        ]);

        return MasterDataSaveResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary 智能人事主数据保存服务
     *  *
     * @param MasterDataSaveRequest $request MasterDataSaveRequest
     *
     * @return MasterDataSaveResponse MasterDataSaveResponse
     */
    public function masterDataSave($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new MasterDataSaveHeaders([]);

        return $this->masterDataSaveWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 主数据中拥有某个领域数据的租户信息查询
     *  *
     * @param MasterDataTenantQueyRequest $request MasterDataTenantQueyRequest
     * @param MasterDataTenantQueyHeaders $headers MasterDataTenantQueyHeaders
     * @param RuntimeOptions              $runtime runtime options for this request RuntimeOptions
     *
     * @return MasterDataTenantQueyResponse MasterDataTenantQueyResponse
     */
    public function masterDataTenantQueyWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->entityCode)) {
            $query['entityCode'] = $request->entityCode;
        }
        if (!Utils::isUnset($request->scopeCode)) {
            $query['scopeCode'] = $request->scopeCode;
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
            'action' => 'MasterDataTenantQuey',
            'version' => 'hrm_1.0',
            'protocol' => 'HTTP',
            'pathname' => '/v1.0/hrm/masters/tenants',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'none',
            'bodyType' => 'json',
        ]);

        return MasterDataTenantQueyResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary 主数据中拥有某个领域数据的租户信息查询
     *  *
     * @param MasterDataTenantQueyRequest $request MasterDataTenantQueyRequest
     *
     * @return MasterDataTenantQueyResponse MasterDataTenantQueyResponse
     */
    public function masterDataTenantQuey($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new MasterDataTenantQueyHeaders([]);

        return $this->masterDataTenantQueyWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 智能人事主数据根据ID获取
     *  *
     * @param MasterDatasGetRequest $request MasterDatasGetRequest
     * @param MasterDatasGetHeaders $headers MasterDatasGetHeaders
     * @param RuntimeOptions        $runtime runtime options for this request RuntimeOptions
     *
     * @return MasterDatasGetResponse MasterDatasGetResponse
     */
    public function masterDatasGetWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->objId)) {
            $body['objId'] = $request->objId;
        }
        if (!Utils::isUnset($request->scopeCode)) {
            $body['scopeCode'] = $request->scopeCode;
        }
        if (!Utils::isUnset($request->tenantId)) {
            $body['tenantId'] = $request->tenantId;
        }
        if (!Utils::isUnset($request->viewEntityCode)) {
            $body['viewEntityCode'] = $request->viewEntityCode;
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
            'action' => 'MasterDatasGet',
            'version' => 'hrm_1.0',
            'protocol' => 'HTTP',
            'pathname' => '/v1.0/hrm/masterDatas/objects/query',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'none',
            'bodyType' => 'json',
        ]);

        return MasterDatasGetResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary 智能人事主数据根据ID获取
     *  *
     * @param MasterDatasGetRequest $request MasterDatasGetRequest
     *
     * @return MasterDatasGetResponse MasterDatasGetResponse
     */
    public function masterDatasGet($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new MasterDatasGetHeaders([]);

        return $this->masterDatasGetWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 智能人事主数据查询服务
     *  *
     * @param MasterDatasQueryRequest $request MasterDatasQueryRequest
     * @param MasterDatasQueryHeaders $headers MasterDatasQueryHeaders
     * @param RuntimeOptions          $runtime runtime options for this request RuntimeOptions
     *
     * @return MasterDatasQueryResponse MasterDatasQueryResponse
     */
    public function masterDatasQueryWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->bizUK)) {
            $body['bizUK'] = $request->bizUK;
        }
        if (!Utils::isUnset($request->maxResults)) {
            $body['maxResults'] = $request->maxResults;
        }
        if (!Utils::isUnset($request->nextToken)) {
            $body['nextToken'] = $request->nextToken;
        }
        if (!Utils::isUnset($request->queryParams)) {
            $body['queryParams'] = $request->queryParams;
        }
        if (!Utils::isUnset($request->relationIds)) {
            $body['relationIds'] = $request->relationIds;
        }
        if (!Utils::isUnset($request->scopeCode)) {
            $body['scopeCode'] = $request->scopeCode;
        }
        if (!Utils::isUnset($request->tenantId)) {
            $body['tenantId'] = $request->tenantId;
        }
        if (!Utils::isUnset($request->viewEntityCode)) {
            $body['viewEntityCode'] = $request->viewEntityCode;
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
            'action' => 'MasterDatasQuery',
            'version' => 'hrm_1.0',
            'protocol' => 'HTTP',
            'pathname' => '/v1.0/hrm/masterDatas/query',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'none',
            'bodyType' => 'json',
        ]);

        return MasterDatasQueryResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary 智能人事主数据查询服务
     *  *
     * @param MasterDatasQueryRequest $request MasterDatasQueryRequest
     *
     * @return MasterDatasQueryResponse MasterDatasQueryResponse
     */
    public function masterDatasQuery($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new MasterDatasQueryHeaders([]);

        return $this->masterDatasQueryWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary oem 老用户数据迁移时，开通oem 应用
     *  *
     * @param OpenOemMicroAppRequest $request OpenOemMicroAppRequest
     * @param OpenOemMicroAppHeaders $headers OpenOemMicroAppHeaders
     * @param RuntimeOptions         $runtime runtime options for this request RuntimeOptions
     *
     * @return OpenOemMicroAppResponse OpenOemMicroAppResponse
     */
    public function openOemMicroAppWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->tenantId)) {
            $query['tenantId'] = $request->tenantId;
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
            'action' => 'OpenOemMicroApp',
            'version' => 'hrm_1.0',
            'protocol' => 'HTTP',
            'pathname' => '/v1.0/hrm/oem/microApps/open',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'none',
            'bodyType' => 'json',
        ]);

        return OpenOemMicroAppResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary oem 老用户数据迁移时，开通oem 应用
     *  *
     * @param OpenOemMicroAppRequest $request OpenOemMicroAppRequest
     *
     * @return OpenOemMicroAppResponse OpenOemMicroAppResponse
     */
    public function openOemMicroApp($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new OpenOemMicroAppHeaders([]);

        return $this->openOemMicroAppWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 自定义入职流程数据查询
     *  *
     * @param QueryCustomEntryProcessesRequest $request QueryCustomEntryProcessesRequest
     * @param QueryCustomEntryProcessesHeaders $headers QueryCustomEntryProcessesHeaders
     * @param RuntimeOptions                   $runtime runtime options for this request RuntimeOptions
     *
     * @return QueryCustomEntryProcessesResponse QueryCustomEntryProcessesResponse
     */
    public function queryCustomEntryProcessesWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->maxResults)) {
            $query['maxResults'] = $request->maxResults;
        }
        if (!Utils::isUnset($request->nextToken)) {
            $query['nextToken'] = $request->nextToken;
        }
        if (!Utils::isUnset($request->operateUserId)) {
            $query['operateUserId'] = $request->operateUserId;
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
            'action' => 'QueryCustomEntryProcesses',
            'version' => 'hrm_1.0',
            'protocol' => 'HTTP',
            'pathname' => '/v1.0/hrm/customEntryProcesses',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return QueryCustomEntryProcessesResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary 自定义入职流程数据查询
     *  *
     * @param QueryCustomEntryProcessesRequest $request QueryCustomEntryProcessesRequest
     *
     * @return QueryCustomEntryProcessesResponse QueryCustomEntryProcessesResponse
     */
    public function queryCustomEntryProcesses($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new QueryCustomEntryProcessesHeaders([]);

        return $this->queryCustomEntryProcessesWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 查询企业已离职员工列表
     *  *
     * @param QueryDismissionStaffIdListRequest $request QueryDismissionStaffIdListRequest
     * @param QueryDismissionStaffIdListHeaders $headers QueryDismissionStaffIdListHeaders
     * @param RuntimeOptions                    $runtime runtime options for this request RuntimeOptions
     *
     * @return QueryDismissionStaffIdListResponse QueryDismissionStaffIdListResponse
     */
    public function queryDismissionStaffIdListWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->maxResults)) {
            $query['maxResults'] = $request->maxResults;
        }
        if (!Utils::isUnset($request->nextToken)) {
            $query['nextToken'] = $request->nextToken;
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
            'action' => 'QueryDismissionStaffIdList',
            'version' => 'hrm_1.0',
            'protocol' => 'HTTP',
            'pathname' => '/v1.0/hrm/employees/dismissions',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'none',
            'bodyType' => 'json',
        ]);

        return QueryDismissionStaffIdListResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary 查询企业已离职员工列表
     *  *
     * @param QueryDismissionStaffIdListRequest $request QueryDismissionStaffIdListRequest
     *
     * @return QueryDismissionStaffIdListResponse QueryDismissionStaffIdListResponse
     */
    public function queryDismissionStaffIdList($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new QueryDismissionStaffIdListHeaders([]);

        return $this->queryDismissionStaffIdListWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 根据传入的staffId列表，批量查询员工的离职信息
     *  *
     * @param QueryHrmEmployeeDismissionInfoRequest $tmpReq  QueryHrmEmployeeDismissionInfoRequest
     * @param QueryHrmEmployeeDismissionInfoHeaders $headers QueryHrmEmployeeDismissionInfoHeaders
     * @param RuntimeOptions                        $runtime runtime options for this request RuntimeOptions
     *
     * @return QueryHrmEmployeeDismissionInfoResponse QueryHrmEmployeeDismissionInfoResponse
     */
    public function queryHrmEmployeeDismissionInfoWithOptions($tmpReq, $headers, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new QueryHrmEmployeeDismissionInfoShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->userIdList)) {
            $request->userIdListShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->userIdList, 'userIdList', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->userIdListShrink)) {
            $query['userIdList'] = $request->userIdListShrink;
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
            'action' => 'QueryHrmEmployeeDismissionInfo',
            'version' => 'hrm_1.0',
            'protocol' => 'HTTP',
            'pathname' => '/v1.0/hrm/employees/dimissionInfos',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'none',
            'bodyType' => 'json',
        ]);

        return QueryHrmEmployeeDismissionInfoResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary 根据传入的staffId列表，批量查询员工的离职信息
     *  *
     * @param QueryHrmEmployeeDismissionInfoRequest $request QueryHrmEmployeeDismissionInfoRequest
     *
     * @return QueryHrmEmployeeDismissionInfoResponse QueryHrmEmployeeDismissionInfoResponse
     */
    public function queryHrmEmployeeDismissionInfo($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new QueryHrmEmployeeDismissionInfoHeaders([]);

        return $this->queryHrmEmployeeDismissionInfoWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 分页查询企业的职级信息
     *  *
     * @param QueryJobRanksRequest $request QueryJobRanksRequest
     * @param QueryJobRanksHeaders $headers QueryJobRanksHeaders
     * @param RuntimeOptions       $runtime runtime options for this request RuntimeOptions
     *
     * @return QueryJobRanksResponse QueryJobRanksResponse
     */
    public function queryJobRanksWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->maxResults)) {
            $query['maxResults'] = $request->maxResults;
        }
        if (!Utils::isUnset($request->nextToken)) {
            $query['nextToken'] = $request->nextToken;
        }
        if (!Utils::isUnset($request->rankCategoryId)) {
            $query['rankCategoryId'] = $request->rankCategoryId;
        }
        if (!Utils::isUnset($request->rankCode)) {
            $query['rankCode'] = $request->rankCode;
        }
        if (!Utils::isUnset($request->rankName)) {
            $query['rankName'] = $request->rankName;
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
            'action' => 'QueryJobRanks',
            'version' => 'hrm_1.0',
            'protocol' => 'HTTP',
            'pathname' => '/v1.0/hrm/jobRanks',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return QueryJobRanksResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary 分页查询企业的职级信息
     *  *
     * @param QueryJobRanksRequest $request QueryJobRanksRequest
     *
     * @return QueryJobRanksResponse QueryJobRanksResponse
     */
    public function queryJobRanks($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new QueryJobRanksHeaders([]);

        return $this->queryJobRanksWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 分页查询企业职务信息
     *  *
     * @param QueryJobsRequest $request QueryJobsRequest
     * @param QueryJobsHeaders $headers QueryJobsHeaders
     * @param RuntimeOptions   $runtime runtime options for this request RuntimeOptions
     *
     * @return QueryJobsResponse QueryJobsResponse
     */
    public function queryJobsWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->jobName)) {
            $query['jobName'] = $request->jobName;
        }
        if (!Utils::isUnset($request->maxResults)) {
            $query['maxResults'] = $request->maxResults;
        }
        if (!Utils::isUnset($request->nextToken)) {
            $query['nextToken'] = $request->nextToken;
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
            'action' => 'QueryJobs',
            'version' => 'hrm_1.0',
            'protocol' => 'HTTP',
            'pathname' => '/v1.0/hrm/jobs',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return QueryJobsResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary 分页查询企业职务信息
     *  *
     * @param QueryJobsRequest $request QueryJobsRequest
     *
     * @return QueryJobsResponse QueryJobsResponse
     */
    public function queryJobs($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new QueryJobsHeaders([]);

        return $this->queryJobsWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 智能人事查询微应用状态
     *  *
     * @param QueryMicroAppStatusRequest $request QueryMicroAppStatusRequest
     * @param QueryMicroAppStatusHeaders $headers QueryMicroAppStatusHeaders
     * @param RuntimeOptions             $runtime runtime options for this request RuntimeOptions
     *
     * @return QueryMicroAppStatusResponse QueryMicroAppStatusResponse
     */
    public function queryMicroAppStatusWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->tenantIdList)) {
            $body['tenantIdList'] = $request->tenantIdList;
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
            'action' => 'QueryMicroAppStatus',
            'version' => 'hrm_1.0',
            'protocol' => 'HTTP',
            'pathname' => '/v1.0/hrm/microApps/statuses/query',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'none',
            'bodyType' => 'json',
        ]);

        return QueryMicroAppStatusResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary 智能人事查询微应用状态
     *  *
     * @param QueryMicroAppStatusRequest $request QueryMicroAppStatusRequest
     *
     * @return QueryMicroAppStatusResponse QueryMicroAppStatusResponse
     */
    public function queryMicroAppStatus($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new QueryMicroAppStatusHeaders([]);

        return $this->queryMicroAppStatusWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 智能人事查询微应用可见性
     *  *
     * @param QueryMicroAppViewRequest $request QueryMicroAppViewRequest
     * @param QueryMicroAppViewHeaders $headers QueryMicroAppViewHeaders
     * @param RuntimeOptions           $runtime runtime options for this request RuntimeOptions
     *
     * @return QueryMicroAppViewResponse QueryMicroAppViewResponse
     */
    public function queryMicroAppViewWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->tenantIdList)) {
            $body['tenantIdList'] = $request->tenantIdList;
        }
        if (!Utils::isUnset($request->viewUserId)) {
            $body['viewUserId'] = $request->viewUserId;
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
            'action' => 'QueryMicroAppView',
            'version' => 'hrm_1.0',
            'protocol' => 'HTTP',
            'pathname' => '/v1.0/hrm/microApps/visibilities/query',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'none',
            'bodyType' => 'json',
        ]);

        return QueryMicroAppViewResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary 智能人事查询微应用可见性
     *  *
     * @param QueryMicroAppViewRequest $request QueryMicroAppViewRequest
     *
     * @return QueryMicroAppViewResponse QueryMicroAppViewResponse
     */
    public function queryMicroAppView($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new QueryMicroAppViewHeaders([]);

        return $this->queryMicroAppViewWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 查询企业职位版本
     *  *
     * @param QueryPositionVersionHeaders $headers QueryPositionVersionHeaders
     * @param RuntimeOptions              $runtime runtime options for this request RuntimeOptions
     *
     * @return QueryPositionVersionResponse QueryPositionVersionResponse
     */
    public function queryPositionVersionWithOptions($headers, $runtime)
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
            'action' => 'QueryPositionVersion',
            'version' => 'hrm_1.0',
            'protocol' => 'HTTP',
            'pathname' => '/v1.0/hrm/positions/versions/query',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'none',
            'bodyType' => 'json',
        ]);

        return QueryPositionVersionResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary 查询企业职位版本
     *  *
     * @return QueryPositionVersionResponse QueryPositionVersionResponse
     */
    public function queryPositionVersion()
    {
        $runtime = new RuntimeOptions([]);
        $headers = new QueryPositionVersionHeaders([]);

        return $this->queryPositionVersionWithOptions($headers, $runtime);
    }

    /**
     * @summary 分页查询企业职位信息
     *  *
     * @param QueryPositionsRequest $request QueryPositionsRequest
     * @param QueryPositionsHeaders $headers QueryPositionsHeaders
     * @param RuntimeOptions        $runtime runtime options for this request RuntimeOptions
     *
     * @return QueryPositionsResponse QueryPositionsResponse
     */
    public function queryPositionsWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->maxResults)) {
            $query['maxResults'] = $request->maxResults;
        }
        if (!Utils::isUnset($request->nextToken)) {
            $query['nextToken'] = $request->nextToken;
        }
        $body = [];
        if (!Utils::isUnset($request->deptId)) {
            $body['deptId'] = $request->deptId;
        }
        if (!Utils::isUnset($request->inCategoryIds)) {
            $body['inCategoryIds'] = $request->inCategoryIds;
        }
        if (!Utils::isUnset($request->inPositionIds)) {
            $body['inPositionIds'] = $request->inPositionIds;
        }
        if (!Utils::isUnset($request->positionName)) {
            $body['positionName'] = $request->positionName;
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
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'QueryPositions',
            'version' => 'hrm_1.0',
            'protocol' => 'HTTP',
            'pathname' => '/v1.0/hrm/positions/query',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'none',
            'bodyType' => 'json',
        ]);

        return QueryPositionsResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary 分页查询企业职位信息
     *  *
     * @param QueryPositionsRequest $request QueryPositionsRequest
     *
     * @return QueryPositionsResponse QueryPositionsResponse
     */
    public function queryPositions($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new QueryPositionsHeaders([]);

        return $this->queryPositionsWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 撤回电子签署中的签署记录
     *  *
     * @param RevokeSignRecordsRequest $request RevokeSignRecordsRequest
     * @param RevokeSignRecordsHeaders $headers RevokeSignRecordsHeaders
     * @param RuntimeOptions           $runtime runtime options for this request RuntimeOptions
     *
     * @return RevokeSignRecordsResponse RevokeSignRecordsResponse
     */
    public function revokeSignRecordsWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->revokeUserId)) {
            $body['revokeUserId'] = $request->revokeUserId;
        }
        if (!Utils::isUnset($request->signRecordIds)) {
            $body['signRecordIds'] = $request->signRecordIds;
        }
        if (!Utils::isUnset($request->statusRemark)) {
            $body['statusRemark'] = $request->statusRemark;
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
            'action' => 'RevokeSignRecords',
            'version' => 'hrm_1.0',
            'protocol' => 'HTTP',
            'pathname' => '/v1.0/hrm/masters/signCenters/records/revoke',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'none',
            'bodyType' => 'json',
        ]);

        return RevokeSignRecordsResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary 撤回电子签署中的签署记录
     *  *
     * @param RevokeSignRecordsRequest $request RevokeSignRecordsRequest
     *
     * @return RevokeSignRecordsResponse RevokeSignRecordsResponse
     */
    public function revokeSignRecords($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new RevokeSignRecordsHeaders([]);

        return $this->revokeSignRecordsWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 撤销待离职
     *  *
     * @param RevokeTerminationRequest $request RevokeTerminationRequest
     * @param RevokeTerminationHeaders $headers RevokeTerminationHeaders
     * @param RuntimeOptions           $runtime runtime options for this request RuntimeOptions
     *
     * @return RevokeTerminationResponse RevokeTerminationResponse
     */
    public function revokeTerminationWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->userId)) {
            $body['userId'] = $request->userId;
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
            'action' => 'RevokeTermination',
            'version' => 'hrm_1.0',
            'protocol' => 'HTTP',
            'pathname' => '/v1.0/hrm/pendingDismission/revoke',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'none',
            'bodyType' => 'json',
        ]);

        return RevokeTerminationResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary 撤销待离职
     *  *
     * @param RevokeTerminationRequest $request RevokeTerminationRequest
     *
     * @return RevokeTerminationResponse RevokeTerminationResponse
     */
    public function revokeTermination($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new RevokeTerminationHeaders([]);

        return $this->revokeTerminationWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 查询花名册中有权限的字段列表
     *  *
     * @param RosterMetaAvailableFieldListRequest $request RosterMetaAvailableFieldListRequest
     * @param RosterMetaAvailableFieldListHeaders $headers RosterMetaAvailableFieldListHeaders
     * @param RuntimeOptions                      $runtime runtime options for this request RuntimeOptions
     *
     * @return RosterMetaAvailableFieldListResponse RosterMetaAvailableFieldListResponse
     */
    public function rosterMetaAvailableFieldListWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->appAgentId)) {
            $query['appAgentId'] = $request->appAgentId;
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
            'action' => 'RosterMetaAvailableFieldList',
            'version' => 'hrm_1.0',
            'protocol' => 'HTTP',
            'pathname' => '/v1.0/hrm/rosters/meta/authorities/fields',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'none',
            'bodyType' => 'json',
        ]);

        return RosterMetaAvailableFieldListResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary 查询花名册中有权限的字段列表
     *  *
     * @param RosterMetaAvailableFieldListRequest $request RosterMetaAvailableFieldListRequest
     *
     * @return RosterMetaAvailableFieldListResponse RosterMetaAvailableFieldListResponse
     */
    public function rosterMetaAvailableFieldList($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new RosterMetaAvailableFieldListHeaders([]);

        return $this->rosterMetaAvailableFieldListWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 智能人事花名册字段选项修改
     *  *
     * @param RosterMetaFieldOptionsUpdateRequest $request RosterMetaFieldOptionsUpdateRequest
     * @param RosterMetaFieldOptionsUpdateHeaders $headers RosterMetaFieldOptionsUpdateHeaders
     * @param RuntimeOptions                      $runtime runtime options for this request RuntimeOptions
     *
     * @return RosterMetaFieldOptionsUpdateResponse RosterMetaFieldOptionsUpdateResponse
     */
    public function rosterMetaFieldOptionsUpdateWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->appAgentId)) {
            $query['appAgentId'] = $request->appAgentId;
        }
        $body = [];
        if (!Utils::isUnset($request->fieldCode)) {
            $body['fieldCode'] = $request->fieldCode;
        }
        if (!Utils::isUnset($request->groupId)) {
            $body['groupId'] = $request->groupId;
        }
        if (!Utils::isUnset($request->labels)) {
            $body['labels'] = $request->labels;
        }
        if (!Utils::isUnset($request->modifyType)) {
            $body['modifyType'] = $request->modifyType;
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
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'RosterMetaFieldOptionsUpdate',
            'version' => 'hrm_1.0',
            'protocol' => 'HTTP',
            'pathname' => '/v1.0/hrm/rosters/meta/fields/options',
            'method' => 'PUT',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'none',
            'bodyType' => 'json',
        ]);

        return RosterMetaFieldOptionsUpdateResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary 智能人事花名册字段选项修改
     *  *
     * @param RosterMetaFieldOptionsUpdateRequest $request RosterMetaFieldOptionsUpdateRequest
     *
     * @return RosterMetaFieldOptionsUpdateResponse RosterMetaFieldOptionsUpdateResponse
     */
    public function rosterMetaFieldOptionsUpdate($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new RosterMetaFieldOptionsUpdateHeaders([]);

        return $this->rosterMetaFieldOptionsUpdateWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary ISV发送卡片消息
     *  *
     * @param SendIsvCardMessageRequest $request SendIsvCardMessageRequest
     * @param SendIsvCardMessageHeaders $headers SendIsvCardMessageHeaders
     * @param RuntimeOptions            $runtime runtime options for this request RuntimeOptions
     *
     * @return SendIsvCardMessageResponse SendIsvCardMessageResponse
     */
    public function sendIsvCardMessageWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->agentId)) {
            $query['agentId'] = $request->agentId;
        }
        $body = [];
        if (!Utils::isUnset($request->bizId)) {
            $body['bizId'] = $request->bizId;
        }
        if (!Utils::isUnset($request->messageType)) {
            $body['messageType'] = $request->messageType;
        }
        if (!Utils::isUnset($request->receiverUserIds)) {
            $body['receiverUserIds'] = $request->receiverUserIds;
        }
        if (!Utils::isUnset($request->sceneType)) {
            $body['sceneType'] = $request->sceneType;
        }
        if (!Utils::isUnset($request->scope)) {
            $body['scope'] = $request->scope;
        }
        if (!Utils::isUnset($request->senderUserId)) {
            $body['senderUserId'] = $request->senderUserId;
        }
        if (!Utils::isUnset($request->valueMap)) {
            $body['valueMap'] = $request->valueMap;
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
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'SendIsvCardMessage',
            'version' => 'hrm_1.0',
            'protocol' => 'HTTP',
            'pathname' => '/v1.0/hrm/cardMessages/send',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'none',
            'bodyType' => 'json',
        ]);

        return SendIsvCardMessageResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary ISV发送卡片消息
     *  *
     * @param SendIsvCardMessageRequest $request SendIsvCardMessageRequest
     *
     * @return SendIsvCardMessageResponse SendIsvCardMessageResponse
     */
    public function sendIsvCardMessage($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new SendIsvCardMessageHeaders([]);

        return $this->sendIsvCardMessageWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 初始化解决方案任务
     *  *
     * @param SolutionTaskInitRequest $request SolutionTaskInitRequest
     * @param SolutionTaskInitHeaders $headers SolutionTaskInitHeaders
     * @param RuntimeOptions          $runtime runtime options for this request RuntimeOptions
     *
     * @return SolutionTaskInitResponse SolutionTaskInitResponse
     */
    public function solutionTaskInitWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->solutionType)) {
            $query['solutionType'] = $request->solutionType;
        }
        $body = [];
        if (!Utils::isUnset($request->category)) {
            $body['category'] = $request->category;
        }
        if (!Utils::isUnset($request->claimTime)) {
            $body['claimTime'] = $request->claimTime;
        }
        if (!Utils::isUnset($request->description)) {
            $body['description'] = $request->description;
        }
        if (!Utils::isUnset($request->finishTime)) {
            $body['finishTime'] = $request->finishTime;
        }
        if (!Utils::isUnset($request->outerId)) {
            $body['outerId'] = $request->outerId;
        }
        if (!Utils::isUnset($request->status)) {
            $body['status'] = $request->status;
        }
        if (!Utils::isUnset($request->title)) {
            $body['title'] = $request->title;
        }
        if (!Utils::isUnset($request->userId)) {
            $body['userId'] = $request->userId;
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
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'SolutionTaskInit',
            'version' => 'hrm_1.0',
            'protocol' => 'HTTP',
            'pathname' => '/v1.0/hrm/solutions/tasks/init',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'none',
            'bodyType' => 'json',
        ]);

        return SolutionTaskInitResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary 初始化解决方案任务
     *  *
     * @param SolutionTaskInitRequest $request SolutionTaskInitRequest
     *
     * @return SolutionTaskInitResponse SolutionTaskInitResponse
     */
    public function solutionTaskInit($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new SolutionTaskInitHeaders([]);

        return $this->solutionTaskInitWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 保存解决方案任务
     *  *
     * @param SolutionTaskSaveRequest $request SolutionTaskSaveRequest
     * @param SolutionTaskSaveHeaders $headers SolutionTaskSaveHeaders
     * @param RuntimeOptions          $runtime runtime options for this request RuntimeOptions
     *
     * @return SolutionTaskSaveResponse SolutionTaskSaveResponse
     */
    public function solutionTaskSaveWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->solutionType)) {
            $query['solutionType'] = $request->solutionType;
        }
        $body = [];
        if (!Utils::isUnset($request->claimTime)) {
            $body['claimTime'] = $request->claimTime;
        }
        if (!Utils::isUnset($request->description)) {
            $body['description'] = $request->description;
        }
        if (!Utils::isUnset($request->finishTime)) {
            $body['finishTime'] = $request->finishTime;
        }
        if (!Utils::isUnset($request->outerId)) {
            $body['outerId'] = $request->outerId;
        }
        if (!Utils::isUnset($request->solutionInstanceId)) {
            $body['solutionInstanceId'] = $request->solutionInstanceId;
        }
        if (!Utils::isUnset($request->startTime)) {
            $body['startTime'] = $request->startTime;
        }
        if (!Utils::isUnset($request->status)) {
            $body['status'] = $request->status;
        }
        if (!Utils::isUnset($request->taskType)) {
            $body['taskType'] = $request->taskType;
        }
        if (!Utils::isUnset($request->templateOuterId)) {
            $body['templateOuterId'] = $request->templateOuterId;
        }
        if (!Utils::isUnset($request->title)) {
            $body['title'] = $request->title;
        }
        if (!Utils::isUnset($request->userId)) {
            $body['userId'] = $request->userId;
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
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'SolutionTaskSave',
            'version' => 'hrm_1.0',
            'protocol' => 'HTTP',
            'pathname' => '/v1.0/hrm/solutions/tasks/save',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'none',
            'bodyType' => 'json',
        ]);

        return SolutionTaskSaveResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary 保存解决方案任务
     *  *
     * @param SolutionTaskSaveRequest $request SolutionTaskSaveRequest
     *
     * @return SolutionTaskSaveResponse SolutionTaskSaveResponse
     */
    public function solutionTaskSave($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new SolutionTaskSaveHeaders([]);

        return $this->solutionTaskSaveWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 同步解决方案状态
     *  *
     * @param SyncSolutionStatusRequest $request SyncSolutionStatusRequest
     * @param SyncSolutionStatusHeaders $headers SyncSolutionStatusHeaders
     * @param RuntimeOptions            $runtime runtime options for this request RuntimeOptions
     *
     * @return SyncSolutionStatusResponse SyncSolutionStatusResponse
     */
    public function syncSolutionStatusWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->bizId)) {
            $body['bizId'] = $request->bizId;
        }
        if (!Utils::isUnset($request->solutionStatus)) {
            $body['solutionStatus'] = $request->solutionStatus;
        }
        if (!Utils::isUnset($request->solutionType)) {
            $body['solutionType'] = $request->solutionType;
        }
        if (!Utils::isUnset($request->tenantId)) {
            $body['tenantId'] = $request->tenantId;
        }
        if (!Utils::isUnset($request->userIds)) {
            $body['userIds'] = $request->userIds;
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
            'action' => 'SyncSolutionStatus',
            'version' => 'hrm_1.0',
            'protocol' => 'HTTP',
            'pathname' => '/v1.0/hrm/solutions/statuses/sync',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'none',
            'bodyType' => 'json',
        ]);

        return SyncSolutionStatusResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary 同步解决方案状态
     *  *
     * @param SyncSolutionStatusRequest $request SyncSolutionStatusRequest
     *
     * @return SyncSolutionStatusResponse SyncSolutionStatusResponse
     */
    public function syncSolutionStatus($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new SyncSolutionStatusHeaders([]);

        return $this->syncSolutionStatusWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 同步解决方案任务模版
     *  *
     * @param SyncTaskTemplateRequest $request SyncTaskTemplateRequest
     * @param SyncTaskTemplateHeaders $headers SyncTaskTemplateHeaders
     * @param RuntimeOptions          $runtime runtime options for this request RuntimeOptions
     *
     * @return SyncTaskTemplateResponse SyncTaskTemplateResponse
     */
    public function syncTaskTemplateWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->solutionType)) {
            $query['solutionType'] = $request->solutionType;
        }
        $body = [];
        if (!Utils::isUnset($request->delete)) {
            $body['delete'] = $request->delete;
        }
        if (!Utils::isUnset($request->des)) {
            $body['des'] = $request->des;
        }
        if (!Utils::isUnset($request->ext)) {
            $body['ext'] = $request->ext;
        }
        if (!Utils::isUnset($request->name)) {
            $body['name'] = $request->name;
        }
        if (!Utils::isUnset($request->optUserId)) {
            $body['optUserId'] = $request->optUserId;
        }
        if (!Utils::isUnset($request->outerId)) {
            $body['outerId'] = $request->outerId;
        }
        if (!Utils::isUnset($request->taskScopeVO)) {
            $body['taskScopeVO'] = $request->taskScopeVO;
        }
        if (!Utils::isUnset($request->taskType)) {
            $body['taskType'] = $request->taskType;
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
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'SyncTaskTemplate',
            'version' => 'hrm_1.0',
            'protocol' => 'HTTP',
            'pathname' => '/v1.0/hrm/solutions/tasks/templates/sync',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'none',
            'bodyType' => 'json',
        ]);

        return SyncTaskTemplateResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary 同步解决方案任务模版
     *  *
     * @param SyncTaskTemplateRequest $request SyncTaskTemplateRequest
     *
     * @return SyncTaskTemplateResponse SyncTaskTemplateResponse
     */
    public function syncTaskTemplate($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new SyncTaskTemplateHeaders([]);

        return $this->syncTaskTemplateWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 更新待离职信息
     *  *
     * @param UpdateEmpDismissionInfoRequest $request UpdateEmpDismissionInfoRequest
     * @param UpdateEmpDismissionInfoHeaders $headers UpdateEmpDismissionInfoHeaders
     * @param RuntimeOptions                 $runtime runtime options for this request RuntimeOptions
     *
     * @return UpdateEmpDismissionInfoResponse UpdateEmpDismissionInfoResponse
     */
    public function updateEmpDismissionInfoWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->dismissionMemo)) {
            $body['dismissionMemo'] = $request->dismissionMemo;
        }
        if (!Utils::isUnset($request->lastWorkDate)) {
            $body['lastWorkDate'] = $request->lastWorkDate;
        }
        if (!Utils::isUnset($request->partner)) {
            $body['partner'] = $request->partner;
        }
        if (!Utils::isUnset($request->terminationReasonPassive)) {
            $body['terminationReasonPassive'] = $request->terminationReasonPassive;
        }
        if (!Utils::isUnset($request->terminationReasonVoluntary)) {
            $body['terminationReasonVoluntary'] = $request->terminationReasonVoluntary;
        }
        if (!Utils::isUnset($request->userId)) {
            $body['userId'] = $request->userId;
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
            'action' => 'UpdateEmpDismissionInfo',
            'version' => 'hrm_1.0',
            'protocol' => 'HTTP',
            'pathname' => '/v1.0/hrm/pendingDismission/infos',
            'method' => 'PUT',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'none',
            'bodyType' => 'json',
        ]);

        return UpdateEmpDismissionInfoResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary 更新待离职信息
     *  *
     * @param UpdateEmpDismissionInfoRequest $request UpdateEmpDismissionInfoRequest
     *
     * @return UpdateEmpDismissionInfoResponse UpdateEmpDismissionInfoResponse
     */
    public function updateEmpDismissionInfo($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new UpdateEmpDismissionInfoHeaders([]);

        return $this->updateEmpDismissionInfoWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 更新法人公司名称
     *  *
     * @param UpdateHrmLegalEntityNameRequest $request UpdateHrmLegalEntityNameRequest
     * @param UpdateHrmLegalEntityNameHeaders $headers UpdateHrmLegalEntityNameHeaders
     * @param RuntimeOptions                  $runtime runtime options for this request RuntimeOptions
     *
     * @return UpdateHrmLegalEntityNameResponse UpdateHrmLegalEntityNameResponse
     */
    public function updateHrmLegalEntityNameWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->dingTenantId)) {
            $query['dingTenantId'] = $request->dingTenantId;
        }
        if (!Utils::isUnset($request->legalEntityName)) {
            $query['legalEntityName'] = $request->legalEntityName;
        }
        if (!Utils::isUnset($request->originLegalEntityName)) {
            $query['originLegalEntityName'] = $request->originLegalEntityName;
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
            'action' => 'UpdateHrmLegalEntityName',
            'version' => 'hrm_1.0',
            'protocol' => 'HTTP',
            'pathname' => '/v1.0/hrm/masters/legalEntities/companyNames',
            'method' => 'PUT',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'none',
            'bodyType' => 'json',
        ]);

        return UpdateHrmLegalEntityNameResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary 更新法人公司名称
     *  *
     * @param UpdateHrmLegalEntityNameRequest $request UpdateHrmLegalEntityNameRequest
     *
     * @return UpdateHrmLegalEntityNameResponse UpdateHrmLegalEntityNameResponse
     */
    public function updateHrmLegalEntityName($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new UpdateHrmLegalEntityNameHeaders([]);

        return $this->updateHrmLegalEntityNameWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 更新法人公司
     *  *
     * @param UpdateHrmLegalEntityWithoutNameRequest $request UpdateHrmLegalEntityWithoutNameRequest
     * @param UpdateHrmLegalEntityWithoutNameHeaders $headers UpdateHrmLegalEntityWithoutNameHeaders
     * @param RuntimeOptions                         $runtime runtime options for this request RuntimeOptions
     *
     * @return UpdateHrmLegalEntityWithoutNameResponse UpdateHrmLegalEntityWithoutNameResponse
     */
    public function updateHrmLegalEntityWithoutNameWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->dingTenantId)) {
            $query['dingTenantId'] = $request->dingTenantId;
        }
        $body = [];
        if (!Utils::isUnset($request->corpId)) {
            $body['corpId'] = $request->corpId;
        }
        if (!Utils::isUnset($request->createUserId)) {
            $body['createUserId'] = $request->createUserId;
        }
        if (!Utils::isUnset($request->ext)) {
            $body['ext'] = $request->ext;
        }
        if (!Utils::isUnset($request->legalEntityName)) {
            $body['legalEntityName'] = $request->legalEntityName;
        }
        if (!Utils::isUnset($request->legalEntityShortName)) {
            $body['legalEntityShortName'] = $request->legalEntityShortName;
        }
        if (!Utils::isUnset($request->legalEntityStatus)) {
            $body['legalEntityStatus'] = $request->legalEntityStatus;
        }
        if (!Utils::isUnset($request->legalPersonName)) {
            $body['legalPersonName'] = $request->legalPersonName;
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
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'UpdateHrmLegalEntityWithoutName',
            'version' => 'hrm_1.0',
            'protocol' => 'HTTP',
            'pathname' => '/v1.0/hrm/masters/legalEntities/companies',
            'method' => 'PUT',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'none',
            'bodyType' => 'json',
        ]);

        return UpdateHrmLegalEntityWithoutNameResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary 更新法人公司
     *  *
     * @param UpdateHrmLegalEntityWithoutNameRequest $request UpdateHrmLegalEntityWithoutNameRequest
     *
     * @return UpdateHrmLegalEntityWithoutNameResponse UpdateHrmLegalEntityWithoutNameResponse
     */
    public function updateHrmLegalEntityWithoutName($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new UpdateHrmLegalEntityWithoutNameHeaders([]);

        return $this->updateHrmLegalEntityWithoutNameWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 智能人事更新版本回退按钮状态
     *  *
     * @param UpdateHrmVersionRollBackStatusRequest $request UpdateHrmVersionRollBackStatusRequest
     * @param UpdateHrmVersionRollBackStatusHeaders $headers UpdateHrmVersionRollBackStatusHeaders
     * @param RuntimeOptions                        $runtime runtime options for this request RuntimeOptions
     *
     * @return UpdateHrmVersionRollBackStatusResponse UpdateHrmVersionRollBackStatusResponse
     */
    public function updateHrmVersionRollBackStatusWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->configValue)) {
            $body['configValue'] = $request->configValue;
        }
        if (!Utils::isUnset($request->optUserId)) {
            $body['optUserId'] = $request->optUserId;
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
            'action' => 'UpdateHrmVersionRollBackStatus',
            'version' => 'hrm_1.0',
            'protocol' => 'HTTP',
            'pathname' => '/v1.0/hrm/versions/rollbackButtons/statuses',
            'method' => 'PUT',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'none',
            'bodyType' => 'json',
        ]);

        return UpdateHrmVersionRollBackStatusResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary 智能人事更新版本回退按钮状态
     *  *
     * @param UpdateHrmVersionRollBackStatusRequest $request UpdateHrmVersionRollBackStatusRequest
     *
     * @return UpdateHrmVersionRollBackStatusResponse UpdateHrmVersionRollBackStatusResponse
     */
    public function updateHrmVersionRollBackStatus($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new UpdateHrmVersionRollBackStatusHeaders([]);

        return $this->updateHrmVersionRollBackStatusWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary ISV更新卡片消息
     *  *
     * @param UpdateIsvCardMessageRequest $request UpdateIsvCardMessageRequest
     * @param UpdateIsvCardMessageHeaders $headers UpdateIsvCardMessageHeaders
     * @param RuntimeOptions              $runtime runtime options for this request RuntimeOptions
     *
     * @return UpdateIsvCardMessageResponse UpdateIsvCardMessageResponse
     */
    public function updateIsvCardMessageWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->agentId)) {
            $query['agentId'] = $request->agentId;
        }
        $body = [];
        if (!Utils::isUnset($request->bizId)) {
            $body['bizId'] = $request->bizId;
        }
        if (!Utils::isUnset($request->messageType)) {
            $body['messageType'] = $request->messageType;
        }
        if (!Utils::isUnset($request->sceneType)) {
            $body['sceneType'] = $request->sceneType;
        }
        if (!Utils::isUnset($request->scope)) {
            $body['scope'] = $request->scope;
        }
        if (!Utils::isUnset($request->valueMap)) {
            $body['valueMap'] = $request->valueMap;
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
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'UpdateIsvCardMessage',
            'version' => 'hrm_1.0',
            'protocol' => 'HTTP',
            'pathname' => '/v1.0/hrm/cardMessages',
            'method' => 'PUT',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'none',
            'bodyType' => 'json',
        ]);

        return UpdateIsvCardMessageResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary ISV更新卡片消息
     *  *
     * @param UpdateIsvCardMessageRequest $request UpdateIsvCardMessageRequest
     *
     * @return UpdateIsvCardMessageResponse UpdateIsvCardMessageResponse
     */
    public function updateIsvCardMessage($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new UpdateIsvCardMessageHeaders([]);

        return $this->updateIsvCardMessageWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 上传附件材料
     *  *
     * @param UploadAttachmentRequest $request UploadAttachmentRequest
     * @param UploadAttachmentHeaders $headers UploadAttachmentHeaders
     * @param RuntimeOptions          $runtime runtime options for this request RuntimeOptions
     *
     * @return UploadAttachmentResponse UploadAttachmentResponse
     */
    public function uploadAttachmentWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->mediaId)) {
            $body['mediaId'] = $request->mediaId;
        }
        if (!Utils::isUnset($request->userId)) {
            $body['userId'] = $request->userId;
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
            'action' => 'UploadAttachment',
            'version' => 'hrm_1.0',
            'protocol' => 'HTTP',
            'pathname' => '/v1.0/hrm/attachments/upload',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'none',
            'bodyType' => 'json',
        ]);

        return UploadAttachmentResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary 上传附件材料
     *  *
     * @param UploadAttachmentRequest $request UploadAttachmentRequest
     *
     * @return UploadAttachmentResponse UploadAttachmentResponse
     */
    public function uploadAttachment($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new UploadAttachmentHeaders([]);

        return $this->uploadAttachmentWithOptions($request, $headers, $runtime);
    }
}
