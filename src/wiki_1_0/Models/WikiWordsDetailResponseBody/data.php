<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dingtalk\Vwiki_1_0\Models\WikiWordsDetailResponseBody;

use AlibabaCloud\SDK\Dingtalk\Vwiki_1_0\Models\WikiWordsDetailResponseBody\data\appLink;
use AlibabaCloud\SDK\Dingtalk\Vwiki_1_0\Models\WikiWordsDetailResponseBody\data\relatedDoc;
use AlibabaCloud\SDK\Dingtalk\Vwiki_1_0\Models\WikiWordsDetailResponseBody\data\relatedLink;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description This parameter is required.
     *
     * @var appLink[]
     */
    public $appLink;

    /**
     * @description This parameter is required.
     *
     * @var string
     */
    public $approveName;

    /**
     * @description This parameter is required.
     *
     * @var string[]
     */
    public $contacts;

    /**
     * @description This parameter is required.
     *
     * @var string
     */
    public $creatorName;

    /**
     * @description This parameter is required.
     *
     * @var int
     */
    public $gmtCreate;

    /**
     * @description This parameter is required.
     *
     * @var int
     */
    public $gmtModify;

    /**
     * @description This parameter is required.
     *
     * @var string[]
     */
    public $highLightWordAlias;

    /**
     * @description This parameter is required.
     *
     * @var bool
     */
    public $imHighLight;

    /**
     * @description This parameter is required.
     *
     * @var string
     */
    public $orgName;

    /**
     * @description This parameter is required.
     *
     * @var relatedDoc[]
     */
    public $relatedDoc;

    /**
     * @description This parameter is required.
     *
     * @var relatedLink[]
     */
    public $relatedLink;

    /**
     * @description This parameter is required.
     *
     * @var bool
     */
    public $simHighLight;

    /**
     * @description This parameter is required.
     *
     * @var string
     */
    public $simpleWordParaphrase;

    /**
     * @description This parameter is required.
     *
     * @var string[]
     */
    public $tagsList;

    /**
     * @description This parameter is required.
     *
     * @var string
     */
    public $updaterName;

    /**
     * @description This parameter is required.
     *
     * @var int
     */
    public $uuid;

    /**
     * @description This parameter is required.
     *
     * @var string[]
     */
    public $wordAlias;

    /**
     * @description This parameter is required.
     *
     * @var string
     */
    public $wordFullName;

    /**
     * @description This parameter is required.
     *
     * @var string
     */
    public $wordName;

    /**
     * @description This parameter is required.
     *
     * @var string
     */
    public $wordParaphrase;
    protected $_name = [
        'appLink' => 'appLink',
        'approveName' => 'approveName',
        'contacts' => 'contacts',
        'creatorName' => 'creatorName',
        'gmtCreate' => 'gmtCreate',
        'gmtModify' => 'gmtModify',
        'highLightWordAlias' => 'highLightWordAlias',
        'imHighLight' => 'imHighLight',
        'orgName' => 'orgName',
        'relatedDoc' => 'relatedDoc',
        'relatedLink' => 'relatedLink',
        'simHighLight' => 'simHighLight',
        'simpleWordParaphrase' => 'simpleWordParaphrase',
        'tagsList' => 'tagsList',
        'updaterName' => 'updaterName',
        'uuid' => 'uuid',
        'wordAlias' => 'wordAlias',
        'wordFullName' => 'wordFullName',
        'wordName' => 'wordName',
        'wordParaphrase' => 'wordParaphrase',
    ];

    public function validate() {}

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
        if (null !== $this->approveName) {
            $res['approveName'] = $this->approveName;
        }
        if (null !== $this->contacts) {
            $res['contacts'] = $this->contacts;
        }
        if (null !== $this->creatorName) {
            $res['creatorName'] = $this->creatorName;
        }
        if (null !== $this->gmtCreate) {
            $res['gmtCreate'] = $this->gmtCreate;
        }
        if (null !== $this->gmtModify) {
            $res['gmtModify'] = $this->gmtModify;
        }
        if (null !== $this->highLightWordAlias) {
            $res['highLightWordAlias'] = $this->highLightWordAlias;
        }
        if (null !== $this->imHighLight) {
            $res['imHighLight'] = $this->imHighLight;
        }
        if (null !== $this->orgName) {
            $res['orgName'] = $this->orgName;
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
        if (null !== $this->simHighLight) {
            $res['simHighLight'] = $this->simHighLight;
        }
        if (null !== $this->simpleWordParaphrase) {
            $res['simpleWordParaphrase'] = $this->simpleWordParaphrase;
        }
        if (null !== $this->tagsList) {
            $res['tagsList'] = $this->tagsList;
        }
        if (null !== $this->updaterName) {
            $res['updaterName'] = $this->updaterName;
        }
        if (null !== $this->uuid) {
            $res['uuid'] = $this->uuid;
        }
        if (null !== $this->wordAlias) {
            $res['wordAlias'] = $this->wordAlias;
        }
        if (null !== $this->wordFullName) {
            $res['wordFullName'] = $this->wordFullName;
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
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['appLink'])) {
            if (!empty($map['appLink'])) {
                $model->appLink = [];
                $n = 0;
                foreach ($map['appLink'] as $item) {
                    $model->appLink[$n++] = null !== $item ? appLink::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['approveName'])) {
            $model->approveName = $map['approveName'];
        }
        if (isset($map['contacts'])) {
            if (!empty($map['contacts'])) {
                $model->contacts = $map['contacts'];
            }
        }
        if (isset($map['creatorName'])) {
            $model->creatorName = $map['creatorName'];
        }
        if (isset($map['gmtCreate'])) {
            $model->gmtCreate = $map['gmtCreate'];
        }
        if (isset($map['gmtModify'])) {
            $model->gmtModify = $map['gmtModify'];
        }
        if (isset($map['highLightWordAlias'])) {
            if (!empty($map['highLightWordAlias'])) {
                $model->highLightWordAlias = $map['highLightWordAlias'];
            }
        }
        if (isset($map['imHighLight'])) {
            $model->imHighLight = $map['imHighLight'];
        }
        if (isset($map['orgName'])) {
            $model->orgName = $map['orgName'];
        }
        if (isset($map['relatedDoc'])) {
            if (!empty($map['relatedDoc'])) {
                $model->relatedDoc = [];
                $n = 0;
                foreach ($map['relatedDoc'] as $item) {
                    $model->relatedDoc[$n++] = null !== $item ? relatedDoc::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['relatedLink'])) {
            if (!empty($map['relatedLink'])) {
                $model->relatedLink = [];
                $n = 0;
                foreach ($map['relatedLink'] as $item) {
                    $model->relatedLink[$n++] = null !== $item ? relatedLink::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['simHighLight'])) {
            $model->simHighLight = $map['simHighLight'];
        }
        if (isset($map['simpleWordParaphrase'])) {
            $model->simpleWordParaphrase = $map['simpleWordParaphrase'];
        }
        if (isset($map['tagsList'])) {
            if (!empty($map['tagsList'])) {
                $model->tagsList = $map['tagsList'];
            }
        }
        if (isset($map['updaterName'])) {
            $model->updaterName = $map['updaterName'];
        }
        if (isset($map['uuid'])) {
            $model->uuid = $map['uuid'];
        }
        if (isset($map['wordAlias'])) {
            if (!empty($map['wordAlias'])) {
                $model->wordAlias = $map['wordAlias'];
            }
        }
        if (isset($map['wordFullName'])) {
            $model->wordFullName = $map['wordFullName'];
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
