<?php
namespace ariuspay\Gateway\Ariuspay;
use \ariuspay\Gateway\BaseConnector as BaseConnector;
use \ariuspay\Gateway\Ariuspay\GetCardRefRequest as Request;
//use \ariuspay\Gateway\Ariuspay\GetCardRefResponse as Response;
use \ariuspay\Gateway\Aruispay\Exception  as ariuspayGatewayAruispayException;
class GetCardRef extends BaseConnector{
    public function __construct($data=[]){
        $this->_request = new Request($data);
        //$this->_operation = "get-card-info";
    }
}
?>
