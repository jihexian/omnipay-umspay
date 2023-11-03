<?php

namespace Omnipay\UmsPay;

/**
 * Class Gateway
 * @package Omnipay\UmsPay
 */
class Gateway extends BaseAbstractGateway
{
    public function getName()
    {
        return 'UmsPay';
    }


    public function getTradeType()
    {
        return 'MINI';
    }
}
