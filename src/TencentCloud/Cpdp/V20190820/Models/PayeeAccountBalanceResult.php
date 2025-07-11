<?php
/*
 * Copyright (c) 2017-2025 Tencent. All Rights Reserved.
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
 * 账户余额信息
 *
 * @method string getAccountId() 获取账户ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAccountId(string $AccountId) 设置账户ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getIncomeType() 获取收入类型
LABOR:劳务所得
OCCASION:偶然所得
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIncomeType(integer $IncomeType) 设置收入类型
LABOR:劳务所得
OCCASION:偶然所得
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getBalance() 获取总余额
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setBalance(string $Balance) 设置总余额
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getSystemFreezeBalance() 获取系统冻结余额
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSystemFreezeBalance(string $SystemFreezeBalance) 设置系统冻结余额
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getManualFreezeBalance() 获取人工冻结余额
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setManualFreezeBalance(string $ManualFreezeBalance) 设置人工冻结余额
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getPayableBalance() 获取可提现余额
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPayableBalance(string $PayableBalance) 设置可提现余额
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getPaidBalance() 获取已提现余额
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPaidBalance(string $PaidBalance) 设置已提现余额
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getInPayBalance() 获取提现中余额
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setInPayBalance(string $InPayBalance) 设置提现中余额
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getSumSettlementAmount() 获取累计结算金额
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSumSettlementAmount(string $SumSettlementAmount) 设置累计结算金额
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getPaidIncomeTax() 获取已缴个税
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPaidIncomeTax(string $PaidIncomeTax) 设置已缴个税
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getInPayIncomeTax() 获取提现中个税
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setInPayIncomeTax(string $InPayIncomeTax) 设置提现中个税
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getPaidValueAddedTax() 获取已缴增值税
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPaidValueAddedTax(string $PaidValueAddedTax) 设置已缴增值税
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getInPayValueAddedTax() 获取提现中增值税
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setInPayValueAddedTax(string $InPayValueAddedTax) 设置提现中增值税
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getPaidAttachTax() 获取已缴附加税
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPaidAttachTax(string $PaidAttachTax) 设置已缴附加税
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getInPayAttachTax() 获取提现中附加税
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setInPayAttachTax(string $InPayAttachTax) 设置提现中附加税
注意：此字段可能返回 null，表示取不到有效值。
 */
class PayeeAccountBalanceResult extends AbstractModel
{
    /**
     * @var string 账户ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AccountId;

    /**
     * @var integer 收入类型
LABOR:劳务所得
OCCASION:偶然所得
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $IncomeType;

    /**
     * @var string 总余额
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Balance;

    /**
     * @var string 系统冻结余额
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SystemFreezeBalance;

    /**
     * @var string 人工冻结余额
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ManualFreezeBalance;

    /**
     * @var string 可提现余额
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PayableBalance;

    /**
     * @var string 已提现余额
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PaidBalance;

    /**
     * @var string 提现中余额
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $InPayBalance;

    /**
     * @var string 累计结算金额
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SumSettlementAmount;

    /**
     * @var string 已缴个税
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PaidIncomeTax;

    /**
     * @var string 提现中个税
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $InPayIncomeTax;

    /**
     * @var string 已缴增值税
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PaidValueAddedTax;

    /**
     * @var string 提现中增值税
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $InPayValueAddedTax;

    /**
     * @var string 已缴附加税
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PaidAttachTax;

    /**
     * @var string 提现中附加税
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $InPayAttachTax;

    /**
     * @param string $AccountId 账户ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $IncomeType 收入类型
LABOR:劳务所得
OCCASION:偶然所得
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Balance 总余额
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $SystemFreezeBalance 系统冻结余额
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ManualFreezeBalance 人工冻结余额
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $PayableBalance 可提现余额
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $PaidBalance 已提现余额
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $InPayBalance 提现中余额
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $SumSettlementAmount 累计结算金额
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $PaidIncomeTax 已缴个税
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $InPayIncomeTax 提现中个税
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $PaidValueAddedTax 已缴增值税
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $InPayValueAddedTax 提现中增值税
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $PaidAttachTax 已缴附加税
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $InPayAttachTax 提现中附加税
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
        if (array_key_exists("AccountId",$param) and $param["AccountId"] !== null) {
            $this->AccountId = $param["AccountId"];
        }

        if (array_key_exists("IncomeType",$param) and $param["IncomeType"] !== null) {
            $this->IncomeType = $param["IncomeType"];
        }

        if (array_key_exists("Balance",$param) and $param["Balance"] !== null) {
            $this->Balance = $param["Balance"];
        }

        if (array_key_exists("SystemFreezeBalance",$param) and $param["SystemFreezeBalance"] !== null) {
            $this->SystemFreezeBalance = $param["SystemFreezeBalance"];
        }

        if (array_key_exists("ManualFreezeBalance",$param) and $param["ManualFreezeBalance"] !== null) {
            $this->ManualFreezeBalance = $param["ManualFreezeBalance"];
        }

        if (array_key_exists("PayableBalance",$param) and $param["PayableBalance"] !== null) {
            $this->PayableBalance = $param["PayableBalance"];
        }

        if (array_key_exists("PaidBalance",$param) and $param["PaidBalance"] !== null) {
            $this->PaidBalance = $param["PaidBalance"];
        }

        if (array_key_exists("InPayBalance",$param) and $param["InPayBalance"] !== null) {
            $this->InPayBalance = $param["InPayBalance"];
        }

        if (array_key_exists("SumSettlementAmount",$param) and $param["SumSettlementAmount"] !== null) {
            $this->SumSettlementAmount = $param["SumSettlementAmount"];
        }

        if (array_key_exists("PaidIncomeTax",$param) and $param["PaidIncomeTax"] !== null) {
            $this->PaidIncomeTax = $param["PaidIncomeTax"];
        }

        if (array_key_exists("InPayIncomeTax",$param) and $param["InPayIncomeTax"] !== null) {
            $this->InPayIncomeTax = $param["InPayIncomeTax"];
        }

        if (array_key_exists("PaidValueAddedTax",$param) and $param["PaidValueAddedTax"] !== null) {
            $this->PaidValueAddedTax = $param["PaidValueAddedTax"];
        }

        if (array_key_exists("InPayValueAddedTax",$param) and $param["InPayValueAddedTax"] !== null) {
            $this->InPayValueAddedTax = $param["InPayValueAddedTax"];
        }

        if (array_key_exists("PaidAttachTax",$param) and $param["PaidAttachTax"] !== null) {
            $this->PaidAttachTax = $param["PaidAttachTax"];
        }

        if (array_key_exists("InPayAttachTax",$param) and $param["InPayAttachTax"] !== null) {
            $this->InPayAttachTax = $param["InPayAttachTax"];
        }
    }
}
