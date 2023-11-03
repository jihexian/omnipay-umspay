<?php

namespace Omnipay\UmsPay\Message;

use Omnipay\Common\Message\ResponseInterface;
use Omnipay\UmsPay\Helper;

/**
 * Class CreateOrderRequest
 *
 * @package Omnipay\UmsPay\Message
 * @link    
 * @method  CreateOrderResponse send()
 */
class CreateOrderRequest extends BaseAbstractRequest
{
    protected $endpoint = 'https://test-api-open.chinaums.com/v1/netpay/wx/unified-order';

    /**
     * Get the raw data array for this message. The format of this varies from gateway to
     * gateway, but will usually be either an associative array, or a SimpleXMLElement.
     *
     * @return mixed
     */
    public function getData()
    {
        $this->validate(
            'mid',
            'tid',
            'merOrderId',
            'notifyUrl',
            'tradeType',
            'subOpenId',
            'subAppId',
        );

        $tradeType = strtoupper($this->getTradeType());

        if ($tradeType == 'MINI') {
            $this->validate('subOpenId');
        }

        $data = array(
        
            'mid'              => $this->getMchId(),
            'tid'              => $this->getTid(),
            // 'device_info'      => $this->getDeviceInfo(),//*
            // 'body'             => $this->getBody(),//*
             'orderDesc'           => $this->getDetail(),
            // 'attach'           => $this->getAttach(),
            'subAppId'         => $this->getAppId(),
            'subOpenId'           => $this->getOpenId(),
            'divisionFlag'     => $this->getDivisionFlag(),
            // 'out_trade_no'     => $this->getOutTradeNo(),//*
            // 'fee_type'         => $this->getFeeType(),
            // 'total_fee'        => $this->getTotalFee(),//*
            // 'spbill_create_ip' => $this->getSpbillCreateIp(),//*
            // 'time_start'       => $this->getTimeStart(),//yyyyMMddHHmmss
            'expireTime'      => $this->getTimeExpire(),//yyyyMMddHHmmss
            'goodsTag'        => $this->getGoodsTag(),
            'notifyUrl'       => $this->getNotifyUrl(), //*
            'tradeType'       => $this->getTradeType(), //*
            // 'limit_pay'        => $this->getLimitPay(),
            // 'nonce_str'        => md5(uniqid()),//*


        );

        $data = array_filter($data);

        $data['sign'] = Helper::sign($data, $this->getApiKey());

        return $data;
    }


    /**
     * @return mixed
     */
    public function getTradeType()
    {
        return $this->getParameter('tradeType');
    }


    /**
     * @return mixed
     */
    public function getDeviceInfo()
    {
        return $this->getParameter('device_Info');
    }


    /**
     * @return mixed
     */
    public function getBody()
    {
        return $this->getParameter('body');
    }

    /**
     * @param mixed $detail
     */
    public function setDetail($detail)
    {
        $this->setParameter('orderDesc', $detail);
    }

    /**
     * @return mixed
     */
    public function getDetail()
    {
        return $this->getParameter('orderDesc');
    }


    /**
     * @return mixed
     */
    public function getAttach()
    {
        return $this->getParameter('attach');
    }


    /**
     * @return mixed
     */
    public function getOutTradeNo()
    {
        return $this->getParameter('out_trade_no');
    }


    /**
     * @return mixed
     */
    public function getFeeType()
    {
        return $this->getParameter('fee_type');
    }


    /**
     * @return mixed
     */
    public function getTotalFee()
    {
        return $this->getParameter('total_fee');
    }


    /**
     * @return mixed
     */
    public function getSpbillCreateIp()
    {
        return $this->getParameter('spbill_create_ip');
    }


    /**
     * @return mixed
     */
    public function getTimeStart()
    {
        return $this->getParameter('time_start');
    }


    /**
     * @return mixed
     */
    public function getTimeExpire()
    {
        return $this->getParameter('expireTime');
    }


    /**
     * @return mixed
     */
    public function getGoodsTag()
    {
        return $this->getParameter('goodsTag');
    }


    /**
     * @return mixed
     */
    public function getNotifyUrl()
    {
        return $this->getParameter('notifyUrl');
    }


    /**
     * @return mixed
     */
    public function getLimitPay()
    {
        return $this->getParameter('limit_pay');
    }


    /**
     * @return mixed
     */
    public function getOpenId()
    {
        return $this->getParameter('subOpenId');
    }


    /**
     * @param mixed $deviceInfo
     */
    public function setDeviceInfo($deviceInfo)
    {
        $this->setParameter('device_Info', $deviceInfo);
    }


    /**
     * @param mixed $body
     */
    public function setBody($body)
    {
        $this->setParameter('body', $body);
    }



    /**
     * @param mixed $attach
     */
    public function setAttach($attach)
    {
        $this->setParameter('attach', $attach);
    }


    /**
     * @param mixed $outTradeNo
     */
    public function setOutTradeNo($outTradeNo)
    {
        $this->setParameter('out_trade_no', $outTradeNo);
    }


    /**
     * @param mixed $feeType
     */
    public function setFeeType($feeType)
    {
        $this->setParameter('fee_type', $feeType);
    }


    /**
     * @param mixed $totalFee
     */
    public function setTotalFee($totalFee)
    {
        $this->setParameter('total_fee', $totalFee);
    }


    /**
     * @param mixed $spbillCreateIp
     */
    public function setSpbillCreateIp($spbillCreateIp)
    {
        $this->setParameter('spbill_create_ip', $spbillCreateIp);
    }


    /**
     * @param mixed $timeStart
     */
    public function setTimeStart($timeStart)
    {
        $this->setParameter('time_start', $timeStart);
    }


    /**
     * @param mixed $timeExpire
     */
    public function setTimeExpire($timeExpire)
    {
        $this->setParameter('expireTime', $timeExpire);
    }


    /**
     * @param mixed $goodsTag
     */
    public function setGoodsTag($goodsTag)
    {
        $this->setParameter('goodsTag', $goodsTag);
    }


    public function setNotifyUrl($notifyUrl)
    {
        $this->setParameter('notifyUrl', $notifyUrl);
    }


    /**
     * @param mixed $tradeType
     */
    public function setTradeType($tradeType)
    {
        $this->setParameter('tradeType', $tradeType);
    }


    /**
     * @param mixed $limitPay
     */
    public function setLimitPay($limitPay)
    {
        $this->setParameter('limit_pay', $limitPay);
    }


    /**
     * @param mixed $openId
     */
    public function setOpenId($openId)
    {
        $this->setParameter('subOpenId', $openId);
    }


    /**
     * Send the request with specified data
     *
     * @param  mixed $data The data to send
     *
     * @return ResponseInterface
     * @throws \Psr\Http\Client\Exception\NetworkException
     * @throws \Psr\Http\Client\Exception\RequestException
     */
    public function sendData($data)
    {
        $body     = Helper::array2xml($data);
        $response = $this->httpClient->request('POST', $this->endpoint, [], $body)->getBody();
        $payload  = Helper::xml2array($response);

        return $this->response = new CreateOrderResponse($this, $payload);
    }
}
