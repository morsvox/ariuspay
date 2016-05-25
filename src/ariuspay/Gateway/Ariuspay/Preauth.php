<?php
namespace ariuspay\Gateway\Ariuspay;
use \ariuspay\Gateway\BaseConnector as BaseConnector;
use \ariuspay\Gateway\Ariuspay\PreauthRequest as Request;
use \ariuspay\Gateway\Ariuspay\Exception  as ariuspayGatewayAruispayException;
class Preauth extends BaseConnector{
    public function __construct($data=[]){
        $this->_request = new Request($data);
    }
};
?>
