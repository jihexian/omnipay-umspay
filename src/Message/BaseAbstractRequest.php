<?php

namespace Omnipay\UmsPay\Message;

use Omnipay\Common\Message\AbstractRequest;

/**
 * Class BaseAbstractRequest
 * @package Omnipay\UmsPay\Message
 */
abstract class BaseAbstractRequest extends AbstractRequest
{


    public function setAppId($appId)
    {
        $this->setParameter('subAppId', $appId);
    }


    public function getAppId()
    {
        return $this->getParameter('subAppId');
    }


    /**
     * @return mixed
     */
    public function getApiKey()
    {
        return $this->getParameter('api_key');
    }


    /**
     * @param mixed $apiKey
     */
    public function setApiKey($apiKey)
    {
        $this->setParameter('api_key', $apiKey);
    }

    public function setMchId($mid)
    {
        $this->setParameter('mid', $mid);
    }
    public function setDivisionFlag($divisionFlag){
        $this->setParameter('divisionFlag', $divisionFlag);
        
    }
    public function getDivisionFlag(){
        return   $this->getParameter('divisionFlag');
        
    }

    public function getMchId()
    {
        return $this->getParameter('mid');
    }

    //机构号
    public function setTid($tid)
    {
        $this->setParameter('tid', $tid);
    }


    public function getTid()
    {
        return $this->getParameter('tid');
    }

    /**
     * @return mixed
     */
    public function getSubMchId()
    {
        return $this->getParameter('sub_mch_id');
    }


    /**
     * @param mixed $subMchId
     */
    public function setSubMchId($mchId)
    {
        $this->setParameter('sub_mch_id', $mchId);
    }

    /**
     * 子商户 app_id
     *
     * @return mixed
     */
    public function getSubAppId()
    {
        return $this->getParameter('sub_appid');
    }


    /**
     * @param mixed $subAppId
     */
    public function setSubAppId($subAppId)
    {
        $this->setParameter('sub_appid', $subAppId);
    }
}
