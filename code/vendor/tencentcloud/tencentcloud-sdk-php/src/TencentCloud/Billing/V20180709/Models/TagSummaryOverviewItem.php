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
namespace TencentCloud\Billing\V20180709\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 按标签汇总消费详情
 *
 * @method string getTagValue() 获取标签值
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTagValue(string $TagValue) 设置标签值
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRealTotalCost() 获取实际花费
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRealTotalCost(string $RealTotalCost) 设置实际花费
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRealTotalCostRatio() 获取费用所占百分比，两位小数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRealTotalCostRatio(string $RealTotalCostRatio) 设置费用所占百分比，两位小数
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getTotalCost() 获取原价，单位为元。TotalCost字段自账单3.0（即2021-05）之后开始生效，账单3.0之前返回"-"。合同价的情况下，TotalCost字段与官网价格存在差异，也返回“-”。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTotalCost(string $TotalCost) 设置原价，单位为元。TotalCost字段自账单3.0（即2021-05）之后开始生效，账单3.0之前返回"-"。合同价的情况下，TotalCost字段与官网价格存在差异，也返回“-”。
注意：此字段可能返回 null，表示取不到有效值。
 */
class TagSummaryOverviewItem extends AbstractModel
{
    /**
     * @var string 标签值
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TagValue;

    /**
     * @var string 实际花费
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RealTotalCost;

    /**
     * @var string 费用所占百分比，两位小数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RealTotalCostRatio;

    /**
     * @var string 原价，单位为元。TotalCost字段自账单3.0（即2021-05）之后开始生效，账单3.0之前返回"-"。合同价的情况下，TotalCost字段与官网价格存在差异，也返回“-”。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TotalCost;

    /**
     * @param string $TagValue 标签值
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $RealTotalCost 实际花费
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $RealTotalCostRatio 费用所占百分比，两位小数
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $TotalCost 原价，单位为元。TotalCost字段自账单3.0（即2021-05）之后开始生效，账单3.0之前返回"-"。合同价的情况下，TotalCost字段与官网价格存在差异，也返回“-”。
注意：此字段可能返回 null，表示取不到有效值。
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
        if (array_key_exists("TagValue",$param) and $param["TagValue"] !== null) {
            $this->TagValue = $param["TagValue"];
        }

        if (array_key_exists("RealTotalCost",$param) and $param["RealTotalCost"] !== null) {
            $this->RealTotalCost = $param["RealTotalCost"];
        }

        if (array_key_exists("RealTotalCostRatio",$param) and $param["RealTotalCostRatio"] !== null) {
            $this->RealTotalCostRatio = $param["RealTotalCostRatio"];
        }

        if (array_key_exists("TotalCost",$param) and $param["TotalCost"] !== null) {
            $this->TotalCost = $param["TotalCost"];
        }
    }
}