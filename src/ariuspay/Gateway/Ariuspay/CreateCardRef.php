<?php
namespace ariuspay\Gateway\Ariuspay;
use \ariuspay\Gateway\BaseConnector as BaseConnector;
use \ariuspay\Gateway\Ariuspay\CreateCardRefRequest as CreateCardRefRequest;
//use \ariuspay\Gateway\Ariuspay\GetCardRefResponse as Response;
use \ariuspay\Gateway\Aruispay\Exception  as ariuspayGatewayAruispayException;
class CreateCardRef extends BaseConnector{
    public function __construct($data=[]){
        $this->_request = new CreateCardRefRequest($data);
        //$this->_operation = "get-card-info";
    }
}
?>
