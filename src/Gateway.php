<?php

namespace Coatesap\PaymentSense;

use Coatesap\PaymentSense\Message\CompletePurchaseRequest;
use Coatesap\PaymentSense\Message\PurchaseRequest;
use Omnipay\Common\AbstractGateway;

/**
 * PaymentSense Gateway
 *
 * @link http://developers.paymentsense.co.uk/
 */
class Gateway extends AbstractGateway
{
    public function getName()
    {
        return 'PaymentSense';
    }

    public function getDefaultParameters()
    {
        return array(
            'merchantId' => '',
            'password' => '',
        );
    }

    public function getMerchantId()
    {
        return $this->getParameter('merchantId');
    }

    public function setMerchantId($value)
    {
        return $this->setParameter('merchantId', $value);
    }

    public function getPassword()
    {
        return $this->getParameter('password');
    }

    public function setPassword($value)
    {
        return $this->setParameter('password', $value);
    }

    public function purchase(array $parameters = array())
    {
        return $this->createRequest('\Coatesap\PaymentSense\Message\PurchaseRequest', $parameters);
    }

    public function completePurchase(array $parameters = array())
    {
        return $this->createRequest('\Coatesap\PaymentSense\Message\CompletePurchaseRequest', $parameters);
    }
}
