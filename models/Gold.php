<?php
/**
 * Created by PhpStorm.
 * User: jonsnow
 * Date: 9/30/17
 * Time: 1:08 AM
 */

class Gold
{

    var $goldid;
    var $grams;
    var $carat;
    var $totalprice;

    /**
     * @return mixed
     */
    public function getGoldid()
    {
        return $this->goldid;
    }

    /**
     * @param mixed $goldid
     */
    public function setGoldid($goldid)
    {
        $this->goldid = $goldid;
    }

    /**
     * @return mixed
     */
    public function getGrams()
    {
        return $this->grams;
    }

    /**
     * @param mixed $grams
     */
    public function setGrams($grams)
    {
        $this->grams = $grams;
    }

    /**
     * @return mixed
     */
    public function getCarat()
    {
        return $this->carat;
    }

    /**
     * @param mixed $carat
     */
    public function setCarat($carat)
    {
        $this->carat = $carat;
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