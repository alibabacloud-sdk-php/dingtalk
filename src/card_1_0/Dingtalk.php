<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dingtalk\Vcard_1_0;

use AlibabaCloud\OpenApiUtil\OpenApiUtilClient;
use AlibabaCloud\SDK\Dingtalk\Vcard_1_0\Models\AppendSpaceHeaders;
use AlibabaCloud\SDK\Dingtalk\Vcard_1_0\Models\AppendSpaceRequest;
use AlibabaCloud\SDK\Dingtalk\Vcard_1_0\Models\AppendSpaceResponse;
use AlibabaCloud\SDK\Dingtalk\Vcard_1_0\Models\AppendSpaceWithDelegateHeaders;
use AlibabaCloud\SDK\Dingtalk\Vcard_1_0\Models\AppendSpaceWithDelegateRequest;
use AlibabaCloud\SDK\Dingtalk\Vcard_1_0\Models\AppendSpaceWithDelegateResponse;
use AlibabaCloud\SDK\Dingtalk\Vcard_1_0\Models\CreateAndDeliverHeaders;
use AlibabaCloud\SDK\Dingtalk\Vcard_1_0\Models\CreateAndDeliverRequest;
use AlibabaCloud\SDK\Dingtalk\Vcard_1_0\Models\CreateAndDeliverResponse;
use AlibabaCloud\SDK\Dingtalk\Vcard_1_0\Models\CreateAndDeliverWithDelegateHeaders;
use AlibabaCloud\SDK\Dingtalk\Vcard_1_0\Models\CreateAndDeliverWithDelegateRequest;
use AlibabaCloud\SDK\Dingtalk\Vcard_1_0\Models\CreateAndDeliverWithDelegateResponse;
use AlibabaCloud\SDK\Dingtalk\Vcard_1_0\Models\CreateCardHeaders;
use AlibabaCloud\SDK\Dingtalk\Vcard_1_0\Models\CreateCardRequest;
use AlibabaCloud\SDK\Dingtalk\Vcard_1_0\Models\CreateCardResponse;
use AlibabaCloud\SDK\Dingtalk\Vcard_1_0\Models\CreateCardWithDelegateHeaders;
use AlibabaCloud\SDK\Dingtalk\Vcard_1_0\Models\CreateCardWithDelegateRequest;
use AlibabaCloud\SDK\Dingtalk\Vcard_1_0\Models\CreateCardWithDelegateResponse;
use AlibabaCloud\SDK\Dingtalk\Vcard_1_0\Models\DeliverCardHeaders;
use AlibabaCloud\SDK\Dingtalk\Vcard_1_0\Models\DeliverCardRequest;
use AlibabaCloud\SDK\Dingtalk\Vcard_1_0\Models\DeliverCardResponse;
use AlibabaCloud\SDK\Dingtalk\Vcard_1_0\Models\DeliverCardWithDelegateHeaders;
use AlibabaCloud\SDK\Dingtalk\Vcard_1_0\Models\DeliverCardWithDelegateRequest;
use AlibabaCloud\SDK\Dingtalk\Vcard_1_0\Models\DeliverCardWithDelegateResponse;
use AlibabaCloud\SDK\Dingtalk\Vcard_1_0\Models\RegisterCallbackHeaders;
use AlibabaCloud\SDK\Dingtalk\Vcard_1_0\Models\RegisterCallbackRequest;
use AlibabaCloud\SDK\Dingtalk\Vcard_1_0\Models\RegisterCallbackResponse;
use AlibabaCloud\SDK\Dingtalk\Vcard_1_0\Models\RegisterCallbackWithDelegateHeaders;
use AlibabaCloud\SDK\Dingtalk\Vcard_1_0\Models\RegisterCallbackWithDelegateRequest;
use AlibabaCloud\SDK\Dingtalk\Vcard_1_0\Models\RegisterCallbackWithDelegateResponse;
use AlibabaCloud\SDK\Dingtalk\Vcard_1_0\Models\StreamingUpdateHeaders;
use AlibabaCloud\SDK\Dingtalk\Vcard_1_0\Models\StreamingUpdateRequest;
use AlibabaCloud\SDK\Dingtalk\Vcard_1_0\Models\StreamingUpdateResponse;
use AlibabaCloud\SDK\Dingtalk\Vcard_1_0\Models\UpdateCardHeaders;
use AlibabaCloud\SDK\Dingtalk\Vcard_1_0\Models\UpdateCardRequest;
use AlibabaCloud\SDK\Dingtalk\Vcard_1_0\Models\UpdateCardResponse;
use AlibabaCloud\SDK\Dingtalk\Vcard_1_0\Models\UpdateCardWithDelegateHeaders;
use AlibabaCloud\SDK\Dingtalk\Vcard_1_0\Models\UpdateCardWithDelegateRequest;
use AlibabaCloud\SDK\Dingtalk\Vcard_1_0\Models\UpdateCardWithDelegateResponse;
use AlibabaCloud\Tea\Utils\Utils;
use AlibabaCloud\Tea\Utils\Utils\RuntimeOptions;
use Darabonba\GatewayDingTalk\Client as DarabonbaGatewayDingTalkClient;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;

class Dingtalk extends OpenApiClient
{
    protected $_client;

    public function __construct($config)
    {
        parent::__construct($config);
        $this->_client       = new DarabonbaGatewayDingTalkClient();
        $this->_spi          = $this->_client;
        $this->_endpointRule = '';
        if (Utils::empty_($this->_endpoint)) {
            $this->_endpoint = 'api.dingtalk.com';
        }
    }

    /**
     * @param AppendSpaceRequest $request
     * @param AppendSpaceHeaders $headers
     * @param RuntimeOptions     $runtime
     *
     * @return AppendSpaceResponse
     */
    public function appendSpaceWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->coFeedOpenSpaceModel)) {
            $body['coFeedOpenSpaceModel'] = $request->coFeedOpenSpaceModel;
        }
        if (!Utils::isUnset($request->imGroupOpenSpaceModel)) {
            $body['imGroupOpenSpaceModel'] = $request->imGroupOpenSpaceModel;
        }
        if (!Utils::isUnset($request->imRobotOpenSpaceModel)) {
            $body['imRobotOpenSpaceModel'] = $request->imRobotOpenSpaceModel;
        }
        if (!Utils::isUnset($request->outTrackId)) {
            $body['outTrackId'] = $request->outTrackId;
        }
        if (!Utils::isUnset($request->topOpenSpaceModel)) {
            $body['topOpenSpaceModel'] = $request->topOpenSpaceModel;
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
            'action'      => 'AppendSpace',
            'version'     => 'card_1.0',
            'protocol'    => 'HTTP',
            'pathname'    => '/v1.0/card/instances/spaces',
            'method'      => 'PUT',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'none',
            'bodyType'    => 'json',
        ]);

        return AppendSpaceResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @param AppendSpaceRequest $request
     *
     * @return AppendSpaceResponse
     */
    public function appendSpace($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new AppendSpaceHeaders([]);

        return $this->appendSpaceWithOptions($request, $headers, $runtime);
    }

    /**
     * @param AppendSpaceWithDelegateRequest $request
     * @param AppendSpaceWithDelegateHeaders $headers
     * @param RuntimeOptions                 $runtime
     *
     * @return AppendSpaceWithDelegateResponse
     */
    public function appendSpaceWithDelegateWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->coFeedOpenSpaceModel)) {
            $body['coFeedOpenSpaceModel'] = $request->coFeedOpenSpaceModel;
        }
        if (!Utils::isUnset($request->imGroupOpenSpaceModel)) {
            $body['imGroupOpenSpaceModel'] = $request->imGroupOpenSpaceModel;
        }
        if (!Utils::isUnset($request->imRobotOpenSpaceModel)) {
            $body['imRobotOpenSpaceModel'] = $request->imRobotOpenSpaceModel;
        }
        if (!Utils::isUnset($request->outTrackId)) {
            $body['outTrackId'] = $request->outTrackId;
        }
        if (!Utils::isUnset($request->topOpenSpaceModel)) {
            $body['topOpenSpaceModel'] = $request->topOpenSpaceModel;
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
            'action'      => 'AppendSpaceWithDelegate',
            'version'     => 'card_1.0',
            'protocol'    => 'HTTP',
            'pathname'    => '/v1.0/card/me/instances/spaces',
            'method'      => 'PUT',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'none',
            'bodyType'    => 'json',
        ]);

        return AppendSpaceWithDelegateResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @param AppendSpaceWithDelegateRequest $request
     *
     * @return AppendSpaceWithDelegateResponse
     */
    public function appendSpaceWithDelegate($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new AppendSpaceWithDelegateHeaders([]);

        return $this->appendSpaceWithDelegateWithOptions($request, $headers, $runtime);
    }

    /**
     * @param CreateAndDeliverRequest $request
     * @param CreateAndDeliverHeaders $headers
     * @param RuntimeOptions          $runtime
     *
     * @return CreateAndDeliverResponse
     */
    public function createAndDeliverWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->callbackRouteKey)) {
            $body['callbackRouteKey'] = $request->callbackRouteKey;
        }
        if (!Utils::isUnset($request->callbackType)) {
            $body['callbackType'] = $request->callbackType;
        }
        if (!Utils::isUnset($request->cardData)) {
            $body['cardData'] = $request->cardData;
        }
        if (!Utils::isUnset($request->cardTemplateId)) {
            $body['cardTemplateId'] = $request->cardTemplateId;
        }
        if (!Utils::isUnset($request->coFeedOpenDeliverModel)) {
            $body['coFeedOpenDeliverModel'] = $request->coFeedOpenDeliverModel;
        }
        if (!Utils::isUnset($request->coFeedOpenSpaceModel)) {
            $body['coFeedOpenSpaceModel'] = $request->coFeedOpenSpaceModel;
        }
        if (!Utils::isUnset($request->docOpenDeliverModel)) {
            $body['docOpenDeliverModel'] = $request->docOpenDeliverModel;
        }
        if (!Utils::isUnset($request->imGroupOpenDeliverModel)) {
            $body['imGroupOpenDeliverModel'] = $request->imGroupOpenDeliverModel;
        }
        if (!Utils::isUnset($request->imGroupOpenSpaceModel)) {
            $body['imGroupOpenSpaceModel'] = $request->imGroupOpenSpaceModel;
        }
        if (!Utils::isUnset($request->imRobotOpenDeliverModel)) {
            $body['imRobotOpenDeliverModel'] = $request->imRobotOpenDeliverModel;
        }
        if (!Utils::isUnset($request->imRobotOpenSpaceModel)) {
            $body['imRobotOpenSpaceModel'] = $request->imRobotOpenSpaceModel;
        }
        if (!Utils::isUnset($request->openDynamicDataConfig)) {
            $body['openDynamicDataConfig'] = $request->openDynamicDataConfig;
        }
        if (!Utils::isUnset($request->openSpaceId)) {
            $body['openSpaceId'] = $request->openSpaceId;
        }
        if (!Utils::isUnset($request->outTrackId)) {
            $body['outTrackId'] = $request->outTrackId;
        }
        if (!Utils::isUnset($request->privateData)) {
            $body['privateData'] = $request->privateData;
        }
        if (!Utils::isUnset($request->topOpenDeliverModel)) {
            $body['topOpenDeliverModel'] = $request->topOpenDeliverModel;
        }
        if (!Utils::isUnset($request->topOpenSpaceModel)) {
            $body['topOpenSpaceModel'] = $request->topOpenSpaceModel;
        }
        if (!Utils::isUnset($request->userId)) {
            $body['userId'] = $request->userId;
        }
        if (!Utils::isUnset($request->userIdType)) {
            $body['userIdType'] = $request->userIdType;
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
            'action'      => 'CreateAndDeliver',
            'version'     => 'card_1.0',
            'protocol'    => 'HTTP',
            'pathname'    => '/v1.0/card/instances/createAndDeliver',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'none',
            'bodyType'    => 'json',
        ]);

        return CreateAndDeliverResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @param CreateAndDeliverRequest $request
     *
     * @return CreateAndDeliverResponse
     */
    public function createAndDeliver($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new CreateAndDeliverHeaders([]);

        return $this->createAndDeliverWithOptions($request, $headers, $runtime);
    }

    /**
     * @param CreateAndDeliverWithDelegateRequest $request
     * @param CreateAndDeliverWithDelegateHeaders $headers
     * @param RuntimeOptions                      $runtime
     *
     * @return CreateAndDeliverWithDelegateResponse
     */
    public function createAndDeliverWithDelegateWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->callbackRouteKey)) {
            $body['callbackRouteKey'] = $request->callbackRouteKey;
        }
        if (!Utils::isUnset($request->callbackType)) {
            $body['callbackType'] = $request->callbackType;
        }
        if (!Utils::isUnset($request->cardData)) {
            $body['cardData'] = $request->cardData;
        }
        if (!Utils::isUnset($request->cardTemplateId)) {
            $body['cardTemplateId'] = $request->cardTemplateId;
        }
        if (!Utils::isUnset($request->coFeedOpenDeliverModel)) {
            $body['coFeedOpenDeliverModel'] = $request->coFeedOpenDeliverModel;
        }
        if (!Utils::isUnset($request->coFeedOpenSpaceModel)) {
            $body['coFeedOpenSpaceModel'] = $request->coFeedOpenSpaceModel;
        }
        if (!Utils::isUnset($request->docOpenDeliverModel)) {
            $body['docOpenDeliverModel'] = $request->docOpenDeliverModel;
        }
        if (!Utils::isUnset($request->imGroupOpenDeliverModel)) {
            $body['imGroupOpenDeliverModel'] = $request->imGroupOpenDeliverModel;
        }
        if (!Utils::isUnset($request->imGroupOpenSpaceModel)) {
            $body['imGroupOpenSpaceModel'] = $request->imGroupOpenSpaceModel;
        }
        if (!Utils::isUnset($request->imRobotOpenDeliverModel)) {
            $body['imRobotOpenDeliverModel'] = $request->imRobotOpenDeliverModel;
        }
        if (!Utils::isUnset($request->imRobotOpenSpaceModel)) {
            $body['imRobotOpenSpaceModel'] = $request->imRobotOpenSpaceModel;
        }
        if (!Utils::isUnset($request->openDynamicDataConfig)) {
            $body['openDynamicDataConfig'] = $request->openDynamicDataConfig;
        }
        if (!Utils::isUnset($request->openSpaceId)) {
            $body['openSpaceId'] = $request->openSpaceId;
        }
        if (!Utils::isUnset($request->outTrackId)) {
            $body['outTrackId'] = $request->outTrackId;
        }
        if (!Utils::isUnset($request->privateData)) {
            $body['privateData'] = $request->privateData;
        }
        if (!Utils::isUnset($request->topOpenDeliverModel)) {
            $body['topOpenDeliverModel'] = $request->topOpenDeliverModel;
        }
        if (!Utils::isUnset($request->topOpenSpaceModel)) {
            $body['topOpenSpaceModel'] = $request->topOpenSpaceModel;
        }
        if (!Utils::isUnset($request->userId)) {
            $body['userId'] = $request->userId;
        }
        if (!Utils::isUnset($request->userIdType)) {
            $body['userIdType'] = $request->userIdType;
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
            'action'      => 'CreateAndDeliverWithDelegate',
            'version'     => 'card_1.0',
            'protocol'    => 'HTTP',
            'pathname'    => '/v1.0/card/me/instances/createAndDeliver',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'none',
            'bodyType'    => 'json',
        ]);

        return CreateAndDeliverWithDelegateResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @param CreateAndDeliverWithDelegateRequest $request
     *
     * @return CreateAndDeliverWithDelegateResponse
     */
    public function createAndDeliverWithDelegate($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new CreateAndDeliverWithDelegateHeaders([]);

        return $this->createAndDeliverWithDelegateWithOptions($request, $headers, $runtime);
    }

    /**
     * @param CreateCardRequest $request
     * @param CreateCardHeaders $headers
     * @param RuntimeOptions    $runtime
     *
     * @return CreateCardResponse
     */
    public function createCardWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->callbackRouteKey)) {
            $body['callbackRouteKey'] = $request->callbackRouteKey;
        }
        if (!Utils::isUnset($request->callbackType)) {
            $body['callbackType'] = $request->callbackType;
        }
        if (!Utils::isUnset($request->cardData)) {
            $body['cardData'] = $request->cardData;
        }
        if (!Utils::isUnset($request->cardTemplateId)) {
            $body['cardTemplateId'] = $request->cardTemplateId;
        }
        if (!Utils::isUnset($request->coFeedOpenSpaceModel)) {
            $body['coFeedOpenSpaceModel'] = $request->coFeedOpenSpaceModel;
        }
        if (!Utils::isUnset($request->imGroupOpenSpaceModel)) {
            $body['imGroupOpenSpaceModel'] = $request->imGroupOpenSpaceModel;
        }
        if (!Utils::isUnset($request->imRobotOpenSpaceModel)) {
            $body['imRobotOpenSpaceModel'] = $request->imRobotOpenSpaceModel;
        }
        if (!Utils::isUnset($request->openDynamicDataConfig)) {
            $body['openDynamicDataConfig'] = $request->openDynamicDataConfig;
        }
        if (!Utils::isUnset($request->outTrackId)) {
            $body['outTrackId'] = $request->outTrackId;
        }
        if (!Utils::isUnset($request->privateData)) {
            $body['privateData'] = $request->privateData;
        }
        if (!Utils::isUnset($request->topOpenSpaceModel)) {
            $body['topOpenSpaceModel'] = $request->topOpenSpaceModel;
        }
        if (!Utils::isUnset($request->userId)) {
            $body['userId'] = $request->userId;
        }
        if (!Utils::isUnset($request->userIdType)) {
            $body['userIdType'] = $request->userIdType;
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
            'action'      => 'CreateCard',
            'version'     => 'card_1.0',
            'protocol'    => 'HTTP',
            'pathname'    => '/v1.0/card/instances',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'none',
            'bodyType'    => 'json',
        ]);

        return CreateCardResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @param CreateCardRequest $request
     *
     * @return CreateCardResponse
     */
    public function createCard($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new CreateCardHeaders([]);

        return $this->createCardWithOptions($request, $headers, $runtime);
    }

    /**
     * @param CreateCardWithDelegateRequest $request
     * @param CreateCardWithDelegateHeaders $headers
     * @param RuntimeOptions                $runtime
     *
     * @return CreateCardWithDelegateResponse
     */
    public function createCardWithDelegateWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->callbackRouteKey)) {
            $body['callbackRouteKey'] = $request->callbackRouteKey;
        }
        if (!Utils::isUnset($request->callbackType)) {
            $body['callbackType'] = $request->callbackType;
        }
        if (!Utils::isUnset($request->cardData)) {
            $body['cardData'] = $request->cardData;
        }
        if (!Utils::isUnset($request->cardTemplateId)) {
            $body['cardTemplateId'] = $request->cardTemplateId;
        }
        if (!Utils::isUnset($request->coFeedOpenSpaceModel)) {
            $body['coFeedOpenSpaceModel'] = $request->coFeedOpenSpaceModel;
        }
        if (!Utils::isUnset($request->imGroupOpenSpaceModel)) {
            $body['imGroupOpenSpaceModel'] = $request->imGroupOpenSpaceModel;
        }
        if (!Utils::isUnset($request->imRobotOpenSpaceModel)) {
            $body['imRobotOpenSpaceModel'] = $request->imRobotOpenSpaceModel;
        }
        if (!Utils::isUnset($request->openDynamicDataConfig)) {
            $body['openDynamicDataConfig'] = $request->openDynamicDataConfig;
        }
        if (!Utils::isUnset($request->outTrackId)) {
            $body['outTrackId'] = $request->outTrackId;
        }
        if (!Utils::isUnset($request->privateData)) {
            $body['privateData'] = $request->privateData;
        }
        if (!Utils::isUnset($request->topOpenSpaceModel)) {
            $body['topOpenSpaceModel'] = $request->topOpenSpaceModel;
        }
        if (!Utils::isUnset($request->userId)) {
            $body['userId'] = $request->userId;
        }
        if (!Utils::isUnset($request->userIdType)) {
            $body['userIdType'] = $request->userIdType;
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
            'action'      => 'CreateCardWithDelegate',
            'version'     => 'card_1.0',
            'protocol'    => 'HTTP',
            'pathname'    => '/v1.0/card/me/instances',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'none',
            'bodyType'    => 'json',
        ]);

        return CreateCardWithDelegateResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @param CreateCardWithDelegateRequest $request
     *
     * @return CreateCardWithDelegateResponse
     */
    public function createCardWithDelegate($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new CreateCardWithDelegateHeaders([]);

        return $this->createCardWithDelegateWithOptions($request, $headers, $runtime);
    }

    /**
     * @param DeliverCardRequest $request
     * @param DeliverCardHeaders $headers
     * @param RuntimeOptions     $runtime
     *
     * @return DeliverCardResponse
     */
    public function deliverCardWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->coFeedOpenDeliverModel)) {
            $body['coFeedOpenDeliverModel'] = $request->coFeedOpenDeliverModel;
        }
        if (!Utils::isUnset($request->docOpenDeliverModel)) {
            $body['docOpenDeliverModel'] = $request->docOpenDeliverModel;
        }
        if (!Utils::isUnset($request->imGroupOpenDeliverModel)) {
            $body['imGroupOpenDeliverModel'] = $request->imGroupOpenDeliverModel;
        }
        if (!Utils::isUnset($request->imRobotOpenDeliverModel)) {
            $body['imRobotOpenDeliverModel'] = $request->imRobotOpenDeliverModel;
        }
        if (!Utils::isUnset($request->openSpaceId)) {
            $body['openSpaceId'] = $request->openSpaceId;
        }
        if (!Utils::isUnset($request->outTrackId)) {
            $body['outTrackId'] = $request->outTrackId;
        }
        if (!Utils::isUnset($request->topOpenDeliverModel)) {
            $body['topOpenDeliverModel'] = $request->topOpenDeliverModel;
        }
        if (!Utils::isUnset($request->userIdType)) {
            $body['userIdType'] = $request->userIdType;
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
            'action'      => 'DeliverCard',
            'version'     => 'card_1.0',
            'protocol'    => 'HTTP',
            'pathname'    => '/v1.0/card/instances/deliver',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'none',
            'bodyType'    => 'json',
        ]);

        return DeliverCardResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @param DeliverCardRequest $request
     *
     * @return DeliverCardResponse
     */
    public function deliverCard($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new DeliverCardHeaders([]);

        return $this->deliverCardWithOptions($request, $headers, $runtime);
    }

    /**
     * @param DeliverCardWithDelegateRequest $request
     * @param DeliverCardWithDelegateHeaders $headers
     * @param RuntimeOptions                 $runtime
     *
     * @return DeliverCardWithDelegateResponse
     */
    public function deliverCardWithDelegateWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->coFeedOpenDeliverModel)) {
            $body['coFeedOpenDeliverModel'] = $request->coFeedOpenDeliverModel;
        }
        if (!Utils::isUnset($request->docOpenDeliverModel)) {
            $body['docOpenDeliverModel'] = $request->docOpenDeliverModel;
        }
        if (!Utils::isUnset($request->imGroupOpenDeliverModel)) {
            $body['imGroupOpenDeliverModel'] = $request->imGroupOpenDeliverModel;
        }
        if (!Utils::isUnset($request->imRobotOpenDeliverModel)) {
            $body['imRobotOpenDeliverModel'] = $request->imRobotOpenDeliverModel;
        }
        if (!Utils::isUnset($request->openSpaceId)) {
            $body['openSpaceId'] = $request->openSpaceId;
        }
        if (!Utils::isUnset($request->outTrackId)) {
            $body['outTrackId'] = $request->outTrackId;
        }
        if (!Utils::isUnset($request->topOpenDeliverModel)) {
            $body['topOpenDeliverModel'] = $request->topOpenDeliverModel;
        }
        if (!Utils::isUnset($request->userIdType)) {
            $body['userIdType'] = $request->userIdType;
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
            'action'      => 'DeliverCardWithDelegate',
            'version'     => 'card_1.0',
            'protocol'    => 'HTTP',
            'pathname'    => '/v1.0/card/me/instances/deliver',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'none',
            'bodyType'    => 'json',
        ]);

        return DeliverCardWithDelegateResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @param DeliverCardWithDelegateRequest $request
     *
     * @return DeliverCardWithDelegateResponse
     */
    public function deliverCardWithDelegate($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new DeliverCardWithDelegateHeaders([]);

        return $this->deliverCardWithDelegateWithOptions($request, $headers, $runtime);
    }

    /**
     * @param RegisterCallbackRequest $request
     * @param RegisterCallbackHeaders $headers
     * @param RuntimeOptions          $runtime
     *
     * @return RegisterCallbackResponse
     */
    public function registerCallbackWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->apiSecret)) {
            $body['apiSecret'] = $request->apiSecret;
        }
        if (!Utils::isUnset($request->callbackRouteKey)) {
            $body['callbackRouteKey'] = $request->callbackRouteKey;
        }
        if (!Utils::isUnset($request->callbackUrl)) {
            $body['callbackUrl'] = $request->callbackUrl;
        }
        if (!Utils::isUnset($request->forceUpdate)) {
            $body['forceUpdate'] = $request->forceUpdate;
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
            'action'      => 'RegisterCallback',
            'version'     => 'card_1.0',
            'protocol'    => 'HTTP',
            'pathname'    => '/v1.0/card/callbacks/register',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'none',
            'bodyType'    => 'json',
        ]);

        return RegisterCallbackResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @param RegisterCallbackRequest $request
     *
     * @return RegisterCallbackResponse
     */
    public function registerCallback($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new RegisterCallbackHeaders([]);

        return $this->registerCallbackWithOptions($request, $headers, $runtime);
    }

    /**
     * @param RegisterCallbackWithDelegateRequest $request
     * @param RegisterCallbackWithDelegateHeaders $headers
     * @param RuntimeOptions                      $runtime
     *
     * @return RegisterCallbackWithDelegateResponse
     */
    public function registerCallbackWithDelegateWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->apiSecret)) {
            $body['apiSecret'] = $request->apiSecret;
        }
        if (!Utils::isUnset($request->callbackRouteKey)) {
            $body['callbackRouteKey'] = $request->callbackRouteKey;
        }
        if (!Utils::isUnset($request->callbackUrl)) {
            $body['callbackUrl'] = $request->callbackUrl;
        }
        if (!Utils::isUnset($request->forceUpdate)) {
            $body['forceUpdate'] = $request->forceUpdate;
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
            'action'      => 'RegisterCallbackWithDelegate',
            'version'     => 'card_1.0',
            'protocol'    => 'HTTP',
            'pathname'    => '/v1.0/card/me/callbacks/register',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'none',
            'bodyType'    => 'json',
        ]);

        return RegisterCallbackWithDelegateResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @param RegisterCallbackWithDelegateRequest $request
     *
     * @return RegisterCallbackWithDelegateResponse
     */
    public function registerCallbackWithDelegate($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new RegisterCallbackWithDelegateHeaders([]);

        return $this->registerCallbackWithDelegateWithOptions($request, $headers, $runtime);
    }

    /**
     * @param StreamingUpdateRequest $request
     * @param StreamingUpdateHeaders $headers
     * @param RuntimeOptions         $runtime
     *
     * @return StreamingUpdateResponse
     */
    public function streamingUpdateWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->content)) {
            $body['content'] = $request->content;
        }
        if (!Utils::isUnset($request->guid)) {
            $body['guid'] = $request->guid;
        }
        if (!Utils::isUnset($request->isError)) {
            $body['isError'] = $request->isError;
        }
        if (!Utils::isUnset($request->isFinalize)) {
            $body['isFinalize'] = $request->isFinalize;
        }
        if (!Utils::isUnset($request->isFull)) {
            $body['isFull'] = $request->isFull;
        }
        if (!Utils::isUnset($request->key)) {
            $body['key'] = $request->key;
        }
        if (!Utils::isUnset($request->outTrackId)) {
            $body['outTrackId'] = $request->outTrackId;
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
            'action'      => 'StreamingUpdate',
            'version'     => 'card_1.0',
            'protocol'    => 'HTTP',
            'pathname'    => '/v1.0/card/streaming',
            'method'      => 'PUT',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'none',
            'bodyType'    => 'json',
        ]);

        return StreamingUpdateResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @param StreamingUpdateRequest $request
     *
     * @return StreamingUpdateResponse
     */
    public function streamingUpdate($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new StreamingUpdateHeaders([]);

        return $this->streamingUpdateWithOptions($request, $headers, $runtime);
    }

    /**
     * @param UpdateCardRequest $request
     * @param UpdateCardHeaders $headers
     * @param RuntimeOptions    $runtime
     *
     * @return UpdateCardResponse
     */
    public function updateCardWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->cardData)) {
            $body['cardData'] = $request->cardData;
        }
        if (!Utils::isUnset($request->cardUpdateOptions)) {
            $body['cardUpdateOptions'] = $request->cardUpdateOptions;
        }
        if (!Utils::isUnset($request->outTrackId)) {
            $body['outTrackId'] = $request->outTrackId;
        }
        if (!Utils::isUnset($request->privateData)) {
            $body['privateData'] = $request->privateData;
        }
        if (!Utils::isUnset($request->userIdType)) {
            $body['userIdType'] = $request->userIdType;
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
            'action'      => 'UpdateCard',
            'version'     => 'card_1.0',
            'protocol'    => 'HTTP',
            'pathname'    => '/v1.0/card/instances',
            'method'      => 'PUT',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'none',
            'bodyType'    => 'json',
        ]);

        return UpdateCardResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @param UpdateCardRequest $request
     *
     * @return UpdateCardResponse
     */
    public function updateCard($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new UpdateCardHeaders([]);

        return $this->updateCardWithOptions($request, $headers, $runtime);
    }

    /**
     * @param UpdateCardWithDelegateRequest $request
     * @param UpdateCardWithDelegateHeaders $headers
     * @param RuntimeOptions                $runtime
     *
     * @return UpdateCardWithDelegateResponse
     */
    public function updateCardWithDelegateWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->cardData)) {
            $body['cardData'] = $request->cardData;
        }
        if (!Utils::isUnset($request->cardUpdateOptions)) {
            $body['cardUpdateOptions'] = $request->cardUpdateOptions;
        }
        if (!Utils::isUnset($request->outTrackId)) {
            $body['outTrackId'] = $request->outTrackId;
        }
        if (!Utils::isUnset($request->privateData)) {
            $body['privateData'] = $request->privateData;
        }
        if (!Utils::isUnset($request->userIdType)) {
            $body['userIdType'] = $request->userIdType;
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
            'action'      => 'UpdateCardWithDelegate',
            'version'     => 'card_1.0',
            'protocol'    => 'HTTP',
            'pathname'    => '/v1.0/card/me/instances',
            'method'      => 'PUT',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'none',
            'bodyType'    => 'json',
        ]);

        return UpdateCardWithDelegateResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @param UpdateCardWithDelegateRequest $request
     *
     * @return UpdateCardWithDelegateResponse
     */
    public function updateCardWithDelegate($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new UpdateCardWithDelegateHeaders([]);

        return $this->updateCardWithDelegateWithOptions($request, $headers, $runtime);
    }
}
