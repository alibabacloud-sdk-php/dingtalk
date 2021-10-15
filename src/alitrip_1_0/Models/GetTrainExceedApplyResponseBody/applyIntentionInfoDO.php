<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dingtalk\Valitrip_1_0\Models\GetTrainExceedApplyResponseBody;

use AlibabaCloud\Tea\Model;

class applyIntentionInfoDO extends Model
{
    /**
     * @description 意向坐席价格（分）
     *
     * @var int
     */
    public $price;

    /**
     * @description 出发城市名
     *
     * @var string
     */
    public $depCityName;

    /**
     * @description 到达城市名
     *
     * @var string
     */
    public $arrCityName;

    /**
     * @description 出发城市三字码
     *
     * @var string
     */
    public $depCity;

    /**
     * @description 到达城市三字码
     *
     * @var string
     */
    public $arrCity;

    /**
     * @description 出发时间
     *
     * @var string
     */
    public $depTime;

    /**
     * @description 到达时间
     *
     * @var string
     */
    public $arrTime;

    /**
     * @description 到达站点名称
     *
     * @var string
     */
    public $arrStation;

    /**
     * @description 出发站点名称
     *
     * @var string
     */
    public $depStation;

    /**
     * @description 意向车次号
     *
     * @var string
     */
    public $trainNo;

    /**
     * @description 意向车次类型
     *
     * @var string
     */
    public $trainTypeDesc;

    /**
     * @description 意向坐席名称
     *
     * @var string
     */
    public $seatName;
    protected $_name = [
        'price'         => 'price',
        'depCityName'   => 'depCityName',
        'arrCityName'   => 'arrCityName',
        'depCity'       => 'depCity',
        'arrCity'       => 'arrCity',
        'depTime'       => 'depTime',
        'arrTime'       => 'arrTime',
        'arrStation'    => 'arrStation',
        'depStation'    => 'depStation',
        'trainNo'       => 'trainNo',
        'trainTypeDesc' => 'trainTypeDesc',
        'seatName'      => 'seatName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->price) {
            $res['price'] = $this->price;
        }
        if (null !== $this->depCityName) {
            $res['depCityName'] = $this->depCityName;
        }
        if (null !== $this->arrCityName) {
            $res['arrCityName'] = $this->arrCityName;
        }
        if (null !== $this->depCity) {
            $res['depCity'] = $this->depCity;
        }
        if (null !== $this->arrCity) {
            $res['arrCity'] = $this->arrCity;
        }
        if (null !== $this->depTime) {
            $res['depTime'] = $this->depTime;
        }
        if (null !== $this->arrTime) {
            $res['arrTime'] = $this->arrTime;
        }
        if (null !== $this->arrStation) {
            $res['arrStation'] = $this->arrStation;
        }
        if (null !== $this->depStation) {
            $res['depStation'] = $this->depStation;
        }
        if (null !== $this->trainNo) {
            $res['trainNo'] = $this->trainNo;
        }
        if (null !== $this->trainTypeDesc) {
            $res['trainTypeDesc'] = $this->trainTypeDesc;
        }
        if (null !== $this->seatName) {
            $res['seatName'] = $this->seatName;
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
        if (isset($map['price'])) {
            $model->price = $map['price'];
        }
        if (isset($map['depCityName'])) {
            $model->depCityName = $map['depCityName'];
        }
        if (isset($map['arrCityName'])) {
            $model->arrCityName = $map['arrCityName'];
        }
        if (isset($map['depCity'])) {
            $model->depCity = $map['depCity'];
        }
        if (isset($map['arrCity'])) {
            $model->arrCity = $map['arrCity'];
        }
        if (isset($map['depTime'])) {
            $model->depTime = $map['depTime'];
        }
        if (isset($map['arrTime'])) {
            $model->arrTime = $map['arrTime'];
        }
        if (isset($map['arrStation'])) {
            $model->arrStation = $map['arrStation'];
        }
        if (isset($map['depStation'])) {
            $model->depStation = $map['depStation'];
        }
        if (isset($map['trainNo'])) {
            $model->trainNo = $map['trainNo'];
        }
        if (isset($map['trainTypeDesc'])) {
            $model->trainTypeDesc = $map['trainTypeDesc'];
        }
        if (isset($map['seatName'])) {
            $model->seatName = $map['seatName'];
        }

        return $model;
    }
}