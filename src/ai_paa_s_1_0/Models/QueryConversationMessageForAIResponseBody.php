<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dingtalk\Vai_paa_s_1_0\Models;

use AlibabaCloud\SDK\Dingtalk\Vai_paa_s_1_0\Models\QueryConversationMessageForAIResponseBody\messages;
use AlibabaCloud\Tea\Model;

class QueryConversationMessageForAIResponseBody extends Model
{
    /**
     * @var messages[]
     */
    public $messages;
    protected $_name = [
        'messages' => 'messages',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->messages) {
            $res['messages'] = [];
            if (null !== $this->messages && \is_array($this->messages)) {
                $n = 0;
                foreach ($this->messages as $item) {
                    $res['messages'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return QueryConversationMessageForAIResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['messages'])) {
            if (!empty($map['messages'])) {
                $model->messages = [];
                $n = 0;
                foreach ($map['messages'] as $item) {
                    $model->messages[$n++] = null !== $item ? messages::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
