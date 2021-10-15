<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dingtalk\Vyida_1_0\Models;

use AlibabaCloud\Tea\Model;

class GetTaskCopiesRequest extends Model
{
    /**
     * @description 应用ID
     *
     * @var string
     */
    public $appType;

    /**
     * @description 验权token
     *
     * @var string
     */
    public $systemToken;

    /**
     * @description 每页记录数; 必须大于0 默认10 最大值：100
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description 语言环境; 可选值：zh_CN/en_US
     *
     * @var string
     */
    public $language;

    /**
     * @description 当前页; 必须大于0 默认1
     *
     * @var int
     */
    public $pageNumber;

    /**
     * @description 关键词
     *
     * @var string
     */
    public $keyword;

    /**
     * @description 钉钉的userId
     *
     * @var string
     */
    public $userId;

    /**
     * @description 流程code列表
     *
     * @var string
     */
    public $processCodes;

    /**
     * @description 创建时间开始; 时间戳
     *
     * @var int
     */
    public $createFromTimeGMT;

    /**
     * @description 创建时间结束; 时间戳
     *
     * @var int
     */
    public $createToTimeGMT;
    protected $_name = [
        'appType'           => 'appType',
        'systemToken'       => 'systemToken',
        'pageSize'          => 'pageSize',
        'language'          => 'language',
        'pageNumber'        => 'pageNumber',
        'keyword'           => 'keyword',
        'userId'            => 'userId',
        'processCodes'      => 'processCodes',
        'createFromTimeGMT' => 'createFromTimeGMT',
        'createToTimeGMT'   => 'createToTimeGMT',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->appType) {
            $res['appType'] = $this->appType;
        }
        if (null !== $this->systemToken) {
            $res['systemToken'] = $this->systemToken;
        }
        if (null !== $this->pageSize) {
            $res['pageSize'] = $this->pageSize;
        }
        if (null !== $this->language) {
            $res['language'] = $this->language;
        }
        if (null !== $this->pageNumber) {
            $res['pageNumber'] = $this->pageNumber;
        }
        if (null !== $this->keyword) {
            $res['keyword'] = $this->keyword;
        }
        if (null !== $this->userId) {
            $res['userId'] = $this->userId;
        }
        if (null !== $this->processCodes) {
            $res['processCodes'] = $this->processCodes;
        }
        if (null !== $this->createFromTimeGMT) {
            $res['createFromTimeGMT'] = $this->createFromTimeGMT;
        }
        if (null !== $this->createToTimeGMT) {
            $res['createToTimeGMT'] = $this->createToTimeGMT;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetTaskCopiesRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['appType'])) {
            $model->appType = $map['appType'];
        }
        if (isset($map['systemToken'])) {
            $model->systemToken = $map['systemToken'];
        }
        if (isset($map['pageSize'])) {
            $model->pageSize = $map['pageSize'];
        }
        if (isset($map['language'])) {
            $model->language = $map['language'];
        }
        if (isset($map['pageNumber'])) {
            $model->pageNumber = $map['pageNumber'];
        }
        if (isset($map['keyword'])) {
            $model->keyword = $map['keyword'];
        }
        if (isset($map['userId'])) {
            $model->userId = $map['userId'];
        }
        if (isset($map['processCodes'])) {
            $model->processCodes = $map['processCodes'];
        }
        if (isset($map['createFromTimeGMT'])) {
            $model->createFromTimeGMT = $map['createFromTimeGMT'];
        }
        if (isset($map['createToTimeGMT'])) {
            $model->createToTimeGMT = $map['createToTimeGMT'];
        }

        return $model;
    }
}