<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dingtalk\Vjzcrm_1_0\Models\EditOrderRequest;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description 创建人
     *
     * @var string
     */
    public $dataUserid;

    /**
     * @description 对应客户
     *
     * @var string
     */
    public $htCustomerid;

    /**
     * @description 签单日期
     *
     * @var string
     */
    public $htDate;

    /**
     * @description 所有者
     *
     * @var string
     */
    public $htPreside;

    /**
     * @description 状态
     *
     * @var string
     */
    public $htState;

    /**
     * @description 总金额
     *
     * @var string
     */
    public $htSummoney;

    /**
     * @description 单据类型（合同，合同订单，店面单）
     *
     * @var string
     */
    public $htOrder;

    /**
     * @description 主题
     *
     * @var string
     */
    public $htTitle;

    /**
     * @description 合同单号
     *
     * @var string
     */
    public $htNumber;

    /**
     * @description 对应联系人
     *
     * @var string
     */
    public $htLxrid;

    /**
     * @description 联系方式
     *
     * @var string
     */
    public $htLxrinfo;

    /**
     * @description 对应机会
     *
     * @var string
     */
    public $htXshid;

    /**
     * @description 分类
     *
     * @var string
     */
    public $htType;

    /**
     * @description 付款方式
     *
     * @var string
     */
    public $htPaymode;

    /**
     * @description 开始日期
     *
     * @var string
     */
    public $htBegindate;

    /**
     * @description 客户签约人
     *
     * @var string
     */
    public $htCusub;

    /**
     * @description 我方签约人
     *
     * @var string
     */
    public $htWesub;

    /**
     * @description 优惠折扣率
     *
     * @var string
     */
    public $htMoneyzhekou;

    /**
     * @description 优惠抹零金额
     *
     * @var string
     */
    public $htKjmoney;

    /**
     * @description 附加费用分类
     *
     * @var string
     */
    public $htFjmoneylx;

    /**
     * @description 附加费用金额
     *
     * @var string
     */
    public $htFjmoney;

    /**
     * @description 外币备注
     *
     * @var string
     */
    public $htSummemo;

    /**
     * @description 交付地点
     *
     * @var string
     */
    public $htDeliplace;

    /**
     * @description 最晚发货日
     *
     * @var string
     */
    public $htEnddate;

    /**
     * @description 发货方式
     *
     * @var string
     */
    public $htWuliutype;

    /**
     * @description 预计运费
     *
     * @var string
     */
    public $htYunfeimoney;

    /**
     * @description 收货地址
     *
     * @var string
     */
    public $fahuoaddressid;

    /**
     * @description 合同正文
     *
     * @var string
     */
    public $htContract;

    /**
     * @description 备注
     *
     * @var string
     */
    public $htRemark;

    /**
     * @description 产品明细，json格式
     *
     * @var string
     */
    public $childMx;
    protected $_name = [
        'dataUserid'     => 'data_userid',
        'htCustomerid'   => 'ht_customerid',
        'htDate'         => 'ht_date',
        'htPreside'      => 'ht_preside',
        'htState'        => 'ht_state',
        'htSummoney'     => 'ht_summoney',
        'htOrder'        => 'ht_order',
        'htTitle'        => 'ht_title',
        'htNumber'       => 'ht_number',
        'htLxrid'        => 'ht_lxrid',
        'htLxrinfo'      => 'ht_lxrinfo',
        'htXshid'        => 'ht_xshid',
        'htType'         => 'ht_type',
        'htPaymode'      => 'ht_paymode',
        'htBegindate'    => 'ht_begindate',
        'htCusub'        => 'ht_cusub',
        'htWesub'        => 'ht_wesub',
        'htMoneyzhekou'  => 'ht_moneyzhekou',
        'htKjmoney'      => 'ht_kjmoney',
        'htFjmoneylx'    => 'ht_fjmoneylx',
        'htFjmoney'      => 'ht_fjmoney',
        'htSummemo'      => 'ht_summemo',
        'htDeliplace'    => 'ht_deliplace',
        'htEnddate'      => 'ht_enddate',
        'htWuliutype'    => 'ht_wuliutype',
        'htYunfeimoney'  => 'ht_yunfeimoney',
        'fahuoaddressid' => 'fahuoaddressid',
        'htContract'     => 'ht_contract',
        'htRemark'       => 'ht_remark',
        'childMx'        => 'child_mx',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->dataUserid) {
            $res['data_userid'] = $this->dataUserid;
        }
        if (null !== $this->htCustomerid) {
            $res['ht_customerid'] = $this->htCustomerid;
        }
        if (null !== $this->htDate) {
            $res['ht_date'] = $this->htDate;
        }
        if (null !== $this->htPreside) {
            $res['ht_preside'] = $this->htPreside;
        }
        if (null !== $this->htState) {
            $res['ht_state'] = $this->htState;
        }
        if (null !== $this->htSummoney) {
            $res['ht_summoney'] = $this->htSummoney;
        }
        if (null !== $this->htOrder) {
            $res['ht_order'] = $this->htOrder;
        }
        if (null !== $this->htTitle) {
            $res['ht_title'] = $this->htTitle;
        }
        if (null !== $this->htNumber) {
            $res['ht_number'] = $this->htNumber;
        }
        if (null !== $this->htLxrid) {
            $res['ht_lxrid'] = $this->htLxrid;
        }
        if (null !== $this->htLxrinfo) {
            $res['ht_lxrinfo'] = $this->htLxrinfo;
        }
        if (null !== $this->htXshid) {
            $res['ht_xshid'] = $this->htXshid;
        }
        if (null !== $this->htType) {
            $res['ht_type'] = $this->htType;
        }
        if (null !== $this->htPaymode) {
            $res['ht_paymode'] = $this->htPaymode;
        }
        if (null !== $this->htBegindate) {
            $res['ht_begindate'] = $this->htBegindate;
        }
        if (null !== $this->htCusub) {
            $res['ht_cusub'] = $this->htCusub;
        }
        if (null !== $this->htWesub) {
            $res['ht_wesub'] = $this->htWesub;
        }
        if (null !== $this->htMoneyzhekou) {
            $res['ht_moneyzhekou'] = $this->htMoneyzhekou;
        }
        if (null !== $this->htKjmoney) {
            $res['ht_kjmoney'] = $this->htKjmoney;
        }
        if (null !== $this->htFjmoneylx) {
            $res['ht_fjmoneylx'] = $this->htFjmoneylx;
        }
        if (null !== $this->htFjmoney) {
            $res['ht_fjmoney'] = $this->htFjmoney;
        }
        if (null !== $this->htSummemo) {
            $res['ht_summemo'] = $this->htSummemo;
        }
        if (null !== $this->htDeliplace) {
            $res['ht_deliplace'] = $this->htDeliplace;
        }
        if (null !== $this->htEnddate) {
            $res['ht_enddate'] = $this->htEnddate;
        }
        if (null !== $this->htWuliutype) {
            $res['ht_wuliutype'] = $this->htWuliutype;
        }
        if (null !== $this->htYunfeimoney) {
            $res['ht_yunfeimoney'] = $this->htYunfeimoney;
        }
        if (null !== $this->fahuoaddressid) {
            $res['fahuoaddressid'] = $this->fahuoaddressid;
        }
        if (null !== $this->htContract) {
            $res['ht_contract'] = $this->htContract;
        }
        if (null !== $this->htRemark) {
            $res['ht_remark'] = $this->htRemark;
        }
        if (null !== $this->childMx) {
            $res['child_mx'] = $this->childMx;
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
        if (isset($map['data_userid'])) {
            $model->dataUserid = $map['data_userid'];
        }
        if (isset($map['ht_customerid'])) {
            $model->htCustomerid = $map['ht_customerid'];
        }
        if (isset($map['ht_date'])) {
            $model->htDate = $map['ht_date'];
        }
        if (isset($map['ht_preside'])) {
            $model->htPreside = $map['ht_preside'];
        }
        if (isset($map['ht_state'])) {
            $model->htState = $map['ht_state'];
        }
        if (isset($map['ht_summoney'])) {
            $model->htSummoney = $map['ht_summoney'];
        }
        if (isset($map['ht_order'])) {
            $model->htOrder = $map['ht_order'];
        }
        if (isset($map['ht_title'])) {
            $model->htTitle = $map['ht_title'];
        }
        if (isset($map['ht_number'])) {
            $model->htNumber = $map['ht_number'];
        }
        if (isset($map['ht_lxrid'])) {
            $model->htLxrid = $map['ht_lxrid'];
        }
        if (isset($map['ht_lxrinfo'])) {
            $model->htLxrinfo = $map['ht_lxrinfo'];
        }
        if (isset($map['ht_xshid'])) {
            $model->htXshid = $map['ht_xshid'];
        }
        if (isset($map['ht_type'])) {
            $model->htType = $map['ht_type'];
        }
        if (isset($map['ht_paymode'])) {
            $model->htPaymode = $map['ht_paymode'];
        }
        if (isset($map['ht_begindate'])) {
            $model->htBegindate = $map['ht_begindate'];
        }
        if (isset($map['ht_cusub'])) {
            $model->htCusub = $map['ht_cusub'];
        }
        if (isset($map['ht_wesub'])) {
            $model->htWesub = $map['ht_wesub'];
        }
        if (isset($map['ht_moneyzhekou'])) {
            $model->htMoneyzhekou = $map['ht_moneyzhekou'];
        }
        if (isset($map['ht_kjmoney'])) {
            $model->htKjmoney = $map['ht_kjmoney'];
        }
        if (isset($map['ht_fjmoneylx'])) {
            $model->htFjmoneylx = $map['ht_fjmoneylx'];
        }
        if (isset($map['ht_fjmoney'])) {
            $model->htFjmoney = $map['ht_fjmoney'];
        }
        if (isset($map['ht_summemo'])) {
            $model->htSummemo = $map['ht_summemo'];
        }
        if (isset($map['ht_deliplace'])) {
            $model->htDeliplace = $map['ht_deliplace'];
        }
        if (isset($map['ht_enddate'])) {
            $model->htEnddate = $map['ht_enddate'];
        }
        if (isset($map['ht_wuliutype'])) {
            $model->htWuliutype = $map['ht_wuliutype'];
        }
        if (isset($map['ht_yunfeimoney'])) {
            $model->htYunfeimoney = $map['ht_yunfeimoney'];
        }
        if (isset($map['fahuoaddressid'])) {
            $model->fahuoaddressid = $map['fahuoaddressid'];
        }
        if (isset($map['ht_contract'])) {
            $model->htContract = $map['ht_contract'];
        }
        if (isset($map['ht_remark'])) {
            $model->htRemark = $map['ht_remark'];
        }
        if (isset($map['child_mx'])) {
            $model->childMx = $map['child_mx'];
        }

        return $model;
    }
}
