<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dingtalk\Vbizfinance_1_0\Models;

use AlibabaCloud\Tea\Model;

class GetReceiptResponseBody extends Model
{
    /**
     * @description 数据模型id
     *
     * @var string
     */
    public $modelId;

    /**
     * @description 数据来源：审批(approval)，开放接口(openapi)
     *
     * @var string
     */
    public $source;

    /**
     * @description 数据来源于开放时，对应的微应用id
     *
     * @var string
     */
    public $appId;

    /**
     * @description 单据数据体json
     *
     * @var string
     */
    public $data;
    protected $_name = [
        'modelId' => 'modelId',
        'source'  => 'source',
        'appId'   => 'appId',
        'data'    => 'data',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->modelId) {
            $res['modelId'] = $this->modelId;
        }
        if (null !== $this->source) {
            $res['source'] = $this->source;
        }
        if (null !== $this->appId) {
            $res['appId'] = $this->appId;
        }
        if (null !== $this->data) {
            $res['data'] = $this->data;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetReceiptResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['modelId'])) {
            $model->modelId = $map['modelId'];
        }
        if (isset($map['source'])) {
            $model->source = $map['source'];
        }
        if (isset($map['appId'])) {
            $model->appId = $map['appId'];
        }
        if (isset($map['data'])) {
            $model->data = $map['data'];
        }

        return $model;
    }
}