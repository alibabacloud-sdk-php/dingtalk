<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dingtalk\Vcontact_1_0\Models\ListSimpleByRoleBatchResponseBody;

use AlibabaCloud\SDK\Dingtalk\Vcontact_1_0\Models\ListSimpleByRoleBatchResponseBody\result\roleUserList;
use AlibabaCloud\Tea\Model;

class result extends Model
{
    /**
     * @var bool
     */
    public $hasMore;

    /**
     * @var roleUserList[]
     */
    public $roleUserList;
    protected $_name = [
        'hasMore' => 'hasMore',
        'roleUserList' => 'roleUserList',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->hasMore) {
            $res['hasMore'] = $this->hasMore;
        }
        if (null !== $this->roleUserList) {
            $res['roleUserList'] = [];
            if (null !== $this->roleUserList && \is_array($this->roleUserList)) {
                $n = 0;
                foreach ($this->roleUserList as $item) {
                    $res['roleUserList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return result
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['hasMore'])) {
            $model->hasMore = $map['hasMore'];
        }
        if (isset($map['roleUserList'])) {
            if (!empty($map['roleUserList'])) {
                $model->roleUserList = [];
                $n = 0;
                foreach ($map['roleUserList'] as $item) {
                    $model->roleUserList[$n++] = null !== $item ? roleUserList::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
