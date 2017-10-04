<?php
/**
 * Created by PhpStorm.
 * User: jonsnow
 * Date: 9/30/17
 * Time: 1:00 AM
 */

class RecurringDeposit
{
    var $rd_id;
    var $bank_name;
    var $tenure;
    var $interestrate;
    var $amount;
    var $maturityamount;
    var $range;

    /**
     * @return mixed
     */
    public function getRdId()
    {
        return $this->rd_id;
    }

    /**
     * @param mixed $rd_id
     */
    public function setRdId($rd_id)
    {
        $this->rd_id = $rd_id;
    }

    /**
     * @return mixed
     */
    public function getBankName()
    {
        return $this->bank_name;
    }

    /**
     * @param mixed $bank_name
     */
    public function setBankName($bank_name)
    {
        $this->bank_name = $bank_name;
    }

    /**
     * @return mixed
     */
    public function getTenure()
    {
        return $this->tenure;
    }

    /**
     * @param mixed $tenure
     */
    public function setTenure($tenure)
    {
        $this->tenure = $tenure;
    }

    /**
     * @return mixed
     */
    public function getInsterestrate()
    {
        return $this->insterestrate;
    }

    /**
     * @param mixed $insterestrate
     */
    public function setInsterestrate($insterestrate)
    {
        $this->insterestrate = $insterestrate;
    }

    /**
     * @return mixed
     */
    public function getAmount()
    {
        return $this->amount;
    }

    /**
     * @param mixed $amount
     */
    public function setAmount($amount)
    {
        $this->amount = $amount;
    }

    /**
     * @return mixed
     */
    public function getMaturityamount()
    {
        return $this->maturityamount;
    }

    /**
     * @param mixed $maturityamount
     */
    public function setMaturityamount($maturityamount)
    {
        $this->maturityamount = $maturityamount;
    }

    /**
     * @return mixed
     */
    public function getRange()
    {
        return $this->range;
    }

    /**
     * @param mixed $range
     */
    public function setRange($range)
    {
        $this->range = $range;
    }





}
