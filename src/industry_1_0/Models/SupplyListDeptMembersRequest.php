<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dingtalk\Vindustry_1_0\Models;

use AlibabaCloud\Tea\Model;

class SupplyListDeptMembersRequest extends Model
{
    /**
     * @description 页码
     *
     * @var int
     */
    public $pageNumber;

    /**
     * @description 单页的条目数
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description 供应链部门id
     *
     * @var int
     */
    public $supplyDeptId;
    protected $_name = [
        'pageNumber'   => 'pageNumber',
        'pageSize'     => 'pageSize',
        'supplyDeptId' => 'supplyDeptId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->pageNumber) {
            $res['pageNumber'] = $this->pageNumber;
        }
        if (null !== $this->pageSize) {
            $res['pageSize'] = $this->pageSize;
        }
        if (null !== $this->supplyDeptId) {
            $res['supplyDeptId'] = $this->supplyDeptId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SupplyListDeptMembersRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['pageNumber'])) {
            $model->pageNumber = $map['pageNumber'];
        }
        if (isset($map['pageSize'])) {
            $model->pageSize = $map['pageSize'];
        }
        if (isset($map['supplyDeptId'])) {
            $model->supplyDeptId = $map['supplyDeptId'];
        }

        return $model;
    }
}
