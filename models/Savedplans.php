<?php
/**
 * Created by PhpStorm.
 * User: jonsnow
 * Date: 9/30/17
 * Time: 1:14 AM
 */

class Savedplans
{

    var $savedplanid;
    var $planid;
    var $userid;

    /**
     * @return mixed
     */
    public function getSavedplanid()
    {
        return $this->savedplanid;
    }

    /**
     * @param mixed $savedplanid
     */
    public function setSavedplanid($savedplanid)
    {
        $this->savedplanid = $savedplanid;
    }

    /**
     * @return mixed
     */
    public function getPlanid()
    {
        return $this->planid;
    }

    /**
     * @param mixed $planid
     */
    public function setPlanid($planid)
    {
        $this->planid = $planid;
    }

    /**
     * @return mixed
     */
    public function getUserid()
    {
        return $this->userid;
    }

    /**
     * @param mixed $userid
     */
    public function setUserid($userid)
    {
        $this->userid = $userid;
    }


}