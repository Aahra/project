<?php
/**
 * Created by PhpStorm.
 * User: jonsnow
 * Date: 9/30/17
 * Time: 1:09 AM
 */

class Silver
{

    var $silver_id;
    var $grams;
    var $totalprice;

    /**
     * @return mixed
     */
    public function getSilverId()
    {
        return $this->silver_id;
    }

    /**
     * @param mixed $silver_id
     */
    public function setSilverId($silver_id)
    {
        $this->silver_id = $silver_id;
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