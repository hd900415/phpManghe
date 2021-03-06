<?php
/*
 * Copyright (c) 2017-2018 THL A29 Limited, a Tencent company. All Rights Reserved.
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *    http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */
namespace TencentCloud\Cpdp\V20190820\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DistributeCancel请求参数结构体
 *
 * @method string getOpenId() 获取收单系统分配的开放ID
 * @method void setOpenId(string $OpenId) 设置收单系统分配的开放ID
 * @method string getOpenKey() 获取收单系统分配的密钥
 * @method void setOpenKey(string $OpenKey) 设置收单系统分配的密钥
 * @method string getOrderNo() 获取平台交易订单号
 * @method void setOrderNo(string $OrderNo) 设置平台交易订单号
 * @method string getProfile() 获取沙箱环境填sandbox，正式环境不填
 * @method void setProfile(string $Profile) 设置沙箱环境填sandbox，正式环境不填
 * @method string getDistributeNo() 获取平台分账单号，type为2时，和OutDistributeNo二者传其一
 * @method void setDistributeNo(string $DistributeNo) 设置平台分账单号，type为2时，和OutDistributeNo二者传其一
 * @method string getOutDistributeNo() 获取商户分账单号，type为2时，和DistributeNo二者传其一
 * @method void setOutDistributeNo(string $OutDistributeNo) 设置商户分账单号，type为2时，和DistributeNo二者传其一
 */
class DistributeCancelRequest extends AbstractModel
{
    /**
     * @var string 收单系统分配的开放ID
     */
    public $OpenId;

    /**
     * @var string 收单系统分配的密钥
     */
    public $OpenKey;

    /**
     * @var string 平台交易订单号
     */
    public $OrderNo;

    /**
     * @var string 沙箱环境填sandbox，正式环境不填
     */
    public $Profile;

    /**
     * @var string 平台分账单号，type为2时，和OutDistributeNo二者传其一
     */
    public $DistributeNo;

    /**
     * @var string 商户分账单号，type为2时，和DistributeNo二者传其一
     */
    public $OutDistributeNo;

    /**
     * @param string $OpenId 收单系统分配的开放ID
     * @param string $OpenKey 收单系统分配的密钥
     * @param string $OrderNo 平台交易订单号
     * @param string $Profile 沙箱环境填sandbox，正式环境不填
     * @param string $DistributeNo 平台分账单号，type为2时，和OutDistributeNo二者传其一
     * @param string $OutDistributeNo 商户分账单号，type为2时，和DistributeNo二者传其一
     */
    function __construct()
    {

    }

    /**
     * For internal only. DO NOT USE IT.
     */
    public function deserialize($param)
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists("OpenId",$param) and $param["OpenId"] !== null) {
            $this->OpenId = $param["OpenId"];
        }

        if (array_key_exists("OpenKey",$param) and $param["OpenKey"] !== null) {
            $this->OpenKey = $param["OpenKey"];
        }

        if (array_key_exists("OrderNo",$param) and $param["OrderNo"] !== null) {
            $this->OrderNo = $param["OrderNo"];
        }

        if (array_key_exists("Profile",$param) and $param["Profile"] !== null) {
            $this->Profile = $param["Profile"];
        }

        if (array_key_exists("DistributeNo",$param) and $param["DistributeNo"] !== null) {
            $this->DistributeNo = $param["DistributeNo"];
        }

        if (array_key_exists("OutDistributeNo",$param) and $param["OutDistributeNo"] !== null) {
            $this->OutDistributeNo = $param["OutDistributeNo"];
        }
    }
}
