<?php
/**
 * Created by PhpStorm.
 * User: jonsnow
 * Date: 9/30/17
 * Time: 1:11 AM
 */

class Insurance
{

    var $insuranceid;
    var $tenure;
    var $premium;
    var $coverage;
    var $companyid;

    /**
     * @return mixed
     */
    public function getInsuranceid()
    {
        return $this->insuranceid;
    }

    /**
     * @param mixed $insuranceid
     */
    public function setInsuranceid($insuranceid)
    {
        $this->insuranceid = $insuranceid;
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
    public function getCoverage()
    {
        return $this->coverage;
    }

    /**
     * @param mixed $coverage
     */
    public function setCoverage($coverage)
    {
        $this->coverage = $coverage;
    }

    /**
     * @return mixed
     */
    public function getCompanyid()
    {
        return $this->companyid;
    }

    /**
     * @param mixed $companyid
     */
    public function setCompanyid($companyid)
    {
        $this->companyid = $companyid;
    }


}