<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dingtalk\Valitrip_1_0\Models\GetHotelExceedApplyResponseBody;

use AlibabaCloud\Tea\Model;

class applyIntentionInfoDO extends Model
{
    /**
     * @description This parameter is required.
     *
     * @example 2021-07-08
     *
     * @var string
     */
    public $checkIn;

    /**
     * @description This parameter is required.
     *
     * @example 2021-07-08
     *
     * @var string
     */
    public $checkOut;

    /**
     * @description This parameter is required.
     *
     * @example SHA
     *
     * @var string
     */
    public $cityCode;

    /**
     * @description This parameter is required.
     *
     * @example 上海
     *
     * @var string
     */
    public $cityName;

    /**
     * @description This parameter is required.
     *
     * @example 10000
     *
     * @var int
     */
    public $price;

    /**
     * @description This parameter is required.
     *
     * @example true
     *
     * @var bool
     */
    public $together;

    /**
     * @description This parameter is required.
     *
     * @example 16
     *
     * @var int
     */
    public $type;
    protected $_name = [
        'checkIn' => 'checkIn',
        'checkOut' => 'checkOut',
        'cityCode' => 'cityCode',
        'cityName' => 'cityName',
        'price' => 'price',
        'together' => 'together',
        'type' => 'type',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->checkIn) {
            $res['checkIn'] = $this->checkIn;
        }
        if (null !== $this->checkOut) {
            $res['checkOut'] = $this->checkOut;
        }
        if (null !== $this->cityCode) {
            $res['cityCode'] = $this->cityCode;
        }
        if (null !== $this->cityName) {
            $res['cityName'] = $this->cityName;
        }
        if (null !== $this->price) {
            $res['price'] = $this->price;
        }
        if (null !== $this->together) {
            $res['together'] = $this->together;
        }
        if (null !== $this->type) {
            $res['type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return applyIntentionInfoDO
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['checkIn'])) {
            $model->checkIn = $map['checkIn'];
        }
        if (isset($map['checkOut'])) {
            $model->checkOut = $map['checkOut'];
        }
        if (isset($map['cityCode'])) {
            $model->cityCode = $map['cityCode'];
        }
        if (isset($map['cityName'])) {
            $model->cityName = $map['cityName'];
        }
        if (isset($map['price'])) {
            $model->price = $map['price'];
        }
        if (isset($map['together'])) {
            $model->together = $map['together'];
        }
        if (isset($map['type'])) {
            $model->type = $map['type'];
        }

        return $model;
    }
}
