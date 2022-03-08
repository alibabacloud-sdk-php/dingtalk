<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dingtalk\Vconnector_1_0\Models\UpdateTriggerRequest;

use AlibabaCloud\Tea\Model;

class triggerInfo extends Model
{
    /**
     * @description 触发事件描述。
     *
     * @var string
     */
    public $description;

    /**
     * @description 连接平台连接器唯一标识。
     *
     * @var string
     */
    public $dingConnectorId;

    /**
     * @description 连接平台触发事件唯一标识。
     *
     * @var string
     */
    public $dingTriggerId;

    /**
     * @description 入参属性描述。
     *
     * @var string
     */
    public $inputSchema;

    /**
     * @description 服务商的连接器唯一标识。
     *
     * @var string
     */
    public $integratorConnectorId;

    /**
     * @description 服务商的触发事件唯一标识。
     *
     * @var string
     */
    public $integratorTriggerId;

    /**
     * @description 触发事件名称。
     *
     * @var string
     */
    public $name;
    protected $_name = [
        'description'           => 'description',
        'dingConnectorId'       => 'dingConnectorId',
        'dingTriggerId'         => 'dingTriggerId',
        'inputSchema'           => 'inputSchema',
        'integratorConnectorId' => 'integratorConnectorId',
        'integratorTriggerId'   => 'integratorTriggerId',
        'name'                  => 'name',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->description) {
            $res['description'] = $this->description;
        }
        if (null !== $this->dingConnectorId) {
            $res['dingConnectorId'] = $this->dingConnectorId;
        }
        if (null !== $this->dingTriggerId) {
            $res['dingTriggerId'] = $this->dingTriggerId;
        }
        if (null !== $this->inputSchema) {
            $res['inputSchema'] = $this->inputSchema;
        }
        if (null !== $this->integratorConnectorId) {
            $res['integratorConnectorId'] = $this->integratorConnectorId;
        }
        if (null !== $this->integratorTriggerId) {
            $res['integratorTriggerId'] = $this->integratorTriggerId;
        }
        if (null !== $this->name) {
            $res['name'] = $this->name;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return triggerInfo
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['description'])) {
            $model->description = $map['description'];
        }
        if (isset($map['dingConnectorId'])) {
            $model->dingConnectorId = $map['dingConnectorId'];
        }
        if (isset($map['dingTriggerId'])) {
            $model->dingTriggerId = $map['dingTriggerId'];
        }
        if (isset($map['inputSchema'])) {
            $model->inputSchema = $map['inputSchema'];
        }
        if (isset($map['integratorConnectorId'])) {
            $model->integratorConnectorId = $map['integratorConnectorId'];
        }
        if (isset($map['integratorTriggerId'])) {
            $model->integratorTriggerId = $map['integratorTriggerId'];
        }
        if (isset($map['name'])) {
            $model->name = $map['name'];
        }

        return $model;
    }
}
