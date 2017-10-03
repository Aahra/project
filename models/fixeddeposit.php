<?php
/**
 * Created by PhpStorm.
 * User: jonsnow
 * Date: 9/30/17
 * Time: 12:34 AM
 */

class fixeddeposit
{
var $fd_id;
var $bank_name;
var $tenure;
var $insterestrate;
var $amount;
var $maturityamount;
var $range;

    /**
     * @return mixed
     */
    public function getFdId()
    {
        return $this->fd_id;
    }

    /**
     * @param mixed $fd_id
     */
    public function setFdId($fd_id)
    {
        $this->fd_id = $fd_id;
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