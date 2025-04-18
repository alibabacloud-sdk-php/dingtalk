<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dingtalk\Vim_1_0\Models;

use AlibabaCloud\SDK\Dingtalk\Vim_1_0\Models\SendInteractiveCardRequest\cardData;
use AlibabaCloud\SDK\Dingtalk\Vim_1_0\Models\SendInteractiveCardRequest\cardOptions;
use AlibabaCloud\Tea\Model;

class SendInteractiveCardRequest extends Model
{
    /**
     * @var string[]
     */
    public $atOpenIds;

    /**
     * @var string
     */
    public $callbackRouteKey;

    /**
     * @description This parameter is required.
     *
     * @var cardData
     */
    public $cardData;

    /**
     * @var cardOptions
     */
    public $cardOptions;

    /**
     * @description This parameter is required.
     *
     * @var string
     */
    public $cardTemplateId;

    /**
     * @var string
     */
    public $chatBotId;

    /**
     * @description This parameter is required.
     *
     * @var int
     */
    public $conversationType;

    /**
     * @var string
     */
    public $digitalWorkerCode;

    /**
     * @var string
     */
    public $openConversationId;

    /**
     * @description This parameter is required.
     *
     * @var string
     */
    public $outTrackId;

    /**
     * @var PrivateDataValue[]
     */
    public $privateData;

    /**
     * @var bool
     */
    public $pullStrategy;

    /**
     * @var string[]
     */
    public $receiverUserIdList;

    /**
     * @var string
     */
    public $robotCode;

    /**
     * @var int
     */
    public $userIdType;
    protected $_name = [
        'atOpenIds' => 'atOpenIds',
        'callbackRouteKey' => 'callbackRouteKey',
        'cardData' => 'cardData',
        'cardOptions' => 'cardOptions',
        'cardTemplateId' => 'cardTemplateId',
        'chatBotId' => 'chatBotId',
        'conversationType' => 'conversationType',
        'digitalWorkerCode' => 'digitalWorkerCode',
        'openConversationId' => 'openConversationId',
        'outTrackId' => 'outTrackId',
        'privateData' => 'privateData',
        'pullStrategy' => 'pullStrategy',
        'receiverUserIdList' => 'receiverUserIdList',
        'robotCode' => 'robotCode',
        'userIdType' => 'userIdType',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->atOpenIds) {
            $res['atOpenIds'] = $this->atOpenIds;
        }
        if (null !== $this->callbackRouteKey) {
            $res['callbackRouteKey'] = $this->callbackRouteKey;
        }
        if (null !== $this->cardData) {
            $res['cardData'] = null !== $this->cardData ? $this->cardData->toMap() : null;
        }
        if (null !== $this->cardOptions) {
            $res['cardOptions'] = null !== $this->cardOptions ? $this->cardOptions->toMap() : null;
        }
        if (null !== $this->cardTemplateId) {
            $res['cardTemplateId'] = $this->cardTemplateId;
        }
        if (null !== $this->chatBotId) {
            $res['chatBotId'] = $this->chatBotId;
        }
        if (null !== $this->conversationType) {
            $res['conversationType'] = $this->conversationType;
        }
        if (null !== $this->digitalWorkerCode) {
            $res['digitalWorkerCode'] = $this->digitalWorkerCode;
        }
        if (null !== $this->openConversationId) {
            $res['openConversationId'] = $this->openConversationId;
        }
        if (null !== $this->outTrackId) {
            $res['outTrackId'] = $this->outTrackId;
        }
        if (null !== $this->privateData) {
            $res['privateData'] = [];
            if (null !== $this->privateData && \is_array($this->privateData)) {
                foreach ($this->privateData as $key => $val) {
                    $res['privateData'][$key] = null !== $val ? $val->toMap() : $val;
                }
            }
        }
        if (null !== $this->pullStrategy) {
            $res['pullStrategy'] = $this->pullStrategy;
        }
        if (null !== $this->receiverUserIdList) {
            $res['receiverUserIdList'] = $this->receiverUserIdList;
        }
        if (null !== $this->robotCode) {
            $res['robotCode'] = $this->robotCode;
        }
        if (null !== $this->userIdType) {
            $res['userIdType'] = $this->userIdType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SendInteractiveCardRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['atOpenIds'])) {
            $model->atOpenIds = $map['atOpenIds'];
        }
        if (isset($map['callbackRouteKey'])) {
            $model->callbackRouteKey = $map['callbackRouteKey'];
        }
        if (isset($map['cardData'])) {
            $model->cardData = cardData::fromMap($map['cardData']);
        }
        if (isset($map['cardOptions'])) {
            $model->cardOptions = cardOptions::fromMap($map['cardOptions']);
        }
        if (isset($map['cardTemplateId'])) {
            $model->cardTemplateId = $map['cardTemplateId'];
        }
        if (isset($map['chatBotId'])) {
            $model->chatBotId = $map['chatBotId'];
        }
        if (isset($map['conversationType'])) {
            $model->conversationType = $map['conversationType'];
        }
        if (isset($map['digitalWorkerCode'])) {
            $model->digitalWorkerCode = $map['digitalWorkerCode'];
        }
        if (isset($map['openConversationId'])) {
            $model->openConversationId = $map['openConversationId'];
        }
        if (isset($map['outTrackId'])) {
            $model->outTrackId = $map['outTrackId'];
        }
        if (isset($map['privateData'])) {
            $model->privateData = $map['privateData'];
        }
        if (isset($map['pullStrategy'])) {
            $model->pullStrategy = $map['pullStrategy'];
        }
        if (isset($map['receiverUserIdList'])) {
            if (!empty($map['receiverUserIdList'])) {
                $model->receiverUserIdList = $map['receiverUserIdList'];
            }
        }
        if (isset($map['robotCode'])) {
            $model->robotCode = $map['robotCode'];
        }
        if (isset($map['userIdType'])) {
            $model->userIdType = $map['userIdType'];
        }

        return $model;
    }
}
