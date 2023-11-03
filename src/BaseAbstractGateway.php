<?php

namespace Omnipay\UmsPay;

use Omnipay\Common\AbstractGateway;

abstract class BaseAbstractGateway extends AbstractGateway
{
    public function setTradeType($tradeType)
    {
        $this->setParameter('trade_type', $tradeType);
    }


    public function setAppId($appId)
    {
        $this->setParameter('subAppId', $appId);
    }


    public function getAppId()
    {
        return $this->getParameter('subAppId');
    }


    // public function setApiKey($apiKey)
    // {
    //     $this->setParameter('api_key', $apiKey);
    // }


    // public function getApiKey()
    // {
    //     return $this->getParameter('api_key');
    // }


    public function setMchId($mid)
    {
        $this->setParameter('mid', $mid);
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
     * 子商户id
     *
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

    public function setDivisionFlag($divisionFlag){
        $this->setParameter('divisionFlag', $divisionFlag);
        
    }
    public function getDivisionFlag(){
        return   $this->getParameter('divisionFlag');
        
    }

    public function setNotifyUrl($url)
    {
        $this->setParameter('notifyUrl', $url);
    }


    public function getNotifyUrl()
    {
        return $this->getParameter('notifyUrl');
    }
    
    public function setReturnUrl($url)
    {
        $this->setParameter('returnUrl', $url);
    }


    public function getReturnUrl()
    {
        return $this->getParameter('returnUrl');
    }


    /**
     * @return mixed
     */
    public function getCertPath()
    {
        return $this->getParameter('cert_path');
    }


    /**
     * @param mixed $certPath
     */
    public function setCertPath($certPath)
    {
        $this->setParameter('cert_path', $certPath);
    }


    /**
     * @return mixed
     */
    public function getKeyPath()
    {
        return $this->getParameter('key_path');
    }


    /**
     * @param mixed $keyPath
     */
    public function setKeyPath($keyPath)
    {
        $this->setParameter('key_path', $keyPath);
    }


    /**
     * @param array $parameters
     *
     * @return \Omnipay\WechatPay\Message\CreateOrderRequest
     */
    public function purchase($parameters = array())
    {
        $parameters['trade_type'] = $this->getTradeType();

        return $this->createRequest('\Omnipay\UmsPay\Message\CreateOrderRequest', $parameters);
    }


    public function getTradeType()
    {
        return $this->getParameter('trade_type');
    }


    /**
     * @param array $parameters
     *
     * @return \Omnipay\WechatPay\Message\CompletePurchaseRequest
     */
    public function completePurchase($parameters = array())
    {
        return $this->createRequest('\Omnipay\UmsPay\Message\CompletePurchaseRequest', $parameters);
    }

    public function completeRefund($parameters = array())
    {
        return $this->createRequest('\Omnipay\UmsPay\Message\CompleteRefundRequest', $parameters);
    }


    /**
     * @param array $parameters
     *
     * @return \Omnipay\WechatPay\Message\QueryOrderRequest
     */
    public function query($parameters = array())
    {
        return $this->createRequest('\Omnipay\WechatPay\Message\QueryOrderRequest', $parameters);
    }


    /**
     * @param array $parameters
     *
     * @return \Omnipay\WechatPay\Message\CloseOrderRequest
     */
    public function close($parameters = array())
    {
        return $this->createRequest('\Omnipay\WechatPay\Message\CloseOrderRequest', $parameters);
    }


    /**
     * @param array $parameters
     *
     * @return \Omnipay\WechatPay\Message\RefundOrderRequest
     */
    public function refund($parameters = array())
    {
        return $this->createRequest('\Omnipay\WechatPay\Message\RefundOrderRequest', $parameters);
    }


    /**
     * @param array $parameters
     *
     * @return \Omnipay\WechatPay\Message\QueryOrderRequest
     */
    public function queryRefund($parameters = array())
    {
        return $this->createRequest('\Omnipay\WechatPay\Message\QueryRefundRequest', $parameters);
    }


    /**
     * @param array $parameters
     *
     * @return \Omnipay\WechatPay\Message\PromotionTransferRequest
     */
    public function transfer($parameters = array())
    {
        return $this->createRequest('\Omnipay\WechatPay\Message\PromotionTransferRequest', $parameters);
    }


    /**
     * @param array $parameters
     *
     * @return \Omnipay\WechatPay\Message\QueryTransferRequest
     */
    public function queryTransfer($parameters = array())
    {
        return $this->createRequest('\Omnipay\WechatPay\Message\QueryTransferRequest', $parameters);
    }


    /**
     * @param array $parameters
     *
     * @return \Omnipay\WechatPay\Message\DownloadBillRequest
     */
    public function downloadBill($parameters = array())
    {
        return $this->createRequest('\Omnipay\WechatPay\Message\DownloadBillRequest', $parameters);
    }

    /**
     * @param array $parameters
     *
     * @return \Omnipay\WechatPay\Message\PayBankRequest
     */
    public function payBank($parameters = array())
    {
        return $this->createRequest('\Omnipay\WechatPay\Message\PayBankRequest', $parameters);
    }

    /**
     * @param array $parameters
     *
     * @return \Omnipay\WechatPay\Message\GetPublicKeyRequest
     */
    public function getPublicKey($parameters = array())
    {
        return $this->createRequest('\Omnipay\WechatPay\Message\GetPublicKeyRequest', $parameters);
    }

    /**
     * @param array $parameters
     *
     * @return \Omnipay\WechatPay\Message\QueryBankRequest
     */
    public function queryBank($parameters = array())
    {
        return $this->createRequest('\Omnipay\WechatPay\Message\QueryBankRequest', $parameters);
    }

    /**
     * @param array $parameters
     *
     * @return \Omnipay\WechatPay\Message\CouponTransfersResponse
     */
    public function sendCoupon($parameters = array())
    {
        return $this->createRequest('\Omnipay\WechatPay\Message\CouponTransfersRequest', $parameters);
    }
}
