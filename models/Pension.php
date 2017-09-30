<?php
/**
 * Created by PhpStorm.
 * User: jonsnow
 * Date: 9/30/17
 * Time: 1:05 AM
 */

class Pension
{

    var $pension_id;
    var $lockin_period;
    var $taxbenefit;
    var $premium;
    var $age;
    var $maturityamount;
    var $prematureamount;

    /**
     * @return mixed
     */
    public function getPensionId()
    {
        return $this->pension_id;
    }

    /**
     * @param mixed $pension_id
     */
    public function setPensionId($pension_id)
    {
        $this->pension_id = $pension_id;
    }

    /**
     * @return mixed
     */
    public function getLockinPeriod()
    {
        return $this->lockin_period;
    }

    /**
     * @param mixed $lockin_period
     */
    public function setLockinPeriod($lockin_period)
    {
        $this->lockin_period = $lockin_period;
    }

    /**
     * @return mixed
     */
    public function getTaxbenefit()
    {
        return $this->taxbenefit;
    }

    /**
     * @param mixed $taxbenefit
     */
    public function setTaxbenefit($taxbenefit)
    {
        $this->taxbenefit = $taxbenefit;
    }

    /**
     * @return mixed
     */
    public function getPremium()
    {
        return $this->premium;
    }

    /**
     * @param mixed $premium
     */
    public function setPremium($premium)
    {
        $this->premium = $premium;
    }

    /**
     * @return mixed
     */
    public function getAge()
    {
        return $this->age;
    }

    /**
     * @param mixed $age
     */
    public function setAge($age)
    {
        $this->age = $age;
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
    public function getPrematureamount()
    {
        return $this->prematureamount;
    }

    /**
     * @param mixed $prematureamount
     */
    public function setPrematureamount($prematureamount)
    {
        $this->prematureamount = $prematureamount;
    }


}