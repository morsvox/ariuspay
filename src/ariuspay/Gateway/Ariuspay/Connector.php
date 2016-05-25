<?php
namespace ariuspay\Gateway\Ariuspay;
use \ariuspay\Gateway\BaseConnector as BaseConnector;
use \ariuspay\Gateway\Ariuspay\Request as AriuspayRequest;
use \ariuspay\Gateway\Aruispay\Exception  as ariuspayGatewayAruispayException;
class Connector extends BaseConnector{
    public function __construct($req=false){
        if($req!==false) $this->setRequest($req);
    }
    public function setRequest($req){
        if($req instanceof AriuspayRequest) $this->_request = $req;
        else throw new ariuspayGatewayAruispayException("Object ".preg_replace("/\\\/",".",get_class($req))." is not instance of Ariuspay Request object.",500);
    }
}
?>
