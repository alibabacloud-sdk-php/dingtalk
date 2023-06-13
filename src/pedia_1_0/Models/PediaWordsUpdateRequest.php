<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dingtalk\Vpedia_1_0\Models;

use AlibabaCloud\SDK\Dingtalk\Vpedia_1_0\Models\PediaWordsUpdateRequest\appLink;
use AlibabaCloud\SDK\Dingtalk\Vpedia_1_0\Models\PediaWordsUpdateRequest\contactList;
use AlibabaCloud\SDK\Dingtalk\Vpedia_1_0\Models\PediaWordsUpdateRequest\picList;
use AlibabaCloud\SDK\Dingtalk\Vpedia_1_0\Models\PediaWordsUpdateRequest\relatedDoc;
use AlibabaCloud\SDK\Dingtalk\Vpedia_1_0\Models\PediaWordsUpdateRequest\relatedLink;
use AlibabaCloud\Tea\Model;

class PediaWordsUpdateRequest extends Model
{
    /**
     * @var appLink[]
     */
    public $appLink;

    /**
     * @var contactList[]
     */
    public $contactList;

    /**
     * @var string[]
     */
    public $highLightWordAlias;

    /**
     * @var picList[]
     */
    public $picList;

    /**
     * @var relatedDoc[]
     */
    public $relatedDoc;

    /**
     * @var relatedLink[]
     */
    public $relatedLink;

    /**
     * @example 312123213
     *
     * @var string
     */
    public $userId;

    /**
     * @example 2131321
     *
     * @var int
     */
    public $uuid;

    /**
     * @var string[]
     */
    public $wordAlias;

    /**
     * @example 词条名称
     *
     * @var string
     */
    public $wordName;

    /**
     * @example 释义
     *
     * @var string
     */
    public $wordParaphrase;
    protected $_name = [
        'appLink'            => 'appLink',
        'contactList'        => 'contactList',
        'highLightWordAlias' => 'highLightWordAlias',
        'picList'            => 'picList',
        'relatedDoc'         => 'relatedDoc',
        'relatedLink'        => 'relatedLink',
        'userId'             => 'userId',
        'uuid'               => 'uuid',
        'wordAlias'          => 'wordAlias',
        'wordName'           => 'wordName',
        'wordParaphrase'     => 'wordParaphrase',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->appLink) {
            $res['appLink'] = [];
            if (null !== $this->appLink && \is_array($this->appLink)) {
                $n = 0;
                foreach ($this->appLink as $item) {
                    $res['appLink'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->contactList) {
            $res['contactList'] = [];
            if (null !== $this->contactList && \is_array($this->contactList)) {
                $n = 0;
                foreach ($this->contactList as $item) {
                    $res['contactList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->highLightWordAlias) {
            $res['highLightWordAlias'] = $this->highLightWordAlias;
        }
        if (null !== $this->picList) {
            $res['picList'] = [];
            if (null !== $this->picList && \is_array($this->picList)) {
                $n = 0;
                foreach ($this->picList as $item) {
                    $res['picList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->relatedDoc) {
            $res['relatedDoc'] = [];
            if (null !== $this->relatedDoc && \is_array($this->relatedDoc)) {
                $n = 0;
                foreach ($this->relatedDoc as $item) {
                    $res['relatedDoc'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->relatedLink) {
            $res['relatedLink'] = [];
            if (null !== $this->relatedLink && \is_array($this->relatedLink)) {
                $n = 0;
                foreach ($this->relatedLink as $item) {
                    $res['relatedLink'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->userId) {
            $res['userId'] = $this->userId;
        }
        if (null !== $this->uuid) {
            $res['uuid'] = $this->uuid;
        }
        if (null !== $this->wordAlias) {
            $res['wordAlias'] = $this->wordAlias;
        }
        if (null !== $this->wordName) {
            $res['wordName'] = $this->wordName;
        }
        if (null !== $this->wordParaphrase) {
            $res['wordParaphrase'] = $this->wordParaphrase;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return PediaWordsUpdateRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['appLink'])) {
            if (!empty($map['appLink'])) {
                $model->appLink = [];
                $n              = 0;
                foreach ($map['appLink'] as $item) {
                    $model->appLink[$n++] = null !== $item ? appLink::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['contactList'])) {
            if (!empty($map['contactList'])) {
                $model->contactList = [];
                $n                  = 0;
                foreach ($map['contactList'] as $item) {
                    $model->contactList[$n++] = null !== $item ? contactList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['highLightWordAlias'])) {
            if (!empty($map['highLightWordAlias'])) {
                $model->highLightWordAlias = $map['highLightWordAlias'];
            }
        }
        if (isset($map['picList'])) {
            if (!empty($map['picList'])) {
                $model->picList = [];
                $n              = 0;
                foreach ($map['picList'] as $item) {
                    $model->picList[$n++] = null !== $item ? picList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['relatedDoc'])) {
            if (!empty($map['relatedDoc'])) {
                $model->relatedDoc = [];
                $n                 = 0;
                foreach ($map['relatedDoc'] as $item) {
                    $model->relatedDoc[$n++] = null !== $item ? relatedDoc::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['relatedLink'])) {
            if (!empty($map['relatedLink'])) {
                $model->relatedLink = [];
                $n                  = 0;
                foreach ($map['relatedLink'] as $item) {
                    $model->relatedLink[$n++] = null !== $item ? relatedLink::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['userId'])) {
            $model->userId = $map['userId'];
        }
        if (isset($map['uuid'])) {
            $model->uuid = $map['uuid'];
        }
        if (isset($map['wordAlias'])) {
            if (!empty($map['wordAlias'])) {
                $model->wordAlias = $map['wordAlias'];
            }
        }
        if (isset($map['wordName'])) {
            $model->wordName = $map['wordName'];
        }
        if (isset($map['wordParaphrase'])) {
            $model->wordParaphrase = $map['wordParaphrase'];
        }

        return $model;
    }
}