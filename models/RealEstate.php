<?php
/**
 * Created by PhpStorm.
 * User: jonsnow
 * Date: 9/30/17
 * Time: 1:03 AM
 */

class RealEstate
{
    var $re_id;
    var $ppsf;
    var $address;
    var $area;
    var $totalprice;

    /**
     * @return mixed
     */
    public function getReId()
    {
        return $this->re_id;
    }

    /**
     * @param mixed $re_id
     */
    public function setReId($re_id)
    {
        $this->re_id = $re_id;
    }

    /**
     * @return mixed
     */
    public function getPpsf()
    {
        return $this->ppsf;
    }

    /**
     * @param mixed $ppsf
     */
    public function setPpsf($ppsf)
    {
        $this->ppsf = $ppsf;
    }

    /**
     * @return mixed
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * @param mixed $address
     */
    public function setAddress($address)
    {
        $this->address = $address;
    }

    /**
     * @return mixed
     */
    public function getArea()
    {
        return $this->area;
    }

    /**
     * @param mixed $area
     */
    public function setArea($area)
    {
        $this->area = $area;
    }

    /**
     * @return mixed
     */
    public function getTotalprice()
    {
        return $this->totalprice;
    }

    /**
     * @param mixed $totalprice
     */
    public function setTotalprice($totalprice)
    {
        $this->totalprice = $totalprice;
    }



}