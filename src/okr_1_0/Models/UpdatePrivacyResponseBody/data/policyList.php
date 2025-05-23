<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dingtalk\Vokr_1_0\Models\UpdatePrivacyResponseBody\data;

use AlibabaCloud\SDK\Dingtalk\Vokr_1_0\Models\UpdatePrivacyResponseBody\data\policyList\memberList;
use AlibabaCloud\Tea\Model;

class policyList extends Model
{
    /**
     * @description This parameter is required.
     *
     * @var memberList[]
     */
    public $memberList;

    /**
     * @description This parameter is required.
     *
     * @var string
     */
    public $name;

    /**
     * @description This parameter is required.
     *
     * @var int
     */
    public $type;
    protected $_name = [
        'memberList' => 'memberList',
        'name' => 'name',
        'type' => 'type',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->memberList) {
            $res['memberList'] = [];
            if (null !== $this->memberList && \is_array($this->memberList)) {
                $n = 0;
                foreach ($this->memberList as $item) {
                    $res['memberList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->name) {
            $res['name'] = $this->name;
        }
        if (null !== $this->type) {
            $res['type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return policyList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['memberList'])) {
            if (!empty($map['memberList'])) {
                $model->memberList = [];
                $n = 0;
                foreach ($map['memberList'] as $item) {
                    $model->memberList[$n++] = null !== $item ? memberList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['name'])) {
            $model->name = $map['name'];
        }
        if (isset($map['type'])) {
            $model->type = $map['type'];
        }

        return $model;
    }
}
