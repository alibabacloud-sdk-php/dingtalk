<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dingtalk\Vbizfinance_2_0\Models\QuerySupplierByPageResponseBody;

use AlibabaCloud\SDK\Dingtalk\Vbizfinance_2_0\Models\QuerySupplierByPageResponseBody\list_\customFormDataList;
use AlibabaCloud\Tea\Model;

class list_ extends Model
{
    /**
     * @description This parameter is required.
     *
     * @example SUP_XXX
     *
     * @var string
     */
    public $code;

    /**
     * @description This parameter is required.
     *
     * @example 1634786828686
     *
     * @var int
     */
    public $createTime;

    /**
     * @var customFormDataList[]
     */
    public $customFormDataList;

    /**
     * @description This parameter is required.
     *
     * @example 原材料供应商
     *
     * @var string
     */
    public $description;

    /**
     * @description This parameter is required.
     *
     * @example XX供应商
     *
     * @var string
     */
    public $name;

    /**
     * @description This parameter is required.
     *
     * @example valid
     *
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $userDefineCode;
    protected $_name = [
        'code' => 'code',
        'createTime' => 'createTime',
        'customFormDataList' => 'customFormDataList',
        'description' => 'description',
        'name' => 'name',
        'status' => 'status',
        'userDefineCode' => 'userDefineCode',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->code) {
            $res['code'] = $this->code;
        }
        if (null !== $this->createTime) {
            $res['createTime'] = $this->createTime;
        }
        if (null !== $this->customFormDataList) {
            $res['customFormDataList'] = [];
            if (null !== $this->customFormDataList && \is_array($this->customFormDataList)) {
                $n = 0;
                foreach ($this->customFormDataList as $item) {
                    $res['customFormDataList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->description) {
            $res['description'] = $this->description;
        }
        if (null !== $this->name) {
            $res['name'] = $this->name;
        }
        if (null !== $this->status) {
            $res['status'] = $this->status;
        }
        if (null !== $this->userDefineCode) {
            $res['userDefineCode'] = $this->userDefineCode;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return list_
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['code'])) {
            $model->code = $map['code'];
        }
        if (isset($map['createTime'])) {
            $model->createTime = $map['createTime'];
        }
        if (isset($map['customFormDataList'])) {
            if (!empty($map['customFormDataList'])) {
                $model->customFormDataList = [];
                $n = 0;
                foreach ($map['customFormDataList'] as $item) {
                    $model->customFormDataList[$n++] = null !== $item ? customFormDataList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['description'])) {
            $model->description = $map['description'];
        }
        if (isset($map['name'])) {
            $model->name = $map['name'];
        }
        if (isset($map['status'])) {
            $model->status = $map['status'];
        }
        if (isset($map['userDefineCode'])) {
            $model->userDefineCode = $map['userDefineCode'];
        }

        return $model;
    }
}
