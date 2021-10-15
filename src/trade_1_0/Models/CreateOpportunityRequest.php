<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dingtalk\Vtrade_1_0\Models;

use AlibabaCloud\Tea\Model;

class CreateOpportunityRequest extends Model
{
    /**
     * @description 企业CorpId
     *
     * @var string
     */
    public $corpId;

    /**
     * @description 归属人电话号码
     *
     * @var string
     */
    public $belongToPhoneNum;

    /**
     * @description 联系人电话
     *
     * @var string
     */
    public $contactPhoneNum;

    /**
     * @description 部门Id
     *
     * @var int
     */
    public $deptId;

    /**
     * @description 商品码
     *
     * @var string
     */
    public $marketCode;

    /**
     * @var int
     */
    public $dingIsvOrgId;
    protected $_name = [
        'corpId'           => 'corpId',
        'belongToPhoneNum' => 'belongToPhoneNum',
        'contactPhoneNum'  => 'contactPhoneNum',
        'deptId'           => 'deptId',
        'marketCode'       => 'marketCode',
        'dingIsvOrgId'     => 'dingIsvOrgId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->corpId) {
            $res['corpId'] = $this->corpId;
        }
        if (null !== $this->belongToPhoneNum) {
            $res['belongToPhoneNum'] = $this->belongToPhoneNum;
        }
        if (null !== $this->contactPhoneNum) {
            $res['contactPhoneNum'] = $this->contactPhoneNum;
        }
        if (null !== $this->deptId) {
            $res['deptId'] = $this->deptId;
        }
        if (null !== $this->marketCode) {
            $res['marketCode'] = $this->marketCode;
        }
        if (null !== $this->dingIsvOrgId) {
            $res['dingIsvOrgId'] = $this->dingIsvOrgId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateOpportunityRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['corpId'])) {
            $model->corpId = $map['corpId'];
        }
        if (isset($map['belongToPhoneNum'])) {
            $model->belongToPhoneNum = $map['belongToPhoneNum'];
        }
        if (isset($map['contactPhoneNum'])) {
            $model->contactPhoneNum = $map['contactPhoneNum'];
        }
        if (isset($map['deptId'])) {
            $model->deptId = $map['deptId'];
        }
        if (isset($map['marketCode'])) {
            $model->marketCode = $map['marketCode'];
        }
        if (isset($map['dingIsvOrgId'])) {
            $model->dingIsvOrgId = $map['dingIsvOrgId'];
        }

        return $model;
    }
}