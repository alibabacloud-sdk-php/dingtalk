<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dingtalk\Vproject_1_0\Models\UpdateOrganizationTaskContentResponseBody;

use AlibabaCloud\Tea\Model;

class result extends Model
{
    /**
     * @example 后天交周报
     *
     * @var string
     */
    public $content;

    /**
     * @example 2022-06-08T07:32:48.958Z
     *
     * @var string
     */
    public $updated;
    protected $_name = [
        'content' => 'content',
        'updated' => 'updated',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->content) {
            $res['content'] = $this->content;
        }
        if (null !== $this->updated) {
            $res['updated'] = $this->updated;
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
        if (isset($map['content'])) {
            $model->content = $map['content'];
        }
        if (isset($map['updated'])) {
            $model->updated = $map['updated'];
        }

        return $model;
    }
}
