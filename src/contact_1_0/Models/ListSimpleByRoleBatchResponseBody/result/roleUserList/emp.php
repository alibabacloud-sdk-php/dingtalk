<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dingtalk\Vcontact_1_0\Models\ListSimpleByRoleBatchResponseBody\result\roleUserList;

use AlibabaCloud\SDK\Dingtalk\Vcontact_1_0\Models\ListSimpleByRoleBatchResponseBody\result\roleUserList\emp\manageScopes;
use AlibabaCloud\Tea\Model;

class emp extends Model
{
    /**
     * @var manageScopes[]
     */
    public $manageScopes;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $userId;
    protected $_name = [
        'manageScopes' => 'manageScopes',
        'name' => 'name',
        'userId' => 'userId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->manageScopes) {
            $res['manageScopes'] = [];
            if (null !== $this->manageScopes && \is_array($this->manageScopes)) {
                $n = 0;
                foreach ($this->manageScopes as $item) {
                    $res['manageScopes'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->name) {
            $res['name'] = $this->name;
        }
        if (null !== $this->userId) {
            $res['userId'] = $this->userId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return emp
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['manageScopes'])) {
            if (!empty($map['manageScopes'])) {
                $model->manageScopes = [];
                $n = 0;
                foreach ($map['manageScopes'] as $item) {
                    $model->manageScopes[$n++] = null !== $item ? manageScopes::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['name'])) {
            $model->name = $map['name'];
        }
        if (isset($map['userId'])) {
            $model->userId = $map['userId'];
        }

        return $model;
    }
}
